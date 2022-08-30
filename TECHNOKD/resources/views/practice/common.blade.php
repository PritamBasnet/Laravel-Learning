<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            display: inline-block;
            margin:10px 20px;
            color:darkcyan;
        }
        h1::after{
            height: 4px;
            width: 40%;
            content:'';
            background-color: gray;
            border-radius: 10px;
            display:block;
            margin:0 auto;
        }
        h2{
            color:blueviolet;
            margin:10px 20px;
            display: inline-block;
            /* margin:10px 20px; */
            color:darkcyan;
        }
        h2::after{
            height: 8px;
            width: 40%;
            content:'';
            background-color: gray;
            display:block;
            border-radius: 10px;
            margin:0 auto;
            border-radius:50rem 50rem 0rem 0rem;
        }
        .shape{
            height:200px;
            width:200px;
            border-radius:50rem 50rem 0rem 0rem;
            background-color:skyblue;
        }
        .row{
            width:90%;
            height: 150px;
            background-color: #ebf2f2;
            display: flex;
            position:relative;
            /* flex-wrap: wrap; */
            justify-content: space-between;
            margin:0 auto;
            column-count: 2;
            column-count: 2;
        }
        .col__1, .col__2, .col__3, .col__4{
            height: 100%;
            flex-basis: 20%;
            background: green;
        }
    </style>
</head>
<body>
    <h1>This is the header.</h1>
    @yield('code-text')
    <h2>This is the footer</h2>
    <div class="shape"></div>
    <div class="row">
        <div class="col__1"></div>
        <div class="col__2"></div>
        <div class="col__3"></div>
        <div class="col__4"></div>
    </div>
</body>
</html>
