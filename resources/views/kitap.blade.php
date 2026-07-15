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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .headingIV {
    max-width: 60%; /* veya istediğiniz bir yüzde değeri, tamamen sayfanızın tasarımına bağlı */
    margin: 0 auto; /* Başlığı ortalar */
    word-wrap: break-word; /* Uzun kelimelerin satır atlamasını sağlar */
}.breadCrumbs {
  display: flex;
  justify-content: center;
  list-style: none; /* Liste işaretlerini kaldırır */
  padding: 0; /* Varsayılan padding'i kaldırır */
  max-width: 90%; /* veya ihtiyaca göre bir değer */
  margin: 0 auto; /* Liste öğesini ortalar */
}

.breadCrumbs li {
  margin-right: 8px; /* Sağdaki boşluğu ayarlar */
  white-space: nowrap; /* Metnin tek satırda kalmasını sağlar, gerekirse bu kısımda değişiklik yapılabilir */
}

.breadCrumbs li.active {
  white-space: normal; /* Aktif öğe için metnin birden fazla satıra yayılmasına izin verir */
  word-wrap: break-word; /* Uzun kelimelerin satır atlamasını sağlar */
  max-width: 457px; /* Maksimum genişlik, ihtiyaca göre ayarlanabilir */
}
        </style>
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
                        <h1 class="headingIV fwEbold playfair mb-4">{{$book->title}}</h1>
                        <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                            <li class="mr-2"><a href="{{'/'}}">Ana Sayfa</a></li>
                            <li class="mr-2">/</li>
                            <li class="active">{{$book->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- twoColumns -->
        <div class="twoColumns container pt-xl-23 pb-xl-20 pt-lg-20 pb-lg-20 py-md-16 py-10">
            <div class="row mb-6">
                <div class="col-12 col-lg-6 order-lg-1">
                    <!-- productSliderImage -->
                    <div class="productSliderImage mb-lg-0 mb-4">
                        <div>
                            <img src="{{asset('storage/'.$book->photo)}}" alt="image description" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-3">
                    <!-- productTextHolder -->
                    <div class="productTextHolder overflow-hidden">
                        <h2 class="fwEbold mb-2">{{$book->title}}</h2>
                        <strong class="price d-block mb-5 text-green">{{$book->price}}</strong>
                        <p class="mb-5">{{$book->content}}</p>
                        <ul class="list-unstyled sizeList d-flex flex-wrap mb-4">
                            <li class="text-uppercase mr-6">"Kitap taleplerinizi info@alpaslanotizm.com adresine ya da mesai saatleri içerisinde +90 533 051 30 19 numaralı telefona iletebilir, havale ile ödeme gerçekleştirebilirsiniz"<br><br> IBAN:TR11 0011 1000 0000 01 12 01 11 57
                                <br><br> ALICI ÜNVAN: ALPASLAN EĞİTİM VE DANIŞMANLIK A.Ş<br><br> 
                            </li>
                            </li>
                        </ul>
                        <div class="holder overflow-hidden d-flex flex-wrap mb-6">
                            <a href="https://www.trendyol.com/magaza/alpaslan-egitim-ve-danismanlik-a-s-m-892233?sst=0" target="_blank" class="btn btnTheme btnShop fwEbold text-white md-round py-3 px-4 py-md-3 px-md-4">Sipariş vermek için aşağıdaki formu doldurunuz</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <section class="contactSecBlock container pt-xl-23 pb-xl-24 pt-lg-20 pb-lg-10 pt-md-16 pb-md-8 py-10">
            <div class="row">
                <header class="col-12 mainHeader mb-10 text-center">
                    <h1 class="headingIV playfair fwEblod mb-7">Sipariş Formu</h1>
                    <p>Siparişinizi hemen verin!</p>
                </header>
            </div>
            <div class="row">
                <div class="col-12">
                    <form id="siparisForm" action="{{ route('siparisGonder') }}" method="POST" class="contactForm">
                        @csrf
                        <div class="d-flex flex-wrap row1 mb-md-1">
                            <div class="form-group coll mb-5">
                                <label for="kitapAdi">Kitap Adı</label>
                                <input type="text" class="form-control bg-white" id="kitapAdi" name="kitap_adi" required>
                            </div>
                            <div class="form-group coll mb-5">
                                <label for="isimSoyisim">İsim Soyisim</label>
                                <input type="text" class="form-control bg-white" id="isimSoyisim" name="isim_soyisim" required>
                            </div>
                            <div class="form-group coll mb-5">
                                <label for="telNo">Tel No</label>
                                <input type="text" class="form-control bg-white" id="telNo" name="tel_no" required>
                            </div>
                            <div class="form-group coll mb-5">
                                <label for="tcKimlik">TC Kimlik / Vergi No</label>
                                <input type="text" class="form-control bg-white" id="tcKimlik" name="tc_kimlik" required>
                            </div>

                            <div class="form-group coll mb-5">
                                <label for="adet">Adet</label>
                                <input type="text" class="form-control bg-white" id="adet" name="adet" required>
                            </div>
                        </div>
                    
                        <div class="form-group w-100 mb-6">
                            <label for="teslimatAdresi">Teslimat Adresi</label>
                            <textarea class="form-control bg-white" id="teslimatAdresi" name="teslimat_adresi" required></textarea>
                        </div>
                        <div class="form-group w-100 mb-6">
                            <label for="faturaAdresi">Fatura Adresi</label>
                            <textarea class="form-control bg-white" id="faturaAdresi" name="fatura_adresi" required></textarea>
                        </div>
                        <div class="text-center">
                            <p>Havale ile ödeme için: <br> IBAN:TR11 0011 1000 0000 01 12 01 11 57<br>ALICI ÜNVAN: ALPASLAN EĞİTİM VE DANIŞMANLIK A.Ş</p>
                            <button type="submit" class="btn btnTheme btnShop md-round fwEbold text-white py-3 px-4 py-md-3 px-md-4">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        
        



        <div class="container-fluid px-xl-20 px-lg-14">
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
            <p class="mb-0">Coppyright 2023 by <a href="javascript:void(0);">Otimeta</a> - Tüm hakları saklıdır.</p>
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jqueryCustome.js')}}"></script>


</body>
</html>
