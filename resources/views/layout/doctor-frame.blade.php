<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- frame css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/d-frame.css') }}">
    {{-- bootstrap v5.3 css --}}
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    {{-- font-awesome css --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    {{-- main css --}}
    @yield('css')
</head>

<body>
    <header>
        @include('layout.header')
    </header>

    <main class="app-content d-flex">
        <div class="sidebar">
            <a class="active" href="{{ route('bacsi.trangchu.index') }}"> Trang chủ </a>
            <a href="{{ route('benhnhan.index') }}"> Bệnh nhân </a>
            <a href="{{ route('calam.index') }}"> Ca làm </a>
            <a href="{{ route('lichhen.index') }}"> Lịch hẹn </a>
            <a href="{{ route('tuvan.index') }}"> Tư vấn </a>
            <a href="{{ route('account.logout') }}"> Đăng xuất </a>
        </div>
        @yield('main')
    </main>
    <footer>
        @include('layout.footer')
    </footer>

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
