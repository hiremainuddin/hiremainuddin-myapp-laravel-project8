<aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                   <h4>Hiremainuddin</h4>
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{asset('backend/images/icon/avatar-big-01.png')}}" alt="John Doe" />
                    </div>
                    <h4 class="name">Main uddin</h4>
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
                        <li class="{{request()->routeIs('home') ? "active" : " " }}">
                            <a href="{{ route('home')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ route('/')}}">
                                <i class="fas fa-eye"></i>View Site</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas  fa-clipboard"></i>Projects
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="{{request()->routeIs('project') ? "active" : " " }}">
                                    <a href="{{url('projects')}}">
                                        <i class="fas fa-qrcode"></i>All Project</a>
                                </li>
                                <li class="{{request()->routeIs('add-project') ? "active" : " " }}">
                                    <a href="{{url('add-project')}}">
                                        <i class="fas  fa-plus-circle"></i>Add Project</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{request()->routeIs('client') ? "active" : " " }}">
                            <a href="{{ route('client')}}">
                                <i class="fas fa-industry"></i>Brands</a>
                        </li>
                        
                        <li class="{{request()->routeIs('services') ? "active" : " " }}">
                            <a href="{{ route('services')}}">
                                <i class="fa fa-cogs" aria-hidden="true"></i>Services</a>
                        </li>

                        <li class="{{request()->routeIs('blog') ? "active" : " " }}">
                            <a href="{{ route('blog')}}">
                                <i class="fa fa-cogs" aria-hidden="true"></i>Blogs</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas  fa-star"></i>Reviews
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="{{request()->routeIs('reviews') ? "active" : " " }}">
                                    <a href="{{ route('reviews') }}">
                                        <i class="fas fa-qrcode"></i>All Reviews</a>
                                </li>
                                <li class="{{request()->routeIs('create-review') ? "active" : " " }}">
                                    <a href="{{ route('create-review') }}">
                                        <i class="fas fa-plus-circle"></i>Add Review</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-wrench" aria-hidden="true"></i>Settings
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="{{request()->routeIs('profile') ? "active" : " " }}">
                                  <a href="{{route('profile')}}">
                                  <i class="fa fa-arrow-right" aria-hidden="true"></i>Profile</a>
                                </li>
                                <li class="{{request()->routeIs('messages') ? "active" : " " }}">
                                    <a href="{{ route('messages')}}">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>Messages</a>
                                </li>
                            </ul>
                        </li>
                        

                    </ul>
                </nav>
            </div>
        </aside>