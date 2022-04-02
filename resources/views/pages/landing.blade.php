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
                        <div class="nav-item dropdown text-end">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">شكون حنا</a>
                            <div class="dropdown-menu m-0 text-end">
                                <a href="#about" class="dropdown-item">شكون حنا</a>
                                <a href="#الأهداف" class="dropdown-item">الأهداف</a>
                                <a href="#الأعضاء" class="dropdown-item">الأعضاء</a>
                                {{-- <a href="#المنخرطين" class="dropdown-item">المنخرطين</a> --}}
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">مشروع المؤسسة</a>
                        <a href="#contact" class="nav-item nav-link">تواصل معنا</a>
                    </div>
                    <a href="{{ route('login') }}" class="btn rounded-3 py-1 px-3 ms-2 d-none d-lg-block">دخول</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn rounded-3 py-1 px-3 ms-3 d-none d-lg-block" style="background-color: #FBA504;">التسجيل</a>
                    @endif
                </div>
            </nav>
  <!-- End Hero -->
  <section id="hero">
                <div class="container px-lg-5">
                    <div class="row align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white text-center mb-4 animated slideInDown">نادي أبطال الديجيتال <br><p class="text-secondary" style="font-size: 30px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> علال الفاسي</p></h1>
                            <h5 class="text-white h5b-3 text-center animated slideInDown">موقع إلكتروني لواحد الكلوب بثانوية علال الفاسي</h5>
                            <div class="d-grid gap-2 col-4 mx-auto">
                            <a href="{{ route('register') }}" class="btn btn-secondary py-sm-1 px-sm-5 rounded-3 animated slideInLeft">نخارط معانا</a>
                        </div>
                        </div>
                        <div class="col-lg-6 my-4 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/أبطال الديجيتال.png" alt="">
                        </div>
                    </div>
                </div><div id="about"></div>
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
      </svg>
    </div>
    
        </section>
        <!-- Navbar & Hero End -->
<!-- //////////////////////// -->
    <div class="wow fadeInUp mt-5" data-wow-delay="0.1s">
        <h3 class="section-title text-secondary justify-content-center"><span></span>&nbsp; شكون هو&nbsp;<span></span></h3>
        <h1 class="text-center"> نادي أبطال الديجيتال </h1>
    </div>
    <div class="hh" data-wow-delay="0.1s">
        <div class="d-lg-flex align-items-center w-75">
            <div class="parent flex-shrink-0">
                <div class="ch ch1" id="1" onclick="content(1)">
                    <i class="ms-4 bi bi-x-diamond-fill"></i>
                    <p class="me-2 mt-3">كيفاش</p>
                </div>
                <div class="ch" id="2" onclick="content(2)">
                    <i class="ms-4 bi bi-x-diamond-fill"></i>
                    <p class="me-2 mt-3">علاش</p>
                </div>
                <div class="ch" id="3" onclick="content(3)">
                    <i class="ms-4 bi bi-x-diamond-fill"></i>
                    <p class="me-2 mt-3">شنو الهدف</p>
                </div>
            </div>
            <div class="mx-5">
                <h2 style="color: #fba504;" id="head">كيفاش</h2>
                <hr style="color: #6222CC; height: 10px; border-radius: 15px;">   
                <h4 id="headd">كيفاش نشأ نادي أبطال الديجتال</h4>
                <h5 id="headdd">أستاذ المعلوميات فكر باش يوري التلامد تاعو مدى أهمية الديجتال و فكر مع واحد المجموعة باش يصاوبو واحد الكلوب لي يقدر يحقق فيه كل الأهداف تاعو .</h5>
            </div>
        </div>
    </div>
