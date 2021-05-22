@extends('front.layouts.master')
@push('custom-style')
  {{-- enter other style  --}}
@endpush
@section('title','Services')
@section('content')
<div id="services" class="section lb">
    <div class="container">
        <div class="section-title">
            <span>Services</span>
            <h3>What We Do ?</h3>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="icofont-contrast"></i>
                    </div>
                    <h2>Web Development</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a class="service-details-link" href="{{ route('services.show',1) }}">More Details..</a>
                </div>
            </div><!-- end col -->
            <div class="col-md-4">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="icofont-ui-cell-phone"></i>
                    </div>
                    <h2>Responsive Design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a class="service-details-link" href="{{ route('services.show',1) }}">More Details..</a>

                </div>
            </div><!-- end col -->
            <div class="col-md-4">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="icofont-code"></i>
                    </div>
                    <h2>Creative Design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a class="service-details-link" href="{{ route('services.show',1) }}">More Details..</a>
                </div>
            </div><!-- end col -->
            <div class="col-md-4">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="icofont-live-support"></i>
                    </div>
                    <h2>Support</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a class="service-details-link" href="{{ route('services.show',1) }}">More Details..</a>

                </div>
            </div><!-- end col -->
            <div class="col-md-4">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="icofont-unique-idea"></i>
                    </div>
                    <h2>Web Idea</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a class="service-details-link" href="{{ route('services.show',1) }}">More Details..</a>

                </div>
            </div><!-- end col -->
            <div class="col-md-4">
                <div class="services-inner-box">
                    <div class="ser-icon">
                        <i class="icofont-brainstorming"></i>
                    </div>
                    <h2>Graphic Design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a class="service-details-link" href="{{ route('services.show',1) }}">More Details..</a>

                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

@endsection
@push('custom-script')
  {{-- enter other script  --}}
@endpush
