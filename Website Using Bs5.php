<?php

$showaleart=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $firstName=$_POST['firstName'];
    $lastName =$_POST['lastName'];
    $email =$_POST['email'];
    $password =$_POST ['password'];
    $cpassword =$_POST ['cpassword'];
      
         if($password==$cpassword){
             
             $sql = "INSERT INTO `awesome` (`firstName`, `lastName`, `email`, `password`, `dt`) VALUES ('$firstName', '$lastName', '$email', '$password', current_timestamp())";
             $result =mysqli_query($conn,$sql);
             if($result){
                 $showaleart=true;
             }

         }


}


?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

    <link href="Website Using Bs5.css" type="text/css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <title>Website Using Bs5</title>
</head>

<body>
    <div class="mynav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
            <div class="container-fluid">
                <h1 class="navbar-brand "><span class="stylea " style="color:rgb(0, 255, 42); font-size:50px; font-family:ul-mono-space">A</span>wesome Template</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-capitalize" aria-current="page" href="#about-us">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">Contact US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </div>

    <!-- 1 nevbar ends -->


    <header>

        <div class="">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/1170835.jpg" class="d-block w-100" alt="1170835">
                        <div class="carousel-caption  d-md-block">
                            <h5> elit. Accusantium, eum!.</h5>
                            <p>Hey There How Are You Feeling?.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/2122201.png" class="d-block w-100" alt="2122201">
                        <div class="carousel-caption  d-md-block">
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <p>Are You Looking For SomeThing?</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/1600x900/?nature,water" class="d-block w-100" alt="2332740">
                        <div class="carousel-caption  d-md-block">
                            <h5> totam perspiciatis at ipsam delectus.</h5>
                            <p>Is There Anything I Can Help You With?</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>


        <!-- about section starts -->

        <section id="about-us" class="main_heading my-5">
            <div class="section-title text-center">
                <h2 class="heading ">About Us</h2>
                <hr class="w-25 mx-auto">
            </div>


            <div class=" container-fluid">
                <div class="row p-4 gx-0">
                    <div class="col-12 col-md-6 col-lg-6 mslg-4  ">
                        <figure><img class="img-fluid rounded  pb-sm-5 about-img" src="img/1122054.jpg" alt=""></figure>
                    </div>

                    <div class="d-flex justify-content-center align-items-start flex-column col-12 col-md-6 col-lg-6 contentsec p-3 about-sec ml-lg-4">
                        <h2>My Journey</h2>
                        <p class="text-justify plength text-capitalize small rounded my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ducimus, delectus quibusdam necessitatibus voluptates consequuntur qui nostrum aliquam aspernatur, error cupiditate aliquid laborum consequatur blanditiis recusandae accusamus esse autem atque culpa facere. Ea cum illo accusantium, atque dolores hic ullam. Dolores corrupti error eaque aliquid corporis suscipit quod necessitatibus maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti illo totam reprehenderit similique veniam libero repellat nam inventore velit perspiciatis fuga, fugit facilis, quis vitae consectetur doloremque et excepturi nesciunt, soluta architecto ducimus recusandae eligendi. Voluptates quos eligendi inventore nostrum assumenda similique minima blanditiis eius voluptatum impedit, nam ratione? optio velit, quidem accusamus corporis incidunt nemo, dolor earum nobis aspernatur temporibus id facilis animi excepturi eius voluptate odit totam corrupti dolores ex modi culpa. Aperiam harum animi commodi iusto earum cumque quibusdam eius, porro eos debitis sequi iure voluptas qui aut nesciunt dignissimos obcaecati. Perspiciatis nobis sit cum, fugit id tenetur necessitatibus magni unde nisi accusantium, aut ut incidunt ducimus cupiditate sed quo culpa excepturi?</p>
                        <button type="button" class="btn btn-primary buttonplace" data-bs-toggle="tooltip" data-bs-placement="right" title="Hello There">Click To See More</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- scrollspy -->


        <!-- service section starts -->



        <section id="services" class="service bg-light pt-3 mb-5">
            <div class="section-title text-center">
                <h2 class="heading ">Our Services</h2>
                <hr class="w-25 mx-auto">
            </div>

            <div class="container mt-5">
                <div class="row my-5">
                    <div class="col-lg-4 col-sm-12">
                        <div class="card mb-3 text-center">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-fluid card-img-top imgsize" src="img/792 (1).jpg" alt="img/792 (1).jpg">
                                </div>
                                <div class=" m-auto">
                                    <div class="card-body">
                                        <h3 class="card-title">Awesome Wild</h3>
                                        <p class="card-text text-muted">Parasyte is a Japanese science fiction horror manga series written and illustrated by Hitoshi Iwaaki and published in
                                            Kodansha's Morning Open Z??kan and Monthly Afternoon magazine from 1988 to 1995. The manga was published in North America
                                            by first Tokyopop, then Del Rey, and finally Kodansha Comics.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-12 my-sm-5 my-lg-0">
                        <div class="card mb-3 text-center">
                            <div class="row ">
                                <div class="col-md-4">
                                    <img class="img-fluid card-img-top imgsize" src="img/breno-machado-in9-n0JwgZ0-unsplash.jpg" alt="img/792 (1).jpg">
                                </div>
                                <div class=" m-auto">
                                    <div class="card-body">
                                        <h3 class="card-title">Awesome Wild Storm</h3>
                                        <p class="card-text text-muted">Parasyte is a Japanese science fiction horror manga series written
                                            and illustrated by Hitoshi Iwaaki and published in
                                            Kodansha's Morning Open Z??kan and Monthly Afternoon magazine from 1988 to 1995. The manga was
                                            published in North America
                                            by first Tokyopop, then Del Rey, and finally Kodansha Comics.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 20 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-12">
                        <div class="card mb-3 text-center">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-fluid card-img-top imgsize" src="img/1188141.jpg" alt="img/792 (1).jpg">
                                </div>
                                <div class=" m-auto">
                                    <div class="card-body">
                                        <h3 class="card-title">Awesome Wild Sunny</h3>
                                        <p class="card-text text-muted">Parasyte is a Japanese science fiction horror manga series written
                                            and illustrated by Hitoshi Iwaaki and published in
                                            Kodansha's Morning Open Z??kan and Monthly Afternoon magazine from 1988 to 1995. The manga was
                                            published in North America
                                            by first Tokyopop, then Del Rey, and finally Kodansha Comics.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 53 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-primary buttonplace mt-5 btn-lg cardbutton" data-bs-toggle="tooltip" data-bs-placement="right" title="Thanks For Clicking">Click To See More</button>
                    </div>
                </div>
            </div>
            </div>
        </section>


        <!-- gallery section starts -->


        <section id="gallery" class="gallery  bg-secondaryy pt-3 mb-5">
            <div class="section-title text-center">
                <h2 class="heading ">Gallery</h2>
                <hr class="w-25 mx-auto">
            </div>




            <div class="container mt-5">
                <div class="row gy-4 gx-5">

                    <div class="col-lg-4 col-md-6 mx-auto ">
                        <figure>
                            <img class="img-fluid imgset" src="img/5 (3).jpg" alt="img/5 (3).jpg">
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <figure>
                            <img class="img-fluid imgset" src="img/5 (3).png" alt="img/5 (3).png">
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <figure>
                            <img class="img-fluid imgset " src="img/wp3790938-anime-aesthetic-wallpapers.jpg" alt="img/5 (3).jpg">
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <figure>
                            <img class="img-fluid imgset" src="img/5 (5).jpg" alt="img/5 (3).jpg">
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <figure>
                            <img class="img-fluid imgset" src="img/wp3790943-anime-aesthetic-wallpapers.jpg" alt="img/5 (3).jpg">
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <figure>
                            <img class="img-fluid imgset" src="img/wp3790965-anime-aesthetic-wallpapers.jpg" alt="img/5 (3).jpg">
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <figure>
                            <img class="img-fluid imgset" src="img/wp3791006-anime-aesthetic-wallpapers.jpg" alt="img/5 (3).jpg">
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <figure>
                            <img class="img-fluid imgset" src="img/1193275.jpg" alt="img/5 (3).jpg">
                        </figure>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <figure>
                            <img class="img-fluid imgset" src="images/10.jpg" alt="img/5 (3).jpg">
                        </figure>
                    </div>
                </div>
            </div>
        </section>



        <!-- project section starts -->



        <section id="projects" class="mt-5">
            <div class="section-title text-center">
                <h2 class="heading ">Projects</h2>
                <hr class="w-25 mx-auto">
            </div>

            <div class="container mt-5 m-auto">
                <div class="row  ">
                    <div class="col-lg-12 col-sm-10 col py-5 text-center mx-auto">
                        <h2>About Our Projects</h2>
                        <p class="pclass m-auto">Our website developers provide expert web application development and web design services to our clients. Appnovation
                            offers a variety of website design and development services, from creating mobile web development solutions and
                            responsive website designs, to building custom e-commerce and intranet experiences using the latest and proven web
                            technologies</p>
                        <button type="button" class="btn btn-primary buttonplace mt-5 btn-lg cardbutton probut" data-bs-toggle="tooltip" data-bs-placement="right" title="Thanks For Clicking" link>Click To See More</button>
                    </div>



                    <h3 class="projectheader col-sm-12  mx-auto">New World</h3>
                    <div class="row">


                        <div class="col-lg-6 col-sm-12 ">
                            <figure><img class="img-fluid" src="project img/2021-04-05 (1).png" alt=""></figure>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <figure><img class="img-fluid" src="project img/2021-04-06.png" alt=""></figure>
                        </div>
                    </div>
                    <h3 class="projectheader mx-auto">Working Template</h3>
                    <div class="row">

                        <div class="col-lg-4 col-sm-12">
                            <figure><img class="img-fluid" src="project img/2021-04-05 (3).png" alt=""></figure>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <figure><img class="img-fluid" src="project img/2021-04-05 (4).png" alt=""></figure>
                        </div>


                        <div class="col-lg-4 col-sm-12">
                            <figure><img class="img-fluid" src="project img/2021-04-05 (5).png" alt=""></figure>
                        </div>

                    </div>

                </div>
            </div>

        </section>



        <!-- contact us section starts -->



        <section id="contact-us" class="">

            <div class="section-title text-center">
                <h2 class="heading mb-5 ">Contact Us</h2>
                <hr class="w-25 mx-auto">
            </div>

            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">

                        <form action="/website%20using%20bs5/Website%20Using%20Bs5.php" method="POST" class="was-validated w-50 m-auto formcls">
                            <div class="form-group mt-5">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="cpassword">Confirm Password</label>
                                <input type="cpassword" class="form-control" id="cpassword" name="cpassword" placeholder="Password">
                            </div>

                            <!-- radio button -->
                            <div class="form-group radio-button my-5">
                                <label class="mb-3" for="inputgender4">Gender</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Others</label>
                                </div>
                            </div>


                            <!-- radio button -->


                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>


                            <div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                            </div>


                            <div class="form-row ">
                                <div class="form-group">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>

                                <div class="form-group">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>

                                <div class="form-group ">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>

                            </div>

                            <div class="form-group ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label text-white" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <input type="submit" class="btn signbut " value="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <input type="reset" class="btn signbut" value="reset" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            </div>

                        </form>

                    </div>
                </div>

        </section>

        <?php
        if($showaleart){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong class="alrfor">your feedback has been successfully reached the owner</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';}

     else{echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong class="alrfor">failed! please put a valid email and password</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';}

        ?>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-capitalize">Hey there how are you doing hope you are doing awesome do you like this template? if you are
                            thank you so much</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info text-white">Save changes</button>
                        <input type="text" class="form-control" placeholder="Place your name ">
                    </div>
                </div>
            </div>
        </div>



        <!-- footer section starts -->


        <footer class="footersection">
            <div class="footer text-white text-center">
                <div class="row">
                    <div class="col-lg-6">

                        <p class="small mb-0 mt-1">&copy; copyright Hasan Bijoy</p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <a href="#">Home</a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                        <a href=""><i class="fab fa-pinterest"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-google-plus"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-discord"></i></a>
                    </div>
                </div>
        </footer>



        <script src="js/bootstrap.bundle.js"></script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!-- Bootstrap tooltip -->
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>


        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->

</body>

</html>