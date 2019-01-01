<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Manage Footer</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Footer Section</h4>
                        <br>
                        <?=form_open_multipart('',array("class"=>"form-horizontal"))?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">Left Title</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Left Title" class="form-control" name="l_title" value="<?=$items->l_title;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">Description</label>
                                    <div class="col-md-9">
                                        <textarea placeholder="Description text" class="form-control" rows="5" name="l_description"><?=$items->l_description;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">left bottom text</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="left bottom text" class="form-control" name="l_bottom_text" value="<?=$items->l_bottom_text;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">Right Title</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Rght Title text" class="form-control" name="r_title" value="<?=$items->r_title;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">right description</label>
                                    <div class="col-md-9">
                                        <textarea placeholder="Right Description text" class="form-control" rows="5" name="r_description"><?=$items->r_description;?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Phone number" class="form-control" name="r_phone" value="<?=$items->r_phone;?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 control-label">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Email Text" class="form-control" name="r_email" value="<?=$items->r_email;?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 control-label">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Address Text" class="form-control" name="r_address" value="<?=$items->r_address;?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-12">image</label>
                                    <div class="col-md-12">
                                        <?if ($items->r_image != ""): ?>
                                        <a target="_blank" href="<?=base_url()?>assets/section/<?=$items->r_image;?>">
                                            <img class="image-section-header-placeholder" src="<?=base_url()?>assets/section/<?=$items->r_image;?>">
                                        </a>
                                        <span>change image : </span>
                                        <?endif;?>
                                        <input type="file" class="default" name="userfile">
                                        <br>
                                        <p class="text-muted m-b-25">* Image size 1380 x 920 px , JPG & PNG allowed.</p>
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
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Footer Social</h4>
                        <br>
                        <?=form_open("manage/section_footer/update_social/$items_social->id/$id",array("class"=>"form-horizontal"))?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-12 control-label">facebook link</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="facebook link" class="form-control" name="facebook" value="<?=$items_social->facebook;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-12 control-label">twitter link</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="twitter link" class="form-control" name="twitter" value="<?=$items_social->twitter;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-12 control-label">google plus link</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="google link" class="form-control" name="google" value="<?=$items_social->google;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-12 control-label">instagram</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="instagram link" class="form-control" name="instagram" value="<?=$items_social->instagram;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-12 control-label">behance link</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="behance link" class="form-control" name="behance" value="<?=$items_social->behance;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12 control-label">dribbble link</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="dribbble link" class="form-control" name="dribbble" value="<?=$items_social->dribbble;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12 control-label">linkedin link</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="linkedin link" class="form-control" name="linkedin" value="<?=$items_social->linkedin;?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="btn-submit-tech" type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
                        <?=form_close()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>