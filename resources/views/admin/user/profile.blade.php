@extends('admin.layouts.app')
@section('title', 'User Profile')
@section('mid-br')
    <li><a class="parent-item" href="#">Users</a>&nbsp;<i class="fa fa-angle-right"></i>
    </li>
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="profile-sidebar">
            <div class="card card-topline-aqua">
                <div class="card-body no-padding height-9">
                    <div class="row">
                        <div class="profile-userpic">
                            <img src="{{ asset('assets') }}/img/dp.jpg" class="img-responsive" alt=""> 
                        </div>
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"> {{ $user->real_name ? $user->real_name : $user->name }} </div>
                        <div class="profile-usertitle-job"> Jr. Professor </div>
                    </div>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Followers</b> <a class="pull-right">1,200</a>
                        </li>
                        <li class="list-group-item">
                            <b>Following</b> <a class="pull-right">750</a>
                        </li>
                        <li class="list-group-item">
                            <b>Friends</b> <a class="pull-right">11,172</a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">Follow</button>
                        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink">Message</button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                </div>
            </div>
            
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="profile-tab-box">
                    <div class="p-l-20">
                        <ul class="nav ">
                            <li class="nav-item tab-all"><a
                                class="nav-link active show" href="#tab1" data-toggle="tab">About Me</a></li>
                            <li class="nav-item tab-all p-l-20"><a class="nav-link"
                                href="#tab2" data-toggle="tab">Activity</a></li>
                            <li class="nav-item tab-all p-l-20"><a class="nav-link"
                                href="#tab3" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div>
                </div>
                <div class="white-box">
                            <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                    <div id="biography" >
                                        <div class="row">
                                            <div class="col-md-3 col-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">John Deo</p>
                                            </div>
                                            <div class="col-md-3 col-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johndeo@example.com</p>
                                            </div>
                                            <div class="col-md-3 col-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">India</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Completed my graduation in Arts from the well known and renowned institution of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was affiliated to M.S. University. I ranker in University exams from the same university from 1996-01.</p>
                                        <p>Worked as  Professor and Head of the department at Sarda Collage, Rajkot, Gujarat from 2003-2015 </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <br>
                                        
                                        <br>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="full-width p-l-20">
                                                <div class="panel">
                                                    <form>
                                                        <textarea class="form-control p-text-area" rows="4" placeholder="Whats in your mind today?"></textarea>
                                                    </form>
                                                    <footer class="panel-footer">
                                                        <button class="btn btn-post pull-right">Post</button>
                                                        <ul class="nav nav-pills p-option">
                                                            <li>
                                                                <a href="#"><i class="fa fa-user"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-camera"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa  fa-location-arrow"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-meh-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </footer>
                                                </div>
                                            </div>
                                            <div class="full-width p-l-20">
                                                <ul class="activity-list">
                                                    <li>
                                                        <div class="avatar">
                                                            <img src="assets/img/user/user1.jpg" alt="" />
                                                        </div>
                                                        <div class="activity-desk">
                                                            <h5><a href="#">Rajesh</a> <span>Uploaded 3 new photos</span></h5>
                                                            <p class="text-muted">7 minutes ago near Alaska, USA</p>
                                                            <div class="album">
                                                                <a href="#">
                                                                    <img alt="" src="assets/img/mega-img1.jpg">
                                                                </a>
                                                                <a href="#">
                                                                    <img alt="" src="assets/img/mega-img2.jpg">
                                                                </a>
                                                                <a href="#">
                                                                    <img alt="" src="assets/img/mega-img3.jpg">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar">
                                                            <img src="assets/img/user/user3.jpg" alt="" />
                                                        </div>
                                                        <div class="activity-desk">
                                                            <h5><a href="#">John Doe</a> <span>attended a meeting with</span>
                                                                            <a href="#">Lina Smith.</a></h5>
                                                            <p class="text-muted">2 days ago near Alaska, USA</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar">
                                                            <img src="assets/img/user/user4.jpg" alt="" />
                                                        </div>
                                                        <div class="activity-desk">
                                                            <h5><a href="#">Kehn Anderson</a> <span>completed the task “wireframe design” within the dead line</span></h5>
                                                            <p class="text-muted">4 days ago near Alaska, USA</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar">
                                                            <img src="assets/img/user/user5.jpg" alt="" />
                                                        </div>
                                                        <div class="activity-desk">
                                                            <h5><a href="#">Jacob Ryan</a> <span>was absent office due to sickness</span></h5>
                                                            <p class="text-muted">4 days ago near Alaska, USA</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="post-box"> <span class="text-muted text-small"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 minutes ago</span>
                                                    <div class="post-img"><img src="assets/img/slider/fullimage1.jpg" class="img-responsive" alt=""></div>
                                                    <div>
                                                        <h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                                        <p> <a href="#" class="btn btn-raised btn-info btn-sm"><i class="fa fa-heart-o" aria-hidden="true"></i> Like (5) </a> <a href="#" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                    </div>
                                                </div>
                                                 <div class="post-box"> <span class="text-muted text-small"><i class="fa fa-clock-o" aria-hidden="true"></i> 37 minutes ago</span>
                                                    <div class="post-img"><img src="assets/img/slider/fullimage2.jpg" class="img-responsive" alt=""></div>
                                                    <div>
                                                        <h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                                        <p> <a href="#" class="btn btn-raised btn-info btn-sm"><i class="fa fa-heart-o" aria-hidden="true"></i> Like (5) </a> <a href="#" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                    </div>
                                                </div>
                                                 <div class="post-box"> <span class="text-muted text-small"><i class="fa fa-clock-o" aria-hidden="true"></i> 53 minutes ago</span>
                                                    <div class="post-img"><img src="assets/img/slider/fullimage3.jpg" class="img-responsive" alt=""></div>
                                                    <div>
                                                        <h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                                        <p> <a href="#" class="btn btn-raised btn-info btn-sm"><i class="fa fa-heart-o" aria-hidden="true"></i> Like (5) </a> <a href="#" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 p-t-20 text-center"> 
                                                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Load More</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="card-head">
                                                <header>Password Change</header>
                                                <button id = "panel-button2" 
                                                       class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
                                                       data-upgraded = ",MaterialButton">
                                                       <i class = "material-icons">more_vert</i>
                                                    </button>
                                                    <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                                       data-mdl-for = "panel-button2">
                                                       <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                                                       <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                                                       <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                                                    </ul>
                                            </div>
                                            <div class="card-body " id="bar-parent1">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="simpleFormEmail">User Name</label>
                                                        <input type="email" class="form-control" id="simpleFormEmail" placeholder="Enter user name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="simpleFormPassword">Current Password</label>
                                                        <input type="password" class="form-control" id="simpleFormPassword" placeholder="Current Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="simpleFormPassword">New Password</label>
                                                        <input type="password" class="form-control" id="newpassword" placeholder="New Password">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>
</div>
@endsection