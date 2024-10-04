@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h1 class="my-4">Tambah Item</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('items.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi:</label>
                        <textarea class="form-control" name="deskripsi" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('items.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
