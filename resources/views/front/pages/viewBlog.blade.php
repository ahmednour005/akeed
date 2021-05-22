@extends('front.layouts.master')
@push('custom-style')
  {{-- enter other style  --}}
@endpush
@section('title','Blog Details')
@section('content')

   <!-- Blog Page  -->
   <div class="blogPage secPadding">
    <div class="container">
        <div class="viewBlogVector">
            <img src="{{ asset('asset/images/blogFull.png') }}" alt="viewBlog" class="img-fluid w-100">
        </div>
        <div class="viewBlogData">
            <h2>Title of blod choose </h2>
            <div class="viewBlogTime">
                <p>
                    <span> <img src="{{ asset('asset/images/icon-21.png') }}" alt="icon"> 25 / 4 / 2020 </span>
                    <span> <img src="{{ asset('asset/images/icon-6.png') }}" alt="icon"> 9:30 AM </span>
                </p>
            </div>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <h6>Why you  must choose this</h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

        </div>
    </div>
</div>
@endsection
@push('custom-script')
  {{-- enter other script  --}}
@endpush
