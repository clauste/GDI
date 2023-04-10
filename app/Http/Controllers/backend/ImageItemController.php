<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use App\Models\ImageItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;

use Validator;

class ImageItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = ImageItem::all();
        return view('backend.picture.index', compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.picture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'                  => 'required',
            'image'              => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
  
        $messages = [
            'name.required'         => 'Please fill name',
            'image.required'    => 'Please upload image'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $img = request('image');
        $imgname = uniqid() . date('ymd') . time() . Str::slug('image'.$request->name) . '.' . $img->getClientOriginalExtension();

        ImageItem::create([
            'name' => $request->name,
            'owner' => 1,
            'tag' => $request->tag,
            'description' => $request->description,
            'image' => $imgname
        ]);

        $img->move(public_path('assets/picture'), $imgname);

        return redirect()->route('picture.index')->with('message', 'Succesfuly add picture');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageItem  $imageItem
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        try {
            $imageItem = ImageItem::all();
            return response()->json($imageItem, Response::HTTP_OK);
        } catch (QueryException $e) {
            $error = [
                'error' => $e->getMessage()
            ];
            return response()->json($error, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageItem  $imageItem
     * @return \Illuminate\Http\Response
     */
    public function edit($imageItem)
    {
        $imageItem = ImageItem::find($imageItem);
        return view('backend.picture.create', compact('imageItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageItem  $imageItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageItem $imageItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageItem  $imageItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($imageItem)
    {
        $img = ImageItem::find($imageItem);
        $img->delete();
        return redirect()->route('picture.index')->with('message', 'Succesfuly delete picture');
    }

    //Other
    public function flickr_index(){
        $flickr = "https://api.flickr.com/services/feeds/photos_public.gne?tags=&format=json&nojsoncallback=1";

        $response = Http::get($flickr);

        $data = $response->json();
        $flickr = $data['items'];
        // dd($flickr);
        return view('backend.picture.flickr', compact('flickr'));
    }

    public function flickr_search(request $request){
        $flickr = "https://api.flickr.com/services/feeds/photos_public.gne?tags=" . $request->tag . "&format=json&nojsoncallback=1";

        $response = Http::get($flickr);

        $data = $response->json();
        $flickr = $data['items'];
        // dd($flickr);
        return view('backend.picture.flickr', compact('flickr'));
    }
}
