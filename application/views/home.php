

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-5 me-0" href="<?= base_url(); ?>public/index.html">
                    <img src="images/pod-talk-logo.png" class="logo-image img-fluid" alt="templatemo pod talk">
                </a>

                <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
                    <div class="input-group input-group-lg">
                        <input name="search" type="search" class="form-control" id="search" placeholder="Search Podcast"
                            aria-label="Search">

                        <button type="submit" class="form-control" id="submit">
                            <i class="bi-search"></i>
                        </button>
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url(); ?>public/index.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>public/about.html">About</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="listing-page.html">Listing Page</a></li>

                                <li><a class="dropdown-item" href="detail-page.html">Detail Page</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>

                    <div class="ms-4">
                        <a href="#section_3" class="btn custom-btn custom-border-btn smoothscroll">Get started</a>
                    </div>
                </div>
            </div>
        </nav>


        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                            <h1 class="text-white">Listen to Pod Talk</h1>

                            <p class="text-white">Listen it everywhere. Explore your fav podcasts.</p>

                            <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Start listening</a>
                        </div>

                        <div class="owl-carousel owl-theme">
                            <div class="owl-carousel-info-wrap item">
                                <img src="<?= base_url(); ?>public/images/profile/smiling-business-woman-with-folded-hands-against-white-wall-toothy-smile-crossed-arms.jpg"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Candice
                                        <img src="<?= base_url(); ?>public/images/verified.png" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Storytelling</span>

                                    <span class="badge">Business</span>
                                </div>

                                <div class="social-share">
                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="<?= base_url(); ?>public/images/profile/handsome-asian-man-listening-music-through-headphones.jpg"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        William
                                        <img src="<?= base_url(); ?>public/images/verified.png" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Creative</span>

                                    <span class="badge">Design</span>
                                </div>

                                <div class="social-share">
                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-pinterest"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="<?= base_url(); ?>public/<?= base_url(); ?>public/images/profile/cute-smiling-woman-outdoor-portrait.jpg"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">Taylor</h4>

                                    <span class="badge">Modeling</span>

                                    <span class="badge">Fashion</span>
                                </div>

                                <div class="social-share">
                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-pinterest"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="<?= base_url(); ?>public/images/profile/man-portrait.jpg" class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">Nick</h4>

                                    <span class="badge">Acting</span>
                                </div>

                                <div class="social-share">
                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-instagram"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-youtube"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="<?= base_url(); ?>public/images/profile/woman-posing-black-dress-medium-shot.jpg"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Elsa
                                        <img src="<?= base_url(); ?>public/images/verified.png" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Influencer</span>
                                </div>

                                <div class="social-share">
                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-instagram"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-youtube"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="<?= base_url(); ?>public/images/profile/smart-attractive-asian-glasses-male-standing-smile-with-freshness-joyful-casual-blue-shirt-portrait-white-background.jpg"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">Chan</h4>

                                    <span class="badge">Education</span>
                                </div>

                                <div class="social-share">
                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-linkedin"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Lastest episodes</h4>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="<?= base_url(); ?>public/detail-page.html" class="custom-block-image-wrap">
                                        <img src="<?= base_url(); ?>public/images/podcast/11683425_4790593.jpg"
                                            class="custom-block-image img-fluid" alt="">

                                        <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a>
                                    </a>
                                </div>

                                <div class="mt-2">
                                    <a href="#" class="btn custom-btn">
                                        Subscribe
                                    </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-clock-fill custom-icon"></i>
                                        50 Minutes
                                    </small>

                                    <small>Episode <span class="badge">15</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="<?= base_url(); ?>public/detail-page.html">
                                        Modern Vintage
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="<?= base_url(); ?>public/images/profile/woman-posing-black-dress-medium-shot.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="<?= base_url(); ?>public/images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>120k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>42.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>11k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>50k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="<?= base_url(); ?>public/detail-page.html" class="custom-block-image-wrap">
                                        <img src="<?= base_url(); ?>public/images/podcast/12577967_02.jpg" class="custom-block-image img-fluid"
                                            alt="">

                                        <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a>
                                    </a>
                                </div>

                                <div class="mt-2">
                                    <a href="#" class="btn custom-btn">
                                        Subscribe
                                    </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-clock-fill custom-icon"></i>
                                        15 Minutes
                                    </small>

                                    <small>Episode <span class="badge">45</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="<?= base_url(); ?>public/detail-page.html">
                                        Daily Talk
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="<?= base_url(); ?>public/images/profile/handsome-asian-man-listening-music-through-headphones.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>William
                                        <strong>Vlogger</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>140k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>22.4k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>16k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>62k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="topics-section section-padding pb-0" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Topics</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="<?= base_url(); ?>public/detail-page.html" class="custom-block-image-wrap">
                                <img src="<?= base_url(); ?>public/images/topics/physician-consulting-his-patient-clinic.jpg"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="<?= base_url(); ?>public/listing-page.html">
                                        Productivity
                                    </a>
                                </h5>

                                <p class="badge mb-0">50 Episodes</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="<?= base_url(); ?>public/detail-page.html" class="custom-block-image-wrap">
                                <img src="<?= base_url(); ?>public/images/topics/repairman-doing-air-conditioner-service.jpg"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="<?= base_url(); ?>public/listing-page.html">
                                        Technician
                                    </a>
                                </h5>

                                <p class="badge mb-0">12 Episodes</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="<?= base_url(); ?>public/detail-page.html" class="custom-block-image-wrap">
                                <img src="<?= base_url(); ?>public/images/topics/woman-practicing-yoga-mat-home.jpg"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="<?= base_url(); ?>public/listing-page.html">
                                        Mindfullness
                                    </a>
                                </h5>

                                <p class="badge mb-0">35 Episodes</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="<?= base_url(); ?>public/detail-page.html" class="custom-block-image-wrap">
                                <img src="<?= base_url(); ?>public/images/topics/delicious-meal-with-sambal-arrangement.jpg"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="<?= base_url(); ?>public/listing-page.html">
                                        Cooking
                                    </a>
                                </h5>

                                <p class="badge mb-0">12 Episodes</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="trending-podcast-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Trending episodes</h4>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="<?= base_url(); ?>public/detail-page.html">
                                    <img src="<?= base_url(); ?>public/images/podcast/27376480_7326766.jpg" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="<?= base_url(); ?>public/detail-page.html">
                                        Vintage Show
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="<?= base_url(); ?>public/images/profile/woman-posing-black-dress-medium-shot.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>Elsa
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>100k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>2.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>924k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="social-share d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="<?= base_url(); ?>public/detail-page.html">
                                    <img src="<?= base_url(); ?>public/images/podcast/27670664_7369753.jpg" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Vintage Show
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="<?= base_url(); ?>public/images/profile/cute-smiling-woman-outdoor-portrait.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Taylor
                                        <img src="<?= base_url(); ?>public/images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Creator</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>100k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>2.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>924k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="social-share d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="<?= base_url(); ?>public/detail-page.html">
                                    <img src="<?= base_url(); ?>public/images/podcast/12577967_02.jpg" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="<?= base_url(); ?>public/detail-page.html">
                                        Daily Talk
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="<?= base_url(); ?>public/images/profile/handsome-asian-man-listening-music-through-headphones.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        William
                                        <img src="<?= base_url(); ?>public/images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Vlogger</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>100k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>2.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>924k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="social-share d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

</body>

</html>
