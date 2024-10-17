<html>

<head>
    <base href="/" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Booking Care - Đăng nhập</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
        }

        .header-container {
            background-color: #b3e5fc;
        }

        .header .hotline {
            color: #0288d1;
            font-size: 14px;
        }

        .login-container {
            max-width: 400px;
            margin: 50px auto;
            text-align: center;
        }

        .form-group {
            text-align: start;
            font-weight: bold;
        }

        .login-container img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        .login-container h1 {
            margin-bottom: 20px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #ccc;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container a {
            display: block;
            margin: 10px 0;
            color: black;
            /* text-decoration: none; */
        }

        .footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>
    <div class="header-container">
        <div class="mx-5 header">
            <a href="/">
                <svg viewBox="0 0 666.63 146.21" preserveAspectRatio="none" width="auto" height="40px">
                    <defs>
                        <style>
                            .bookingcare-2020_svg__cls-1 {
                                fill: #49bce2;
                            }

                            .bookingcare-2020_svg__cls-2 {
                                fill: #ffc10e;
                            }
                        </style>
                    </defs>
                    <path
                        d="M73.11 41.43a31.68 31.68 0 1 0 31.68 31.68 31.68 31.68 0 0 0-31.68-31.68m19.9 38H79.43v13.65H66.78V79.43H53.21V66.78h13.57V53.13h12.65v13.65H93Z"
                        class="bookingcare-2020_svg__cls-1"></path>
                    <path
                        d="M73.11 125.24A52.13 52.13 0 0 1 21 74.49V21.88a73.09 73.09 0 1 0 107.67 98.74L112.71 107a52 52 0 0 1-39.6 18.24M73.11 0A72.82 72.82 0 0 0 44.3 5.91l-.3.15a3.76 3.76 0 0 0-2.13 3.37v22A52.14 52.14 0 0 1 113.36 40l16.19-13.33A73 73 0 0 0 73.11 0"
                        class="bookingcare-2020_svg__cls-1"></path>
                    <path
                        d="M184.43 45.71a16.32 16.32 0 0 1 7.32 5 11.82 11.82 0 0 1 2.59 7.61 12.14 12.14 0 0 1-2.63 7.77 13.19 13.19 0 0 1-7.16 4.53 13.92 13.92 0 0 1 8.54 4.94 14.53 14.53 0 0 1 3.12 9.39 13.67 13.67 0 0 1-2.67 8.38 16.6 16.6 0 0 1-7.61 5.5 32.11 32.11 0 0 1-11.57 1.9h-28V44h26.94a32.23 32.23 0 0 1 11.13 1.71m-7.08 19.34a5.15 5.15 0 0 0 1.78-4.17 4.83 4.83 0 0 0-1.78-4 7.28 7.28 0 0 0-4.86-1.34h-11.33v11h11.33a7.31 7.31 0 0 0 4.86-1.48Zm1.3 22.54a5.25 5.25 0 0 0 2.27-4.53 4.93 4.93 0 0 0-2.27-4.25 10.22 10.22 0 0 0-6.15-1.5h-11.34v11.9h11.33a10.4 10.4 0 0 0 6.15-1.62ZM236.67 59.23a20.42 20.42 0 0 1 8.42 7.85 22.53 22.53 0 0 1 3 11.69 22.68 22.68 0 0 1-3 11.77 20.41 20.41 0 0 1-8.42 7.85 29.58 29.58 0 0 1-25.09 0 20.13 20.13 0 0 1-8.38-7.85 22.91 22.91 0 0 1-3-11.77 22.75 22.75 0 0 1 3-11.69 20.13 20.13 0 0 1 8.38-7.85 29.58 29.58 0 0 1 25.09 0m-19.34 11.85a11.57 11.57 0 0 0-2.59 7.85 11.69 11.69 0 0 0 2.59 7.93 8.55 8.55 0 0 0 6.8 3 8.64 8.64 0 0 0 6.88-3 11.7 11.7 0 0 0 2.59-7.93 11.47 11.47 0 0 0-2.6-7.85 8.68 8.68 0 0 0-6.84-3 8.56 8.56 0 0 0-6.83 3M287.81 59.23a20.42 20.42 0 0 1 8.42 7.85 22.53 22.53 0 0 1 3 11.69 22.68 22.68 0 0 1-3 11.77 20.41 20.41 0 0 1-8.42 7.85 29.58 29.58 0 0 1-25.09 0 20.13 20.13 0 0 1-8.38-7.85 22.91 22.91 0 0 1-3-11.77 22.75 22.75 0 0 1 3-11.69 20.13 20.13 0 0 1 8.38-7.85 29.58 29.58 0 0 1 25.09 0m-19.34 11.85a11.57 11.57 0 0 0-2.59 7.85 11.69 11.69 0 0 0 2.59 7.93 8.55 8.55 0 0 0 6.8 3 8.64 8.64 0 0 0 6.88-3 11.7 11.7 0 0 0 2.59-7.93 11.47 11.47 0 0 0-2.63-7.85 8.68 8.68 0 0 0-6.84-3 8.56 8.56 0 0 0-6.8 3M334.59 100.7l-9.22-16.51-4.45 4.61v11.9H306.5v-60h14.41v31.03l14-14.81h16.35l-16 16.91 16.35 26.87ZM369.34 38.92a7.5 7.5 0 0 1 2.15 5.54 7.53 7.53 0 0 1-2.15 5.5 7.92 7.92 0 0 1-10.92 0 7.53 7.53 0 0 1-2.15-5.5 7.5 7.5 0 0 1 2.15-5.54 8 8 0 0 1 10.92 0m-12.5 18h14.32v43.78h-14.32ZM422.11 60.89q4.33 4.53 4.33 12.22v27.6h-14.33V77.24a8.21 8.21 0 0 0-2-5.87 7.1 7.1 0 0 0-5.42-2.14 8.31 8.31 0 0 0-5.87 2.35 9.54 9.54 0 0 0-2.71 6v23.12h-14.4V56.92h14.4V64a15.56 15.56 0 0 1 6-5.74 17.85 17.85 0 0 1 8.46-1.94q7.21.04 11.54 4.57M477.66 56.92v39.9a19 19 0 0 1-3 10.64 19.42 19.42 0 0 1-8.37 7 29.52 29.52 0 0 1-12.42 2.54 36.57 36.57 0 0 1-10.6-1.54 33.6 33.6 0 0 1-9-4.13l5-10a25.78 25.78 0 0 0 6.47 3.16 22.62 22.62 0 0 0 7 1.13 12 12 0 0 0 7.69-2.27 7.46 7.46 0 0 0 2.83-6.15v-4.67q-4.37 5.75-12.46 5.75a17.56 17.56 0 0 1-16.23-10.08 24.55 24.55 0 0 1-2.39-11 24.29 24.29 0 0 1 2.31-10.84A17.28 17.28 0 0 1 441 59a17.85 17.85 0 0 1 9.55-2.59 17.42 17.42 0 0 1 7.32 1.5 14.29 14.29 0 0 1 5.46 4.33v-5.32Zm-16.75 28a10.92 10.92 0 0 0 2.43-7.36 11.05 11.05 0 0 0-2.43-7.45 8.64 8.64 0 0 0-12.83 0 11 11 0 0 0-2.47 7.4 10.8 10.8 0 0 0 2.47 7.36 8.13 8.13 0 0 0 6.43 2.83 8 8 0 0 0 6.4-2.78M522.17 57.69a15.69 15.69 0 0 0-7.53-2.06 14.72 14.72 0 0 0-7.81 2.15 15.19 15.19 0 0 0-5.54 5.91 18.35 18.35 0 0 0 0 16.75 15.18 15.18 0 0 0 5.54 5.91 14.71 14.71 0 0 0 7.81 2.15 17.18 17.18 0 0 0 7.28-1.78 23.06 23.06 0 0 0 6.8-4.86l8.66 9.31a34.62 34.62 0 0 1-11 7.73 30.45 30.45 0 0 1-27.8-1 28.38 28.38 0 0 1-10.68-10.6 29.51 29.51 0 0 1-3.88-15.05 28.28 28.28 0 0 1 14.85-25.33 32.25 32.25 0 0 1 28-1.17 30.92 30.92 0 0 1 10.44 7.16l-8.58 10.36a21.17 21.17 0 0 0-6.56-5.58M576.56 60.52q5 4.17 5.1 11.69v28.49h-14.17v-4.93q-4.37 5.58-13.19 5.58-7 0-11-3.76a13 13 0 0 1-4-9.91 11.76 11.76 0 0 1 4.36-9.68q4.33-3.48 12.42-3.56h11.41v-.49a5.84 5.84 0 0 0-2.14-4.86 9.79 9.79 0 0 0-6.19-1.7 25 25 0 0 0-6.19.89 36.81 36.81 0 0 0-6.97 2.56l-4-9.71a57 57 0 0 1 10.24-3.6 43.48 43.48 0 0 1 10.16-1.17q9.14 0 14.16 4.16M564.42 90a6.84 6.84 0 0 0 3.08-4.09v-3.8h-8.58q-6.07 0-6.07 4.53a4.47 4.47 0 0 0 1.58 3.6 6.49 6.49 0 0 0 4.33 1.34 10.16 10.16 0 0 0 5.66-1.58M611.15 58.38a16.49 16.49 0 0 1 8.21-2v13.17a21.73 21.73 0 0 0-2.18-.08 13.32 13.32 0 0 0-8.25 2.39 9.15 9.15 0 0 0-3.64 6.51v22.33h-14.4V56.92h14.4v7.28a15.77 15.77 0 0 1 5.86-5.82M660.88 62.75q5.74 6.31 5.75 17.32 0 1.7-.08 2.59h-30.43a10.51 10.51 0 0 0 3.64 5.71 10.07 10.07 0 0 0 6.31 2 13.66 13.66 0 0 0 5.46-1.13 15.43 15.43 0 0 0 4.82-3.32l7.53 7.53a22.19 22.19 0 0 1-8.21 5.79 28.33 28.33 0 0 1-10.88 2 26.18 26.18 0 0 1-12.3-2.75 19.12 19.12 0 0 1-8.05-7.77A23.57 23.57 0 0 1 621.63 79a24.16 24.16 0 0 1 2.83-11.86 19.56 19.56 0 0 1 8-7.93 24.85 24.85 0 0 1 12-2.79q10.67.02 16.42 6.33M652.63 75a8.43 8.43 0 0 0-2.23-6.11 8.46 8.46 0 0 0-11.57 0 11.27 11.27 0 0 0-3 6.15Z"
                        class="bookingcare-2020_svg__cls-2"></path>
                </svg>
            </a>
            <div class="hotline">Hotline: 0936013768</div>
        </div>
    </div>

    <form class="login-container" method="POST">
        @csrf
        <div class="my-5">
            <h1>Đăng nhập</h1>
        </div>

        <div class="form-group">
            <label for="email"> Email : </label>
            <input name="email" class="form-control" id="email" placeholder="Nhập email" type="email" />
        </div>
        <div class="form-group mt-3">
            <label for="password"> Mật khẩu : </label>
            <input name="password" class="form-control" id="password" placeholder="Nhập mật khẩu" type="password" />
        </div>

        <div class="d-flex justify-content-between mx-1">
            <a href="{{ route('account.register') }}"> Tạo tài khoản mới </a>
            <a href="{{ route('account.forgot_password') }}"> Quên mật khẩu </a>
        </div>

        <button class="mt-4" style="background-color: 92D7EE">
            Xác nhận
        </button>
    </form>
    <div class="footer">2024 © BVDK Bảo lưu mọi quyền.</div>
</body>

</html>
