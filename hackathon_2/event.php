<!DOCTYPE html><html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="9EgzyF69Gnd5xs3rYagBsBqIX8Z83utD8L2n0p1I">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand img {
            height: 40px;
        }
        .title {
            margin-top: 20px;
        }
        .search-input {
            width: 860px;
        }
        .banner {
            width: 300px;
            height: 375px;
        }
        .event-description {
            color: #C9D32C;
        }
        .event-title {
            font-weight: bold;
        }
        .read-more-btn {
            color: #C9D32C;
            border-color: #C9D32C;
        }
        .separator {
            border-top: 1px solid black;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="index.html">
                <button class="btn btn-outline-primary">Back </button>
            </a>
            <a class="navbar-brand" href="#">
                <img src="images/Logo TBN Indonesia.png" alt=" Logo BTN Indonesia">
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-8 mx-auto text-center title">
                <h2>List of Events</h2>
                <input type="text" class="form-control search-input mx-auto mt-3" placeholder="Search events">
            </div>
        </div>

        <?php
        include 'connectDB.php';
        $sql = 'SELECT * FROM h2_events ORDER BY date DESC';
        $result = mysqli_query($conn, $sql);  
        $data = mysqli_fetch_all($result);  
        ?>

        <?php
        foreach($data as $row){
        ?>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-12 col-lg-6 mb-5">
                <img src="images/event/<?= $row[5] ?>" alt="Event Banner" class="img-fluid banner">
            </div>
            <div class="col-md-12 col-lg-6 mb-5">  
                <div class="event-description">
                    <?= $row[3] ?>
                </div>              
                <h3 class="event-title mt-3"><?= $row[1] ?></h3>
                <p class="mt-3"><?= $row[2] ?></p>
                <a href="event-details.php?id=<?= $row[0] ?>"><button class="btn btn-outline-primary read-more-btn">Read More</button></a>                
            </div>
        </div>

        <hr class="separator">
        
        <?php
        }
        ?>
        
    </div>

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
</body>
</html>
