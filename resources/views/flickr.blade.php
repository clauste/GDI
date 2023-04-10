@extends('layout.app')

@section('stylesheets')
@endsection

@section('content')

    <div class="content">
        <div class="content-header">
            <div style="padding-bottom: 10px;">
                <h3>Flickr</h3>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach($flickr as $c)
                <div class="col-md-2">
                    <a href="">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ $c['media']['m'] }}" style="object-fit: fill; width: 100%; height: 200px;">
                            </div>
                            <div class="content">
                                <h4 class="text-black">{{ $c['title'] }}</h4>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection