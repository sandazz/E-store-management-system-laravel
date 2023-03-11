<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: #80bde8;">
    <!-- Container wrapper -->
    <div class="container ">
        <!-- Left links -->
        <ul class="navbar-nav me-3" >
          <li class="nav-item">
            <a class="nav-link d-flex active align-items-center" href="{{ Route('user.employee') }}" >Employee name</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="{{ Route('user.employee.orderView') }}" >My Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="{{ Route('user.logout') }}" >Logout</a>
          </li>
        </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  @yield('employeeContent')
