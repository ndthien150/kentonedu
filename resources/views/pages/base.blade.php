<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .list13 .list_desc {
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            -moz-box-orient: vertical;
            -moz-line-clamp: 2;
        }

        #wrapper #wrapper {
            overflow: visible;
        }

        .list13 .list_title:hover {
            color: #081D61;
        }

        #slideshow [class*=thumbCover]:before {
            background: none !important
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" type="text/css" href="css/csstest.css"> -->
    <!-- for using font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/css.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap3.min.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="all">
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
    <style type="text/css">
        .list_position {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            line-height: 24px;
            max-height: 96px;
            overflow: hidden
        }

        .menu-content li {
            padding: 0 10px
        }

        .menu-content a {
            font-size: 20px
        }
    </style>
    <style type="text/css">
        @media screen and (max-width: 1023px) {
            #slideshow .item {
                background-size: 100% auto !important;
                background-repeat: no-repeat;
            }
        }

        @media (max-width: 767px) {
            .wrapSlideshow.thumbCover_35:before,
            .wrapSlideshow .thumbCover_35:before {
                padding-top: 35%
            }
            body {
                font-size: 1.2em;
            }
        }

        @media screen and (max-width: 540px) {
            .list12 .list_title {
                font-size: 1.2em
            }
        }
    </style>
    <style>
        div.tags {
            margin-top: 30px;
            border-top: 1px solid #ddd;
            padding-top: 30px;
        }

        .container ul.tags {
            padding: 0;
            margin: 0;
            list-style: none;
            display: inline
        }

        .tags>span {
            font-weight: bold
        }

        .container ul.tags li {
            display: inline-block;
        }

        .container ul.tags li a {
            padding: 5px 10px;
            border: 1px solid #ddd
        }

        .container ul.tags li a:hover {
            background: #1E2E42;
            color: #fff;
            border: 1px solid #1E2E42
        }

        .sidebar ul.menu {
            padding-left: 0
        }

        h2 {
            text-transform: capitalize
        }

        @media screen and (max-width: 1024px) {
            #header ul.mainmenu ul.submenu2 {
                position: relative;
                display: none;
                visibility: visible;
                opacity: 1;
                left: 0!important;
                background: #f7f7f7;
            }

            .showsubmenu-2 {
                font-size: 26px;
                z-index: 10;
                position: absolute;
                right: 0;
                width: 50px;
                height: 50px;
                display: block!important;
                line-height: 50px;
                text-align: center;
                font-family: FontAwesome;
                transition: .5s;
                -webkit-transition: .5s;
                -moz-transition: .5s;
                -o-transition: .5s;
            }
            .showsubmenu-2:before {
                content: '\f107';
            }
            .showsubmenu-2.rotate {
                transform: rotate(180deg);
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
            }
            #floatMenu {
                top: 0;
                right: 0;
            }

        }

        #btnClose {
            position: absolute;
            width: 30px;
            height: 30px;
            background: #bb2142;
            z-index: 999;
            text-align: center;
            line-height: 28px;
            border-radius: 50%;
            color: #fff;
            left: -15px;
            top: -15px;
            cursor: pointer;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            overflow: hidden;
            -ms-transform: scale(0.5, 0.5);
            /* IE 9 */
            -webkit-transform: scale(0.5, 0.5);
            /* Safari */
            transform: scale(0.5, 0.5);
            opacity: 0;
        }

        .sidebar-fixed #btnClose.show {
            -ms-transform: scale(1, 1);
            /* IE 9 */
            -webkit-transform: scale(1, 1);
            /* Safari */
            transform: scale(1, 1);
            opacity: 1;
        }

        @media screen and (max-width: 767px) {
            .snip1543 .desc {
                display: block !important;
                bottom: 0;
                left: 0;
                top: auto;
                width: 100%;
                height: 100%;
                -ms-transform: translateX(0%);
                transform: translateX(0);
                -webkit-transform: translateX(0%);
                opacity: 1
            }
            .snip1543 .desc .table-cell,
            .snip1543 .desc .display-table {
                display: block;
            }
            .snip1543 .desc .display-table {
                position: absolute;
                bottom: 0;
                height: 50px;
                background: #1d3768
            }
            .snip1543 .desc .table-cell p {
                display: none
            }
            .display-table .table-cell {
                padding: 10px
            }
            .snip1543 .desc h3 {
                font-size: .8em !important;
                line-height: 1.4 !important;
            }
            .snip1543 {
                background: #ddd
            }
            .sidebar ul.menu {
                padding-left: 0
            }
        }

        .sidebar-fixed .btnbook {
            width: 35px;
            left: -35px;
        }

        .sidebar-fixed .btnbook.show {
            left: 0;
        }
    </style>

    <title>@yield('title')</title>
