<header class="site-header">
    <div class="header-top">
        <div class="container">
            <ul class="top-info">
                <li>📞 Admission: +91 70501 74723</li>
                <li><i class="fa-regular fa-envelope"></i> ranchiwomenscollege@gmail.com</li>
                <li>☎ Helpline: 0651-2562221</li>
            </ul>
        </div>
    </div>

    <div class="header-main">
        <div class="container">
            <div class="header-main-wrapper">
                <div class="header-logo">
                    <div class="logo">
                        <img src="{{ asset('asset/web/layouts/header/logo.png') }}"
                             alt="Ranchi Women's College Logo">
                        <span class="logo-estd">ESTD. 1949</span>
                    </div>

                    <div class="logo-title">
                        <h1>Ranchi Women's College</h1>
                        <p>A Constituent College of Ranchi University</p>
                    </div>
                </div>

                <div class="header-actions">
                    <img src="{{ asset('asset/web/layouts/header/naac.png') }}"
                         alt="NAAC Accreditation"
                         class="naac-logo">

                    <a href="#" class="btn btn-outline-primary">
                        Login Institutional Webmail
                    </a>

                    <button class="header-bar"
                            id="menuToggle"
                            aria-label="Toggle Navigation"
                            aria-controls="navbar"
                            aria-expanded="false"
                            type="button">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
    <nav class="header-navbar" id="navbar">
            <div class="container">
                <ul class="navbar-menu">

                    <li><a href="/">Home</a></li>

                    <li class="nav-dropdown">
                        <a href="#">About <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="nav-dropdown-menu">
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('history')}}">Background</a></li>
                            <li><a href="{{route('vision')}}">Vision & Mission</a></li>
                            <li><a href="{{route('principle')}}">Principals</a></li>
                            <li><a href="{{route('rule')}}">Rules & Regulations</a></li>
                            <li><a href="{{route('holiday')}}">Holiday List</a></li>
                            <li><a href="{{route('kulgeet')}}">Ranchi University Kulgeet</a></li>
                            <li><a href="{{route('iqac')}}">IQAC & AQAR</a></li>
                            <li><a href="#">Statutory Bodies</a></li>
                            <li><a href="{{route('committee')}}">Committees</a></li>
                            <li><a href="{{route('infrastructure')}}">Infrastructure</a></li>
                            <li><a href="{{route('newslatter')}}">Newsletter</a></li>
                        </ul>
                    </li>

                    <li class="nav-dropdown">
                        <a href="#">Academics <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="nav-dropdown-menu">
                            <li><a href="{{route('academic.syllabus')}}">Syllabus</a></li>
                            <li><a href="{{route('academic.programme')}}">Programme and Course</a></li>
                            <li><a href="{{route('academic.calender')}}">Academic Calendar</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="{{route('academic.fee')}}">Fee Structure</a></li>
                            <li><a href="#">Placement</a></li>
                            <li><a href="{{route('academic.alumini')}}">Distinguished Alumni</a></li>
                        </ul>
                    </li>

                    <li class="nav-dropdown">
                        <a href="#">Admissions <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="nav-dropdown-menu">
                            <li><a href="{{route('admission.ug')}}">UG Admission</a></li>
                            <li><a href="{{route('admission.pg')}}">PG Admission</a></li>
                            <li><a href="{{route('admission.vocational')}}">Vocational Admission</a></li>
                            <li><a href="{{route('admission.B.Ed')}}">B.Ed Admission</a></li>
                        </ul>
                    </li>

                    <li class="nav-dropdown">
                        <a href="#">Department <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="nav-dropdown-menu">
                            <li><a href="{{route('department.arts')}}">Arts</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">M.A. in Education</a></li>
                            <li><a href="#">Commerce</a></li>
                            <li><a href="#">Vocational</a></li>
                            <li><a href="#">Department of B.Ed</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Examination</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="{{route('alumini')}}">Alumini</a></li>

                    <li class="nav-dropdown">
                        <a href="#">RTI <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="nav-dropdown-menu">
                            <li><a href="#">Grievance</a></li>
                            <li><a href="#">Action Taken Report</a></li>
                        </ul>
                    </li>

                    <li><a href="#">IQAC / NAAC</a></li>

                    <li class="mobile-login">
    <a href="#">
        <i class="fa-solid fa-right-to-bracket"></i>
        Login Institutional Webmail
    </a>
</li>

                </ul>
            </div>
        </nav>
