
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  

  
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif




  <form method="post" action="{{  url('/Tasks') }}"  enctype ="multipart/form-data">


    <input type="hidden" name = '_token'  value = '<?php echo csrf_token();?>'>

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="title"  value="{{ old('title') }}"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">fromdate task</label>
    <input type="date" name="fromdate"   value="{{ old('fromdate') }}"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">todate task</label>
    <input type="date" name="todate"   value="{{ old('todate') }}"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>


  
  





  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>



</body>
</html>

