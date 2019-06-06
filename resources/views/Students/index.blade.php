@extends('layouts/master')
@section('content')
    <div class="btn btn-success"><a href="{{url('students/create')}}" style="color: yellow">ADD STUDENTS</a></div>
    <div class="box-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                           aria-describedby="example2_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                STT
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">Age
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cats as $cat)
                            <tr>
                                <td>{{$cat->id}}</td>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->age}}</td>
                                <td>

                                    <a href="{{url('students/'.$cat->id.'/edit')}}"
                                       class="btn btn-success">Sửa</a>

                                    <span><form action="{{ route('students.destroy', ['id' => $cat->id]) }}"
                                          class="submitDelete" method="post">
                                        {!! csrf_field() !!}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-primary">Xóa</button>
                                    </form></span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection