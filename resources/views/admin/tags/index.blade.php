@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Տեգեր</h1>
                    </div><!-- /.col -->
                    -- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <a href="{{route('tag.create')}}" class="btn btn-block btn-primary">Add</a>
                    </div>
                    <table id="example1" class="mt-3 table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Id</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">deystvia</th>

                        </thead>
                    @foreach($data as $datas)

                            <tbody>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">{{$datas->id}}</td>
                                <td>{{$datas->title}}</td>
                                <td>
                                    <a href="{{route('tag.show',$datas->id)}}"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('tag.edit',$datas->id)}}"><i class="fas fa-pen"></i></a>
                                    <form action="{{route('tag.delete',$datas->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button>
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </form>

                                </td>
                            </tr></tbody>


                    @endforeach
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
