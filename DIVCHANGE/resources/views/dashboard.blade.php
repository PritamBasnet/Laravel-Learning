<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            width:100%;
            display: flex;
            height:100vh;
            position:relative;
        }
        .left_container{
            width:30%;
            height: 100%;
            background: linear-gradient(rgb(247, 228, 193),white);
        }
        .right_container{
            width:70%;
            height: 100%;
        }
        .some__field{
            display: flex;
            padding:10px 14px;
            /* margin:15px 30px; */
        }
        .some__field label{
            margin:15px 30px;
            text-transform: uppercase;
            font-family: sans-serif;
            color:orangered;
        }
        input{
            border:none;
            padding:0;
            border-bottom: 2px solid blueviolet;
        }
        input:focus{
            outline: none;
        }
        button{
            color:white;
            border:none;
            background-color: darkblue;
            padding:12px 30px;
            border-radius: 20px;
            margin:0 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left_container"></div>
        <div class="right_container">
            <div class="form__login">
                <form action="{{ route('storing') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="some__field">
                        <label for="">Title</label>
                        <input type="text" name="title" id="">
                    </div>
                    <div class="some__field">
                        <label for="">image</label>
                        <input type="file" name="image" id="">
                    </div>
                    <div class="some__field">
                        <label for="">text area</label>
                        <textarea name="text" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit">CLICK</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
