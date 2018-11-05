@extends('template')
@section('title','Tambah Employee')
@section('content')

<a href="{{url('employee/create')}}" class="btn btn-primary">TAMBAH</a>
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Nama</th>
    <th scope="col">Aksi</th>
  </tr>
</thead>
<tbody>
  @foreach($employee as $employee)
  <tr>
    <th scope="row">1</th>
    <td>{{$employee -> nama}}</td>
    <td>
      <a href="{{url('employee/'.$employee -> id.'/edit')}}" class="btn btn-primary">EDIT</a>
      <form action="{{url('employee/'.$employee -> id)}}" method="post">
        {{csrf_field()}} {{method_field('DELETE')}}
        <button type="submit" name="button" class="btn btn-danger">DELETE</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>

@endsection
