<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
        <a href="/">
            <img src="/admin-template/assets/images/logo/Logo.png" width="60px" height="60px" alt="logo" />
            <h4><span>Task </span><span style="color: #4a6cf7;"> Master</span></h4>
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="nav-item nav-item-has-children">
                <a href="#0" class="{{ Request::is('/') ? '' : 'collapsed' }}" data-bs-toggle="collapse"
                    data-bs-target="#dashboard" aria-controls="dashboard" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <lord-icon src="https://cdn.lordicon.com/icxqolmx.json" class="icon" trigger="hover"
                        style="width:25px;height:25px">
                    </lord-icon>
                    {{-- <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22">
                            <path
                                d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                        </svg>
                    </span> --}}
                    <span class="text">Dashboard</span>
                </a>
                <ul id="dashboard" class="collapse {{ Request::is('/') ? 'show' : '' }} dropdown-nav">
                    <li>
                        <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Management Task</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-item-has-children">
                <a href="#0" class="{{ Request::is('tasks/*') ? '' : 'collapsed' }}" data-bs-toggle="collapse"
                    data-bs-target="#tasks" aria-controls="tasks" aria-expanded="false" aria-label="Toggle navigation">
                    {{-- <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
                        </svg>
                    </span> --}}
                    <lord-icon src="https://cdn.lordicon.com/kipaqhoz.json" class="icon" trigger="morph"
                        style="width:30px;height:30px">
                    </lord-icon>
                    <span class="text">Tasks</span>
                </a>
                <ul id="tasks" class="collapse {{ Request::is('tasks/*') ? 'show' : '' }} dropdown-nav">
                    <li>
                        <a href="/tasks/active" class="{{ Request::is('tasks/active') ? 'active' : '' }}"> Active </a>
                    </li>
                    <li>
                        <a href="/tasks/finish" class="{{ Request::is('tasks/finish') ? 'active' : '' }}"> Finish </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/schedules">
                    <span class="icon">
                        <lord-icon src="https://cdn.lordicon.com/kulwmpzs.json" trigger="hover"
                            style="width:25px;height:25px">
                        </lord-icon>
                        {{-- <i class="lni lni-agenda"></i> --}}
                    </span>
                    <span class="text">Schedules</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/forums">
                    <span class="icon">
                        <i class="lni lni-users"></i>
                    </span>
                    <span class="text">Forums</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="/master-brainybot">
                    <span class="icon">
                        <i class="lni lni-android-original"></i>
                    </span>
                    <span class="text">Master Brainybot</span>
                </a>
            </li>

            <span class="divider">
                <hr />
            </span>


            <li class="nav-item">
                <a href="/notifications">
                    <span class="icon">
                        {{-- <i class="lni lni-alarm"></i> --}}
                        <lord-icon src="https://cdn.lordicon.com/psnhyobz.json" trigger="hover" colors="primary:#121331"
                            state="hover" style="width:30px;height:30px">
                        </lord-icon>
                    </span>

                    <span class="text">Notifications</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="/report">
                    <span class="icon">
                        <lord-icon src="https://cdn.lordicon.com/hpivxauj.json" trigger="hover"
                            style="width:25px;height:25px">
                        </lord-icon>
                        {{-- <i class="lni lni-bubble"></i> --}}
                    </span>
                    <span class="text">Report</span>
                </a>
            </li>
        </ul>
    </nav>
    {{-- <div class="promo-box">
        <h3>PlainAdmin Pro</h3>
        <p>Get All Dashboards and 300+ UI Elements</p>
        <a href="https://plainadmin.com/pro" target="_blank" rel="nofollow" class="main-btn primary-btn btn-hover">
            Purchase Now
        </a>
    </div> --}}
</aside>
