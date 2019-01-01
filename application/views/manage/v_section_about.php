<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Manage About Section</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit About Section</h4>
                        <br>
                        <?=form_open_multipart('',array("class"=>"form-horizontal"))?>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="title text" class="form-control" name="title" value="<?=$items->title;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Description</label>
                                <div class="col-md-10">
                                    <textarea placeholder="Description text" class="form-control" rows="5" name="description"><?=$items->description;?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Jargon</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="Jargon text" class="form-control" name="jargon" value="<?=$items->jargon;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Button Text</label>
                                <div class="col-md-3">
                                    <input type="text" name="button_text" class="form-control" value="<?=$items->button_text;?>" placeholder="Button text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Button Link</label>
                                <div class="col-md-3">
                                    <input type="text" name="button_link" class="form-control" value="<?=$items->button_link;?>" placeholder="Button link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Image Position</label>
                                <div class="col-md-5">
                                    <select name="image_position" class="form-control">
                                        <option <?= ($items->image_position == 'left' ? 'selected="selected"' : '')?> value="left">Left Image</option>
                                        <option <?= ($items->image_position == 'right' ? 'selected="selected"' : '')?> value="right">Right Image</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2">image</label>
                                <div class="col-md-10">
                                    <?if ($items->image != ""): ?>
                                        <a target="_blank" href="<?=base_url()?>assets/section/<?=$items->image;?>">
                                            <img class="image-section-header-placeholder" src="<?=base_url()?>assets/section/<?=$items->image;?>">
                                        </a>
                                        <span>change image : </span>
                                    <?endif;?>
                                    <input type="file" class="default" name="userfile">
                                    <br>
                                    <p class="text-muted m-b-25">* Image size 412 x 450 px , JPG & PNG allowed.</p>
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