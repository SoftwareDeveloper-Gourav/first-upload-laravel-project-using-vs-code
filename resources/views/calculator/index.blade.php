<x-Header />
<div class="container">
    <div class="card shadow">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="p-4">
                    <form action="calculator" method="post">
                        <div class="form-group">
                            {{ @csrf_field() }}
                            <label for="">First Number</label>
                            <input type="number" name="f_number" placeholder="First Number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Last Number</label>
                            <input type="number" name="l_number" placeholder="Last Number" class="form-control">
                        </div>
                        <div class="form-group">
                            <center><button class="btn btn-success">Submit</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-Footer />
