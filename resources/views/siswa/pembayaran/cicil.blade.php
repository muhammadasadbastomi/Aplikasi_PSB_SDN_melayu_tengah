@if($data->pembayaran->status == 1)
@include('siswa.pembayaran.pembayarancicil')
@elseif($data->pembayaran->status == 2)
<div class="card-body card-dashboard">
    <div class="table-responsive">
        <h2>Silahkan Tunggu Konfirmasi Admin</h2>
        <h5> <a href="{{route('kegiatanShow')}}">Klik Disini</a> untuk Melihat Daftar Kegiatan SDN Melayu Tengah</h5>
    </div>
</div>
@else
<div class="card-body card-dashboard">
    <div class="table-responsive">
        <h4>Pembayaran Telah Dikonfirmasi, Silahkan Tunggu dan Lihat <a href="{{route('kegiatanShow')}}"> Daftar Kegiatan </a> Untuk Informasi Pembagian Kelas.</h4>
        <h5>Pembayaran Cicil Kedua Dapat Dilakukan Sebelum Tanggal</h5>
    </div>
</div>
@endif
