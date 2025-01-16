<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
  <!-- Header Section End -->  
   <style>
    *,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  list-style-type: none;
  text-decoration: none;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}


.main .container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 1rem;
  justify-content: center;
  align-items: center;
}
.main .card {
  color: #252a32;
  border-radius: 2px;
  background: #ffffff;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);
}
.main .card-image {
  position: relative;
  display: block;
  width: 100%;
  padding-top: 70%;
  background: #ffffff;
}
.main .card-image img {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

@media only screen and (max-width: 600px) {
  .main .container {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 1rem;
  }
}
   </style>
  <div class="breadcrumb-wrap">
                    <div class="container">
                        <img src="assets/img/shape-7.png" alt="Image" class="br-shape-one">
                        <img src="assets/img/shape-8.png" alt="Image" class="br-shape-two">
                        <img src="assets/img/shape-7.png" alt="Image" class="br-shape-three">
                        <img src="assets/img/shape-8.png" alt="Image" class="br-shape-four">
                        <div class="breadcrumb-title">
                            <h2>Gallery</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.php">Home </a></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
    <!-- footer Section start --> 
<!-- Project Section Start -->
  <!-- Project Section Start -->
  <section class="project-wrap ptb-100 bg-albastor">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-10.offset-lg-1">
                            <div class="section-title style1 text-center mb-30">
                               
                                <h2>हमारी गैलरी</h2>
                                <span> प्रभाव और प्रेरणा के क्षण</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-slider-one owl-carousel">
                    <div class="project-card">
                        <img src="assets/img/project/project-1.jpg" alt="Image">
                        <div class="project-info">
                            <div class="project-title">
                                <h3><a href="gallery.php"></a> ज़ी बिहार/झारखण्ड न्यूज़  </h3>
                                <p>सचिव महोदय को सम्मानित किया गया</p>
                            </div>
                            <a href="gallery.php" class="project-link"><i class="flaticon-next"></i></a>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="assets/img/project/project-2.jpg" alt="Image">
                        <div class="project-info">
                            <div class="project-title">
                                <h3><a href="gallery.php">पलामू</a></h3>
                                <p>सामुहिक विवाह कार्यक्रम</p>
                            </div>
                            <a href="gallery.php" class="project-link"><i class="flaticon-next"></i></a>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="assets/img/project/project-3.jpg" alt="Image">
                        <div class="project-info">
                            <div class="project-title">
                                <h3><a href="gallery.php">पलामू सामुहिक विवाह</a></h3>
                                <p>एस.एस.पी.महोदय को समनित किया गया</p>
                            </div>
                            <a href="gallery.php" class="project-link"><i class="flaticon-next"></i></a>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="assets/img/project/project-4.jpg" alt="Image">
                        <div class="project-info">
                            <div class="project-title">
                                <h3><a href="gallery.php">नवादा ( बिहार )</a></h3>
                                <p>सामूहिक विवाह कार्यक्रम</p>
                            </div>
                            <a href="gallery.php" class="project-link"><i class="flaticon-next"></i></a>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="assets/img/project/project-5.jpg" alt="Image">
                        <div class="project-info">
                            <div class="project-title">
                                <h3><a href="gallery.php">गढ़वा सामूहिक विवाह</a></h3>
                                <p> 151 कन्याओ का विवाह सामूहिक कार्यक्रम</p>
                            </div>
                            <a href="gallery.php" class="project-link"><i class="flaticon-next"></i></a>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="assets/img/project/project-6.jpg" alt="Image">
                        <div class="project-info">
                            <div class="project-title">
                                <h3><a href="gallery.php">भागलपुर </a></h3>
                                <p>सामूहिक विवाह कार्यक्रम</p>
                            </div>
                            <a href="gallery.php" class="project-link"><i class="flaticon-next"></i></a>
                        </div>
                    </div>
                    
                </div>
                <div class="container">

               </div>
            </section>
            <!-- Project Section End -->
          

<section class="pb-100">
             <main class="main">
  <div class="container">
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/1.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/1.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/2.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/2.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/4.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/4.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/5.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/5.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/6.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/6.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/7.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/7.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/8.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/8.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/9.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/9.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/10.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/10.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/11.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/11.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>

    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/12.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/12.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/13.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/13.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/14.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/14.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/15.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/15.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/16.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/16.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/17.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/17.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>


    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/18.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/18.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>

    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/19.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/19.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/20.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/20.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/21.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/21.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/22.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/22.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/23.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/23.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/24.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/24.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>

    <div class="card">
      <div class="card-image">
        <a href="assets/img/gallery/24.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/gallery/24.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>

  </div>
</main>
</section>
              <!-- gallery-start -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
            <script>
            
                // Fancybox Configuration
$('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
  ],
  loop: false,
  protect: true
});

            </script>
            <?php include 'footer.php'; ?>