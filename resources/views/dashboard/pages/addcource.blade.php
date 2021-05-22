@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>
                      Add Cource
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                    Add Cource / <a href="{{ route('course.index') }}">Cources</a> /
                       <a href="{{ route('dashboard.index') }}">Home</a>
                </div>
            </div>
        </div>
    </div>

      </div>
</div>
  <div class="container">
      <div class="row">
     <div class="col-5">
        <div class="app-main__inner">

            <div class="main-card  mb-3 card ">
                @if ($data)
                <div class="card-body">
                    <div class="page-title-icon">
                        <i class="pe-7s-network">
                        </i>
                    </div>
                    <form class="needs-validation " novalidate action="{{route('course.update',$data->id)}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-row ">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">Name</label>
                                <input type="text" class="form-control" value="{{ $data->name }}" name="name" placeholder="Cource Name" required>
                                <div class="valid-feedback">
                                    Looks good!
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
                @else
                <div class="card-body">
                    <div class="page-title-icon">
                        <i class="pe-7s-network">
                        </i>
                    </div>
                    <form class="needs-validation " novalidate action="{{route('course.store')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-row ">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Cource Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add New</button>
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
                @endif

          </div>

      </div>

     </div>

<div class="col-7">
    <div class="container-fluid " >
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Courses</h3>
              </div>
              <!-- /.card-header -->
              <br>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Course Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($courses as $course)
                      <tr>
                          <td>{{ $course->name }}</td>
                         <td>
                          <form action="{{route('course.destroy',$course)}}" method="post" >
                              @csrf
                              @method('delete')
                    <button  class="delete_ancor btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                          </form>

                    <a  href="{{route('course.edit',$course->id)}}" class="edit_ancor btn btn-warning">
                      <i class="fa fa-edit"></i>
                    </a>

                         </td>

                        </tr>
                      @endforeach

                  </tbody>
                </table>
              </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
</div>
  </div>

@endsection
@push('custom-scripts')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true,
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    </script>
@endpush
