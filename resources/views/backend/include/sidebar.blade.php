<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="{{url('home')}}" class="brand-link">
<!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
<center>
  <p>Admin</p>
</center>

</a>
<!-- Sidebar -->
<div class="os-content" style="padding: 0px 8px;height: 100%;width: 100%;background-color: teal;">
<div class="sidebar">
<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item">
<a href="{{url('home')}}" class="nav-link">
    <i class="fas fa-tachometer-alt"></i>
    <p>
      Dashboard
      <!-- <i class="right fas fa-angle-left"></i> -->
    </p>
  </a>
</li>
<li class="nav-item">
  <a href="{{url('massbooking')}}" class="nav-link">
    <i class="fas fa-book"></i>
    <p>
      Massbooking
    </p>
  </a>
</li>

<li class="nav-item">
<a href="{{url('payment')}}" class="nav-link">
<i class="fas fa-rupee-sign"></i>
<p>Transaction</p>
</a>
</li>

<li class="nav-item">
<a href="{{url('donation')}}" class="nav-link">
<i class="fas fa-hand-holding-heart"></i>
<p>Donation</p>
</a>
</li>

<li class="nav-item">
<a href="{{url('donor')}}" class="nav-link">
<i class="fas fa-hand-holding-usd"></i>
<p>Donor Transaction</p>
</a>
</li>



<li class="nav-item">
                          <a class="nav-link" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();" class="nav-link">
                            <i class="fas fa-user"></i>
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form> 

</li>
    </li>
  </ul>


</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>