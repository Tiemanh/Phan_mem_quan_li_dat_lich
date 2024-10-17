@extends('layout.patient-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .content {
            padding: 20px;
            width: 100%;
            margin: 20px;
        }

        .form-control {
            background-color: #e0f7fa;
            border: none;
            margin-bottom: 10px;
        }

        .time-slot {
            background-color: #e0f7fa;
            border: 1px solid #000;
            border-radius: 5px;
            padding: 5px 10px;
            margin: 5px;
            display: inline-block;
        }

        .btn-primary {
            background-color: #b3e5fc;
            border: none;
            padding: 10px 150px;
            border-radius: 5px;
        }
    </style>
@endsection

@section('main')
    <div class="content">
        <div class="mb-3">
            <label class="form-label" for="chuyenKhoa"> Chuyên khoa </label>
            <select class="form-control" id="chuyenKhoa">
                <option>-Chọn-</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="bacSi"> Bác sĩ </label>
            <select class="form-control" id="bacSi">
                <option>-Chọn-</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="ngayHen"> Ngày hẹn </label>
            <input class="form-control" id="ngayHen" placeholder="dd/mm/yyyy" type="date" />
        </div>
        <div class="mb-3">
            <label class="form-label"> Buổi sáng </label>
            <div>
                <span class="time-slot btn"> 6:00 </span>
                <span class="time-slot btn"> 6:30 </span>
                <span class="time-slot btn"> 7:00 </span>
                <span class="time-slot btn"> 7:30 </span>
                <span class="time-slot btn"> 8:00 </span>
                <span class="time-slot btn"> 8:30 </span>
                <span class="time-slot btn"> 9:00 </span>
                <span class="time-slot btn"> 9:30 </span>
                <span class="time-slot btn"> 10:00 </span>
                <span class="time-slot btn"> 10:30 </span>
                <span class="time-slot btn"> 11:00 </span>
                <span class="time-slot btn"> 11:30 </span>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label"> Buổi chiều </label>
            <div>
                <span class="time-slot btn"> 13:30 </span>
                <span class="time-slot btn"> 14:00 </span>
                <span class="time-slot btn"> 14:30 </span>
                <span class="time-slot btn"> 15:00 </span>
                <span class="time-slot btn"> 15:30 </span>
                <span class="time-slot btn"> 16:00 </span>
                <span class="time-slot btn"> 16:30 </span>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary mt-5">Xác nhận</button>
        </div>
        <br><br><br><br>
    </div>
@endsection
