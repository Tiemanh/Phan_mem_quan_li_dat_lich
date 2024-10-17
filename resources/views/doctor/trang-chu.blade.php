@extends('layout.doctor-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('./assets/css/d-home.css') }}">
@endsection

@section('main')
    <div class="container">
        <div class="row col-12">
            <div class="content">
                <a href="{{ route('bacsi.trangchu.index') }}">
                    <div class="col-4 icon-box">
                        <i class="fas fa-home"> </i>
                        <div>Trang chủ</div>
                    </div>
                </a>
                <a href="{{ route('benhnhan.index') }}">
                    <div class="col-4 icon-box">
                        <i class="fas fa-user-injured"> </i>
                        <div>Bệnh nhân</div>
                    </div>
                </a>
                <a href="{{ route('calam.index') }}">
                    <div class="col-4 icon-box">
                        <i class="fas fa-briefcase-medical"> </i>
                        <div>Ca làm</div>
                    </div>
                </a>
                <a href="{{ route('lichhen.index') }}">
                    <div class="col-4 icon-box">
                        <i class="fas fa-calendar-alt"> </i>
                        <div>Lịch hẹn</div>
                    </div>
                </a>
                <a href="{{ route('tuvan.index') }}">
                    <div class="col-4 icon-box">
                        <i class="fas fa-comments"> </i>
                        <div>Tư vấn</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
