<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/iso_navbar'); ?>
<?php $row = $this->iso_model->get_by_id($id); ?>




<div>
            <form id="tab" action="<?php echo site_url('isocontainer/real_update_iso_addition') ?>" method="POST">
                  <div>              
                <label>ContainerId</label>
                <input type="text" name ="ContainerId" value="<?php echo $row->ContainerId; ?>" class="input-xlarge">
                
                
                </div>
                 <div>
                <label>Capacity</label>
                <input type="text" name ="Capacity" value="<?php echo $row->Capacity; ?>" class="input-xlarge">
                </div>
                <div>
                <label>DriverId</label>
            
               <input type="text" name ="DriverId" value="<?php echo $row->DriverId; ?>" class="input-xlarge">
               </div>
                <div>
                <label>LoadStatus</label>
                <input type="text" name ="LoadStatus" value="<?php echo $row->LoadStatus; ?>" class="input-xlarge">
                </div>
                
                                

                 <div>
                  
                     <button  type ="button" href ="#myModal" role ="button" style="left: 13%;" data-toggle="modal" class="btn btn-danger">Save</button>
                </div>
     
         <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Do you want to make changes?</p>
                <p class="text-warning"><small>Press Save if you want to</small></p>
            </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    
                    <button type="submit"  class="btn btn-danger" >Save</button>
                    </div>
            </div></div>
                </div>
                </form>
                </div>

                           
                
<?php $this->load->view('includes/footer'); ?>