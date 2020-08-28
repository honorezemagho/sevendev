<!DOCTYPE html>
<html lang="en">

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Seven Dev Com</title>
    <!--typejs cdn-->
    <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>

    <!-- Basic SEO -->
    <meta name="description" content="Creative website development with html5, css3, jQuery & bootstrap framework">
    <meta name="keywords"
          content="HTML5, CSS3, JQuery, Bootstrap, Web Design, Web Development, Responsive website, Creative website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/logo.jpeg">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">

    <!-- Botstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.theme.default.min.css') }}">

    <!-- Responsive Tabs CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive-tabs/responsive-tabs.min.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup/magnific-popup.min.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate/animate.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- slide CSS -->
    <link rel="stylesheet" href="{{ asset('css/slide.css') }}">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

<!-- Header -->
<header>
  <!-- Navigation -->
  <nav class="nav navbar navbar-expand-lg static-top navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand smooth-scroll" href="#home">
          <img src="./images/Seven Dev Community logo@2x.png" width="150" alt="seven dev logo">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link smooth-scroll" href="#home">Home
                <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link smooth-scroll" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link smooth-scroll" href="#events">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link smooth-scroll" href="#projects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Membership/Partnership</a>
        </li>
        <li class="nav-item">
          <a class="nav-link smooth-scroll" href="#blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link smooth-scroll" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
            <a  href="#">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <!-- <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button> -->
                 </form>
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<!-- Header Ends -->

<!-- Home -->
<section id="home">

    <!-- Background Video -->
    <video id="home-bg-video" poster="video/solo.jpg" autoplay loop muted>
        <source src="video/solo.mp4" type="video/mp4">
    </video>

    <!-- Overlay -->
    <div id="home-overlay"></div>

    <!-- Home Content -->
    <div id="home-content">

        <div id="home-content-inner" class="text-center">

            <div id="home-heading">
                <h1 id="home-heading-1" id="typeit">Seven Dev</h1><br>
                <div class="span">
                        <span class="span-hr-left">
                            <hr />
                            <hr />
                        </span>
                    <h1 id="home-heading-2"> <span>Community</span></h1>
                    <span class="span-hr-right">
                            <hr />
                            <hr />
                        </span>


                </div>
                <!-- <h1 id="home-heading-2"> <span>Organization</span></h1> -->
            </div>

            <div id="home-text">
                <p><span id="first">We Think</span>, <span id="second">We Code</span>,<span id="third"> We Change
                            The
                            World</span></p>
            </div>

            <div class="container">
                <div class="row wow fadeInUp display" data-wow-duration="2s">

                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 01 -->
                        <div class="stats-item text-center">
                            <i class="fa fa-bar-chart"></i>
                            <h3 class="counter">1</h3>
                            <p>Month Existance</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 02 -->
                        <div class="stats-item text-center">
                            <i class="fa fa-codepen"></i>
                            <h3 class="counter">1</h3>
                            <p>Events Held</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 03 -->
                        <div class="stats-item text-center">
                            <i class="fa fa-trophy"></i>
                            <h3 class="counter">0</h3>
                            <p>Projects Completed</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 04 -->
                        <div class="stats-item text-center">
                            <i class="fa fa-users"></i>
                            <h3 class="counter">20</h3>
                            <p>Dev Members</p>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <!-- Arrow Down -->
    <a href="#about" id="arrow-down" class="smooth-scroll">
        <i class="fa fa-angle-down"></i>
    </a>

</section>
<!-- Home Ends -->

