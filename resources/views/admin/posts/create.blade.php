@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ավելացնել Poster</h1>
                    </div>
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
                    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="posti Անուն">
                            @error('title')
                                <div>
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="content" placeholder="posti content"></textarea>
                            @error('content')
                            <div>
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label" >Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>yntreq kategorian</label>
                            <select multiple="" name="category_id" class="form-control">
                                @foreach($category as $categories)
                                <option>{{$categories->title}}</option>
                                @endforeach
                            </select>
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
