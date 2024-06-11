@extends('layout.user')
@section('title', 'Gym Locations')


@section('css')
<style>
    .titel{
        text-align:center;
        position:relative;
        margin-top:0.2em;
        margin-bottom:0.4em;
        font-size:4em;
    }
    .cell{
        width:95vw;
        height:15em;
        padding:1em 1.5em;
        margin-left:2.5vw;
        margin-bottom:1em;
        border:1px solid #808080;
        border-radius:1.5em;
        position:relative;
    }
    img{
        height: 100%;
        aspect-ratio:1;
    }
    .content{
        margin-left:1em;
        position: relative;
        width:78em;
    }
    p{
        white-space: pre-wrap;
    }
</style>
@endsection



@section('content')
<h1 class="titel"><b>Gym Locations</b></h1>
@foreach($data as $d)
<div class="cell d-flex">
    <img src="{{asset('arch/' . $d->img)}}" alt="">
    <div class="content">
        <a type="button" class="btn btn-primary position-absolute bottom-0 end-0 me-4" target="_blank" href="{{ $d->map }}"><i class="bi bi-map"></i> &nbsp; Go To Maps</a>
        <h3>{{$d->name}}</h3>
        <h5>{{$d->loc}}</h5>
        <p>{{$d->desc}}</p>
    </div>
</div>
@endforeach
<div class="mb-5"></div>
@endsection



@section('js')

@endsection