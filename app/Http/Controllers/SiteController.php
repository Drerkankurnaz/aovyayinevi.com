<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Autism;
use App\Models\Book;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Education;
use App\Models\Order;
use App\Models\Research;
use App\Models\School;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Team;
use App\Models\WebSetting;
use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends \App\Http\Controllers\Controller
{

    public function home()
    {


        return view('index', [

        ]);
    }


    public function hikayemiz()
    {
        return view('hikayemiz', [
            'about' => About::where('id', 1)->first(),
        ]);
    }


    public function vizyonumuz()
    {
        return view('vizyonumuz', [
            'about' => About::where('id', 2)->first(),
        ]);
    }

    public function misyonumuz()
    {
        return view('misyonumuz', [
            'about' => About::where('id', 3)->first(),
        ]);
    }

    public function yayinlarimiz()
    {
        $books = Book::orderBy('id')->get();

        return view('yayinlarimiz', [
            'books' => $books,

        ]);
    }

    public function kitap($id)
    {
        $book = Book::where('id', $id)->first();

        return view('kitap', [
            'book' => $book,

        ]);
    }
    public function siparisGonder(Request $request)
    {
        $data = $request->all();
    
        try {
            // Veritabanına kayıt işlemi
            Order::create([
                'book' => $data['kitap_adi'],
                'name' => $data['isim_soyisim'],
                'phone' => $data['tel_no'],
                'tc' => $data['tc_kimlik'],
                'address' => $data['teslimat_adresi'],
                'address_two' => $data['fatura_adresi'],
                'adet' => $data['adet'],
            ]);
    
            Mail::send('emails.siparis', $data, function ($message) {
                $message->from('info@aovyayinevi.com', 'Sipariş Formu');
                $message->to('info@aovyayinevi.com')->subject('Yeni Sipariş');
            });
    
            // Başarılı işlem sonrası kullanıcıyı aynı sayfaya geri yönlendir
            return redirect()->back()->with('success', 'Siparişiniz başarıyla gönderildi!');
    
        } catch (\Exception $e) {
            // Hata durumunda kullanıcıyı aynı sayfaya geri yönlendir ve hata mesajını göster
            return redirect()->back()->with('success', 'Siparişiniz başarıyla gönderildi!');

        }
    }
    


    public function yazarlarımız()
    {
        $writers = Writer::orderBy('id')->get();

        return view('yazarlarımız', [
            'writers' => $writers,

        ]);
    }





    public function otizmspektrumbozuklugunedir()
    {
        $autism = Autism::where('id', 1)->first();
        return view('otizmspektrumbozuklugunedir', [

            'common' => $this->siteCommonData(),
            'autism' => $autism,

        ]);
    }

    public function otizmspektrumbozuklugubelirtilerinelerdir()
    {
        $autism = Autism::where('id', 2)->first();
        return view('otizmspektrumbozuklugubelirtilerinelerdir', [

            'common' => $this->siteCommonData(),
            'autism' => $autism,

        ]);
    }

    public function otizmspektrumbozuklugunedenleri()
    {
        $autism = Autism::where('id', 3)->first();
        return view('otizmspektrumbozuklugunedenleri', [

            'common' => $this->siteCommonData(),
            'autism' => $autism,

        ]);
    }

    public function istatistik()
    {
        $autism = Autism::where('id', 4)->first();
        return view('istatistik', [
            'common' => $this->siteCommonData(),
            'autism' => $autism,

        ]);
    }

    public function bilimseldayanakliuygulamalar()
    {
        $autism = Autism::where('id', 5)->first();
        return view('bilimseldayanakliuygulamalar', [
            'common' => $this->siteCommonData(),
            'autism' => $autism,

        ]);
    }


    public function aileleregitimler()
    {
        $contents = Content::where('type', 2)->orderBy('id')->get();

        return view('aileleregitimler', [
            'common' => $this->siteCommonData(),
            'contents' => $contents,

        ]);
    }

    public function aileleregitim($parentId)
    {
        $ct = Content::where('title', $parentId)->first();

        return view('aileleregitim', [
            'common' => $this->siteCommonData(),
            'ct' => $ct,

        ]);
    }

    public function arastırmalar()
    {
        $contents = Research::orderBy('id')->get();

        return view('arastırmalar', [
            'common' => $this->siteCommonData(),
            'contents' => $contents,

        ]);
    }

    public function arastırma($id)
    {
        $ct = Research::where('title', $id)->first();

        return view('arastırma', [
            'common' => $this->siteCommonData(),
            'ct' => $ct,

        ]);
    }




    public function hizmetler()
    {
        $services = Service::orderBy('id')->get();

        return view('hizmetler', [
            'common' => $this->siteCommonData(),
            'services' => $services,

        ]);
    }


    public function hizmet($serviceId)
    {
        $service = Service::where('title', $serviceId)->first();

        return view('hizmet', [
            'common' => $this->siteCommonData(),
            'service' => $service,

        ]);
    }



    public function duyurular()
    {
        $contents = Announcement::orderBy('id')->get();

        return view('duyurular', [
            'common' => $this->siteCommonData(),
            'contents' => $contents,

        ]);
    }

    public function duyuru($id)
    {
        $ct = Announcement::where('title', $id)->first();

        return view('duyuru', [
            'common' => $this->siteCommonData(),
            'ct' => $ct,

        ]);
    }

    public function okulumuz($id)
    {
        $school = School::where('title', $id)->first();

        return view('okulumuz', [
            'common' => $this->siteCommonData(),
            'school' => $school,

        ]);
    }

    public function kariyer()
    {
        return view('kariyer', [
            'common' => $this->siteCommonData(),
        ]);
    }

    public function iletisim()
    {

        return view('contact', [

        ]);
    }

    public function contactStore(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();

        return redirect()->back()->with('success', 'Mesaj başarıyla gönderildi.');
    }




}
