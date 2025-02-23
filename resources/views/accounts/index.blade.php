@extends('layouts.app')

@section('title', 'Danh sách Form & Survey')

@section('content')
    <h1>Danh sách các Form & Survey</h1>

    <div>
        <input type="text" placeholder="Tìm kiếm từ khóa">
        <button class="btn btn-primary">Tìm kiếm</button>
    </div>

    <br>

    <div>
        <button class="btn btn-primary">Chỉnh sửa thông tin</button>
        <button class="btn btn-primary">Thêm tài khoản mới</button>
        <button class="btn btn-primary">Xóa tài khoản mới</button>
    </div>

    <br>

    @include('accounts.partials.table')
@endsection
