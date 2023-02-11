@include('crud.header')
<div class="container"> <br><br><br>
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card shadow">
                <form action="{{ url('crud') }}" method="POST">
                    {{ @csrf_field() }}
                    <div class="p-4">
                        <h4 class="text-center form-group text-primary">
                            This Is A Test CRUD Operation
                        </h4>
                        <div class="form-group">
                            <input type="text" name="name" value="{{ old('name') }}"
                                placeholder="Enter Your Name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" name="number" value="{{ old('number') }}"
                                placeholder="Enter Your Mobile Number" class="form-control">
                            @error('number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Enter Password" class="form-control">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="c_password" value="{{ old('c_password') }}"
                                placeholder="Confirm Password" class="form-control">
                            @error('c_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <center class="form-group">
                            <input type="submit" name="" value="Submit Form" class="btn btn-primary">
                        </center>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('crud.header')
