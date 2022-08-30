<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .del{
            color: white;
            background: red;
            padding: 5px 10px;
            margin:5px 7px;
            font-size: 12px;
            border-radius: 20px;
            text-decoration:none;
        }
        a:hover{
            color:white;
            text-decoration: none;
        }
        .edit{
            color: white;
            background: blue;
            padding: 7px;
            font-size: 12px;
            border-radius: 20px;
            text-decoration:none;
        }
        *{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-1 col-12"></div>
        <div class="col-md-10 col-12">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product price</th>
                    <th scope="col">Product image</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Product Brand</th>
                    <th scope="col">Button</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>High heels</td>
                    <td>image here</td>
                    <td>ADIDAS COLOR BLACK</td>
                    <td>ADIDAS</td>
                    <td>ADIDAS</td>
                    <td><a href="" class="del">Delete</a><a href="" class="edit">Edit</a></td>
                  </tr>
                  @isset($taking_data)
                    @foreach ($taking_data as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->product_name }}</td>
                        <td>{{ $data->product_price }}</td>
                        <td>{{ $data->product_image }}</td>
                        <td>{{ $data->product_description }}</td>
                        <td>{{ $data->product_brand }}</td>
                        <td><a href="delete/{{ $data->id  }}" class="del">Delete</a><a href="update/{{ $data->id }}" class="edit">Edit</a></td>
                      </tr>
                    @endforeach
                  @endisset
                </tbody>
              </table>
        </div>
        <div class="col-md-1 col-12"></div>
    </div>
</body>
</html>
