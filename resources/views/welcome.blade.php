<form action="{{url('oi')}}" method="post" enctype="multipart/form-data">
    {{@csrf_field()}}
    <input type="file" name="photo">
        
    @error('photo')
    {{$message}}
    @enderror
    <label for="">Name</label>
    <input type="text" name="name" placeholder="name">
    @error('name')
    {{$message}}
    @enderror

    <input type="submit" value="Submit">
</form>
<img src="upload/1670088978.jpeg" alt="photo">