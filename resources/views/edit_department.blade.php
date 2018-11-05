@extends('template')
@section('title','Tambah Employee')
@section('content')
<a href="{{url('department')}}">< KEMBALI</a>
          <form class="col-md-12" action="{{url('department/'.$tampil->id)}}" method="post">
            {{csrf_field()}} {{method_field('PUT')}}
              <div class="form-group">
                <label for="exampleFormControlInput1">Nama Department</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_department" value="{{$tampil -> nama_department}}">
              </div>
             <button type="submit" class="btn btn-primary mb-2">TAMBAH</button>
          </form>
  @endsection
