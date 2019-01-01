<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Site Configuration</h4>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Site Configuration Management</h4>
                        <br>
                        <?=form_open()?>
                            <?foreach ($data as $key => $value): ?>
                            <div class="form-group row">
                                <label class="col-md-3 control-label"><?=$key;?></label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="title first" class="form-control" name="<?=$key;?>" value="<?=$value;?>">
                                </div>
                            </div>
                            <?endforeach;?>
                            <button type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>
                        <?=form_close()?>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>