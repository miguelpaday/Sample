<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;
use Guzzle\Http\Exception\ClientErrorResponseException;

class submitController extends Controller
{
    //
    public function index(){
        
    }

    public function show(Request $request){
            $value1 = "380c78a60efde9ebe96d99d229bd4fdf43d176e366e443672e1a042efdb89748";

            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => '380c78a60efde9ebe96d99d229bd4fdf43d176e366e443672e1a042efdb89748',
            ];
            
            $client = new GuzzleClient([
                'headers' => $headers
            ]);
            
            $body = '{
                "key" : '.$value1.',
            }';
            
            $r = $client->request('get', 'https://localhost:3333/api/templates/'.$request->name,[
                // 'body' => $body,
                'verify' => false
            ]);
            $response = $r->getBody()->getContents();
            $arrResponse = json_decode($response);

            return view("template.template2")->with("templatelist", $arrResponse);
    
    }

    public function showAll(){
            $value1 = "380c78a60efde9ebe96d99d229bd4fdf43d176e366e443672e1a042efdb89748";

            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => '380c78a60efde9ebe96d99d229bd4fdf43d176e366e443672e1a042efdb89748',
            ];
            
            $client = new GuzzleClient([
                'headers' => $headers
            ]);
            
            $body = '{
                "key" : '.$value1.',
            }';
            
            $r = $client->request('get', 'https://localhost:3333/api/templates/',[
                // 'body' => $body,
                'verify' => false
            ]);
            $response = $r->getBody()->getContents();
            $arrResponse = json_decode($response);
            
            return view("template.template")->with("templatelist", $arrResponse);
    }

    public function create(Request $request){
            $value1 = "380c78a60efde9ebe96d99d229bd4fdf43d176e366e443672e1a042efdb89748";

            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => '380c78a60efde9ebe96d99d229bd4fdf43d176e366e443672e1a042efdb89748',
            ];
            
            $client = new GuzzleClient([
                'headers' => $headers
            ]);
            
            $body = '{
                "name" : "'.$request->name.'",
                "text" : "'.$request->template_text.'"
            }';
            
            $r = $client->request('post', 'https://localhost:3333/api/templates/',[
                'body' => $body,
                'verify' => false
            ]);

            $response = $r->getBody()->getContents();
            $arrResponse = json_decode($response);
    }
}