<!-- About -->
<section id="about">

    <!-- About 01 -->
    <div id="about-01">

        <div class="content-box-lg">

            <div class="container">

                <div class="row">

                    <!-- About Left Side -->
                    <div class="col-md-6 col-sm-6 wow slideInLeft" data-wow-duration="1s">

                        <div id="about-left">
                            <div class="vertical-heading">
                                <h5>Who We Are</h5>
                                <h2>A <strong>Story</strong><br>About Us</h2>
                            </div>
                        </div>

                    </div>

                    <!-- About Right Side -->
                    <div class="col-md-6 col-sm-6 wow slideInRight" data-wow-duration="1s">

                        <div id="about-right">
                            <p>It is a community of developers under the umbrella of Seven Advanced Academy
                                that brings together people from various backgrounds with diverse experiences aimed
                                at collectively generating solutions to common problems. Typically aiming to build a
                                stronger
                                and more resilient community.</p>

                            <p>Inspire, Discipline, Motivate. ~ Seven Advanced Academy </p>

                            <p>Innovating the Obvious. ~ Seven Global Procurement and Sourcing (GPS) </p>
                        </div>

                    </div>

                </div>

                <!-- About Bottom -->
                <div class="row">

                    <div class="col-md-12 wow fadeInUp" data-wow-duration="2s">

                        <div id="about-bottom">
                            <img src="img/about/about.png" alt="About Us" class="img-responsive">
                            <img src="images/sevDev1.jpg" alt="About Us" class="img-responsive about-open">
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- About 01 Ends -->

    <!-- About 02 -->
    <div id="about-02">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-sm-4 wow fadeInLeft">
                        <!-- About item 01 -->
                        <div class="about-item text-center">
                            <i class="fa fa-rocket"></i>
                            <h3>Mission</h3>
                            <hr>
                            <p style="font-size: 18px;">Bringing together young minds that will collectively ponder
                                on the challenges faced by their
                                community and provide reliable, long lasting solutions using IT</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="2s">
                        <!-- About item 02 -->
                        <div class="about-item text-center">
                            <i class="fa fa-eye"></i>
                            <h3>Vision</h3>
                            <hr>
                            <p style="font-size: 18px;">We think, we code, we change the world! With our brilliant
                                ideas,
                                we critically think on lasting solutions, changes and improvements in our nation,
                                and the world at large.</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4  wow fadeInRight">
                        <!-- About item 03 -->
                        <div class="about-item text-center">
                            <i class="fa fa-pencil"></i>
                            <h3>Passion</h3>
                            <hr>
                            <p style="font-size: 18px;">We link various developers so as to encourage learning,
                                resource sharing and growth.
                                We are passionate at seeing developers bring out the best of them.</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- About 02 Ends -->

</section>
<!-- About Ends -->

<!-- Team -->
<section id="team">

    <div class="content-box-lg">

        <div class="container">

            <!-- Team Members -->
            <div class="row">

                <!-- Team Left Side -->
                <div class="col-md-6 col-sm-6 wow slideInLeft" data-wow-duration="1s">

                    <div id="team-left">

                        <div class="vertical-heading">
                            <h5>Who We Are</h5>
                            <h2>Meet Our<br><strong>Leading</strong> Team</h2>
                        </div>
                        <p style="font-size: 18px;">Our team works deligently to help bring developers together
                            and plan on how events should be carried out.</p>

                    </div>

                </div>

                <!-- Team Right Side -->
                <div class="col-md-6 col-sm-6 wow slideInRight" data-wow-duration="1s">

                    <div id="team-members" class="owl-carousel owl-theme">

                        <!-- Member 01 -->
                        <div class="team-member">
                            <img src="./images/noel.jpg" alt="team member" class="img-responsive"
                                 style="height: 220px;">
                            <div class="team-member-overlay">
                                <div class="team-member-info text-center">
                                    <h6>Mr. Fon Noel Nfebe</h6>
                                    <p>Director of Learning</p>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- Member 02 -->
                        <div class="team-member">
                            <img src="./images/olouge.jpg" alt="team member" class="img-responsive"
                                 style="height: 220px;">
                            <div class="team-member-overlay">
                                <div class="team-member-info text-center">
                                    <h6>Mr. Olouge Eya</h6>
                                    <p>Director Of Seven Dev Community</p>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- Member 03 -->
                        <div class="team-member">
                            <img src="images/noella.jpg" alt="team member" class="img-responsive"
                                 style="height: 220px;">
                            <div class="team-member-overlay">
                                <div class="team-member-info text-center">
                                    <h6>Miss Mbongeya Noella</h6>
                                    <p>Community Mentor</p>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- Member 04 -->
                        <div class="team-member">
                            <img src="./images/eric.jpg" alt="team member" class="img-responsive"
                                 style="height: 220px;">
                            <div class="team-member-overlay">
                                <div class="team-member-info text-center">
                                    <h6>Mr. Bochu Yunwen Eric</h6>
                                    <p>Community Manager</p>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- Member 05 -->
                        <div class="team-member">
                            <img src="images/linelle.jpg" alt="team member" class="img-responsive"
                                 style="height: 220px;">
                            <div class="team-member-overlay">
                                <div class="team-member-info text-center">
                                    <h6>Miss Kamthie Lontchi Lionelle</h6>
                                    <p>Women Lead</p>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <!-- Member 06 -->
                        <div class="team-member">
                            <img src="./images/joy.jpg" alt="team member" class="img-responsive"
                                 style="height: 220px;">
                            <div class="team-member-overlay">
                                <div class="team-member-info text-center">
                                    <h6>Miss Mambo Joy</h6>
                                    <p>Co-Organiser</p>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <!-- Member 07 -->
                        <div class="team-member">
                            <img src="images/christian.jpeg" alt="team member" class="img-responsive"
                                 style="height: 220px;">
                            <div class="team-member-overlay">
                                <div class="team-member-info text-center">
                                    <h6>Mr. Sange Christian Nji</h6>
                                    <p>Co-Organiser</p>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div id="progress-elements">

                <!-- Progress Bars -->
                <div class="row wow fadeInUp">

                    <div class="col-md-6 col-sm-6">

                        <!-- Skill 01 -->
                        <div class="skill">
                            <h4>HTML/CSS</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 0%;">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6">
                        <!-- Skill 02 -->
                        <div class="skill">
                            <h4>PHYTHON</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 0%;">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <!-- Skill 03 -->
                        <div class="skill">
                            <h4>PHP</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 0%;">
                                    <span>85%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <!-- Skill 04 -->
                        <div class="skill">
                            <h4>JavaScript</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 0%;">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>



    </div>

