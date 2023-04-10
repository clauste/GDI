@extends('backend.layout.app')
@section('title')
    Picture List
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
                    <h4 class="card-title">User</h4>
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
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 15%;">Name</th>
                                    <th style="width: 20%;">email</th>
                                    <th class="text-center" style="width: 10%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 0; ?>
                                @foreach($user as $u)
                                <tr>
                                    <td><?php echo $index += 1; ?></td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td class="text-center">
                                        <a class="btn" href="">
                                            <i class="fa fa-eye"></i>
                                        </a>
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