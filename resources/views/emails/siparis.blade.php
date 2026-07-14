<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipariş Bilgisi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h2>Sipariş Bilgisi</h2>
<table>
    <tr>
        <th>Özellik</th>
        <th>Bilgi</th>
    </tr>
    <tr>
        <td>Kitap Adı</td>
        <td>{{ $kitap_adi }}</td>
    </tr>
    <tr>
        <td>Adet</td>
        <td>{{ $adet }}</td>
    </tr>
    <tr>
        <td>İsim Soyisim</td>
        <td>{{ $isim_soyisim }}</td>
    </tr>
    <tr>
        <td>Telefon Numarası</td>
        <td>{{ $tel_no }}</td>
    </tr>
    <tr>
        <td>TC Kimlik / Vergi No</td>
        <td>{{ $tc_kimlik }}</td>
    </tr>
    <tr>
        <td>Teslimat Adresi</td>
        <td>{{ $teslimat_adresi }}</td>
    </tr>
    <tr>
        <td>Fatura Adresi</td>
        <td>{{ $fatura_adresi }}</td>
    </tr>
</table>
</body>
</html>
