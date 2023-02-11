<!doctype html>
<html lang="en">
  <head>
    <title>
        Tostr Create Project
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    
  </head>
  <body>
      
   <div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="p-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="text-center text-primary">
                            This Form Created For Toastr JS
                        </h4>
                    </div>
                    <form action="test" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Please Enter your name" class="form-control" disabled>
                            {{@csrf_field()}}
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" placeholder="Please Enter your city name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="number" placeholder="Please Enter number" class="form-control">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Registration With Toastr Js</button>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

   
   

    @if(session('ok'))
    <script>
       toastr.options = {
            "closeButton": true,
            "debug": true,
            "newestOnTop": true,
            "progressBar": true,
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "00",
            "hideDuration": "",
            "timeOut": "2000",
           
        };
toastr.success('Bro , Please Enter Your Name');
    </script>
    @endif

  </body>
</html>