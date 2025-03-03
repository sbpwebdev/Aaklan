@include('header')


        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Staff</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Aaklan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Staff</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link " href="{{ route('staffs.index')  }}">List View</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Staff-profile">Profile</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="{{ route('staffs.create')  }}">Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div id="Staff-add">
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
                                    <form class="card-body" action="{{ route('staffs.update', $Staff, $Staff->Staff_id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Name <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="Staff_name" id="Staff_name" placeholder="Enter Staff name" value="{{ old('Staff_name', $Staff->Staff_name) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Email <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="Staff_email" id="Staff_email" placeholder="Enter Staff email" value="{{ old('Staff_email', $Staff->Staff_email) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Contact <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="Staff_contact" id="Staff_contact" placeholder="Enter contact" value="{{ old('Staff_contact', $Staff->Staff_contact) }}">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Qualification <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Qualification" name="qualification" id="qualification" value="{{ old('qualification', $Staff->qualification) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Organization <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Staff Organization" name="Staff_organization" id="Staff_organization"  value="{{ old('Staff_organization', $Staff->Staff_organization) }}">
                                            </div>
                                        </div>
                                   
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Staff Type <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="Staff_type_id" id="Staff_type_id"  placeholder="Select Staff type" value="{{ old('Staff_type_id', $Staff->Staff_type_id) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Staff Course </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Staff Course" name="Staff_course_id" id="Staff_course_id"  value="{{ old('Staff_course_id', $Staff->Staff_course_id) }}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">City </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="City" name="Staff_city" id="Staff_city"  value="{{ old('Staff_city', $Staff->Staff_city) }}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Staff Skills </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Staff Skills" name="Staff_skills" id="Staff_skills"  value="{{ old('Staff_skills', $Staff->Staff_skills) }}" >
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <!-- <button type="submit" class="btn btn-outline-secondary">Cancel</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Account Information</h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>User Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Account Information</h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>LinkedIN</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Behance</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>dribbble</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
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
    <script>
        function showInput(){
           var isChecked = document.getElementById("myCheck").checked;
            if(isChecked == true){
                document.getElementById('testdiv').style.disaply = 'block';
            }else{
                document.getElementById('testdiv').style.disaply = 'none';
            }
        }
    </script>