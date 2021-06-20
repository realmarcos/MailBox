 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">MailBox</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<li class="nav-item">
  <div class="nav-link">
    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exampleModal"> Escrever </button>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Inbox/Dashboard -->
@if (Route::getCurrentRoute()->getName() === 'dashboard')
<li class="nav-item active">
  <a class="nav-link" href="{{ route('dashboard') }}
  ">
    <i class="fas fa-fw fa-inbox"></i>
    <span>Inbox</span></a>
</li>
@else
<li class="nav-item">
  <a class="nav-link" href="{{ route('dashboard') }}">
    <i class="fas fa-fw fa-inbox"></i>
    <span>Inbox</span></a>
</li>
@endif

<!-- Nav Item - Enviados -->
@if (Route::getCurrentRoute()->getName() === 'enviados')
<li class="nav-item active">
  <a class="nav-link" href="{{ route('enviados') }}
  ">
    <i class="fas fa-fw fa-inbox"></i>
    <span>Enviados</span></a>
</li>
@else
<li class="nav-item">
  <a class="nav-link" href="{{ route('enviados') }}">
    <i class="fas fa-fw fa-inbox"></i>
    <span>Enviados</span></a>
</li>
@endif

<!-- Nav Item - Contatos -->
@if (Route::getCurrentRoute()->getName() === 'contatos')
<li class="nav-item active">
  <a class="nav-link" href="{{ route('contatos') }}
  ">
    <i class="fas fa-fw fa-inbox"></i>
    <span>Contatos</span></a>
</li>
@else
<li class="nav-item">
  <a class="nav-link" href="{{ route('contatos') }}">
    <i class="fas fa-fw fa-inbox"></i>
    <span>Contatos</span></a>
</li>
@endif

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->