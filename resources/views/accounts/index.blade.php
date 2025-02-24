@extends('layouts.app')

@section('content')
<!-- Kết nối CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
    <h1>Danh sách các Form & Survey</h1>

    <div class="action-buttons text-center">
        <button class="btn blue" id="edit-account">Chỉnh sửa thông tin</button>
        <button class="btn blue" id="toggle-form">Thêm tài khoản mới</button>
        <button class="btn red" id="delete-account">Xoá tài khoản</button>
    </div>

    <div class="search-bar text-center">
        <input type="text" id="search" placeholder="Tìm kiếm từ khóa">
        <button class="btn blue">Tìm kiếm</button>
    </div>

    <table id="account-table">
        <thead>
            <tr>
                <th>Chọn</th>
                <th>STT</th>
                <th>Họ và Tên</th>
                <th>Vai trò</th>
                <th>Tên đăng nhập</th>
                <th>Pass</th>
                <th>Email</th>
                <th>Ngày Tháng Năm Sinh</th>
            </tr>
        </thead>
        <tbody id="account-list">
            <tr>
                <td><input type="checkbox" class="select-member"></td>
                <td>1</td>
                <td>Đàm Việt Hưng</td>
                <td>Sinh Viên</td>
                <td>ngankt2</td>
                <td>ngankt2004</td>
                <td>ngankt2@gmail.com</td>
                <td>05/11/2020</td>
            </tr>
        </tbody>
    </table>

    <div class="form-container" id="form-container" style="display: none;">
        <h2>Thêm tài khoản mới</h2>
        <form id="addAccountForm">
            <input type="hidden" id="editIndex">
            <div class="form-group">
                <label>Họ và Tên:</label>
                <input type="text" id="name" required>
            </div>

            <div class="form-group">
                <label>Vai trò:</label>
                <select id="role" required>
                    <option value="Giảng viên">Giảng viên</option>
                    <option value="Sinh Viên">Sinh Viên</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tên đăng nhập:</label>
                <input type="text" id="username" required>
            </div>

            <div class="form-group">
                <label>Mật khẩu:</label>
                <input type="password" id="password" required>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" id="email" required>
            </div>

            <div class="form-group">
                <label>Ngày sinh:</label>
                <input type="date" id="birthdate" required>
            </div>

            <button type="submit" class="btn blue">Lưu thay đổi</button>
        </form>
    </div>
</div>

<!-- Kết nối JavaScript -->
<script src="{{ asset('js/script.js') }}"></script>

@endsection
