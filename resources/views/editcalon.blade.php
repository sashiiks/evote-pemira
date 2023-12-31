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
                        <h5 class="card-title">Edit Data Calon</h5>

                        <!-- Horizontal Form -->
                        <form action="{{ url('/datacalon/edit/post', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="nim" class="col-sm-8 col-form-label">NIM</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" name="nisn" id="nisn" required
                                        value="{{ $data->nisn }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nomor" class="col-sm-8 col-form-label">Nomor Calon Kandidat</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" name="nomor" id="nomor" required
                                        value="{{ $data->nomor }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nm_kandidat" class="col-sm-8 col-form-label">Nama Calon Kandidat</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nm_kandidat" id="nm_kandidat"
                                        required value="{{ $data->nm_kandidat }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="visi" class="col-sm-8 col-form-label">Visi</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" name="visi" id="visi" required>{{ $data->visi }}"</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="misi" class="col-sm-8 col-form-label">Misi</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" name="misi" id="misi" required>{{ $data->misi }}"</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jurusan" class="col-sm-8 col-form-label">Jurusan</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" name="jurusan" id="jurusan" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="angkatan" class="col-sm-8 col-form-label">Angkatan</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" name="angkatan" id="angkatan" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="photo" class="col-sm-8 col-form-label">Foto</label>
                                <div class="col-sm-12">
                                    <input type="file" class="form-control" name="photo" id="photo" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning">Simpan Data</button>
                            </div>
                        </form><!-- End Horizontal Form -->

                    </div>
                </div>
            </div>
    </section>

</main>
{{-- end main --}}
@include('component.footer')
