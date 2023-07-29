<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <?php include_once('../includes/header_inner.php'); ?>        
    </head>
    <body>        
        <?php include_once('../includes/menu_inner.php'); ?>
        <section class="static-banner mb-4 mb-md-5">
            <img src="../assets/images/banner2.jpg" alt="" class="img-fluid w-100">
            <h2>Contact Us</h2>
        </section>

        <section class="mb-5 contactus-info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-3">
                        <h3 class="title">Contact Info</h3>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-4 text-center">
                        <div class="home-info card1">
                            <i class="la la-phone"></i>
                            <h5><a href="tel:0417417400 ">0417 417 400 </a></h5>
                        </div>
                    </div>                    
                    <div class="col-md-4 text-center">
                        <div class="home-info card2">
                            <i class="la la-envelope"></i>
                            <h5><a href="mailto:admin@pacificbuildingservices.com.au" target="_blank">admin@pacificbuildingservices.com.au</a></h5>
                        </div>
                    </div>                    
                    <div class="col-md-4 text-center">
                        <div class="home-info card1">
                            <i class="la la-map-marker"></i>
                            <h5>1 Bligh Street, Sydney, NSW 2000</h5>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>

        <section class="my-5 contactus-form">      
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">                    
                        <div class="row">
                            <div class="col-lg-12 mb-4 text-center">
                                <h3 class="title">Get in touch with us</h3>
                            </div>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email ID <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Post Code</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Upload File</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Your Message <span class="text-danger">*</span></label>
                                        <textarea class="form-control" required="" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-lg-12 mb-4 text-center">
                                <h3 class="title">Locate Us</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424146.1026650201!2d150.65179546185027!3d-33.84735671951983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2sin!4v1624194974836!5m2!1sen!2sin" width="100%" height="500" style="border:1px solid #ccc; padding: 2px" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>



        <?php include_once('../includes/footer_inner.php'); ?>
    </body>
</html>

