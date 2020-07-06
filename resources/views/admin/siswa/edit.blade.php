@extends('layouts/admin')

@section('title')
Edit Siswa
@endsection

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Edit Data Siswa</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item">Data Siswa
                                </li>
                                <li class="breadcrumb-item active">Edit Data Siswa
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <a href="{{ route('siswaIndex') }}" class="btn btn-primary round mr-1 mb-1"><i class="bx bx-undo"></i></a>
                            </div>
                            <hr>
                            <div class="card-body">
                                <form method="POST">
                                    {{ method_field('put') }}
                                    @csrf
                                    <fieldset class="form-group">
                                        <label for="basicInput">Basic Input</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                                    </fieldset>
                                    <h6>Basic Select</h6>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                    <h6 class="form-group">Alamat</h6>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary ml-1" data-dismiss="modal">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Ubah</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
