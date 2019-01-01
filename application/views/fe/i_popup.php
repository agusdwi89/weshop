<script type="text/javascript">
	var city = [];
	var citySelected;
	var kurir = [];
	$(function(){

		$.getJSON( "<?=base_url()?>djson/delivery", function( data ) {
			console.log(data);
			var items = "";
			$.each( data['mst_province'], function( key, val ) {
				items += '<option value='+key+'>'+val+'</option>'
			});
			$("#order-province").append(items);

			city = data['mst_city'];
			kurir = data['mst_kurir'];
		});

		$( "#order-province" ).change(function () {
			citySelected = city[$("#order-province").val()];
			var items="<option value='0'>Choose City</option>";
			if (citySelected!=0) {
				$.each( citySelected, function( key, val ) {
					items += '<option value='+key+'>'+val+'</option>'
				});
			}
			$("#order-city").html(items);
		});

		$( "#order-city" ).change(function () {
			kurirSelected = kurir[$(this).val()];
			var items="<option value='0'>Choose Shpping vendor</option>";
			$.each(kurirSelected, function( key, val ) {
				items += '<option data-kurir="'+key+'" data-kurir-price="'+val+'" value='+val+'>'+key.toUpperCase()+' : Rp. '+formatNumber(val)+'</option>'
			});
			$("#order-courier").html(items);

		})
		
		$('body').on('click','.buy-button',function (e) {
			e.preventDefault();
			$("#content-payment").hide();
			$("#content-confirmation").hide();
			$("#order-form").show();
			$("#order-form").trigger('reset');
			$(".order-field-error").removeClass('order-field-error');
			$(".select_payment.active").removeClass("active");
			$("#pay-sum-bank").hide();
			$("#pay-sum").hide();
			$("#pay-coupon-form").hide();
			$("#pay-coupon-have").show();
			payValue = "";

			$("#pop-image").attr('src',$(this).data('image'));
			$("#pop-title").html($(this).data('title'));
			$("#pop-description").html($(this).data('description'));
			$("#pop-price").html(setPrice($(this)));
			$("#pop-description2").html($(this).data('description2'));
		});
	})

	function setOrder(){
		// $.ajax({
		// 	type: 'POST',
		// 	url: '<?=base_url("home/delivery")?>',
		// 	data: $("#order-form").serialize(),
		// 	success: function(data) {
		// 		$("#order-form").fadeOut('fast', function(){
		// 			$(this).before(data);
		// 		});
		// 	}
		// });
		$("#order-form").fadeOut('fast', function(){
			$(".select_payment").removeClass('order-field-error');
			$("#content-payment").fadeIn();
		});
	}

	function setPrice(ths){
		var prc = formatNumber(ths.data('price'));
		var dsc = formatNumber(ths.data('price_dsc'));
		if (dsc > 0 ) {
			return '<span class="sale">Rp '+prc+'</span><span class="sale-price">Rp '+dsc+'</span>';
		}else{
			return '<span>Rp.'+prc+'</span>';
		}
	}
</script>

<style type="text/css">
#pop-price .sale:before {
	content: '';
	position: absolute;
	width: 100%;
	height: 2px;
	top: 18px;
	left: 0;
	background-color: #f9c80e;
}
#pop-price .sale-price {
	color: #f9c80e;
	margin-left: 10px;
}
</style>

<section id="order" class="order mfp-hide">

	<div class="order-form-bg"></div>

	<!-- Start Form Header -->
	<div class="order-form-header clearfix">
		<div class="order-img">
			<img id="pop-image" src="" alt="product">
		</div>
		<div class="order-desc">
			<h2 id="pop-title"></h2>
			<p id="pop-description" class="version">Basic Green Version</p>
			<div id="pop-price"></div>
			<p id="pop-description2">Corporis suscipit dolorem, nisi, totam rem aperiam eaque ipsa.</p>
		</div>
	</div>
	<!-- End Form Header -->

	<div class="order-form-content">

		<!-- Start Order Form -->
		<?=form_open('/',array("class"=>"order-form","id"=>"order-form"))?>

			<input type="hidden" id="hd-prd_id" name="prd_id">
			<input type="hidden" id="hd-prd_id" name="prd_id">
			<input type="hidden" id="hd-prd_title" name="prd_title">
			<input type="hidden" id="hd-prd_description" name="prd_description">
			<input type="hidden" id="hd-prd_description2" name="prd_description2">
			<input type="hidden" id="hd-prd_image" name="prd_image">
			<input type="hidden" id="hd-prd_price_tag" name="prd_price_tag">
			<input type="hidden" id="hd-prd_price" name="prd_price">
			<input type="hidden" id="hd-prd_shipment" name="prd_shipment">
			<input type="hidden" id="hd-prd_coupon" name="prd_coupon">
			<input type="hidden" id="hd-prd_total" name="prd_total">
			<input type="hidden" id="hd-payment" name="payment" value="">

			<div class="col-md-12"><h3>Shipping Addres</h3></div>
			<div class="col-md-6">
				<input id="order-f-name" class="order-f-name" type="text" name="cust_f_name" placeholder="First Name">
			</div>
			<div class="col-md-6">
				<input id="order-l-name" class="order-l-name" type="text" name="cust_l_name" placeholder="Last Name">
			</div>
			<div class="col-md-12">
				<input id="order-email" class="order-email" type="text" name="cust_email" placeholder="Email">
			</div>

			<div class="col-md-12">
				<input id="order-address" class="order-address" type="text" name="cust_address" placeholder="Address">
			</div>
			<div class="col-md-6">
				<select id="order-province" class="order-country" name="cust_province">
					<option value="0">Choose Province</option>
				</select>
			</div>

			<div class="col-md-6">
				<select id="order-city" class="order-country" name="cust_city">
					<option value="0">Choose City</option>
				</select>
			</div>
			<div class="col-md-6">
				<input id="order-zip" class="order-zip" type="text" name="cust_zip" placeholder="Zip Code">
			</div>
			<div class="col-md-6">
				<input id="order-phone" class="order-phone" type="text" name="cust_phone" placeholder="Phone Number">
			</div>
			<div class="col-md-12"><h3>Shipping & Payment Method</h3></div>

			<div class="col-md-6">
				<select id="order-courier" class="order-country" name="cust_shipping">
					<option value="0">Choose Shpping vendor</option>
				</select>
			</div>
			<div class="col-md-12 order-button-block">
				<button id="order-button" type="submit" class="button order-button" title="Order">Order Now</button>
			</div>

		</form>
		<!-- End Order Form -->
		<!-- as -->
		<?=$this->load->view('fe/i_popup_payment');?>
		<?=$this->load->view('fe/i_confirm');?>

	</div> <!-- .order-form-content -->

</section>
<!-- End Popup -->