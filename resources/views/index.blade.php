@extends('front.layouts.indexLayout')
@push('custom-style')
  {{-- enter other style  --}}
  <link rel="stylesheet" href="{{ asset('asset/css/swiper.min.css')}}">
@endpush
@section('title','Home')
@section('content')
    <header >
        <div class="owl-carousel owl-theme header-carousel">
            <div class="item">
                <img src="{{ asset('asset/images/s1.jpg')}}" alt="">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>AKeed</h2>
                            <h1>Web Developement</h1>
                            <h5>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s

                            </h5>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="item">
                <img src="{{ asset('asset/images/s2.jpg')}}" alt="">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>AKeed</h2>
                            <h1>Mobile App</h1>
                            <h5>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s

                            </h5>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="item">
                <img src="{{ asset('asset/images/s3.jpg')}}" alt="">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>AKeed</h2>
                            <h1>Digital Markting</h1>
                            <h5>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s

                            </h5>
                        </div>
                    </div>
                 </div>
            </div>

        </header>
        <div class="homeHeaderCurve curve"> <img src="{{ asset('asset/images/curve.png')}}" alt="curve" class="img-fluid"></div>
    {{-- about us  --}}
    <div class="about ">
        <div class="container">
            <div class="section-title">
                <span>About Us</span>
                <h3>Who we are ?</h3>
            </div>
            <div class="row">
                <div class="col-12  col-md-6 wow bounceInLeft" data-wow-duration="2s"
                       data-wow-delay="0.2s">
                        <div class="about-slider  text-center" id="test">
                            <div class="container-fluid " >
                                <div class="row">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                        <div class="swiper-slide" >
                                            <div class="item ">
                                                <img src="{{ asset('asset/images/h9.jpg') }}" >
                                            </div>
                                        </div>
                                        <div class="swiper-slide" >
                                            <div class="item">
                                                <img src="{{ asset('asset/images/h10.jpeg') }}" >
                                            </div>
                                        </div>
                                        <div class="swiper-slide" >
                                                <div class="item">
                                                    <img src="{{ asset('asset/images/h7.jpg') }}" >
                                                </div>
                                        </div>
                                        <div class="swiper-slide "  >
                                                <div class="item">
                                                    <img src="{{ asset('asset/images/h6.jpg') }}" >
                                                </div>
                                        </div>
                                        <div class="swiper-slide" >
                                                <div class="item">
                                                    <img src="{{ asset('asset/images/h8.png') }}" >
                                                </div>
                                        </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-6 wow bounceInRight" data-wow-duration="2s"
                    data-wow-delay="0.4s">
                    <div class="about-content">
                        <h3 >About</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <h3 >Mission</h3>
                        <p>
                            building brand business strategies and carefully execute it to improve the connections between brands,
                             business and people through branding,building brand business strategies and carefully.
                        </p>
                        <a href="#" class="Btn blueBtn"> <span class="btnHover"></span> <span class="btnText"> More Details </span> </a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Why us --}}

    <div class="why-us">
        <div class="container">
            <div class="section-title">
                <span>Why Us</span>
                <h3>Why Choose Us ?</h3>
            </div>
            <div class="row">
                <div class="col-12  col-lg-6 wow bounceInRight" data-wow-duration="2s"
                    data-wow-delay="0.4s">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-1">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                                                data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                                    <i class="icofont-brand-natgeo"></i>What is Lorem Ipsum?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-2">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                                    <i class="icofont-light-bulb"></i>  Where does it come from?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-3">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                                    <i class="icofont-learn"></i> Why do we use it?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-4">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                                    <i class="icofont-dashboard-web"></i> Where can I get some?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-5">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                                    <i class="icofont-edit-alt"></i> What is Lorem Ipsum?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                            <div class="card-body">
                                                <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-6">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                                    <i class="icofont-search-stock"></i> Where does it come from?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12  col-lg-6 wow bounceInLeft" data-wow-duration="2s"
                        data-wow-delay="0.2s">
                            <!-- OUR SERVICES  -->
                                <div class="services grey-bg" id="services">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="servicesContainer">
                                                    <div class="services-box wow fadeInLeft">
                                                        <div class="service">
                                                            <a class="service-block" href="marketing-plans.html">
                                                                <i class="icofont-brand-natgeo"></i>
                                                                <h4>Motion Graphic </h4>
                                                            </a>
                                                        </div>
                                                        <div class="service">
                                                            <a class="service-block" href="marketing-consulting.html">
                                                                <i class="icofont-light-bulb"></i>
                                                                <h4> Creative design</h4>
                                                            </a>
                                                        </div>
                                                        <div class="service">
                                                            <a class="service-block" href="social-plans.html">
                                                                <i class="icofont-learn"></i>
                                                                <h4> Courses </h4>
                                                            </a>
                                                        </div>
                                                        <div class="service">
                                                            <a class="service-block" href="creative-design.html">
                                                                <i class="icofont-edit-alt"></i>
                                                                <h4>Advertising campaigns </h4>
                                                            </a>
                                                        </div>
                                                        <div class="service">
                                                            <a class="service-block" href="creative-writing.html">
                                                                <i class="icofont-dashboard-web"></i>
                                                                <h4>Website and mobile app design </h4>
                                                            </a>
                                                        </div>
                                                        <div class="service">
                                                            <a class="service-block" href="services.html">
                                                                <i class="icofont-search-stock"></i>
                                                                <h4> SEO </h4>
                                                            </a>
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
    </div>


    {{-- services --}}

    <div class="home-services">
       <div class="section-title">
                <span>Services</span>
                <h3>What We Do ?</h3>
            </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="serviceBox">
                        <div class="service-icon">
                           <i class="icofont-light-bulb"></i>
                        </div>
                        <h3 class="title">Web Design</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                        </p>
                        <a href="#" class="service-btn"> <i class="icofont-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="serviceBox">
                        <div class="service-icon">
                           <i class="icofont-light-bulb"></i>
                        </div>
                        <h3 class="title">Web Design</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                        </p>
                        <a href="#" class="service-btn"> <i class="icofont-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="serviceBox">
                        <div class="service-icon">
                           <i class="icofont-light-bulb"></i>
                        </div>
                        <h3 class="title">Web Design</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                        </p>
                        <a href="#" class="service-btn"> <i class="icofont-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="serviceBox">
                        <div class="service-icon">
                           <i class="icofont-light-bulb"></i>
                        </div>
                        <h3 class="title">Web Design</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                        </p>
                        <a href="#" class="service-btn"> <i class="icofont-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="serviceBox">
                        <div class="service-icon">
                           <i class="icofont-light-bulb"></i>
                        </div>
                        <h3 class="title">Web Design</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                        </p>
                        <a href="#" class="service-btn"> <i class="icofont-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="serviceBox">
                        <div class="service-icon">
                            <i class="icofont-light-bulb"></i>
                        </div>
                        <h3 class="title">Web Development</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                        </p>
                        <a href="#" class="service-btn"> <i class="icofont-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- counter --}}
    <div class="home-counter">
        <div class="overlay"></div>
        <div class="container" >
            <div class="row">
                <div class="four col-md-3">
                    <div class="counter-box ">
                        <i class="icofont-users-social"></i>
                        <hr>
                         <span class="counter">2147</span>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="four col-md-3">

                    <div class="counter-box">
                         <i class="icofont-tick-mark"></i>
                         <hr>
                         <span class="counter">3275</span>
                        <p>Project Complete</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box">
                        <i class="icofont-black-board"></i>
                        <hr>
                        <span class="counter">289</span>
                        <p>Training Courses</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box">
                        <i class="icofont-building"></i>
                        <hr>
                        <span class="counter">1563</span>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!------------- start TESTIMONIALS --------------->
    <section class="testimonials  text-center" id="test">

        <div class="section-title">
            <span>Testimonials</span>
            <h3>Some feedback from our Clients</h3>
        </div>
        <div class="container-fluid " >
            <div class="row">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide" >
                        <div class="item">
                            <img src="{{asset('asset/images/tes1.jpeg')}}" >
                            <h3>Amelie Rwley</h3>
                             <span>Ceo Nametalk</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                        </div>
                       </div>
                       <div class="swiper-slide" >
                            <div class="item">
                                <img src="{{asset('asset/images/tes2.jpg')}}" >
                                <h3>Dorain Amali</h3>
                                 <span>Developement</span>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            </div>
                        </div>
                        <div class="swiper-slide" >
                            <div class="item">
                                <img src="{{asset('asset/images/tes3.jpg')}}" >
                                <h3>Haldien Demoan</h3>
                                 <span>Development</span>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            </div>
                        </div>
                        <div class="swiper-slide "  >
                            <div class="item">
                                <img src="{{asset('asset/images/tes4.jpg')}}" >
                                <h3>Olivia Emily</h3>
                                 <span>Graphic design</span>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            </div>
                        </div>
                        <div class="swiper-slide" >
                            <div class="item">
                                <img src="{{asset('asset/images/tes5.jpeg')}}" >
                                <h3>Sophie Aia</h3>
                                 <span>PhotoShop</span>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            </div>
                        </div>
                        <div class="swiper-slide" >
                            <div class="item">
                                <img src="{{asset('asset/images/tes1.jpeg')}}" >
                                <h3>Ruby lily</h3>
                                <span>Graphic design</span>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. is that it has a more-or-less normal distribution of letters.</p>
                            </div>
                        </div>
                        <div class="swiper-slide" >
                            <div class="item">
                                <img src="{{asset('asset/images/tes3.jpg')}}" >
                                <h3>Poppy Isabella</h3>
                                 <span>Web Design</span>
                                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. is that it has a more-or-less normal distribution of letters.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                      <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div>
                  </div>
            </div>
        </div>
    </section>
