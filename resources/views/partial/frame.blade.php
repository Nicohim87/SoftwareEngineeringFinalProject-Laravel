<nav id="navbar" class="d-flex align-items-center">
    
    <div id="logo" class="d-flex align-items-center text-align-center justify-content-center">
        <a type='button' id="hamburger" class="d-flex justify-content-center align-items-center">
            <i class="bi bi-list" style="color:#808080; font-size:1.5em; padding:0px;"></i>
        </a> 

        <h3>FitTech Admin</h3>
    </div>

    <div class="d-flex position-absolute align-items-center end-0" id="navigate">
        <p class="name">{{Auth::user()->name}}</p>
        <a aria-current="page" href="{{route('logout')}}"><p>Logout</p></a>
    </div>
</nav>

<div style="height:13.5vh"></div>


