@extends('layout.app', ['title' => 'Preview Penerima Bansos'])

@section('content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!--  BEGIN BREADCRUMBS  -->
            <div class="secondary-nav">
                <div class="breadcrumbs-container" data-page-heading="Analytics">
                    <header class="header navbar navbar-expand-sm">
                        <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                        <div class="d-flex breadcrumb-content">
                            <div class="page-header">

                                <div class="page-title">
                                </div>

                                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Preview Penerima Bansos</a></li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <!--  END BREADCRUMBS  -->
            

            <div class="row mb-3" style="margin-top: 30px;">
                <div class="col-md-12">
                    <h2>Data Preview</h2>
                    <p> {{ $penerimaanBansos->nama }}</p>
                </div>
            </div>

            <div class="row mb-4 ">

                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Nama Lengkap</label>
                            <p >{{ $penerimaanBansos->nama }}</p>

                        </div>

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">NIK</label>
                            <p >{{ $penerimaanBansos->nik }}</p>
                        </div>

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">No Kartu Keluarga</label>
                            <p >{{ $penerimaanBansos->nomor_kk }}</p>
                        </div>

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Image KTP</label>
                            <div class="d-flex">
                                <img alt="avatar" src="{{ asset('storage/ktps/' . $penerimaanBansos->foto_ktp) }}" class="rounded-circle" style="width: 10%; height: auto;" />
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Image Kartu Keluarga</label>
                            <div class="d-flex">
                                <img alt="avatar" src="{{ asset('storage/kk/' . $penerimaanBansos->foto_kk) }}" class="rounded-circle" style="width: 10%; height: auto;" />
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="formGroupExampleInput">Umur</label>
                                <p >{{ $penerimaanBansos->umur }}</p>
                            </div>
                            <div class="col-6">
                                <label for="formGroupExampleInput">Jenis Kelamin</label>
                                <p >{{ $penerimaanBansos->jenis_kelamin }}</p>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="province">Provinsi:</label>
                                <p >{{ $penerimaanBansos->provinsi }}</p>
                            </div>
                            <div class="col-6">
                                <label for="regency">Kabupaten/Kota:</label>
                                <p >{{ $penerimaanBansos->kab_kota }}</p>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="district">Kecamatan:</label>
                                <p >{{ $penerimaanBansos->kecamatan }}</p>
                            </div>
                            <div class="col-6">
                                <label for="village">Kelurahan:</label>
                                <p >{{ $penerimaanBansos->kelurahan }}</p>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="alamat">Alamat</label>
                                <p >{{ $penerimaanBansos->alamat }}</p>

                            </div>
                            <div class="col">
                                <label for="regency">RT</label>
                                <p >{{ $penerimaanBansos->rt }}</p>
                            </div>
                            <div class="col">
                                <label for="district">RW:</label>
                                <p >{{ $penerimaanBansos->rw }}</p>
                            </div>

                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="alamat">Penghasilan Sebelum Pandemi</label>
                                <p >Rp {{ number_format($penerimaanBansos->penghasilan_sebelum_pandemi, 0, ',', '.') }}</p>
                            </div>

                            <div class="col-6">
                                <label for="alamat">Penghasilan Sesudah Pandemi</label>
                                <p >Rp {{ number_format($penerimaanBansos->penghasilan_setelah_pandemi, 0, ',', '.') }}</p>
                                
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput2">Alasan membutuhkan bantuan</label>
                            <p >{{ $penerimaanBansos->alasan_bantuan }}</p>
                        </div>

                        <a href="{{ route('index') }}" class="btn btn-primary" type="submit">Selesai</a>
                    {{-- </form> --}}

                </div>

            </div>
        </div>

    </div>

    <!--  BEGIN FOOTER  -->
    <div class="footer-wrapper mt-0">
        <div class="footer-section f-section-1">
            <p class="">Copyright © <span class="dynamic-year">2023</span> LPM Jabar</p>
        </div>
    </div>
    <!--  END FOOTER  -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@endsection