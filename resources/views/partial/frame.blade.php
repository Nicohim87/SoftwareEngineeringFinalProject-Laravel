<div id="navbar" class="d-flex align-items-center">
    <div id="logo" class="d-flex align-items-center">
        <h3 class="">FitTech Admin</h3>
    </div>
    <nav class="d-flex position-absolute align-items-center end-0">
        <p class="name">{{Auth::user()->name}}</p>
        <a aria-current="page" href="{{route('logout')}}"><p>Logout</p></a>
    </nav>
</div>

<div style="height:13.5vh"></div>