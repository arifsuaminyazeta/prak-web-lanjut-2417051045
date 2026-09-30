<!-- @props(['users'])

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->npm }}</td>
            <td>{{ $user->nama_kelas ?? $user->kelas->nama_kelas ?? '-' }}</td>
            <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> -->