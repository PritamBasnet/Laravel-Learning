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

    </style>
@endsection
@section('content')
    @if (session('status'))+
        <div class="alert alert-success edit-alert" role="alert">
            <strong style="text-align: center !important;">{{ session('status') }}</strong>
        </div>
    @endif
    <form action="{{ route('UpdatePost',$PostDataFind->id) }}" id="my_form" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Add Post</h2>
        <hr>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                name="title" value="{{ $PostDataFind->title }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                name="image" value="{{ $PostDataFind->image }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Sub-Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $PostDataFind-> }}" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Description</label>
            <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                name="description">
                {{ $PostDataFind->description }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Cat-Id</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                name="cat_id" value="{{ $PostDataFind->cat_id }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:#385fcf; font-weight:600;">Status</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                name="status" value="{{ $PostDataFind->status }}">
        </div>
        <div class="container_btn">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
