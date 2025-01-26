@extends('layouts.layout')
@section('content')
    <h3 class="page-title">
        Dashboard
    </h3>
    <div class="page-bar">

        <div class="portlet">
            <a href="{{ route('log.create') }}">Tambah Log</a>
            <div class="portlet-body">
                <h4 class="block">Log Harian</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Pegawai</th>
                            <th>Role</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            @can('aksi')
                                <th>Aksi Status</th>
                            @endcan
                            @can('aksi')
                                <th>Aksi</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                            <tr>
                                <td>{{ $log->user->name }}</td>

                                <td>{{ str_replace('_', ' ', $log->user->role) }}</td>
                                <td>{{ $log->date }}</td>
                                <td>{{ $log->description }}</td>
                                <td>{{ $log->status }}</td>

                                {{-- hilangkan form ini jika disetujui atau ditolak --}}

                                @can('verify', $log)
                                    <td>
                                        @if ($log->status == 'pending')
                                            <form action="{{ route('log.verify', $log->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                <input type="hidden" name="status" value="Disetujui">
                                                <button type="submit" class="btn btn-success">Setujui</button>
                                            </form>
                                            <form action="{{ route('log.verify', $log->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                <input type="hidden" name="status" value="Ditolak">
                                                <button type="submit" class="btn btn-danger">Tolak</button>
                                            </form>
                                        @endif
                                    </td>
                                @endcan

                                {{-- end form --}}

                                @can('aksi', $log)
                                    <td>
                                        @can('edit', $log)
                                            <a href="{{ route('log.edit', $log->id) }}">Edit</a>
                                        @endcan

                                        @can('delete', $log)
                                            <form action="{{ route('log.destroy', $log->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Hapus</button>
                                            </form>
                                        @endcan

                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
