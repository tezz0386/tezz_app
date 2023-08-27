<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{@$setting->meta_title}}</title>
  <meta name="description" content="{{@$setting->meta_description}}">
  <meta name="keywords" content="{{@$setting->meta_key_words}}">


  <title>Tejendra</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="h-100">
  <header id="header" class="main-header">
    <nav class="navbar navbar-expand-lg backgroud">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">TEJENDRA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown me-3">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link ">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <a href="#"><i class="fa-solid fa-magnifying-glass text-light"></i></a>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <div id="banner" class="main-banner position-relative">
    <div class="owl-carousel banner-slider">
      <div class="item">
        <div class="row">
          <div class="col-md-5">
            <div class="banner-content animate__animated animate__fadeInLeft">
              <h1>Minimalist at its finest.</h1>
              <p>Make your photos look brilliant in today’s article we present tips on how to use colored lightning in the scenery.</p>
              <a href="#" class="btn primary-bg text-light rounded-0">Get Started</a>
            </div>
          </div>
          <div class="col-md-7 text-end animate__animated animate__fadeInRight">
            <img src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/header-media.jpg" alt="Banner" class="banner-image">
          </div>
        </div>
      </div>
      <div class="item">
        <div class="row">
          <div class="col-md-5">
            <div class="banner-content">
              <h1>Minimalist at its finest.</h1>
              <p>Make your photos look brilliant in today’s article we present tips on how to use colored lightning in the scenery.</p>
              <a href="#" class="btn primary-bg text-light rounded-0">Get Started</a>
            </div>
          </div>
          <div class="col-md-7 text-end">
            <img src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/girl.jpg" alt="Banner" class="banner-image">
          </div>
        </div>
      </div>
      <div class="item">
        <div class="row">
          <div class="col-md-5">
            <div class="banner-content">
              <h1>Minimalist at its finest.</h1>
              <p>Make your photos look brilliant in today’s article we present tips on how to use colored lightning in the scenery.</p>
              <a href="#" class="btn primary-bg text-light rounded-0">Get Started</a>
            </div>
          </div>
          <div class="col-md-7 text-end">
            <img src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/header-media.jpg" alt="Banner" class="banner-image">
          </div>
        </div>
      </div>

    </div>
    <div class="banner-social">
      <ul>
        <li class="mb-2"><a href="#"><i class="fa-brands fa-facebook fs-4"></i></a></li>
        <li class="mb-2"><a href="#"><i class="fa-brands fa-twitter fs-4"></i></a></li>
        <li class="mb-2"><a href="#"><i class="fa-brands fa-linkedin fs-4"></i></a></li>
      </ul>
    </div>
  </div>
  <section id="service" class="our-service" data-aos="fade-up"
  data-aos-duration="3000">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-box p-5">
            <h2>UI/UX Design</h2>
            <p>Make your photos look brilliant in today’s article we present tips on how to use colored …</p>
            <a href="#" class="text-light text-decoration-none">Read More</a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-box p-5">
            <h2>UI/UX Design</h2>
            <p>Make your photos look brilliant in today’s article we present tips on how to use colored …</p>
            <a href="#" class="text-light text-decoration-none">Read More</a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="service-box p-5">
            <h2>UI/UX Design</h2>
            <p>Make your photos look brilliant in today’s article we present tips on how to use colored …</p>
            <a href="#" class="text-light text-decoration-none">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about-us" data-aos="fade-up"
  data-aos-duration="3000">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7">
          <h6>DESIGN SERVICES</h6>
          <h2>We Create Stylish <br> Designs.</h2>
          <p>Make your photos look brilliant in today’s article we present tips on how to use colored lightning in the
            scenery.</p>
          <ul class="experience">
            <li>
              <p>EXPERIENCE</p>
              <p>12+</p>
            </li>
            <li>
              <p>PROJECTS</p>
              <p>1202</p>
            </li>
          </ul>
        </div>
        <div class="col-md-5">
          <figure>
            <img src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/hero-content.jpg"
              alt="image" class="img-fluid">
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section id="video" class="my-video" data-aos="fade-up"
  data-aos-duration="3000">
    <figure class="position-relative">
      <img
        src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/promotional-video-bg.jpg"
        alt="video" class="img-fluid">
      <div class="position-absolute video-play">
        <a href="#"><i class="fa-solid fa-play fs-2 text-light"></i></a>
      </div>
    </figure>
  </section>

  <section id="projects" class="our-projects" data-aos="fade-up"
  data-aos-duration="3000">
    <div class="container-fluid">
      <div class="title-wrapper">
        <h6>CREATIVE TEAM</h6>
        <div class="d-flex justify-content-between align-items-center">
          <h2>We Create Spaces for <br> Better Living</h2>
          <a href="#">VIEW FULL TEAM</a>
        </div>
      </div>
      <div class="owl-carousel project-slider">
        <div class="item">
          <figure class="position-relative">
            <img src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/Cindy.jpg"
              alt="projects" class="img-fluid">
            <ul class="position-absolute hover-content">
              <li><a href="#"><i class="fa-solid fa-eye text-light fs-3"></i></a></li>
              <li><a href="#"><i class="fas fa-link text-light fs-3"></i></a></li>
            </ul>
          </figure>
          <h5>Project Name</h5>
          <h6>Good project</h6>
        </div>
        <div class="item">
          <figure class="position-relative">
            <img src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/Cindy.jpg"
              alt="projects" class="img-fluid">
            <ul class="position-absolute hover-content">
              <li><a href="#"><i class="fa-solid fa-eye text-light fs-3"></i></a></li>
              <li><a href="#"><i class="fas fa-link text-light fs-3"></i></a></li>
            </ul>
          </figure>
          <h5>Project Name</h5>
          <h6>Good project</h6>
        </div>
        <div class="item">
          <figure class="position-relative">
            <img src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/Cindy.jpg"
              alt="projects" class="img-fluid">
            <ul class="position-absolute hover-content">
              <li><a href="#"><i class="fa-solid fa-eye text-light fs-3"></i></a></li>
              <li><a href="#"><i class="fas fa-link text-light fs-3"></i></a></li>
            </ul>
          </figure>
          <h5>Project Name</h5>
          <h6>Good project</h6>
        </div>

      </div>
    </div>
  </section>

  <section id="testimonials" class="our-testimonials" data-aos="fade-up"
  data-aos-duration="3000">
    <div class="container-fluid">
      <div class="title-wrapper">
        <h6>TESTIMONIALS</h6>
        <div class="d-flex justify-content-between ">
          <h2>What Clients Say</h2>
          <a href="#">FULL TESTIMONIALS</a>
        </div>
      </div>
      <div class="owl-carousel testimonial-slider">
        <div class="item">

          <div class="clientsl-wrapper position-relative">
            <h6>John Doe</h6>
            <p>Creative Designer</p>
            <p>These guys are awesome! Each time I needed their help. their response was quick and very helpful. Also,
              the theme is very flexible. Five stars from me for everything! I truly recommend this theme.</p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section id="blog" class="our-blog" data-aos="fade-up"
  data-aos-duration="3000">
    <div class="container-fluid">
      <div class="title-wrapper">
        <h6> FEATURED CONTENT</h6>
        <div class="d-flex justify-content-between ">
          <h2>Our Most Popular Posts</h2>
          <a href="#">VIEW FULL POSTS</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="post-wrappper">
            <figure>
              <img
                src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/featured-post-1.jpg"
                alt="posts" class="img-fluid">
            </figure>
            <h2>Photography Lessons</h2>
            <p>Make your photos look brilliant in today’s article we present tips on …</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="post-wrappper">
            <figure>
              <img
                src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/featured-post-1.jpg"
                alt="posts" class="img-fluid">
            </figure>
            <h2>Photography Lessons</h2>
            <p>Make your photos look brilliant in today’s article we present tips on …</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="post-wrappper">
            <figure>
              <img
                src="https://demo.wenthemes.com/kelsey-pro/wp-content/themes/kelsey-pro/assets/images/featured-post-1.jpg"
                alt="posts" class="img-fluid">
            </figure>
            <h2>Photography Lessons</h2>
            <p>Make your photos look brilliant in today’s article we present tips on …</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="call-to-action" class="call-to-action " data-aos="fade-up"
  data-aos-duration="3000">
    <div class="container-fluid">
      <div class="d-flex justify-content-between">
        <h2>Express Your Creativity and Start Bulding Your Design</h2>
        <a href="#" class="btn">Start A Project</a>
      </div>
    </div>
  </section>

  <footer id="footer" class="main-footer" >
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <p>USA</p>
          <p>621 Hewes Avenue, Lincoln Heights</p>
          <p>Maryland, 21090</p>
        </div>
        <div class="col-md-4 text-start">
          <p>
            <a href="tel:981234567" class="text-light text-decoration-none">(+880) 123 3456 7890</a>
          </p>
          <p>
            <a href="mailto:abc@gmail.com" class="text-light text-decoration-none">info@companyname.com</a>
          </p>
        </div>
        <div class="col-md-4 text-end">
          <p>
            <a href="#" class="text-light text-decoration-none">Photography Highlights</a>
          </p>
          <p>
            <a href="#" class="text-light text-decoration-none">Ideas That’ll Brighten Your Day</a>
          </p>
        </div>
      </div>
      <div class="bottom-footer border-top">
        <p class="mt-4">Designed By &copy <a href="#" class="text-decoration-none text-muted">tntnabin.com</a></p>
      </div>
    </div>
    
  </footer>
  <a id="button"></a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>