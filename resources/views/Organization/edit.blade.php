@include('header')

        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Organization</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Aaklan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Organization</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                         <li class="nav-item"><a class="nav-link "  href="{{ route('organizations.index')  }}">List View</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Student-profile">Profile</a></li> -->
                        <li class="nav-item"><a class="nav-link " href="{{ route('organizations.create')  }}">Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div id="Student-add">
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
                                    <form class="card-body" action="{{ route('organizations.update', $organization, $organization->organization_id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Name <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="organization_name" id="organization_name" placeholder="Enter Organization name" value="{{ old('organization_name', $organization->organization_name) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Email <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="organization_email" id="organization_email"  value="{{ old('organization_email', $organization->organization_email) }}" placeholder="Enter organization email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Contact <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="organization_contact" id="organization_contact"  value="{{ old('organization_contact', $organization->organization_contact) }}" placeholder="Enter contact">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">City <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="City" name="organization_city" id="organization_city"  value="{{ old('organization_city', $organization->organization_city) }}"  placeholder="Enter city">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">State <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="State" name="organization_state" id="organization_state"  value="{{ old('organization_state', $organization->organization_state) }}"  placeholder="Enter state">
                                            </div>
                                        </div>
                                   
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Address <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="organization_address" id="organization_address"  placeholder="Enter address"   value="{{ old('organization_address', $organization->organization_address) }}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Organization Code </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Organization Code" name="organization_code" id="organization_code"  placeholder="Enter Organization code"   value="{{ old('organization_code', $organization->organization_code) }}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label class="custom-control custom-checkbox"> Other Organization
                                                        <input type="checkbox" class="custom-control-input" onchange="showInput()" name="is_other_organization" id="is_other_organization">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                        </div>
                                        <div class="form-group row" style="display:none">
                                            <label class="col-md-3 col-form-label">Other Organization Code </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Other Organization Code" name="Other_organization_code" id="Other_Otherorganization_code"  placeholder="Enter Other Organization code"   value="{{ old('other_organization_code', $organization->other_organization_code) }}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Referance Code <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Referance Code"  value="{{ old('referance_code', $organization->referance_code) }}"  name="referance_code" id="referance_code"  placeholder="Enter referance code">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Organization Type <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control input-height" name="organization_type_id" id="organization_type_id"  placeholder="Enter organization type" value="{{ old('organization_type_id', $organization->organization_type_id) }}">
                                                    <option value="">Select Organization Type</option>
                                                    <option value="1">School</option>
                                                    <option value="2">College</option>
                                                    <option value="3">Institute</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Number Of Trainers </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Number Of Trainers" name="no_of_trainers" id="no_of_trainers"  placeholder="Enter number of trainerss" value="{{ old('no_of_trainers', $organization->no_of_trainers) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Organization Logo</label>
                                            <div class="col-md-9">
                                                <input type="file" class="dropify" name="organization_images" id="organization_images">
                                                <!-- <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
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