<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .error {
            color: red
        }
    </style>
    <title>ajax app</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto"> <br><br>
                <div class="card shadow">
                    <div class="p-4">
                        <form id="ajax-form">
                            {{ @csrf_field() }}
                            <h4 class="text-center text-primary form-group">Ajax-Form App</h4>
                            <div class="form-group mb-3">
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <input type="number" name="number" placeholder="number" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="c_password" placeholder="Confirm Password"
                                    class="form-control">
                            </div>
                            <div class="text-center  mb-3">
                                <input type="submit" value="Submit Now" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6"><br><br>
                <table class="table table-hover table-success">
                    <tr>
                        <th>Sl. No</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Update</th>
                        <th>Delete</th>
                        {{-- <th><a href="" class="btn btn-primary">Edit</a></th>
                        <th><a href="" class="btn btn-danger">Delete</a></th> --}}
                    </tr>
                    <tbody id="tr">

                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="myscript.js"></script>
</body>

</html>
