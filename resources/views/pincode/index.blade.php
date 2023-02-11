<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container"> <br><br>
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card shadow">
                    <div class="p-4">
                        <div class="form-group">
                            <h4 class="text-center text-primary form-group">
                                Check Your Pincode Details
                            </h4>
                            @if(session('success'))
                            <p class="text-center form-group alert alert-success">{{session('success')}}</p>
                            @elseif(session('error'))
                            <p class="text-center form-group alert alert-danger ">{{session('error')}}</p>
                            @endif
                        </div>
                        {{-- {{$data}} --}}
                        <form action="pincode" method="POST">
                            <div class="form-group">
                                {{@csrf_field()}}
                                <input type="text" name="pincode" class="form-control" placeholder="Enter Your Pincode"autocomplete="off" value="{{old('pincode')}}"> 
                                @error('pincode')
                                       <span class="text-danger">{{$message}}</span>                                    
                                @enderror
                            </div>
                            <div class="text-center mt-5">
                                <input type="submit" value="Get Details" class="btn btn-primary  btn-sm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
     @if(session()->has('success'))
      <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card shadow">
                    <div class="p-4">
                        <table border="1" cellpadding="10" width="100%">
                            <tr>
                                <th>Pincode</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                            </tr>
                            <tr>
                                <td>@if(session()->has('success')){{$data->Pincode}}@endif</td>
                                <td>@if(session()->has('success')){{$data->Block}}@endif</td>
                                <td>@if(session()->has('success')){{$data->State}}@endif</td>
                                <td>@if(session()->has('success')){{$data->Country}}@endif</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>