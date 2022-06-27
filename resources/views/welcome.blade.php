<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&family=Open+Sans:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ url('/asset/Kure.PNG') }}">
    <title>Example</title>
</head>

<body class="merk">
    @yield('header')
    <br><br><br><br><br><br>

    <h1 id="xl">1234567 KOST</h1>
    <h1 id="l">S O M E A W A W A W A</h1>
    <h1 id="m">Kota Suiwiwiw Jalan icikiwir 99</h1>

    <br><br>

    <div>
        <a href="{{ route('users.index') }}">CEK KAMAR</a>
    </div>
</body>

<br><br><br><br><br><br>

<body class="card">
    @yield('content')
    <div class="row1-container">
        <div class="box box-down cyan">
            <h2>Internet Gratis</h2>
            <p>Semua Ruangan Sudah Termasuk Internet</p>
            <img src="{{ url('/asset/wifi.png') }}" alt="">
        </div>

        <div class="box red">
            <h2>Tempat Parkir</h2>
            <p>Disediakan Tempat Parkir Luas dan Tertutup</p>
            <img src="{{ url('/asset/bycicle.png') }}" alt="">
        </div>

        <div class="box box-down blue">
            <h2>Kasur dan Lemari Gratis</h2>
            <p>Semua Ruangan Sudah Termasuk Kasur dan Lemari</p>
            <img src="{{ url('/asset/bed.png') }}" alt="">
        </div>
    </div>
    <div class="row2-container">
        <div class="box orange">
            <h2>Ruang Menonton</h2>
            <p>Disediakan TV untuk seluruh penghuni</p>
            <img src="{{ url('/asset/tv.png') }}" alt="">
        </div>
    </div>
</body>

<br><br>

<footer class="footer">
    @yield('footer')
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4 class="logo">SLAVUS<b>works</b></h4>
                <ul>
                    <li><a href="http://www.slavuwus.rf.gd/project.html">project's</a></li>
                    <li><a href="http://www.slavuwus.rf.gd/">about slavus</a></li>
                    <li><a href="#">web programming</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow me</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/tsunomon.comrade/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://github.com/Tsunomon221"><i class="fab fa-github"></i></a>
                    <a href="https://www.instagram.com/slavuwus/"><i class="fab fa-instagram"></i></a>
                    <a href="https://discord.gg/tHACqJ378j"><i class="fab fa-discord"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>