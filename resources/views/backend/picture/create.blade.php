@extends('backend.layout.app')
@section('title')
    Add Picture
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form method="post" action="{{ !request()->routeIs('picture.edit') ? route('picture.store') : route('picture.update', $imageItem) }}" novalidate enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2 class="box-title">{{ !request()->routeIs('picture.edit') ? 'Add' : 'Edit' }} Picture</h2>
                                            </div>
                                            <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary col-md-2" style="float: right; margin-top: 10px;" id="publish">Publish</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="box-body">
                                        @if(!request()->routeIs('picture.edit'))
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Input Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Tag</label>
                                            <input type="text" id="tag" name="tag" class="form-control" placeholder="Input tag">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea type="text" id="description" name="description" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group btn btn-secondary">
                                            <label for="image"><strong>upload image</strong></label>
                                        </div>
                                        <div class="form-group">
                                            <img id="imagePreview2" src="#" class="wow fadeIn" style="display: none; object-fit: fit; width: 100%;">
                                            <input type="file" name="image" id="image" class="form-control" required">
                                        </div>
                                        @else
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Input Name" value="{{ $imageItem->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Tag</label>
                                                <input type="text" id="tag" name="tag" class="form-control" placeholder="Input tag">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea type="text" id="description" name="description" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group btn btn-secondary">
                                                <label for="image"><strong>upload image</strong></label>
                                            </div>
                                            <div class="form-group">
                                            <img id="imagePreview2" src="{{ asset('assets/picture/' . $imageItem->image) }}" class="wow fadeIn" style="object-fit: fill; width: 100%; max-height: 400px">
                                                <input type="file" name="image" id="image" class="form-control" required">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>


<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script>
    function imagePreview2(input){
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreview2').css('display', '');
                $('#imagePreview2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#image').change(function () {
        imagePreview2(this);
    });
</script>
@endsection

@section('scripts')

<script>
    $(document).ready(function(){
        
    });
</script>
@endsection