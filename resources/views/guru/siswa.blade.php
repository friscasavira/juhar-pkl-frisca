@extends('guru.layouts.app')

@section('title', 'siswa')

@section('content')
@if ($errors->has('access'))
    <div class="alert alert-danger">
        {{$errors->first('access')}}
    </div>
@endif

@if($siswa)
<div class="row bg-light rounded align-items-center mx-0">
    <div class="col-md-6 p-3">
     <table>
        <tr>
            <td width ="100">Pembimbing</td>
            <td width ="12">:</td>
            <td>{{ $siswa->pembimbingSiswa->guru->nama_guru }}</td>
        </tr>
        <tr>
            <td width ="100">DUDI</td>
            <td width ="12">:</td>
            <td>{{ $siswa->pembimbingSiswa->dudi->nama_dudi }}</td>
        </tr>
     </table>
    </div>
</div>
<br>
@endif
<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h6 class="mb-4">Data Siswa</h6>
            <div class="table-responsive">
                <table class="table" id="siswa">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswa )
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $siswa->nisn }}</td>
                            <td>{{ $siswa->nama_siswa}}</td>
                            <td>
                                <img src="{{ asset('storage/'. $siswa->foto) }}" alt="" height="30">
                            </td>
                            <td>
                                <a href="{{ route('guru.pembimbing.siswa.kegiatan', ['id' => $siswa->id_pembimbing, 'id_siswa' => $siswa->id_siswa]) }}" class="btn btn-primary btn-sm">Kegiatan</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#siswa').DataTable();
    });
</script>

@endsection
