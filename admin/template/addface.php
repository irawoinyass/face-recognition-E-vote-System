<div id="AddFaceModal" class="modal" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header" style="background: lightblue;">
<h5 class="modal-title mt-0" id="exampleModalScrollableTitle"><h4 id="face_title" style="color: #fff;"></h4></h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_up_add_face">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
 <div class="modal-body">
     


<form id="add_face_form" method="POST" enctype="multipart/form-data">

                 



         
              <div class="form-group">
                  <label>Image</label>
                <input type="file" name="change_image" id="change_image" class="form-control" >
              </div>
            

                
              
<input type="hidden" name="face_id" id="face_id">




              





            

              
                 <div>
                   <button class="btn btn-info" type="submit">Add Face</button>
              
                 </div>
              </form>



</div>
<div class="modal-footer" style="background: lightgray;">
<button type="button" class="btn btn-secondary" id="close_down_add_face" data-dismiss="modal">Close</button>
 
                </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                                            
