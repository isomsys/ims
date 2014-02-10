<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/iso_navbar'); ?>




<div>
            <form id="tab" action="<?php echo site_url('isocontainer/update_iso_addition') ?>" method="POST">
                  <div>              
                <label>ContainerId</label>
                <input type="text" name ="ContainerId" value="" class="input-xlarge">
                
                
                </div>
                 <div>
                <label>Capacity</label>
                <input type="text" name ="Capacity" value="" class="input-xlarge">
                </div>
                <div>
                <label>DriverId</label>
            
               <input type="text" name ="DriverId" value="" class="input-xlarge">
               </div>
                <div>
                <label>LoadStatus</label>
                <input type="text" name ="LoadStatus" value="" class="input-xlarge">
                </div>
                
             
                      

                <div>
                    <button type ="submit" class="btn btn-primary">Add</button>
                    
                </div>
                

            
          
                
                </form>    </div>
                
<?php $this->load->view('includes/footer'); ?>