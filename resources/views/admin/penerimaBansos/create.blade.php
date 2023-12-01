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
                                        <li class="breadcrumb-item"><a href="#">Add Penerima Bansos</a></li>
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
                    <h2>Add Penerima Bansos</h2>
                </div>
            </div>

            <div class="row mb-4 ">

                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <form action="{{ route('bansos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                value="{{ old('nama') }}" id="nama" placeholder="Nama Lengkap">

                            {{-- @error('nama')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                            @enderror --}}
                        </div>

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">NIK</label>
                            <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror"
                                value="{{ old('nik') }}" id="nik" placeholder="Input NIK">

                            {{-- @error('nik')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                            @enderror --}}
                        </div>

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">No Kartu Keluarga</label>
                            <input type="text" name="nomor_kk"
                                class="form-control @error('nomor_kk') is-invalid @enderror"
                                value="{{ old('nomor_kk') }}" id="nomor_kk" placeholder="Input nomor_kk">

                            {{-- @error('nomor_kk')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                            @enderror --}}
                        </div>

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Image KTP</label>
                            <div class="mb-3">
                                <input class="form-control file-upload-input" type="file" name="foto_ktp">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Image Kartu Keluarga</label>
                            <div class="mb-3">
                                <input class="form-control file-upload-input" type="file" name="foto_kk">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="formGroupExampleInput">Umur</label>
                                <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror"
                                    value="{{ old('umur') }}" id="umur">

                                {{-- @error('umur')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror --}}
                            </div>
                            <div class="col-6">
                                <label for="formGroupExampleInput">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option>Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                                {{-- @error('jenis_kelamin')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="province">Provinsi:</label>
                                <select class="form-control" id="province">
                                    <option value="">Pilih Provinsi</option>
                                </select>
                                <input type="hidden" name="provinsi" id="provinsi">
                            </div>
                            <div class="col-6">
                                <label for="regency">Kabupaten/Kota:</label>
                                <select class="form-control" id="city">
                                    <option value="">Pilih Kota/Kabupaten</option>
                                </select>
                                <input type="hidden" name="kab_kota" id="kab_kota">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="district">Kecamatan:</label>
                                <select class="form-control" id="district">
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                                <input type="hidden" name="kecamatan" id="kecamatan">
                            </div>
                            <div class="col-6">
                                <label for="village">Kelurahan:</label>
                                <select class="form-control" id="village">
                                    <option value="">Pilih Kelurahan</option>
                                </select>
                                <input type="hidden" name="kelurahan" id="kelurahan">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror"
                                    value="{{ old('alamat') }}" id="alamat" placeholder="Input alamat">

                                {{-- @error('alamat')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror --}}

                            </div>
                            <div class="col">
                                <label for="regency">RT</label>
                                <input type="text" name="rt" class="form-control @error('rt') is-invalid @enderror"
                                    value="{{ old('rt') }}" id="rt" placeholder="Input rt">

                                {{-- @error('rt')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror --}}
                            </div>
                            <div class="col">
                                <label for="district">RW:</label>
                                <input type="text" name="rw" class="form-control @error('rw') is-invalid @enderror"
                                    value="{{ old('rw') }}" id="rw" placeholder="Input rw">

                                {{-- @error('rw')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror --}}
                            </div>

                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="alamat">Penghasilan Sebelum Pandemi</label>
                                <div class="row gx-2">
                                    <input type="number" placeholder="Rp" name="penghasilan_sebelum_pandemi"
                                        class="form-control @error('penghasilan_sebelum_pandemi') is-invalid @enderror"
                                        value="{{ old('penghasilan_sebelum_pandemi') }}" />

                                    {{-- @error('penghasilan_sebelum_pandemi')
                                    <div class="invalid-tooltip">
                                        {{ $message }}
                                    </div>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="alamat">Penghasilan Sesudah Pandemi</label>
                                <div class="row gx-2">
                                    <input type="number" placeholder="Rp" name="penghasilan_setelah_pandemi"
                                        class="form-control @error('penghasilan_setelah_pandemi') is-invalid @enderror"
                                        value="{{ old('penghasilan_setelah_pandemi') }}" />

                                    {{-- @error('penghasilan_setelah_pandemi')
                                    <div class="invalid-tooltip">
                                        {{ $message }}
                                    </div>
                                    @enderror --}}
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput2">Alasan membutuhkan bantuan</label>
                            <textarea class="form-control  @error('alasan_bantuan') is-invalid @enderror" rows="6"
                                name="alasan_bantuan">{{ old('alasan_bantuan') }}</textarea>

                            {{-- @error('alasan_bantuan')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                            @enderror --}}
                        </div>

                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>

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
<script>
    $(document).ready(function() {
        window.addEventListener('load', function() {
    
        var forms = document.getElementsByClassName('needs-validation');
        
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    });

    
</script>

<script>
    // Mengambil pilihan provinsi dari API
    fetch('/get-provinces')
        .then(response => response.json())
        .then(data => {
            const provinceSelect = document.getElementById('province');
            data.forEach(province => {
                const option = document.createElement('option');
                option.value = province.id;
                option.textContent = province.name;
                provinceSelect.appendChild(option);
            });

            provinceSelect.addEventListener('change', function() {
                const selectedOption = provinceSelect.options[provinceSelect.selectedIndex];
                const selectedProvinceName = selectedOption.textContent;

                document.getElementById('provinsi').value = selectedProvinceName;
            });
        });

    // Fungsi untuk mengambil pilihan kota/kabupaten, kecamatan, dan kelurahan berdasarkan ID provinsi, kota/kabupaten, dan kecamatan
    function populateCities(provinceId) {
        fetch(`/get-cities/${provinceId}`)
            .then(response => response.json())
            .then(data => {
                const citySelect = document.getElementById('city');
                citySelect.innerHTML = '<option value="">Pilih Kota/Kabupaten</option>';
                data.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.id;
                    option.textContent = city.name;
                    citySelect.appendChild(option);
                });

                citySelect.addEventListener('change', function() {
                    const selectedOptionCity = citySelect.options[citySelect.selectedIndex];
                const selectedCityName = selectedOptionCity.textContent;

                document.getElementById('kab_kota').value = selectedCityName;
                });

            });

            
    }

    function populateDistricts(cityId) {
        fetch(`/get-districts/${cityId}`)
            .then(response => response.json())
            .then(data => {
                const districtSelect = document.getElementById('district');
                districtSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
                data.forEach(district => {
                    const option = document.createElement('option');
                    option.value = district.id;
                    option.textContent = district.name;
                    districtSelect.appendChild(option);
                });

                districtSelect.addEventListener('change', function() {
                    const selectedOptionDistrict = districtSelect.options[districtSelect.selectedIndex];
                    const selectedDistrictName = selectedOptionDistrict.textContent;

                    document.getElementById('kecamatan').value = selectedDistrictName;
                    });
                
            });
    }

    function populateVillages(districtId) {
        fetch(`/get-villages/${districtId}`)
            .then(response => response.json())
            .then(data => {
                const villageSelect = document.getElementById('village');
                villageSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';
                data.forEach(village => {
                    const option = document.createElement('option');
                    option.value = village.id;
                    option.textContent = village.name;
                    villageSelect.appendChild(option);
                });

                villageSelect.addEventListener('change', function() {
                    const selectedOptionVillage = villageSelect.options[villageSelect.selectedIndex];
                    const selectedVillageName = selectedOptionVillage.textContent;

                    document.getElementById('kelurahan').value = selectedVillageName;
                });
                
            });
    }

    // Menjalankan fungsi untuk mengisi kota/kabupaten saat provinsi dipilih
    document.getElementById('province').addEventListener('change', function() {
        const provinceId = this.value;
        if (provinceId) {
            populateCities(provinceId);
        }
    });

    // Menjalankan fungsi untuk mengisi kecamatan saat kota/kabupaten dipilih
    document.getElementById('city').addEventListener('change', function() {
        const cityId = this.value;
        if (cityId) {
            populateDistricts(cityId);
        }
    });

    // Menjalankan fungsi untuk mengisi kelurahan saat kecamatan dipilih
    document.getElementById('district').addEventListener('change', function() {
        const districtId = this.value;
        if (districtId) {
            populateVillages(districtId);
        }
    });
</script>


@endsection