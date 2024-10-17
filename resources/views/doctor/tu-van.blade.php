@extends('layout.doctor-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .content {
            margin: 20px;
            width: 100%;
            padding: 20px;
        }

        .patient-card {
            display: flex;
            margin-bottom: 20px;
        }

        .patient-card img {
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }

        .patient-card .info {
            background-color: #e0e0e0;
            padding: 10px;
            flex-grow: 1;
        }

        .patient-card .chat-icon {
            background-color: #0288d1;
            color: white;
            padding: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection

@section('main')
    <div class="content">
        <div class="patient-card">
            <img alt="Patient A" height="100"
                src="https://storage.googleapis.com/a1aa/image/Cn7jxeRKnV2AQadVhrrEJLiTKUhAU8wJf0EwxGefevF6qu5cC.jpg"
                width="100" />
            <div class="info">
                <p>Tên bệnh nhân: A</p>
                <p>Ghi chú: Tôi bị abcxyz thì cần làm gì</p>
            </div>
            <a href="{{ route('tuvan.chatdoctor') }}">
                <div class="chat-icon">
                    <i class="fas fa-comment"> </i>
                </div>
            </a>
        </div>
        <div class="patient-card">
            <img alt="Patient B" height="100"
                src="https://storage.googleapis.com/a1aa/image/XB4VtZomSF6bO5Aamx18tHPfjpWwraF7jVAwHCq4zeaa1NnTA.jpg"
                width="100" />
            <div class="info">
                <p>Tên bệnh nhân: B</p>
                <p>Ghi chú: Tôi bị abcxyz thì cần làm gì</p>
            </div>
            <a href="{{ route('tuvan.chatdoctor') }}">
                <div class="chat-icon">
                    <i class="fas fa-comment"> </i>
                </div>
            </a>
        </div>
        <div class="patient-card">
            <img alt="Patient C" height="100"
                src="https://storage.googleapis.com/a1aa/image/oS2gXHt75rpeCCqxquXCnqwLnSXtiiOkg0cVBiPtGuUs6mzJA.jpg"
                width="100" />
            <div class="info">
                <p>Tên bệnh nhân: C</p>
                <p>Ghi chú: Tôi bị abcxyz thì cần làm gì</p>
            </div>
            <a href="{{ route('tuvan.chatdoctor') }}">
                <div class="chat-icon">
                    <i class="fas fa-comment"> </i>
                </div>
            </a>
        </div>
    </div>
@endsection
