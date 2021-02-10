@extends('layouts.master')

@section('content')
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif
        <div class="row">
            <div class="col-6">
                <h1>DATA SISWA</h1>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah data siswa
                </button>

            </div>
            <table class="table table-hover">
                <tr>
                    <th>NAMA DEPAN</th>
                    <th>NAMA BELAKANG</th>
                    <th>JENIS KELAMIN</th>
                    <th>UMUR</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa->nama_depan}}</td>
                    <td>{{$siswa->nama_belakang}}</td>
                    <td>{{$siswa->jenis_kelamin}}</td>
                    <td>{{$siswa->umur}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td>
                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm
                        ('Apakah anda yakin ingin menghapus?')">Delete</a>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/siswa/create" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Depan</label>
                    <input type="text" name="nama_depan" class="form-control" placeholder="Nama Depan"
                    value="{{old('nama_depan')}}">
                    @error('nama_depan')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Belakang</label>
                    <input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang"
                    value="{{old('nama_belakang')}}">
                    @error('nama_belakang')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Jenis Kelammin</label>
                <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Umur</label>
                    <input type="number" min="1" name="umur" class="form-control" placeholder="Umur"
                    value="{{old('umur')}}">
                    @error('umur')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputTextarea1">Alamat</label>
                    <textarea id="exampleFormControlTextarea1" name="alamat" rows="3" class="form-control">
                    {{old('alamat')}}</textarea>
                    @error('alamat')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
@endsection

