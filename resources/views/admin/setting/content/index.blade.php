@extends('layouts.admin',['tbl'=>true])

@section('content')
    <div class="row mt-5">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header border-0">
                    <h4 class="w-100">
                        <a href="{{route('admin.content.create')}}" class="btn btn-primary float-left">افزودن</a>

                        <div class="dropdown float-right">
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(isset($id)) {{\App\Models\Page::find($id)->title}} @else صفحه را انتخاب کنید @endif
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <input class="form-control" id="myInput" type="text" placeholder="کاربر را جستحو کنید">
                                @foreach(\App\Models\Page::where('status','active')->get(['id','title']) as $page)
                                    <li style="padding: 6px;"><a class="text-dark" href="{{route('admin.content.show',$page->id)}}" title="انتخاب صفحه">{{$page->title}}</a></>
                                @endforeach
                            </div>
                        </div>
                        
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter text-nowrap table-bordered border-bottom " id="tbl_1">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">ای دی</th>
                                <th class="border-bottom-0">اسلاگ صفحه</th>
                                <th class="border-bottom-0">عنوان</th>
                                <th class="border-bottom-0">سکشن</th>
                                <th class="border-bottom-0">ترتیب</th>
                                <th class="border-bottom-0">وضعیت</th>
                                <th class="border-bottom-0">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if ($items)
                                    @foreach($items as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->page()?$row->page()->title:'________'}}</td>
                                            <td>{{$row->title}}</td>
                                            <td>@switch($row->section)
                                                    @case(1)
                                                    آکاردیون
                                                        @break
                                                    @case(2)
                                                    داخل صفحه
                                                        @break
                                                    @default
                                                        سایر
                                                @endswitch
                                            </td>
                                            <td>{{$row->part}}</td>
                                            <td>{{$row->status=='active'?'فعال':'غیرفعال'}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('admin.content.edit',$row->id)}}" class="action-btns1 ms-2">
                                                        <i class="feather feather-edit-2  text-success"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="ویرایش"></i>
                                                    </a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.content.destroy', $row->id] ]) !!}
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
