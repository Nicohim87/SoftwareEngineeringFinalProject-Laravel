@extends('layout.user')
@section('title', 'Dietary Programs')


@section('css')
<style>
    .col-a{
        width:30vw;
        margin-left:2em;
        margin-right:2em;
        margin-bottom:2em;
        margin-top:1em;
        border:1px solid #808080;
        border-radius:2em;
        padding: 1em 1em;
        position:relative;
    }
    .col-b{
        margin-top:2em;
        margin-bottom:2em;
        margin-right:1em;
        width: 55.5em;
        border:1px solid #808080;
        border-radius:2em;
        padding: 2em 1em;
        position:relative;
    }
    img {
        width: 100%;
        aspect-ratio:1;
    }
    p {
        white-space: pre-wrap;
        width:100%;
        text-align:justify;
    }
    h2{   
        text-align:justify;
    }
    h6{   
        text-align:justify;
    }
    .backbtn{
        margin-top:2em;
        margin-left:24.5em;
    }
</style>
@endsection



@section('content')
<div class="d-flex">
    <div>
        <button class="btn btn-warning backbtn position-relative">Back</button>
        <div class='col-a'>
            <img src="{{asset('arch/' . $data->img)}}" alt="">
            <h2 class='mt-3'>{{$data->name}}</h2>
            @switch($data->type)
                @case(1)
                    <h6 class="mt-2">Bulking</h6>
                    @break
                @case(2)
                    <h6 class="mt-2">Cutting</h6>
                    @break
                @case(3)
                    <h6 class="mt-2">Diet</h6>
                    @break
                @case(4)
                    <h6 class="mt-2">Maintenance</h6>
                    @break
            @endswitch
        </div>
    </div>
    <div class="col-b">
        <p>{{$data->desc}}</p>
    </div>
</div>
@endsection



@section('js')

@endsection