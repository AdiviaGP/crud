@extends('template')
@section('title','Tambah Employee')
@section('content')

<a href="{{url('position/create')}}" class="btn btn-primary">TAMBAH</a>
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Nama Posisi</th>
    <th scope="col">Aksi</th>
  </tr>
</thead>
<tbody>
  @foreach($position as $position)
  <tr>
    <th scope="row">1</th>
    <td>{{$position -> nama_posisi}}</td>
    <td>
      <a href="{{url('position/'.$position -> id.'/edit')}}" class="btn btn-primary">EDIT</a>
      <form action="{{url('position/'.$position -> id)}}" method="post">
        {{csrf_field()}} {{method_field('DELETE')}}
        <button type="submit" name="button" class="btn btn-danger">DELETE</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>

@endsection
