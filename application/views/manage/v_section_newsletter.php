<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Manage Newsletter</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Newsletter Section</h4>
                        <br>

                        <?=form_open('',array("class"=>"form-horizontal"))?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Text Horizontal</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="first title" class="form-control" name="title" value="<?=$items->title;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Spam Text</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="link button text" class="form-control" name="spam_text" value="<?=$items->spam_text;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Placeholder Text</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="link button text" class="form-control" name="placeholder_text" value="<?=$items->placeholder_text;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Description</label>
                                        <div class="col-md-9">
                                            <textarea style="max-height:40px;height:40px" placeholder="Description text" class="form-control" rows="5" name="description"><?=$items->description;?></textarea>
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