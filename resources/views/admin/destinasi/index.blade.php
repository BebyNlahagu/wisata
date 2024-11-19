@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">Latest Projects</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Tambah data
                    </button>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th class="d-none d-xl-table-cell">Aktifitas</th>
                            <th class="d-none d-xl-table-cell">Harga</th>
                            <th class="d-none d-md-table-cell">Durasi</th>
                            <th class="d-none d-md-table-cell">Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($destinasi as $d)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $d->nama }}</td>
                                <td class="d-none d-xl-table-cell">{{ $d->aktivitas }}</td>
                                <td class="d-none d-xl-table-cell">{{ number_format($d->harga) }}</td>
                                <td class="d-none d-xl-table-cell">{{ $d->durasi }}</td>
                                <td>
                                    @if ($d->img)
                                        <img src="{{ Storage::url('images/' . $d->img) }}"alt="Gambar Destinasi"
                                            style="width: 50px; height: 50px;">
                                    @endif
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <a class="btn btn-info" href="{{ route('destinasi.edit', ['destinasi' => $d->id]) }}" data-bs-target="#edit{{ $d->id }}" data-bs-toggle="modal">edit</a>
                                    <a class="btn btn-danger" href="">hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!--Modal Tambah-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Destinasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('destinasi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="tetx" class="form-control" name="nama" id="floatingInput">
                            <label for="floatingInput">Nama</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="floatingPassword" name="aktivitas">
                                <option value="">Destination</option>
                                <option value="laut">Laut</option>
                                <option value="gunung">Gunung</option>
                                <option value="pantai">Pantai</option>
                                <option value="kota">Kota</option>
                                <option value="hutan">Hutan</option>
                            </select>
                            <label for="floatingPassword">Aktivitas</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingPassword" name="harga">
                            <label for="floatingPassword">Budget</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingPassword" name="durasi">
                            <label for="floatingPassword">Durasi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="floatingPassword" name="img">
                            <label for="floatingPassword">Foto</label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Edit Modal-->
    @foreach ($destinasi as $d)
        <div class="modal fade" id="edit{{ $d->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Destinasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('destinasi.update', ['destinasi' => $d->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="tetx" class="form-control" name="nama" value="{{ $d->nama }}"
                                    id="floatingInput">
                                <label for="floatingInput">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="floatingPassword" name="aktivitas">
                                    <option value="">Destination</option>
                                    <option value="laut" {{ $d->aktivitas == 'laut' ? 'selected' : '' }}>Laut</option>
                                    <option value="gunung" {{ $d->aktivitas == 'gunung' ? 'selected' : '' }}>Gunung</option>
                                    <option value="pantai" {{ $d->aktivitas == 'pantai' ? 'selected' : '' }}>Pantai</option>
                                    <option value="kota" {{ $d->aktivitas == 'kota' ? 'selected' : '' }}>Kota</option>
                                    <option value="hutan" {{ $d->aktivitas == 'hutan' ? 'selected' : '' }}>Hutan</option>
                                </select>
                                <label for="floatingPassword">Aktivitas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingPassword" value="{{ $d->harga }}" name="harga">
                                <label for="floatingPassword">Budget</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingPassword" value="{{ $d->durasi }}" name="durasi">
                                <label for="floatingPassword">Durasi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="imgInput{{ $d->id }}" name="img" onchange="previewImage{{ $d->id }}(event)">
                                <label for="imgInput{{ $d->id }}">Foto</label>
                            </div>
                            <div class="mb-3">
                                <img id="imgPreview{{ $d->id }}" src="{{ Storage::url($d->img) }}" alt="Preview Gambar" style="width: 150px; height: 150px; object-fit: cover;">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script>
        function previewImage{{ $d->id }}(event) {
            const input = event.target;
            const preview = document.getElementById('imgPreview{{ $d->id }}');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
