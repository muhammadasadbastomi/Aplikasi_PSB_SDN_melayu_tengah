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
            style="text-align:center;"
        }

        /* table.one {
            float: left;
            width: 45%;
        }

        table.two {
            width: 45%;
            float: right;
        } */

        ​ td,
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

        td {
            border: 1px solid;
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

    <div style="margin-top:-40px;">
        <h3 style="text-align:center; text-transform: uppercase;">Jadwal Kelas {{ $kelas->kelas }}</h3>
        <br>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Senin </th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width : 33%; padding : 5px 5px 5px 5px;">
                            @foreach($senin as $d)
                            @if($d->mapel->guru_id == 0)
                            {{ $d->mapel->mapel }}
                            @else
                            <b><u>{{ $d->mapel->mapel }}</u></b>
                            <br> Guru : {{ $d->mapel->guru->nama }}
                            <br>
                            @endif
                            @endforeach
                        </td>
                        <td style=" width : 33%; padding : 5px 5px 5px 5px;">
                            @foreach($selasa as $d)
                            @if($d->mapel->guru_id == 0)
                            {{ $d->mapel->mapel }}
                            @else
                            <b><u>{{ $d->mapel->mapel }}</u></b>
                            <br> Guru : {{ $d->mapel->guru->nama }}
                            <br>
                            @endif
                            @endforeach
                        </td>
                        <td style="width : 33%; padding : 5px 5px 5px 5px;">
                            @foreach($rabu as $d)
                            @if($d->mapel->guru_id == 0)
                            {{ $d->mapel->mapel }}
                            @else
                            <b><u>{{ $d->mapel->mapel }}</u></b>
                            <br> Guru : {{ $d->mapel->guru->nama }}
                            <br>
                            @endif
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Kamis</th>
                        <th>Jumat</th>
                        <th>Sabtu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width : 33%; padding : 5px 5px 5px 5px;">
                            @foreach($kamis as $d)
                            @if($d->mapel->guru_id == 0)
                            {{ $d->mapel->mapel }}
                            @else
                            <b><u>{{ $d->mapel->mapel }}</u></b>
                            <br> Guru : {{ $d->mapel->guru->nama }}
                            <br>
                            @endif
                            @endforeach
                        </td>
                        <td style=" width : 33%; padding : 5px 5px 5px 5px;">
                            @foreach($jumat as $d)
                            @if($d->mapel->guru_id == 0)
                            {{ $d->mapel->mapel }}
                            @else
                            <b><u>{{ $d->mapel->mapel }}</u></b>
                            <br> Guru : {{ $d->mapel->guru->nama }}
                            <br>
                            @endif
                            @endforeach
                        </td>
                        <td style="width : 33%; padding : 5px 5px 5px 5px;">
                            @foreach($sabtu as $d)
                            @if($d->mapel->guru_id == 0)
                            {{ $d->mapel->mapel }}
                            @else
                            <b><u>{{ $d->mapel->mapel }}</u></b>
                            <br> Guru : {{ $d->mapel->guru->nama }}
                            <br>
                            @endif
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- <div class="ttd">
            <h5>
                Banjarbaru,
            </h5>
            <h5>isi jabatan</h5>
            <br>
            <br>
            <h5 style="text-decoration:underline;">nama pejabat</h5>
            <h5>golongan / kode golongan</h5>
            <h5>NIP.</h5>
        </div> -->

</body>

</html>