<!-- //////////////////////// -->

        
         <!-- Service Start -->
         <div class="container-xxl py-5" id="الأهداف">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="section-title text-secondary justify-content-center"><span></span>&nbsp;أهداف النادي&nbsp;<span></span></h3>
                    <h1 class="text-center mb-5">يهدف نادي أبطال الديجيتال </h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <p class="m-0 fs-4 fw-bold">إدماج التلاميذ في عالم الديجيتال</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <p class="m-0 fs-4 fw-bold">بناء جيل واعي ومبدع</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </div>
                            <p class="m-0 fs-4 fw-bold">تطوير و تثقيف التلاميذ</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-mail-bulk fa-2x"></i>
                            </div>
                            <p class="m-0 fs-4 fw-bold">تنمية المهرات المواهب و تطويرها</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-thumbs-up fa-2x"></i>
                            </div>
                            <p class="m-0 fs-4 fw-bold">نشر الوعي المعرفي بين الطلاب</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-android fa-2x"></i>
                            </div>
                            <p class="m-0 fs-4 fw-bold">استثمار طاقات الطلاب و توظيفها</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

<!-- Team Start -->
<div class="container-xxl py-5" id="الأعضاء">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title text-secondary justify-content-center"><span></span>&nbsp;الأعضاء&nbsp;<span></span></h3>
            <h1 class="text-center mb-5">أعضاء النادي</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <img class="img-fluid rounded-circle mb-4" src="img/oop1.png" style="width: 130px;" alt="">
                        <h5>Test Name</h5>
                        <span>CEO & Founder</span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <img class="img-fluid rounded-circle mb-4" src="img/oop.png" style="width: 130px;" alt="">
                        <h5>Test Name</h5>
                        <span>Web Designer</span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <img class="img-fluid rounded-circle mb-4" src="img/oop2.png" style="width: 130px;" alt="">
                        <h5>Test Name</h5>
                        <span>SEO Expert</span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Feature Start -->
<section class="dark container">
	<div class="container py-4">
		<div class="wow fadeInUp mb-5" data-wow-delay="0.1s">
            <h3 class="section-title text-secondary justify-content-center"><span></span>&nbsp;مقالات&nbsp;<span></span></h3>
            {{-- <h1 class="text-center mb-5"></h1> --}}
        </div>

		<article class="postcard dark blue">
			<p class="postcard__img_link">
				<img class="postcard__img" src="img/blog1.jpg" alt="Image Title" />
            </p>
			<div class="postcard__text">
				<h2 class="postcard__title blue"><p>صحح المفاهيم الخاطئة لي عندك حول مجال التعلم و العمل فالبرجمة...
                </p></h2>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i> Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">
                    حقيقة كتصدع بزاف ديال الناس فراسهم قبل ما يدخلوا لهاد الدومين واش غادي نخدم أو لا غير كنضيع وقتي وللأسف بزاف منهم كيوقفوا فاول حاجز كيتعرضولو فهاد المقال غادي نشوفوا بعض المفاهيم الخاطئة بخصوص البرمجة.
                </div>
				{{-- <ul class="postcard__tagbox">
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i> Play Episode</a>
					</li>
				</ul> --}}
			</div>
		</article>
		<article dir="rtl" class="postcard dark red">
			<p class="postcard__img_link" >
				<img class="postcard__img" src="img/blog2.jpg" alt="Image Title" />	
            </p>
			<div class="postcard__text">
				<h1 class="postcard__title red"><p>Développeur mobile, le créateur d’application sur le bout des doigts
                </p></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i> Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">
                    Avec la démocratisation des Smartphones et des tablettes et l’utilisation massive d'applications, les développeurs mobile ont de quoi bien travailler ! Ce métier a récemment fait son apparition et son nombre ne cesse de s’accroître, la demande d’applications étant toujours très forte.
                </div>
				{{-- <ul class="postcard__tagbox">
					<li class="tag__item play red">
						<a href="#"><i class="fas fa-play mr-2"></i> Play Episode</a>
					</li>
				</ul> --}}
			</div>
		</article>
		<article dir="rtl" class="postcard dark green">
			<p class="postcard__img_link" >
				<img class="postcard__img" src="img/blog3.jpg" alt="Image Title" />
            </p>
			<div class="postcard__text">
				<h1 class="postcard__title green"><p>POURQUOI TOUT LE MONDE DEVRAIT APPRENDRE LA PROGRAMMATION
                </p></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Nous savons tous que la programmation est le point où les gens ont peur. On voit beaucoup d'écrits mais on ne comprend rien, Quand tu décides de l'apprendre tu trouves plein de cours et vous suivez avec eux les première, deuxième et troisième vidéos, vous ne comprenez rien, très nécessaire maintenant,
                </div>
				{{-- <ul class="postcard__tagbox">
					<li class="tag__item play green">
						<a href=""><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul> --}}
			</div>
		</article>
	</div>
    <div class="d-flex justify-content-center">
        <a href="{{route('blogs.index')}}" style="height: 40px; width: 85px; border-radius: 5px" class="btn btn-warning fw-bold" >المزيد...</a>
    </div>
