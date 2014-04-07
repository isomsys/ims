<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/iso_navbar'); ?>

<div>
 <form id="tab" action="<?php echo site_url('isocontainer/RemoveContainer') ?>" method="POST">
     
<div class="well">
    <table class="table table-hoover">
        <thead>
            <tr>
                <th>Choose</th>                
                <th>container ID</th>
                <th>capacity</th>
                <th>Driver Id</th>
                <th>Load status</th>
                <th style="width: 36px;"></th>
            </tr>
        </thead>     

        <tbody>
            <?php
            $isocontainer = $this->iso_model->get_all();
            $i = 0;
            foreach ($isocontainer as $container1):
          
               ?> 
                <tr>
                    <td><input type="checkbox" name="checkbox[]" value="<?php echo $container1['ContainerId']; ?>"/></td> 
                    <td><?php echo $container1['ContainerId'] ?></td>
                    <td><?php echo $container1['Capacity'] ?></td>
                    <td><?php echo $container1['DriverId'] ?></td>
                    <td><?php echo $container1['LoadStatus'] ?></td>
                    
                    
                </tr>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
     
                    
        
      <div>
                  
                    <button  type ="button" href ="#myModal" role ="button" data-toggle="modal" class="btn btn-danger">Delete</button>
                </div>
     
         <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Do you want to delete the container permanently?</p>
                <p class="text-warning"><small>Press Delete if you want to</small></p>
            </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    
                    <button type="submit"name="delete"  id="delete"  class="btn btn-danger" >Delete</button>
                    </div>
            </div></div>
                </div>
                
     

 </form>
    

            
    
    </div>


