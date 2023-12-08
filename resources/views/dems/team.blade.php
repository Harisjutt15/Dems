<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>team</title>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <!-- industries CSS -->
    <link rel="stylesheet" href="{{asset('css/industries.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
    <!-- Container-Fluid-Start -->
    <div class="container-fluid">

        <!-- Navbar -->

       @include('dems.components.navbar')



        <!-- Mega Section-1 -->

        <div class="row mega-2 d-flex align-items-center justify-content-between pt-3 pt-lg-5">
            <div class="col-lg-7 col-md-11 col-11 mega-2-area p-2 mt-3">
                <h6 class="pb-2 ms-4">MEET THE<h6>
                        <h3 class="pb-2 ms-4 pe-5">DMA TEAM</h3>
                        <p class="pb-4 ms-4 pe-5">We are always striving to find the greatest talent from around the
                            world to provide the best level of care for our clients. Our Culture at DMA is focused on
                            Trust, Transparency, Collaboration, Commitment and Passion, and we seek talented people who
                            exude these values.</p>
                        <button class="col-auto ms-4">JOIN OUR TEAM</button>
            </div>
            <div class="col-lg-4 col-11 mt-3">
                <img src="images/225-250Group_132676.png" alt="" class="img-fluid">
            </div>
        </div>

        <!-- Mega Section-2 -->

        <div class="row mega-1">
            <div class="col-lg-7 col-11 mega-1-area p-2">
                <h1 class="pb-2 ms-4">We Love Our Culture. Virtual Social Bugs.</h1>
                <h3 class="pb-2 ms-4"></h3>
                <p class="pb-4 ms-4">Joining DMA means becoming part of our family. To create meaningful marketing
                    campaigns, we ensure we have a positive impact on both our team members and their families. You're
                    passionate about what you do. We are passionate about showing our appreciation for our digital
                    marketing experts.</p>
                <div class="ms-4"><a href="">REQUEST A QUOTE ➔</a></div>
            </div>
        </div>

        <!-- Mega Section-3 -->

        <div class="row mega-2 d-flex align-items-center justify-content-between pt-3 pt-lg-5">
            <div class="col-lg-6 col-md-11 col-11 mega-2-area p-2 mt-3">
                <!-- <h6 class="pb-2 ms-4">INSIGHTFUL SEO ARTICLES AND CONTENT<h6> -->
                <h3 class="pb-2 ms-4 pe-5">We Love To Give Back. Charities We Love.</h3>
                <p class="pb-4 ms-4 pe-5">We are actively involved in raising funds and awareness for several nonprofit
                    charities. We believe it is essential we do our part to make the world a better place. Learn more
                    about the charities we support and show your appreciation for those making the world a better place.
                </p>
                <button class="col-auto ms-4">GIVE BACK</button>
            </div>
            <div class="col-lg-5 col-11 mt-3">
                <img src="images/image_229__1_.png" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row mega-1">
            <div class="col-lg-7 col-11 mega-1-area p-2">
                <h1 class="pb-2 ms-4">Join Our Team</h1>
                <h3 class="pb-2 ms-4"></h3>
                <p class="pb-4 ms-4">We’re growing and always looking for exceptional worldwide additions to our team. Industry veterans with years of experience to recent college.</p>
                <div class="ms-4"><a href="">REQUEST A QUOTE ➔</a></div>
            </div>
        </div>


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

    <script src="script.js"></script>

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>