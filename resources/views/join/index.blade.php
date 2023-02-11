<!doctype html>
<html lang="en">

<head>
    <title>Join In Laravel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container"> <br><br>
        <div class="row">
            <div class="col-md-8 m-auto">
                <form action="join" method="post">
                    <div class="card shadow">
                        <div class="p-4">
                            <h4 class="text-center text-primary form-group">Student Registration Form</h4>
                            @if (session('store'))
                                <h6 class="alert alert-success text-center">{{ session('store') }}</h6>
                            @endif

                            <div class="form-group">
                                <input type="text" name="name" placeholder="Enter Your Name" class="form-control"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                {{ @csrf_field() }}
                            </div>
                            <div class="form-group">
                                <input type="number" name="number" placeholder="Enter Mobile Number"
                                    class="form-control" value="{{ old('number') }}">
                                @error('number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <center><input type="submit" value="Submit" class="btn btn-primary"></center>
                            </div>
                            <div class="form-group">
                                <center><a href="{{ url('add_class') }}">Join Class With Students</a>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><a href="{{ url('id_join') }}">Students Details</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
