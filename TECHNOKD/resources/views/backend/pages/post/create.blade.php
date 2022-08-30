@extends('backend.layout.master')
@section('style')
    <style>
        #my_form {
            width: 70%;
            margin: auto;
            background: white;
            border-radius: 20px;
            padding: 15px;
        }

        h2 {
            text-align: center;
            font-size: 20px;
            color: #385fcf;
        }

        .container_btn {
            height: fit-content;
            width: fit-content;
            margin: auto;
        }

        .edit-alert {
            text-align: center;
        }

    </style>
@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success edit-alert" role="alert">
            <strong style="text-align: center !important;">{{ session('status') }}</strong>
        </div>
    @endif
    <form action="/admin/post/store" id="my_form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <?php
            $Category = App\Models\Category::all();
            ?>
            <label for="">Select Category</label>
            <select name="cat_id" id="">
                @isset($Category)
                    @foreach ($Category as $Cate )
                        <option value="{{ $Cate->id }}">{{ $Cate->name }}</option>
                    @endforeach
                @endisset
            </select>
        </div>
        <h2>Add Post</h2>
        <hr>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                name="title">
        </div>
        <input type="text" name="slug" id="" placeholder="Enter The slug">
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                name="image">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Sub-Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Description</label>
            <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                name="description">
            </textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Status</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                name="status">
        </div>
        <div class="container_btn">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
