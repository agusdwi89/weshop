<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Manage Header</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Header Section</h4>
                        <br>
                        <?=form_open_multipart('',array("class"=>"form-horizontal"))?>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-3">
                                    <input type="text" placeholder="title first" class="form-control" name="title_first" value="<?=$items->title_first;?>">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" placeholder="title highlight" class="form-control" name="title_highlight" value="<?=$items->title_highlight;?>">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" placeholder="title last" class="form-control" name="title_last" value="<?=$items->title_last;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Description</label>
                                <div class="col-md-10">
                                    <textarea placeholder="Description text" class="form-control" rows="5" name="description"><?=$items->description;?></textarea>
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
                                    <p class="text-muted m-b-25">* Image size 787 x 900 px , JPG & PNG allowed.</p>
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