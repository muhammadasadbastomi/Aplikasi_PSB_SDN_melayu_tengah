<h3>Selamat {{Auth::user()->name}}, Anda Telah Diterima.</h3>
<h5>Anda Berada Di {{$kelas->kelas->kelas}}, Berikut adalah Jadwal Pelajaran {{$kelas->kelas->kelas}} :</h5>
<div class="card-body">
    <div class="card-content" style="margin-left:3%; margin-bottom:2%;">
        <div class="row">
            <div class="col-sm-3">
                <h5>Senin</h5>
                <ul>
                    @foreach($senin as $d)
                    <li>{{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}</li>
                    @endforeach
                </ul>
            </div>

            <div class="col-sm-3">
                <h5>Selasa</h5>
                <ul>
                    @foreach($selasa as $d)
                    <li>{{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}</li>
                    @endforeach
                </ul>
            </div>


            <div class="col-sm-3">
                <h5>Rabu</h5>
                <ul>
                    @foreach($rabu as $d)
                    <li>{{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}</li>
                    @endforeach
                </ul>
            </div>


            <div class="col-sm-3">
                <h5>Kamis</h5>
                <ul>
                    @foreach($kamis as $d)
                    <li>{{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}</li>
                    @endforeach
                </ul>
            </div>
        </div>


        <div class="row" style="margin-top:3%;">

            <div class="col-sm-3">
                <h5>Jumat</h5>
                <ul>
                    @foreach($jumat as $d)
                    <li>{{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}</li>
                    @endforeach
                </ul>
            </div>


            <div class="col-sm-3">
                <h5>Sabtu</h5>
                <ul>
                    @foreach($sabtu as $d)
                    <li>{{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}</li>
                    @endforeach
                </ul>
            </div>
        </div>



    </div>
</div>
