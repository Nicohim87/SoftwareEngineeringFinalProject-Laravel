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
    <h2 class="align-self-center">Are you sure you want to delete this data?</h2>
    <a type="button" class="btn btn-warning pt-2 pb-2" href="{{route('admin.dietary')}}"><b>Back</b></a>
</div>
<form class="mt-4" action="{{route('admin.dietary.delete', $data->id)}}" method="post">
    @csrf
    @method('DELETE')
    <div class="d-flex">
        <img id="img-preview" src="{{asset('arch/' . $data->img)}}" alt="">

        <div class="ms-5" style="width:100%;">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input name="name" type="text" class="form-control" id="inp-name" aria-describedby="nameHelp" value="{{ $data->name }}" readonly>
            </div>
          
            <div class="mb-3">
              <label for="img" class="form-label">Image</label>
              <input name="img" type="text" class="form-control" id="inp-img" aria-describedby="imgHelp" value="displayed" readonly>
            </div>
          
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              @switch($data->type)
                @case(1):
                  <input name="type" type='text' class="form-control" aria-label="Select" value="Bulking" readonly>
                  @break
                @case(2):
                  <input name="type" type='text' class="form-control" aria-label="Select" value="Cutting"readonly>
                  @break
              @endswitch
            </div>
        </div>
      
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label">Description</label>
      <textarea name="desc" type="string" class="form-control" id="inp-desc" readonly>{{ $data->desc  }}</textarea>
    </div>
    <button type="submit" class="btn btn-danger">Yes</button>
</form>

@endsection



@section('js')

@endsection