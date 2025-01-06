@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Bagian Index --}}
    @if (isset($flightClasses))
        <h1>Daftar Flight Class</h1>
        <a href="{{ route('flight_class.create') }}" class="btn btn-primary mb-3">Tambah Flight Class</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pesawat ID</th>
                    <th>Class Type</th>
                    <th>Harga</th>
                    <th>Total Kursi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flightClasses as $flightClass)
                    <tr>
                        <td>{{ $flightClass->id }}</td>
                        <td>{{ $flightClass->pesawat_id }}</td>
                        <td>{{ $flightClass->class_type }}</td>
                        <td>{{ $flightClass->harga }}</td>
                        <td>{{ $flightClass->total_kursi }}</td>
                        <td>
                            <a href="{{ route('flight_class.show', $flightClass->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('flight_class.edit', $flightClass->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('flight_class.destroy', $flightClass->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{-- Bagian Create/Edit --}}
    @if (isset($formAction))
        <h1>{{ isset($flightClass) ? 'Edit' : 'Tambah' }} Flight Class</h1>
        <form action="{{ $formAction }}" method="POST">
            @csrf
            @if(isset($flightClass))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="pesawat_id" class="form-label">Pesawat ID</label>
                <input type="number" name="pesawat_id" id="pesawat_id" class="form-control" value="{{ $flightClass->pesawat_id ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label for="class_type" class="form-label">Class Type</label>
                <input type="text" name="class_type" id="class_type" class="form-control" value="{{ $flightClass->class_type ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" value="{{ $flightClass->harga ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label for="total_kursi" class="form-label">Total Kursi</label>
                <input type="number" name="total_kursi" id="total_kursi" class="form-control" value="{{ $flightClass->total_kursi ?? '' }}" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    @endif

    {{-- Bagian Show --}}
    @if (isset($flightClass) && !isset($formAction))
        <h1>Detail Flight Class</h1>
        <ul>
            <li>ID: {{ $flightClass->id }}</li>
            <li>Pesawat ID: {{ $flightClass->pesawat_id }}</li>
            <li>Class Type: {{ $flightClass->class_type }}</li>
            <li>Harga: {{ $flightClass->harga }}</li>
            <li>Total Kursi: {{ $flightClass->total_kursi }}</li>
        </ul>
        <a href="{{ route('flight_class.index') }}" class="btn btn-primary">Kembali</a>
    @endif
</div>
@endsection
