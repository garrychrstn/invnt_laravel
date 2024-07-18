<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organization Web</title>
    <link rel='stylesheet' type='text/css' href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>
<body>
    <header class='container'>
        <p>BADAN EKSEKUTIF MAHASISWA FAKULTAS ILMU KOMPUTER</p>
        <p>logout</p>
    </header>
    <section class='hero'>
        <div class="text">
            <h1>Welcome back, {{$name}}</h1>
            <p>Divisi Sekretaris</p>
        </div>
        <div class="logo">
            <img src="{{ asset('assets/logo.png')}}" height='250'/>
        </div>
    </section>
    <section class="nav">
        <ul>
            <li><a href='#'>cash</a></li>
            <li><a href='#'>todo</a></li>
            <li><a href='/proker/'>proker</a></li>
            <li><a href='#'>structure</a></li>
        </ul>  
    </section>
</body>
</html>