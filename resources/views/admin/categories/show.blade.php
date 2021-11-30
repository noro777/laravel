@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ավելացնել Կատեգորյաներ</h1>
                    </div><!-- /.col -->
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Dashboard v1</li>--}}
{{--                        </ol>--}}
{{--                    </div><!-- /.col -->--}}
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
                    <table id="example1" class="mt-3 table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Id</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>

                        </thead>
                            <tbody>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <a href="{{route('category.edit',$category->id)}}"><i class="fas fa-pen"></i></a>
                                <form action="{{route('category.delete',$category->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button>
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>
                            </tr></tbody>
                    </table>

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
