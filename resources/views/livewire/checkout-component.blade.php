<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>checkout</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<div class="wrap-address-billing">
					<h3 class="box-title">Billing Address</h3>
					<form action="#" method="get" name="frm-billing">
						<p class="row-in-form">
							<label for="fname">first name<span>*</span></label>
							<input id="fname" type="text" name="fname" value="" placeholder="Your name">
						</p>
						<p class="row-in-form">
							<label for="lname">last name<span>*</span></label>
							<input id="lname" type="text" name="lname" value="" placeholder="Your last name">
						</p>
						<p class="row-in-form">
							<label for="email">Email Address:</label>
							<input id="email" type="email" name="email" value="" placeholder="Type your email">
						</p>
						<p class="row-in-form">
							<label for="phone">Phone number<span>*</span></label>
							<input id="phone" type="number" name="phone" value="" placeholder="10 digits format">
						</p>
						<p class="row-in-form">
							<label for="add">Address:</label>
							<input id="add" type="text" name="add" value="" placeholder="Street at apartment number">
						</p>
						<p class="row-in-form">
							<label for="country">Country<span>*</span></label>
							<input id="country" type="text" name="country" value="" placeholder="United States">
						</p>
					
					</form>
				</div>
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">Payment Method</h4>
						
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="visa" type="radio">
								<span>visa</span>
								<span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-cash" value="cash" type="radio">
								<span>cash on delivery</span>
								
							</label>
						</div>
						<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{Cart::total()}}</span></p>
						<a href="thanks" class="btn btn-medium">Place order now</a>
					</div>
					<div class="summary-item shipping-method">
						<h4 class="title-box">Discount Codes</h4>
						<p class="row-in-form">
							<label for="coupon-code">Enter Your Coupon code:</label>
							<input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
						</p>
						<a href="#" class="btn btn-small">Apply</a>
					</div>
				</div>

				

			</div><!--end main content area-->
		</div><!--end container-->

	</main>