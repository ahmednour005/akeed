@extends('dashboard.layouts.app')
@section('content')
<br><br>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Company Date</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="col-sm-3">
            <a class="btn btn-warning btn-add-items" href="{{ route('company_date.create') }}">Add New</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Company Date</th>
                    <th>Arabic Title</th>
                    <th>English Title</th>
                    <th class="hiddenCols">Arabic Details</th>
                    <th class="hiddenCols">English Details</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($company as $co)
                    <tr>
                        <td>{{ $co->company_date }}</td>
                        <td>{{ $co->ar_title }}</td>
                        <td>{{ $co->en_title }}</td>
                        <td>{{ $co->ar_details }}</td>
                        <td>{{ $co->en_details }}</td>
                        <td>
                            <form action="{{route('company_date.destroy',$co)}}" method="post" >
                                @csrf
                                @method('delete')
                                <button  class="delete_ancor btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                            <a  href="{{route('company_date.edit',$co->id)}}" class="edit_ancor btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>

                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

@endsection

@push('custom-scripts')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true,
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
        "buttons": ["copy", "csv", "excel", "print", "colvis"],
        columnDefs: [
                        {
                        targets: "hiddenCols", visible: false
                    }
                    ],
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    </script>
@endpush
