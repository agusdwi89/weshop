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
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Video Section</h4>
                        <br>
                        <?=form_open('',array("class"=>"form-horizontal"))?>
                            <div class="form-group row">
                                <label class="col-md-12 control-label">Youtube Video Code</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="title first" class="form-control" name="link" value="<?=$items->link;?>">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12">
                                    <p style="margin-top:10px">input youtube video code (red color)<br>example : https://www.youtube.com/watch?v=<b style="color:#f33f3f">Amq-qlqbjYA</b></p>
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