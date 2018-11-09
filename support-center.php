<!DOCTYPE html>
<html lang="en">
<title>Support Center</title>
<?php include("meta.php"); ?>
<body>
      <?php include("nav.php"); ?>
        <img src="images/support-center.png" style="max-width: 100%; min-height: 200px;">
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center bg-theme">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Help</a>
            </li>
            <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">Support Center</li>
        </ol>
    </nav><br>

    <div class="container">
        <div class="row">
                <?php include("sidebar.php"); ?> 
          <div class="col-md-9">        
                <div class="col-md-12"> 
                <h5 style="color: #41d8d1;">Welcome to the Norak Technologies Ltd Support Center</h5>
                <p align="justify">Please use the following contact information for technical support requests only. For all other inquiries please use the information and form on the <a href="contact.php" style="color:#03C">Contact Us</a> page.</p>
                <p align="justify">Our Support Services can be contacted from 8AM to 5PM, MONDAY – FRIDAY. </p>

                </div>
            <div class="col-md-12">
                <hr>
                <form name="sentMessage2" id="contactForm" method="post" action="">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required  name="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Company Name:</label>
                            <input type="text" class="form-control" id="company_name" required name="company_name">
                            <p class="help-block"></p>
                        </div>
                    </div>                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required name="phone">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mobile:</label>
                            <input type="tel" class="form-control" id="mobile" name="mobile">
                        </div>
                    </div>                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required name="email">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Priority:</label>
                            <select name="priority" id="priority" class="form-control">
                            <option value="Normal">Normal</option>
                            <option value="Urgent">Urgent</option>
                            </select>
                        </div>
                    </div>                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Subject:</label>
                            <input type="text" class="form-control" id="subj" required  name="subj">
                            <p class="help-block"></p>
                        </div>
                    </div>                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Description:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required 
                             maxlength="999" style="resize:none" name="message"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    
                    <input type="submit" name="btn_send" id="btn_send" class="btn btn-primary" value="Send Message">
                </form>
        </div>      

    </div>
</div>
</div><br>
    <?php include("footer.php"); ?>
    <div class="cpy-right text-center py-4">
        <p class="text-dark">© 2018 Recruit. All rights reserved | Design by
            <a href="index.php" class="text-theme">Norak Technologies</a>
        </p>
    </div>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Slider-JavaScript -->
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/script.js"></script>
        <script src="js/onload.js"></script>
    <!-- //js -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/top.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>