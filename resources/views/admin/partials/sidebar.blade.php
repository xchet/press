

<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>

                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="row">
                            <div class="sidebar-userpic">
                                <img src="{{ asset('assets') }}/img/dp.jpg" class="img-responsive" alt="">
                                {{-- <img src="{{ $avartar }}" class="img-responsive" alt=""> --}}
                            </div>
                        </div>
                        @auth
                            <div class="profile-usertitle">
                                <div class="sidebar-userpic-name"> {{ Auth::user()->real_name ? Auth::user()->real_name  : Auth::user()->name }} </div>
                                <div class="profile-usertitle-job"> Manager </div>
                            </div>
                            <div class="sidebar-userpic-btn">
                                <a class="tooltips" href="{{ route('profile') }}" data-placement="top" data-original-title="Profile">
                                    <i class="material-icons">person_outline</i>
                                </a>
                                <a class="tooltips" href="emailInbox" data-placement="top" data-original-title="Mail">
                                    <i class="material-icons">mail_outline</i>
                                </a>
                                <a class="tooltips" href="chat" data-placement="top" data-original-title="Chat">
                                    <i class="material-icons">chat</i>
                                </a>
                                <a class="tooltips" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" data-placement="top" data-original-title="Logout">
                                    <i class="material-icons">input</i>
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            
                        @endauth
                    </div>
                </li>

                <li class="menu-heading">
                    <span>-- Main</span>
                </li>
                @include('admin.partials.menu')
            </ul>
        </div>
    </div>
</div>
