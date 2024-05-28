@extends('layout.admin')
@section('title', 'FitTech Admin')



@section('css')
<link rel="stylesheet" href="{{asset('css/admin-dietary.css')}}">
@endsection



@section('content')
<div class="d-flex justify-content-between">
    <h2 class="align-self-center">Dietary Programs</h2>
    <button class="btn btn-warning"><b>Back</b></button>
</div>
<form class="mt-4">

    <div class="d-flex">
        <img src="{{asset('favicon.png')}}" alt="">

        <div class="ms-5" style="width:100%;">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="inp-name" aria-describedby="emailHelp">
            </div>
          
            <div class="mb-3">
              <label for="img" class="form-label">Image</label>
              <input type="file" class="form-control" id="inp-img" aria-describedby="emailHelp">
            </div>
          
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <select class="form-select" aria-label="Default select example">
                <option value="1">Bulking</option>
                <option value="2">Cutting</option>
              </select>
            </div>
        </div>
      
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label">Description</label>
      <textarea type="password" class="form-control" id="inp-desc"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection



@section('js')

@endsection