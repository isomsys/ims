
<DOCTYPE html>
    <html>
        <head>
            <title>Chemtura iso management</title>
            <meta name="viewport"content="width=device-width, initial-scale=1.0">
            <link href = "css/bootstrap.min.css" rel ="stylesheet">
            <link href = "css/styles.css" rel ="stylesheet">
            </head>
            <body>
                <div class="navbar navbar-inverse navbar-static-top">
              
                    <div class="container">
                        <a href = "#" class="navbar-brand"> WELCOME TO ISO MANAGEMENT SYSTEM</a>
                        <button class="navbar-toggle" data-toggle ="collapse" data-target=".navHeaderCollapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse navHeaderCollapse">
                            <ul class="navbar navbar-nav navbar-right ">
                              <li class="btn-group">
  <button type="button" class="btn btn-Danger dropdown-toggle" data-toggle="dropdown">
    Staff Management <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="<?php echo site_url('Staffmem/index')?>"> staff view</a></li>
  
  </ul>
</li>
                      <li class="divider"></li>  
<li class="btn-group">
  <button type="button" class="btn btn-Danger dropdown-toggle" data-toggle="dropdown">
    Iso Management <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
       
      <li><a href="<?php echo site_url('isocontainer/AddContainer')?>">Add iso container</a></li>
    <li><a href="<?php echo site_url('isocontainer/DeleteContainer')?>">Delete Iso-Container</a></li>
    <li><a href="<?php echo site_url('isocontainer/EditContainer')?>">Edit Iso-Container</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo site_url('isocontainer/SearchContainer')?>">Search</a></li>
    <li><a href="<?php echo site_url('isocontainer/viewContainer')?>">view details</a></li>
  </ul>
</li>
                        <li class="btn-group">
  <button type="button" class="btn btn-Danger dropdown-toggle" data-toggle="dropdown">
    Work flow <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="<?php echo site_url('isocontainer/createworkorder')?>">Create</a></li>
    <li><a href="<?php echo site_url('isocontainer/isoinspectionform2')?>">view</a></li>
    <li><a href="<?php echo site_url('isocontainer/isoinspectionform3')?>">cancel</a></li>
    <li><a href="<?php echo site_url('isocontainer/isoinspectionform4')?>">Search</a></li>
    
    
    <li class="divider"></li>
    <li><a href="<?php echo site_url('isocontainer/viewsection3')?>">view</a></li>
  </ul>
</li>
                        <li><a href="<?php echo site_url('site/logout')?>"><button type="button" class="btn btn-info">Log out</button></a>
                        </li>            
                                
                            </ul>
                                
                        
                    </div>
                    
                  </div>          
                    
                    </div>
                
                
               
                
    

<script src ="http://code.jquery.com/jquery-1.10.2.min.js"> </script>
                <script src ="js/bootstrap.js"> </script>
          </body>   </html>