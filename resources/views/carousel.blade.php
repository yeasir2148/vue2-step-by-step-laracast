@extends('layouts.master')
@section('carousel')
<div>
	<section class="hero is-primary is-medium">
		<div class="hero-body">
			<div class="container">
					<Carousel cell-align="left" :contain="true" :wrap-around="true" :auto-play="true">
						<div class="carousel-cell" style="width: 400px; height: 400px">
							<img src="/images/img1.jpg" alt="">
						</div>
						<div class="carousel-cell" style="width: 400px; height: 400px">
							<img src="/images/img2.jpg" alt="">
						</div>
						<div class="carousel-cell" style="width: 400px; height: 400px">
							<img src="/images/img4.jpg" alt="">
						</div>
						<div class="carousel-cell" style="width: 400px; height: 400px">
							<img src="/images/img3.jpg" alt="">
						</div>
					</Carousel>
			</div>
		</div>
	</section>
</div>
@endsection
