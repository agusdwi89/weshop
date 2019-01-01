<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Manage Video</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Video Section</h4>
                        <br>

                        <?=form_open_multipart('',array("class"=>"form-horizontal"))?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Title 1</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="first title" class="form-control" name="title1" value="<?=$items->title1;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Title 2</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="second title" class="form-control" name="title2" value="<?=$items->title2;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Title 3</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="third title" class="form-control" name="title3" value="<?=$items->title3;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Link Playstore Android</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="third title" class="form-control" name="link_android" value="<?=$items->link_android;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Link Appstore Apple</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="third title" class="form-control" name="link_apple" value="<?=$items->link_apple;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Description</label>
                                        <div class="col-md-9">
                                            <textarea placeholder="Description text" class="form-control" rows="5" name="description"><?=$items->description;?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">image</label>
                                        <div class="col-md-12">
                                            <?if ($items->image != ""): ?>
                                            <a target="_blank" href="<?=base_url()?>assets/section/<?=$items->image;?>">
                                                <img class="image-section-header-placeholder" src="<?=base_url()?>assets/section/<?=$items->image;?>">
                                            </a>
                                            <span>change image : </span>
                                            <?endif;?>
                                            <input type="file" class="default" name="userfile[]">
                                            <br>
                                            <p class="text-muted m-b-25">* Image size 235 x 270 px , JPG & PNG allowed.</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Background</label>
                                        <div class="col-md-12">
                                            <?if ($items->image != ""): ?>
                                            <a target="_blank" href="<?=base_url()?>assets/section/<?=$items->image_bg;?>">
                                                <img class="image-section-header-placeholder" src="<?=base_url()?>assets/section/<?=$items->image_bg;?>">
                                            </a>
                                            <span>change image : </span>
                                            <?endif;?>
                                            <input type="file" class="default" name="userfile[]">
                                            <br>
                                            <p class="text-muted m-b-25">* Image size 1920 x 400 px , JPG & PNG allowed.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
                            <button id="btn-backto-section" type="submit" class="btn btn-secondary waves-effect waves-light m-t-20">Back to Section</button>
                        <?=form_close()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>