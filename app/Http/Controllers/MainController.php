<?php

namespace Quality\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Quality\Article;
use Quality\Library\Api;
use Quality\Mail\BaseEmail;
use Quality\Speaker;
use Quality\Sponsor;

class MainController extends Controller {
    
    protected $token = null;
    
    public function getHome() {
        $articles = Article::latest()->take(4)->get();
        
        $tweets = $this->getTweets();
        $sponsor = Sponsor::all();
        
        if($sponsor->count() > 5) {
            $sponsor = $sponsor->random(5);
        }
        
        return view('main.home', compact('articles', 'tweets', 'sponsor'));
    }
    
    public function getProgram() {
        return view('program');
    }
    
    public function getContact() {
        return view('contact');
    }
    
    public function postContact() {
        $this->validate(request(), [
            'firstname' => ['required'],
            'lastname'  => ['required'],
            'email'     => ['required', 'email'],
            'company'   => ['required'],
            'subject'   => ['required'],
            'message'   => ['required'],
        ]);
        
        Mail::to(request('email'))
            ->send(new BaseEmail((object) request()->all()));
        
        return view('thanks');
    }
    
    public function getSpeakers() {
        $speakers = Speaker::all();
        
        return view('speakers', compact('speakers'));
    }
    
    public function getRegistration() {
        return view('registration');
    }
    
    public function getAccomodations() {
        return view('accomodations');
    }
    
    private function formatTweets($tweets) {
        $collection = collect();
        Carbon::setLocale(session('lang'));
        
        foreach ($tweets->statuses as $tweet) {
            $posted = new Carbon($tweet->created_at);
            $temp = [
                'posted_at' => $posted->diffForHumans(),
                'user'      => (object) [
                    'name'    => $tweet->user->screen_name,
                    'link'    => '@' . strtolower($tweet->user->screen_name),
                    'picture' => $tweet->user->profile_image_url,
                ],
                'text'      => $tweet->text
            ];
            
            $collection->push((object) $temp);
        }
        
        return $collection;
    }
    
    protected function getTweets() {
        if (is_null($this->token)) {
            $response = Api::twitterAuth();
            if (is_object($response) && property_exists($response, 'access_token')) {
                $this->token = $response->access_token;
            }
        }
        
        if (!is_null($this->token)) {
            $tweets = $this->formatTweets(Api::get('/1.1/search/tweets.json', [
                'q'           => '#Dota2',
                'result_type' => 'recent',
                'count'       => 10
            ], [
                'Authorization' => 'Bearer ' . $this->token
            ]));
            
            if (is_object($tweets) && property_exists($tweets, 'errors')) {
                return collet();
            }
            
        } else {
            $tweets = collect();
        }
        
        return $tweets;
    }
    
}
