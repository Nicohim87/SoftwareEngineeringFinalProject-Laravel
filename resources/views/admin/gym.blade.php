@extends('layout.admin')
@section('title', 'FitTech Admin')



@section('css')
<link rel="stylesheet" href="{{asset('css/admin-gym.css')}}">
<style>
    p{
        margin:0
    }
</style>
@endsection



@section('content')
<h3>Gym Location</h3>
<div class="h-line"></div>
<div class="d-flex align-items-center text-align-center ms-3">
    <a type="button" class="btn btn-primary" href="{{route('admin.dietary.create')}}"><i class="bi bi-plus-lg"></i>  Create</a>
    <p class="ms-5 align-self-center text-align-center">Sort By</p>
    <select class="form-select ms-3" aria-label="Select" style="width:10em;">
        <option default>Name</option>
        <option value="1">Location</option>
    </select>
    <select class="form-select ms-3" aria-label="Select" style="width:10em;">
        <option default>Ascending</option>
        <option value="1">Descending</option>
    </select>
</div>
<div class="h-line"></div>
@endsection



@section('js')

@endsection