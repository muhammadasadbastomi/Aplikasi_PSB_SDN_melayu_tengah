@component('mail::message')
Selamat Kepada {{ $nama_siswa }}

Anda telah dinyatakan Lulus dalam pendaftaran sekolah di SDN Melayu Tengah pada tanggal {{ $tgl_diterima }}.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/', 'color' => 'primary'])
Klik disini untuk mengunjungi website kami
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent