@extends('master.master')
@section('title', 'user')
@section('content')
<article class="content dashboard-page">
    <section class="section">
        <div class="row sameheight-container">
            @if (session('newNotification'))
                <div class="alert alert-success">
                    <strong>
                        {{session('newNotification')}}
                    </strong>
                </div>
            @endif
            <div class="col-xl-12">
                <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                    <form action="search" method="get">
                        <div class="card-header bordered">
                            <div class="header-block">
                                <h3 class="title">
                                    Danh sách thành viên
                                </h3>
                                <a href="/user/add" class="btn btn-primary btn-sm">
                                    Thêm
                                </a>
                            </div>
                            <div class="header-block pull-right">
                                <label class="search">
                                    <input class="search-input" name="search" placeholder="search...">
                                        <i class="fa fa-search search-icon"></i>
                                    </label>
                                    <div class="pagination">
                                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </form>
                        <ul class="item-list striped">
                            <li class="item item-list-header">
                                <div class="item-row">
                                    <div class="item-col item-col-header ">
                                        <span>Id</span>
                                    </div>
                                    <div class="item-col item-col-header ">
                                        <span>Họ Tên</span>
                                    </div>
                                    <div class="item-col item-col-header">
                                        <span>Số điện thoại</span>
                                    </div>
                                    <div class="item-col item-col-header ">
                                        <span>Địa chỉ</span>
                                    </div>
                                    <div class="item-col item-col-header ">
                                        <span>Số CMT</span>
                                    </div>
                                    <div class="item-col item-col-header">
                                        <span>Xoá</span>
                                    </div>
                                   
                                </div>
                            </li>
                            @foreach ($users as $user)
                                <li class="item">
                                    <div class="item-row">
                                        <div class="item-col">
                                                {{$user->id}}
                                        </div>
                                        <div class="item-col">
                                            <a href="/user/edit/{{$user->id}}">
                                                {{$user->fullname}}
                                            </a>
                                        </div>
                                        <div class="item-col">
                                            {{$user->phone}}
                                        </div>
                                        <div class="item-col">
                                            <span title="Dũng Tiến-Thường tín-Hà Nội">{{$user->address}}</span>
                                        </div>
                                        <div class="item-col">
                                            {{$user->id_number}}
                                        </div>
                                        <div class="item-col ">
                                            <a onclick="return deleteUser()" href="/user/delete/{{$user->id}}" class="btn btn-danger-outline">Xoá</a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div align='right'>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            {{-- {{ $users->links() }} --}}
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
</article>

<script>
    function deleteUser()
    {
        return confirm('Bạn có muốn xóa user này không ?');
    }
</script>
@endsection    