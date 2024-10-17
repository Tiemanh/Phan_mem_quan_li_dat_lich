@extends('layout.patient-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .content {
            padding: 20px;
            width: 100%;
            margin: 20px
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .gender {
            display: flex;
            align-items: center;
        }

        .gender input {
            margin-right: 5px;
        }

        .gender label {
            margin-right: 20px;
        }

        .btn-primary {
            background-color: #b3e5fc;
            border: none;
            padding: 7px 150px;
        }
    </style>
@endsection

@section('main')
    <div class="content">
        <form>
            <h4 class="mb-2">Thông tin tài khoản</h4>
            <div class="form-group">
                <label> Thêm ảnh đại diện (Chọn ảnh từ máy) </label>
                <input class="form-control" type="file" />
            </div>
            <div class="form-group">
                <label> Họ và tên </label>
                <input class="form-control" type="text" />
            </div>
            <div class="form-group">
                <label> Số điện thoại: </label>
                <input class="form-control" type="text" />
            </div>
            <div class="form-group">
                <label> Email </label>
                <input class="form-control" type="email" />
            </div>
            <div class="form-group">
                <label> Căn cước công dân </label>
                <input class="form-control" type="text" />
            </div>
            <div class="form-group">
                <label> Mã số thẻ BHYT </label>
                <input class="form-control" type="text" />
            </div>
            <div class="form-group">
                <label> Địa chỉ </label>
                <input class="form-control" type="text" />
            </div>
            <div class="form-group">
                <label> Ngày-tháng-năm sinh </label>
                <input class="form-control" type="date" />
            </div>
            <div class="form-group gender">
                <label> Giới tính </label>
                <input name="gender" type="radio" value="male" />
                <label> Nam </label>
                <input name="gender" type="radio" value="female" />
                <label> Nữ </label>
            </div>
            <div class="form-group">
                <a href="#"> Xem hồ sơ bệnh án </a>
            </div>
            <div class="form-group">
                <a href="#"> Xem lịch sử khám bệnh </a>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Xác nhận</button>
            </div>
        </form>
    </div>
@endsection
