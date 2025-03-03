@include('header')

<div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Staff</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Staff</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link " href="{{ route('staffs.index')  }}">List View</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Staff-profile">Profile</a></li> -->
                        <li class="nav-item"><a class="nav-link active" href="{{ route('staffs.create')  }}">Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="Staff-profile">
                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-body w_user">
                                        <div class="user_avtar">
                                            <img class="rounded-circle" src="{{ Storage::url('staff/' . $Staff->Staff_images) }}" alt="">
                                        </div>
                                        <div class="wid-u-info">
                                        <h5>{{ $Staff->Staff_name }}</h5>
                                            <p class="text-muted m-b-0">{{ $Staff->Staff_email }} | {{ $Staff->Staff_contact }} </p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <h5 class="mb-0">270</h5>
                                                    <small>Followers</small>
                                                </li>
                                                <li>
                                                    <h5 class="mb-0">310</h5>
                                                    <small>Following</small>
                                                </li>
                                                <li>
                                                    <h5 class="mb-0">908</h5>
                                                    <small>Liks</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">About Me</h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
									<div class="card-body">
										<p>Hello I am Celena Anderson a Clerk in Xyz College USA. I love to work with all my college staff and seniour professors.</p>
										<ul class="list-group">
											<li class="list-group-item">
												<b>Gender </b>
												<div>Female</div>
											</li>
											<li class="list-group-item">
												<b>Operation Done </b>
												<div>30+</div>
											</li>
											<li class="list-group-item">
												<b>Degree </b>
												<div>M.Com.</div>
                                            </li>
                                            <li class="list-group-item">
												<b>Designation</b>
												<div>Jr. Clerk</div>
											</li>
                                            <li class="list-group-item">
                                                <div class="clearfix">
                                                    <div class="float-left"><strong>Telly</strong></div>
                                                    <div class="float-right"><small class="text-muted">35%</small></div>
                                                </div>
                                                <div class="progress progress-xxs">
                                                    <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="clearfix">
                                                    <div class="float-left"><strong>Account</strong></div>
                                                    <div class="float-right"><small class="text-muted">72%</small></div>
                                                </div>
                                                <div class="progress progress-xxs">
                                                    <div class="progress-bar bg-red" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="clearfix">
                                                    <div class="float-left"><strong>MS Office</strong></div>
                                                    <div class="float-right"><small class="text-muted">60%</small></div>
                                                </div>
                                                <div class="progress progress-xxs">
                                                    <div class="progress-bar bg-blue" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
											<div class="col-md-4 col-sm-4 col-6">
												<div class="font-18 font-weight-bold">37</div>
												<div>Projects</div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="font-18 font-weight-bold">51</div>
												<div>Tasks</div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="font-18 font-weight-bold">61</div>
												<div>Uploads</div>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Timeline Activity</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                            <div class="item-action dropdown ml-2">
                                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote">
                                            Hello there,
                                            <br/>
                                            <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                                            <p>Please try <b>paste some texts</b> here</p>
                                        </div>
                                        <div class="timeline_item ">
                                            <img class="tl_avatar" src="../assets/images/xs/avatar1.jpg" alt="" />
                                            <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA <small class="float-right text-right">20-April-2024 - Today</small></span>
                                            <h6 class="font600">Hello, 'Im a single div responsive timeline without media Queries!</h6>
                                            <div class="msg">
                                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                                                <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 12 Love</a>
                                                <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comments"></i> 1 Comment</a>
                                                <div class="collapse p-4 section-gray mt-2" id="collapseExample">
                                                    <form class="well">
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                    <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                        <li>
                                                            <div class="avatar_img">
                                                                <img class="rounded img-fluid" src="../assets/images/xs/avatar4.jpg" alt="">
                                                            </div>
                                                            <div class="comment_body">
                                                                <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                                <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>                                
                                        </div>
                                        <div class="timeline_item ">
                                            <img class="tl_avatar" src="../assets/images/xs/avatar4.jpg" alt="" />
                                            <span><a href="javascript:void(0);" title="">Dessie Parks</a> Oakland, CA <small class="float-right text-right">19-April-2024 - Yesterday</small></span>
                                            <h6 class="font600">Oeehhh, that's awesome.. Me too!</h6>
                                            <div class="msg">
                                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                                <div class="timeline_img mb-20">
                                                    <img class="width100" src="../assets/images/gallery/1.jpg" alt="Awesome Image">
                                                    <img class="width100" src="../assets/images/gallery/2.jpg" alt="Awesome Image">
                                                </div>
                                                <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 23 Love</a>
                                                <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="fa fa-comments"></i> 2 Comment</a>
                                                <div class="collapse p-4 section-gray mt-2" id="collapseExample1">
                                                    <form class="well">
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                    <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                        <li>
                                                            <div class="avatar_img">
                                                                <img class="rounded img-fluid" src="../assets/images/xs/avatar4.jpg" alt="">
                                                            </div>
                                                            <div class="comment_body">
                                                                <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                                <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                                <div class="timeline_img mb-20">
                                                                    <img class="width150" src="../assets/images/gallery/7.jpg" alt="Awesome Image">
                                                                    <img class="width150" src="../assets/images/gallery/8.jpg" alt="Awesome Image">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="avatar_img">
                                                                <img class="rounded img-fluid" src="../assets/images/xs/avatar3.jpg" alt="">
                                                            </div>
                                                            <div class="comment_body">
                                                                <h6>Dessie Parks <small class="float-right font-14">1min ago</small></h6>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>                                    
                                            </div>
                                        </div>
                                        <div class="timeline_item ">
                                            <img class="tl_avatar" src="../assets/images/xs/avatar7.jpg" alt="" />
                                            <span><a href="javascript:void(0);" title="" >Rochelle Barton</a> San Francisco, CA <small class="float-right text-right">12-April-2024</small></span>
                                            <h6 class="font600">An Engineer Explains Why You Should Always Order the Larger Pizza</h6>
                                            <div class="msg">
                                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                                                <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 7 Love</a>
                                                <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="fa fa-comments"></i> 1 Comment</a>
                                                <div class="collapse p-4 section-gray mt-2" id="collapseExample2">
                                                    <form class="well">
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('footer')
