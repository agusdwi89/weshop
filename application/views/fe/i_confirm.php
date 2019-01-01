<div id="content-confirmation">
	<style type="text/css">
		#order-step2 h4{
			margin:0.5rem 0;
		}
		#order-step2 table tr td{
			padding: 5px;
		}
		#order-step2 p{
			text-align: left;
			margin-bottom: 0.25rem;
		}
	</style>
	<script type="text/javascript">
		$(function(){
			$('body').on('click','#order-button-final',function (e) {
				e.preventDefault();
				$("#order-step2").fadeOut(function(){
					$(this).before("<br><br><p>Thank you for your order!<br> please check email for detail instruction</p><span class='order-send'><svg class='check' width='44px' height='22px' viewBox='0 0 59 42' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:sketch='http://www.bohemiancoding.com/sketch/ns'><g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' sketch:type='MSPage'><path d='M4.5,20.5 L21.0302753,37.0302753 L54.5,4.5' id='line' stroke='#fff' stroke-width='4' stroke-linecap='round' stroke-linejoin='round' sketch:type='MSShapeGroup'></path></g></svg></span>");
				})
			});
		})
	</script>
	<div id="order-step2">
		<br>
		<div class="col-md-12"><h4>Order Summary</h4></div>
		<div class="col-md-12">
			<table class="table table-striped">
				<tr>
					<td>Jam Tangan bagus</td>
					<td style="text-align:right">Rp 2.000.000</td>
				</tr>
				<tr>
					<td>Shipping delivery</td>
					<td style="text-align:right">Rp 40.000</td>
				</tr>
				<tr>
					<td>Total</td>
					<td style="text-align:right">Rp 2.400.000</td>
				</tr>
			</table>
		</div>
		<div class="col-md-12"><h4>Deliver To</h4></div>
		<div class="col-md-12">
			<b>Agus, Prayogo</b>
			<p>Jalan kjlhd kalsjdsad asjdasd,</p>
			<p>Kodepos : 29832, Prov. Sulut, Kab. alsjdasd</p>
			<P>Email : 23948324, HP : 238493204</P>
			<P>Shipping Method : JNE</P>
			<P>Payment Method : Transfer Bank</P>
		</div>
		<div class="col-md-12 order-button-block">
			<button id="order-button-final" type="submit" class="button order-button" title="Order">Place Order</button>
		</div>
	</div>
</div>