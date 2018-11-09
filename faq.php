<!DOCTYPE html>
<html lang="en"><title>FAQ</title>
<?php include("meta.php"); ?>
<body>
     <?php include("nav.php"); ?>
       <img src="images/faq.png" style="max-width: 100%; min-height: 200px;">
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center bg-theme">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Help</a>
            </li>
            <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">FAQ</li>
        </ol>
    </nav><br>
    <div class="container">
        <div class="row">      
            <div class="col-lg-12">
                <h5 >Have Questions? Of Course You Do. Here's A Quick Q & A.</h5><br>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Why CRM software?</a>
                            </h4>
                        </div><br>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                               <p>
                                Customer Relationship Management (CRM) software is intended to:<br>
                                    &nbsp; &nbsp; - Raise customer satisfaction and increase customer loyalty;<br>
                                    &nbsp; &nbsp; - Integrate customer data;<br>
                                    &nbsp; &nbsp; - Improve targeted marketing efforts;<br>
                                    &nbsp; &nbsp; - Anticipate customer needs and preferences;<br>
                                    &nbsp; &nbsp; - Increase productivity and operating efficiencies.<br>
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What is a portal?</a>
                            </h4>
                        </div><br>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                A portal is a unified platform that connects users to contextually relevant information, services, and applications. Modern portals embrace multiple features that make them the best choice for many organizations.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">While developing portals, do you pay attention to security issues?</a>
                            </h4>
                        </div><br>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Yes.<br/> Security is of utter importance for us. Depending on the purpose of a particular portal, we implement various features like securing online transactions with SSL, restricting data access based on user roles, data encryption, digital signatures, certificates, etc.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Is it possible to use cloud platforms for portals?</a>
                            </h4>
                        </div><br>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                Yes, We support the following cloud platforms:<br>
                                &nbsp; &nbsp;   •   Amazon web services
                                <br>&nbsp; &nbsp; •  Google Apps
                                <br>&nbsp; &nbsp; • Microsoft Azure
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">What technologies do you work with?</a>
                            </h4>
                        </div><br>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                We are experts in .NET, PHP, Java, JQuery, JQuery Mobile, HTML5, JavaScript. The full list of technologies that we work with is <a href="development-skill" style="color:#D43307">here</a>.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">What are the advantages of portals?</a>
                            </h4>
                        </div><br>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                There are many benefits that portals offer to organizations. The major ones include improved communication and collaboration, enhanced decision making, increased productivity, and integration of third-party applications
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Do you implement quality assurance procedures (including security testing, performance testing, etc.) for portal development?</a>
                            </h4>
                        </div><br>
                        <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                                Yes. is a mandatory part of the software development process at Norak Technologies .
                            </div>
                        </div>
                    </div>
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