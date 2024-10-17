@extends('layout.patient-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .content {
            padding: 20px;
        }

        .doctor-card {
            background-color: #d3eafc;
            padding: 20px;
            margin: 10px;
            text-align: center;
            border-radius: 5px;
        }

        .doctor-card img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            color: black;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 4px;
            border-radius: 4px;
        }

        .pagination a:hover {
            background-color: #ddd;
        }

        .sidebar {
            top: 0;
            left: 0;
            height: 100dvh;
            /* Chiều cao 100% của viewport */
            overflow-y: auto;
            /* Đảm bảo nếu nội dung quá nhiều, sẽ có thanh cuộn */
        }
    </style>
@endsection

@section('main')
    <div class="container content">
        <div class="row">
            <div class="col-md-6">
                <div class="doctor-card">
                    <img alt="Doctor Image" src="https://placehold.co/50x50" />
                    <div>Bác sĩ:</div>
                    <div>Chuyên khoa:</div>
                    <div>Học vấn:</div>
                    <a href="{{ route('tuvan.chatpatient') }}">Tư vấn</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="doctor-card">
                    <img alt="Doctor Image" src="https://placehold.co/50x50" />
                    <div>Bác sĩ:</div>
                    <div>Chuyên khoa:</div>
                    <div>Học vấn:</div>
                    <a href="{{ route('tuvan.chatpatient') }}">Tư vấn</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="doctor-card">
                    <img alt="Doctor Image" src="https://placehold.co/50x50" />
                    <div>Bác sĩ:</div>
                    <div>Chuyên khoa:</div>
                    <div>Học vấn:</div>
                    <a href="{{ route('tuvan.chatpatient') }}">Tư vấn</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="doctor-card">
                    <img alt="Doctor Image" src="https://placehold.co/50x50" />
                    <div>Bác sĩ:</div>
                    <div>Chuyên khoa:</div>
                    <div>Học vấn:</div>
                    <a href="{{ route('tuvan.chatpatient') }}">Tư vấn</a>
                </div>
            </div>
        </div>
        <div class="pagination">
            <a href="#"> &lt; </a>
            <a href="#"> 1 </a>
            <a href="#"> 2 </a>
            <a href="#"> 3 </a>
            <a href="#"> 4 </a>
            <a href="#"> 5 </a>
            <a href="#"> &gt; </a>
        </div>
    </div>
@endsection
