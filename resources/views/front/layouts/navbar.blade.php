<div class="header">
    <div class="container">
        <div class="headerBox">

            <div class="mainHeader">
                <div class="headerTop wow fadeInDown">
                    <div class="headerTopRight">
                        <a href="tel:+01000000000">  <img src="{{ asset('asset/images/icon-call.png')}}" alt="icon"> <span class="linkText"> 800 1234 56 78 </span> </a>
                        <a href="mailto:email@gmail.com"><img src="{{ asset('asset/images/icon-envolope.png')}}" alt="icon">  <span class="linkText"> email@gmail.com </span> </a>
                    </div>
                    <div class="headerTopLeft">
                        <div class="language">
                            <a href="#" class="active"> En </a>
                            <a href="#" > عربي </a>
                        </div>
                        <div class="social">
                            <a href="#"> <i class="icofont-twitter"></i> </a>
                            <a href="#"> <i class="icofont-instagram"></i> </a>
                            <a href="#"> <i class="icofont-facebook"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="headerNav " id="headerNav">
                    <div class="logo" style="color:#FFF">
                        <!-- <a href="index.html"> <img src="{{ asset('asset/images/logo.png')}}" alt="logo" class="img-fluid"> </a> -->
                       AKeed LOGO
                    </div>
                    <div class="navMenu">
                        <ul>
                            <li class="{{ request()->is('*/')  ? 'active' : '' }}">  <a href="{{ route('home') }}">   Home  </a> </li>
                            <li class="{{ request()->is('*about')  ? 'active' : '' }}"> <a href="{{ route('about') }}"> About </a> </li>
                            <li class="{{ request()->is('*services*')  ? 'active' : '' }}"> <a href="{{ route('services') }}"> Services </a> </li>
                            <li class="{{ request()->is('*projects*')  ? 'active' : '' }}"> <a href="{{ route('projects') }}">   Projects   </a> </li>
                            <li class="{{ request()->is('*blogs*')  ? 'active' : '' }}"> <a href="{{ route('blogs') }}"> Blogs </a> </li>
                            <li class="{{ request()->is('*trainning')  ? 'active' : '' }}"> <a href="{{ route('trainning.show') }}">   Trainning </a> </li>
                            <li class="{{ request()->is('*contactUs')  ? 'active' : '' }}"> <a href="{{ route('contactUs') }}">  Contact Us </a> </li>
                        </ul>
                    </div>

                    <div class="mobile">
                        <div class="menuBtn"> <span></span> <span></span> <span></span> </div>
                        <div class="navOverlay"></div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
