<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            font-family: sans-serif;
        }
        .row{
            margin:0;
            width: 100%;
        }
        .first__row{
            height: 80vh;
            margin:0;
            width:100%;
            display:flex;
            justify-content: space-between;
            position: relative;
            /* background-image: linear-gradient(rgb(36, 35, 35,0.8),#019267); */

        }
        .logo__bar{
            width: 60%;
        }
        .menu__bar{
            width:40%;
            display: flex;
            justify-content: space-between;
        }
        .first__row::after{
            background: url('{{ asset('image/background2.jpg') }}'),linear-gradient(rgb(36, 35, 35,0.8),#019267);
            height:100%;
            width:100%;
            content:'';
            position:absolute;
            /* opacity:0.8; */
            background-position: center;
            background-size: cover;
            z-index:-1;

        }
        .navs{
            list-style: none;
            display: flex;
        }
        .nav__item{
            padding:7px 12px;
        }
        .nav__link{
            text-decoration:none;
            color:white;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            display:inline-block;
        }
        .nav__link:hover{
            color:white;
        }
        .nav__link::after{
            /* color:white; */
            height:2px;
            width: 0%;
            background-color: orangered;
            content: "";
            display: block;
            margin:auto;
            transition:0.3s ease;
        }
        .nav__link:hover::after{
            /* color:white; */
            height:2px;
            width: 100%;
            background-color: orangered;
            content: "";
            display: block
        }
    </style>
</head>
<body>
    <div class="row first__row">
        <div class="logo__bar"></div>
        <div class="menu__bar">
            <ol class="navs">
                <li class="nav__item"><a href="" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="" class="nav__link">service</a></li>
                <li class="nav__item"><a href="" class="nav__link">about us</a></li>
                <li class="nav__item"><a href="" class="nav__link">detail</a></li>
                <li class="nav__item"><a href="" class="nav__link">contact</a></li>
            </ol>
        </div>
    </div>
    <div class="row" style="padding-top: 20px;">
        <div class="col-md-4 col-12">
            <img src="{{ asset('image/background.jpg') }}" alt="" width="100%">
            <h2>TITLE</h2>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, qui!</P>
        </div>
        @isset($passdata)
            @foreach ($passdata as $data)
            <div class="col-md-4 col-12">
                <img src="{{ asset("Upload/students/" . $data->image) }}" alt="" width="100%">
                <h2>{{ $data->title }}</h2>
                <P>{{ $data->text }}</P>
            </div>
            @endforeach
        @endisset
        <div class="col-md-4 col-12"></div>
        <div class="col-md-4 col-12"></div>
    </div>
</body>
</html>
