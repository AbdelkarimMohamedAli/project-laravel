

<!DOCTYPE html>
<html>

<head>
    <title>PDO - Read Records - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }

        .m-b-1em {
            margin-bottom: 1em;
        }

        .m-l-1em {
            margin-left: 1em;
        }

        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

    <!-- container -->
    <div class="container">


        <div class="page-header">
            <h1>Read Users </h1> 
            <br>

          <br>

        <a href="{{ url('Student/Logout') }}">LogOut</a>    ||    <a href="{{ url('/Tasks/create') }}">create</a>
        
        </div>


        {{ session()->get('Message') }}   

        <!-- PHP code to read records will be here -->



        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Title</th>
                <th>fromdate</th>
                <th>todate</th>
                <th>User</th>
                <th>action</th>

            </tr>
<?php $i= 1;?>
@foreach ($data as $fetchedData )
            <tr>

                <td>{{ $i++ }}</td>

                <td>{{$fetchedData->id  }}</td>
                <td>{{$fetchedData->title  }}</td>
                <td>{{$fetchedData->fromdate  }}</td>
                <td>{{$fetchedData->todate  }}</td>
                <td>{{$fetchedData->name  }}</td>
                <?php 
                    /*$mytime = Carbon\Carbon::now();
                    echo $mytime;*/
                    //echo $mytime->toDateTimeString();
                      $dt = new DateTime();
                   // echo $dt->format('Y-m-d');
                ?>
                @if($fetchedData->todate >  $dt->format('Y-m-d') )
                <td>
                    <a href=''   data-toggle="modal" data-target="#modal_single_del{{$fetchedData->id  }}"  class='btn btn-danger m-r-1em'>Delete</a>
                    <a href='{{ url('/Tasks/'.$fetchedData->id.'/edit') }}' class='btn btn-primary m-r-1em'>Edit</a>
                </td>
                @endif

            </tr>



            <div class="modal" id="modal_single_del{{$fetchedData->id  }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">delete confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                       </button>
                        </div>
            
                        <div class="modal-body">
                            Student :  {{$fetchedData->title  }}
                        </div>
                        <div class="modal-footer">
                            <form action="{{ url('Tasks/'.$fetchedData->id) }}" method="post">
                             @method('delete')
                             @csrf
                                <div class="not-empty-record">
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




            @endforeach

            <!-- end table -->
        </table>
        {{ $data->links('pagination.pages') }}
    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>








          
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  