@extends('layout.user')
@section('title', 'Dietary Programs')


@section('css')
<style>
    .box{
        border: 1px solid black;
        border-radius:1.5em;
        height: 20em;
        width: 35em;
        margin:1em 2em;
        box-sizing:border-box;
        position:relative;
    }
    .box img{
        width: inherit;
        height:inherit;
        border-radius:inherit;
        z-index: 3;
        opacity:0.9;
        position:absolute;
        transition-duration:300ms;
    }

    .veil{
        opacity: 0;
        background-color: #0d6efd;
        width: inherit;
        height: inherit;
        border-radius: inherit;
        z-index: 10;
        box-sizing:border-box;
        border:inherit;
        position:absolute;
        transition-duration:300ms;
    }

    .ct-txt{
        opacity:0;
        width:28em;
        z-index: 15;
        text-align:center;
        position:relative;
        transition-duration:300ms;
    }
    .img-txt{
        opacity:1;
        position:relative;
        z-index:20;
        transition-duration:300ms;
        color:white;
    }

    .box:hover{
        .veil{
            opacity:0.8;
        }
        .box img{
            opacity: 1;
        }
        .ct-txt{
            opacity: 1;
            z-index: 15;
        }
        .img-txt{
            opacity:0;
        }
    }
    .titel{
        text-align:center;
        position:relative;
        margin-top:0.2em;
        margin-bottom:0.4em;
        font-size:4em;
    }
    .fullSize{
        height:inherit;
        width:inherit;
        border-radius:inherit;
        position:absolute;
        z-index: 30;
        background-color:transparent;
        border:transparent;
    }
</style>
@endsection



@section('content')
<h1 class="titel"><b>Dietary Programs</b></h1>
<div class="d-flex flex-wrap justify-content-center">
    <div class="box" type="button">
        <img src="{{asset('dietary-img/bulking.jpg')}}" alt="">
        <h1 class="img-txt position-absolute top-50 start-50 translate-middle"><b>Bulking</b></h1>
        <div class="veil"></div>
        <form action="{{route('dietary.bulking')}}" class="fullSize">
            <button type="submit" class="fullSize"></button>
        </form>
        <p class="ct-txt position-absolute top-50 start-50 translate-middle">
            <b>Bulking</b> is a fitness phase where individuals consume more
            calories than they burn to <b>support muscle growth and increase
            body weight.</b> It involves structured weightlifting and a diet
            <b>rich in protein and carbohydrates</b> to fuel muscle repair and
            growth, aiming to <b>maximize muscle mass gains despite some fat
            gain.</b>
        </p>
    </div>

    <div class="box" type="button">
        <img src="{{asset('dietary-img/cutting.jpg')}}" alt="">
        <h1 class="img-txt position-absolute top-50 start-50 translate-middle"><b>Cutting</b></h1>
        <div class="veil"></div>
        <form action="{{route('dietary.cutting')}}" class="fullSize">
            <button type="submit" class="fullSize"></button>
        </form>
        <p class="ct-txt position-absolute top-50 start-50 translate-middle">
        <b>Cutting</b> is a term used in fitness and bodybuilding to describe a 
        phase where individuals <b>aim to reduce body fat</b>. This typically 
        involves a combination of <b>calorie restriction, cardiovascular exercise,
        and weight training.</b> The goal of cutting is to achieve a <b>leaner 
        physique with defined muscles and reduced body fat percentage.</b>
        </p>
    </div>

    <div class="box" type="button">
        <img src="{{asset('dietary-img/diet.jpg')}}" alt="">
        <h1 class="img-txt position-absolute top-50 start-50 translate-middle"><b>Diet</b></h1>
        <div class="veil"></div>
        <form action="{{route('dietary.diet')}}" class="fullSize">
            <button type="submit" class="fullSize"></button>
        </form>
        <p class="ct-txt position-absolute top-50 start-50 translate-middle">
            <b>Diet</b> program focuses on <b>reducing body fat while avoiding 
            muscle hypertrophy (growth).</b> The primary goal is to <b>achieve a leaner
            physique</b> through a calorie-restricted diet, emphasizing <b>fat loss.</b>
            Exercise routines may include <b>cardio and light resistance training</b> 
            to aid fat reduction, but <b>not intense enough to significantly increase 
            muscle size.</b>
        </p>
    </div>

    <div class="box" type="button">
        <img src="{{asset('dietary-img/maintenance.jpg')}}" alt="">
        <h1 class="img-txt position-absolute top-50 start-50 translate-middle"><b>Maintenance</b></h1>
        <div class="veil"></div>
        <form action="{{route('dietary.maintenance')}}" class="fullSize">
            <button type="submit" class="fullSize"></button>
        </form>
        <p class="ct-txt position-absolute top-50 start-50 translate-middle">
            <b>Maintenance program</b> aims to <b>keep the body weight and composition 
            stable</b>. It involves <b>consuming a balanced diet</b> that matches the 
            body's energy expenditure to <b>maintain current weight and muscle mass</b>. 
            <b>Regular physical activity</b> is included to preserve fitness levels and 
            overall health <b>without significant changes in body composition.</b>
        </p>
    </div>

    <div style="height:5em;width:100vw;"></div>
</div>
@endsection



@section('js')

@endsection