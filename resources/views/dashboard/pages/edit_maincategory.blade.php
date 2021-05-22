@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Edit Category
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Edit Category / <a href="{{ route('maincategory.index') }}">Categories</a> /
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
                    <i class="pe-7s-diamond">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('maincategory.update',$categories->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label >English Name</label>
                            <input type="text" class="form-control" name="en_name" placeholder="English name" value="{{ $categories->en_name }}" >
                        </div>
                        <div class="col-md-12 mb-3">
                            <label >Arabic Name</label>
                            <input type="text" class="form-control" name="ar_name"  placeholder="Arabic name" value="{{ $categories->ar_name }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationImage">Image</label>
                            <div class="input-group">
                                <input type="file" name="image" class="form-control" id="validationImage" placeholder="Image" aria-describedby="inputGroupPrepend" value="{{ $categories->image }}" >

                            </div>
                        </div>
                    </div>
                    {{method_field('PUT')}}
                    <button class="btn btn-warning" type="submit">Update</button>
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
