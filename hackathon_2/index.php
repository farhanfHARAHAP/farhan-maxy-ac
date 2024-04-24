<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TBN</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
   <link rel="stylesheet" href="css/style.css">
   <style>
      .button {
         background-color: #327314;
         border: none;
         color: white;
         width: 110px;
         height: 40px;
         margin-left: 15px;
         padding: 8px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         font-weight: 500;
         cursor: pointer;
      }
      .button1 {
         border-radius: 20px;
      }
      .navbar-brand img {
         width: 150px;
      }
      @media  screen and (max-width: 800px) {
         .button {
            margin-left: 0px;
         }
      }
   </style>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B19W1Y01GX"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-B19W1Y01GX');
</script>

<body>    

    <section id="navbar" style="background-color: #333;">
        <nav class="navbar navbar-expand-lg sticky-top bg-transparent navbar-dark" id="navbar">
            <div class="container">
               <a class="navbar-brand" href="">
                  <img src="images/Logo TBN Indonesia.png" alt="Logo TBN Indonesia">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-TBN" aria-controls="navbar-TBN" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbar-TBN">
                  <div class="navbar-nav ms-auto">
                     <a class="nav-link mx-2 text-white" href="index.html">Home</a>
                     <a class="nav-link mx-3 text-white" href="#empowerment-homepage">Dampak</a>
                     <a class="nav-link mx-3 text-white" href="#about">About Us</a>
                     <a class="nav-link mx-3 text-white" href="#event-now">Event</a>
                     <a class="nav-link mx-3 text-white" href="#contact">Contact</a>
                     <a href="event.php" class="button" style="border-radius: 16px; border: 2px solid #C9D32C; background-color: #F5F5F5; color: #C9D32C;">Join Event </a>
                  </div>
               </div>
            </div>
         </nav>
    </section>

   <section id="banner-home" style="height: 280px;">
    <div class="bg-photo">
        <div class="position-absolute start-0 end-0 top-0 bottom-0">
            <div class="position-relative">
                <img src="images/tbn-banner.png" alt="" class="img-fluid" style="width: 100%">
                <div class="position-absolute d-none d-md-block text-center" style="top: 50%; left: 50%; transform: translate(-50%, -50%)">
                    <h1 class="text-light fw-600 mb-3" style="font-size: 48px">Join in Social Transformation</h1>
                    <h1 class="text-light fw-600 mb-3" style="font-size: 48px">with TBN Indonesia!</h1>
                    <p class="pa-5 text-light fw-400">TBN Indonesia invites you to join in the effort for positive and sustainable social transformation. Together, we can create meaningful change in society and build a brighter future for all.
                    </p>
                </div>
            </div>
        </div>
    </div>
   </section>

   <section id="about">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-0 order-1">
                <h1 class="head-1 text-light fw-600 mb-4">About TBN Indonesia</h1>
                <p class="body-2 fw-400 text-light mb-4">Lately, there has been a noticeable rise in collaborations between companies 
                    from diverse industries aimed at tackling environmental and social challenges. These partnerships blend unique perspectives 
                    and expertise to foster innovative solutions, spur progress, and generate positive impact.</p>
                <p class="body-2 fw-400 text-light mb-4">Through collective efforts, businesses 
                    can harness their resources and influence to build a more sustainable and fair world for future generations.</p>
            </div>
            <div class="col-lg-6 mb-lg-0 order-0 order-lg-1 mb-4">
                <div class="rounded-3 overflow-hidden">
                    <video width="100%" height="315" controls>
                        <source src="./media/TBN Indonesia Profile.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                </div>
            </div>
        </div>
    </div>
   </section>
   
   <section id="empowerment-homepage">
    <div class="bg-empowerment">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="rounded-3 overflow-hidden ps-5">
                        <img src="images/about-photos.png" alt="Gambar masyarakat" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="head-2 text-black-1 fw-600 mb-4">Why choose us?</h2>
                    <ul class="list-check">
                        <li class="body-1 fw-400 text-black-2 mb-3">It's Commitment to Social Transformation</li>
                        <li class="body-1 fw-400 text-black-2 mb-3">Impactful Innovation</li>
                        <li class="body-1 fw-400 text-black-2 mb-3">Strong Network</li>
                        <li class="body-1 fw-400 text-black-2 mb-3">Transparency and Accountability</li>
                        <li class="body-1 fw-400 text-black-2 mb-3">Experience and Expertise</li>
                        <li class="body-1 fw-400 text-black-2 mb-3">Adaptability and Innovation</li>
                    </ul>

                    <a href="" class="btn btn-green-2 head-6 fw-600 mt-2 rounded-3 px-5 mt-3">Check Now</a>
                </div>
            </div>
        </div>
    </div>
   </section>

   <section id="event-now" class="py-5" style="background-image: url('/images/Banner\ section\ event.png'); background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h2 class="fw-bold text-center mb-4">Event Now</h2>
            </div>
            <?php
            include 'connectDB.php';
            $sql = 'SELECT * FROM h2_events ORDER BY date DESC LIMIT 1';
            $result = mysqli_query($conn, $sql);  
            $data = mysqli_fetch_all($result);  
            ?>

            <?php
            foreach($data as $row){
            ?>
            <div class="col-lg-6">
                <div class="mb-4 text-center">
                    <img src="./images/event/<?= $row[5] ?>" alt="Banner" class="img-fluid" style="max-width: 300px; height: auto;">
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div class="center-content">
                    <h3 class="fw-bold"><?= $row[1] ?></h3>
                    <p class="text-start pt-5"><?= $row[2] ?></p>
                    <div class="mb-4 mt-4 d-flex">
                        <a href="event-details.php?id=<?= $row[0] ?>">
                            <button class="btn btn-success me-2">Lookup The Conference</button> 
                        </a>                                               
                    </div>
                    <a href="event.php">
                        <button class="btn btn-outline-dark mt-5" style="width: 420px; height: 60px;">See All Events</button>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
   </section>
   
   <section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 p-5 m-4" style="background-color: #F8FFD2;">
                <div class="text-center mb-4">
                    <img src="./images/image 34.png" alt="Gambar 1" width="230" height="170">
                </div>
                <h2 class="text-center pb-2">Investment</h2>
                <p class="text-center">Are you an entrepreneur seeking funding or an investor interested in joining our network? 
                    We function as a strategic bridge connecting entrepreneurs and investors in Indonesia, offering distinctive investment 
                    services tailored to meet the market's needs.</p>
            </div>
            <div class="col-md-5 p-5 m-4" style=" background-color: #F8FFD2;">
                <div class="text-center mb-4">
                    <img src="./images/image 33.png" alt="Gambar 2" width="230" height="170">
                </div>
                <h2 class="text-center pb-2">Advisory</h2>
                <p class="text-center">Utilizing its core network and expertise, we have established an advisory entity that provides a wide 
                    range of key services. These services include research, capacity building, on-demand consultation, and educational content 
                    creation, all aimed at creating a positive impact for our extensive beneficiaries.</p>
            </div>
        </div>
    </div>
   </section>

   <section>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <h2 class="text-center pb-2">Our Partners</h2>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Property 1=Carousel 1.png" class="d-block w-100" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="images/Property 1=Carousel 2.png" class="d-block w-100" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="images/Property 1=Carousel 3.png" class="d-block w-100" alt="Gambar 3">
            </div>
            <div class="carousel-item">
                <img src="images/Property 1=Carousel 4.png" class="d-block w-100" alt="Gambar 4">
            </div>
            <div class="carousel-item">
                <img src="images/Property 1=Carousel 5.png" class="d-block w-100" alt="Gambar 5">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   </section>
   
   <section class="banner-section" style="background-color: #F5F5F5;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 my-5">
                <img src="images/banner-footer.png" alt="Banner" class="img-fluid">
            </div>
        </div>
    </div>
   </section>

   <footer class="bg-light text-dark">
    <div class="container py-5">
        <div class="row">
           <div class="col-12 mb-3">
              <img src="images/logo footer.png" alt="Logo" style="max-width: 200px;">
           </div>
           <div class="col-md-6 col-lg-4">
              <div class="mb-5">
                 <p class="body-3 fw-400">Yayasan Sosial yang menaungi komunitas yang terdiri dari Investor, NGO, Educator, Philanthropy yang membawa 
                     transformasi kepada kehidupan yang lebih baik memecahkan masalah sosial melalui kewirausahaan sosial.  </p>
              </div>
           </div>
           <div class="col-md-6 col-lg-2 px-md-5 mb-md-0 mb-5">
              <h6 class="fw-600 mb-4">Lokasi</h6>
              <p class="body-2 my-3"><i class="fa-solid fa-location-dot me-2"></i> Jl. Nogotirto No. 15B, Gamping, Sleman, Daerah Istimewa Yogyakarta 55282</p>
           </div>
           <div class="col-md-6 col-lg-3 px-lg-5 mb-lg-0 mb-5">
              <h6 class="fw-600 mb-4">Perusahaan</h6>
              <a href="" class="nav-link text-decoration-none fw-500 my-3">About Me</a>
              <a href="" class="nav-link text-decoration-none fw-500 my-3">Event</a>
              <a href="" class="nav-link text-decoration-none fw-500 my-3">Contact Me</a>
           </div>
           <div class="col-md-6 col-lg-3 px-md-5 px-lg-0">
              <h6 class="fw-600 mb-4">Ikuti Sosial Media Kami</h6>
              <a href="" target="_blank" class="me-3"><img src="fonts/share-ig.svg" class="mb-3" alt="Instagram"></a>
              <a href="" target="_blank" class="me-3"><img src="fonts/yt.svg" class="mb-3" alt="YouTube"></a>
              <a href="" target="_blank" class="me-3"><img src="fonts/share-wa.svg" class="mb-3" alt="Whatsapp"></a>
              <a href="" target="_blank" class="me-3"><img src="fonts/gmail.svg" class="mb-3" alt="Gmail"></a>
              <a href="" target="_blank" class="me-3"><img src="fonts/linkedin.svg" class="mb-3 pt-4" alt="LinkedIn"></a>
              <h6 class="fw-600 mt-5 mb-4">Hubungi Kami</h6>
              <p class="body-2 my-3"><i class="fa-solid fa-envelope me-2"></i> tbnindonesia@gmail.com</p>
           </div>
        </div>
     </div>
     <div class="py-3 text-center" style="background-color: #D6DA23;">
        <h6 class="fw-600">© 2024 TBN Indonesia. All Right Reserved.</h6>
     </div>
   </footer>

   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <script src="js/leaflet.js"></script>
   <script src="js/js-idle.min.js"></script>
   <script>
      if (window.location.pathname == '/') {
         const navbar = document.querySelector('#navbar')
         window.onscroll = function() {
            scrollFunction()
         };
         function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
               navbar.classList.add('bg-white', 'shadow')
               navbar.classList.remove('bg-transparent', 'navbar-dark')
            } else {
               navbar.classList.add('bg-transparent', 'navbar-dark')
               navbar.classList.remove('bg-white', 'shadow')
            }
         }
         function topFunction() {
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0;
         }
      }
   </script>
</body>
</html>
