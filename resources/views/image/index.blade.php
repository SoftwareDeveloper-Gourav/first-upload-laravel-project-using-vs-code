<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>multiple photo upload app</title>
</head>

<body>
    <div class="container"> <br><br><br>
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card shadow">
                    <div class="p-4">
                        <div class="form-group mb-3">
                            <h4 class="form-group text-center text-primary">
                                Multiple Photo Upload
                            </h4>
                            @if (session('ok'))
                                <h6 class="alert alert-success text-center">{{ session('ok') }}</h6>
                            @endif
                        </div>
                        <form method="POST" action="{{ url('/multiple-image') }}" enctype="multipart/form-data">
                            {{ @csrf_field() }}
                            <div class="form-group">
                                <input type="file" name="image[]" id="" multiple>
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <center>
                                    <input type="submit" value="Upload" class="btn btn-primary">
                                </center>
                            </div>
                        </form>
                        <br><br>
                        <center>
                            <a href="{{ url('Photos-View') }}" class="btn btn-success">View Photos</a>
                        </center>


                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
</body>

</html>
