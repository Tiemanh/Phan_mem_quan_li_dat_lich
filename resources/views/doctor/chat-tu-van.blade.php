@extends('layout.doctor-frame')

@section('title')
    Booking Care
@endsection

@section('css')
    <style>
        .containerr {
            margin: 30px;

        }

        .chat-container {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
            height: calc(100vh - 100px);
        }

        .chat-header {
            background-color: #e0e0e0;
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .chat-header img {
            border-radius: 50%;
            margin-right: 10px;
        }

        .chat-message {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .chat-message img {
            border-radius: 50%;
            margin-right: 10px;
        }

        .chat-message .message {
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
        }

        .chat-input {
            display: flex;
            align-items: center;
            background-color: #b3e5fc;
            padding: 10px;
        }

        .chat-input input {
            flex: 1;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

        .chat-input button {
            background-color: #b3e5fc;
            border: none;
            padding: 10px;
            margin-left: 10px;
        }

        .message {
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .message img {
            border-radius: 50%;
            margin-left: 10px;
        }

        .sidebar {
            top: 0;
            left: 0;
            height: 120dvh;
            /* Chiều cao 100% của viewport */
            overflow-y: auto;
            /* Đảm bảo nếu nội dung quá nhiều, sẽ có thanh cuộn */
        }
    </style>
@endsection

@section('main')
    <div class="flex-grow-1 containerr">
        <div class="container chat-container">
            <div class="chat-header">
                <img alt="User Avatar" height="40"
                    src="https://storage.googleapis.com/a1aa/image/247PMRcbWWZvBRmrv8CpYMvbn0yYbizMFVlh83O2cXQId35E.jpg"
                    width="40" />
                <span>
                    Nguyễn Thanh Hai
                </span>
            </div>
            <hr>
            <div class="chat-message mt-5">
                <img alt="User Avatar" height="40"
                    src="https://storage.googleapis.com/a1aa/image/247PMRcbWWZvBRmrv8CpYMvbn0yYbizMFVlh83O2cXQId35E.jpg"
                    width="40" />
                <div class="message">
                    Tôi bị muỗi đốt thì có sao không ?
                </div>
            </div>
            <div class="message" style="justify-content: flex-end;">
                <div style="background-color: #e6f7ff; padding: 10px; border-radius: 10px;">
                    Xinnn xin.... vĩnh biệt cụ.
                </div>
                <img alt="User avatar" height="50"
                    src="https://storage.googleapis.com/a1aa/image/RwUdIViWInraDdPbKTjdLW7efBzzbLH9XA92ADYeNfeIKr7cC.jpg"
                    width="50" />
            </div>


            <div style="margin-top: 230px">
                <div class="chat-input">
                    <input placeholder="Nhập nội dung" type="text" />
                    <button>
                        <i class="fas fa-paper-plane">
                        </i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
