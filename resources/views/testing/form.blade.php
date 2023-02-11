<!doctype html>
<html lang="en">

<head>
    <title>form insert</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<div class="container"> <br> <br>
    <center><a href="otp" class="btn btn-primary">OTP</a></center> <br> <br>
    <center><a href="searchTest" class="btn btn-primary">Search App</a></center> <br> <br>
    <center><a href="join" class="btn btn-primary">Join App</a></center> <br> <br>
    <center><a href="crud" class="btn btn-primary">Laravel CRUD</a></center> <br> <br>
    <center><a href="pin" class="btn btn-primary">Pincode Application</a></center> <br> <br>
    <center><a href="ajax-app" class="btn btn-primary">Ajax Application</a></center> <br> <br>
    <center><a href="ajax-app" class="btn btn-primary">Ajax Application</a></center> <br> <br>
    <center><a href="multiple-image" class="btn btn-primary">Multiple Image Upload App</a></center> <br> <br>

    <div class="row">
        <div class="col-md-10 m-auto">
            <form id="reg_form">
                <div class="card shadow">
                    <div class="p-4">
                        <div class="form-group">
                            <h4 class="text-center text-primary">Registration Form</h4>
                        </div>
                        {{ @csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="number" placeholder="Enter Your Number" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Profile Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="c_password" placeholder="Confirm Password"
                                class="form-control">
                        </div>
                        <div class="text-center">
                            <input type="submit" id="btn" value="Registration" class="btn btn-primary">
                        </div> <br>
                        <div class="text-center">
                            {{-- <a onclick="showData()" class="btn btn-primary btn-sm">Show Data</a> --}}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> <br>
    <table id="myTable" class="table table-hover">
        <thead>
            <th>No.</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody id="tr">

        </tbody>
    </table>

</div>




<body>


    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/script.js"></script>


</body>

</html>
