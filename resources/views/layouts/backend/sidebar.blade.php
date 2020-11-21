<!-- The side bar -->
<div class="side-bar side-bar-lg-active" data-theme="purple">
    <!-- Brand details -->
    <div class="side-menu-brand d-flex flex-column justify-content-center align-items-center clear mt-3">
        <img src="{{ asset('images/glil_logo.png') }}" alt="brand_name" class="brand-img">
        <a href="{{ url('admin/') }}" class="brand-name mt-2 ml-2 font-weight-bold">GLIL</a>
    </div>
    <!-- Side bar menu -->
    <div class="the_menu mt-5">
        <!-- Heading -->
        <div class="side-menu-heading d-flex">
            <h6 class=" font-weight-bold pb-2 mx-3"> {{ Auth::user()->name }} </h6>
            <a class="font-weight-bold ml-auto px-3" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </div>

        <!-- Menu item -->
        <div id="accordion">
            <ul class="side-menu p-0 m-0 mt-3">
                <li class="side-menu-item px-3"><a href="{{ url('admin/home') }}" class="w-100 py-3 pl-4">Dashboard</a>
                </li>
                <li class="side-menu-item px-3"><a href="{{ url('admin/menu') }}" class="w-100 py-3 pl-4">Manage
                        Menu</a></li>
                <li class="side-menu-item px-3"><a href="{{ url('admin/submenu') }}" class="w-100 py-3 pl-4">Manage
                        Submenu</a></li>
                <li class="side-menu-item px-3"><a href="{{ url('admin/tabmenu') }}" class="w-100 py-3 pl-4">Manage
                        Tabmenu</a></li>
                <!-- Sub Menu -->
                <li class="side-menu-item px-3">
                    <a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#sub_menu_1"
                        aria-expanded="false" aria-controls="sub_menu_1">
                        Page Banner
                    </a>
                </li>
                <div id="sub_menu_1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <ul class="side-sub-menu p-0">
                        <li class="side-sub-menu-item px-3">
                            <a href="{{ url('admin/homepagebanner') }}" class="w-100 pl-4">
                                Home Page Banner
                            </a>
                        </li>
                        <li class="side-sub-menu-item px-3">
                            <a href="{{ url('admin/otherpagebanner') }}" class="w-100 pl-4">
                                Other Pages
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="side-menu-item px-3">
                    <a href="{{ url('admin/newsblog') }}" class="w-100 py-3 pl-4">
                        News & Blog
                    </a>
                </li>

                <hr>
                <h5 class="text-white px-3">More</h5>
                <hr>

                {{-- More menu items --}}
                <li class="side-menu-item px-3">
                    <a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#sub_menu_2"
                        aria-expanded="false" aria-controls="sub_menu_2">
                        About Us
                    </a>
                </li>
                <div id="sub_menu_2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <ul class="side-sub-menu p-0">
                        <li class="side-sub-menu-item px-3">
                            <a href="{{ route('aboutus.whoWeAre.home') }}" class="w-100 pl-4">
                                Who We Are
                            </a>
                        </li>

                        <li class="side-sub-menu-item px-3">
                            <a href="{{ route('aboutus.ourChairman.home') }}" class="w-100 pl-4">
                                Chairman Speech
                            </a>
                        </li>

                        <li class="side-sub-menu-item px-3">
                            <a href="{{ route('aboutus.shareholders.home') }}" class="w-100 pl-4">
                                Shareholders
                            </a>
                        </li>

                        <li class="side-sub-menu-item px-3">
                            <a href="{{ route('aboutus.boardOfDirectors.home') }}" class="w-100 pl-4">
                                Board Of Directors
                            </a>
                        </li>

                        <li class="side-sub-menu-item px-3">
                            <a href="{{ route('aboutus.managementTeam.home') }}" class="w-100 pl-4">
                                Management Team
                            </a>
                        </li>

                        <li class="side-sub-menu-item px-3">
                            <a href="{{ route('aboutus.missionVision.home') }}" class="w-100 pl-4">
                                Mission Vision
                            </a>
                        </li> 
                        
                        <li class="side-sub-menu-item px-3">
                            <a href="{{ route('aboutus.coreValues.home') }}" class="w-100 pl-4">
                               Core Values
                            </a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</div>