@extends('layouts.app')

@section('title', 'Quản lý tài khoản')

@section('content')
    <h2>Danh sách tài khoản</h2>
    @include('accounts.partials.table')
@endsection