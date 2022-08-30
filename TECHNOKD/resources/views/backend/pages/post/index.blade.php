@extends('backend.layout.master')
@section('style')
    <style>
        .edit-table {
            width: 98% !important;
            margin: auto;
            font-size: 15px !important;
        }
        .edit-td{
            font-size: 12px !important;
            font-weight: 700;
            color:black !important;
        }
        .edit_image{
            width: 100px;
            height: 80px;
            object-fit: cover;
            object-position: center;

        }
        .search__container{
            height: fit-content;
            width:fit-content;
            margin:auto;
            display: flex;
            padding: 20px;
        }
        .SearchBar{
            border:none;
            border:1px solid green;
            width: 350px;
            border-radius: 8px;
            height: 40px ;
            transition: 0.5s ease;
            margin-right: 5px;
        }
        .SearchBar:focus{
            border:none;
            /* outline:none; */
            border-bottom: 1px solid darkcyan;
        }
    </style>
@endsection
@section('content')
<form action="{{ route('post.filter') }}" method="GET">
    <div class="search__container">
        <input type="text" name="search" placeholder="Search your post" id="Searhme" class="SearchBar" id>
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>
    <table class="table table-striped edit-table">
        <thead>
            <tr>
                <th scope="col">SN</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Cat Id</th>
                <th scope="col">Status</th>
                <th scope="col">Post Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @isset($TakePostData)
                @foreach ($TakePostData as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <th scope="row">{{ $data->title }}</th>
                        <td class="edit-td edit-image"><img src="{{ asset('upload/images/'.$data->image) }}" class="edit_image" alt=""></td>
                        <td class="edit-td">{{ $data->description }}</td>
                        <td class="edit-td">{{ $data->Catagory->name }}</td>
                        <td class="edit-td">{{ $data->status }}</td>
                        <td class="edit-td">
                            <a href="" class="btn btn-success">Active</a>
                        </td>
                        <td class="edit-td"><a href="{{ route('PostEdit',$data->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('DeletePost',$data->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
@endsection
