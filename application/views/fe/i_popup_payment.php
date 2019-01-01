<div id="content-payment">
	<style type="text/css">
		#pay-sum, #pay-sum-bank{padding: 15px;padding-bottom: 5px;}
		#pay-sum .card, #pay-sum-bank .card{
			border-radius: 5px;
			border-left: 5px #ffc800 solid;
		}
		#pay-sum .card .card-body,#pay-sum-bank .card .card-body{padding: 10px 15px 15px;}
		.select_payment div{
			padding: 0px !important;
		}
		#pay-sum .card-text,#pay-sum-bank .card-text{margin-bottom: 0px !important}
		#pay-sum-bank select{
			width: 75%;
			margin: 10px auto 15px;
			display: block;
		}
		.paysum{display: none;}
		#pay-coupon-form{display: none;padding: 0px 75px}
	</style>
	<script type="text/javascript">
		$(function(){
			payValue = "";
			$('body').on('click','.select_payment',function (e) {
				e.preventDefault();
				payValue = $(this).data('value');
				$(".select_payment.active").removeClass('active');
				$(this).addClass('active');
				$(".select_payment").removeClass('order-field-error');
				$("#hd-payment").val(payValue);
				$(this).addClass('active');
				$(".paysum").hide();
				if (payValue == 'transfer') {
					$("#pay-sum-bank").fadeIn();
				}else if(payValue == 'cod'){
					$("#pay-sum").find('p').text('Cash on Delivery allow you to pay on the spot, when item deliver for you');
					$("#pay-sum").fadeIn();
				}else if(payValue == 'kredivo'){
					$("#pay-sum").find('p').text('You can complete your payment via kredivo after you place order, detail info sent by email');
					$("#pay-sum").fadeIn();
				}else{
					$("#pay-sum").find('p').text('You can complete your payment credit card / alfamart / virtual account via doku after you place order, detail info sent by email');
					$("#pay-sum").fadeIn();
				}
			});

			$('body').on('click','#pay-coupon-have',function (e) {
				e.preventDefault();
				$(this).fadeOut(function(){
					$("#pay-coupon-form").fadeIn();
				});
			});
			$('body').on('click','#order-button-payment',function (e) {
				e.preventDefault();
				if (payValue == "") {
					$(".select_payment").addClass('order-field-error');
				}else{
					$("#content-payment").fadeOut(function(){
						$("#content-confirmation").fadeIn();
					});
					// $.get("<?=base_url()?>home/confirmation", function(data) {
					// 	$("#payment-step").fadeOut(function(){
					// 		$(this).before(data);
					// 	})
					// });
				}
			});
		})
	</script>
	<div id="payment-step">
		<div class="col-md-12"><h3>Payment Method</h3></div>
		<div class="col-md-6">
			<b></b>
		</div>
		<div class="clearfix"></div>
		<div>
			<div class="col-md-6">
				<div class="select_payment" data-value="cod">
					Cash on Delivery
				</div>
			</div>
			<div class="col-md-6">
				<div class="select_payment" data-value="transfer">
					Manual Transfer
				</div>
			</div>
			<div class="col-md-6">
				<div class="select_payment doku" data-value="doku-virtual">
					<div class="col-md-3"><img src="https://doku.promo/wp-content/uploads/2018/02/LOGO-DOKU-2017-e1518166626653.png" style="width:!00px"></div>	
					<div class="col-md-9 ">Virtual Account</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="select_payment doku" data-value="doku-cc">
					<div class="col-md-3"><img src="https://doku.promo/wp-content/uploads/2018/02/LOGO-DOKU-2017-e1518166626653.png" style="width:!00px"></div>	
					<div class="col-md-9 ">Credit Card</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="select_payment doku" data-value="doku-alfa">
					<div class="col-md-3"><img src="https://doku.promo/wp-content/uploads/2018/02/LOGO-DOKU-2017-e1518166626653.png" style="width:!00px"></div>	
					<div class="col-md-9 ">Alfamart</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="select_payment doku" data-value="kredivo">
					<div class="col-md-3"><img src="https://yt3.ggpht.com/a-/AN66SAytWq1KxaSUEAB120OqP3WmjYXfN5vu8RifCQ=s900-mo-c-c0xffffffff-rj-k-no" style="width:!00px"></div>	
					<div class="col-md-9 ">Kredivo</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
		</div>
		<div class="clearfix"></div>
		<div id="pay-sum" class="paysum">
			<div class="card text-white bg-warning">
				<div class="card-body">
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div id="pay-sum-bank" class="paysum">
			<div class="card text-white bg-warning">
				<div class="card-body">
					<p class="card-text">Please select bank below</p>
					<select id="order-city" class="order-country" name="order-country">
						<option value="0">BNI : 328743284</option>
						<option value="0">BRI : 09324324</option>
						<option value="0">Mandri : 32847</option>
					</select>
				</div>
			</div>
		</div><br>
		<div id="pay-coupon">
			<center><b><a id="pay-coupon-have" href="#">do you have coupon ?</a></b></center>
			<div id="pay-coupon-form" class="newsletter-field-group">
				<input id="newsletter-email" type="text" name="newsletter-email" placeholder="Enter your email edit" style="width:65%;border-radius:20px;font-size:13px;margin-left: 35px;">
				<button id="newsletter-submit" type="submit" class="button submit-button" style="margin-left: -20px;height: 37px;line-height: 14px;">check</button>
			</div>
		</div>
		<div class="col-md-12 order-button-block">
			<button id="order-button-payment" type="submit" class="button order-button" title="Order">Continue</button>
		</div>
	</div>
</div>