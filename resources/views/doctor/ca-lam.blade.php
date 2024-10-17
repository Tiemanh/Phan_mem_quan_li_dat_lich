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
                Thông tin ca làm việc
            </h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Mã ca làm
                        </th>
                        <th>
                            Ngày làm
                        </th>
                        <th>
                            Giờ làm
                        </th>
                        <th>
                            Ghi chú
                        </th>
                        <th>
                            Trạng thái
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
