@extends('layouts.admin',['req'=>true,'file_upload'=>true])
@section('content')
    <div class="row mt-5" style="font-size: 14px">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">
                        {{$title}} ویرایش
                    </h4>
                </div>
                <div class="card-body">
                    {{Form::open(array('route' => array('admin.page.update' , $item->id ), 'method' => 'PATCH','files'=>true)) }}
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                {{Form::label('title', ' اسلاگ *')}}
                                {{Form::text('title', $item->title, array('class' => 'form-control','required'))}}
                            </div>
                        </div>

                        <div class="col-lg">
                            <div class="form-group">
                                <label>منطقه</label>
                                <select name="status" class="form-control form-control-lg">
                                    <option value="active" {{$item->status=='active'?'selected':''}}>فعال</option>
                                    <option value="pending" {{$item->status=='pending'?'selected':''}}>غیرفعال</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 text-left">
                            <hr/>
                            {{Form::submit('ذخیره',array('class'=>'btn btn-primary','onclick'=>"return confirm('برای ارسال فرم مطمئن هستید؟')"))}}
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection






