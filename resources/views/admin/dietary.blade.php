@extends('layout.admin')
@section('title', 'FitTech Admin')



@section('css')
<link rel="stylesheet" href="{{asset('css/admin-dietary.css')}}">
<style>
    .box{
        height:20em;
        width:14em;
        padding:1em;
        border: 1px solid black;
        border-radius:1em;
        margin:0.5em;

    }
    .box img{
        width:100%;
        aspect-ratio:1;
        margin-bottom:0.5em;
    }
</style>
@endsection



@section('content')
<h3>Dietary Programs</h3>
<div class="h-line"></div>
<div class="d-flex align-items-center text-align-center ms-3">
    <a type="button" class="btn btn-primary" href="{{route('admin.dietary.create')}}"><i class="bi bi-plus-lg"></i>  Create</a>
    <p class="ms-5 align-self-center text-align-center">Type displayed</p>
    <select class="form-select ms-3" aria-label="Select" style="width:10em;">
        <option default>All</option>
        <option value="1">Bulking</option>
        <option value="2">Cutting</option>
    </select>
</div>
<div class="h-line"></div>


@foreach($dietaryData as $item)
<div class="box">
  <img src="{{ asset('arch/' . $item->img) }}" alt="">
  <p><b>{{ $item->name }}</b></p>
  <div class="d-flex justify-content-end">
    <button class="btn btn-warning me-3"><i class="bi bi-pencil-fill"></i></button>
    <button class="btn btn-danger me-3"><i class="bi bi-trash-fill"></i></button>
  </div>
</div>
@endforeach


@if(session('success'))
<script>
    swal.fire({ 
        title: 'Success!',
        text: "{{session('success')}}",
        icon: 'success'
    });
</script>
@endif

@endsection



@section('js')

@endsection