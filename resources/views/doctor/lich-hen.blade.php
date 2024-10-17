@extends('layout.doctor-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .content {
            padding: 20px;
        }

        .table-container {
            background-color: #FAF0E6;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
@endsection

@section('main')
    <div class="content flex-grow-1">
        <div class="table-container">
            <h4 class="mb-4">
                Chi tiết lịch hẹn
            </h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Mã lịch hẹn
                        </th>
                        <th>
                            Ngày tạo
                        </th>
                        <th>
                            Ngày khám
                        </th>
                        <th>
                            Ca khám
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add rows here as needed -->
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
