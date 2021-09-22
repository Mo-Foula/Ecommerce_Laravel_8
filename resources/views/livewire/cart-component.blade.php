
		<main id="main" class="main-site">
		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Cart</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
                    @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success</strong> {{Session::get('success_message')}}
                        </div>
                    @endif
                    @if(Cart::count() > 0)
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
                        @foreach(Cart::content() as $item)
                        
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{('assets/images/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
							</div>
							<div class="price-field product--price"><p class="price">${{$item->model->regular_price}}</p></div>
							<div class="quantity">
								<div class="quantity-input">
									<input type="text" name="product-quantity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
									<a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
									<a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
								</div>
							</div>
							<div class="price-field sub-total"><p class="price">${{$item->subtotal}}</p></div>
							<div class="delete">
								<a href="#" wire:click.prevent="deleteFromCart('{{$item->rowId}}')" class="btn btn-delete" title="">
									<span>Delete from your cart</span>
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</div>
						</li>
						@endforeach												
					</ul>
                    @else
                        <p>No item in cart</p>
                    @endif
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info"><span class="title">Subtotal</span><b class="index">${{Cart::subtotal()}}</b></p>
                        <p class="summary-info"><span class="title">Tax</span><b class="index">${{Cart::tax()}}</b></p>
						<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
						<p class="summary-info total-info "><span class="title">Total</span><b class="index">${{Cart::total()}}</b></p>
					</div>
					<div class="checkout-info">
						<label class="checkbox-field">
							<input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
						</label>
						<a class="btn btn-checkout" href="checkout">Check out</a>
						
					</div>
					<div class="update-clear">
						<a class="btn btn-clear" href="#" wire:click.prevent="deleteAll()">Clear Shopping Cart</a>
						
					</div>
				</div>

				

			</div><!--end main content area-->
		</div><!--end container-->

	</main>