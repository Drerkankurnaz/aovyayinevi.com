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
<div id="av-splash">
    <div class="av-splash-badge">
        <img src="{{ asset('assets/images/logo.png') }}" alt="AOV Yayınevi" class="av-splash-logo">
    </div>
    <style>
        #av-splash {
            position: fixed; inset: 0; z-index: 99999;
            display: flex; align-items: center; justify-content: center;
            background: radial-gradient(circle at 15% 15%, rgba(99,102,241,0.35) 0%, transparent 45%),
                        radial-gradient(circle at 85% 85%, rgba(34,211,238,0.35) 0%, transparent 45%),
                        linear-gradient(160deg, #0b1024 0%, #131a35 55%, #171f3d 100%);
            transition: opacity .6s ease;
        }
        #av-splash.av-hide { opacity: 0; pointer-events: none; }
        .av-splash-badge {
            background: #ffffff; border-radius: 1.5rem; padding: 1.5rem;
            animation: avSplashIn 1.1s ease both;
            box-shadow: 0 0 40px rgba(99,102,241,0.45);
        }
        .av-splash-logo { height: 110px; width: auto; display: block; }
        @keyframes avSplashIn {
            0% { opacity: 0; transform: scale(.55); }
            60% { opacity: 1; transform: scale(1.06); }
            100% { opacity: 1; transform: scale(1); }
        }
    </style>
    <script>
        (function () {
            var s = document.getElementById('av-splash');
            if (sessionStorage.getItem('avSplashShown')) { s.parentNode.removeChild(s); return; }
            sessionStorage.setItem('avSplashShown', '1');
            setTimeout(function () {
                s.classList.add('av-hide');
                setTimeout(function () { if (s.parentNode) s.parentNode.removeChild(s); }, 700);
            }, 1500);
        })();
    </script>
</div>
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
                                        <a href="{{route('kitap', ['id' => 1])}}" class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3">İncele <i class="fas fa-arrow-right ml-2"></i></a>
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
                                        <h2 class="fwEbold position-relative mb-xl-7 mb-lg-5">Özel Gereksinimli Bi̇reyler Depreme Hazır Mı? </h2>
                                        <a href="{{route('kitap', ['id' => 4])}}" class="btn btnTheme btnShop fwEbold text-white md-round py-2 px-3 py-md-3 px-md-4">İncele <i class="fas fa-arrow-right ml-2"></i></a>
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
        <aside class="footerHolder container-fluid overflow-hidden px-xl-20 px-lg-14 pt-xl-12 pb-xl-8 pt-lg-12 pt-md-8 pt-10 pb-lg-8">
            <div class="d-flex flex-wrap flex-lg-nowrap">
                <div class="coll-1 pr-3 mb-sm-4 mb-3 mb-lg-0">
                    <h3 class="headingVI fwEbold text-uppercase mb-7">İletişim</h3>
                    <ul class="list-unstyled footerContactList mb-3">
                        <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-place mr-3"></span> <address class="fwEbold m-0">Adres: Hasan Paşa Mah. Fatih Cad. No: 41 Kırkpınar / Sapanca / SAKARYA</address></li>
                        <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Telefon : <a href="javascript:void(0);">+90 264 582 05 06</a></span></li>
                        <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Mobil : <a href="javascript:void(0);">+90 533 051 30 19</a></span></li>
                        <li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span class="leftAlign"> Email:  <a href="javascript:void(0);">info@alpaslanotizmvakfi.org</a></span></li>
                    </ul>
                    <ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
                        <li class="fwEbold mr-xl-11 mr-sm-6 mr-4">Takip Edin:</li>
                        <li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                        <li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                        <li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a></li>
                        <li class="mr-2"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>
                    </ul>
                </div>
                <div class="coll-2 mb-sm-4 mb-3 mb-lg-0">
                    <h3 class="headingVI fwEbold text-uppercase mb-6">Hızlı Menü</h3>
                    <ul class="list-unstyled footerNavList">
                        <li class="mb-1"><a href="javascript:void(0);">Ana Sayfa</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">Yayınlarımız</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">Yazarlarımız</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">İletişim</a></li>
                        <li><a href="javascript:void(0);">Gizlilik Politikası</a></li>
                    </ul>
                </div>
                <div class="coll-3 mb-sm-4 mb-3 mb-lg-0">
                    <h3 class="headingVI fwEbold text-uppercase mb-6">Hakkımızda</h3>
                    <ul class="list-unstyled footerNavList">
                        <li class="mb-1"><a href="javascript:void(0);">Hikayemiz</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">Misyonumuz</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">Vizyonumuz</a></li>
                    </ul>
                </div>
                <div class="coll-4 mb-sm-4 mb-3 mb-lg-0">
                    <h3 class="headingVI fwEbold text-uppercase mb-7 pl-xl-14 pl-lg-10">Tag</h3>
                    <ul class="list-unstyled tagNavList d-flex flex-wrap justify-content-lg-end mb-0">
                        <li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Bilimsel Eğitim</a></li>
                        <li class="text-center mb-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Otizm Destek</a></li>
                        <li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Akademik Yayınlar</a></li>
                        <li class="text-center mb-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Eğitim Metotları</a></li>
                        <li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Danışmanlık</a></li>
                        <li class="text-center mb-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Bilim Kurulu</a></li>
                    </ul>

                </div>
            </div>
        </aside>
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
