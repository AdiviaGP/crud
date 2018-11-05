@extends('template')
@section('title','Tambah Employee')
@section('content')
<a href="{{url('position')}}">< KEMBALI</a>
          <form class="col-md-12" action="{{url('position/'.$tampil->id)}}" method="post">
            {{csrf_field()}} {{method_field('PUT')}}
              <div class="form-group">
                <label for="exampleFormControlInput1">Nama posisi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_posisi" value="{{$tampil -> nama_posisi}}">
              </div>
             <button type="submit" class="btn btn-primary mb-2">TAMBAH</button>
          </form>
  @endsection
