@extends('layouts.app')

@section('title') home @endsection

@section('content')<h1>Home<h1>
	<p>Police</p>
@endsection

@section('aside')
	@parent
	<p>Доп текст</p>
@endsection