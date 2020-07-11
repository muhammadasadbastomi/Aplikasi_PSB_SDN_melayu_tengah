<h3>Selamat {{Auth::user()->name}}, Anda Telah Diterima. <button class="btn btn-outline-default text-white float-right"> <i class="menu-livicon" data-icon="print-doc"></i> Print </button></h3>
<h5>Anda Berada Di {{$kelas->kelas->kelas}}, Berikut adalah Jadwal Pelajaran {{$kelas->kelas->kelas}} :</h5>
<div class="card-body">
    <div class="card-content" style="margin-left:1%; margin-bottom:2%;">

        <div class="row">
            <div class="col-sm-4">
                <h5>Senin</h5>
                <ul style="margin-left:-21px;">
                    @foreach($senin as $d)
                    @if($d->mapel->guru_id == 0)
                    <li>
                        {{$d->mapel->mapel}}
                    </li>
                    @else
                    <li>
                        {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
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
                    </li>
                    @else
                    <li>
                        {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
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
                    </li>
                    @else
                    <li>
                        {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
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
                    </li>
                    @else
                    <li>
                        {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
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
                    </li>
                    @else
                    <li>
                        {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
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
                    </li>
                    @else
                    <li>
                        {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>


    </div>
</div>
