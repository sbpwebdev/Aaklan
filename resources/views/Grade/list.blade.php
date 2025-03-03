@include('header')

        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Grade</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Aaklan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Grade</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="{{ route('grades.index')  }}">List View</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Grade-profile">Profile</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="{{ route('grades.create')  }}">Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Grade-all">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Roll No.">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Admission Date">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-block" title="">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive card">
                            <table class="table table-hover table-vcenter table-striped mb-0 text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                                                                
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                @foreach ($Grades as $Grade)
                                    <tr>
                                        <td>{{ $Grade->grade_name }}</td>
                                     
                                        <td>
                                           
                                            <a href="{{ route('grades.edit',$Grade->grade_id)  }}" >
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit">
                                            
                                            <i class="fa fa-edit"></i>
                                        </button>
                                            </a>
                                            <form action="{{ route('grades.destroy', $Grade->grade_id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                              
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Start main footer -->
       
    </div>    
  

    <!-- Add New Event popup -->
<div class="modal fade" id="successModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add</strong> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                 <p id="successMessage"></p>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-success save-event" data-dismiss="modal">Save</button> -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
//$(document).ready(function(){
    //@if(session('success'))
            var successMessage = "{{ session('success') }}";
            alert(successMessage);
            // Set the success message inside the modal body
            $('#successMessage').text(successMessage);
            // Show the modal
            $('#successModal').modal();
       // @endif
//});
</script>
@include('footer')
<!-- <script type="text/javascript">
    $(document).ready(function() {
        alert("hi...");
        @if(session('success'))
            var successMessage = "{{ session('success') }}";
            alert(successMessage);
            // Set the success message inside the modal body
            $('#successMessage').text(successMessage);
            // Show the modal
            $('#successModal').modal('show');
        @endif
    });
</script> -->


