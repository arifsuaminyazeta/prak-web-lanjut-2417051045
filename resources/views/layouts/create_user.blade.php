@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <h2>Tambah User Baru</h2>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" required><br><br>

        <label for="kelas_id">Kelas:</label><br>
        <select id="kelas_id" name="kelas_id" required>
            <option value="" selected disabled>Pilih Kelas</option>
            @foreach ($kelas as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
@endsection