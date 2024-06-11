@extends('layout.user')
@section('title', 'Dietary Programs')


@section('css')
<style>
    .titel{
        text-align:center;
        position:relative;
        margin-top:0.2em;
        margin-bottom:0.5em;
        font-size:3em;
    }
    .subtitel{
        text-align:center;
        position:relative;
        margin-bottom:2em;
        width:80vw;
        margin-left:10vw;
    }
    .cell{
        width:15em;
        height:15em;
        border-radius:1em;
        position:relative;
        margin:0.5em;
    }
    .cell img{
        width:inherit;
        height:inherit;
        border-radius:inherit;
        position:absolute;
        z-index:5;
    }
    h6{
        position:absolute;
        z-index:10;
        top:75%;
        width:13em;
        text-align:center;
    }
    #frame{
        width:80em;
        position:relative;
        margin:auto;
    }
    .bg{
        background-color:white;
        opacity:0.7;
        position:absolute;
        width:inherit;
        height:4.2em;
        top:72%;
        z-index:7;
        border-bottom-left-radius:inherit;
        border-bottom-right-radius:inherit;
    }
    .inherit{
        width:inherit;
        height:inherit;
        border-radius:inherit;
        background-color:transparent;
        z-index:100;
        position:relative;
    }
    .button{
        border:1px solid #808080;
    }
    .cell:hover{
        .button{
            border:2px solid black;
        }
    }
</style>
@endsection



@section('content')
<h1 class="titel"><b>Cutting</b></h1>
<h5 class="subtitel">
            <b>Cutting</b> is a term used in fitness and bodybuilding to describe a phase where individuals <b>aim to reduce body fat</b>. This typically involves a combination of <b>calorie restriction, cardiovascular exercise, and weight training.</b> The goal of cutting is to achieve a <b>leaner physique with defined muscles and reduced body fat percentage.</b>
            <br><br>
            To achieve <b>cutting program</b>, a person must consume <b>calories less than average</b>. A person should consume about <b>200-300 calories less</b>. In cutting program a person may go to the gym with <b>low instensity weight training.</b>
</h5>
<div class="d-flex flex-wrap justify-content-start justify-self-center" id="frame">
    @foreach($data as $d)
    <div class="cell" type="button">
        <img src="{{asset('arch/'.$d->img)}}" alt="">
        <div class="bg"></div>
        <h6 class="start-50 translate-middle-x">{{$d->name}}</h6>
        <form action="{{route('dietary.view', $d->id)}}" method="get" class="inherit position-absolute">
            <button type="submit" class="button inherit"></button>
        </form>
    </div>
    @endforeach
</div>
@endsection



@section('js')

@endsection