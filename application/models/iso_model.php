<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class iso_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_all() {
        $isocontainer = $this->db->order_by('ContainerId')
                ->get('isocontainer')
                ->result_array();
        return $isocontainer;
    }
    public function myget_all(){
        
        
    }
    public function get_by_capacity($key){
 
    $this->db->order_by("ContainerId");
  
    $query = $this->db->get_where('isocontainer', array('Capacity' => $key));
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return false;
       
         
    }
     public function get_by_loadstatus($key){
 
    $this->db->order_by("ContainerId");
  
    $query = $this->db->get_where('isocontainer', array('LoadStatus' => $key));
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return false;
       
         
    }
    

    public function get_by_id($id) {
        $row = $this->db->get_where('isocontainer', array('ContainerId' => $id))->row();
        return $row;
    }
    
    public function get_by_vesselid($id) {
        $row = $this->db->get_where('bobu14t', array('vesselid' => $id))->row();
        return $row;
    }
    

    public function get_firstname($id) {
        $row = $this->db->get_where('patients', array('id' => $id))->row();
        return $row->firstname;
    }

    public function get_lastname($id) {
        $row = $this->db->get_where('patients', array('id' => $id))->row();
        return $row->lastname;
    }

    public function add_default() {
        $this->db->insert('isocontainer', array('ContainerId' => '', 'Capacity' => '', 'DriverId' => '', 'LoadStatus' => '01-01-2013'));
        return $this->db->insert_id();
        
    }
     public function add_sample($bobu1) {
      //  $this->db->insert('bobu14t', array('vesselid' => $btn_val, 'manway' => $btn_val, 'man' => $btn_val));
        //return $this->db->insert_id();
        $this->db->set($bobu1);
        $this->db->insert('bobu14t');
    }

    public function delete($del_id) {
        $this->db->delete('isocontainer', array('ContainerId' => $del_id));
        
    }

    public function update($isocontainer1) {
        $this->db->set($isocontainer1);
        $this->db->insert('isocontainer');
    }
    
    public function realupdate($isocontainer1,$id2)
               
                    
{
        $this->db->set($isocontainer1);
        /* @var $id2 type */
         $this->db->set($isocontainer1);
        $this->db->where('ContainerId', $id2);
$this->db->update('isocontainer', $isocontainer1); 
    }
    
public function maxwkid()
{
   // $maxid = 0;
$row = $this->db->query('SELECT MAX(workorderid) AS `maxid` FROM `workflow`')->row();
if ($row) {
    $maxid = $row->maxid; 
}
   return $maxid; 
    
    
}

public function wkidupdate($wkflow)
               
                    
{
       
   $this->db->set($wkflow);
     
$this->db->insert('workflow'); 
    }
    
    
    
}
