<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pembagian Kelas</title>
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
            margin-left: 65%;
            text-align: center;

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
            </p>
        </div>
        <hr>
    </div>

    <div class="container" style="margin-top:-40px;">
        <h3 style="text-align:center;text-transform: uppercase;">Pembagian Kelas</h3>
        <h4 style="text-align:left;text-transform: uppercase;">Dicetak pada :
            {{Carbon\Carbon::parse($tgl)->translatedFormat('d F Y')}}</h4>
        <table class='table table-bordered nowrap'>
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Kelas</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td scope="col" class="text-center">{{ $loop->iteration }}</td>
                    <td scope="col" class="text-center">{{ $d->kelas }}</td>
                    <td scope="col" class="text-center">{{ $d->siswa->user->name }}</td>
                    <td scope="col" class="text-center">@if ($d->siswa->jenis_kelamin ==1) L
                        @elseif($d->siswa->jenis_kelamin == 2) P
                        @endif</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <br>
        <div class="ttd">
            <h5>
                Martapura Timur, {{Carbon\Carbon::parse($tgl)->translatedFormat('d F Y')}}
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
