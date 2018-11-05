@extends('template')
@section('title','Tambah Employee')
@section('content')

<a href="{{url('department/create')}}" class="btn btn-primary">TAMBAH</a>
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Nama Department</th>
    <th scope="col">Aksi</th>
  </tr>
</thead>
<tbody>
  @foreach($tampil as $tampil)
  <tr>
    <th scope="row">1</th>
    <td>{{$tampil -> nama_department}}</td>
    <td>
      <a href="{{url('department/'.$tampil -> id.'/edit')}}" class="btn btn-primary">EDIT</a>
      <form action="{{url('department/'.$tampil -> id)}}" method="post">
        {{csrf_field()}} {{method_field('DELETE')}}
        <button type="submit" name="button" class="btn btn-danger">DELETE</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>

@endsection
