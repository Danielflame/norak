<!DOCTYPE html>
<html lang="en">
<title>Contact Us</title>
<?php include("meta.php"); ?>
<body>
    <!-- header -->
     <?php include("nav.php"); ?>
        <img src="images/contact-us.png" style="max-width: 100%; min-height: 200px;">
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center bg-theme">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">Contact</li>
        </ol>
    </nav><br>
    <section class="contact-w3pvt py-lg-3">
        <div class="container py-md-1">
            <div class="address-w3layouts">
                <div class="title-sec-w3layouts_pvt text-center">
                    <h5 class="w3layouts_pvt-head" style="color: #41d8d1;">our contact info</h5>
                </div>
                <div class="row py-md-5 pt-4">
                    <div class="col-lg-4">
                        <div class="row fv3-contact">
                            <div class="col-4  text-center">
                                <span class="fa fa-envelope-open ml-2"></span>
                            </div>
                            <div class="col-8">
                                <a href="mailto:info@noraktech.com" class="d-block text-secondary">info@noraktech.com</a>
                                <a href="mailto:support@noraktech.com" class="d-block text-secondary">support@noraktech.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-lg-0 my-4">
                        <div class="row  fv3-contact">
                            <div class="col-4 my-2 text-center">
                                <span class="fa fa-phone ml-2"></span>
                            </div>
                            <div class="col-8">
                                <p>08062439476</p>
                                <p>09066073086</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row fv3-contact">
                            <div class="col-4  text-center">
                                <span class="fa fa-home ml-2"></span>
                            </div>
                            <div class="col-8">
                                <p>8 Alhaja oluwakemi Street,
                                    <br>Anthony Village,Lagos State,Nigeria.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 mx-auto">
                    <!-- register form grid -->
                    <div class="register-top1 py-lg-3">
                        <div class="title-sec-w3layouts_pvt text-center">
                            <h5 class="w3layouts_pvt-head" style="color: #41d8d1;">How Can We Help You?</h5>
                        </div>
                        <form action="" method="post" class="register-wthree pt-md-5 pb-md-0 py-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            First name
                                        </label>
                                        <input class="form-control" type="text" placeholder="" name="email"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Last name
                                        </label>
                                        <input class="form-control" type="text" placeholder="" name="name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            Mobile
                                        </label>
                                        <input class="form-control" type="text" placeholder="" name="email"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Email
                                        </label>
                                        <input class="form-control" type="email" placeholder="" name="email"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            Your message
                                        </label>
                                        <textarea placeholder="Type your message here" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-agile btn-block w-100 font-weight-bold text-uppercase bg-theme">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--  //register form grid ends here -->
                    <div class="border-pos-wthree border-exp"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- map -->
    <div class="map px-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
            allowfullscreen></iframe>
    </div>
    <!--// map-->
    <!-- Footer -->
    <?php include("footer.php"); ?>
    <!-- /Footer -->
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