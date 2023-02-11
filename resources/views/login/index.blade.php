<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .error{
            color:red;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
               <div class="card shadow">
                <div class="p-4">
                    <div class="card-header">
                        <h4 class="text-center text-primary">
                            Login With Laravel 8
                        </h4>
                    </div>
                 <form action="loginTest" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="number" name="number" placeholder="Enter Your Mobile Number" class="form-control">
                            {{@csrf_field()}}
                            @error('number')
                            <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                            @error('password')
                            <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Login Now" class="btn btn-success">
                    </div>
                </form>
                </div>
               </div>
          </div>
      </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>