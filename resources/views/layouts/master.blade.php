<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpaslan Otizm Vakfı | Yayınevi</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>
<div id="pageWrapper">
    <header id="header" class="pt-lg-5 pt-md-3 pt-2 position-absolute w-100">
        <div class="container-fluid px-xl-17 px-lg-5 px-md-3 px-0 d-flex flex-wrap">

            <div class="col-12 col-sm-6 col-lg-12 static-block">
                <div class="mainHolder justify-content-center">
                    <nav class="navbar navbar-expand-lg navbar-light p-0 pageNav1 position-static">
                        <button type="button" class="navbar-toggle collapsed position-relative mt-md-2" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto text-uppercase d-inline-block">
                                <li class="nav-item active dropdown">
                                    <a href="{{'/'}}" class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ana sayfa</a>
                                </li>
                                <li class="nav-item  dropdown">
                                    <a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">hakkımızda</a>
                                    <ul class="list-unstyled text-capitalize dropdown-menu mt-0 py-0">
                                        <li class="d-block mx-0"><a href="{{route('hikayemiz')}}">Hikayemiz</a></li>
                                        <li class="d-block mx-0"><a href="{{route('vizyonumuz')}}">vizyonumuz</a></li>
                                        <li class="d-block mx-0"><a href="{{route('misyonumuz')}}">misyonumuz</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="d-block" href="{{route('yayinlarimiz')}}">yayınlarımız</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nLogo" href="{{'/'}}"><img src="{{asset('assets/images/logo.png')}}" alt="Botanical" class="img-fluid"></a>
                                </li>



                                <li class="nav-item">
                                    <a class="d-block" href="{{route('yazarlarımız')}}">yazarlarımız</a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-block" href="javascript:;">yayın başvuru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-block" href="{{route('iletisim')}}">iletişim</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="logo">
                        <a href="{{'/'}}"><img src="{{asset('assets/images/logo.png')}}" alt="Botanical" class="img-fluid"></a>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- main -->
    <main>
        <!-- introBlock -->
        <section class="introBlock position-relative">
            <div class="slick-fade">
                <div>
                    <div class="align w-100 d-flex align-items-center bgCover" style="background-image: url({{asset('assets/images/b-bg.jpg')}});">
                        <!-- holder -->
                        <div class="container position-relative holder pt-xl-10 pt-0">
                            <!-- py-12 pt-lg-30 pb-lg-25 -->
                            <div class="row">
                                <div class="col-12 col-xl-7">
                                    <div class="txtwrap pr-lg-10">
                                        <h1 class="fwEbold position-relative pb-lg-8 pb-4 mb-xl-7 mb-lg-6">VB-MAPP SET</h1>
                                        <p style="margin-right: 25px;" class="mb-xl-15 mb-lg-10">Yerleştirme Programı VB-MAPP Türkçe versiyonunun tüm telif hakları, orijinal dildeki yazar Dr. Mark Sundberg’in resmi onayı ile Prof. Dr. Yeşim Güleç Aslan, Prof. Dr. Onur Kurt ve Prof. Dr. Hasan Gürgür’e aittir. Alpaslan Otizm Vakfı Yayınevi tarafından satışa sunulmuştur.</p>
                                        <a href="set.html" class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3">İncele <i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="imgHolder">
                                    <img src="{{asset('assets/images/slide-1.png')}}" alt="image description" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="align w-100 d-flex align-items-center bgCover" style="background-image: url({{asset('assets/images/b-bg3.jpg')}});">
                        <!-- holder -->
                        <div class="container position-relative holder pt-xl-10 pt-0">
                            <!-- py-12 pt-lg-30 pb-lg-25 -->
                            <div class="row">
                                <div class="col-12 col-xl-7">
                                    <div class="txtwrap pr-lg-10">
                                        <h2 class="fwEbold position-relative mb-xl-7 mb-lg-5">Özel Gereksinimli Bireyler Depreme Hazır Mı? </h2>
                                        <a href="deprem.html" class="btn btnTheme btnShop fwEbold text-white md-round py-2 px-3 py-md-3 px-md-4">İncele <i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="imgHolder">
                                    <img src="{{asset('assets/images/slide-3.png')}}" alt="image description" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slickNavigatorsWrap">
                <a href="#" class="slick-prev"><i class="icon-leftarrow"></i></a>
                <a href="#" class="slick-next"><i class="icon-rightarrow"></i></a>
            </div>
        </section>
        <!-- chooseUs-sec -->
        <section class="chooseUs-sec container pt-xl-22 pt-lg-20 pt-md-16 pt-10 pb-xl-12 pb-md-7 pb-2">
            <div class="row">
                <div class="col-12 col-lg-6 mb-lg-0 mb-4">
                    <img src="{{asset('assets/images/banner.png')}}" alt="image description" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 pr-4">
                    <h2 class="headingII fwEbold playfair position-relative mb-6 pb-5">Alpaslan Otizm Yayınevi</h2>
                    <!-- chooseList -->
                    <ul class="list-unstyled chooseList">
                        <li class="d-flex justify-content-start mb-xl-7 mb-lg-5 mb-3">
                            <span class="icon fas fa-brain"></span>
                            <div class="alignLeft d-flex justify-content-start flex-wrap" style="margin-left: 30px;">
                                <h3 class="headingIII fwEbold mb-2">Bilimsel Temelli Eğitim</h3>
                                <p>Alpaslan Otizm Vakfı, otizmli bireylerin eğitiminde Türkiye şartlarına uygun bilimsel temelli yöntemler geliştirmek amacıyla kurulmuştur.</p>
                            </div>
                        </li>
                        <li class="d-flex justify-content-start mb-xl-6 mb-lg-5 mb-4">
                            <span class="icon fas fa-book"></span>
                            <div class="alignLeft d-flex justify-content-start flex-wrap" style="margin-left: 30px;">
                                <h3 class="headingIII fwEbold mb-2">Akademik Eserler</h3>
                                <p>Alpaslan Otizm Yayınevi, otizm konusundaki bilimsel eserleri basmak ve akademisyenleri desteklemek amacıyla faaliyet gösteriyor.</p>
                            </div>
                        </li>
                        <li class="d-flex justify-content-start">
                            <span class="icon fas fa-hand-holding-heart"></span>
                            <div class="alignLeft d-flex justify-content-start flex-wrap" style="margin-left: 30px;">
                                <h3 class="headingIII fwEbold mb-2">Bağlılık ve Destek</h3>
                                <p>Alpaslan Otizm Vakfı Yayınevi, Türkiye ve dünya çapında otizm konusunda bilimsel eserler üreten akademisyenlere kapılarını açıyor.</p>
                            </div>
                        </li>

                        <li class="d-flex justify-content-start" style="margin-top: 30px;">
                            <span class="icon fas fa-book-open"></span>
                            <div class="alignLeft d-flex justify-content-start flex-wrap" style="margin-left: 30px;">
                                <h3 class="headingIII fwEbold mb-2">Akademik Yayınlar</h3>
                                <p>Alpaslan Otizm Yayınevi, otizm konusundaki bilimsel çalışmaları desteklemek ve geniş kitlelere ulaştırmak amacıyla akademik yayınlar gerçekleştiriyor.</p>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </section>

        <div class="contactListBlock container overflow-hidden pt-xl-8 pt-lg-10 pt-md-8 pt-4 pb-xl-12 pb-lg-10 pb-md-4 pb-1">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- contactListColumn -->
                    <div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                        <span class="icon fas fa-book"></span>
                        <div class="alignLeft pl-2">
                            <strong class="headingV fwEbold d-block mb-1">Bilimsel Yayınlar</strong>
                            <p class="m-0">Otizm konusunda en güncel yayınlar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- contactListColumn -->
                    <div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                        <span class="icon fas fa-graduation-cap"></span>
                        <div class="alignLeft pl-2">
                            <strong class="headingV fwEbold d-block mb-1">Eğitim Destek</strong>
                            <p class="m-0">Bilimsel temelli eğitim metotları.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- contactListColumn -->
                    <div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-4 px-md-2 px-3 d-flex">
                        <span class="icon fas fa-comments"></span>
                        <div class="alignLeft pl-2">
                            <strong class="headingV fwEbold d-block mb-1">Destek ve Danışmanlık</strong>
                            <p class="m-0">Otizm konusunda uzman desteği.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- contactListColumn -->
                    <div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                        <span class="icon fas fa-award"></span>
                        <div class="alignLeft pl-2">
                            <strong class="headingV fwEbold d-block mb-1">Kalite ve Güvence</strong>
                            <p class="m-0">Akademik çalışmalarda yüksek standart.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid px-xl-20 px-lg-14">
            <!-- subscribeSecBlock -->
            <section class="subscribeSecBlock bgCover col-12 pt-xl-24 pb-xl-12 pt-lg-20 pt-md-16 pt-10 pb-md-8 pb-5" style="background-image: url({{asset('assets/images/n-bg.jpg')}})">
                <header class="col-12 mainHeader mb-sm-9 mb-6 text-center">
                    <h1 class="headingIV playfair fwEblod mb-4">Bültenimize Abone Olun</h1>
                    <span class="headerBorder d-block mb-md-5 mb-3"><img src="{{asset('assets/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
                    <p class="mb-sm-6 mb-3">E-posta listemize katılmak ve kendinizi güncel tutmak için e-posta adresinizi girin</p>
                </header>
                <form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap">
                    <input type="email" class="form-control px-4 border-0" placeholder="E-Posta adresinizi giriniz...">
                    <button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4">Gönder <i class="fas fa-arrow-right ml-2"></i></button>
                </form>
            </section>
        </div>
        <!-- footerHolder -->
        @include('site.layouts.footer')
    </main>
    <!-- footer -->
    <footer id="footer" class="container-fluid overflow-hidden px-lg-20">
        <div class="copyRightHolder text-center pt-lg-5 pb-lg-4 py-3">
            <p class="mb-0">Copyright 2026 by <a href="javascript:void(0);">Otimeta</a> - Tüm hakları saklıdır.</p>
        </div>
    </footer>
</div>
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jqueryCustome.js')}}"></script>
</body>
</html>
