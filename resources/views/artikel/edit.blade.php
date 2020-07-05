@extends('layouts.master')
@section('title','Edit Artikel')
@section('inner')
	<form role="form" action="/artikel/{{$item->id}}" method="POST">
	@csrf
  @method('PUT')
                  <div class="card-body">
                  <div class="form-group">
                    <label for="name">User ID </label>
                    <input type="text" class="form-control" id="name" name="user_id"placeholder="Enter user Id" value="{{$item->user_id}}">
                  </div>
                  <div class="form-group">
                    <label for="stock">Judul</label>
                    <input type="text" class="form-control" id="description" name="judul" placeholder="Judul" value="{{$item->judul}}">
                  </div>
                  <div class="form-group">
                    <label for="stock">Isi</label>
                    <input type="text" class="form-control" id="stock" name="isi" placeholder="isi disini" value="{{$item->isi}}">
                  </div>
                  <div class="form-group">
                    <label for="stock">Isi</label>
                    <input type="text" class="form-control" id="stock" name="tag" placeholder="tag"
                    value="{{$item->tag}}">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">
                  Update</button>
                </div>
              </form>
@endsection;