<div class="page-main-header">
    <div class="main-header-right row m-0">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="/dashboard"><img class="img-fluid"
                        src="{{ asset('assets/images/logo/cropped-logo-jotam-new-180x180.png') }}" alt="{{ config('app.name') }}"
                        style="height: 35px"></a>
                <span class="mt-3 f-14 f-w-600 text-black">{{ config('app.name') }}</span>
            </div>
            <div class="dark-logo-wrapper"><a href="/dashboard"><img class="img-fluid"
                        src="{{ asset('assets/images/logo/cropped-logo-jotam-new-180x180.png') }}" alt="{{ config('app.name') }}"
                        style="height: 35px"></a>{{ config('app.name') }}</div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="cpu" id="sidebar-toggle"> </i>
            </div>
        </div>
        <div class="left-menu-header col">
            <ul>
                <li>
                    <form class="form-inline search-form" action="/tcodeiccs" method="POST" id="tcode">
                        @csrf
                        <div class="search-bg"><a href="#" data-container="body" data-bs-toggle="popover"
                                data-placement="top"
                                onclick="event.preventDefault(); document.getElementById('tcode').submit();"><i
                                    class="fa fa-search"></i></a>
                            <input class="form-control-plaintext" list="listtcode" name="tcode"
                                placeholder="Search here....." autofocus autocomplete="off">
                            <datalist id="listtcode">
                                <option value=""></option>
                                
                            </datalist>
                        </div>
                    </form>
                    <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                </li>
            </ul>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()" title="Full Screen"><i
                            data-feather="maximize"></i></a></li>                                           
                <li class="onhover-dropdown">                    
                    <div class="notification-box"><i data-feather="user"></i><span
                        class="{{ $loginusers->count() > 0 ? 'dot-animated' : '' }}"></div>
                    <ul class="chat-dropdown onhover-show-div">
                        <li><a href="/chat">
                                <p class="f-w-700 mb-0">Online users <span
                                        class="pull-right badge badge-primary badge-pill">{{ $loginusers->count() }}</span>
                                </p>
                            </a>
                        </li>
                        @forelse ($loginusers->take(10) as $onlineuser)
                            <li>                                
                                    <div class="media">                                        
                                        <div class="media-body">
                                            <span>{{ \Illuminate\Support\Str::limit($onlineuser->users->name, 15) }}</span>                                                                                    
                                        </div>
                                        <p class="f-8">{{ \Carbon\Carbon::createFromTimeStamp($onlineuser->last_activity)->diffForHumans() }}</p>
                                    </div>
                                </a>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </li>

                <li class="onhover-dropdown p-0" id="jam"></li>
                <li class="onhover-dropdown p-0">
                    <a href="{{route('get-logout')}}" class="btn btn-primary-light" type="button" title="Log Out"><i
                            data-feather="log-out"></i></a>
                </li>
            </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
</div>
