@extends('layout.app', ['title' => 'Penerima Bansos'])

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
                                        <li class="breadcrumb-item"><a href="#">List Penerima Bansos</a></li>
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
                    <h2>List Penerima Bansos</h2>
                </div>
                <div style="margin-top: 20px;">
                    <a href="{{ route('bansos.create') }}" class="btn btn-primary btn-sm rounded">Add Penerima Bansos
                    </a>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">No KK</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Provinsi</th>
                            <th scope="col">Kabupaten/Kota</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kelurahan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Penghasilan Sebelum Pandemi</th>
                            <th scope="col">Penghasilan Sesudah Pandemi</th>
                            <th scope="col">Alasan Menerima Bantuan</th>
                            {{-- <th class="text-center" scope="col">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($penerimaBansos as $item => $value)
                        <tr>
                            <td>
                                <p class="mb-2">{{ $value->nama }}</p>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="avatar me-2">
                                        <img alt="avatar" src="{{ asset('storage/ktps/' . $value->foto_ktp) }}"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="media-body align-self-center">
                                        <span class="text-success">{{ $value->nik }}</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="media">
                                    <div class="avatar me-2">
                                        <img alt="avatar" src="{{ asset('storage/kk/' . $value->foto_kk) }}"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="media-body align-self-center">
                                        <span class="text-success">{{ $value->nomor_kk }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <p class="mb-2"> {{ $value->umur }}</p>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-light-success">{{ $value->jenis_kelamin}}</span>
                            </td>
                            <td class="text-center">
                                <p class="mb-2">{{ $value->provinsi }}</p>
                            </td>
                            <td class="text-center">
                                <p class="mb-2">{{ $value->kab_kota }}</p>
                            </td>
                            <td class="text-center">
                                <p class="mb-2">{{ $value->kecamatan }}</p>
                            </td>
                            <td class="text-center">
                                <p class="mb-2">{{ $value->kelurahan }}</p>
                            </td>
                            <td>
                                <p class="mb-2">{{ $value->alamat }}</p>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-light-success">Rp {{ number_format($value->penghasilan_sebelum_pandemi, 0, ',', '.') }}</span>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-light-success">Rp {{ number_format($value->penghasilan_setelah_pandemi, 0, ',', '.') }}</span>
                            </td>
                            <td class="text-center">
                                <p class="mb-2">{{ $value->alasan_bantuan }}</p>
                            </td>
                            {{-- <td class="text-center">
                                <div class="action-btns">
                                    <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2"
                                        data-toggle="tooltip" data-placement="top" title="View">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2"
                                        data-toggle="tooltip" data-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip"
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </td> --}}
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data Belum Tersedia!
                        </div>
                        @endforelse

                    </tbody>
                </table>
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

@if(session('success'))
<div class="alert alert-light-primary alert-dismissible fade show border-0 mb-4" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <!-- Your close button content -->
    </button>
    <strong>Success!</strong> {{ session('success') }}
</div>
@endif

<script>
    // JavaScript to close the alert after a certain time (optional)
    document.addEventListener('DOMContentLoaded', function() {
        let alert = document.querySelector('.alert');
        if (alert) {
            setTimeout(function() {
                alert.remove();
            }, 5000); // Remove the alert after 5 seconds (adjust time as needed)
        }
    });
</script>


@endsection