<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="/profile"><img src="/assets/images/gabe.jpg" alt="User"></a></div>
                    <div class="detail">
                    @auth
                        <h4>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
                        <small>{{Str::ucfirst(Auth::user()->role)}}</small>
                    @endauth

                    </div>
                    {{-- <a href="#" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="#" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="#" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="#" title="Chat App"><i class="zmdi zmdi-comments"></i></a>
                    <a href="#" title="Sign out"><i class="zmdi zmdi-power"></i></a> --}}
                    <br />
                </div>
            </li>
            <li class="header">MAIN</li>
            <li class="active open"><a href="/dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Packages</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('package.list')}}">List Packages</a></li>
                    <li><a href="{{ route('package.add')}}">Create Package</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Amenities</span> </a>
                <ul class="ml-menu">
                    <li><a href="/amenities">List Amenities</a></li>
                    <li><a href="/amenities/add">Add Amenities</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Properties</span> </a>
                <ul class="ml-menu">
                    <li><a href="/properties">List Properties</a></li>
                   {{--  <li><a href="/properties/grid">Properties Grid view</a></li> --}}
                    <li><a href="/property/add">Add Property</a></li>
                    <li><a href="property/details">Property Detail</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Types</span> </a>
                <ul class="ml-menu">
                    <li><a href="#">Apartment</a></li>
                    <li><a href="#">Estate</a></li>
                    <li><a href="#">Office</a></li>
                    <li><a href="#">Land</a></li>
                </ul>
            </li><li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Agents</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{ route('agent.view') }}">All Agents</a></li>
                    <li><a href="{{ route('agent.add') }}">Add Agent</a></li>
                    <li><a href="{{ route('agent.profile')}}">Agent Profile</a></li>
                </ul>
            </li>
        </div>
    </div>

    <div class="menu">
        <div class="list">
            <li class="open"><a href="/"  style="color: #f96332"><i class="zmdi zmdi-arrow-left"></i><span>BACK TO HOMEPAGE</span></a></li>
        </ul>
    </div>
</aside>
