<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: #80bde8;">
    <!-- Container wrapper -->
    <div class="container ">
        <!-- Left links -->
        <ul class="navbar-nav me-3" >
          <li class="nav-item">
            <a class="nav-link d-flex active align-items-center" href="{{ Route('user.admin') }}" >Admin name</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#!" >Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="{{ Route('user.showEmployee') }}" >Employees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#!" >Logout</a>
          </li>
        </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <div class="container">

    @yield('adminContent')

  </div>

