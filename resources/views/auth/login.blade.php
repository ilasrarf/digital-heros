<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="img/أبطال الديجيتال.png" rel="icon">
    <link href="img/أبطال الديجيتال.png" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/login_style.css" />
  </head>

  <body dir="rtl">
    <div class="container-xxl p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-grow text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-2 py-lg-0">
          <a href="" class="navbar-brand p-0">
            <img src="img/أبطال الديجيتال.png" alt="Logo" />
          </a>
          <button
            class="navbar-toggler text-light"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{route('homes')}}" class="nav-item nav-link active">الرئيسية</a>
                <a href="{{route('blogs.index')}}" class="nav-item nav-link">المقالات</a>
                <a href="" class="nav-item nav-link">مشروع المؤسسة</a>
                <a href="{{route('homes')}}" class="nav-item nav-link">تواصل معنا</a>
            </div>
            <a href="{{ route('login') }}" class="btn rounded-3 text-dark bg-light py-1 px-3 ms-2 d-lg-block">دخول</a>
              @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn rounded-3 py-1 text-dark px-3 ms-3 d-lg-block" style="background-color: #FBA504;">التسجيل</a>
              @endif
          </div>
        </nav>
      <!-- Navbar-->
      <!-- login -->
      <div class="login container p-4 my-md-5" dir="ltr" id="login">
        <div class="row justify-content-center" style="margin-top: 35px">
            <div class="login_welcom col-md-5" style="z-index: 1; background-color: #fffbf523">
                <img src="https://ajicod.com/media/img/log.png" class="mw-100" alt="" srcset="" />
                <h1 class="rounded-pill text-primary p-2">
                <h2 class="text-white d-flex justify-content-center">! مرحبا بعودتك</h2>
                </h1>
            </div>
            <div class="login_form col-md-5 bg-light" style="z-index: 1">
                <div class="card-body">
                    <form class="box" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center">
                            <img src="img/أبطال الديجيتال.png" style="width: 100px" class="my-3" alt="logo" />
                            <h3 class="my-2 text-secondary" style="font-size: 30px">الدخول</h3>
                        </div>
                        <div class="row mb-3">
                            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('الإيمايل ديالك') }}" required autocomplete="email" >
                            <div class="col-md-6">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" placeholder="{{ __('كلمة السر') }}" required autocomplete="current-password">
                            <div class="col-md-6">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            {{-- <div class="row mb-3">
                                <div class="col-md-5 offset-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label text-dark" for="remember">
                                            {{ __('تفكرني') }}
                                            <input class="form-check-input"  style="float: right; margin-left: 0.5em;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        
                                        </label>
                                    </div>
                                </div>
                            </div> --}}

                                
                        </div>
                        
                        <input type="submit" value="{{ __('Login') }}">
                                @if (Route::has('password.request'))
                                    <a class="forgot text-muted" href="{{ route('password.request') }}">
                                        {{ __('نسيت كلمة المرور؟') }}
                                    </a>
                                @endif
                        
                        
                        {{-- <div class="col-md-12">
                            <ul class="social-network social-circle">
                              <li>
                                <a href="#" class="icoFacebook" title="Facebook"
                                  ><i class="fab fa-facebook-f"></i
                                ></a>
                              </li>
                              <li>
                                <a href="#" class="icoGoogle" title="Google +"
                                  ><i class="fab fa-google-plus"></i
                                ></a>
                              </li>
                            </ul>
                          </div> --}}
                    </form>
                </div>
            </div>
        </div>
      </div>
      <!-- login end -->
<!-- Footer Start -->
                
<div class="container-fluid text-light footers wow fadeIn" data-wow-delay="0.1s">
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
    <div class="px-lg-2">
      <div class="copyright">
          <div class="row">
              <div class="col-md-5 text-center text-md-end mb-3 mb-md-0">
                  &copy; <a class="border-bottom" href="{{route('homes')}}">Digital</a>, جميع الحقوق محفوظة. 
                  
                  <!--/*** This template is free as long as you keep the footers author’s credit link/attribution link/backlink. If you'd like to use the template without the footers author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                  <!-- Designed By <a class="border-bottom" href="">OUALI Rida</a><br><br> -->
              </div>
              <div class="col-md-4 text-center text-md-star">
                  <div class="footers-menu">
                    <a href="{{route('homes')}}">الرئيسية</a>
                    <a href="">Cookies</a>
                    <a href="">مساعدة</a>
                  </div>
                  <div class="col-md-6 mt-2">
                    <strong>Réalisé par </strong>
                    <a href="https://ajicod.com/">AJICOD</a>
                    <p class="text-secondary">I.asrarfi <em class="text-light">-</em>&nbsp; R.Ouali <em class="text-light">-</em>&nbsp; Y.Malqui</p>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"
    ><i class="bi bi-arrow-up"></i
  ></a>
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
</body>
</html>