</section>
<!-- Team Ends -->

<!-- Statement -->
<section id="statement">

    <div class="content-box-lg">

        <div class="container">

            <div class="row">

                <div class="col-md-12 wow fadeIn">

                    <div id="tech-statement" class="text-center">

                        <h3><i class="fa fa-quote-left"></i> Positively influencing and educating people on how
                            technology can be used
                            in solvng challenges in order to improve productivity, social life and the standards of
                            living <i class="fa fa-quote-right"></i> </h3>
                        <p>- Sev Dev Team -</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Statement Ends -->

<!-- Services -->
<section id="">

    <!-- Services 01 -->
    <div id="events">
        <div class="content-box-lg">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center wow slideInDown">

                        <div class="horizontal-heading">
                            <h5>What We Do</h5>
                            <h2>Our Events</h2>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-7 col-sm-7 wow slideInLeft">
                        <img src="images/coding.jpg" alt="students coding in class" class="img-responsive">
                    </div>
                    <div class="col-md-5 col-sm-5 wow slideInRight">

                        <!-- Service 02 -->
                        <div class="service">
                            <div class="row">

                                <div class="col-md-2 col-sm-2">
                                    <div class="icon text-right">
                                        <i class="fa fa-laptop"></i>
                                    </div>
                                </div>

                                <div class="col-md-10 col-sm-10">
                                    <h5><a href="services/service2.html"
                                           style="text-decoration: none; color: #f89623;">Indoor Event</a></h5>
                                    <h4>EVENTS ON CAMPUS</h4>
                                    <p>The Seven Dev Community Carries out Events such as Allnights of Code, Seven
                                        Dev Challenge and Seven Hackathons</p>
                                </div>

                            </div>
                        </div>

                        <!-- Service 03 -->
                        <div class="service">
                            <div class="row">

                                <div class="col-md-2 col-sm-2">
                                    <div class="icon text-right">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </div>
                                </div>

                                <div class="col-md-10 col-sm-10">
                                    <h5><a href="services/service3.html"
                                           style="text-decoration: none; color: #f89623;">Outreaches</a></h5>
                                    <h4>Events Off Campus</h4>
                                    <p>Visits to School for Orientation, Hackathons with other dev communities and
                                        Conferences.</p>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- Services 01 Ends -->

    <!-- Services 02 -->
    <div id="projects">

        <div class="content-box-md">

            <div id="services-tabs">

                <ul class="text-center">
                    <li><a href="#service-tab-1">Ongoing Project</a></li>
                    <li><a href="#service-tab-2">Todo Projects</a></li>
                    <li><a href="#service-tab-3">Membership</a></li>
                    <li><a href="#service-tab-4">Call For Support</a></li>
                </ul>

                <!-- Service Tab 01 -->
                <div id="service-tab-1" class="service-tab">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="slideshow-container">

                                    <div class="mySlides fade">
                                        <div class="numbertext">1 / 7</div>
                                        <img src="images/mentors.jpg" style="width:100%">
                                        <div class="text">Caption Text</div>
                                    </div>

                                    <div class="mySlides fade">
                                        <div class="numbertext">2 / 7</div>
                                        <img src="images/member.jpg" style="width:100%">
                                        <div class="text">Caption Two</div>
                                    </div>

                                    <div class="mySlides fade">
                                        <div class="numbertext">3 / 7</div>
                                        <img src="images/20200526_130122.jpg" style="width:100%">
                                        <div class="text">Caption Three</div>
                                    </div>

                                    <div class="mySlides fade">
                                        <div class="numbertext">4 / 7</div>
                                        <img src="images/donacien.jpg" style="width:100%">
                                        <div class="text">Caption Four</div>
                                    </div>

                                    <div class="mySlides fade">
                                        <div class="numbertext">5 / 7</div>
                                        <img src="images/coding.jpg" style="width:100%">
                                        <div class="text">Caption Five</div>
                                    </div>

                                    <div class="mySlides fade">
                                        <div class="numbertext">6 / 7</div>
                                        <img src="images/sevDev1.jpg" style="width:100%">
                                        <div class="text">Caption Six</div>
                                    </div>

                                    <div class="mySlides fade">
                                        <div class="numbertext">7 / 7</div>
                                        <img src="images/20200213_163858.jpg" style="width:100%">
                                        <div class="text">Caption Seven</div>
                                    </div>
                                </div>
                                <br>

                                <div style="text-align:center">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tab-bg">
                                    <h2>01</h2>
                                    <h3>Get More From Life With Innovative Ideas.</h3>
                                    <p style="font-size: 18px;">Our Member put in effort in Bringing out innovative
                                        Idea to solve
                                        problems they find in their community.
                                    </p>
                                    <p style="font-size: 18px;">Quote by community mentor</p>
                                    <h4>Miss Mbongeya Noella</h4>

                                    <!-- <div id="services-02-btn-01">
                                        <a class="btn btn-general btn-yellow" href="#services" title="Get In Touch" role="button">Get In Touch</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Service Tab 02 -->
                <div id="service-tab-2" class="service-tab">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/todoproject.jpg" alt="strategy">
                            </div>
                            <div class="col-md-6">
                                <div class="tab-bg">
                                    <h2>02</h2>
                                    <h3>Creative Ideas</h3>
                                    <p>
                                        The problems we find in our community are numerous, so we are gracefully and
                                        carefully working
                                        on each project one at a time.
                                    </p>
                                    <p>
                                        click on the button bellow to suggest a project we can work on
                                    </p>

                                    <div id="services-02-btn-02">
                                        <a class="btn btn-general btn-yellow" href="#" title="suggest"
                                           role="button">Add a proposal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Service Tab 03 -->
                <div id="service-tab-3" class="service-tab">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/member.jpg" alt="a member">
                            </div>
                            <div class="col-md-6">
                                <div class="tab-bg">
                                    <h2>03</h2>
                                    <h3>Our Members</h3>
                                    <p>
                                        Young dynamic programmers of Seven Advanced Academy, Seven Group, Cameroon
                                        and even across
                                        the globe who have the passion of innovatively solving problems via
                                        technology.
                                        Aslo they want to see the growth of one another in the world of technology.
                                    </p>

                                    <p>
                                        click the link if you are interested in becoming a member
                                    </p>
                                    <div id="services-02-btn-03">
                                        <a class="btn btn-general btn-yellow" href="#services" title="signUpS"
                                           role="button">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Service Tab 04 -->
                <div id="service-tab-4" class="service-tab">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/mentors.jpg" alt="those we look upto">
                            </div>
                            <div class="col-md-6">
                                <div class="tab-bg">
                                    <h2>04</h2>
                                    <h3>Our Support Team</h3>
                                    <p>
                                        For Seven Dev Community to grow and successfully impact lives, it needs
                                        support. Here are those who support us
                                        as <strong>Mentors, Donors, Patrons, Matrons</strong>. We are so grateful
                                        for their
                                        involvement.
                                    </p>
                                    <p>
                                        Interested in joining these team of wonderful people, click on the link
                                        below.
                                    </p>

                                    <div id="services-02-btn-04">
                                        <a class="btn btn-general btn-yellow" href="#services" title="signUp"
                                           role="button">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- Services 02 Ends -->

