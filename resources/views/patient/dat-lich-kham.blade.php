@extends('layout.patient-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .content {
            width: 100%;
            padding: 20px 30px;
        }

        .appointment {
            background-color: #b0e0e6;
            width: 82%;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .appointment div {
            flex: 1;
        }

        .appointment div:nth-child(2) {
            text-align: center;
        }

        .appointment div:nth-child(3) {
            text-align: right;
        }

        .btn-primary {
            margin-left: 20px;
            background-color: #b3e5fc;
            border: none;
            padding: 7px 50px;
            width: 150px;
        }

        .btn-primaryy {
            margin-left: 20px;
            background-color: #b3e5fc;
            border: none;
            padding: 7px 150px;
            margin-bottom: 30px;
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
    <div class="content">
        <h4>Kết quả đặt lịch</h4>
        <div class="d-flex mb-5">
            <div class="appointment">
                <div>
                    <p>7:30</p>
                    <p>Tòa C2</p>
                </div>
                <div>
                    <p>Tai mũi học</p>
                </div>
                <div>
                    <p>Bác sĩ:A</p>
                </div>
            </div>
            <div>
                <p><a href="#" class="btn btn-primary">Chỉnh sửa</a></p>
                <p><a href="#" class="btn btn-primary">Hủy lịch</a></p>
            </div>
        </div>
        <div class="d-flex mb-5">
            <div class="appointment">
                <div>
                    <p>7:30</p>
                    <p>Tòa C2</p>
                </div>
                <div>
                    <p>Tai mũi học</p>
                </div>
                <div>
                    <p>Bác sĩ:A</p>
                </div>
            </div>
            <div>
                <p><a href="#" class="btn btn-primary">Chỉnh sửa</a></p>
                <p><a href="#" class="btn btn-primary">Hủy lịch</a></p>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-primaryy">Thêm lịch mới</button>
            <button class="btn btn-primaryy">Xác nhận</button>
        </div>
    </div>
@endsection
