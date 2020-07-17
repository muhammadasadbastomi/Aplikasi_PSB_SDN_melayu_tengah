@component('mail::message')
Selamat Kepada {{ $nama_siswa }}

Anda telah dinyatakan Lulus dalam pendaftaran sekolah di SDN Melayu Tengah pada tanggal {{ $tgl_diterima }}.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/', 'color' => 'primary'])
Klik disini untuk mengunjungi website kami
@endcomponent

Terimakasih,<br>
<a style="text-decoration: none;" href="['url' => 'http://127.0.0.1:8000/']">SDN Melayu Tengah</a>, Kab.Banjar<br>
Jl. Melayu Ulu, Desa Melayu, Martapura Timur, Kab. Banjar, Kalimantan Selatan 70617
@endcomponent