</section>
<!-- Services Ends -->

<!-- Portfolio -->
<section id="portfolio">

    <div class="content-box-md">

        <div class="container">

            <div class="row">

                <div class="col-md-12 wow slideInLeft">

                    <div class="vertical-heading">
                        <h5>Find Out Work</h5>
                        <h2>Our <br>Amazing <strong>Work</strong></h2>
                    </div>

                </div>

                <div class="col-md-12">

                    <!-- Portfolio Items Filters -->
                    <div id="isotope-filters">

                        <button class="btn active" data-filter="*"><span>Gallery</span></button>
                        <button class="btn" data-filter=".project"><span>Project ShowCase</span></button>
                        <button class="btn" data-filter=".ongoing"><span>Ongoing Projects</span></button>
                        <button class="btn" data-filter=".member"><span>Members</span></button>
                        <button class="btn" data-filter=".mentor"><span>Mentors</span></button>


                    </div>

                </div>

            </div>

        </div>

        <!-- Portfolio Items Wrapper -->
        <section id="portfolio-wrapper" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

            <div class="container-fluid">

                <div class="row no-gutters">

                    <div id="isotope-container">

                        <div class="col-md-3 col-sm-6 col-xs-12 desktop">

                            <!-- Portfolio Item 01 -->
                            <div class="portfolio-item">

                                <!-- <a href="descriptionimg/image1.html" title="Add Description"> -->
                                <img src="images/20200213_163858.jpg" class="img-responsive" alt="portfolio 01">

                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">

                                        <!-- Item Header -->
                                        <h3>Mentor</h3>

                                        <!-- Item Strips -->
                                        <span></span>

                                        <!-- Item Description -->
                                        <p>Madam Estelle Yomba</p>

                                    </div>

                                </div>
                                </a>

                            </div>

                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 mentor">
                            <!-- Portfolio Item 02 -->
                            <div class="portfolio-item">

                                <a href="descriptionimg/image2.html" title="Add Description">
                                    <img src="images/20200317_144702.jpg" class="img-responsive" alt="portfolio 02">

                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">

                                            <!-- Item Header -->
                                            <h3>Member</h3>

                                            <!-- Item Strips -->
                                            <span></span>

                                            <!-- Item Description -->
                                            <p>Mbongeya Noella</p>

                                        </div>

                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 member">
                            <!-- Portfolio Item 03 -->
                            <div class="portfolio-item">

                                <a href="descriptionimg/image3.html" title="Add Description">
                                    <img src="images/20200526_125825.jpg" class="img-responsive" alt="portfolio 03">
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!-- Item Header -->
                                            <h3>
                                                Projection
                                            </h3>
                                            <!-- Item Strips -->
                                            <span></span>
                                            <!-- Item Description -->
                                            <p>
                                                Ongoing Class
                                            </p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 ongoing">
                            <!-- Portfolio Item 04 -->
                            <div class="portfolio-item">

                                <a href="descriptionimg/image4.html" title="Add Description">
                                    <img src="images/20200522_125143.jpg" class="img-responsive" alt="portfolio 04">
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!-- Item Header -->
                                            <h3>
                                                Reception
                                            </h3>
                                            <!-- Item Strips -->
                                            <span></span>

                                            <!-- Item Description -->
                                            <p>
                                                Seven Academy
                                            </p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 *">
                            <!-- Portfolio Item 05 -->
                            <div class="portfolio-item">

                                <a href="descriptionimg/image5.html" title="Add Description">
                                    <img src="images/20200325_131611.jpg" class="img-responsive" alt="portfolio 05">
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!-- Item Header -->
                                            <h3>
                                                Mambo Joy
                                            </h3>
                                            <!-- Item Strips -->
                                            <span></span>
                                            <!-- Item Description -->
                                            <p>
                                                Member
                                            </p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 member">
                            <!-- Portfolio Item 06 -->
                            <div class="portfolio-item">

                                <a href="descriptionimg/image6.html" title="Add Description">
                                    <img src="images/20200526_130246.jpg" class="img-responsive" alt="portfolio 06">
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!-- Item Header -->
                                            <h3>
                                                Lontchi Lionelle
                                            </h3>
                                            <!-- Item Strips -->
                                            <span></span>
                                            <!-- Item Description -->
                                            <p>
                                                Member
                                            </p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 member">
                            <!-- Portfolio Item 07 -->
                            <div class="portfolio-item">

                                <a href="descriptionimg/image7.html" title="Add Description">
                                    <img src="images/20200528_130559.jpg" class="img-responsive" alt="portfolio 07">

                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!-- Item Header -->
                                            <h3>
                                                Lionelle
                                            </h3>
                                            <!-- Item Strips -->
                                            <span></span>
                                            <!-- Item Description -->
                                            <p>
                                                Member
                                            </p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 member">
                            <!-- Portfolio Item 08 -->
                            <div class="portfolio-item">

                                <a href="descriptionimg/image8.html" title="Add Description">
                                    <img src="images/20200630_111800.jpg" class="img-responsive" alt="portfolio 08">
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!-- Item Header -->
                                            <h3>
                                                Students
                                            </h3>
                                            <!-- Item Strips -->
                                            <span></span>
                                            <!-- Item Description -->
                                            <p>
                                                Seven Academy
                                            </p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

