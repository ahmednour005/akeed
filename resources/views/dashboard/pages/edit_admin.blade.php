@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Edit Admin
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Edit Admin / <a href="{{ route('admin.index') }}">Admins</a> /
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
                    <i class="pe-7s-add-user">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('admin.update',$admin->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">


                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Name</label>
                            <input id="name" type="text" placeholder="Name" value="{{ $admin->name }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">E-Mail</label>
                            <input id="email" type="email" name="email" value="{{ $admin->email }}"  placeholder="Email" class="form-control" readonly>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Generate Password</label>
                            <input id="password" type="password" placeholder="Add New Password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label >Image </label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="image" id="inputGroupFile02" >
                                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="checkbox" id="vehicle1" name="isAdmin"  value="1">
                            <label for="vehicle1">Admin (If you choose Admin, you cannot delete it)</label><br>
                        </div>

                    </div>
                    @method('put')
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
