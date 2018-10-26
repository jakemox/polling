@extends('layouts.app')

@section('content')

<h1>Create New Poll</h1>


<div id="polls">

<form action="{{action('PollController@store')}}" method="post">
  <?= csrf_field() ?>

  <div class="form-group">

      <label>Title</label>

      <input type="text" name="name" class="form-control">
  </div>

  <div class="form-group">

      <label>Description</label>
<br>
      <textarea name="description" cols="100" rows="10"></textarea>
  </div>

  <div class="form-group" id="choices">

      <label>Options</label>

      <input type="text" name="option[0]" class="form-control" placeholder="enter choice">
      <input type="text" name="option[1]" class="form-control" placeholder="enter choice">
      <input type="text" name="option[2]" class="form-control" placeholder="enter choice">
  </div>

  



 <button type="submit" class="btn btn-primary">Submit</button>

</form>

<button id="addBtn" class="btn btn-success" onclick="addFields()">Add</button>

<script type='text/javascript'>
    function addFields(){
        console.log('clicked', arguments);
    
        var number = 1;
        var j = 3;
        var container = document.getElementById("choices");
        
        for (i=0;i<number;i++){
            
            var input = document.createElement("input");
            input.type = "text";
            input.name = "option[" + (j) + "]";
            container.appendChild(input);
            // Append a line break 
            input.classList.add('form-control');
            input.placeholder = "enter choice";
            j++;
            
        }
    }
</script>

 @endsection