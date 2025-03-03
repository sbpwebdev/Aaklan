@include('header')


        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Students</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Students</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link "  href="{{ route('students.index')  }}">List View</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Student-profile">Profile</a></li> -->
                        <li class="nav-item"><a class="nav-link " href="{{ route('students.create')  }}">Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
<div  id="Student-add">
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
                                    <form class="card-body" action="{{ route('students.update',$Student->student_id ) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Student Name <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Enter First name"  name="student_name" id="student_name"  value="{{ old('student_name', $Student->student_name) }}">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Email</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Enter Email"  name="student_email" id="student_email" value="{{ old('student_email', $Student->student_email) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Mobile No. <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Enter Mobile No"  name="student_contact" id="student_contact" value="{{ old('student_contact', $Student->student_contact) }}">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Address <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Enter Address"  name="student_address" id="student_address" value="{{ old('student_address', $Student->student_address) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Organization Code <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Enter Organization Code"  name="organization_code" id="organization_code" value="{{ old('organization_code', $Student->organization_code) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Grade <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control input-height" placeholder="Enter Student Grade"  name="student_grade_id" id="student_grade_id" value="{{ old('student_grade_id', $Student->student_grade_id) }}">
                                                    <option value="">Select Grade</option>
                                                    <option value="1">Grade 1</option>
                                                    <option value="2">Grade 2</option>
                                                    <option value="3">Grade 3</option>
                                                    <option value="4">Grade 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Course <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control input-height" name="student_course_id" id="student_course_id" value="{{ old('student_course_id', $Student->student_course_id) }}">
                                                    <option value="">Select Course</option>
                                                    <option value="1">Coding</option>
                                                    <option value="2">English Speaking</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Type <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control input-height"  name="student_type_id" id="student_type_id" value="{{ old('student_type_id', $Student->student_type_id) }}">
                                                    <option value="">Select Type</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Offline</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Profile Picture</label>
                                            <div class="col-md-9">
                                                <input type="file" class="dropify">
                                    
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