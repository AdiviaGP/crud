@extends('template')
@section('title','Tambah Employee')
@section('content')
<a href="{{url('employee')}}">< KEMBALI</a>

          <form class="col-md-12" action="{{url('employee')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="{{$employee -> nama}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Jenis Kelamin</label>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="jenis_kelamin" class="custom-control-input" value="Laki - laki" checked>
                <label class="custom-control-label" for="customRadio1">Laki - Laki</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="jenis_kelamin" class="custom-control-input" value="Perempuan">
                <label class="custom-control-label" for="customRadio2">Perempuan</label>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Department</label>
              <select class="form-control" id="exampleFormControlSelect1" name="department">
                @foreach($department as $department)
                <option value="{{$department -> id }}">{{$department -> nama_department }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Position</label>
              <select class="form-control" id="exampleFormControlSelect1" name="position">
                @foreach($position as $position)
                <option value="{{$position -> id }}">{{$position -> nama_posisi }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
               <label for="exampleFormControlTextarea1">Alamat</label>
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
             </div>

             <button type="submit" class="btn btn-primary mb-2">DAFTAR</button>
          </form>
  @endsection
