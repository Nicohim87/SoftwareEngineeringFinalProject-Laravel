@extends('layout.user')
@section('title', 'Home')


@section('css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<style>
	@font-face {
	font-family: 'Satoshi';
	font-weight: 300;
	font-style: normal;
	src: url("{{asset('fonts/Satoshi-Light.otf')}}") format('opentype'); 
}

@font-face {
	font-family: 'Satoshi';
	font-weight: 300;
	font-style: italic;
	src: url("{{asset('fonts/Satoshi-LightItalic.otf')}}") format('opentype');
}

@font-face {
	font-family: 'Satoshi';
	font-weight: 400;
	font-style: normal;
	src: url("{{asset('fonts/Satoshi-Regular.otf')}}") format('opentype');
}

@font-face {
	font-family: 'Satoshi';
	font-weight: 400;
	font-style: italic;
	src: url("{{asset('fonts/Satoshi-Italic.otf')}}") format('opentype');
}

@font-face {
	font-family: 'Satoshi';
	font-weight: 500;
	font-style: normal;
	src: url("{{asset('fonts/Satoshi-Medium.otf')}}") format('opentype');
}

@font-face {
	font-family: 'Satoshi';
	font-weight: 500;
	font-style: italic;
	src: url("{{asset('fonts/Satoshi-MediumItalic.otf')}}") format('opentype');
}

@font-face {
	font-family: 'Satoshi';
	font-weight: 600;
	font-style: normal;
	src: url("{{asset('fonts/Satoshi-Bold.otf')}}") format('opentype');
}

@font-face {
	font-family: 'Satoshi';
	font-weight: 600;
	font-style: italic;
	src: url("{{asset('fonts/Satoshi-BoldItalic.otf')}}") format('opentype');
}

@font-face {
	font-family: 'Satoshi';
	font-weight: 700;
	font-style: normal;
	src: url("{{asset('fonts/Satoshi-Black.otf')}}") format('opentype');
}

@font-face {
	font-family: 'Satoshi';
	font-weight: 700;
	font-style: italic;
	src: url("{{asset('fonts/Satoshi-BlackItalic.otf')}}") format('opentype');
}
</style>
@endsection



@section('content')
<main class="row">
		<section class="col-1"> </section>
		<section class="col-2">
			<div class="hero">
				<img src="{{asset('hero.png')}}" alt="Hero">
			</div>
		</section>
		<section class="col-3">
			<div class="about">
				<h2 class="about-title">What is FitTech</h2>
				<p class="about-description">It's your friendly website that helps you reach your goal. In FitTech you will be able to choose between cutting or diet program based on your BMI. And also we show you gym locations and informations that will help you reach your goal.</p>
				<div class="program">
					<h3 class="program-title">Our Features</h3>
					<div class="program-wrap">
						<div class="program-item program-item-orange">
							<div class="program-icon">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
								</svg>
							</div>
							<h4 class="program-subtitle">Program</h4>
						</div>
						<div class="program-item program-item-red">
							<div class="program-icon">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
								</svg>
							</div>
							<h4 class="program-subtitle">Menu</h4>
						</div>
						<div class="program-item program-item-green">
							<div class="program-icon">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
								</svg>
							</div>
							<h4 class="program-subtitle">Member</h4>
						</div>
						<div class="program-item program-item-green">
							<div class="program-icon">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
								</svg>
							</div>
							<h4 class="program-subtitle">BMI</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection



@section('js')

@endsection