</section>
<!-- Portfolio Ends -->

<!-- Testimonials -->
<section id="testimonials">

    <div class="container">

        <div class="row">

            <div class="col-md-4 col-sm-4 wow slideInLeft">

                <div class="vertical-heading">
                    <h5>Who We Are</h5>
                    <h2>What Our <br><strong>Members</strong> Say</h2>
                </div>

            </div>

            <div class="col-md-8 col-sm-8 wow fadeIn" data-wow-duration="2s">

                <div id="testimonial-slider" class="owl-carousel owl-theme">

                    <!-- Testimonial 01 -->
                    <div class="testimonial">

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3>Quality Support</h3>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="stars text-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <p style="font-size: 18px;">Seven Dev Community and its activities have helped me to be the
                            best of me
                            at coding. With the Allnights of codes, I have bbuild the culture of waking up late at
                            night and spending more
                            time in coding
                        </p>

                        <div class="author">

                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-6">
                                    <img src="images/donacien.jpg" alt="client" class="img-responsive img-circle">
                                </div>
                                <div class="col-md-10 col-sm-3 col-xs-6">
                                    <div class="author-name-des">
                                        <p>Awah Donacien</p>
                                        <p>Seven Advanced Academy</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Testimonial 02 -->
                    <div class="testimonial">

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3>Quality Support</h3>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="stars text-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <p style="font-size: 18px;">Every low-income teen and his dream have always been as far as T
                            from D. When People, resources and opportunities intersect, there are only 2 words to
                            describe the phenomenon; Open Drams</p>

                        <div class="author">

                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-6">
                                    <img src="img/testimonial/client-2.jpg" alt="client"
                                         class="img-responsive img-circle">
                                </div>
                                <div class="col-md-10 col-sm-3 col-xs-6">
                                    <div class="author-name-des">
                                        <p>John Jende</p>
                                        <p>African Leadership Academy</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Testimonial 03 -->
                    <div class="testimonial">

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3>Quality Support</h3>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="stars text-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem
                            quas totam, delectus sit corporis quos error qui. Minus cupiditate explicabo minima ea
                            neque perferendis corporis sint earum quas impedit.</p>

                        <div class="author">

                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-6">
                                    <img src="img/testimonial/client-3.jpg" alt="client"
                                         class="img-responsive img-circle">
                                </div>
                                <div class="col-md-10 col-sm-3 col-xs-6">
                                    <div class="author-name-des">
                                        <p>Nyaba peace</p>
                                        <p>University of Botswana</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Testimonials Ends -->

