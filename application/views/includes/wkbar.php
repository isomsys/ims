<!DOCTYPE html> 
<html lang="en"> 
<head> 
   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ISO MANAGEMENT SYSTEM</title>
        <meta name="description" content="ISO MANAGEMENT SYSTEM in the cloud">
        <meta name="author" content="Team iso">
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le styles -->
        <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Le fav and touch icons -->
     
        <!-- Le scripts-->
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.min.js'); ?>"></script>
<link href="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap2.2.css" rel="stylesheet"> 
</head>
<body>
<div class="container">
<div class="row">
    <div style="position: absolute;left:25%;top:10%" class="span6">
<ul class="nav nav-tabs">
<li  style="background-color: greenyellow;">
<a href="<?php echo site_url('isocontainer/cdimen')?>">Container Dimension</a> </li> 

<li style="background-color: greenyellow;"> <a href="<?php echo site_url('isocontainer/wkdetails')?>">Iso container inspection</a></li>
<li   style="background-color: greenyellow;"><a href="<?php echo site_url('isocontainer/finspec')?>">Frame Inspection</a></li> 
<li   style="background-color: greenyellow;"><a href="#">Vessel Purging</a></li> 
<li   style="background-color: greenyellow;" ><a href="#">Equipment release certificate</a></li> 
</ul>
</div>
</div>
</div>
    
    <div style="position: absolute;left:0%;top:20%;width: 2000px;" class="container">
<div class="row">
<div style="position: absolute;top:20%;left:0%;width:180px;height:500px;"class="span8">
<ul class="nav nav-tabs nav-stacked">
<li  style="background-color: greenyellow;">
<a href="<?php echo site_url('isocontainer/wkdetails')?>">Container Dimension</a> </li> 

<li style="background-color: greenyellow;"> <a href="<?php echo site_url('isocontainer/wkdetails')?>">Iso container inspection</a></li>
<li   style="background-color: greenyellow;"><a href="#">Frame Inspection</a></li> 
<li   style="background-color: greenyellow;"><a href="#">Vessel Purging</a></li> 
<li   style="background-color: greenyellow;" ><a href="#">Equipment release certificate</a></li>
<li   style="background-color: greenyellow;" ><a href="#">Vessel Hydro report</a></li>
<li   style="background-color: greenyellow;" ><a href="#">Linear thickness reading</a></li>
<li   style="background-color: greenyellow;" ><a href="#">Valve Reading</a></li>
</ul>
</div>
</div>
</div>
 
     <label style=" background-color:violet;width: 138px;z-index: 10;height: 36px;text-align:center;padding: 6px;font-weight: bold;font-size: 22px;position:absolute;left:5px;top:13%;" >Task</label>
    <label style=" background-color: violet;width: 138px;z-index: 10;height: 36px;text-align:center;padding: 6px;font-weight: bold;font-size: 22px;position:absolute;left:180px;top:13%;border-color: black;" >Status</label>
    <input type="text" value="In Complete" readonly="readonly" name="vent" id="tx1 "style=" background-color: red;width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:180px;top:20%;" /> 
       <input type="text"value="Complete"readonly="readonly" name="vent" id="tx1 "style="background-color:green;width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:180px;top:29%;" /> 
         <input type="text" value="In Progress"readonly="readonly" name="vent" id="tx1 "style="background-color: yellow;width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:180px;top:36%;" /> 
           <input type="text"value="In complete"readonly="readonly" name="vent" id="tx1 "style="background-color: red;width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:180px;top:42%;" /> 
             <input type="text"value="In complete"readonly="readonly" name="vent" id="tx1 "style="background-color: red;width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:180px;top:50%;" /> 
               <input type="text"value="In complete"readonly="readonly" name="vent" id="tx1 "style="background-color: red;width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:180px;top:57%;" /> 
                 <input type="text"value="In complete" readonly="readonly"name="vent" id="tx1 "style="background-color: red;width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:180px;top:66%;" /> 
                   <input type="text"value="In complete"readonly="readonly" name="vent" id="tx1 "style="background-color: red;width: 138px;z-index: 10;height: 32px;text-align:left;padding: 6px;font-weight: bold;font-size: 16px;position:absolute;left:180px;top:74%;" /> 
</body>
</html>
            