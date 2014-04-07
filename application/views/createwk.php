<html>
<head>  
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ISO MANAGEMENT SYSTEM</title>
        <meta name="description" content="ISO MANAGEMENT SYSTEM in the cloud">
        <meta name="author" content="Team iso">
      
          <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Le fav and touch icons -->
     
        <!-- Le scripts-->
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.min.js'); ?>"></script> 

</head>


<body>
     <form id="form1" action="<?php echo site_url('isocontainer/storewkflow') ?>" method="POST">
    <?php $row = $this->iso_model->maxwkid(); ?>
    
    <table width="1210" height="100" border="2" style="position: absolute;left:8%;">
  <tr>
    <th width="400" align="right" height="151"style="background-color:mediumspringgreen;" scope="row"><img width="430"  height="150" src="..\image\chemtura.jpeg"  /></th>
    <td width="492" align="center"Color="blue" valign="center" style="background-color:mediumspringgreen; font: bold 65px Times New Roman;top:0%">
    <p>Create Work Order</p></td>
   
  </tr>
</table>

<table width="483" height="281" border="3" style="position: absolute; left: 305px; top: 235px; height: 231px; width: 552px; font-weight: bold;">
 
  <tr>
    <td width="329" height="53" align="center" >Create WorkOrder Id</td>
    <td width="207"> 
                   <input style="background-color:mediumspringgreen;font-weight: bold;" name="wkoid" type="text" id="tx4" value="<?php echo $row+1 ?>" width="200px">
 </td>
   
  </tr>
  <tr>
    <td height="41" align="center" ><p>Equipment Id</p></td>
    <td width="207"> 
                   <input style="background-color:mediumspringgreen;font-weight: bold;"name="equip" type="text" id="tx1" value="" width="200px">
 </td>
>  </tr>
  <tr>
    <td height="39"  align="center" >Container Size</td>
    <td width="207"> 
                   <input style="background-color:mediumspringgreen;font-weight: bold;"name="size"type="text" id="tx2" value="" width="200px">
 </td>
  </tr>
  <tr>
    <td height="44"  align="center" >Manufacturer</td>
    <td width="207"> 
                   <input style="background-color:mediumspringgreen;font-weight: bold;"name="manu"  type="text" id="tx3" value="" width="200px">       
 </td>
  </tr>
  <tr>
    <td height="44" colspan="2"  align="center" >
      <input type ="submit" style="text-align:center;width:125px;left:600px;"id="btnimp" value="GO!"  class="btn btn-danger">
    </td>
  </tr>
</table>
   
      </form>

</body>
</html>