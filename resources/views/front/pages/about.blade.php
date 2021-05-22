@extends('front.layouts.master')
@push('custom-style')
  {{-- enter other style  --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
@endpush
@section('title','Home')
@section('content')

      {{-- about us  --}}
      <div class="about ">
        <div class="container">
            <div class="section-title">
                <span>About Us</span>
                <h3>About Akeed Company </h3>
            </div>
            <div class="row">
                <div class="col-12  col-md-6 wow bounceInLeft" data-wow-duration="2s"
                       data-wow-delay="0.2s">
                       <div class="about-age-image">
                              <img src="{{ asset('asset/images/h9.jpg') }}" >
                       </div>
                </div>
                <div class="col-12 col-md-6 wow bounceInRight" data-wow-duration="2s"
                    data-wow-delay="0.4s">
                    <div class="about-content">
                        <h3 >About</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>

                    </div>
                </div>
            </div>


            <div class="row mt-5">

                <div class="col-12 col-md-6 wow bounceInRight" data-wow-duration="2s"
                    data-wow-delay="0.4s">
                    <div class="about-content">
                        <h3 >Mission</h3>
                        <p>
                            building brand business strategies and carefully execute it to improve the connections between brands,
                             business and people through branding,building brand business strategies and carefully.
                             business and people through branding,building brand business strategies and carefully.
                             business and people through branding,building brand business strategies and carefully.
                             business and people through branding,building brand business strategies and carefully.
                        </p>

                    </div>
                </div>
                <div class="col-12  col-md-6 wow bounceInLeft" data-wow-duration="2s"
                  data-wow-delay="0.2s">
                <div class="about-age-image">
                       <img src="{{ asset('asset/images/s2.jpg') }}" >
                </div>
         </div>

         <div class="row mt-5">
            <div class="col-12  col-md-6 wow bounceInLeft" data-wow-duration="2s"
                   data-wow-delay="0.2s">
                   <div class="about-age-image">
                          <img src="{{ asset('asset/images/h10.jpeg') }}" >
                   </div>
            </div>
            <div class="col-12 col-md-6 wow bounceInRight" data-wow-duration="2s"
                data-wow-delay="0.4s">
                <div class="about-content">
                    <h3 >Strategy</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>

                </div>
            </div>
        </div>



            </div>
        </div>
    </div>

    {{-- company date --}}
    <div class="company-date" dir="ltr">
        <div class="container">

            <div class="section-title">
                <span>Company history</span>
                <h3>The stages of the company's development</h3>
            </div>
            <div class="timeline">
                <div class="timeline-nav">
                    @foreach ($dates as   $date)
                      <div class="timeline-nav__item">{{ Carbon\Carbon::parse($date->company_date)->format('Y') }}</div>
                    @endforeach

                </div>
                <div class="timeline-wrapper">
                    <div class="timeline-slider">

                        @foreach ($dates as  $date)
                        <div class="timeline-slide" >
                            <div class="timeline-slide__content"   data-year="{{ Carbon\Carbon::parse($date->company_date)->format('Y') }}">
                                <span class="timeline-year">{{ Carbon\Carbon::parse($date->company_date)->format('Y') }}</span>
                                <h4 class="timeline-title">{{ $date->en_title }}</h4>
                                <p class="timeline-text">
                                    {{ $date->en_details }}
                                </p>
                            </div>
                        </div>

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>


     {{-- about us  --}}
     <div class="partner ">
        <div class="container">
            <div class="section-title">
                <span>Partner </span>
                <h3>We partner with companies of all sizes, all around the world </h3>
            </div>
            <div class="row">
                <div class="col-12  col-md-3 wow bounceInUp" data-wow-duration="2s"
                       data-wow-delay="0.2s">
                        <div class="partner-item">
                            <img src="{{ asset('asset/images/pr1.png') }}" alt="">
                        </div>
                </div>
                <div class="col-12  col-md-3 wow bounceInUp" data-wow-duration="2s"
                data-wow-delay="0.2s">
                 <div class="partner-item">
                     <img src="{{ asset('asset/images/pr2.png') }}" alt="">
                 </div>
                </div>
                <div class="col-12  col-md-3 wow bounceInUp" data-wow-duration="2s"
                data-wow-delay="0.2s">
                <div class="partner-item">
                    <img src="{{ asset('asset/images/pr3.jpg') }}" alt="">
                </div>
                </div>
                <div class="col-12  col-md-3 wow bounceInUp" data-wow-duration="2s"
                data-wow-delay="0.2s">
                <div class="partner-item">
                    <img src="{{ asset('asset/images/pr4.jpg') }}" alt="">
                </div>
                </div>
                <div class="col-12  col-md-3 wow bounceInUp" data-wow-duration="2s"
                data-wow-delay="0.2s">
                <div class="partner-item">
                    <img src="{{ asset('asset/images/pr5.jpg') }}" alt="">
                </div>
                </div>
                <div class="col-12  col-md-3 wow bounceInUp" data-wow-duration="2s"
                data-wow-delay="0.2s">
                <div class="partner-item">
                    <img src="{{ asset('asset/images/pr6.jpg') }}" alt="">
                </div>
                </div>
                <div class="col-12  col-md-3 wow bounceInUp" data-wow-duration="2s"
                data-wow-delay="0.2s">
                <div class="partner-item">
                    <img src="{{ asset('asset/images/pr7.jpg') }}" alt="">
                </div>
                </div>
                <div class="col-12  col-md-3 wow bounceInUp" data-wow-duration="2s"
                data-wow-delay="0.2s">
                <div class="partner-item">
                    <img src="{{ asset('asset/images/pr8.jpg') }}" alt="">
                </div>
                </div>


            </div>
        </div>
    </div>


@endsection
@push('custom-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  {{-- enter other script  --}}
  <script>

    $(function () {
        $('.timeline-nav').slick({
            slidesToShow: 12,
            slidesToScroll: 1,
            asNavFor: '.timeline-slider',
            centerMode: false,
            focusOnSelect: true,
            mobileFirst: true,
            arrows: false,
            infinite: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 8,
                    }
                },
                {
                    breakpoint: 0,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2,
                    }
                }
            ]
        });

        $('.timeline-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.timeline-nav',
            centerMode: true,
            cssEase: 'ease',
            edgeFriction: 0.5,
            mobileFirst: true,
            speed: 500,
            responsive: [
                {
                    breakpoint: 0,
                    settings: {
                        centerMode: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        centerMode: true
                    }
                }
            ]
        });

    });

    </script>

@endpush



