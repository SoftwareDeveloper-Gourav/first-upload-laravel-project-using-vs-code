<!doctype html>
<html lang="en">

<head>
    <title>show all user in this application</title>
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
                <div class="bg-warning p-3">
                    <form method="POST" action="search">
                        {{ @csrf_field() }}
                        <input type="text" name="search" id="" value="{{ session('search') }}">
                        <input type="submit" value="search">

                    </form>
                </div>

                <table class="table table-primary table-hover">
                    <tr>
                        <th>Select id</th>
                        <th> sl no </th>
                        <th> name </th>
                        <th> number </th>
                        <th> password </th>
                    </tr>
                    @if (count($data) > 0)
                        @foreach ($data as $val)
                            <tr>
                                <form action="{{ url('deleteSearch') }}" method="POST">
                                    {{ @csrf_field() }}
                                    <td><input type="checkbox" name="ids[{{ $val->id }}]"
                                            value="{{ $val->id }}"></td>

                                    <td>{{ $val->id }}</td>
                                    <td>{{ $val->name }}</td>
                                    <td>{{ $val->number }}</td>
                                    <td>{{ $val->password }}</td>
                            </tr>
                        @endforeach
                        <div class="bg-info p-3">
                            <center>
                                <a href="">
                                    <button style="background-color:rgb(224, 67, 67); color:white">Delete</button>
                                </a>
                            </center>
                        </div>

                        </form>
                    @else
                        <tr>
                            <td colspan="5" class="text-center text-danger">No Record Found...!</td>
                        </tr>
                    @endif
                </table>
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
