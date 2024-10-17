@extends('layout.doctor-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .content {
            padding: 20px;
            width: 100%;
        }

        .table-container {
            background-color: #fff3e0;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
@endsection

@section('main')
    <div class="content">
        <div class="table-container">
            <h5>Danh sách bệnh nhân</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã bệnh nhân</th>
                        <th>Tên</th>
                        <th>Giới tính</th>
                        <th>Tuổi</th>
                        <th>Tình trạng bệnh</th>
                        <th>Bệnh án</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add patient rows here -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
