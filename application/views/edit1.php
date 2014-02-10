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
                    <button type ="submit" class="btn btn-primary">save</button>
                    
                </div>
                </div>

                           
                
<?php $this->load->view('includes/footer'); ?>