<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div>

        <div class="navbar-brand hidden-sm" style="padding-top: 5px;padding-bottom: 5px">
            <a href="{{url('admin')}}">
                <img alt="BB Productions" style="background-color: #000;width: 40px;border-radius: 20px" src="{{asset('assets/front/img/logo-192x192.png')}}"> <span>BB Productions</span>
            </a>                
        </div>
        
        <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="Search here..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>               

            <div id="navbar-menu">
                <ul class="nav navbar-nav">                        
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="notification-dot" style="background-color:#de2fc0"></span>
                        </a>
                    </li>
                    <li><a href="{{url('admin/logout')}}" class="icon-menu"><i class="icon-login"></i></a></li>                        
                </ul>
            </div>
        </div>
    </div>
</nav>