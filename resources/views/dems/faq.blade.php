<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>faq</title>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <!-- industries CSS -->
    <link rel="stylesheet" href="{{asset('css/industries')}}">
    <!-- style CSS just for first section -->
    <link rel="stylesheet" href="{{asset('css/events.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
    <!-- Container-Fluid-Start -->
    <div class="container-fluid">

        <!-- Navbar -->

        @include('dems.components.navbar')
        <!--  -->


        <div class="row d-flex align-items-center justify-content-center pt-5 pb-5 events-wrapper">
            <div class="col-lg-2 col-sm-2"><img class="img-fluid" src="images/image_219.png" alt=""></div>
            <div class="col-lg-9 col-sm-11 events-in">
                <h6 class="pb-3">FAQS</h6>
                <h1 class="pb-2">Frequently Asked Common Questions</h1>
                <h5 class="pb-2">Our answers to the questions most commonly asked.</h5>

            </div>
        </div>


        <!-- LC Main Section -->

        <div class="row luxury-top-main pt-5 pb-5 d-flex align-items-center justify-content-center">

            <div class="col-lg-3 order-2 order-sm-2 order-md-2 order-lg-1 col-11 pb-2 luxury-in-1 mt-3">

                <div class="row border hov-item my-3" onClick="texthead(1)">
                    <a href="#">General</a>
                </div>
                <div class="row border hov-item my-3" onClick="texthead(2)">
                    <a href="#">SEO</a>
                </div>
                <div class="row border hov-item my-3" onClick="texthead(3)">
                    <a href="#">PAY PER CLICK</a>
                </div>
                <div class="row border hov-item my-3" onClick="texthead(4)">
                    <a href="#">SOCIAL MEDIA</a>
                </div>
                <div class="row border hov-item my-3" onClick="texthead(5)">
                    <a href="#">REPUTATION MANAGEMENT</a>
                </div>
                <div class="row border hov-item my-3" onClick="texthead(6)">
                    <a href="#">WEB DESIGN & DEV.</a>
                </div>
                <div class="row border hov-item my-3" onClick="texthead(7)">
                    <a href="#">MARKETING AUTOMATION</a>
                </div>
            </div>

            <div class="col-lg-9">
                <div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button id="OP1" class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What sort of businesses do you work with?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">We often help other agencies with projects that are either larger or more specialized than they are used to handling solo. If you offer digital marketing services and have clients requiring solutions you are not skilled in, kindly contact our business development team.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button id="OP2" class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What services does DMA provide?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Each project we work on is specific to the business we are working with. As a result, we do not use a standardized pricing model. We tailor each campaign to the company we are working with based on their goals and how we can get them there. If you’re interested in getting a custom quote that will produce value and make sense to you in the long term, please give us a call or fill out our contact form. One of our sales representatives will learn more about your business and provide you with your custom quote.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button id="OP3" class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    What is your pricing model?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Digital Marketing Agency works with businesses large and small. We connect each project with the right professionals with ample experience working on companies at each scale and specialization. This ensures that the right people are working on each project. Whether you’re a small business looking to reach your local audience or a large, multinational brand looking to launch a new product in numerous markets, we have digital marketing experts bearing the experience and passion required to make your marketing campaign a breakthrough..</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>




        <!-- Mega Section-3 -->




        <!-- Container-Fluid-End -->
    </div>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-11 text-center my-3">
                <div style="color: skyblue;"><b>OUR SALES TEAM</b></div>
                <div>
                    <h2>We Are Available For You Every Time</h2>
                </div>
            </div>
            <div class="col-sm-11 mb-4" style="background-color: rgb(24, 30, 78);">
                <div class="row">
                    <div class="col-lg-6 p-3">
                        <h1 class="mt-5" style="font-size: 55px; font-weight: 700; color: white;">Book a meeting <br>
                            <span style="color: rgb(252, 194, 71);;">to get started</span>
                        </h1>
                        <p class=" mt-4 mb-5" style="color: white; font-size: 22px;">Speak to an expert to find out how
                            Digital Consumer Intelligence will change the way you work.</p>
                        <span id="BOOK"><b>Book a Meeting</b></span>
                    </div>
                    <div class="col-lg-6 p-0 m-0">
                        <img class="img-fluid" src="images/unsplash_qCi_MzVODoU__1_.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- FOOTER -->
   @include('dems.components.footer')

    <script src="js/faq.js"></script>

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>