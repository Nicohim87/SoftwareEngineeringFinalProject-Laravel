@extends('layout.admin')
@section('title', 'FitTech Admin')



@section('css')
<style>
form{
    width: 100%;
}
img{
    width:15em;
    height:15em;  
}
.h-line{
    width:100%;
    height:1px;
    margin:10px 0;
    background-color: #80808080;
}
</style>
@endsection



@section('content')
<div class="d-flex justify-content-between">
    <h2 class="align-self-center">Update Gym Locations</h2>
    <a type="button" class="btn btn-warning pt-2 pb-2" href="{{route('admin.gym')}}"><b>Back</b></a>
</div>
<form class="mt-4" action="{{route('admin.gym.update', $data->id)}}" method="post" enctype="multipart/form-data">
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
              <label for="loc" class="form-label">Location</label>
              <input name="loc" type="text" class="form-control" id="inp-loc" aria-describedby="locHelp" value="{{ $data->loc }}">
            </div>
        </div>
      
    </div>
    <div class="mb-3">
      <label for="map" class="form-label">Map Link</label>
      <input name="map" type="text" class="form-control" id="inp-map" aria-describedby="mapHelp" value="{{ $data->map }}">
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label">Extra Description</label>
      <textarea name="desc" type="string" class="form-control" id="inp-desc">{{ $data->desc }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@if ($errors->any())
<script>
  Swal.fire({
    title: "Error",
    html: "{{$errors->first()}} <br> note: you need to reselect the image!",
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