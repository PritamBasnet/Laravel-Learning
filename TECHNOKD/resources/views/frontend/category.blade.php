@extends('frontend.hf')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-12">
            <div class="row">
                @isset($posts)
                    @foreach ($posts as $pos)
                        <div class="col-md-8 col-12">
                            <img src="{{ asset('upload/images/'.$pos->image) }}" alt="" width="100%">
                        </div>
                        <div class="col-md-4 col-12">
                            <h1>{{ $pos->title }}</h1>
                            <p>{{ $pos->description }}</p>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="row">
                <div class="col-md-12 col-12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quo iure optio perspiciatis in distinctio deleniti voluptatum dolore, obcaecati pariatur.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
