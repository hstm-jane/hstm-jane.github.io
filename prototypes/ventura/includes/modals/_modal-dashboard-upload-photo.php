<div id="modal-upload-photo" class="modal fade modal-lg modal-upload-photo">
    <div class="modal-dialog" style="overflow-y:initial !important;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Brad Bruno's Upload Photo</h4>
            </div>
            <div class="modal-body" style="max-height:80vh;overflow-y: auto;">
                <div class="col-sm-4 "></div>
                <div class="col-sm-4 ">
                                                            <div class="photomgmt">
                                                                <div class="photomgmt-image">
                                                                    <img src="/content/images/prototype-actors/bbrune.jpg">
                                                                </div>
                                                                <div class="photomgmt-actions">
                                                                    <div class="btn-group btn-group-justified">
                                                                        <div class="btn-group">
                                                                            <a href="#modal-photomgmt" data-toggle="modal" data-dismiss="modal" class="btn btn-default btn-sm" >Upload</a>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <button class="btn btn-default btn-sm " id="btn-photo-remove" type="button">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-photomgmt" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Manage Profile Picture</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" style="display:none">
                    We were unable to process your image. Please upload a valid JPG, GIF or PNG.
                </div>
                <form class="validate">
                    <input type="hidden" id="cropData" name="cropData" />
                    <div class="form-group">
                        For best results, select an image that is at least 400 pixels by 400 pixels and less than 8mb. Smaller images will be padded.
                    </div>
                    <div class="form-group">
                        <label class="control-label">Profile Picture</label>
                        <div class="row">
                            <div class="col-sm-10">
                                 <div class="photomgmt">
                                    <div class="photomgmt-image">
                                        <img src="/content/images/avatar-default.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 hidden-xs">
                                <div class="photomgmt-preview">
                                    <img src="/content/images/avatar-default.png">
                                </div>

                                    <!-- <div class="img-preview preview-sm"></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Choose File <small>Files accepted: .jpg, .gif, or .png up to 8mb</small></label>
                        <input type="file" class="form-control" id="input-photo-file" accept="image/*" style="height:auto">
                        <div class="help-block">Allowed filetypes: .jpg, .gif, .png</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success disabled" data-dismiss="modal" id="btn-photo-upload">Upload Image</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- /modal -->
