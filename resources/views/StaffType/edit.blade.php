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
                        <li class="nav-item"><a class="nav-link " data-toggle="tab" href="{{ route('StaffTypes.index')  }}">List View</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#StaffType-profile">Profile</a></li> -->
                        <li class="nav-item"><a class="nav-link active" href="{{ route('StaffTypes.create')  }}">Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div id="Grade-add">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Information</h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <form class="card-body" action="{{ route('grades.update',  $Grade->grade_id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Name <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="Grade_name" id="Grade_name" placeholder="Enter Grade name" value="{{ old('grade_name', $Grade->grade_name) }}">
                                            </div>
                                        </div>
                                       
                                        <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <!-- <button type="submit" class="btn btn-outline-secondary">Cancel</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        <!-- Start main footer -->
       
    </div>    
    @include('footer')
   