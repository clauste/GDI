@extends('layout.app')

@section('stylesheets')
@endsection

@section('content')

    <div class="content">
        <div class="content-header">
            <div style="padding-bottom: 10px;">
                <h3>Picture</h3>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @if($image->count() > 0)
                @foreach($image as $c)
                <div class="col-md-2">
                    <a href="">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/picture/'. $c->image) }}" style="object-fit: fill; width: 100%; height: 200px;">
                            </div>
                            <div class="content">
                                <h4 class="text-black">{{ $c->name }}</h4>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @else
                <div class="col-md-12">
                    <div class="alert alert-success">
                        No Data
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

@endsection