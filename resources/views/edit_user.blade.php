@extends('master.master')
@section('title', 'edit user')
@section('content')
<article class="content dashboard-page">
    <div class="col-md-12">
            <div class="card card-block sameheight-item" style="height: 720px;">
                <div class="title-block">
                    <h3 class="title"> Sửa Thành Viên : {{$user->fullname}} </h3>
                    <hr>
                </div>
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Họ Và Tên</label>
                        <input name="fullname" type="text" class="form-control underlined" value="{{$user->fullname}}">
                        {{showErrors($errors,'fullname')}}
                    </div>
                    <div class="form-group">
                        <label  class="control-label">Số điện thoại</label>
                        <input name="phone" type="text" class="form-control underlined" value="{{$user->phone}}">
                        {{showErrors($errors,'phone')}} 
                    </div>
                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input name="address"  type="text" class="form-control underlined" value="{{$user->address}}">
                        {{showErrors($errors,'address')}} 
                    </div>
                    <div class="form-group">
                        <label class="control-label">Số CMT</label>
                        <input name="id_number" type="text" class="form-control underlined" value="{{$user->id_number}}">
                        {{showErrors($errors,'id_number')}} 
                    </div>                                               
                    <div align='right'>
                        <button type="submit" class="btn btn-success">Sửa</button>
                        <button class="btn btn-primary" type="reset" >Nhập lại</button>
                    </div>
                </form>
            </div>
        </div>
</article>
@endsection
           
            
            