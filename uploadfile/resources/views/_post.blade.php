<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Name of the image">
        <input type="file" name="file" id="">
        <button type="submit">Upload It</button>
    </form>
</body>
</html>
