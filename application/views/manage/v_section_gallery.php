<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Manage Gallery</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Edit Gallery Section</h4>
                        <br>
                        <?=form_open('',array("class"=>"form-horizontal"))?>
                            <div class="form-group row">
                                <label class="col-md-12 control-label">Title</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="title first" class="form-control" name="title" value="<?=$master->title;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12 control-label">Jargon</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="jargon text" class="form-control" name="jargon" value="<?=$master->jargon;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12 control-label">List</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="list separate by pipe" class="form-control" name="list" value="<?=$master->list;?>">
                                </div>
                                <div class="col-md-12">
                                    <small>Separate with pipe, ex one|two|three</small>
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
                        <h4 class="header-title m-t-0">Add Gallery Photo</h4>
                        <br>
                        <?=form_open_multipart('manage/section_gallery/add_item',array("class"=>"form-horizontal"))?>
                            <input type="hidden" name="sgal_id" value="<?=$id;?>"> 
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="title text" class="form-control" name="title" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Title Secondary</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="title text" class="form-control" name="title_secondary" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Description</label>
                                <div class="col-md-10">
                                    <textarea style="min-height:30px;height:30px" placeholder="Description text" class="form-control" rows="1" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2">Photo</label>
                                <div class="col-md-10">
                                    <input type="file" class="default" name="userfile[]">
                                    <p class="text-muted m-b-25">* Image size up to 960 x 495 PX , JPG & PNG allowed.</p>
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
                                    <th>Title - Secondary - Description</th>
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
                                            <b><?=$k->title;?> | <?=$k->title_secondary;?></b>
                                            <p><?=$k->description;?></p>
                                        </td>
                                        <td>
                                            <center>
                                                <a style="opacity:100 !important;margin-right:12px" title="delete" href="<?=base_url()?>manage/section_gallery/delete_item/<?=$k->id;?>/<?=$id;?>" class="fa fa-times-circle delete-list dz-tip confirm-delete"></a>
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