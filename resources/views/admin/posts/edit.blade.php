@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Փոփոխել postery</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form action="{{ route ('post.update', $post->id ) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="posti Անուն">
                            @error('title')
                                <div>
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="content" value="{{$post->content}}" placeholder="posti content">
                            @error('content')
                            <div>
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Փոփոխել">
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