</section>
<!-- Feature End -->

        
        <!-- Facts Start -->
        <div id="المنخرطين">
        <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">14</h1>
                        <p class="text-white mb-0">الأنشطة</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">20</h1>
                        <p class="text-white mb-0">أعضاء النادي</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">50</h1>
                        <p class="text-white mb-0">المنخرطين</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Facts End -->

        <!-- Map Start-->

        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.3341742345506!2d-9.53514475219802!3d30.373063228932097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c8050148c217%3A0xd482a161ab759058!2sColl%C3%A8ge%20Allal%20El%20Fassi!5e0!3m2!1sfr!2sma!4v1646933102919!5m2!1sfr!2sma" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

        <!-- end Map -->
         <!-- Contact Start -->
         <div class="container-xxl py-5" id="contact">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="section-title text-secondary justify-content-center" ><span></span>&nbsp;تواصل معنا&nbsp;<span></span></h3>
                    <h1 class="text-center mb-5">حنى هنا، تواصل معنا وسولنا لي بغيتي</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            
                            <form action="{{route('contact.store')}}" method="POST">
                                @csrf
                                <div class="row g-3 text-action">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="fullname" class="form-control" id="name" placeholder="Your Name">
                                            <label class="text-dark" for="name" dir="rtl">اسم المستخدم</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="الإيمايل ديالك">
                                            <label class="text-dark" for="email">الإيمايل ديالك</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="description" class="form-control" id="subject" placeholder="الموضوع">
                                            <label class="text-dark" for="subject">الموضوع</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="message" placeholder="رسالة" id="message" style="height: 150px"></textarea>
                                            <label class="text-dark" for="message">رسالة</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">إرسال رسالة</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <!-- Footer Start -->
        
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s" dir="rtl">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-4 col-lg-3">
                        <p class="section-title text-white h5 mb-4"><span></span><strong>العنوان</strong></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i> الثانوية الإعدادية علال الفاسي</p>
                        <p><i class="fa fa-phone-alt me-3"></i > 538 885 607 212+</p>
                        <p><i class="fa fa-envelope me-3"></i> info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">رابط سريع<span></span></p>
                        <a class="btn btn-link" href="{{route('homes')}}"> شكون حنا</a>
                        <a class="btn btn-link" href="{{route('contact.create')}}"> تواصل معنا</a>
                        <a class="btn btn-link" href="">سياسة الخصوصية</a>
                        <a class="btn btn-link" href="">الشروط والأحكام</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4"><span></span><strong>نادي أبطال الديجيتال</strong></p>
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
                            &copy; <a class="border-bottom" href="#">Degital</a>, جميع الحقوق محفوظة. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							<!-- من تصميم <a class="border-bottom" href="">OUALI Rida</a><br><br> -->
                        </div>
                        <div class="col-md-4 text-center text-md-star">
                            <div class="footer-menu">
                                <a href="#">الرئيسية</a>
                                <a href="">Cookies</a>
                                <a href="">مساعدة</a>
                                <a href="">FQAs</a>
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