<header class="main-nav" style="top: 50px !important ;">
    <div class="sidebar-user text-center mb-0">
        <a class="setting-primary" href="{{route('profile.edit')}}" title="User Profile"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{Auth::user()->img ? asset('assets/images/profile/'.Auth::user()->img) : asset('assets/images/dashboard/1.png')}}" alt="{{Auth::user()->username}}"/>
        <div class="badge-bottom"><span class="badge badge-success f-w-100">{{ Auth::user()->username }}</span></div>
        <div class="badge-top"><span class="badge badge-primary">{{ auth()->user()->level==1 ? 'User' : (auth()->user()->level==2 ? 'Reviewer' : (auth()->user()->level>2 ? 'Approver' : '')) }}</span></div>
        
        <a href="#"> <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6></a>  
        <p class="mb-0 font-roboto">{{ Auth::user()->department }}</p>     
    </div>
    <nav class="mt-0 mb-0" style="height: 540px !important">
        <div class="main-navbar mt-0 mb-0">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>      
                    <li class="dropdown">                        
                    </li>                                   
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
    
</header>
