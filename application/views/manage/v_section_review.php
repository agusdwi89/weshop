<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Manage Review</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Review Section</h4>
                        <br>
                        <?=form_open('',array("class"=>"form-horizontal"))?>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">Title</label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="title first" class="form-control" name="title" value="<?=$master->title;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-9">
                                    <textarea placeholder="Description text" class="form-control" rows="5" name="description"><?=$master->description;?></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
                            <button id="btn-backto-section" type="submit" class="btn btn-secondary waves-effect waves-light m-t-20">Back to Section</button>
                        <?=form_close()?>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Add Review Item</h4>
                        <br>
                        <?=form_open_multipart('manage/section_review/add_item',array("class"=>"form-horizontal"))?>
                            <input type="hidden" name="srev_id" value="<?=$id;?>"> 
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Name</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="Name text" class="form-control" name="name" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Position</label>
                                <div class="col-md-10">
                                    <input type="text" placeholder="Position text" class="form-control" name="position" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Review</label>
                                <div class="col-md-10">
                                    <textarea style="min-height:40px;height:40px" placeholder="Review text" class="form-control" rows="3" name="review"></textarea> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2">Photo</label>
                                <div class="col-md-10">
                                    <input type="file" class="default" name="userfile[]">
                                    <p class="text-muted m-b-25">* Image size up to 45 x 45 PX , JPG & PNG allowed.</p>
                                </div>
                            </div>
                            <button id="btn-submit-tech" type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
                            <button id="btn-reload" type="submit" class="btn btn-secondary waves-effect waves-light m-t-20">Clear</button>
                        <?=form_close()?>
                        <br>
                        <table class="table table-space m-0">   
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name / Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?foreach ($items->result() as $k):?>
                                    <tr>
                                        <td>
                                            <a href="<?=base_url()?>assets/section/<?=$k->image;?>" target="_blank">
                                                <img width=45 src="<?=base_url()?>assets/section/<?=$k->image;?>">
                                            </a>
                                        </td>
                                        <td>
                                            <b><?=$k->name;?> | <?=$k->position;?></b>
                                            <p><?=$k->review;?></p>
                                        </td>
                                        <td>
                                            <center>
                                                <a style="opacity:100 !important;margin-right:12px" title="delete" href="<?=base_url()?>manage/section_review/delete_item/<?=$k->id;?>/<?=$id;?>" class="fa fa-times-circle delete-list dz-tip confirm-delete"></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Add Review Customer</h4>
                        <br>
                        <?=form_open_multipart('manage/section_review/add_customer',array("class"=>"form-horizontal"))?>
                            <input type="hidden" name="srev_id" value="<?=$id;?>"> 
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Name</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="Name text" class="form-control" name="name" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Link</label>
                                <div class="col-md-10">
                                    <input type="text" placeholder="Position text" class="form-control" name="link" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2">Logo</label>
                                <div class="col-md-10">
                                    <input type="file" class="default" name="userfile[]">
                                    <p class="text-muted m-b-25">* Image size up to 200 x 45 PX , JPG & PNG allowed.</p>
                                </div>
                            </div>
                            <button id="btn-submit-tech" type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
                            <button id="btn-reload" type="submit" class="btn btn-secondary waves-effect waves-light m-t-20">Clear</button>
                        <?=form_close()?>
                        <br>
                        <table class="table table-space m-0">   
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Name / Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?foreach ($items2->result() as $k):?>
                                    <tr>
                                        <td>
                                            <a href="<?=base_url()?>assets/section/<?=$k->image;?>" target="_blank">
                                                <img width=45 src="<?=base_url()?>assets/section/<?=$k->image;?>">
                                            </a>
                                        </td>
                                        <td>
                                            <b><?=$k->name;?></b>
                                            <p>
                                                <a href="<?=$k->link;?>" target="_blank">
                                                    <?=$k->link;?>
                                                </a>
                                            </p>
                                        </td>
                                        <td>
                                            <center>
                                                <a style="opacity:100 !important;margin-right:12px" title="delete" href="<?=base_url()?>manage/section_review/delete_customer/<?=$k->id;?>/<?=$id;?>" class="fa fa-times-circle delete-list dz-tip confirm-delete"></a>
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