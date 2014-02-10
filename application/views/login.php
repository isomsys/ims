
<!DOCTYPE HTML>
<?php $this->load->view('includes/header'); ?>

        <head>
            <title>bootstrap</title>
            <meta name="viewport"content="width=device-width, initial-scale=1.0">
            <link href = "css/bootstrap.min.css" rel ="stylesheet">
            <link href = "css/styles.css" rel ="stylesheet">
            </head>
            <div class="navbar navbar-inverse navbar-static-top"></div>
            
<div class="container">
    <div class="content" style="display:none">
        
        <form class="form-horizontal" action="<?php echo site_url('login/check'); ?>" method="POST">
            <fieldset>
                <div id="legend">
                    <legend class="">Login </legend>
                </div>
                <div class="control-group">
                    <!-- Username -->
                    
                    <div class="controls"<label class="control-label" for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder=""  class="input-xlarge" style="width: 300px">
                    </div>
                </div>
             <p></p>
                <div class="control-group">
                    <!-- Password-->
                    
                    <div class="controls"<label class="control-label" for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" style="width: 300px">
                    </div>
                </div>


                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        
                        <p></p>
                        <p></p>
                        
                        <button class="btn btn-success">Go</button>
                    </div>
                </div>
            </fieldset>
        </form>
<p></p>
        <form action="<?php echo site_url('login/forgot') ?>">
            <button class="btn btn-info" type="submit"> Forgot Password</button>
        </form>
        <?php
        if ($error) {
            echo '<div class="alert alert-error">';
            echo '<strong>Error!</strong>' . $error_message;
            echo '</div>';
        } else if (isset($message)) {
            echo '<div class="alert alert-success">';
            echo $message;
            echo '</div>';
        }
        ?> 
    </div></div>
             <script src ="http://code.jquery.com/jquery-1.10.2.min.js"> </script>
    <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.content').fadeIn(1000);
        });
    </script>
    <?php $this->load->view('includes/footer'); ?>
</HTML>