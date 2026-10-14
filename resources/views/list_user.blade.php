@extends('layouts.app')

@section('title', 'List User')

@section('content')
    <h2>Daftar Pengguna</h2>
    
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User</a>
    
    <x-user-table :users="$users" />
@endsection