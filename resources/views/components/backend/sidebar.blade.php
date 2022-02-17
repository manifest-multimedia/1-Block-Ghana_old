<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="assets/images/gabe.jpg" alt="User"></a></div>
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
                    <li><a href="/packages">List Packages</a></li>
                    <li><a href="/package/add">Create Package</a></li>
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
                    <li><a href="#">All Agents</a></li>
                    <li><a href="{{ route('agent.add') }}">Add Agent</a></li>
                    <li><a href="{{ route('agent.profile')}}">Agent Profile</a></li>
                </ul>
            </li>
        </div>
    </div>

    {{-- <div class="menu">
        <div class="list">
            <li class="header">Extra</li>
            <li>
                <div class="progress-container progress-primary m-t-10">
                    <span class="progress-badge">Traffic this Month</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                            <span class="progress-value">67%</span>
                        </div>
                    </div>
                </div>
                <div class="progress-container progress-info">
                    <span class="progress-badge">Server Load</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                            <span class="progress-value">86%</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div> --}}
</aside>
