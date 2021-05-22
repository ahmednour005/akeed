@extends('front.layouts.master')
@push('custom-style')

@endpush
@section('title','Home')
@section('content')
<!------------- start portfilo --------------->
<section class="protfolio" id="portfolio">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <ul class="filters text-center">
                    <li class="active" data-filter="*"><a href="#!">Show All</a></li>
                    <li data-filter=".web"><a href="#!">Website</a></li>
                    <li data-filter=".graph"><a href="#!">Graphic</a></li>
                    <li data-filter=".develop"><a href="#!">development</a></li>
                    <li data-filter=".design"><a href="#!">Design</a></li>
                </ul>
                <div class="projects">
                   <div class="row">
                         <div class="col-lg-3 col-md-6 col-sm-6 element-item graph">
                            <div class="card-wrapper ">
                                <div class="card-3 card-object card-object-hf">
                                    <a class="face front" href="{{ route('projects.show',1) }}">
                                    <img src="{{ asset('asset/images/about-vector.png') }}" alt="" >
                                    <div class="title-wrapper">
                                      <div class="title">Eyad Abu Ghoush</div>
                                      <div class="subtitle">
                                         Website
                                            </div>
                                    </div>
                                </a>
                                    </div>
                              </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-sm-6 element-item design">
                            <div class="card-wrapper ">
                                <div class="card-3 card-object card-object-hf">
                                    <a class="face front" href="{{ route('projects.show',2) }}">
                                        <img src="{{ asset('asset/images/s2.jpg') }}" alt="" >
                                    <div class="title-wrapper">
                                      <div class="title">Proj2</div>
                                      <div class="subtitle">felix pumus</div>
                                    </div></a>
                                    </div>
                              </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-sm-6 element-item design ">
                            <div class="card-wrapper ">
                                <div class="card-3 card-object card-object-hf">
                                    <a class="face front"href="{{ route('projects.show',3) }}">
                                        <img src="{{ asset('asset/images/s3.jpg') }}" alt="" >
                                    <div class="title-wrapper">
                                      <div class="title">Proj3</div>
                                      <div class="subtitle">felix pumus</div>
                                    </div></a>
                                    </div>
                              </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-sm-6 element-item develop ">
                            <div class="card-wrapper ">
                                <div class="card-3 card-object card-object-hf">
                                    <a class="face front" href="{{ route('projects.show',2) }}">
                                        <img src="{{ asset('asset/images/s3.jpg') }}" alt="" >
                                    <div class="title-wrapper">
                                      <div class="title">Kyra</div>
                                      <div class="subtitle">felix pumus</div>
                                    </div></a>
                                    </div>
                              </div>
                         </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 element-item web">
                            <div class="card-wrapper ">
                                <div class="card-3 card-object card-object-hf">
                                    <a class="face front" href="{{ route('projects.show',1) }}">
                                        <img src="{{ asset('asset/images/s3.jpg') }}" alt="" >
                                    <div class="title-wrapper">
                                      <div class="title">Kyra</div>
                                      <div class="subtitle">felix pumus</div>
                                    </div></a>
                                    </div>
                              </div>
                        </div>
                         <div class="col-lg-3 col-md-6 col-sm-6 element-item graph">
                            <div class="card-wrapper ">
                                <div class="card-3 card-object card-object-hf">
                                    <a class="face front" href="{{ route('projects.show',1) }}">
                                        <img src="{{ asset('asset/images/s3.jpg') }}" alt="" >
                                        <div class="title-wrapper">
                                        <div class="title">Kyra</div>
                                        <div class="subtitle">felix pumus</div>
                                        </div>
                                    </a>
                               </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------- end portfilo --------------->
@endsection
@push('custom-script')
<script src="{{ asset('asset/js/isotope.pkgd.min.js')}}"></script>
    <script>
    //// isotope libarary

    var $p =  $('.protfolio .projects ');
   $p.isotope({
       itemSelector: '.element-item',
        layoutMode: 'fitRows'
    });
    $('.protfolio ul li').click(function(){
         var s =$(this).attr('data-filter');
        $('.protfolio ul li').removeClass('active');
        $(this).addClass('active');
        $p.isotope({filter: s});
    });
</script>
@endpush
