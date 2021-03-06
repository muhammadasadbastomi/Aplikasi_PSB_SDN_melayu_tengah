<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catatan Ketentuan Biaya</title>
    <link rel="icon" type="image/png" href="{{url('images/logobanjar.png')}}">
    <style>
        .logo {
            margin-top: 15px;
            float: left;
            margin-right: -5px;
            width: 15%;
            padding: 0px;
            text-align: right;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid;
            padding-left: 5px;
            text-align: center;
            height: 30px;
        }

        .judul {
            text-align: center;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 10%;
        }

        .ttd {
            margin-left: 70%;
            text-align: center;
            text-transform: uppercase;
        }

        .sizeimg {
            width: 60px;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 10%;
        }

        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 150px;
            padding: 0px;
        }

        .ttd {
            margin-left: 70%;
            text-align: center;
            text-transform: uppercase;
        }

        hr {
            margin-top: 10%;
            height: 3px;
            background-color: black;
        }

        br {
            margin-bottom: 5px !important;
        }

        h5 {
            line-height: 0.3;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="logo">
            <img class="sizeimg" src="images/logobanjar.png">
        </div>
        <div class="headtext">
            <h1 style="margin:0px;">SDN MELAYU TENGAH</h1>
            <h3 style="margin:0px;">KABUPATEN BANJAR</h3>
            <p style="margin:0px;">Jl. Melayu Ulu, Desa Melayu, Martapura Timur, Kab. Banjar, Kalimantan Selatan 70617
            </p>
        </div>
        <hr>
    </div>

    <div class="container" style="margin-top:-40px;">
        <h3 style="text-align:center;text-transform: uppercase;">Informasi Ketentuan Biaya</h3>
        <br>
        <h4>Ketentuan :</h4>
        <li style="margin-left:20px;">Pendaftaran Ulang dapat dilakukan dengan cara Cash atau Dicicil.</li>
        <li style="margin-left:20px;">Pembayaran Cicilan maksimal 2 Kali Pembayaran, Dengan Pembayaran Pertama
            Rp.155.000,-</li>
        <li style="margin-left:20px;">Bagi anak yang kurang mampu bisa menyerahkan Surat Miskin ke Pihak Sekolah atas
            Rekomendasi RT.</li>
        <li style="margin-left:20px;">Pembayaran dapat dikirim melalui no.rek : 012 880 9923(BNI) atas nama Ramadhan
            Noor</li>
        <br>
        <h4>Ketentuan Biaya Yang Harus Dibayar :</h4>
        <ol>
            <table class="table table-responsive" style="margin-left: -45px;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Pengeluaran</th>
                        <th>Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Uang pangkal gedung</td>
                        <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Uang Seragam </td>
                        <td>Rp. 175.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Uang pembayaran bulan 1 (pertama)</td>
                        <td>Rp. 85.000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><b>Total</b></td>
                        <td><b>Rp. Rp.310.000</b></td>
                    </tr>
                </tbody>
            </table>
        </ol>
        <br>
        <div class="ttd">
            <h5>
                Martapura Timur, {{Carbon\Carbon::parse($now)->translatedFormat('d F Y')}}
            </h5>
            <h5>Kepala Satuan Pendidikan Dasar </h5>
            <br>
            <br>
            <h5 style="text-decoration:underline;">PURHIMAH, S.Pd</h5>

            <h5>NIP. 19630923 198908 2 001</h5>
        </div>
    </div>
</body>

</html>
