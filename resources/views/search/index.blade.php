<!doctype html>
<html lang="en">

<head>
    <title>search application</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <br>

        <h4 class="text-center">User Registration Form</h4>
        @if (session('ok'))
            <h6 class="text-center alert alert-success alert-dismissible fade show">{{ session('ok') }}</h6>
        @endif
        <form action="{{ url('add') }}" method="POST">
            {{ @csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Enter Your Name"
                    value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="number" placeholder="Enter Your Number"
                    value="{{ old('number') }}">
                @error('number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password"
                    value="{{ old('password') }}">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="c_password" placeholder="Confirm Password"
                    value="{{ old('c_password') }}">
                @error('c_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <center>
                <input type="submit" name="submit" value="Submit This Form" class="btn btn-primary">
            </center>
            <br>
            <center><a href="{{ url('Show') }}">Show all users</a></center>
        </form>
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

