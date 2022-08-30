@extends('frontend.hf')
<style>
    ol {
        list-style: none;
    }

    ol li {
        padding: 10px 8px;
    }

</style>
@section('content')
    <div class="container" style="padding:20px 0;">
        <div class="row">
            @isset($postdetail)
                <div class="col-md-8 col-12">
                    <h2>{{ $postdetail->title }}</h2>
                    <img src="{{ asset('upload/images/'.$postdetail->image) }}" width="100%" alt="">
                    <p>{{ $postdetail->description }}</p>
                </div>
                <div class="col-md-4 col-12">
                    <h5>Recent Articles</h5>
                    <ol>
                        <li>
                            <h5>How to do that </h5>
                        </li>
                        <li>
                            <h5>How to do that </h5>
                        </li>
                        <li>
                            <h5>How to do that </h5>
                        </li>
                        <li>
                            <h5>How to do that </h5>
                        </li>
                        <li>
                            <h5>How to do that </h5>
                        </li>
                        <li>
                            <h5>How to do that </h5>
                        </li>
                        <li>
                            <h5>How to do that </h5>
                        </li>
                        <li>
                            <h5>How to do that </h5>
                        </li>
                        <li>
                            <h5>How to do that </h5>
                        </li>
                    </ol>
                </div>
            @endisset
        </div>
    </div>
@endsection
