@extends('layouts/admin')

@section('title')
Profile
@endsection

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Account Settings</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pages</a>
                                </li>
                                <li class="breadcrumb-item active"> Profile
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- account setting page start -->
            <section id="page-account-settings">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <!-- left menu section -->
                            <div class="col-md-3 mb-2 mb-md-0 pills-stacked">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-pill-general"
                                            data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                            <i class="bx bx-cog"></i>
                                            <span>General</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="account-pill-password"
                                            data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                            <i class="bx bx-lock"></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- right content section -->
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active"
                                                    id="account-vertical-general" aria-labelledby="account-pill-general"
                                                    aria-expanded="true">
                                                    <div class="media">
                                                        <a href="javascript: void(0);">
                                                            @if(Auth::user()->photos)
                                                            <img src="{{ url('images/user/'. Auth::user()->photos )}}"
                                                                class="rounded mr-75" alt="profile image" height="64"
                                                                width="64">
                                                            @else

                                                            <img src="{{ url('images/default.png' )}}"
                                                                class="rounded mr-75" alt="profile image" height="64"
                                                                width="64">
                                                            @endif
                                                        </a>
                                                        <div class="media-body mt-25">
                                                            <div
                                                                class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                                <label for="select-files"
                                                                    class="btn btn-sm btn-light-primary ml-50 mb-50 mb-sm-0">
                                                                    <span>Upload new photo</span>
                                                                    <input id="select-files" type="file" hidden>
                                                                </label>
                                                                <button
                                                                    class="btn btn-sm btn-light-secondary ml-50">Reset</button>
                                                            </div>
                                                            <p class="text-muted ml-1 mt-50"><small>Allowed JPG, GIF or
                                                                    PNG. Max
                                                                    size of
                                                                    800kB</small></p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <form novalidate>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>Nama</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Nama"
                                                                            value="{{ Auth::user()->name }}" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>No. Telepon</label>
                                                                        <input type="number" class="form-control"
                                                                            placeholder="Nomor Telepon"
                                                                            value="{{ Auth::user()->kontak }}" required
                                                                            data-validation-required-message="This name field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>E-mail</label>
                                                                        <input type="email" class="form-control"
                                                                            placeholder="Email"
                                                                            value="{{ Auth::user()->email }}" required
                                                                            data-validation-required-message="This email field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label>Alamat</label>
                                                                    <textarea class="form-control"
                                                                        placeholder="Alamat">{{ Auth::user()->alamat }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                                    changes</button>
                                                                <button type="reset"
                                                                    class="btn btn-light mb-1">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade " id="account-vertical-password"
                                                    role="tabpanel" aria-labelledby="account-pill-password"
                                                    aria-expanded="false">
                                                    <form novalidate>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>Old Password</label>
                                                                        <input type="password" class="form-control"
                                                                            required placeholder="Old Password"
                                                                            data-validation-required-message="This old password field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>New Password</label>
                                                                        <input type="password" name="password"
                                                                            class="form-control"
                                                                            placeholder="New Password" required
                                                                            data-validation-required-message="The password field is required"
                                                                            minlength="6">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>Retype new Password</label>
                                                                        <input type="password" name="con-password"
                                                                            class="form-control" required
                                                                            data-validation-match-match="password"
                                                                            placeholder="New Password"
                                                                            data-validation-required-message="The Confirm password field is required"
                                                                            minlength="6">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                                    changes</button>
                                                                <button type="reset"
                                                                    class="btn btn-light mb-1">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- account setting page ends -->
        </div>
    </div>
</div>

@endsection
