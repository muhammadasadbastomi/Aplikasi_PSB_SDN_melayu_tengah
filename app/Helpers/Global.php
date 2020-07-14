<?php

use App\Siswa;

function pendaftar()
{
    return Siswa::count();
}

function lulus()
{
    return Siswa::where('status', '>','4')->count();
}

function pendaftaran()
{
    return Siswa::where('status','1')->count();
}

function ditolak()
{
    return Siswa::where('status','3')->count();
}
