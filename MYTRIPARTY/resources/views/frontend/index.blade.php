<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/index.css') }}">
</head>
<body>
    <div class="menu__bar">
        <div class="image__text">
            <img src="{{ asset('image/mt-logo.svg') }}" alt="" width="30%">
            <a href="" class="home__link">HOME</a>
        </div>
        <div class="login__register">
            <a href="" class="login_btn"><div class="side__magic"></div>Login</a>
            <a href="" class="register_btn"><div class="side__magic"></div>Register</a>
        </div>
    </div>
    <div class="first__row">
        <div class="mid__row">
            <ol class="ways_no">
                <li><input type="radio" name="" id="">&nbsp;One Way</li>
                <li><input type="radio" name="" id="">&nbsp;Two Way</li>
                <li><input type="radio" name="" id="">&nbsp;Mountain Flight</li>
            </ol>
            <div class="divide_mid_1" style="display: flex;">
                <section>
                    <label for="text_click" class="edit__label">FROM WHERE</label>
                    <div id="chane__text" onclick="open_datalist()">KATHMANDU</div>
                    <div class="show_focus" id="show_data">
                        <input type="text" list="list_place" class="edit__input" id="auto" autofocus>
                        <datalist id="list_place">
                            <option value="BIRGUNG" onclick="change_kth()"></option>
                            <option value="KATHMANDU" onclick="change_kth()"></option>
                            <option value="BHAIRAHA" onclick="change_kth()"></option>
                            <option value="DHANGADI" onclick="change_kth()"></option>
                            <option value="JOMSON" onclick="change_kth()"></option>
                            <option value="JANAKPUR" onclick="change_kth()"></option>
                            <option value="NEPALGUNJ" onclick="change_kth()"></option>
                            <option value="POKHARA" onclick="change_kth()"></option>
                        </datalist>
                    </div>
                </section>
                <section>
                    <label for="text_click" class="edit__label">FROM WHERE</label>
                    <div id="chane__text2" onclick="open_datalist2()">KATHMANDU</div>
                    <div class="show_focus" id="show_data2">
                        <input type="text" list="list_place" class="edit__input" id="auto" autofocus>
                        <datalist id="list_place">
                            <option value="BIRGUNG" onclick="change_kth()"></option>
                            <option value="KATHMANDU" onclick="change_kth()"></option>
                            <option value="BHAIRAHA" onclick="change_kth()"></option>
                            <option value="DHANGADI" onclick="change_kth()"></option>
                            <option value="JOMSON" onclick="change_kth()"></option>
                            <option value="JANAKPUR" onclick="change_kth()"></option>
                            <option value="NEPALGUNJ" onclick="change_kth()"></option>
                            <option value="POKHARA" onclick="change_kth()"></option>
                        </datalist>
                    </div>
                </section>
            </div>
            <div class="divide_mid_2"></div>
            <div class="divide_mid_3"></div>
        </div>
    </div>
    <script src="{{ asset('java/index.js') }}"></script>
</body>
</html>
