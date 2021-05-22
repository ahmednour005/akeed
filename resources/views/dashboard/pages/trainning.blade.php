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
                 <h3 class="card-title">Trainning Info</h3>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                     <tr>
                       <th>Name</th>
                       <th>Phone</th>
                       <th>E-Mail</th>
                       <th>Address</th>
                       <th>Course</th>
                       <th>Cv</th>
                       <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                       @foreach($trainning as $info)
                       <tr>
                           <td>{{ $info->name }}</td>
                           <td>{{ $info->phone }}</td>
                           <td>{{ $info->email }}</td>
                           <td>{{ $info->address }}</td>
                           <td>{{ $info->course }}</td>
                           <td><a class="btn btn-success mb-2" style="font-size: 12px"
                            href="{{ asset("cvs/Cv/$info->cv ") }}"
                            target="_blank">@lang('download cv')
                          </a>
                           </td>
                          <td>
                           <form action="{{route('cources.destroy',$info)}}" method="post" >
                               @csrf
                               @method('delete')
                     <button  class="delete_ancor btn btn-danger">
                       <i class="fa fa-trash"></i>
                     </button>
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
