<?php 
	use App\Model\Product;
?>
<!-- CART -->
<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
                    <?php foreach($products_in_cart as $pc){ 
						echo $pc->id_product;
						$pcp = Product::find($pc->id_product);
					?>
					<li class="header-cart-item flex-w flex-t m-b-12">
						<a href="{{url('cart-delete/'.$pc->id)}}">
						<div class="header-cart-item-img">							
							<img src="{{url($pcp->img_path)}}" alt="IMG">
						</div>
						</a>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{$pcp->name}}
							</a>

							<span class="header-cart-item-info">
								{{$pc->quantity}} x Rp {{$pcp->price}}
							</span>
						</div>
					</li>
                    <?php } ?>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: Rp {{$total}}
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{url('cart')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>