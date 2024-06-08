@extends('layout.admin')
@section('title', 'FitTech Admin')



@section('css')
<style>
p{
    margin:0
}
.h-line{
    width:100%;
    height:1px;
    margin:10px 0;
    background-color: #80808080;
}
.box{
    width:32em;
    height:11em;
    padding:1em;
    border: 1px solid black;
    border-radius:1em;
    margin:0.5em;
}
.box img{
    height:100%;
    aspect-ratio:1;
}
.fullWidth{
    width:20em;
}
</style>
@endsection



@section('content')
<h3>Gym Location</h3>
<div class="h-line"></div>
<div class="d-flex align-items-center text-align-center ms-3">
    <a type="button" class="btn btn-primary" href="{{route('admin.gym.create')}}"><i class="bi bi-plus-lg"></i>  Create</a>
    <p class="ms-5 align-self-center text-align-center">Sort By</p>
    <form action="{{route('admin.gym.sort', 'sort')}}">
        <select name="sort" class="form-select ms-3 d-inline-block" aria-label="Select" style="width:10em;">
            <option value="0"{{ $sort == '0' ? 'selected' : '' }}>Name</option>
            <option value="1"{{ $sort == '1' ? 'selected' : '' }}>Location</option>
        </select>
        <select name="mode" class="form-select ms-3 d-inline-block" aria-label="Select" style="width:10em;">
            <option value="0"{{ $mode == '0' ? 'selected' : '' }}>Ascending</option>
            <option value="1"{{ $mode == '1' ? 'selected' : '' }}>Descending</option>
        </select>
        <button type="submit" class="btn btn-secondary ms-3">Sort</button>
    </form>
</div>
<div class="h-line"></div>

<div class="d-flex flex-wrap justify-content-center">
    @foreach($gymData as $item)
    <div class="box d-flex">
      <img src="{{ asset('arch/' . $item->img) }}" alt="">
      <div class="ms-3 fullWidtn">
          <p><b>{{ $item->name }}</b></p>
          <p>{{ $item->loc }}</p>
    
          <div class="d-flex justify-content-end mt-5 fullWidth">
                <a type='button' class="btn btn-primary me-3" target="_blank" href="{{ $item->map }}"><i class="bi bi-map"></i></a>
                <form action="{{route('admin.gym.view', $item->id)}}" method="get">
                    <button class="btn btn-warning me-3" type="submit"><i class="bi bi-pencil-fill"></i></button>
                </form>
                <form action="{{route('admin.gym.delete.conf', $item->id)}}" method="get">
                    <button class="btn btn-danger me-3"><i class="bi bi-trash-fill"></i></button>
                </form>
          </div>
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