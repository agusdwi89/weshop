<script type="text/javascript">
    $(function(){
        $('body').on('click','.icon-choose-technology i',function (e) {
            e.preventDefault();
            econ = $(this);
            $(this).parent().find('.active').removeClass('active');
            $(this).addClass('active');
            $("#input-hidden-icon").val($(this).data('icn'));
        });

        $('body').on('click','#btn-submit-tech',function (e) {
            e.preventDefault();
            var frm = $(this).closest('form');
            var url = frm.attr('action');
            $.post(url, frm.serialize(),function(e){
                if(e == 'success'){
                    location.reload();
                }
            });
        });
    })
</script>

<?
$a = array(
    'icon-settings' => 'fa fa-cog',
    'icon-diamond' => 'fa fa-diamond',
    'icon-tag' => 'fa fa-tag',
    'icon-shield' => 'fa fa-shield',
    'icon-picture' => 'fa fa-image',
    'icon-earphones' => 'fa fa-headphones',
    'icon-bulb' => 'fa  fa-lightbulb-o',
    'icon-rocket' => 'fa fa-rocket' 
);
?>

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Manage Features</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Features Section</h4>
                        <br>
                        <?=form_open_multipart('',array("class"=>"form-horizontal"))?>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="title first" class="form-control" name="title" value="<?=$master->title;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Description</label>
                                <div class="col-md-10">
                                    <textarea placeholder="Description text" class="form-control" rows="5" name="description"><?=$master->description;?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Image Position</label>
                                <div class="col-md-5">
                                    <select name="image_position" class="form-control">
                                        <option <?= ($master->image_position == 'left' ? 'selected="selected"' : '')?> value="left">Left Image</option>
                                        <option <?= ($master->image_position == 'mid' ? 'selected="selected"' : '')?> value="mid">Middle Image</option>
                                        <option <?= ($master->image_position == 'right' ? 'selected="selected"' : '')?> value="right">Right Image</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2">image</label>
                                <div class="col-md-10">
                                    <?if ($master->image != ""): ?>
                                        <a target="_blank" href="<?=base_url()?>assets/section/<?=$master->image;?>">
                                            <img class="image-section-header-placeholder" src="<?=base_url()?>assets/section/<?=$master->image;?>">
                                        </a>
                                        <span>change image : </span>
                                    <?endif;?>
                                    <input type="file" class="default" name="userfile">
                                    <br>
                                    <p class="text-muted m-b-25">* Image size up to 256 x 450 PX , JPG & PNG allowed.</p>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
                            <button id="btn-backto-section" type="submit" class="btn btn-secondary waves-effect waves-light m-t-20">Back to Section</button>
                        <?=form_close()?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Add Features Items</h4>
                        <br>
                        <?=form_open('manage/section_features/add_item',array("class"=>"form-horizontal"))?>
                            <input type="hidden" name="sf_id" value="<?=$id;?>"> 
                            <input id="input-hidden-icon" type="hidden" name="icon" value=""> 
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="title text" class="form-control" name="title" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Description</label>
                                <div class="col-md-10">
                                    <textarea style="min-height:50px;height:50px" placeholder="Description text" class="form-control" rows="1" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Icon</label>
                                <div class="col-md-10">
                                    <div class="icon-choose-technology">
                                        <i data-icn="icon-settings" class="fa fa-cog"></i>
                                        <i data-icn="icon-diamond" class="fa fa-diamond"></i>
                                        <i data-icn="icon-tag" class="fa fa-tag"></i>
                                        <i data-icn="icon-shield" class="fa fa-shield"></i><br>
                                        <i data-icn="icon-picture" class="fa fa-image"></i>
                                        <i data-icn="icon-earphones" class="fa fa-headphones"></i>
                                        <i data-icn="icon-bulb" class="fa  fa-lightbulb-o"></i>
                                        <i data-icn="icon-rocket" class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </div>
                            <button id="btn-submit-tech" type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
                            <button id="btn-reload" type="submit" class="btn btn-secondary waves-effect waves-light m-t-20">Clear</button>
                        <?=form_close()?>
                        <br>
                        <table class="table table-space m-0">   
                            <thead>
                                <tr>
                                    <th>Ico</th>
                                    <th>Title / Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?foreach ($items->result() as $k):?>
                                    <tr>
                                        <td>
                                            <i class="fa <?=$a[$k->icon];?>"></i>
                                        </td>
                                        <td>
                                            <b><?=$k->title;?></b>
                                            <p><?=$k->description;?></p>
                                        </td>
                                        <td>
                                            <center>
                                                <a style="opacity:100 !important;margin-right:12px" title="delete" href="<?=base_url()?>manage/section_features/delete_item/<?=$k->id;?>/<?=$id;?>" class="fa fa-times-circle delete-list dz-tip confirm-delete"></a>
                                            </center>
                                        </td>
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