@extends('front.layouts.master')
@push('custom-style')

@endpush
@section('title','Home')
@section('content')

<div class="row-training">

    <section class="section ">
        <div class="container trainning">
            <div class="row">

                <div class="col-7 ">
                    <div class="trainning-background">
                        <div class="course-overlay"></div>
                        <div class="trainning-title">
                            <h1>AKeed Courses</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <main >
                        <form  action="{{ route('trainning.store') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                        <div class="form-item box-item">
                            <input type="text" name="name" placeholder="Name" data-required>
                            <small class="errorReq validation-ms"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                        </div>
                        <div class="form-item box-item">
                            <input type="email" name="email" placeholder="Email" data-email data-required>
                            <small class="errorReq  validation-ms"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                        <small class="errorEmail  validation-ms"><i class="fa fa-asterisk" aria-hidden="true"></i> email is not valid</small>
                        </div>

                        <div class="form-item box-item">
                            <input type="text" name="address" placeholder="Address" data-required>
                            <small class="errorReq  validation-ms"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                        </div>

                        <div class="form-item box-item">
                            <input type="text" name="phone" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control cources" id="exampleFormControlSelect1" name="course">
                                <option selected hidden>Select Cource</option>
                                @foreach ($courses as $course )
                                    <option  value="{{ $course->name }}">{{ $course->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-item box-item mt-3">
                            <div class="input-group mt-3">
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" name="cv" id="inputGroupFile02" required>
                                <label class="custom-file-label" for="inputGroupFile02">Upload CV</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-item">
                            <button type="submit" class="submit">Submit</span>
                        </div>
                        </form>
                    </main>
                </div>
            </div>
    </section>
  </div>
</div>

@endsection
@push('custom-script')

<script>
    $('#inputGroupFile02').on('change',function(){
                   var fileName = $(this).val();
                   $(this).next('.custom-file-label').html(fileName);
               })
</script>

@endpush
