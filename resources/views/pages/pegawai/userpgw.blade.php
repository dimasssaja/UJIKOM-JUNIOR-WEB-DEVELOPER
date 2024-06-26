@extends('dashboard')

@section('content')
    <h2 style="text-align: center;">List Data User</h2>
    {{-- table data user dengan id tbl_pgwusr --}}
    <table id="tbl_pgwusr" class="table table-dark table-striped">
        <thead class="thead-dark">
            <tr>
                {{-- colom yang digunakan --}}
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- data yang dipanggil --}}
            @foreach ($user as $usr)
                <tr>
                    <td>{{ $usr->id }}</td>
                    <td>{{ $usr->name }}</td>
                    <td>
                        @if ($usr->role == 'admin')
                            <span class="badge bg-primary">
                                <i class="ri-user-star-fill"></i>
                                Admin</span>
                        @else
                            <span class="badge bg-secondary">
                                <i class="ri-user-fill"></i>
                                User</span>
                        @endif
                    </td>
                    <td>{{ $usr->email }}</td>
                    <td>
                        @if (auth()->user()->role == 'admin')
                            <button type="button" class="btn btn-primary btn-sm"
                                onclick="showEditModal('{{ $usr->id }}', '{{ $usr->name }}', '{{ $usr->email }}')">EDIT</button>
                            <button type="button" class="btn btn-danger btn-sm"
                                onclick="confirmDelete('{{ $usr->id }}')">HAPUS</button>
                        @else
                            <button type="button" class="btn btn-primary btn-sm" disabled>EDIT</button>
                            <button type="button" class="btn btn-danger btn-sm" disabled>HAPUS</button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (auth()->user()->role == 'admin')
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Data
            User</button>
    @else
        <button type="button" class="btn btn-primary" disabled>Tambah Data User</button>
    @endif

    <!-- Create User Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Form Isi Data User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="createUserForm">
                        <div class="mb-3">
                            <label for="createName" class="form-label">Nama User</label>
                            <input type="text" class="form-control" id="createName" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="createEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="createEmail" name="email"
                                placeholder="name@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="createRole" class="form-label">Role</label>
                            <select class="form-control" id="createRole" name="role" required>
                                <option value="user" selected>User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="createPassword" class="form-label">Password</label>
                            <input type="text" class="form-control" id="createPassword" name="password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button onclick="createUser()" type="button" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit User Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editUserForm">
                        <input type="hidden" id="editUserId" name="id">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Nama User</label>
                            <input type="text" class="form-control" id="editName" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" name="email"
                                placeholder="name@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="editRole" class="form-label">Role</label>
                            <select class="form-control" id="editRole" name="role" required>
                                <option value="user" selected>User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editPassword" class="form-label">Password</label>
                            <input type="text" class="form-control" id="editPassword" name="password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button onclick="updateUser()" type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- css yang dipush ke view utama --}}
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
@endpush

{{-- javascript yang dipush ke view utama --}}
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        // create data
        function createUser() {
            const url = "{{ route('api.user.store') }}";
            let data = {
                name: $('#createName').val(),
                email: $('#createEmail').val(),
                password: $('#createPassword').val(),
                role: $('#createRole').val()
            };

            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function(response) {
                    toastr.success(response.message, 'Sukses');
                    $('#createUserForm')[0].reset();
                    $('#createModal').modal('hide');
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                },
                error: function(error) {
                    let response = error.responseJSON;
                    toastr.error(response.message, 'Error');

                    if (response.errors) {
                        for (const error in response.errors) {
                            let input = $('#createUserForm input[name="' + error + '"]');
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

        // update data
        function updateUser() {
            const userId = $('#editUserId').val();
            const url = "{{ route('api.user.update', '') }}/" + userId;
            const data = {
                name: $('#editName').val(),
                email: $('#editEmail').val(),
                password: $('#editPassword').val(),
                role: $('#editRole').val()
            };

            $.ajax({
                url: url,
                type: 'PUT',
                data: data,
                success: function(response) {
                    toastr.success(response.message, 'Sukses');
                    $('#editUserForm')[0].reset();
                    $('#editModal').modal('hide');
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                },
                error: function(error) {
                    let response = error.responseJSON;
                    toastr.error(response.message, 'Error');

                    if (response.errors) {
                        for (const error in response.errors) {
                            let input = $('#editUserForm input[name="' + error + '"]');
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

        // hapus data user
        function deleteUser(id) {
            const url = "{{ route('api.user.destroy', '') }}/" + id;

            $.ajax({
                url: url,
                type: 'DELETE',
                success: function(response) {
                    toastr.success(response.message, 'Sukses');
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                },
                error: function(error) {
                    const response = error.responseJSON;
                    toastr.error(response.message, 'Error');
                }
            });
        }

        // memberikan notif jika ingin menghapus data
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteUser(id);
                }
            });
        }

        function showEditModal(id, name, email) {
            $('#editUserId').val(id);
            $('#editName').val(name);
            $('#editEmail').val(email);
            $('#editPassword').val('');

            $('#editModal').modal('show');
        }

        // tabel untuk id tbl_pgwusr
        $(document).ready(function() {
            new DataTable('#tbl_pgwusr');
        });
    </script>
@endpush
