@extends('layouts.master')
@section('title','Tambah Artikel')
@section('inner')
	<form role="form" action="/artikel" method="POST">
	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">User ID </label>
                    <input type="text" class="form-control" id="name" name="user_id"placeholder="Enter user Id">
                  </div>
                  <div class="form-group">
                    <label for="stock">Judul</label>
                    <input type="text" class="form-control" id="description" name="judul" placeholder="Judul">
                  </div>
                  <div class="form-group">
                    <label for="stock">Isi</label>
                    <input type="text" class="form-control" id="stock" name="isi" placeholder="isi disini">
                  </div>
                  <div class="form-group">
                    <label for="stock">Isi</label>
                    <input type="text" class="form-control" id="stock" name="tag" placeholder="tag">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
@endsection;