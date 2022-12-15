@extends('layouts.admin',['tbl'=>true])

@section('content')
    <div class="row mt-5">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="w-100">
                        {{$title2}}
                        <a href="{{route('admin.page.create')}}" class="btn btn-primary float-left">افزودن</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter text-nowrap table-bordered border-bottom " id="tbl_1">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">آی دی</th>
                                <th class="border-bottom-0">اسلاگ</th>
                                <th class="border-bottom-0">تعداد محتوا</th>
                                <th class="border-bottom-0">وضعیت</th>
                                <th class="border-bottom-0">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if ($items->count())
                                    @foreach($items as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->title}}</td>
                                            <td>
                                                ({{$row->contents()}})
                                                <a href="{{route('admin.content.show',$row->id)}}" class="text-info"> مدیریت محتوا </a>
                                            </td>
                                            <td>{{$row->status=='active'?'فعال':'غیرفعال'}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('admin.page.edit',$row->id)}}" class="action-btns1 ml-2">
                                                        <i class="feather feather-edit-2  text-success"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="ویرایش"></i>
                                                    </a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.page.destroy', $row->id] ]) !!}
                                                        <button class="action-btns1" data-toggle="tooltip"
                                                                data-placement="top" title="حذف"
                                                                onclick="return confirm('برای حذف مطمئن هستید؟')">
                                                            <i class="feather feather-trash-2 text-danger"></i>
                                                        </button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

