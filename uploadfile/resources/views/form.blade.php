<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        input{
            display: block;
            margin:4px 0;
        }
        body{
            height: 100vh;
            width:100%;
            /* background-image:url('background.jpg'); */
            /* background-image:; */
            background-position:center;
            background-size: cover;
            justify-content: center;
            align-items: center;
            background: linear-gradient(rgb(26, 25, 25,0.8),rgb(1, 1, 141,0.8));
        }
        .container{
            height: 480px;
            width:380px;
            background-color:white;
            position: absolute;
            margin:10vh 35%;
            padding:10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="/saving" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" id="" placeholder="Name of the image">
            <input type="file" name="image" id="">
            <button type="submit">Click me</button>
        </form>
    </div>
</body>
</html>
