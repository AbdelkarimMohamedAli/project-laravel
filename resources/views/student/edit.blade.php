
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit</h2>
  

  
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif



  <form method="post" action="{{  url('/Users/'.$data[0]->id) }}"  enctype ="multipart/form-data">

  
    @csrf

     {{-- <input type="hidden" name="_method" value="put"> --}}
     @method('put')


  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  value="{{ $data[0]->name }}"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"   value="{{ $data[0]->email }}"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

 


  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>



</body>
</html>

