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
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Staff-profile">Profile</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="{{ route('staffs.create')  }}">Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">                  
                        
                    <div id="Staff-grid">
                        <div class="row">
                        @foreach ($Staffs as $staff)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="card-profile-img" src="{{ Storage::url('staff/' . $staff->Staff_images) }}" alt="">
                                        <h5 class="mb-0">{{ $staff->Staff_name }}</h5>
                                        <!-- <span>Librarian</span> -->
                                        <div class="text-muted">+ (91) {{ $staff->Staff_contact }}</div>
                                        <p class="mb-4 mt-3">{{ $staff->Staff_skills }}</p>
                                        <a href="{{ route('staffs.show', $staff->Staff_id)  }}">
                                            <button class="btn btn-primary btn-sm">Read More</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start main footer -->
       
    </div>    
    @include('footer')