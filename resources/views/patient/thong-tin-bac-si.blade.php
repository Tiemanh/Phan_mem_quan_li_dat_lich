@extends('layout.patient-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f0f8ff;
            margin: 20px 10px;
            border-radius: 10px;
        }

        .search-bar input {
            width: 80%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-bar button {
            padding: 5px 10px;
            border: none;
            background-color: #8ecaf7;
            border-radius: 5px;
            color: white;
        }

        .content {
            background-color: #d1ecff;
            padding: 20px;
            border-radius: 10px;
        }

        .content h5 {
            color: #007bff;
        }

        .content .form-check {
            margin-bottom: 10px;
        }

        .content .form-check-label {
            margin-left: 5px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .buttons button {
            padding: 5px 20px;
            border: none;
            border-radius: 5px;
            color: white;
        }

        .buttons .btn-primary {
            background-color: #8ecaf7;
        }

        .buttons .btn-secondary {
            background-color: #ccc;
        }

        .btn-primary {
            margin-left: 20px;
            background-color: #b3e5fc;
            border: none;
            padding: 7px 150px;
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('main')
    <div class="container">
        <div class="search-bar">
            <div>
                <i class="fas fa-search"> </i>
                <input placeholder="Tìm kiếm bác sĩ" type="text" />
            </div>
            <button>Tùy chọn hiển thị</button>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-6">
                    <h5>Chuyên khoa</h5>
                    <div class="form-check">
                        <input class="form-check-input" id="ck1" type="checkbox" />
                        <label class="form-check-label" for="ck1">
                            Bác sĩ gia đình
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="ck2" type="checkbox" />
                        <label class="form-check-label" for="ck2"> Dị ứng </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="ck3" type="checkbox" />
                        <label class="form-check-label" for="ck3"> Hô hấp </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="ck4" type="checkbox" />
                        <label class="form-check-label" for="ck4">
                            Răng hàm mặt
                        </label>
                    </div>
                </div>
                <div class="col-6">

                    <div class="form-check">
                        <input class="form-check-input" id="ck5" type="checkbox" />
                        <label class="form-check-label" for="ck5">
                            Cơ Xương Khớp
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="ck6" type="checkbox" />
                        <label class="form-check-label" for="ck6"> Gan mật </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="ck7" type="checkbox" />
                        <label class="form-check-label" for="ck7">
                            Tai mũi họng
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="ck8" type="checkbox" />
                        <label class="form-check-label" for="ck8">
                            Sản phụ khoa
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check">
                        <input class="form-check-input" id="ck9" type="checkbox" />
                        <label class="form-check-label" for="ck9"> Da liễu </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="ck10" type="checkbox" />
                        <label class="form-check-label" for="ck10"> Nội tiết </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="ck11" type="checkbox" />
                        <label class="form-check-label" for="ck11"> Tâm lý </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="ck12" type="checkbox" />
                        <label class="form-check-label" for="ck12"> Tổng quát </label>
                    </div>
                </div>
            </div>
            <div class="filter-section">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Học hàm/học vị</h5>
                        <div class="form-check">
                            <input class="form-check-input" id="bs" type="checkbox" />
                            <label class="form-check-label" for="bs"> BS </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="ts-bs" type="checkbox" />
                            <label class="form-check-label" for="ts-bs"> TS BS </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="ths" type="checkbox" />
                            <label class="form-check-label" for="ths"> ThS </label>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-check">
                            <input class="form-check-input" id="bs-ck" type="checkbox" />
                            <label class="form-check-label" for="bs-ck"> BS CK </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="pgs-ts-bs" type="checkbox" />
                            <label class="form-check-label" for="pgs-ts-bs">
                                PGS TS BS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="ths-bs" type="checkbox" />
                            <label class="form-check-label" for="ths-bs"> Ths BS </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="ts" type="checkbox" />
                            <label class="form-check-label" for="ts"> TS </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="gs-ts-bs" type="checkbox" />
                            <label class="form-check-label" for="gs-ts-bs">
                                GS TS BS
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="buttons">
                <button class="btn btn-secondary">
                    <i class="fas fa-redo"> </i>
                    Đặt lại
                </button>
                <button class="btn btn-primary">
                    <i class="fas fa-filter"> </i>
                    Lọc
                </button>
            </div>
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-primary my-4">Xác nhận</button>
        </div>
        <br><br><br>
    </div>
@endsection