</head>

<body class="home page-home page-home vi">
    <div id="wrapper">
        <div id="wrapper">
            <span class="menu-btn overlay"> </span>
            <div id="panel">
                <div class="container">
                    <div class="list-social">
                        <a href="https://www.facebook.com/kentonedu/" class="fb">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                        <!-- <a href="#" class="in"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="you"><i class="fa fa-google-plus"></i></a> -->
                        <a href="kentonyoutube" class="you">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                    <div class="header-right">
                        <div class="search">
                            <a href="#/tim-kiem">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <div class="link">
                            <a href="#/cau-hoi-thuong-gap/cau-hoi-chung">Q&amp;A</a>
                        </div>
                        <div class="language">
                            <a href="#/" class="active">Vi</a> -
                            <a href="#/en"> En </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="header">

            <div class="container">

                <a href="{{ route('home') }}" id="logo">
                    <div class="display-table">
                        <div class="table-cell">
                            <img src="{{asset('images/logo/LogoKenton-mini2.png')}}" alt=""> </div>
                    </div>
                </a>
                <div class="header-right">
                    <span class="menu-btn">
                        <span></span>
                    </span>
                </div>

                <div class="menu-mainmenu">
                    <ul class="mainmenu pull-left">
                        <li class=" parent ">
                            <a href="{{ route('about', 'gioi_thieu')}}" class="parent">Giới thiệu</a>
                            <ul>
                                <li class="">
                                    <a href="{{ route('about', 'gioi_thieu')}}">Giới thiệu</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('about', 'tai_sao')}}">Tại sao chọn kenton?</a>
                                </li>
                            </ul>
                        </li>

                        <li class=" parent ">
                            <a href="#dich-vu/dich-vu-kenton" class="parent">Dịch vụ</a>
                            <ul>
                                <li class="">
                                    <a href="#dich-vu/dich-vu-kenton-1">Tư vấn dịch vụ kenton 1</a>
                                </li>
                                <li class="">
                                    <a href="#dich-vu/dich-vu-kenton-2">Tư vấn dịch vụ kenton 2</a>
                                </li>
                                <li class="has-child">
                                    <a href="#/dich-vu/dich-vu-an-cu">Dịch vụ tư vấn</a>
                                    <ul class="submenu2">
                                        <li>
                                            <a href="#/dich-vu/dich-vu-an-cu/gioi-thieu-an-cu">Giới thiệu</a>
                                        </li>
                                        <li>
                                            <a href="#/dich-vu/dich-vu-an-cu/doi-tac-an-cu">Đối tác tư vấn</a>
                                        </li>
                                        <li>
                                            <a href="#/dich-vu/dich-vu-an-cu/hoat-dong-an-cu">Hoạt động tư vấn</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class=" parent ">
                            <a href="#/du-an-dau-tu-kenton" class="parent">Dự án</a>
                            <ul>
                                <li class="">
                                    <a href="#/du-an-dau-tu-kenton">Dự án đang kêu gọi</a>
                                </li>
                                <li class="">
                                    <a href="#/du-an-dau-tu-eb-5#du_an_da_het_suat">Dự án đã hết suất</a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="#/doi-tac">Đối tác</a>
                        </li>

                    </ul>
                    <ul class="mainmenu pull-right">
                        <li class=" parent ">
                            <a href="#/su-kien/hoat-dong-kenton" class="parent">Sự kiện</a>
                            <ul>
                                <li class="">
                                    <a href="#/su-kien/hoat-dong-kenton">Hoạt động KENTON</a>
                                </li>
                                <li class="">
                                    <a href="#/su-kien/trach-nhiem-cong-dong">Trách nhiệm cộng đồng</a>
                                </li>
                                <li class="">
                                    <a href="#/su-kien/video-kenton">Video KENTON</a>
                                </li>
                                <li class="">
                                    <a href="#/su-kien/goc-bao-chi">Góc báo chí</a>
                                </li>
                            </ul>
                        </li>

                        <li class=" parent ">
                            <a href="#/tin-tuc-kenton" class="parent">Tin tức</a>
                            <ul>
                                <li class="">
                                    <a href="#/tin-tuc-kenton/tin-tuc-my">Tin tức Du học</a>
                                </li>
                                <li class="">
                                    <a href="#/tin-tuc-kenton/tin-di-tru-my">Tin du học</a>
                                </li>
                                <li class="">
                                    <a href="#/cuoc-song-tai-my">Cuộc sống khi du học</a>
                                </li>
                                <li class="">
                                    <a href="#/huong-dan-dinh-cu-hoa-ky">Hướng dẫn đi du học</a>
                                </li>
                                <li class="">
                                    <a href="#/luat-di-tru">Hồ sơ</a>
                                </li>
                                <li class="">
                                    <a href="#/tin-tuc-kenton/tuyen-dung">Tuyển dụng</a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="#/cam-nhan-khach-hang">Khách hàng</a>
                        </li>

                        <li class="">
                            <a href="#/lien-he">Liên hệ</a>
                        </li>

                    </ul>
                </div>
            </div>
        </header>
        @yield('content')
        <div id="floatMenu">
            <div class="sidebar-fixed">
                <span id="btnClose" class="">x</span>
                <span class="btnbook">
                    <img src="{{asset('images/Tai-cam-nang.png')}}" alt="">
                </span>
                <div class="inner">

                    <div class=" f03">
                        <h4>
                            Vui lòng nhập thông tin để tải cẩm nang tư vấn du học </h4>
                        <form accept-charset="UTF-8" action="" class="infusion-form"
                            id="inf_form_d782e26ff87249b4fb1999b0471b06e5" method="POST">
                            <input name="inf_form_xid" value="d782e26ff87249b4fb1999b0471b06e5" type="hidden">
                            <input name="inf_form_name" value="Web Form submitted" type="hidden">
                            <input name="infusionsoft_version" value="1.69.0.80" type="hidden">
                            <div class="infusion-field row-label">
                                <div class="infusion-radio winput">
                                    <label class="radio infusion-option">
                                        <input id="inf_custom_Giớitính_Anh" name="inf_custom_Giớitính" value="Anh" checked="checked" type="radio">
                                        <span></span>
                                        Anh
                                    </label> &nbsp; &nbsp;
                                    <label class="radio infusion-option">
                                        <input id="inf_custom_Giớitính_Chị" name="inf_custom_Giớitính" value="Chị" type="radio">
                                        <span></span>
                                        Chị
                                    </label>

                                </div>
                            </div>

                            <div class="infusion-field row-label">
                                <label class="hidden" for="inf_field_FirstName">Họ, tên lót
                                    <span class="red">(*)</span>
                                </label>
                                <input class="infusion-field-input-container input" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="Nhập Họ, tên lót"
                                    type="text">
                            </div>
                            <div class="infusion-field row-label">
                                <label for="inf_field_LastName" class="hidden">Tên
                                    <span class="red">(*)</span>
                                </label>
                                <input class="infusion-field-input-container input" id="inf_field_LastName" name="inf_field_LastName" placeholder="Nhập tên"
                                    type="text">
                            </div>
                            <div class="infusion-field row-label">
                                <label for="inf_field_Email" class="hidden">Email
                                    <span class="red">(*)</span>
                                </label>
                                <input class="infusion-field-input-container input" id="inf_field_Email" name="inf_field_Email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*"
                                    placeholder="Nhập Email" type="text">
                            </div>

                            <div class="infusion-field row-label">
                                <label for="inf_field_Phone1" class="hidden">@lang('page.phone')</label>
                                <input class="infusion-field-input-container input" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Nhập số điện thoại"
                                    type="text">
                            </div>
                            <br>
                            <div class="infusion-submit text-center">
                                <button class="btn btn-3  " id="recaptcha_70e2702400fdb18faa879b02999bc5d7" type="submit">Đăng Ký</button>
                            </div>
                            <input id="timeZone" name="timeZone" value="Asia/Bangkok" type="hidden">
                        </form>

                    </div>

                </div>
            </div>

        </div>
        <section class="f03 row-section" id="form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">

                        <div class="row noclear">
                            <div class="col-sm-6 col-md-6">
                                <h2 class="uppercase">Đăng ký tư vấn</h2>
                                <p></p>
                                <p>Nếu Anh/Chị có bất kỳ thắc mắc về chương trình du học, vui lòng liên hệ với công ty
                                    kenton, chúng tôi sẵn sàng tiếp nhận và giải đáp tất cả các câu hỏi của Anh/Chị.</p>

                                <p>Xin vui lòng liên hệ Công ty Du học Kenton:</p>
                                <p></p>31A Hồ Biểu Chánh, Quận Phú Nhuận 
                                    <br> duhockenton@kentonedu.com
                                    <br> 0908 351 531 
                                </p>
                                <p></p>
                            </div>
                            <div class="col-sm-6 col-md-6" style="margin-top: 30px">
                                <!--      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.386769949894!2d106.70427251785604!3d10.78166041838211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f49355b9e3b%3A0x4035bc879a502570!2sThe+Nomad+Offices%2C+Gemadept+Tower!5e0!3m2!1svi!2s!4v1532420252707" width="375" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                                <!-- <iframe allowfullscreen="" src="T%C6%B0%20v%E1%BA%A5n%20%C4%91%E1%BA%A7u%20t%C6%B0%20%C4%91%E1%BB%8Bnh%20c%C6%B0%20M%E1%BB%B9%20theo%20ch%C6%B0%C6%A1ng%20tr%C3%ACnh%20%C4%91%E1%BA%A7u%20t%C6%B0%20EB5%20%20%20kenton_files/embed.htm"
                                    style="border:0" width="375" height="300" frameborder="0"></iframe> -->
                                <!-- Noi chua google emp map-->
                                <div style="border:0;background-color:green;" width="375" height="300">Nơi chứa google map</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 pleft50">
                        <p>Vui lòng để lại thông tin của bạn dưới đây</p>
                        <form accept-charset="UTF-8" action="" class="infusion-form"
                            id="inf_form_d782e26ff87249b4fb1999b0471b06e5" method="POST">
                            <input name="inf_form_xid" value="d782e26ff87249b4fb1999b0471b06e5" type="hidden">
                            <input name="inf_form_name" value="Web Form submitted" type="hidden">
                            <input name="infusionsoft_version" value="1.69.0.80" type="hidden">
                            <div class="infusion-field row-label">
                                <div class="infusion-radio winput">
                                    <label class="radio infusion-option">
                                        <input id="inf_custom_Giớitính_Anh" name="inf_custom_Giớitính" value="Anh" checked="checked" type="radio">
                                        <span></span>
                                        Nam
                                    </label> &nbsp; &nbsp;
                                    <label class="radio infusion-option">
                                        <input id="inf_custom_Giớitính_Chị" name="inf_custom_Giớitính" value="Chị" type="radio">
                                        <span></span>
                                        Nữ
                                    </label>

                                </div>
                            </div>

                            <div class="infusion-field row-label">
                                <label class="hidden" for="inf_field_FirstName">Họ, tên lót
                                    <span class="red">(*)</span>
                                </label>
                                <input class="infusion-field-input-container input" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="Nhập Họ, tên lót"
                                    type="text">
                            </div>
                            <div class="infusion-field row-label">
                                <label for="inf_field_LastName" class="hidden">Tên
                                    <span class="red">(*)</span>
                                </label>
                                <input class="infusion-field-input-container input" id="inf_field_LastName" name="inf_field_LastName" placeholder="Nhập tên"
                                    type="text">
                            </div>
                            <div class="infusion-field row-label">
                                <label for="inf_field_Email" class="hidden">Email
                                    <span class="red">(*)</span>
                                </label>
                                <input class="infusion-field-input-container input" id="inf_field_Email" name="inf_field_Email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*"
                                    placeholder="Nhập Email" type="text">
                            </div>

                            <div class="infusion-field row-label">
                                <label for="inf_field_Phone1" class="hidden">@lang('page.phone')</label>
                                <input class="infusion-field-input-container input" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Nhập số điện thoại"
                                    type="text">
                            </div>
                            <div class="infusion-field row-label vanphong">
                                <select class="select" name="inf_custom_TỉnhTP" id="inf_custom_TỉnhTP">
                                    <option value="" selected="selected">Chọn văn phòng tư vấn</option>
                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                    <option value="Cần Thơ">Cần Thơ</option>
                                </select>
                            </div>
                            <br>
                            <div class="infusion-submit text-center">
                                <button class="btn btn-3  " type="submit">Đăng Ký</button>
                            </div>
                            <input id="timeZone" name="timeZone" value="Asia/Bangkok" type="hidden">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="container">
                <div class="logogroup">
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="#/">
                                <img src="{{ asset('images/logo/LogoKenton-mini3.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3 col-xs-6">
                                    <p class="logof">
                                        <a href="#/" target="_blank">
                                            <img src="images/f594a942e0be90-logokenton3.png" alt="">
                                        </a>
                                    </p>
                                    <p>
                                        <strong></strong>
                                    </p>
                                    <ul class="menu">
                                        <li>
                                            <a href="#/dich-vu/visa-dinh-cu-my-theo-dien-dau-tu-eb-5" target="_blank">
                                                Tư vấn du học Mỹ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#/dich-vu/visa-khong-dinh-cu-my-l-1" target="_blank">
                                                Tư vấn du học Úc
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <p class="logof">
                                        <a href="http://kenton-edu.us/" target="_blank">
                                            <img src="images/46d4411cd8fbdf-logokenton6.png" alt="">
                                        </a>
                                    </p>
                                    <p>
                                        <strong></strong>
                                    </p>
                                    <ul class="menu">
                                        <li>
                                            <a href="http://kenton-edu.us/" target="_blank">
                                                Tư vấn du học Mỹ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#/" target="_blank">
                                                Định hướng từ các chuyên gia
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#/" target="_blank">
                                                Dịch vụ hỗ trợ
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <p class="logof">
                                        <a href="http://kenton-re.us/" target="_blank">
                                            <img src="images/4626346844f40d-logokenton4.png" alt="">
                                        </a>
                                    </p>
                                    <p>
                                        <strong>Tư vấn đầu tư:</strong>
                                    </p>
                                    <ul class="menu">
                                        <li>
                                            <a href="#/bat-dong-san-nha-o" target="_blank">
                                                Bất động sản nhà ở
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#/bat-dong-san-thuong-mai" target="_blank">
                                                Bất động sản thương mại
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <p class="logof">
                                        <a href="http://fgvisa.vn/" target="_blank">
                                            <img src="images/dd69cc8ba636f0-logokenton2.png" alt="">
                                        </a>
                                    </p>
                                    <p>
                                        <strong>Tư vấn du học:</strong>
                                    </p>
                                    <ul class="menu">
                                        <li>
                                            <a href="#/bo-dao-nha" target="_blank">
                                                Bồ Đào Nha
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#/cong-hoa-sip" target="_blank">
                                                Cộng Hoà Síp
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://fgvisa.vn/uc" target="_blank">
                                                Úc
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottomfooter">
                <div class="container">
                    <div class="copyright">All right reserved © KENTON education 2018.</div>
                    <div class="list-social">
                        <a href="https://www.facebook.com/kentonedu/" class="fb">
                            <i class="fa fa-facebook-official"></i>
                        </a>
                        <!-- <a href="#" class="in"><i class="fa fa-instagram"></i></a> -->
                        <a href="#youtube Kenton" class="you">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <style>
        .pleft50 {
            padding-left: 50px
        }

        .container ul {
            padding-left: 30px;
        }

        .logogroup ul {
            padding-left: 0
        }

        .section-header i {
            display: none
        }

        #myModalDownload .infusion-field {
            position: relative;
        }

        #myModalDownload .infusion-field label.error {
            position: absolute;
            top: 8px;
            right: 7px;
            color: red;
        }

        .loadingForm {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            vertical-align: middle;
            text-align: center;
            display: none
        }

        .loadingForm:before {
            content: "";
            display: inline-block;
        }

        .loadingForm img {
            width: 50%;
            display: inline-block;
        }

        #formContact {
            position: relative;
        }

        .textreturn {
            text-align: center;
            display: none;
            display: none;
            clear: both
        }

        .downloadFile {
            display: none
        }

        .sidebar-fixed .vanphong {
            display: none
        }

        body>#wrapper>#wrapper {
            overflow-x: visible;
        }

        #header ul.mainmenu ul.submenu2 {
            left: 100%;
            top: 0;
            margin-top: 0 !important;
        }

        #header ul.mainmenu ul li.has-child {
            position: relative;
        }

        #header ul.mainmenu ul.submenu2:before {
            left: -20px;
            top: 20px;
            border-bottom: 10px solid transparent;
            border-right: 10px solid #1D3768;
            border-top: 10px solid transparent;
        }

        #header ul.mainmenu ul.submenu2:hover:before {
            border-right: 10px solid #0C50B8;
        }

        #header ul.mainmenu ul li.has-child:before {
            content: "";
            position: absolute;
            top: 25px;
            right: 10px;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #fff;
            border-top: 5px solid transparent;
        }

        #floatMenu {
            transition: all 0.4s ease 0s;
            -moz-transition: all 0.4s ease 0s;
            -webkit-transition: all 0.4s ease 0s;
            -o-transition: all 0.4s ease 0s;
        }

        .noclear {
            clear: inherit;
        }
    </style>
    <script>
        (function ($) {
            $(document).ready(function () {
                $('#btnClose').on('click', function () {
                    $('.sidebar-fixed').removeClass('show');
                    setTimeout(
                        function () {
                            $('.btnbook,#btnClose').removeClass("show");
                        }, 300);
                });
                $(".ia-container").each(function () {
                    main = $(this);
                    total = parseInt($(main).attr('data-item'));
                    container = $(main).width();
                    item = container * 0.6;
                    widthdu = container - item;
                    input = widthdu / (total - 1);
                    $(main).find('figure').css('width', item + 'px');
                    $(main).find('figure').css('left', input + 'px');
                    $(main).find('input:checked ~ figure').css('left', item + 'px');
                    input2 = $(main).find('input');
                    input2.each(function () {
                        $(this).on('change', function () {
                            if ($(this).prop('checked')) {
                                $(main).find('figure').css('left', input + 'px').removeClass('active');
                                $(this).next().next().css('left', item + 'px').addClass('active');
                            }
                        });
                    });
                    $(main).find('input').css('width', input + 'px');
                });


                // function moveFloatMenu() {
                //     var menuOffset = menuYloc.top + $(this).scrollTop() + "px";
                //     $('#floatMenu').animate({
                //         top: menuOffset
                //     }, {
                //         duration: 700,
                //         queue: false
                //     });
                // }
                function moveFloatMenu() {
                    var winWidth = $(window).width();
                    if (winWidth > 1024) {
                        var menuOffset = menuYloc.top + $(this).scrollTop() + "px";
                        $('#floatMenu').animate({
                            top: menuOffset
                        }, {
                                duration: 100,
                                queue: false
                            });
                    } else {
                        var $sidebar = $('#floatMenu'),
                            $window = $(window),
                            offset = $sidebar.offset(),
                            topPadding = 100;
                        if ($window.scrollTop() > $sidebar.scrollTop()) {
                            $sidebar.stop().animate({
                                marginTop: $window.scrollTop() - $sidebar.scrollTop() + topPadding
                            }, {
                                    duration: 100,
                                    queue: false
                                });
                        } else {
                            $sidebar.stop().animate({
                                marginTop: 50
                            });
                        }
                    }

                }
                menuYloc = $('#floatMenu').offset();
                $(window).scroll(moveFloatMenu);
                // moveFloatMenu();

            });
        })(jQuery);

        //menu cấp 2
        var winWidth = $(window).width();
        if (winWidth <= 1024) {
            $('.menu-mainmenu li.has-child').each(function () {
                var $this = $(this);
                $this.append('<span class="showsubmenu-2 fa fa-caret-down"></span>');
                $this.children('.showsubmenu-2').css({ 'top': '0px' });
                var button = $this.children('.showsubmenu-2');
                button.on('click', function () {
                    if ($(this).prev().is(':visible')) {
                        $(this).prev().slideUp(300);
                        $(this).removeClass('rotate');
                    } else {
                        $(this).prev().slideDown(300);
                        $(this).addClass('rotate');
                    }
                })
            });

        }


    </script>
    <script src="{{ asset('js/owl.js')}}"></script>
    <script src=" {{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/bootstrap3.js') }}"></script>
    <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>