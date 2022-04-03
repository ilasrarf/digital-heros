<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DGital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="img/أبطال الديجيتال.png" rel="icon">
    <link href="img/أبطال الديجيتال.png" rel="apple-touch-icon">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/blog.css">
    
</head>

<body dir="rtl">
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="#" class="navbar-brand p-0">
                    <img src="img/أبطال الديجيتال.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{route('homes')}}" class="nav-item nav-link active">الرئيسية</a>
                        <a href="{{route('blogs.index')}}" class="nav-item nav-link">المقالات</a>
                        <a href="" class="nav-item nav-link">مشروع المؤسسة</a>
                        <a href="{{route('contact.create')}}" class="nav-item nav-link">تواصل معنا</a>
                    </div>
                    <a href="{{ route('login') }}" class="b1 btn rounded-3 py-1 px-3 ms-2 d-lg-block">دخول</a>
                        @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="b2 btn rounded-3 py-1 px-3 ms-3 d-lg-block" style="background-color: #FBA504;">التسجيل</a>
                        @endif
                </div>
            </nav>
    <!-- End Hero -->
    <section id="hero" style="padding: 65px 0 0 0;"></section>
    <!-- Navbar & Hero End -->
    <!-- ////////////////////////////////////////////////// -->

    <div class="row m-5">
        <div class="leftcolumn">
            @foreach ($posts as $post)
            <div class="card">
                <img src="{{Voyager::image($post->image)}}" style="height: 500px;">
                <h2>{{$post->title}}</h2>
                <h5>{{$post->excerpt}}</h5>
                <a href="{{route('posts.show', $post->id)}}" dir="ltr"><strong>...المزيد</strong></a>
            </div>
            @endforeach
        </div>
        <div class="rightcolumn">
            <div class="card">
                <img width="40%" class="d-block m-auto" src="img/أبطال الديجيتال.png" alt="Logo">
                <strong class="text-muted text-center my-4">أبطال الديجيتال  هو نادي لاكتشاف المواهب المعلوماتية و تطويرها وكيحرص على ادماج الشباب في عالم الديجيتال </strong>
            </div>
            <div class="card">
                <h3>Popular Post</h3>
                <div class="text-dark"><img style="width: 20%;" src="{{ Voyager::image($postt->image)}}" alt=""> <a href="#">{{$postt->title}}</a></div><br>
                <div class="text-dark"><img style="width: 20%;" src="{{ Voyager::image($posttt->image)}}" alt=""> <a href="">{{$posttt->title}}</a></div><br>
                <div class="text-dark"><img style="width: 20%;" src="{{ Voyager::image($postttt->image)}}" alt=""> <a href="">{{$postttt->title}}</a></div>
            </div>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////// -->



    <!-- Footer Start -->
        
    <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s" dir="rtl">
        <div class="container py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-md-4 col-lg-3">
                    <p class="section-title text-white h5 mb-4"><span></span><strong>العنوان</strong></p>
                    <p><i class="fa fa-map-marker-alt me-1"></i> الثانوية الإعدادية علال الفاسي</p>
                    <p><i class="fa fa-phone-alt me-1"></i > 538 885 607 212+</p>
                    <p><i class="fa fa-envelope me-1"></i> info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white h5 mb-4"><span></span><strong>رابط سريع</strong></p>
                    <a class="btn btn-link" href="{{route('homes')}}"> شكون حنا</a>
                    <a class="btn btn-link" href="{{route('contact.create')}}"> تواصل معنا</a>
                    <a class="btn btn-link" href="">سياسة الخصوصية</a>
                    <a class="btn btn-link" href="">الشروط والأحكام</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white mb-4"><span></span><strong>نادي أبطال الديجيتال</strong></p>
                    <p>الهدف هو اننا نحاولو نكتشفو المواهب المعلوماتية و نطوروها بشكل أفضل كما اننا غادي نحرصو على اندماجكم باش ينجح هاد الكلوب</p>
                    
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row g-3 my-5">
                            <img class="img-fluid" src="img/أبطال الديجيتال.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-lg-2">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-5 text-center text-md-end mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{route('homes')}}">Degital</a>, جميع الحقوق محفوظة. 
                        
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- من تصميم <a class="border-bottom" href="">OUALI Rida</a><br><br> -->
                    </div>
                    <div class="col-md-4 text-center text-md-star">
                        <div class="footer-menu">
                            <a href="{{route('homes')}}">الرئيسية</a>
                            <a href="">Cookies</a>
                            <a href="">مساعدة</a>
                            <a href="">FQAs</a>
                        </div>
                        <div class="col-md-6 mt-2">
                            <strong>Réalisé par </strong>
                            <a href="https://ajicod.com/">AJCOD</a>
                            <p class="text-secondary">I.asrarfi <em class="text-light">-</em>&nbsp; R.Ouali <em class="text-light">-</em>&nbsp; Y.Malqui</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="js/script.js"></script>
</body>

</html>