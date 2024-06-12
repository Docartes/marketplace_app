<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client; 

class ProductController extends Controller
{
    public static function getProduct() {
        $client = new Client();
        $url = "https://fakestoreapi.com/products";

        try {
            $res = $client->get($url); 

            $data = json_decode($res->getBody(), true);

            return $data; 
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
