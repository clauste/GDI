<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\ImageItem;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage(){
        $image = ImageItem::all();
        return view('homepage', compact('image'));
    }

    public function flickr(){
        $flickr = "https://api.flickr.com/services/feeds/photos_public.gne?tags=&format=json&nojsoncallback=1";

        $response = Http::get($flickr);

        $data = $response->json();
        $flickr = $data['items'];
        // dd($flickr);
        return view('flickr', compact('flickr'));
    }
}
