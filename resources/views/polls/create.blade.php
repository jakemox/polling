@extends('layouts.app')

@section('content')

<h1>Create New Poll</h1>


<div id="polls">

<form action="{{action('PollController@store')}}" method="post">
  <?= csrf_field() ?>

  <div class="form-group"></div>

      <label>Title</label>

      <input type="text" name="name" class="form-control">
  </div>

  <div class="form-group"></div>

      <label>Creator</label>

      <input type="text" name="user_id" class="form-control">
  </div>

  <div class="form-group"></div>

      <label>Description</label>
<br>
      <textarea name="description" cols="100" rows="10"></textarea>
  </div>

  <div class="form-group"></div>

      <label>Options</label>

      <input type="text" name="option" class="form-control" placeholder="enter choice">
      <input type="text" name="option" class="form-control" placeholder="enter choice">
      <input type="text" name="option" class="form-control" placeholder="enter choice">
  </div>

 <button type="submit" class="btn btn-primary">Submit</button>

</form>

 @endsection