<!-- Stats -->
<section id="stats">

    <div class="content-box-md">

        <div class="container">

            <div class="row">

                <div class="col-md-12 wow slideInLeft">

                    <div class="vertical-heading">
                        <h5>Fun Facts</h5>
                        <h2>Our<br><strong>Excellent</strong> Growth</h2>
                    </div>

                </div>

            </div>

            <div class="row wow fadeInUp display" data-wow-duration="2s">

                <div class="col-md-3 col-sm-3 col-xs-6">

                    <!-- Stats Item 01 -->
                    <div class="stats-item text-center">
                        <i class="fa fa-bar-chart"></i>
                        <h3 class="counter">1</h3>
                        <p>Month Existance</p>
                    </div>

                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">

                    <!-- Stats Item 02 -->
                    <div class="stats-item text-center">
                        <i class="fa fa-codepen"></i>
                        <h3 class="counter">1</h3>
                        <p>Events Held</p>
                    </div>

                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">

                    <!-- Stats Item 03 -->
                    <div class="stats-item text-center">
                        <i class="fa fa-trophy"></i>
                        <h3 class="counter">0</h3>
                        <p>Projects Completed</p>
                    </div>

                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">

                    <!-- Stats Item 04 -->
                    <div class="stats-item text-center">
                        <i class="fa fa-users"></i>
                        <h3 class="counter">20</h3>
                        <p>Dev Members</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Stats Ends -->

