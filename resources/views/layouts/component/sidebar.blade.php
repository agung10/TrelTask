<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- User box -->
        <div class="user-box text-center">
            @if(!empty(Auth::user()->avatar))
            <img src="{{ asset('img/avatar/' . Auth::user()->avatar) }}" alt="user-img" title="{{ Auth::user()->name }}" class="rounded-circle img-thumbnail avatar-lg">
            @else
            <img src="{{asset('img/user-default.jpg')}}" alt="user-img" title="{{ Auth::user()->name }}" class="rounded-circle img-thumbnail avatar-lg">
            @endif
            <div class="dropdown">
                <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{ Auth::user()->name }}</a>
            </div>
            <p class=" text-muted">INDOHP Task Report</p>
            <ul class="list-inline">
                <li class="list-inline-item"></li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Menu App</li>

                <li id="dashboards">
                    <a href="{{route('home')}}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-calendar"></i>
                        <span> Activities </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @php
                        $activities = \App\Model\Activity::orderBy("id", "DESC")->get();
                        @endphp
                        <li><a href="{{ route('activities.index') }}">All Activities</a></li>
                        @foreach($activities as $res)
                        <li><a href="{{ route('cards.index') }}?activity_id={{ $res->id }}">{{ $res->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li id="customers">
                    <a href="{{route('customers.index')}}">
                        <i class="mdi mdi-account-box-multiple"></i>
                        <span> Customer Service</span>
                    </a>
                </li>


                <li class="menu-title">Account</li>

                <li id="dashboards">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout-variant"></i>
                        <span> Logout </span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>