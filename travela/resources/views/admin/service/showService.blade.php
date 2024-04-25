@extends('admin.index')
@section('title')
    Service Details
@endsection

@section('adminc')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Rakib Khan</li>
                        </ol>
                    </div>
                </div>


                <div>
                    <div class="card card-primary">
                        <div class="card-header bg-warning">
                            <h1 class="text-center">Service Details</h1>
                            <a href="{{ route('ser.index') }}" class="btn btn-primary text-left">Back To List</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card card-body">

                            <h2>Photo: <img src="{{ asset('images/' . $serdata->photo) }}" alt="title" height="100"></h2>
                            <h1>Title: {{ $serdata->title }}</h1>
                            <h1>Content: {{ $serdata->content }}</h1>
                            <h1>Btn: {{ $serdata->btn }}</h1>
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

    </div>
@endsection
