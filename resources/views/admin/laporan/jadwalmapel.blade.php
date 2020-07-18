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
            </p>
        </div>
        <hr>
    </div>


    <h3 style="text-align:center;text-transform: uppercase;">Jadwal Kelas {{ $kelas->kelas }}</h3>
    <div class="row">
        <div class="">
            <h5 style="">Senin</h5>
            <ul style="margin-left:-21px;">
                @foreach($senin as $d)
                @if($d->mapel->guru_id == 0)
                <li>
                    {{$d->mapel->mapel}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @else
                <li>
                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>

        <div class="col-sm-4">
            <h5>Selasa</h5>
            <ul style="margin-left:-21px;">
                @foreach($selasa as $d)
                @if($d->mapel->guru_id == 0)
                <li>
                    {{$d->mapel->mapel}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @else
                <li>
                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>

        <div class="col-sm-4">
            <h5>Rabu</h5>
            <ul style="margin-left:-21px;">
                @foreach($rabu as $d)
                @if($d->mapel->guru_id == 0)
                <li>
                    {{$d->mapel->mapel}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @else
                <li>
                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>


    <div class="row" style="margin-top:2%;">
        <div class="col-sm-4">
            <h5>Kamis</h5>
            <ul style="margin-left:-21px;">
                @foreach($kamis as $d)
                @if($d->mapel->guru_id == 0)
                <li>
                    {{$d->mapel->mapel}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @else
                <li>
                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>

        <div class="col-sm-4">
            <h5>Jumat</h5>
            <ul style="margin-left:-21px;">
                @foreach($jumat as $d)
                @if($d->mapel->guru_id == 0)
                <li>
                    {{$d->mapel->mapel}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @else
                <li>
                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>

        <div class="col-sm-4">
            <h5>Sabtu</h5>
            <ul style="margin-left:-21px;">
                @foreach($sabtu as $d)
                @if($d->mapel->guru_id == 0)
                <li>
                    {{$d->mapel->mapel}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @else
                <li>
                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger"
                        data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal"
                        data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}"
                        data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <br>
    <br>
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
