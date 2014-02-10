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
        
        $this->load->view('add_iso',$data);

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
 }