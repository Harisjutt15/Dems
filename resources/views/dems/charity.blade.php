<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>charity </title>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/award.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom JS -->
    <script defer src="{{asset('js/script.js')}}"></script>
    <style>
        .card-img-url {
            height: 30rem;
            width: auto;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- Container-Fluid-Start -->
    <div class="container-fluid">

        <!-- Navbar -->

        @include('dems.components.navbar')

        <!-- OUR COMMITMENT -->
        <!-- <div class="container  d-flex align-items-center justify-content-center pt-5 pb-5">
            <div class="row">

            </div>
        </div> -->

        <!-- Awards Heading -->

        <div class="row d-flex align-items-center justify-content-center pt-5 pb-5 awards-wrapper">
            <div class="row col-11 awards-in">
                <h6 class="pb-3">GIVING BACK</h6>
                <h1 class="pb-2">GIVING BACK</h1>
                <h5 class="pb-2">
                    We believe in charitable donations and finding new ways to give back.
                </h5>
            </div>
        </div>





    </div>
    <div class="container-fluid">
        <!--  -->
        <div class="row" style="border-bottom: 1px solid #E1E1EF;">
            <div class="col-lg-4 pt-5">
                <img class="img-fluid" src="{{asset('images/unsplash_vbxyFxlgpjM.png')}}" alt="">
            </div>
            <div class="col-lg-8 mt-5">

                <a href="#" class="text-decoration-none">
                    <h3 style="color:#181e4e;font-weight:bold;">
                        UNICEF: Donate to Yemen
                    </h3>
                </a>
                <div class="row" style="color: #212529;">

                    <div class="col-lg-6"></div>
                    <a href="" class="text-decoration-none">
                        <h4 style="color: #212529;line-height:50px">
                        Right now, Yemen is facing the world’s worst cholera outbreak. UNICEF supports Yemen children and families for their health and safety.
                          
                        </h4>
                    </a>
                    <div class=" d-flex align-items-center justify-content-start pt-3">
                        <button style="background-color: rgb(254, 192, 69);" class="col-auto px-5 py-3 fw-bold text-white">SUPPORT UNICEF</button>
                    </div>
                </div>
            </div>
        </div>
        <!--2  -->
        <div class="row" style="border-bottom: 1px solid #E1E1EF;">
            <div class="col-lg-4 pt-5">
                <img class="img-fluid" src="{{asset('images/rileys.webp')}}" alt="">
            </div>
            <div class="col-lg-8 mt-5">

                <a href="#" class="text-decoration-none">
                    <h3 style="color:#181e4e;font-weight:bold;">
                    Riley's Children's Foundation
                    </h3>
                </a>
                <div class="row" style="color: #212529;">

                    <div class="col-lg-6"></div>
                    <a href="" class="text-decoration-none">
                        <h4 style="color: #212529;line-height:50px">
                        Riley's Children's Foundation is dedicated to giving children and their families hope. Donations go toward research and treatment.
                           
                        </h4>
                    </a>
                    <div class=" d-flex align-items-center justify-content-start pt-3">
                        <button style="background-color: rgb(254, 192, 69);" class="col-auto px-5 py-3 fw-bold text-white">SUPPORT RIELY'S</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="row" style="border-bottom: 1px solid #E1E1EF;">
            <div class="col-lg-4 pt-5">
                <img class="img-fluid" src="{{asset('images/doctors-without-borders.webp')}}" alt="">
            </div>
            <div class="col-lg-8 mt-5">

                <a href="#" class="text-decoration-none">
                    <h3 style="color:#181e4e;font-weight:bold;">
                    Doctors Without Borders
                    </h3>
                </a>
                <div class="row" style="color: #212529;">

                    <div class="col-lg-6"></div>
                    <a href="" class="text-decoration-none">
                        <h4 style="color: #212529;line-height:50px">
                        Médecins Sans Frontières provides medical help worldwide. They respond to a global need for medical help and treatment.
                            
                        </h4>
                    </a>
                    <div class=" d-flex align-items-center justify-content-start pt-3">
                        <button style="background-color: rgb(254, 192, 69);" class="col-auto px-5 py-3 fw-bold text-white">SUPPORT MEDICINS SAN'S FRONTIER</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4 -->
        <div class="row" style="border-bottom: 1px solid #E1E1EF;">
            <div class="col-lg-4 pt-5">
                <img class="img-fluid" src="{{asset('images/prevent-child-abuse.webp')}}" alt="">
            </div>
            <div class="col-lg-8 mt-5">

                <a href="#" class="text-decoration-none">
                    <h3 style="color:#181e4e;font-weight:bold;">
                        
Prevent Child Abuse
                    </h3>
                </a>
                <div class="row" style="color: #212529;">

                    <div class="col-lg-6"></div>
                    <a href="" class="text-decoration-none">
                        <h4 style="color: #212529;line-height:50px">
                        Prevent Child Abuse works to ensure that all children are given a safe and healthy childhood with educational support.
                           
                        </h4>
                    </a>
                    <div class=" d-flex align-items-center justify-content-start pt-3">
                        <button style="background-color: rgb(254, 192, 69);" class="col-auto px-5 py-3 fw-bold text-white">SUPPORT Prevent Child Abuse</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 5 -->
        <div class="row" style="border-bottom: 1px solid #E1E1EF;">
            <div class="col-lg-4 pt-5">
                <img class="img-fluid" src="{{asset('images/wildlife-conservation-network.webp')}}" alt="">
            </div>
            <div class="col-lg-8 mt-5">

                <a href="#" class="text-decoration-none">
                    <h3 style="color:#181e4e;font-weight:bold;">
                    Wildlife Conservation Network
                    </h3>
                </a>
                <div class="row" style="color: #212529;">

                    <div class="col-lg-6"></div>
                    <a href="" class="text-decoration-none">
                        <h4 style="color: #212529;line-height:50px">
                        The Wildlife Conservation Network is dedicated to helping preserve natural wildlife and habitats around the world.
                          
                        </h4>
                    </a>
                    <div class=" d-flex align-items-center justify-content-start pt-3">
                        <button style="background-color: rgb(254, 192, 69);" class="col-auto px-5 py-3 fw-bold text-white">SUPPORT Wildlife Conservation Network</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Container-Fluid-End -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-11 text-center mb-3 mt-5">
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
                        <img class="img-fluid" src="{{asset('images/unsplash_qCi_MzVODoU__1_.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- FOOTER -->
    @include('dems.components.footer')



    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>




<!-- background-image:url() -->