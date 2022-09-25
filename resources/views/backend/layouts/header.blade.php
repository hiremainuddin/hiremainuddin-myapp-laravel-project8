            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="{{ asset('frontend/images/logo.png')}}" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        {{-- @forelse($user as $notification) --}}
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                {{-- <p>{{ $notification->name }}</p> --}}
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        {{-- @empty --}}
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>No record here</p>
                                            </div>
                                        </div>
                                        {{-- @endforelse --}}
                                        <div class="notifi__footer">
                                            {{-- <a href="{{ route('messages') }}">All notifications</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('frontend/images/logo.png')}}" alt="Mainuddin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
                        </div>
                        <h4 class="name">Mainuddin</h4>
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a href="{{ route('home')}}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li>
                                <a target="_blank" href="{{ route('/')}}">
                                <i class="fas fa-eye"></i>View Site</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-clipboard"></i>Projects
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li class="{{request()->routeIs('project') ? "active" : " " }}">
                                        <a href="{{url('projects')}}">
                                            <i class="fas fa-qrcode"></i>View Projects</a>
                                    </li>
                                    <li class="{{request()->routeIs('add-project') ? "active" : " " }}">
                                        <a href="{{url('add-project')}}">
                                            <i class="far fa-plus-circle"></i>Add Project</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{request()->routeIs('client') ? "active" : " " }}">
                                <a href="{{ route('client')}}">
                                <i class="fas fa-user"></i>Brands</a>
                            </li>
                            <li class="{{request()->routeIs('blog') ? "active" : " " }}">
                            <a href="{{ route('blog')}}">
                                <i class="fa fa-cogs" aria-hidden="true"></i>Blogs</a>
                            </li>
                            <li class="{{request()->routeIs('services') ? "active" : " " }}">
                               <a href="{{ route('services')}}">
                                <i class="fa fa-cogs" aria-hidden="true"></i>Services</a>
                            </li>
                            <li class="{{request()->routeIs('messages') ? "active" : " " }}">
                                    <a href="{{ route('messages')}}">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>Messages</a>
                            </li>
                            <li class="{{request()->routeIs('profile') ? "active" : " " }}">
                                  <a href="{{route('profile')}}">
                                  <i class="fa fa-arrow-right" aria-hidden="true"></i>Profile</a>
                            </li>
                            <li class="{{request()->routeIs('reviews') ? "active" : " " }}">
                                    <a href="{{ route('reviews') }}">
                                        <i class="fas fa-qrcode"></i>All Reviews</a>
                            </li>
                            <li class="{{request()->routeIs('create-review') ? "active" : " " }}">
                                    <a href="{{ route('create-review') }}">
                                        <i class="fas fa-plus-circle"></i>Add Review</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>