 <!-- Topbar -->
 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button> -->

<!-- Topbar Search -->
<!-- <form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form> -->
<div class="ml-auto">
    <a href="#" class=" text-decoration-none text-dark px-4">{{ auth()->user()->firstname }} {{ auth()->user()->name }}</a> 
        <a href="{{route('logoutUser')}}" class="btn btn-sm btn-primary shadow-sm">Déconnexion</a>
    </div>
<!-- Topbar Navbar -->


</nav>