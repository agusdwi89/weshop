<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Manage Product</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Product Section</h4>
                        <br>
                        <?=form_open('',array("class"=>"form-horizontal"))?>
                            <div class="form-group row">
                                <label class="col-md-12 control-label">Title</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="title first" class="form-control" name="title" value="<?=$master->title;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12 control-label">Description</label>
                                <div class="col-md-12">
                                    <textarea placeholder="Description text" class="form-control" rows="5" name="description"><?=$master->description;?></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
                            <button id="btn-backto-section" type="submit" class="btn btn-secondary waves-effect waves-light m-t-20">Back to Section</button>
                        <?=form_close()?>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Add Product Items</h4>
                        <br>
                        <?=form_open_multipart('manage/section_product/add_item',array("class"=>"form-horizontal"))?>
                            <input type="hidden" name="prd_id" value="<?=$id;?>"> 
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="title text" class="form-control" name="title" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Description</label>
                                <div class="col-md-10">
                                    <textarea style="min-height:30px;height:30px" placeholder="Description text" class="form-control" rows="1" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Description Optional</label>
                                <div class="col-md-10">
                                    <textarea style="min-height:30px;height:30px" placeholder="Description text" class="form-control" rows="1" name="description2"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2">image product</label>
                                <div class="col-md-10">
                                    <input type="file" class="default" name="userfile[]">
                                    <p class="text-muted m-b-25">* Image size up to 196 x 225 PX , JPG & PNG allowed.</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2">image background</label>
                                <div class="col-md-10">
                                    <input type="file" class="default" name="userfile[]">
                                    <p class="text-muted m-b-25">* Image size up to 768 x 500 PX , JPG & PNG allowed.</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Price / Discount</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="Price" class="form-control" name="price" value="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" placeholder="Discounted Price" class="form-control" name="price_dsc" value="">
                                </div>
                            </div>
                            <button id="btn-submit-tech" type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
                            <button id="btn-reload" type="submit" class="btn btn-secondary waves-effect waves-light m-t-20">Clear</button>
                        <?=form_close()?>
                        <br>
                        <table class="table table-space m-0">   
                            <thead>
                                <tr>
                                    <th>Image Product</th>
                                    <th>Image Background</th>
                                    <th>Title / Description</th>
                                    <th>Price / Disc</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?foreach ($items->result() as $k):?>
                                    <tr>
                                        <td>
                                            <a href="<?=base_url()?>assets/section/<?=$k->image;?>" target="_blank">
                                                <img width=100 src="<?=base_url()?>assets/section/<?=$k->image;?>">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?=base_url()?>assets/section/<?=$k->image_bg?>" target="_blank">
                                                <img width=100 src="<?=base_url()?>assets/section/<?=$k->image_bg;?>">
                                            </a> 
                                        </td>
                                        <td>
                                            <b><?=$k->title;?></b>
                                            <p>- <?=$k->description;?></p>
                                            <p>- <?=$k->description2;?></p>
                                        </td>
                                        <td>
                                            <?if ($k->price_dsc > 0): ?>
                                                <span class="sale">
                                                    <strike>Rp.<?=$k->price;?></strike>
                                                </span>
                                                <span class="sale-price">Rp.<?=$k->price_dsc;?></span>
                                            <?else:?>
                                                <span>Rp.<?=$k->price;?></span>
                                            <?endif;?>
                                        </td>
                                        <td>
                                            <center>
                                                <a style="opacity:100 !important;margin-right:12px" title="delete" href="<?=base_url()?>manage/section_product/delete_item/<?=$k->id;?>/<?=$id;?>" class="fa fa-times-circle delete-list dz-tip confirm-delete"></a>
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