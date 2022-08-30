{{-- Making an php syntax to call a controller --}}
@extends('frontend.hf')
@section('content')
<?php
$post=App\Models\post::take(4)->get();
?>
    <div class="container">
        <div class="row second-row">
            <div class="col-md-3 col-12">
                <h2 class="heading_text">Latest Articles</h2>
            </div>
            <div class="col-md-9 col-12"></div>
        </div>
        <div class="row third-row">
            {{-- COL-4 --}}
            @isset($post)
                @foreach ($post as $posts )
                <div class="col-md-4 col-12">
                    <a href="/admin/detail/{{ $posts->slug }}" style="text-decoration: none;">
                        <div class="card">
                            <img src="{{ asset('upload/images/'.$posts->image) }}" alt="" class="image__card" width="100%">
                            <div class="card_written_content">
                                <span class="my_span">{{ $posts->cat_id }}</span>
                                <h5 class="my__h5">{{ $posts->title }}</h5>
                                <label for="" class="date">{{ $posts->created_at }}</label>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            @endisset
            {{-- COL-4 --}}
        </div>
        <div class="row third-row">
            <div class="col-md-4 col-12">
                <div class="card">
                    <img src="{{ asset('image/webpc-passthru (4).webp') }}" alt="" class="image__card" width="100%">
                    <div class="card_written_content">
                        <span class="my_span">HOW TO?</span>
                        <h5 class="my__h5">How to Share Youtube Video on Instagram Story?</h5>
                        <label for="" class="date">January 31, 2022</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
