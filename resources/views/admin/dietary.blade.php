@extends('layout.admin')
@section('title', 'FitTech Admin')



@section('css')
<link rel="stylesheet" href="{{asset('css/admin-dietary.css')}}">
<style>
    .box{
        height:20.5 em;
        width:13.75em;
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
    p{
        margin:0
    }
</style>
@endsection



@section('content')
<h3>Dietary Programs</h3>
<div class="h-line"></div>
<div class="d-flex align-items-center text-align-center ms-3">
    <a type="button" class="btn btn-primary" href="{{route('admin.dietary.create')}}"><i class="bi bi-plus-lg"></i>  Create</a>
    <p class="ms-5 align-self-center text-align-center">Type displayed</p>
    <form action="{{route('admin.dietary.sort', 'sort')}}">
        <select name='sort' class="form-select ms-3 d-inline-block" aria-label="Select" style="width:10em;">
            <option value='0'>All</option>
            <option value="1"{{ $sort == '1' ? 'selected' : '' }}>Bulking</option>
            <option value="2"{{ $sort == '2' ? 'selected' : '' }}>Cutting</option>
        </select>
        <button type="submit" class="btn btn-secondary ms-3">Sort</button>
    </form>
</div>
<div class="h-line"></div>

<div class="d-flex flex-wrap justify-content-center">
    @foreach($dietaryData as $item)
    <div class="box">
      <img src="{{ asset('arch/' . $item->img) }}" alt="">
      <p><b>{{ $item->name }}</b></p>
      @switch($item->type)
        @case(1)
            <p>Bulking</p>
            @break
        @case(2)
            <p>Cutting</p>
            @break
      @endswitch
      <div class="d-flex justify-content-end">
        <form action="{{route('admin.dietary.view', $item->id)}}" method="get">
            <button class="btn btn-warning me-3" type="submit"><i class="bi bi-pencil-fill"></i></button>
        </form>
        <form action="{{route('admin.dietary.delete.conf', $item->id)}}" method="get">
            <button class="btn btn-danger me-3"><i class="bi bi-trash-fill"></i></button>
        </form>
      </div>
    </div>
    @endforeach
</div>

@if(session('error'))
<script>
    swal.fire({ 
        title: 'Error',
        text: "{{session('error')}}",
        icon: 'error'
    });
</script>
@endif

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