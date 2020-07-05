@extends('layouts.master')
@section('title','Artikel')
@section('inner')
<a href="/artikel/create" class="btn btn-primary mb-2"> Tambah Artikel </a>
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">#</th>
      <th>Judul</th>
      <th>Isi</th>
      <th style="width: 40px">User_id</th>
      <th> Actions </th>
    </tr>
  </thead>
  <tbody>
  @foreach($items as $key => $item)
  	<tr>
  		<td> {{$key+1}} </td>
  		<td> {{$item->judul}}</td>
  		<td> {{$item->isi}}</td>
  		<td> {{$item->user_id}}</td>
  		<td> 
  		<form action="/artikel/{{$item->id}}" method="post" stye="display:inline;">
  		@csrf
  		@method('DELETE')
      <a href="/artikel/{{$item->id}}" class="tn btn-sm btn-info">Show</a>
  		<a href="/artikel/{{$item->id}}/edit" class="tn btn-sm btn-primary">Edit</a>
  		<button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
  		</form>
  		</td>
  	</tr>

  @endforeach
    
  </tbody>
</table>
@endsection
@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush