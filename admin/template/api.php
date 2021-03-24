<div id="ApiModal" class="modal" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header" style="background: lightblue;">
<h5 class="modal-title mt-0" id="exampleModalScrollableTitle">Secret Key</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_up_api">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
 <div class="modal-body">
     
      <form>

                 <div class="form-group">
                  <label>Key</label>
                <input type="text" name="secret_key" id="secret_key" class="form-control" value="<?php echo $key;?>">
              </div>

            

                 <div>
                   <button class="btn btn-info" type="submit" id="update_key_btn">Update</button>
            
                 </div>
              </form>





</div>
<div class="modal-footer" style="background: lightgray;">
<button type="button" class="btn btn-secondary" id="close_down_api" data-dismiss="modal">Close</button>
 
                </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                                            
