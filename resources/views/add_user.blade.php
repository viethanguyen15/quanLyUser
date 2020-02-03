@extends('master.master')
@section('title', 'add user')
@section('content')
<article class="content dashboard-page">
    <div class="col-md-12">
            <div class="card card-block sameheight-item" style="height: 720px;">
                <div class="title-block">
                    <h3 class="title"> THÊM THÀNH VIÊN </h3>
                    <hr>
                </div>
                <form method="POST">
                    @csrf
                    <div class="form-group" style="">
                        <label class="control-label">Họ Và Tên</label>
                        <input name="fullname" type="text" class="form-control underlined">
                        {{showErrors($errors,'fullname')}}
                        <?php echo "<span style='color:red;'>" . $errors->first('fullname') . "</span>"; ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Số điện thoại</label>
                        <input name="phone" type="text" class="form-control underlined">
                        {{showErrors($errors,'phone')}}
                    </div>
                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input name="address" type="text" class="form-control underlined">
                        {{showErrors($errors,'address')}} 
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mã SV</label>
                        <input name="id_number" type="text" class="form-control underlined">
                        {{showErrors($errors,'id_number')}} 
                    </div>            
                    <div align='right'>
                            <button type="submit" name="add" class="btn btn-success">Thêm</button>
                            <button class="btn btn-primary" type="reset" >Nhập lại</button>
                    </div>
                </form>
            </div>
        </div>
</article>                
@endsection
            
            