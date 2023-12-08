<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="0.1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/style_navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style_nana.css">
    <title>SurabayaDarurat</title>
</head>
<body>

<header>
    <label class="logo"><a href="/"><span style="font-family: 'Philosopher', sans-serif; font-size: 25px; font-weight: lighter;">Surabaya</span><span style="font-family: 'Big Shoulders Stencil Text', sans-serif; font-size: 28px; color: #DA1212">Darurat</span></a></label>
    <nav>
    <u1 class="nav_fitur">
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Kategori</a>
            <div class="dropdown-content">
                <a href="#">Kejadian Kejahatan</a>
                <a href="#">Bencana Alam</a>
                <a href="#">Kecelakaan Lantas</a>
            </div>
        </li>
        <li><a href="/lapor">Lapor</a></li>
        <li><a href="#">Notifikasi</a></li>
        <li><a href="#">Profil</a></li>
    </u1>
</nav>
</header>

@yield('content')

</body>
</html>