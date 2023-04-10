@extends('backend.layout.app')
@section('title')
    Picture Flickr
@endsection

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('public/js/datatables/jquery.dataTables.min.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h4 class="card-title">Picture on Flickr</h4>
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
            <div class="card">
                <div class="card-body">
                    <div class="card-header d-flex justify-content-end">
                        <form method="post" action="{{ route('flickr.search') }}" novalidate enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                <input type="text" id="tag" name="tag" class="form-control" placeholder="Input tag">
                                </div>
                                <div class="col-md-6">
                                <button type="submit">search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 15%;">Name</th>
                                    <th style="width: 20%;">Author</th>
                                    <th style="width: 20%;">Tag</th>
                                    <th style="width: 30%;">Pic</th>
                                    <th class="text-center" style="width: 10%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 0; ?>
                                @foreach($flickr as $img)
                                <tr>
                                    <td><?php echo $index += 1; ?></td>
                                    <td>{{ $img['title'] }}</td>
                                    <td>{{ $img['author'] }}</td>
                                    <td>{{ $img['tags'] }}</td>
                                    <td>
                                        <img src="{{ $img['media']['m'] }}" alt="" style="object-fit: fill; width: 100%; max-height: 400px">
                                        <!-- {{ $img['description'] }} -->
                                    </td>
                                    <td class="text-center">
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{!! asset('public/js/datatables/jquery.dataTables.min.js') !!}"></script>

<script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>
@endsection