<!-- Clients -->
<section id="clients">

    <div class="content-box-sm">

        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">

                    <div class="horizontal-heading">
                        <h2>Our <strong>Patners include:</strong></h2>
                    </div>

                </div>

            </div>

            <div class="row wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">

                <div class="col-md-12">

                    <div id="clients-list" class="owl-carousel owl-theme">

                        <!-- Client 01 -->
                        <div class="client">
                            <img src="./img/patnering_schools/1.png" class="img-responsive" alt="client">
                        </div>
                        <!-- Client 02 -->
                        <div class="client">
                            <img src="./img/patnering_schools/2.png" class="img-responsive" alt="client">
                        </div>
                        <!-- Client 03 -->
                        <div class="client">
                            <img src="./img/patnering_schools/3.png" class="img-responsive" alt="client">
                        </div>
                        <!-- Client 04 -->
                        <div class="client">
                            <img src="./img/patnering_schools/4.jpeg" class="img-responsive" alt="client">
                        </div>
                        <!-- Client 05 -->
                        <div class="client">
                            <img src="./img/patnering_schools/1.png" class="img-responsive" alt="client">
                        </div>
                        <!-- Client 06 -->
                        <div class="client">
                            <img src="./img/patnering_schools/2.png" class="img-responsive" alt="client">
                        </div>
                        <!-- Client 07 -->
                        <div class="client">
                            <img src="./img/patnering_schools/3.png" class="img-responsive" alt="client">
                        </div>
                        <!-- Client 08 -->
                        <div class="client">
                            <img src="./img/patnering_schools/4.jpeg" class="img-responsive" alt="client">
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Clients Ends -->

<!-- Blog -->
<section id="blog">

    <div class="content-box-md">

        <div class="container">

            <div class="row">

                <div class="col-md-5 col-sm-4 wow slideInLeft">

                    <div id="blog-left">

                        <div class="vertical-heading">
                            <h5>Latest News</h5>
                            <h2>Latest<br>From <strong>Blog</strong></h2>
                        </div>
                        <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Repudiandae cum itaque explicabo nulla quaerat id commodi voluptatem.</p>

                        <div id="blog-btn">
                            <a class="btn btn-general btn-yellow" href="#" title="View All Posts" role="button">View
                                All Posts</a>
                        </div>

                    </div>

                </div>

                <div class="col-md-7 col-sm-8">

                    <div class="row wow fadeInUp" data-wow-duration="3s">

                        <div class="col-md-6 col-sm-6">

                            <!-- Blog Post 01 -->
                            <div class="blog-post">

                                <h4>Your Post Title</h4>
                                <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Cum officia minima ad eos. Dsit amet, consectetur adipisicing elit.</p>
                                <a href="#">Read More ></a>

                                <div class="post-meta">
                                    <div class="row">

                                        <div class="col-md-6 col-sm-8 col-xs-5">
                                            <p><img src="img/blog/user-1.jpg" alt="author" class="img-circle">
                                                Daniel Watrous</p>
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-7">
                                            <p class="text-right">October 02,2017</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6">

                            <!-- Blog Post 02 -->
                            <div class="blog-post">

                                <h4>Your Post Title</h4>
                                <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Cum officia minima ad eos. Dsit amet, consectetur adipisicing elit.</p>
                                <a href="#">Read More ></a>

                                <div class="post-meta">
                                    <div class="row">

                                        <div class="col-md-6 col-sm-8 col-xs-5">
                                            <p><img src="img/blog/user-2.jpg" alt="author" class="img-circle"> Johan
                                                Petter</p>
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-7">
                                            <p class="text-right">November 15,2017</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Blog Ends -->

<!-- Contact -->
<section id="contact">

    <div class="content-box-md">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <!-- Contact Left -->
                    <div id="contact-left">

                        <div class="vertical-heading">
                            <h5>Who We Are</h5>
                            <h2>Get<br>In <strong>Touch</strong></h2>
                        </div>
                        <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                            modi est itaque aliquam sit, minima esse nihil mollitia no.</p>

                        <div id="offices">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="office">
                                        <h4>Seven Advanced Academy</h4>
                                        <ul class="office-details">
                                            <li><i class="fa fa-mobile"></i><span>+237 658 06 69 82</span></li>
                                            <li><i
                                                    class="fa fa-envelope"></i><span>info@sevenadvancedacademy.com</span>
                                            </li>
                                            <li><i class="fa fa-map-marker"></i><span>Bali<br>Douala,
                                                        Cameroon.</span></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-md-6">


                                    <div class="office">
                                        <h4>Seven Dev Community</h4>
                                        <ul class="office-details">
                                            <li><i class="fa fa-mobile"></i><span>+237 675 18 75 68 </span></li>
                                            <li><i class="fa fa-envelope"></i><span>7devcom@gmail.com</span>
                                            </li>
                                            <li><i class="fa fa-map-marker"></i><span>Bali <br>Douala,
                                                        CMR.</span></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <ul class="social-list">
                            <li><a href="https://www.facebook.com/sevenadvancedacademy"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/7devC"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                    </div>

                </div>
                <div class="col-md-6">

                    <!-- Contact Right -->
                    <div id="contact-right">

                        <form>
                            <h4>Send Message</h4>
                            <p style="font-size: 18px;">Contact our team for any further questions or concerns.</p>

                            <div class="row">

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email"
                                               placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" placeholder="Phone No.">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Message"></textarea>
                            </div>

                            <div id="submit-btn">
                                <a class="btn btn-general btn-yellow" href="#" title="Submit"
                                   role="button">Submit</a>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Contact Ends -->

