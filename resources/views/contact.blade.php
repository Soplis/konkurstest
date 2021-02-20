@extends('layouts.app')

@section('title')contact @endsection


@section('content')
<h1>contact</h1>




  <form action="{{ route('contactform') }}" method="post">
	 {{ csrf_field() }}
	<div class="form-group">
		<label for="name">Enter your name</label>
		<input type="text" name="name" placeholder="Enter" id="name" class="form-control">
    </div>

    <div class="form-group">
		<label for="email">email</label>
		<input type="text" name="email" placeholder="email" id="email" class="form-control">
    </div>

    <div class="form-group">
		<label for="subject">тема сообщения</label>
		<input type="text" name="subject" placeholder="Enter" id="subject" class="form-control">
    </div>

     <div class="form-group">
		<label for="message">сообщения</label>
		<textarea name="message" placeholder="message" id="message" class="form-control"></textarea>
    </div>
     <button type="submit" class="btn btn-success">отправить</button>

</form>
@endsection