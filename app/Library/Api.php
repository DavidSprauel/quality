<?php


namespace Quality\Library;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

abstract class Api {
    
    public static function getTwitterToken() {
        $public = env('TWITTER_PUBLIC');
        $private = env('TWITTER_PRIVATE');
    
        $bearerToken = base64_encode($public.':'.$private);
        
        return $bearerToken;
    }
    
    public static function twitterAuth() {
        $headers = [
            'Authorization' => 'Basic '.static::getTwitterToken(),
            'Content-Type' => 'application/x-www-form-urlencoded;charset=UTF-8'
        ];
        
        return static::post('/oauth2/token', [
            'grant_type' => 'client_credentials'
        ], $headers);
        
    }
    
    private static function request(string $method, string $uri, array $data, array $headers) {
        try {
            $client = new Client([
                'base_uri' => env('TWITTER_API'),
                'timeout'  => 2.0,
            ]);
            
            
            switch($method) {
                case 'get':
                    $response = $client->get($uri, ['query' => $data, 'headers' => $headers]);
                    break;
                
                case 'post':
                    $response = $client->post($uri, ['query' => $data, 'headers' => $headers]);
                    break;
                
                case 'put':
                    $response = $client->put($uri, ['query' => $data, 'headers' => $headers]);
                    break;
                
                case 'delete':
                    $response = $client->delete($uri, ['query' => $data, 'headers' => $headers]);
                    break;
            }
            
            
            return json_decode($response->getBody()->getContents());
        } catch (ClientException $e) {
            
            $response = json_decode($e->getResponse()->getBody()->getContents());
            
            return (object)[
                'code'     => $e->getResponse()->getStatusCode(),
                'messages' => $response->messages ?? $response->errors
            ];
        }
    }
    
    public static function get(string $uri, array $data, array $header) {
        return self::request('get', $uri, $data, $header);
    }
    
    public static function post(string $uri, array $data, array $header) {
        return self::request('post', $uri, $data, $header);
    }
    
    public static function put(string $uri, array $data, array $header) {
        return self::request('put', $uri, $data, $header);
    }
    
    public static function delete(string $uri, array $data, array $header) {
        return self::request('delete', $uri, $data, $header);
    }
    
}