<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpaslan Otizm Vakfı | Misyonumuz</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>
<!-- pageWrapper -->
<div id="pageWrapper">
    <!-- header -->
    <header id="header" class="position-relative">
        <div class="headerHolder container pt-lg-5 pb-lg-7 py-4">
            <div class="row">
                <div class="col-6 col-sm-2">
                    <!-- mainLogo -->
                    <div class="logo">
                        <a href="{{'/'}}"><img src="{{asset('assets/images/logo.png')}}" alt="Botanical" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-6 col-sm-10 col-lg-10 static-block">
                    <!-- mainHolder -->
                    <div class="mainHolder pt-lg-5 pt-3 justify-content-center">
                        <!-- pageNav2 -->
                        <nav class="navbar navbar-expand-lg navbar-light p-0 pageNav2 position-static">
                            <button type="button" class="navbar-toggle collapsed position-relative" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mx-auto text-uppercase d-inline-block">

                                    <li class="nav-item">
                                        <a class="d-block" href="{{'/'}}">Ana Sayfa</a>
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
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- introBannerHolder -->
        <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{asset('assets/images/page-slide.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
                        <h1 class="headingIV fwEbold playfair mb-4">Misyonumuz</h1>
                        <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                            <li class="mr-2"><a href="{{'/'}}">Ana Sayfa</a></li>
                            <li class="mr-2">/</li>
                            <li class="active">Misyonumuz</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="abtSecHolder container pt-xl-24 pb-xl-12 pt-lg-20 pb-lg-10 pt-md-16 pb-md-8 pt-10 pb-5">
            <div class="row">
                <div class="col-12 col-lg-12 pt-xl-12 pt-lg-8">
                    <h2 class="playfair fwEbold position-relative mb-7 pb-5">
                        <strong class="d-block">Misyonumuz</strong>
                    </h2>
                    <ul>
                        <li>
                            Otizm konusunda dünyanın önde gelen yayınevlerinden birisi olacağız.
                        </li>
                        <li>
                            Otizmli bireylerin ve ailelerin yaşam kalitesini yükseltmek amacıyla bilimsel eserler veren akademisyenleri destekleyeceğiz.
                        </li>
                        <li>
                            Ürünlerimizin daha çok kişiye ulaşmasını sağlamak amacıyla; daha düşük maliyetli üretim ve daha yaygın dağıtım ağı oluşturmak için araştırmalar yapacağız.
                        </li>
                        <li>
                            Rekabetçi olabilmek için altyapımızı ve gücümüzü artıracağız.
                        </li>
                        <li>
                            Mali ve politik olarak bağımsızlığımızı korurken, amaçlarımıza ve misyonumuza destek verdiği sürece alanımızdaki diğer kurum ve kuruluşlarla işbirliği yapacağız.
                        </li>
                        <li>
                            Yaptığımız her şeyde yenilikçi ve etkili olacağız.
                        </li>
                        <li>
                            Dünya Yayıncılar Birliğinin saygın bir üyesi olacağız.
                        </li>
                        <li>
                            Yayınevimizi iddialı hale getirerek, otizm konusunda uzman ve başarılı akademisyenlerle çalışacağız.
                        </li>
                        <li>
                            Eserin basım kararı alınması sürecinde, bilimsel etik kuralları esas alınarak, otizm konusunda uzman kişilerin hakemlik yapmaları sağlanacaktır.
                        </li>
                        <li>
                            Ürettiğimiz eserlerle ülke ekonomisine katkı sağlayarak ülkemizin daha çok gelişmesi sonucunda; toplumun, OSB’li bireylerin ve ailelerinin refahının yükselmesi için çalışacağız.
                        </li>
                        <li>
                            Gerekli mal ve hizmetleri mümkün olan en düşük maliyetlerle temin etmek ve satmak suretiyle topluma hizmet etmeye çalışacağız.
                        </li>
                        <li>
                            Sürdürülebilirlik ilkeleri doğrultusunda;
                            geri dönüştürülmüş kağıt,
                            yerli baskı malzemesi,
                            fosil yakıt kullanmayan düşük enerji sarfiyatlı makinalar,
                            sürdürülebilir baskı mürekkebi kullanan basımevleri ile çalışılarak, karbon ayak izini minimuma indireceğiz.
                        </li>

                    </ul>

                </div>

            </div>
        </section>

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

        <aside class="footerHolder container-fluid overflow-hidden px-xl-20 px-lg-14 pt-xl-12 pb-xl-8 pt-lg-12 pt-md-8 pt-10 pb-lg-8">
            <div class="d-flex flex-wrap flex-lg-nowrap">
                <div class="coll-1 pr-3 mb-sm-4 mb-3 mb-lg-0">
                    <h3 class="headingVI fwEbold text-uppercase mb-7">İletişim</h3>
                    <ul class="list-unstyled footerContactList mb-3">
                        <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-place mr-3"></span> <address class="fwEbold m-0">Adres: Hasan Paşa Mah. Fatih Cad. No: 41 Kırkpınar / Sapanca / SAKARYA</address></li>
                        <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Telefon : <a href="javascript:void(0);">+90 264 582 05 06</a></span></li>
                        <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Mobil : <a href="javascript:void(0);">+90 533 051 30 19</a></span></li>
                        <li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span class="leftAlign">Email:  <a href="javascript:void(0);">info@alpaslanotizmvakfi.org</a></span></li>
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
                        <li class="mb-1"><a href="{{'/'}}">Ana Sayfa</a></li>
                        <li class="mb-2"><a href="{{route('yayinlarimiz')}}">Yayınlarımız</a></li>
                        <li class="mb-2"><a href="{{route('yazarlarımız')}}">Yazarlarımız</a></li>
                        <li class="mb-2"><a href="{{route('iletisim')}}">İletişim</a></li>
                    </ul>
                </div>
                <div class="coll-3 mb-sm-4 mb-3 mb-lg-0">
                    <h3 class="headingVI fwEbold text-uppercase mb-6">Hakkımızda</h3>
                    <ul class="list-unstyled footerNavList">
                        <li class="mb-1"><a href="{{route('hikayemiz')}}">Hikayemiz</a></li>
                        <li class="mb-2"><a href="{{route('misyonumuz')}}">Misyonumuz</a></li>
                        <li class="mb-2"><a href="{{route('vizyonumuz')}}">Vizyonumuz</a></li>
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
