@extends('template')
@section('title','Tambah Posisi')
@section('content')
<a href="{{url('position')}}">< KEMBALI</a>
          <form class="col-md-12" action="{{url('position')}}" method="post">
            {{csrf_field()}}
              <div class="form-group">
                <label for="exampleFormControlInput1">Nama Posisi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_posisi">
              </div>
             <button type="submit" class="btn btn-primary mb-2">TAMBAH</button>
          </form>
  @endsection
