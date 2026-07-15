<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutPagesSeeder extends Seeder
{
    public function run()
    {
        $now = now();

        $hikayemizContent = <<<HTML
<p class="pr-xl-16 pr-lg-10 mb-lg-0 mb-6">Alpaslan Otizm Vakfı Yayınevi, Alpaslan Eğitim ve Danışmanlık A.Ş. bünyesinde faaliyet göstermektedir. Alpaslan Eğitim ve Danışmanlık A.Ş, çeşitli bilimsel eserlerin hazırlanması ve yayımlanmasının yanısıra, seminer-konferans-kongre-kurs gibi bilimsel etkinliklerin düzenlenmesi faaliyetlerini de yürütmektedir.
Alpaslan Otizm Vakfı, otizmli bireylerin eğitiminde bilimsel temelli yöntemler kullanmak amacıyla 2019 yılında yola çıktı. Bu hedef doğrultusunda otizm konusunda uzman akademisyenlerden oluşturulan Bilim Kurulu, otizmli bireylerin eğitiminde kullanılmak üzere Türkiye şartlarına uygun bilimsel temelli yeni bir eğitim modeli geliştirmek üzere çalışmalara başladı. Bu çalışmalar sürerken, bilim kurulu üyesi akademisyenlerin otizm konusunda ürettikleri eserlerin kitap olarak basılması ihtiyacı ortaya çıktı.

İşte Alpaslan Otizm Vakfı Yayınevi, bu amaçla kuruldu. Önce, Alpaslan Otizm Vakfı Bilim Kurulu üyelerinin eserlerini basmak üzere kurulan Alpaslan Otizm Vakfı Yayınevi, daha sonra otizm konusunda Türkiye ve dünya çapında bilimsel eserler üreten ve otizm konusunda eserlerini bastırmak isteyen akademisyenleri destekleyen bir yayınevi olmak üzere geliştirildi.</p>
HTML;

        $vizyonumuzContent = <<<HTML
<p class="pr-xl-16 pr-lg-10 mb-lg-0 mb-6">
Otizm Spektrum Bozukluğundan (OSB) etkilenen bireylere, ailelerine, özel eğitim konusunda öğrenim gören öğrencilere, otizmli bireyler ile çalışan eğitmenlere ve akademik çevrelere yönelik, eğitici, akademik ve mesleki yayın yapmak; <br><br>
Bilgi-iletişim sektöründeki teknolojik gelişmeleri yakından takip ederek, bunların sağladığı bütün imkanları okuyucularının hizmetine sunmak,<br><br>
Benimsediği etik değerler doğrultusunda, kalitesinden hiçbir zaman ödün vermeden, yenilikçi, çağdaş ve sürdürülebilir (Sustainable Publisher) bir yayın kuruluşu olmak,<br><br>

Otizm konusunda;<br>
Eserlerini bastırmak isteyen akademisyenleri;
basılan eserlerden yararlanmak isteyen öğrenci ve eğitimcileri;
eğitim veren vakıf ve dernekleri desteklemek;
Otizm konusunda uzmanlaşarak, ulusal ve uluslararası düzeyde lider ve referans kurum haline gelmek.
</p>
HTML;

        $misyonumuzContent = <<<HTML
<ul>
<li>Otizm konusunda dünyanın önde gelen yayınevlerinden birisi olacağız.</li>
<li>Otizmli bireylerin ve ailelerin yaşam kalitesini yükseltmek amacıyla bilimsel eserler veren akademisyenleri destekleyeceğiz.</li>
<li>Ürünlerimizin daha çok kişiye ulaşmasını sağlamak amacıyla; daha düşük maliyetli üretim ve daha yaygın dağıtım ağı oluşturmak için araştırmalar yapacağız.</li>
<li>Rekabetçi olabilmek için altyapımızı ve gücümüzü artıracağız.</li>
<li>Mali ve politik olarak bağımsızlığımızı korurken, amaçlarımıza ve misyonumuza destek verdiği sürece alanımızdaki diğer kurum ve kuruluşlarla işbirliği yapacağız.</li>
<li>Yaptığımız her şeyde yenilikçi ve etkili olacağız.</li>
<li>Dünya Yayıncılar Birliğinin saygın bir üyesi olacağız.</li>
<li>Yayınevimizi iddialı hale getirerek, otizm konusunda uzman ve başarılı akademisyenlerle çalışacağız.</li>
<li>Eserin basım kararı alınması sürecinde, bilimsel etik kuralları esas alınarak, otizm konusunda uzman kişilerin hakemlik yapmaları sağlanacaktır.</li>
<li>Ürettiğimiz eserlerle ülke ekonomisine katkı sağlayarak ülkemizin daha çok gelişmesi sonucunda; toplumun, OSB'li bireylerin ve ailelerinin refahının yükselmesi için çalışacağız.</li>
<li>Gerekli mal ve hizmetleri mümkün olan en düşük maliyetlerle temin etmek ve satmak suretiyle topluma hizmet etmeye çalışacağız.</li>
<li>Sürdürülebilirlik ilkeleri doğrultusunda; geri dönüştürülmüş kağıt, yerli baskı malzemesi, fosil yakıt kullanmayan düşük enerji sarfiyatlı makinalar, sürdürülebilir baskı mürekkebi kullanan basımevleri ile çalışılarak, karbon ayak izini minimuma indireceğiz.</li>
</ul>
HTML;

        $rows = [
            1 => ['title' => 'Hikayemiz', 'content' => $hikayemizContent],
            2 => ['title' => 'Vizyonumuz', 'content' => $vizyonumuzContent],
            3 => ['title' => 'Misyonumuz', 'content' => $misyonumuzContent],
        ];

        foreach ($rows as $id => $data) {
            DB::table('abouts')->updateOrInsert(
                ['id' => $id],
                [
                    'title' => $data['title'],
                    'content' => $data['content'],
                    'content_two' => null,
                    'photo' => null,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }
}
