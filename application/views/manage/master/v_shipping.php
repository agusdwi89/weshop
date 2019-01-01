<style type="text/css">
	#datatable_wrapper{opacity: 0}
	#datatable{opacity: 0}
</style>
<script type="text/javascript">
	$(function(){
		$('#datatable').dataTable({
			"initComplete": function(settings, json) {
				$("#loader").remove();
				$("#datatable_wrapper").css('opacity', '1');
				$("#datatable").css('opacity', '1');
			}
		});
	})
</script>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">Manage Shipping</h4>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body table-responsive">
						<h4 class="m-t-0 header-title">
							<b>Shipping Location & Price</b>
							<a id="btn-save-order" href="<?=base_url('manage/master/shipping_import')?>" class="badge badge-info">import data</a>
						</h4>
						<br>
						<p><i>*set to zero (0) if you want to disable shipping method</i></p>
						<div id='loader'><center>Loading data . . . <br></center></div>

						<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
							<thead>
								<tr>
									<th>No</th>
									<th>Province</th>
									<th>City</th>
									<th>jne</th>
									<th>jnt</th>
									<th>ninja</th>
									<th>wahana</th>
									<th>pos</th>
								</tr>
							</thead>
							<tbody>
								<?$i=0;foreach ($ship->result() as $v): $i++;?>
									<tr>
										<td><?=$i;?></td>
										<td><?=$map_province[$map_city[$v->id_city]['province']]?></td>
										<td><?=$map_city[$v->id_city]['city']?></td>
										<td><?=$v->jne;?></td>
										<td><?=$v->jnt;?></td>
										<td><?=$v->ninja;?></td>
										<td><?=$v->wahana;?></td>
										<td><?=$v->pos;?></td>
									</tr>
								<?endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>