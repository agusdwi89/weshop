<script type="text/javascript" src="<?=base_url()?>assets/plugins/nestable/jquery.nestable.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/nestable/jquery.nestable.css">

<script type="text/javascript">
	var con ; 
	$(function(){
		$('#nestable_list_3').nestable({maxDepth : 1});	

		$('body').on('click','.delete-list',function (e) {
			return confirm('are you sure to delete this section ?');
		});

		$('body').on('click','#btn-save-order',function (e) {
			e.preventDefault();
			var v = $('#nestable_list_3').nestable('serialise');
			v = JSON.stringify(v);
			$("#ord").val(v);
			$.post("<?=base_url()?>manage/section/update_order", $("#frm form").serialize(),function(data){
				if (data == 'success') {
					location.reload();
				};
			});
		});	
	})
</script>

<div class="hide" id="frm">
	<?=form_open()?>
		<input id="ord" value="" name="order">
	<?=form_close()?>
</div>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">Starter Page</h4>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<h4 class="m-t-0 header-title"><b>Add Section Home Page</b></h4>

								<?=form_open('')?>
									<div class="form-group">
										<br>
										<label for="exampleInputEmail1">Email address</label>
										<select name="type_sec_id" class="form-control" required="required">
											<option value="">== choose section ==</option>
											<?foreach ($master_section_type->result() as $v): ?>
												<option value="<?=$v->id;?>"><?=$v->name;?></option>
											<?endforeach;?>
										</select>
									</div>	
									<button type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
								<?=form_close();?>

							</div>
							<div class="col-md-6">
								<h4 class="m-t-0 header-title">
									<b>List Section</b>
									<a id="btn-save-order" href="" class="badge badge-info">save order</a>
								</h4>
								<br>
								<div class="custom-dd-empty dd" id="nestable_list_3">
									<ol class="dd-list">
										<?foreach ($section_item->result() as $d): ?>
											<li class="dd-item dd3-item" data-id="<?=$d->id;?>">
												<div class="dd-handle dd3-handle"></div>
												<div class="dd3-content">
													<?=$d->ts_name;?>
													<a title="delete" href="<?=base_url()?>manage/section/delete/<?=$d->id;?>" class="fa fa-times-circle delete-list dz-tip"></a>
													<a title="edit section" href="<?=base_url()?>manage/section/edit/<?=$d->id;?>" class="fa fa-mail-forward edit-list dz-tip"></a>
												</div>
											</li>
										<?endforeach;?>
									</ol>
								</div>
							</div><!-- end col -->
							<div class="clearfix"></div>
						</div> <!-- end row -->
					</div>
				</div>
			</div> <!-- end col -->
		</div>   
	</div>
</div>