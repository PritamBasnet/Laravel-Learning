@extends('backend.layout.master')
@section('style')
    <style>
        #edit-tag {
            width: 40px;
            /* padding: 7px; */
            height: 40px !important;
            border: none;
            text-align: center;
            background: #dee2e6;
        }

        table {
            width: 90% !important;
            margin: auto;
            background-color: white
        }

    </style>
@endsection
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">SN</th>
                <th scope="col">Category </th>
                <th scope="col">Sub-Category</th>
                <th scope="col">Status</th>
                <th scope="col">Display Nav</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @isset($TakeCategoryData)
                @foreach ($TakeCategoryData as $data)
                    <tr>
                        <th scope="row"><input type="number" id="edit-tag" name="" value="{{ $data->id }}" id=""></th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>
                            <div class="dropdown d-inline-block mb-1">
                                <button
                                    class="btn btn-{{ $data->status == 'active' ? 'success' : 'danger' }} dropdown-toggle btn-sm"
                                    type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" data-display="static">
                                    {{ $data->status }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item"
                                        href="/admin/category/status/{{ $data->id }}">{{ $data->status == 'active' ? 'Inactive' : 'Active' }}</a>
                                </div>
                            </div>
                        </td>
                        <td><button type="button" class="btn btn-success">Yes</button></td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('editcategory', $data->id) }}">Edit</a>
                            <a href="{{ route('delete.cat', $data->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
@endsection
