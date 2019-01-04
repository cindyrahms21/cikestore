@extends('index')

@section('content')
	<div style="height:70px"></div>	

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="{{url($product->img_path)}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{url($product->img_path)}}" alt="IMG-PRODUCT">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{$product->name}}
						</h4>

						<span class="mtext-106 cl2">
						Rp {{$product->price}}
						</span>
						<br>
						<span class="mtext-106 cl2">
						{{$product->stock}} left
						</span>

						<p class="stext-102 cl3 p-t-23">
						{{$product->description}}
						</p>
						
						<form>
						{{csrf_field()}}
						<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="size">
											<option>Choose an option</option>
											<option value="S">Size S</option>
											<option value="M">Size M</option>
											<option value="L">Size L</option>
											<option value="XL">Size XL</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="color">
											<option>Choose an option</option>
											<option value="Red">Red</option>
											<option value="Blue">Blue</option>
											<option value="White">White</option>
											<option value="Grey">Grey</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="1" min="1" max="{{$product->stock}}">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>
									<button formmethod="post" formaction="{{url('cart-add/'.$product->id)}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 respon6-next">
								Open product in other marketplace
									<a href="{!!$product->tokopedia!!}">
									<button class="flex-c-m stext-101 cl0 size-101 bg2 bor1 hov-btn1 p-lr-15 trans-04">
										<img height="14px" src="{{asset('images/logo/tokopedia_logo.png')}}"/>
									</button>
									</a>
								</div>
								<br>
								<div class="size-204 respon6-next">
									<a href="{!!$product->bukalapak!!}">
									<button class="flex-c-m stext-101 cl0 size-101 bg2 bor1 hov-btn1 p-lr-15 trans-04">
										<img height="14px" src="{{asset('images/logo/bukalapak_logo.png')}}"/>
									</button>
									</a>
								</div>
								<div class="size-204 respon6-next">
									<a href="{!!$product->lazada!!}">
									<button class="flex-c-m stext-101 cl0 size-101 bg2  bor1 hov-btn1 p-lr-15 trans-04">
									<img height="14px" src="{{asset('images/logo/lazada.png')}}"/>
									</button>
									</a>
								</div>
								<div class="size-204 respon6-next">
									<a href="{!!$product->shopee!!}">
									<button class="flex-c-m stext-101 cl0 size-101 bg2 bor1 hov-btn1 p-lr-15 trans-04">
										<img height="14px" src="{{asset('images/logo/shopee.png')}}"/>
									</button>
									</a>
								</div>
							</div>	
						</div>
						</form>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection