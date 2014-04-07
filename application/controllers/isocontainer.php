<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class isocontainer extends CI_Controller {
public $id2;
    

    public function __construct() {
        parent::__construct();

        
    }
    
    public function sample()
    {
        
      $hcells1=$this->input->post('hcells');
      $vesselid1=$this->input->post('vesselid');
      $fill1=$this->input->post('fill');
      $vent1=$this->input->post('vent');
      $air1=$this->input->post('air/n2');
      $fusible1=$this->input->post('fusible');
      $batchno1=$this->input->post('batchno');
      $repairs1=$this->input->post('repairs');
      $clean1=$this->input->post('clean');
      $date1=$this->input->post('datepicker');
      
      $bobu = array(
            'vesselid' => $vesselid1,
            'vesselid' => $vesselid1,
            'fill' => $fill1,
            'vent' => $vent1,
            'air' => $air1,
            'fusible' => $fusible1,
            'batchno' => $batchno1,
            'repairs' => $repairs1,
            'clean' => $clean1,
            'date' => $date1,
           'hcells'=>$hcells1
            
        );
      
      
         $this->iso_model->add_sample($bobu);
              $this->load->view('Section3');     
                 
                 
             
    }
    
    
   public function viewsection3()
{
    
    $this->load->view('view_section3');
    
} 
public function Findsec3(){
    
    $data['key'] = $this->input->post('Sec3');
    $data1['key1']=$this->input->post('hcells');
  
    $this->load->view('sec3',$data,$data1);
    
}    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
public function AddContainer()
{
    $isocontainer2 = array(
            'ContainerId' =>"",
            'Capacity' => "",
            'DriverId' => "",
            'LoadStatus' => "",
            'profile'=> "",
            
        );
    $this->load->view('add_iso',$isocontainer2);
}
public function SearchContainer(){
    
    
    $this->load->view('Search_iso'); 
    
}
public function searchbycid(){
    
    
    $this->load->view('searchbyid'); 
    
}
public function searchbycapacity(){
    
    
    $this->load->view('searchby cap'); 
    
}
public function searchbyloadstatus(){
    
    
    $this->load->view('searchbyloadstatus'); 
    
}

public function FindContainer(){
    
    $data['key'] = $this->input->post('Search');
    
    $this->load->view('find',$data);
    
}

    

public function findload(){
    
    $data['key'] = $this->input->post('Search');
    
    $this->load->view('findload',$data);
}
public function Findcapacity(){
    
    $data['key'] = $this->input->post('Search');
    
    $this->load->view('findcap',$data);
}
public function DeleteContainer()
{
    

 $this->load->view('delete_iso');

   
}   
public function EditContainer()
{
    

 $this->load->view('edit_iso');

   
}  
public function ChangeContainer() {
         if(isset($_POST['edit'])){
        
  
for($i=0;$i<count($_POST['checkbox']);$i++){
$data['id']=$_POST['checkbox'][$i];
 $id2=$data['id'];

$this->load->view('edit1',$data);


}}
// if successful redirect to delete_multiple.php

    
}




public function RemoveContainer()
        {
    
if(isset($_POST['delete'])){
for($i=0;$i<count($_POST['checkbox']);$i++){
$del_id=$_POST['checkbox'][$i];

$this->iso_model->delete($del_id);



}}
// if successful redirect to delete_multiple.php

 $this->load->view('delete_iso');

}
    

 public function update_iso_addition() {
        
        $Containerid = $this->input->post('ContainerId');
        $capacity = $this->input->post('Capacity');
        $driverid = $this->input->post('DriverId');
        $loadstatus = $this->input->post('LoadStatus');

        

        //update patient
        $isocontainer1 = array(
            'ContainerId' => $Containerid,
            'Capacity' => $capacity,
            'DriverId' => $driverid,
            'LoadStatus' => $loadstatus,
           
            
        );
        $this->iso_model->update($isocontainer1);
        
        $this->load->view('add_iso');

        //$data['id'] = $id;
        //$data['active'] = 'profile';
        //$this->load->view('staff_patient_profile', $data);
}
 public function real_update_iso_addition() {
        
        $Containerid = $this->input->post('ContainerId');
        $capacity = $this->input->post('Capacity');
        $driverid = $this->input->post('DriverId');
        $loadstatus = $this->input->post('LoadStatus');
        

    
        //update patient
        $isocontainer1 = array(
            'ContainerId' => $Containerid,
            'Capacity' => $capacity,
            'DriverId' => $driverid,
            'LoadStatus' => $loadstatus,
            
        );
        $this->iso_model->realupdate($isocontainer1,$Containerid);
        $this->load->view('edit_iso');

      
}
public function ViewContainer(){
    $this->load->view('view_iso');
    
}
public function profile($id) {
        $data['id'] = $id;
        
        $this->load->view('iso_profile', $data);
    }
 
 
 public function isoinspectionform1(){
    
    
    $this->load->view('Section1'); 
    
}
 public function isoinspectionform2(){
    
    
    $this->load->view('Section2'); 
    
}
 public function isoinspectionform3(){
    
    
    $this->load->view('Section3'); 
    
}
public function isoinspectionform4(){
    
    
    $this->load->view('Section4'); 
    
}
public function isoinspectionform5(){
    
    
    $this->load->view('Section5'); 
    
}
public function isoinspectionform6(){
    
    
    $this->load->view('Section6'); 
    
}

public function createworkorder(){
    
     $maxid = $this->iso_model->maxwkid();
     $mam=$maxid+1;
     $data['mid']=$mam;
   $this->load->view('createwk'); 
    
}
public function storewkflow(){
    $Containerid = $this->input->post('wkoid');
        $capacity = $this->input->post('equip');
        $driverid = $this->input->post('manu');
        $loadstatus = $this->input->post('size');
        

    
        //update patient
        $workflow= array(
            'workorderid' => $Containerid,
            'equipmentid' => $capacity,
            'containersize' => $driverid,
            'manufacturer' => $loadstatus,
            
        );
    
    $this->iso_model->wkidupdate($workflow);
    $this->load->view('wkdetails');
}


public function wkdetails(){
    
    $this->load->view('Section3');
}

public function cdimen(){
    
    $this->load->view('Section1');
}
public function finspec(){
    
    $this->load->view('Section4');
}




 }