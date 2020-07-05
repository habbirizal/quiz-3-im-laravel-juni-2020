@extends('layouts.master')
@section('title','Detail Artikel')
@section('inner')
  		<h1> Judul : {{$item->judul}}</h1>
  		<p> slug : {{$item->slug}}</p>
  		<p> isi : {{$item->isi}}</p>
  		@if ($item->tag != "")
  			@foreach(explode(' ', $item->tag) as $tag) 
    			<a href="#" class="tn btn-sm btn-primary">{{$tag}}</a>
  			@endforeach
		@endif
@endsection;