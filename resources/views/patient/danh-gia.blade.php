@extends('layout.patient-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .content {
            padding: 20px;
        }

        .rating {
            font-size: 24px;
        }

        .rating i {
            color: #ffd700;
        }

        .btn-confirm {
            background-color: #aed6f1;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
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
        <div class="mb-4">
            <span> Đánh giá về bác sĩ </span>
            <span class="rating">
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
            </span>
        </div>
        <div class="mb-4">
            <span> Đánh giá về dịch vụ </span>
            <span class="rating">
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
            </span>
        </div>
        <div class="mb-4">
            <span> Đánh giá về cơ sở vật chất </span>
            <span class="rating">
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
                <i class="far fa-star"> </i>
            </span>
        </div>
        <div class="mb-4">
            <span> Góp ý thêm </span>
            <textarea class="form-control" rows="5" style="background-color: #d6eaf8"></textarea>
        </div>
        <button class="btn-confirm">Xác nhận</button>

    </div>
@endsection
