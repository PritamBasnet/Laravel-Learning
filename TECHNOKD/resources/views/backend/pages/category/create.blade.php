@extends('backend.layout.master')
@section('content')
@section('style')
    <style>
        #Category-Form {
            height: 280px;
            width: 480px;
            background: white;
            margin: auto;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .HeadingCategory {
            font-size: 20px;
            text-align: center;
            color: black;
            padding: 10px 0;
            border-bottom: 1px solid #dce7ee;
        }

        .form-group {
            padding: 0 10px;
        }

        .btn__collecton {
            height: fit-content;
            width: fit-content;
            margin: auto;
        }
        .edit-alert{
            text-align: center !important;
        }
    </style>
@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success edit-alert" role="alert">
            <strong style="text-align: center !important;">{{ session('status') }}</strong>
        </div>
    @endif
    <form action="/admin/category/storeme" id="Category-Form" method="post">
        <h2 class="HeadingCategory">Add Category</h2>
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:black;">Category Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp"
                placeholder="Enter name">
        </div>
        <input type="text" name="status" id="">
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:black;">Slug</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="slug" aria-describedby="emailHelp"
                placeholder="Enter slug">
        </div>
        <div class="btn__collecton">
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="button" class="btn btn-danger">Back</button>
        </div>
    </form>

@endsection
