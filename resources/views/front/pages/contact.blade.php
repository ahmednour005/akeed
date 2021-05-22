@extends('front.layouts.master')
@push('custom-style')
  {{-- enter other style  --}}
@endpush
@section('title','Home')
@section('content')
<div class="container">

    <section class="contact-form">
        <div class="container">
          <div class="contactinfo">
            <div>
              <i class="icofont-headphone-alt-2 head-icon"></i>
              <h2>Contact Us ?</h2>
              <p>
                How can we help you ?
              </p>
              <p>
                You will be contacted within 24 hours
              </p>

              {{-- <ul class="info">
                <li>
                  <span>
                    <i class="icofont-map-pins icons"></i>
                  </span>
                  <span>
                    Sohag , st.mraga<br />
                    <!-- Smithville <br />
                    Smithland -->
                  </span>
                </li>
                <li>
                  <span>
                    <i class="icofont-email icons"></i>
                  </span>
                  <span>
                   testEmail01@gmail.com
                  </span>
                </li>
                <li>
                  <span>
                    <i class="icofont-smart-phone icons"></i>
                  </span>
                  <span>
                    01234567890
                  </span>
                </li>
              </ul> --}}
            </div>
          </div>
          <div class="contactusform">
            <!-- <h2>ارسل لنا رساله</h2> -->
            <form action="" method="post">
              @csrf
            <div class="formBox">

              <div class="inputBox w50">
                <input type="text" name="name" required>
                <span>Name </span>
              </div>
              <div class="inputBox w50">
                <input type="text" name="phone" >
                <span>Phone</span>
              </div>
              <div class="inputBox w50">
                <input type="email" name="email" required>
                <span>Email</span>
              </div>
              <div class="inputBox w100">
                <textarea name="message" required></textarea>
                <span >Message</span>
              </div>
              <div class="inputBox w50 text-center">
                <input type="submit" value="Send">
              </div>

            </div>
            </form>
          </div>
        </div>
      </section>
    <div class="row">

            <div class="col-4 contact-card">
                <div class="contact-info">
                    <div>
                        <i class="icofont-google-map map-icon"></i>
                    </div>
                    <div>
                        <h2 class="contact-header2">Headquarters</h2>
                        <p>
                            PO Box 16122 Collins Street West<br>
                            Victoria 8007 Australia
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 contact-card">
                <div class="contact-info">
                    <div>
                        <i class="icofont-email email-icon"></i>
                    </div>
                    <div>
                        <h2 class="contact-header2">Email Us</h2>
                        <p>
                            info@yoursite.com<br>
                            info@yoursite.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 contact-card">
                <div class="contact-info">
                    <div>
                        <i class="icofont-headphone-alt-2 head-icon"></i>
                    </div>
                    <div>
                        <h2 class="contact-header2">Call Us</h2>
                        <p>
                            +61 3 8376 6284<br>
                            +61 3 8376 6185
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom-script')
  {{-- enter other script  --}}
@endpush
