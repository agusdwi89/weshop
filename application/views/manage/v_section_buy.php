<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Manage Buy</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Buy Section</h4>
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
                                        <label class="col-md-3 control-label">Button Text</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="button text" class="form-control" name="button_text" value="<?=$items->button_text;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Button Link</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="link button text" class="form-control" name="button_link" value="<?=$items->button_link;?>">
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