<base href="/public">
@include('component.head')
@include('component.navbar')
@include('component.sidebar')
{{-- main --}}
<main id="main" class="main">

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Pemilih Tetap</h5>

                        <!-- Horizontal Form -->
                        <form action="{{ url('/datadpt/post') }}" method="POST" class="row g-3">
                            @csrf
                            <div class="row mb-3">
                                <label for="nim" class="col-sm-8 col-form-label">NIM</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" name="nim" id="nim" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-8 col-form-label">Nama</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nama" id="nama" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-8 col-form-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="angkatan" class="col-sm-8 col-form-label">Angkatan</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" name="angkatan" id="angkatan" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="jurusan" name="jurusan" aria-label="State"
                                        required>
                                        <option>Pilih</option>
                                        @foreach ($data as $item)
                                            <option value="{{ $item->nm_jurusan }}">{{ $item->nm_jurusan }}</option>
                                        @endforeach
                                    </select>
                                    <label for="jurusan">Jurusan</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-8 col-form-label">Password</label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </form><!-- End Horizontal Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
{{-- end main --}}
@include('component.footer')
