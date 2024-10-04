@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-white">
                <h1 class="my-4">Edit Item</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('items.update', $item) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" value="{{ $item->nama }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi:</label>
                        <textarea class="form-control" name="deskripsi" rows="5" required>{{ $item->deskripsi }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('items.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
