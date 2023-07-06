<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Pharmacy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">

            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="./Branding/My Pharma Logo.png" class="bi me-2 navbar-brand d-inline-block" width="60">
                <img src="./Branding/My Pharma Type.png" class="bi me-2 navbar-brand d-inline-block" height="50">
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-xl-0">
                    <li class="nav-item"><a href="./ " class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="#feature" class="nav-link ">Features</a></li>
                    <li class="nav-item"><a href="#footerID" class="nav-link ">About</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-inline-flex p-2" role="search">
                    <input class="form-control me-2 d-inline-flex p-2" type="search" placeholder="Search Medicine"
                        aria-label="Search">
                    <button class="btn btn-outline-danger me-1 text-light" style="background-color: #D60B51;"
                        type="Submit">Search</button>
                </form>
                <div class="btn-group">
                    <img src="./images/Account.png" width="35px" style="margin-left:15px; cursor:pointer;"
                        class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu mydropdown" style="margin-top: 24px; background-color: #D60B51;">
                        <li><a class="dropdown-item" href="./login" style="color: white; font-weight:500;">Login</a>
                        </li>
                        <li><a class="dropdown-item" href="./register"
                                style="color: white; font-weight:500">Register</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./dashboard" style="color: white; font-weight: 500;">Log
                                Out</a></li>
                    </ul>
                </div>

                <a href="./cart">
                    <img src="./images/Cart.png" width="35px" style="margin-left:15px; cursor:pointer;">
                </a>
            </div>
        </div>

        </div>
    </nav>
    <!-- /////////////////////////////NAV_END////////////////////// -->

    <!-- /////////////////////////////CART//////////////////////////// -->

    <!-- <div class="cartBtn">
        <button type="button" class="btn btn-warning btn-lg">Orer Now</button>
    </div>
    <br> -->
   
    <div class="cartContainer">
        <div class="left">

            <table class="tableClass">
                <tr class="innerRow">


                    <th>Medicine</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr class="innerRow">
                    <td>
                        <img src="./images/Pro1.jpg" alt="" class="cartImg">
                    </td>
                    <td>Panadol</td>
                    <td>20</td>
                    <td>3</td>
                    <td>60</td>
                </tr>
                <tr class="innerRow">
                    <td>
                        <img src="./images/Pro3.jpg" alt="" class="cartImg">
                    </td>
                    <td>Arinac Forte 400mg/60mgl</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                </tr>
                <tr class="innerRow">
                    <td>
                        <img src="./images/Pro0.png" alt="" class="cartImg">
                    </td>
                    <td>Risek Insta - 20mg</td>
                    <td>50</td>
                    <td>3</td>
                    <td>150</td>
                </tr>
                <tr class="innerRow">
                    <td>
                        <img src="./images/Pro2.jpg" alt="" class="cartImg">
                    </td>
                    <td>Combinol-D</td>
                    <td>100</td>
                    <td>3</td>
                    <td>300</td>
                </tr>

            </table>
        </div>



        <div class="right">
            <div class="wrapper" style="width: 100%;">
                <div class="cartTitle">CART TOTAL</div>
                <div class="cartSubTitle"><b>Subtotal:</b> Rs100</div>
                <div class="cartSubTitle"><b>Discount:</b> Rs10</div>
                <div class="cartSubTitle"><b>Discount:</b> Rs100</div>
                <div class="cartSubTitle">
                    <button class="cartButton">CHECKOUT NOW!</button>
                </div>

            </div>
        </div>
    </div>


    <!-- <div class="cartDiv"> -->


    <!-- <div class="cartrow">
            <div class="th">Medicine</div>
            <div class="th">Name</div>
            <div class="th">Price</div>
            <div class="th">Quantity</div>
        </div>

        <div class="cartrow">
            <div class="cartImg">
                <img src="./images/m2.jpg" alt="">
            </div>
            <div class="td">Panadol</div>
            <div class="td">20</div>
            <div class="td">2</div>
        </div> -->
    <!-- </div> -->

    <!-- <h1>table2</h1> -->












    


    <!-- ///////////////////Footer//////////////// -->
    <div style="margin-top:40px;" id="footerID">
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <img src="./Branding/My Pharma Logo.png" alt="" height="80px"
                                style="margin-bottom:20px; cursor: pointer;">
                            <img src="./Branding/My Pharma Type.png" alt="" height="50px"
                                style="margin-bottom:20px; cursor: pointer;">
                            <h5 style="font-family:'Zen Kaku Gothic New', sans-serif; margin-bottom: 20px;">We offer
                                more than just
                                medicine.</h5>
                            <p>
                                MY Pharma is a online medicines providing conpany aimed towards a smarter and a healther
                                world.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h5 class="text-uppercase mb-4 font-weight-bold">Services:</h5>
                            <p>Online Doctor Appointment.</p>
                            <p>Everyday Pills/Serups.</p>
                            <p>Medicines Remainder.</p>
                            <p>Real-Time Body Diagnostics.</p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3" style="cursor: pointer;">
                            <h5 class="text-uppercase mb-4 font-weight-bold">Social Handles:</h5>
                            <div class="footerSocial myFooterSocials">
                                <span style="margin-right: 20px;">
                                    <img src="./images/sm0.png" style="width: 30px;" alt=""></span>
                                <span>
                                    <p>Facebook.</p>
                                </span>
                            </div>
                            <div class="footerSocial myFooterSocials">
                                <span style="margin-right: 20px;">
                                    <img src="./images/sm1.png" style="width: 30px;" alt=""></span>
                                <span>
                                    <p>Instagram.</p>
                                </span>
                            </div>
                            <div class="footerSocial myFooterSocials">
                                <span style="margin-right: 20px;">
                                    <img src="./images/sm2.png" style="width: 30px;" alt=""></span>
                                <span>
                                    <p>Linkedin.</p>
                                </span>
                            </div>
                            <div class="footerSocial myFooterSocials">
                                <span style="margin-right: 20px;">
                                    <img src="./images/sm3.png" style="width: 30px;" alt=""></span>
                                <span>
                                    <p>Twitter.</p>
                                </span>
                            </div>
                        </div>

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h5 class="text-uppercase mb-4 font-weight-bold">Contact:</h5>
                            <p><i class="fas fa-home mr-3"></i> DCSE, UET Peshawar, Pakistan</p>
                            <p><i class="fas fa-envelope mr-3"></i> yaseenirshad589.com</p>
                            <p><i class="fas fa-envelope mr-3"></i> abdulmajid1m2@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> +92-340-4708887</p>
                            <p><i class="fas fa-print mr-3"></i> +92-311-0588609</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-3">

                <!-- Section: Copyright -->
                <section class="p-3 pt-0">
                    <div class="row d-flex align-items-center text-center">
                        <!-- Grid column -->
                        <div class="p-3  ">
                            <h5 class="d-column-flex align-item-center">© 2022 Copyright: MY Pharma Pvt Ltd.</h5>
                        </div>

                        <!-- Grid column -->
                    </div>
                </section>
                <!-- Section: Copyright -->
            </div>
            <!-- Grid container -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>