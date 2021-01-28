@extends('layouts.master')

@section('content')
    <h1>Edit Data Siswa</h1>
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif
        <div class="row">
        <div class="col lg-12">
        <form action="/siswa/{{$siswa->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Depan</label>
                    <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby
                    ="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Belakang</label>
                    <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby
                    ="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Jenis Kelammin</label>
                <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                    <option value="L" @if($siswa->jenis_kelamin=='L') selected @endif>Laki-Laki</option>
                    <option value="P" @if($siswa->jenis_kelamin=='P') selected @endif>Perempuan</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Umur</label>
                    <input type="number" min="1" name="umur" class="form-control" id="exampleInputEmail1" aria-describedby
                    ="emailHelp" placeholder="Umur" value="{{$siswa->umur}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputTextarea1">Alamat</label>
                    <textarea id="exampleFormControlTextarea1" name="alamat" rows="3" class="form-control">{{$siswa->alamat}}
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
        </div>
@endsection

