@extends('dashboard')

@section('content')
    <h2 style="text-align: center;">List Data Pegawai</h2>
    {{-- tabel data --}}
    <table id="tbl_pgw" class="table table-dark table-striped">
        <thead class="thead-dark">
            <tr>
                {{-- kolom yang digunakan --}}
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Pendidikan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- data yang dikirim --}}
            @foreach ($pegawai as $pgw)
                <tr>
                    <td>{{ $pgw->id }}</td>
                    <td>{{ $pgw->nama_pegawai }}</td>
                    <td>{{ $pgw->gender }}</td>
                    <td>{{ $pgw->agama }}</td>
                    <td>{{ $pgw->nomor_telepon }}</td>
                    <td>{{ $pgw->jabatan }}</td>
                    <td>{{ $pgw->pendidikan }}</td>
                    <td>{{ $pgw->alamat }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"
                            onclick="showEditModal({{ $pgw }})">EDIT</button>
                        <button type="button" class="btn btn-danger btn-sm"
                            onclick="hapusPegawai({{ $pgw->id }})">HAPUS</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Data
        Pegawai</button>

    {{-- Modal untuk Tambah Data --}}
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Form Isi Data Pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addPegawaiForm">
                        <div class="mb-3">
                            <label for="addNamePegawai" class="form-label">Nama Pegawai</label>
                            <input type="text" class="form-control" id="addNamePegawai" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="addGenderPegawai" class="form-label">Jenis Kelamin</label>
                            <select class="form-control" id="addGenderPegawai" name="gender" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="addAgamaPegawai" class="form-label">Agama</label>
                            <select class="form-control" id="addAgamaPegawai" name="agama" required>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="addNomor_teleponPegawai" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="addNomor_teleponPegawai" name="nomor_telepon">
                        </div>
                        <div class="mb-3">
                            <label for="addJabatanPegawai" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="addJabatanPegawai" name="jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="addPendidikanPegawai" class="form-label">Pendidikan</label>
                            <select class="form-control" id="addPendidikanPegawai" name="pendidikan" required>
                                <option value="S1">S1</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="addAlamatPegawai" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="addAlamatPegawai" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button onclick="createUserPegawai()" type="button" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Edit Data --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Form Edit Data Pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editPegawaiForm">
                        <input type="hidden" id="editPegawaiId" name="pegawaiId">
                        <div class="mb-3">
                            <label for="editNamePegawai" class="form-label">Nama Pegawai</label>
                            <input type="text" class="form-control" id="editNamePegawai" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="editGenderPegawai" class="form-label">Jenis Kelamin</label>
                            <select class="form-control" id="editGenderPegawai" name="gender" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editAgamaPegawai" class="form-label">Agama</label>
                            <select class="form-control" id="editAgamaPegawai" name="agama" required>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editNomor_teleponPegawai" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="editNomor_teleponPegawai"
                                name="nomor_telepon">
                        </div>
                        <div class="mb-3">
                            <label for="editJabatanPegawai" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="editJabatanPegawai" name="jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="editPendidikanPegawai" class="form-label">Pendidikan</label>
                            <select class="form-control" id="editPendidikanPegawai" name="pendidikan" required>
                                <option value="S1">S1</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editAlamatPegawai" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="editAlamatPegawai" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button onclick="updatePegawai()" type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- file css untuk di push ke dalam stack pada profile.dashboard --}}
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
@endpush

{{-- file javascript untuk di push ke dalam stack pada profile.dashboard --}}
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        // fungsi untuk tambah data
        function createUserPegawai() {
            const url = "{{ route('pgw.pegawai.store') }}";
            let data = {
                nama_pegawai: $('#addNamePegawai').val(),
                gender: $('#addGenderPegawai').val(),
                agama: $('#addAgamaPegawai').val(),
                nomor_telepon: $('#addNomor_teleponPegawai').val(),
                jabatan: $('#addJabatanPegawai').val(),
                pendidikan: $('#addPendidikanPegawai').val(),
                alamat: $('#addAlamatPegawai').val()
            }

            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: (response) => {
                    toastr.success(response.message, 'Sukses');
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                },
                error: (error) => {
                    let response = error.responseJSON;
                    toastr.error(response.message, 'Error');
                    if (response.errors) {
                        for (const error in response.errors) {
                            let input = $('#addPegawaiForm input[name="' + error + '"]');
                            input.addClass('is-invalid');
                            let feedbackElement = '<div class="invalid-feedback">';
                            feedbackElement += '<ul class="list-unstyled">';
                            response.errors[error].forEach((message) => {
                                feedbackElement += '<li>' + message + '</li>';
                            });
                            feedbackElement += '</ul>';
                            feedbackElement += '</div>';
                            input.after(feedbackElement);
                        }
                    }
                }
            });
        }

        // menampilkan edit setelah button di click,dan menampilkan data sebelumnya berdasarkan idpgw
        function showEditModal(pgw) {
            $('#editPegawaiId').val(pgw.id);
            $('#editNamePegawai').val(pgw.nama_pegawai);
            $('#editGenderPegawai').val(pgw.gender);
            $('#editAgamaPegawai').val(pgw.agama);
            $('#editNomor_teleponPegawai').val(pgw.nomor_telepon);
            $('#editJabatanPegawai').val(pgw.jabatan);
            $('#editPendidikanPegawai').val(pgw.pendidikan);
            $('#editAlamatPegawai').val(pgw.alamat);
            $('#editModal').modal('show');
        }

        // update data
        function updatePegawai() {
            const url = "{{ route('pgw.pegawai.update', ':id') }}".replace(':id', $('#editPegawaiId').val());
            let data = {
                nama_pegawai: $('#editNamePegawai').val(),
                gender: $('#editGenderPegawai').val(),
                agama: $('#editAgamaPegawai').val(),
                nomor_telepon: $('#editNomor_teleponPegawai').val(),
                jabatan: $('#editJabatanPegawai').val(),
                pendidikan: $('#editPendidikanPegawai').val(),
                alamat: $('#editAlamatPegawai').val()
            }

            $.ajax({
                url: url,
                type: 'PUT',
                data: data,
                success: (response) => {
                    toastr.success(response.message, 'Sukses')
                    setTimeout(() => {
                        location.reload()
                    }, 3000);
                },
                error: (error) => {
                    let response = error.responseJSON
                    toastr.error(response.message, 'Error')
                    if (response.errors) {
                        for (const error in response.errors) {
                            let input = $('#editPegawaiForm input[name="' + error + '"]')
                            input.addClass('is-invalid');
                            let feedbackElement = '<div class="invalid-feedback">'
                            feedbackElement += '<ul class="list-unstyled">'
                            response.errors[error].forEach((message) => {
                                feedbackElement += '<li>' + message + '</li>'
                            })
                            feedbackElement += '</ul>'
                            feedbackElement += '</div>'
                            input.after(feedbackElement)
                        }
                    }
                }
            })
        }
        // hapus data
        function hapusPegawai(id) {
            Swal.fire({
                title: 'Yakin ingin menghapus?',
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const url = "{{ route('pgw.pegawai.destroy', ':id') }}".replace(':id', id);

                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        success: (response) => {
                            toastr.success(response.message, 'Sukses')
                            setTimeout(() => {
                                location.reload()
                            }, 3000);
                        },
                        error: (error) => {
                            let response = error.responseJSON
                            toastr.error(response.message, 'Error')
                        }
                    })
                }
            })
        }
        // jika dokumen sudah siap laksanakan fungsi datatable
        $(document).ready(function() {
            new DataTable('#tbl_pgw');
        });
    </script>
@endpush
