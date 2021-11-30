@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ավելացնել Տեգերներ</h1>
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form action="{{route('tag.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Կատեգորյայի Անուն">
                            @error('title')
                                <div>
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Ավելացնել">
                    </form>

                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
