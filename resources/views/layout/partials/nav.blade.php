<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>

            <ul class="nav navbar-nav">
                    <div class="bookmark-input search-input">
                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                        <ul class="search-list search-list-bookmark"></ul>
                    </div>

            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">

            {{--  <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="" tabindex="-1" data-search="search">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>--}}

            @guest

            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif
{{--
    @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
 --}}


            @else
{{-- fixed not --}}
@if(Auth::user()->type == "admin1" || Auth::user()->type == "admin")
            <li class="nav-item dropdown dropdown-notification mr-25">

                <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i> Fixed Form<span class="badge badge-pill badge-danger badge-up">
                <?php
                echo DB::table('fix_forms')->whereNotNull('note')
                ->get()->count();
                                ?>
            </span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">Note Fixed Form</h4>
                            <div class="badge badge-pill badge-light-primary">
                                <?php
                                echo DB::table('fix_forms')->whereNotNull('note')
                                ->get()->count();
                                ?>
                                record</div>
                        </div>
                    </li>

                    {{--
                    <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img src="../../../app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                </div>
                            </div>
                        </a>



                    </li>
                    --}}
                    <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="{{ route('fixed.note') }}">Read all </a></li>
                </ul>
            </li>
            @endif
{{---------- rem form ----------------------------------------------------------------------}}
@if(Auth::user()->type == "admin1" || Auth::user()->type == "admin")
    <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i>Removal Form<span class="badge badge-pill badge-danger badge-up">
                <?php
                echo DB::table('rem_forms')->whereNotNull('note')
                ->get()->count();
                                ?>
            </span> </a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">Note Removal Form</h4>
                            <div class="badge badge-pill badge-light-primary">
                                <?php
                                echo DB::table('rem_forms')->whereNotNull('note')
                                ->get()->count();
                                ?>
                                record</div>
                        </div>
                    </li>
                    {{--
                    <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img src="../../../app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Congratulation  🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                </div>
                            </div>
                        </a>



                    </li>
                    --}}
                    <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="{{ route('remform.note') }}">Read all </a></li>
                </ul>
    </li>
@endif
{{-------------------------------Profile  ------------------}}
            <li class="nav-item dropdown dropdown-user" style="margin-left: 0%;"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">
                        {{ Auth::user()->name }}
                    </span><span class="user-status">  @if(Auth::user()->type == "admin")  Admin @else  Doctor @endif </span></div><span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/user-29.png" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="{{ route('changePasswordGet') }}"><i class="mr-50" data-feather="user"></i> Profile</a>             <div class="dropdown-divider"></div>
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">

                        <i class="mr-50" data-feather="power"></i>  {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>

                </div>
            </li>



            @endguest



        </ul>
    </div>
</nav>

<!-- END: Header-->
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        {{--  <img src="{{ asset('app-assets/images/King-Saud-University-01.svg') }}" alt="tag" width="100" height="100">--}}

        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html"><span class="brand-logo">

                    <h2 class="brand-text"></h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="">Fixed Form</span>{{-- <spanclass="badgebadge-light-warningbadge-pillml-automr-1">2</span> --}}</a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="">Creat</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ route('fill') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="">Edit</span></a>
                    </li>
                </ul>
            </li>


        </ul>

        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="">Removable Form</span>{{-- <spanclass="badgebadge-light-warningbadge-pillml-automr-1">2</span> --}}</a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('remform.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="">Creat</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ route('remform.fill') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="">Edit</span></a>
                    </li>
                </ul>
            </li>


        </ul>
        @guest
        @else
        @if(Auth::user()->type == "admin")
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="">Setup course</span>{{-- <spanclass="badgebadge-light-warningbadge-pillml-automr-1">2</span> --}}</a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('import.excel.student') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="">Student</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href=""><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="">Doctor</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href=""><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="">Course Director</span></a>
                    </li>

                </ul>
            </li>


        </ul>
        @endif
        @endguest


    </div>
</div>
<!-- END: Main Menu-->

