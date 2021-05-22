@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Update Blog
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      All Blogs / <a href="{{ route('blogs.index') }}">Blogs</a> /
                       <a href="{{ route('dashboard.index') }}">Home</a>
                </div>
            </div>
        </div>
    </div>

      </div>
</div>
 <div class="app-main__inner">

          <div class="main-card mb-3 card ">
            <div class="card-body">
                <div class="page-title-icon">
                    <i class="pe-7s-box1">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('blogs.update',$blogs->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <label >Title</label>
                            <input type="text" class="form-control" value="{{ $blogs->title }}" name="title" placeholder="Title"  >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Date</label>
                            <input type="datetime-local" class="form-control" value="{{ $blogs->date }}" name="date"  placeholder="date"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label > Details</label>
                            <textarea type="text" class="form-control "  id="details" name="details"  placeholder="details" >{{ $blogs->details }}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label >Image *</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" value="{{ $blogs->image }}" name="image" id="inputGroupFile02" required>
                                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                              </div>
                        </div>
                    </div>
                    @method('PUT')
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>

                <script>
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            var forms = document.getElementsByClassName('needs-validation');
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
        </div>

    </div>

@endsection
@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
        ClassicEditor.create( document.querySelector( '#details' ) )
        .catch( error => {
            console.error( error );
        } );

</script>

@endpush


