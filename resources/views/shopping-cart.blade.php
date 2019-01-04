<?php 
	use App\Model\Product;
?>
@extends('index')

@section('content')
	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>

								<?php foreach($products_in_cart as $pc) {
									$pcProduct = Product::find($pc->id_product);
									?>
								<tr class="table_row">
									<td class="column-1">
										<a href="{{url('cart-delete/'.$pc->id)}}">
										<div class="how-itemcart1">
											<img src="{{url($pcProduct->img_path)}}" alt="IMG">
										</div>
										</a>
									</td>
									<td class="column-2">{{$pcProduct->name}}</td>
									<td class="column-3">Rp {{$pcProduct->price}}</td>
									<td class="column-4">{{$pc->quantity}}</td>
									<td class="column-5">Rp <?php 
										$subTotal = $pcProduct->price*$pc->quantity;
										echo $subTotal;
									 ?></td>
								</tr>
								<?php } ?>
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Total:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									Rp {{$total}}
								</span>
							</div>
						</div>
						<button formaction="{{url('cart-checkout')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection