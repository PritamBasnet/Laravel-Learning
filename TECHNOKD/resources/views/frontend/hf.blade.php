<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1010a4d3e8.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Montserrat&family=Signika+Negative&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Signika Negative', sans-serif;
        }

        .row {
            margin: 0;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .logo_content {
            background-color: black;
            flex-wrap: wrap;
            display: flex;
            padding-bottom: 40px;
        }

        .image_part {
            width: 50%;
        }

        .advertise_part {
            width: 50%;
        }

        .white_add {
            height: 80px;
            width: 500px;
            background-color: white;
            margin: 10px 20px;
        }

        nav {
            width: 90%;
            background-color: white;
            position: absolute;
            /* overflow-y: scroll; */
            margin: 0 5%;
            /* top: 10%; */
            top: 18%;
            /* overflow: scroll; */
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .SearchSection {
            width: 90%;
            margin: 0 5%;
            height: 60px;
            background-color: white;
            position: relative;
            top: 40px;
            transform: translateY(10px);
            opacity: 0;
            transition: 0.5s ease;
        }

        .searchBar {
            width: 90%;
            margin: 10px 5%;
            height: 40px;
            border:none;
            border: 2px solid grey;
            border-radius: 5px;
        }

        .searchBar::placeholder {
            transition: 0.5s ease;
            padding-left: 10px;
        }

        .searchBar:focus::placeholder {
            transform: translateY(-8px);
            color: #7839a5;
        }

        .nav {
            display: flex;
            list-style: none;
            padding: 15px 0;
        }

        .nav-items {
            padding: 5px 20px;
        }

        .nav-links {
            text-decoration: none;
            color: black;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 550;
        }

        .nav-links:hover {
            text-decoration: none;
            color: #7839a5;
        }

        .row {
            width: 100%;
        }

        .second-row {
            padding-top: 80px;
        }

        .heading_text {
            padding-left: 20%;
            font-size: 550;
            background: -webkit-linear-gradient(right, blue, orangered);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .heading_text:hover {
            color: cornflowerblue;
        }

        .third-row {}

        .padding-div {
            padding-left: 5% !important;
        }

        .my_span {
            font-weight: 550;
            color: #82589F;
        }

        .card {
            transition: 0.5s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card_written_content {
            padding: 10px;
        }

        .my__h5 {
            color: #7839a5;
        }

        .my__h5:hover {
            color: cornflowerblue;
        }

        .date {
            color: rgb(78, 77, 77);
        }

        .padding-div {
            display: flex;
        }

        .third-row {
            padding-top: 30px;
        }

        .fourth-row {
            margin-top: 30px;
            background-color: black;
        }

        .footer_image {
            padding: 10px;
        }

        .footer_p {
            color: rgb(206, 206, 206);
            padding: 0 41px;
            font-size: 13px;
            font-weight: 550;
        }

        .higlight-line {
            height: 2px;
            width: 13px;
            margin: 10px 0;
            background-color: rgb(206, 206, 206);
        }

        .footer_list {
            list-style: none;
        }

        .footer_item {
            padding: 5px 0;
        }

        .footer_links {
            text-decoration: none;
            color: rgb(206, 206, 206);
            font-weight: 550;
            font-size: 13px;
        }

        .footer_links:hover {
            text-decoration: none;
            color: orangered;
        }

        .footer_links {
            display: flex;
        }

        .heading_text {
            display: inline-block;

        }

        .heading_text::after {
            height: 4px;
            width: 30%;
            margin: 0 auto;
            background-color: #7839a5;
            content: '';
            border-radius: 8px;
            display: block;

        }

    </style>
</head>

<body>
    <?php
    $Category = App\Models\Category::where('status','active')->take(8)->get();
    ?>
    <!-- this is the div of logo content -->
    <div class="logo_content">
        <div class="image_part">
            <img src="logo.png" alt="" class="logo" width="50%">
        </div>
        <div class="advertise_part">
            <div class="white_add"></div>
        </div>
    </div>
    <!-- this is the nav -->
    <nav>
        @isset($Category)
            <ol class="nav">
                <li class="nav-items" onclick="openit();"><a href="#" class="nav-links"
                        style="background-color:rgb(175, 255, 228); padding:10px;"><i class="fas fa-search"></i></a></li>
                @foreach ($Category as $cat)
                    <li class="nav-items"><a href="/category/{{ $cat->id }}" class="nav-links">{{ $cat->name }}</a></li>
                @endforeach
            </ol>
        @endisset
        {{-- <ol class="nav">
            <li class="nav-items"><a href="" class="nav-links">Home</a></li>
            <li class="nav-items"><a href="" class="nav-links">how to</a></li>
            <li class="nav-items"><a href="" class="nav-links">facebook</a></li>
            <li class="nav-items"><a href="" class="nav-links">messenger</a></li>
            <li class="nav-items"><a href="" class="nav-links">twitter</a></li>
            <li class="nav-items"><a href="" class="nav-links">instagram</a></li>
            <li class="nav-items"><a href="" class="nav-links">youtube</a></li>
            <li class="nav-items"><a href="" class="nav-links">downloads</a></li>
        </ol> --}}
    </nav>
    <div class="SearchSection" id="searchBar_Open">
        <input type="text" name="" id="" class="searchBar" placeholder="Search Your Required">
    </div>
    @yield('content')
    <!-- section for the footer -->
    <section>
        <div class="row fourth-row">
            <div class="col-md-3 col-12">
                <img src="logo.png" alt="" class="footer_image" width="100%">
                <p class="footer_p">Techno KD is the leading technology portal of Nepal for the latest Tech News,
                    Apps, Tips & Tricks, Unboxing, and Gadgets Reviews, Help & How-To, and more. For our latest videos,
                    subscribe to our YouTube channel.</p>
            </div>
            <div class="col-md-3 col-12">
                <ol class="footer_list">
                    <li class="footer_item"><a href="" class="footer_links" style="font-size: 15px;">
                            <div class="higlight-line"></div>&nbsp;QUICK ACCESS
                        </a></li>
                    <li class="footer_item"><a href="" class="footer_links">Home</a></li>
                    <li class="footer_item"><a href="" class="footer_links">How To</a></li>
                    <li class="footer_item"><a href="" class="footer_links">Facebook</a></li>
                    <li class="footer_item"><a href="" class="footer_links">Messenger</a></li>
                    <li class="footer_item"><a href="" class="footer_links">Instagram</a></li>
                    <li class="footer_item"><a href="" class="footer_links">Twitter</a></li>
                    <li class="footer_item"><a href="" class="footer_links">YouTube</a></li>
                    <li class="footer_item"><a href="" class="footer_links">Downloads</a></li>
                </ol>
            </div>
            <div class="col-md-3 col-12">
                <ol class="footer_list">
                    <li class="footer_item"><a href="" class="footer_links">About Us</a></li>
                    <li class="footer_item"><a href="" class="footer_links">Advertise</a></li>
                    <li class="footer_item"><a href="" class="footer_links">Privacy Policy</a></li>
                    <li class="footer_item"><a href="" class="footer_links">Terms and Conditions</a></li>
                    <li class="footer_item"><a href="" class="footer_links">Contact Us</a></li>
                </ol>
            </div>
            <div class="col-md-3 col-12">
                <ol class="footer_list">
                    <li class="footer_item"><a href="" class="footer_links" style="font-size: 15px;">
                            <div class="higlight-line"></div>&nbsp;SOCIAL NETWORKS
                        </a></li>
                    <li class="footer_item"><a href="" class="footer_links"><i class="fab fa-facebook"
                                style="padding-top: 5px;"></i>&nbsp;&nbsp;Facebook</a></li>
                    <li class="footer_item"><a href="" class="footer_links"><i class="fab fa-instagram"
                                style="padding-top: 5px;"></i>&nbsp;&nbsp;Instagram</a></li>
                    <li class="footer_item"><a href="" class="footer_links"><i class="fab fa-youtube"
                                style="padding-top: 5px;"></i>&nbsp;&nbsp;You Tube</a></li>
                </ol>
            </div>
        </div>
    </section>
    <script>
        function openit() {
            document.getElementById('searchBar_Open').style.opacity = "1";
            document.getElementById('searchBar_Open').style.transform = "translateY(0px)";
        }
    </script>

</html>
