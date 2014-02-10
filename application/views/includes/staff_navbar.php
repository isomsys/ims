<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo site_url()?>" name="top">Staff Management </a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="<?php echo site_url()?>"><i class="icon-home icon-white"></i> Home</a></li>
                    <li class="divider-vertical"></li>
                    <li class="active"><a href="#"><i class="icon-th-list icon-white"></i> Staff</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="#"><i class="icon-signal icon-file"></i> Profile</a></li>
                    <li class="divider-vertical"></li>
                </ul>
                <div class="btn-group pull-right">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user"></i> <?php echo $this->session->userdata('username')?>	<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('staff/profile')?>"><i class="icon-user"></i> Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('site/logout')?>"><i class="icon-off"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </div>
    <!--/.navbar-inner -->
</div>
<!--/.navbar -->