<?php

namespace Quality;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    
    public function path() {
        return route('articles.show', [
            'locale' => session('lang'),
            'article' => $this->id
        ]);
    }
    
    public function getPictureAttribute($val) {
        if(strpos($val, 'http') !== 0) {
            return asset('/upload/'.$val);
        } else {
            return $val;
        }
    }
    
    public function getBodyAttribute($val) {
        if(session('lang') == 'fr') {
            return $this->body_fr;
        } else {
            return $val;
        }
    }
    
    public function getTitleAttribute($val) {
        if(session('lang') == 'fr') {
            return $this->title_fr;
        } else {
            return $val;
        }
    }
    
    public function setTitleAttribute($val) {
        if(session('lang') == 'fr') {
            $this->attributes['title_fr'] = $val;
        } else {
            $this->attributes['title'] = $val;
        }
    }
    
}