<!------------- End TESTIMONIALS --------------->


@endsection
@push('custom-script')
  {{-- enter other script  --}}
  <script src="{{ asset('asset/js/swiper.min.js')}}"></script>
  <script>
       /// swiper libarary
       var swiper = new Swiper('.about-slider .swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides:true,
        slidesPerView: 'auto',
        loop: false,
        coverflowEffect: {
         rotate: 30,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,

    },

     navigation : {
         nextEl: '.swiper-button-next',
        prevEl:'.swiper-button-prev'
      }
  });
  swiper.slideTo(2, true,true);


  /// swiper libarary
  var swiper = new Swiper('.testimonials .swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides:true,
      slidesPerView: 'auto',
       loop: false,
       pagination:true,
      coverflowEffect: {
        rotate: 30,
        stretch: 0,
        depth: 150,
        modifier: 2,
        slideShadows : true,
      },
      pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
       navigation : {
           nextEl: '.swiper-button-next',
          prevEl:'.swiper-button-prev'
        }
    });
    swiper.slideTo(3, false,false);


    $('.counter').each(function () {
        $(this).prop('Counter',0).animate({
        Counter: $(this).text()
        }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
        $(this).text(Math.ceil(now));
        }
        });
        });


    // Btn Animation
    $('.Btn').mouseenter(function(e) {
        console.log('hovers');
        let parentOffset = $(this).offset();
        let relX = e.pageX - parentOffset.left;
        let relY = e.pageY - parentOffset.top;
        $(this).find('.btnHover').css({"left": relX, "top": relY });
        $(this).find('.btnHover').addClass('animateOut');
    });

    $('.Btn').mouseleave(function(e) {
        let parentOffset = $(this).offset();
        let relX = e.pageX - parentOffset.left;
        let relY = e.pageY - parentOffset.top;
        $(this).find('.btnHover').css({"left": relX, "top": relY });
        $(this).find('.btnHover').removeClass('animateOut');
    });

      </script>
@endpush
