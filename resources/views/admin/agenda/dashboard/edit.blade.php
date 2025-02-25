@extends('layouts.app') {{-- Sesuaikan dengan layout yang digunakan --}}

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">Agenda Kegiatan OSIS</h2>

    {{-- Tombol Tambah Agenda --}}
    <div class="text-end mb-3">
        <a href="{{ route('agenda.create') }}" class="btn btn-primary">+ Tambah Agenda</a>
    </div>

    {{-- Tabel Agenda --}}
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agendas as $index => $agenda)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $agenda->judul }}</td>
                            <td>{{ \Carbon\Carbon::parse($agenda->tanggal)->format('d M Y') }}</td>
                            <td>{{ Str::limit($agenda->deskripsi, 50) }}</td>
                            <td>
                                <a href="{{ route('agenda.show', $agenda->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus agenda ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Jika tidak ada agenda --}}
            @if ($agendas->isEmpty())
                <div class="text-center p-3">
                    <p class="text-muted">Belum ada agenda yang ter
