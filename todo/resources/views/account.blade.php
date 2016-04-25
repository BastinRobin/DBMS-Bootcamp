<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Simple ToDO App</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  	<div id="navbar" class="navbar-collapse collapse">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Add</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      @if(Auth::check())
	      <li><a href="../navbar-static-top/">{{ Auth::user()->name }}</a></li>
	      @endif
	      <li><a href="{{ URL::route('get_logout') }}">Logout</a></li>
	    </ul>
	  </div>
    <div class="container">    
    	@if(Session::has('success'))
    		<div class="alert alert-success">
    			{{ Session::get('success') }}
    		</div>
    	@endif

    	    	@if(Session::has('error'))
    		<div class="alert alert-danger">
    			{{ Session::get('error') }}
    		</div>
    	@endif

        <div class="panel panel-info">
        	<div class="panel-heading">
        		<h2>Todo List</h2>
        	</div>
        	<div class="panel-body">
        		<ul class="list-group">
        		  <li class="list-group-item">
        		  	<form action="{{ URL::route('post_new_item') }}" method="POST">
        		  	{{ csrf_field() }}
        		  		<div class="form-group">
        		  		<input type="text" class="form-control" name="item"></input>
        		  		</div>
        		  		<button class="btn btn-success" type="submit">Add Todo</button>
        		  	</form>
				  </li>
				  @foreach($items as $item)
				  <li class="list-group-item">{{ $item->content }} 
				  	<span class="pull-right"><a href="{{ URL::route('get_edit_item', $item->id) }}" class="btn btn-sm btn-primary">Edit</a> <a href="{{ URL::route('get_remove_item', $item->id)}}" class="btn btn-sm btn-danger">Delete</a></span>
				  </li>
				   @endforeach
				</ul>
        	</div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
