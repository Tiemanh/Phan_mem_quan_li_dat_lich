@extends('layout.patient-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('./assets/css/p-home.css') }}">
@endsection

@section('main')
    <div class="content d-flex flex-wrap justify-content-center">
        <a href="{{ route('trangchu.index') }}">
            <div class="card">
                <i class="fas fa-home"> </i>
                <p>Trang chủ</p>
            </div>
        </a>
        <a href="{{ route('account.profile') }}">
            <div class="card">
                <i class="fas fa-user"> </i>
                <p>Thông tin TK</p>
            </div>
        </a>
        <a href="{{ route('bacsi.index') }}">
            <div class="card">
                <i class="fas fa-briefcase-medical"> </i>
                <p>Thông tin bác sĩ</p>
            </div>
        </a>
        <a href="{{ route('datlichkham.index') }}">
            <div class="card">
                <i class="fas fa-calendar-alt"> </i>
                <p>Đặt lịch khám</p>
            </div>
        </a>
        <a href="{{ route('tuvan.get') }}">
            <div class="card">
                <i class="fas fa-comments"> </i>
                <p>Tư vấn</p>
            </div>
        </a>
        <a href="{{ route('thanhtoan.index') }}">
            <div class="card">
                <i class="fas fa-credit-card"> </i>
                <p>Thanh toán</p>
            </div>
        </a>
        <a href="{{ route('danhgia.index') }}">
            <div class="card">
                <i class="fas fa-thumbs-up"> </i>
                <p>Đánh giá</p>
            </div>
        </a>
    </div>
@endsection