<!-- Google Map -->
<section id="google-map">
    <div class="container-fluid">
        <div class="row">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.891281272854!2d9.69340611408954!3d4.042602348139304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061138910bc3aff%3A0x7b5d5c6ad0bcf7f!2sSeven%20Advanced%20Academy!5e0!3m2!1sen!2scm!4v1595807578082!5m2!1sen!2scm"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="true"
                    aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>
    </div>
</section>
<!-- Google Map Ends -->

<!-- Footer  -->
<footer class="text-center">
    <div class="container  h-line">
        <div class="row">
            <div class="col-md-3 footer-logo">
                <img src="./images/Seven Dev Community logo@2x.png" height="100px" alt="">
                <h3>Follow Us</h3>

                <ul class="social-list">
                    <li><a href="https://www.facebook.com/sevenadvancedacademy"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://twitter.com/7devC"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>

            </div>
            <div class="col-md-3">
                <h3>Quick links</h3>
                <hr>
                <li>
                    <a class="smooth-scroll" href="#events">Event</a>
                </li>
                <li>
                    <a class="smooth-scroll" href="#projects">Projects</a>
                </li>
                <li>
                    <a class="smooth-scroll" href="/register">Membership/Partnership</a>
                </li>
                <li><a class="smooth-scroll" href="#about">About Us</a></li>
                <li><a class="smooth-scroll" href="#blog">Blogs</a></li>

            </div>
            <div class="col-md-3">
                <h3>upcoming events</h3>
                <hr>
                <li>
                    <a class="smooth-scroll" href="#events">Hackathons</a>
                </li>
                <li>
                    <a class="smooth-scroll" href="#projects">Dev challenges</a>
                </li>
                <li>
                    <a class="smooth-scroll" href="#membership">Workshops</a>
                </li>
            </div>
            <div class="col-md-3">
                <h3>updates</h3>
                <hr>
                <li>
                    <a class="smooth-scroll" href="#events">Hackathons</a>
                </li>
                <li>
                    <a class="smooth-scroll" href="#projects">Dev challenges</a>
                </li>
                <li>
                    <a class="smooth-scroll" href="#membership">Workshops</a>
                </li>
            </div>
        </div>
    </div>

        <div class="container h-line">
            <hr>
            <div class="row">

                <div class="col-md-12">
                    <p>
                        Copyright &copy; 2020 All Rights Reserved By <span>Seven Dev Community</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Back To Top -->
        <a href="#home" id="back-to-top"
           class="btn btn-sm btn-yellow btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home"
           role="button">
            <i class="fa fa-angle-up"></i>
        </a>

</footer>
<!-- Footer Ends -->

<!-- typejs -->
<script src="{{ asset('js/type.js') }}"></script>

<!-- JQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Bootsrtap CDN JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>


<!-- Owl Carousel JS -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

<!-- Waypoints -->
<script src="{{ asset('js/waypoints/jquery.waypoints.min.js') }}"></script>

<!-- Responsive Tabs JS -->
<script src="{{ asset('js/responsive-tabs/jquery.responsiveTabs.min.js') }}"></script>

<!-- Isotope -->
<script src="{{ asset('js/isotope/isotope.pkgd.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- Counter -->
<script src="{{ asset('js/counter/jquery.counterup.min.js') }}"></script>

<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9EdV2JfPG1Vfviw9gf_HlblIUfs7Ie2E"></script>

<!-- Easing -->
<script src="{{ asset('js/easing/jquery.easing.1.3.min.js') }}"></script>

<!-- WOW JS -->
<script src="{{ asset('js/wow/wow.min.js') }}"></script>

<!-- Custom JS -->>
<script src="{{ asset('js/script.js') }}"></script>

<!-- Slide JS -->
<script src="{{ asset('js/slide.js') }}"></script>
</body>

</html>
