@extends('layout.admin')
@section('title', 'FitTech Admin')



@section('css')
<link rel="stylesheet" href="{{asset('css/admin-dietary.css')}}">
<style>
form{
    width: 100%;
}
img{
    width:15em;
    height:15em;  
}
</style>
@endsection



@section('content')
<div class="d-flex justify-content-between">
    <h2 class="align-self-center">Edit Dietary Programs</h2>
    <a type="button" class="btn btn-warning" href="{{route('admin.dietary')}}"><b>Back</b></a>
</div>
<form class="mt-4" action="{{route('admin.dietary.update', $data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="d-flex">
        <img id="img-preview" src="{{asset('arch/' . $data->img)}}" alt="">

        <div class="ms-5" style="width:100%;">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input name="name" type="text" class="form-control" id="inp-name" aria-describedby="nameHelp" value="{{ $data->name }}">
            </div>
          
            <div class="mb-3">
              <label for="img" class="form-label">Image</label>
              <input name="img" type="file" class="form-control" id="inp-img" aria-describedby="imgHelp">
            </div>
          
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <select name="type" class="form-select" aria-label="Select">
                <option value="1" {{ $data->type == '1' ? 'selected' : '' }}>Bulking</option>
                <option value="2" {{ $data->type == '2' ? 'selected' : '' }}>Cutting</option>
              </select>
            </div>
        </div>
      
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label">Description</label>
      <textarea name="desc" type="string" class="form-control" id="inp-desc">{{ $data->desc  }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@if (session('error'))
<script>
  Swal.fire({
    title: "Error",
    html: "{{session('error')}} <br> note: you need to reselect the image!",
    icon: "error"
  });
</script>
@endif

@endsection



@section('js')
<script>
document.getElementById('inp-img').addEventListener('change', function(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('img-preview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
});
</script>
@endsection