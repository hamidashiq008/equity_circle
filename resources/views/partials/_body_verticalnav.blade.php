<!-- Sidebar Menu Start -->
<ul class="navbar-nav iq-main-menu" id="sidebar-menu">
    {{-- <li class="nav-item static-item">
        <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">MAIN</span>
            <span class="mini-icon" data-bs-toggle="tooltip" title="Social" data-bs-placement="right">-</span>
        </a>
    </li> --}}
    <li class="nav-item">

        <a class="nav-link  {{activeRoute(route('equity-circle'))}}" aria-current="page"   wire:click="triggerNavigateTo('dashboards.equitycircle','equity-circle')">
            <i class="icon material-symbols-outlined">
                Home
            </i>
            <span class="item-name">Home</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('profiles'))}}" wire:click="triggerNavigateTo('dashboards.profiles','profiles')" aria-current="page">
            <i class="icon material-symbols-outlined">
                person
            </i>
            <span class="item-name">Profiles</span>
        </a>
    </li>

    
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#profile" role="button" aria-expanded="false"
            aria-controls="profile">
            <i class="icon material-symbols-outlined">
                newspaper
            </i>
            <span class="item-name">Feeds</span>
            <i class="right-icon material-symbols-outlined">chevron_right</i>
        </a>
        <ul class="sub-nav collapse" id="profile" data-bs-parent="#sidebar-menu">
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('profile'))}}"
                    href="{{route('profile')}}">
                    <i class="icon material-symbols-outlined filled">
                        fiber_manual_record
                    </i>
                    <span class="item-name"> Bus Dev </span>
                </a>
            </li>
            <li class="nav-item d-none d-xl-block">
                <a class="nav-link {{activeRoute(route('crypto'))}}"
                    href="{{route('crypto')}}">
                    <i class="icon material-symbols-outlined filled">
                        fiber_manual_record
                    </i>
                    <span class="item-name">Crypto</span>
                </a>
            </li>
            <li class="nav-item d-none d-xl-block">
                <a class="nav-link {{activeRoute(route('fitness'))}}"
                    href="{{route('fitness')}}">
                    <i class="icon material-symbols-outlined filled">
                        fiber_manual_record
                    </i>
                    <span class="item-name">Fitness</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('profile.profile3'))}}"
                    href="{{route('profile.profile3')}}">
                    <i class="icon material-symbols-outlined filled">
                        fiber_manual_record
                    </i>
                    <span class="item-name">Mindset</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('education'))}}"  wire:click="triggerNavigateTo('dashboards.education','education')" aria-current="page">
         <i class="icon material-symbols-outlined">
             school
         </i>
         <span class="item-name">Education</span>
     </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('joblist'))}}" aria-current="page"
        wire:click="triggerNavigateTo('dashboards.joblist','joblist')">
            <i class="icon material-symbols-outlined">
                text_snippet
            </i>
            <span class="item-name">Job List</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('event-calender'))}}" target="_blank" aria-current="page"
        href="{{route('event-calender')}}">
            <i class="icon material-symbols-outlined">
                calendar_month
            </i>
            <span class="item-name">Events Calender</span>
        </a>
    </li>
    <li class="nav-item d-block d-xl-none">
        <a class="nav-link {{activeRoute(route('bussiness'))}}" aria-current="page"
        href="{{route('bussiness')}}">
            <i class="icon material-symbols-outlined">
                trending_up
            </i>
            <span class="item-name">Bussiness Management</span>
        </a>
    </li>
    <li class="nav-item d-block d-xl-none">
        <a class="nav-link {{activeRoute(route('crypto'))}}" aria-current="page"
        href="{{route('crypto')}}">
            <i class="icon material-symbols-outlined">
                currency_bitcoin
            </i>
            <span class="item-name">Crypto</span>
        </a>
    </li>
    <li class="nav-item d-block d-xl-none">
        <a class="nav-link {{activeRoute(route('fitness'))}}" aria-current="page"
        href="{{route('fitness')}}">
            <i class="icon material-symbols-outlined">
                exercise
            </i>
            <span class="item-name">Fitness</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('index'))}}" aria-current="page"
            href="#">
            <span class="material-symbols-outlined position-relative">notifications
                <span class="bg-primary text-white notification-badge"></span>
            </span>
            <span class="item-name">Notifications</span>
        </a>
    </li>        
</ul>

