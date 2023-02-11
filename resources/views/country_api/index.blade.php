<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>country api</title>
</head>
<div class="container"><br><br>
    <div class="row">
        <div class="col-md-5 m-auto">
            <div class="card shadow">
                <div class="p-4">
                    <div class="form-group">
                        <h4 class="text-center text-primary">Country Api app</h4>
                    </div>
                    <div class="form-group">
                        <select name="country" id="country" class="form-control">
                            <option value="">Select Country</option>
                            @foreach ($data as $country)
                                <option value="{{ $country->country }}">{{ $country->country }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
