@extends('layout.patient-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .content {
            padding: 20px;
            width: 100%;
        }

        .form-container {
            background-color: #d5f6fa;
            padding: 20px;
            border-radius: 5px;
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container input[type="text"] {
            width: 80%;
            padding: 5px;
            margin-bottom: 10px;
            margin-left: 10px
        }

        .form-container input[type="checkbox"] {
            margin-right: 5px;
        }

        .form-container .btn {
            background-color: #00bfff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .form-container .btn:hover {
            background-color: #1e90ff;
        }
    </style>
@endsection

@section('main')
    <div class="content flex-grow-1">
        <div class="form-container">
            <form method="POST" class="form">
                <div class="mb-3">
                    <label for="maHoaDon"> Mã hóa đơn </label>
                    <input class="form-control" id="maHoaDon" type="text" />
                </div>
                <div class="mb-3">
                    <label for="tenBenhNhan"> Tên bệnh nhân </label>
                    <input class="form-control" id="tenBenhNhan" type="text" />
                </div>
                <div class="mb-3">
                    <label for="maKhachHang"> Mã khách hàng </label>
                    <input class="form-control" id="maKhachHang" type="text" />
                </div>
                <div class="mb-3">
                    <label for="tongTien"> Tổng tiền </label>
                    <input class="form-control" id="tongTien" type="text" />
                </div>
                <div class="mb-3">
                    <label for="tienKhachDua"> Tiền khách đưa </label>
                    <input class="form-control" id="tienKhachDua" type="text" />
                </div>
                <div class="mb-3">
                    <label for="tienThua"> Tiền thừa </label>
                    <input class="form-control" id="tienThua" type="text" />
                </div>
                <div class="mb-3">
                    <label for="phieuGiamGia"> Phiếu giảm giá </label>
                    <input class="form-control" id="phieuGiamGia" type="text" />
                </div>
                <div class="mb-3">
                    <label> Hình thức thanh toán </label>
                    <br />
                    <input id="tienMat" type="checkbox" />
                    <label for="tienMat"> Tiền mặt </label>
                    <input id="chuyenKhoan" type="checkbox" />
                    <label for="chuyenKhoan"> Chuyển khoản </label>
                </div>
                <div class="mb-3">
                    <label for="ghiChu"> Ghi chú </label>
                    <textarea name="note" id="" cols="120" rows="10"></textarea>
                </div>
                <button class="btn" type="submit">Thanh toán</button>
            </form>
        </div>
    </div>
@endsection
