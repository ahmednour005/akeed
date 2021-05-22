@extends('front.layouts.master')
@push('custom-style')
  {{-- enter other style  --}}
@endpush
@section('title','Blogs')
@section('content')

 <!-- Blogs Page  -->
 <div class="blogs">
    <div class="container">
        <div class="section-title">
            <span>Blogs</span>
            <h3>Browse the latest news </h3>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="blogBox blogBlock">
                    <a href="{{ route('blogs.show',1) }}">
                        <div class="blogVector">
                            <img src="{{ asset('asset/images/course-1.png')}}" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blogData">
                            <h2>Title of blogs card</h2>
                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="blogTime">
                                <p>
                                    <span> <img src="{{ asset('asset/images/icon-21.png') }}" alt="icon"> 25 / 4 / 2020 </span>
                                    <span> <img src="{{ asset('asset/images/icon-6.png') }}" alt="icon"> 9:30 AM </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="blogBox blogBlock">
                    <a href="{{ route('blogs.show',1) }}">
                        <div class="blogVector">
                            <img src="{{ asset('asset/images/course-2.png')}}" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blogData">
                            <h2>Title of blogs card</h2>
                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="blogTime">
                                <p>
                                    <span> <img src="{{ asset('asset/images/icon-21.png') }}" alt="icon"> 25 / 4 / 2020 </span>
                                    <span> <img src="{{ asset('asset/images/icon-6.png') }}" alt="icon"> 9:30 AM </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="blogBox blogBlock">
                    <a href="{{ route('blogs.show',1) }}">
                        <div class="blogVector">
                            <img src="{{ asset('asset/images/course-3.png')}}" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blogData">
                            <h2>Title of blogs card</h2>
                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="blogTime">
                                <p>
                                    <span> <img src="{{ asset('asset/images/icon-21.png') }}" alt="icon"> 25 / 4 / 2020 </span>
                                    <span> <img src="{{ asset('asset/images/icon-6.png') }}" alt="icon"> 9:30 AM </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="blogBox blogBlock">
                    <a href="{{ route('blogs.show',1) }}">
                        <div class="blogVector">
                            <img src="{{ asset('asset/images/course-4.png')}}" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blogData">
                            <h2>Title of blogs card</h2>
                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="blogTime">
                                <p>
                                    <span> <img src="{{ asset('asset/images/icon-21.png') }}" alt="icon"> 25 / 4 / 2020 </span>
                                    <span> <img src="{{ asset('asset/images/icon-6.png') }}" alt="icon"> 9:30 AM </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="blogBox blogBlock">
                    <a href="{{ route('blogs.show',1) }}">
                        <div class="blogVector">
                            <img src="{{ asset('asset/images/course-5.png')}}" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blogData">
                            <h2>Title of blogs card</h2>
                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="blogTime">
                                <p>
                                    <span> <img src="{{ asset('asset/images/icon-21.png') }}" alt="icon"> 25 / 4 / 2020 </span>
                                    <span> <img src="{{ asset('asset/images/icon-6.png') }}" alt="icon"> 9:30 AM </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="blogBox blogBlock">
                    <a href="{{ route('blogs.show',1) }}">
                        <div class="blogVector">
                            <img src="{{ asset('asset/images/course-6.png')}}" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blogData">
                            <h2>Title of blogs card</h2>
                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="blogTime">
                                <p>
                                    <span> <img src="{{ asset('asset/images/icon-21.png') }}" alt="icon"> 25 / 4 / 2020 </span>
                                    <span> <img src="{{ asset('asset/images/icon-6.png') }}" alt="icon"> 9:30 AM </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
@push('custom-script')
  {{-- enter other script  --}}
@endpush
