@include('header')


        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Staffs</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Aaklan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Staffs</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" href="{{ route('staffs.index')  }}">List View</a></li>
                        <li class="nav-item"><a class="nav-link active" href="{{ route('/staffs/gridlist')  }}">Grid View</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Staff-profile">Profile</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="{{ route('staffs.create')  }}">Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    
                       
                        <div class="table-responsive card">
                            <table class="table table-hover table-vcenter table-striped mb-0 text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <!-- <th>Referance Code</th>
                                        <th>Address</th> -->
                                        <th>Skills</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                @foreach ($Staffs as $staff)
                                    <tr>
                                        <td>
                                        <img class="avatar" src="{{ Storage::url('staff/' . $staff->Staff_images) }}" alt="Organization Image" width="100">
                                        </td>
                                        <td>{{ $staff->Staff_name }}</td>
                                        <td>{{ $staff->Staff_email }}</td>
                                        <td>{{ $staff->Staff_contact }}</td>
                                        <!-- <td>{{ $staff->organization_code }}</td>
                                        <td>{{ $staff->Staff_type }}</td> -->
                                        <td>{{ $staff->Staff_skills }}</td>
                                        <td>
                                            <a href="{{ route('staffs.show', $staff->Staff_id)  }}">
                                                <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="{{ route('staffs.edit', $staff->Staff_id)  }}" >
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit">
                                            
                                            <i class="fa fa-edit"></i>
                                        </button>
                                            </a>
                                            <form action="{{ route('staffs.destroy', $staff->Staff_id) }}" method="POST" style="display:inline;">
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


