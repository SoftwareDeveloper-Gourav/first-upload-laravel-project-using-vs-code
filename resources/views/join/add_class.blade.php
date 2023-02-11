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
                <form action="details" method="post">
                    <div class="card shadow">
                        <div class="p-4">
                            <h4 class="text-center text-primary form-group">Student Class Registration</h4>
                            @if (session('store'))
                                <h6 class="alert alert-success text-center">{{ session('store') }}</h6>
                            @endif
                            <div class="form-group">
                                <select name="id" class="form-control">
                                    <option value="">Select </option>
                                    @foreach ($data as $item)
                                        <option value="{{ $item->id }}">{{ $item->id }}</option>
                                    @endforeach
                                </select>
                                @error('id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" name="school" placeholder="School Name" class="form-control"
                                    value="{{ old('school') }}">
                                @error('school')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                {{ @csrf_field() }}
                            </div>
                            <div class="form-group">
                                <select name="blood_group" id="" class="form-control">
                                    <option value="">Select </option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="K">K</option>
                                </select>
                                @error('blood_group')
                                    <span class="text-danger text-center">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <center><input type="submit" value="Submit" class="btn btn-primary"></center>
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
