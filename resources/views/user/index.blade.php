@extends('layouts.app')

@push('styles')
@endpush

@section('title', 'Halaman User')
@section('header-title', 'Halaman User')

@section('content')
	<div class="d-flex justify-content-end">
		<a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah User</a>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<table class="table table-bordered table-striped" id="table1">
						<thead>
							<tr>
								<th class="table-fit">No</th>
								<th class="table-fit">Username</th>
								<th>Nama</th>
								<th>Email</th>
								<th class="table-fit">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($users as $user)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td class="table-fit">{{ $user->username }}</td>
									<td>{{ $user->name }}</td>
									<td class="table-fit">{{ $user->email }}</td>
									<td class="table-fit">
										<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
										<form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Hapus</button>
										</form>
									</td>
								</tr>
							@empty
								<tr>
									<td colspan="5" class="text-center">Tidak ada data user.</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
@endpush