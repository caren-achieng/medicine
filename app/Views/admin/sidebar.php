<div class="sidebar" data-color="red">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          Medicing
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav" id="nav">
          <li class="li active">
            <a href="/dashboard">
              <i class="fas fa-hospital-symbol"></i>
              <p>Dashboard</p>
            </a>
          </li>
            <li class="li">
                <a href="/register">
                    <i class="fas fa-user-plus icon"></i>
                    <p>Register</p>
                </a>
            </li>
            <li class="li">
                <a href="/ReadEmployees">
                    <i class="fas fa-user"></i>
                    <p>View Employees</p>
                </a>
            </li>
            <li class="li">
                <a href="/readadmins">
                    <i class="fas fa-user"></i>
                    <p>View Admins</p>
                </a>
            </li>
          <li class="li">
            <a href="/review">
              <i class="fas fa-door-open"></i>
              <p>Leaves</p>
            </a>
          </li>
          <li class="li">
            <a href="/user">
              <i class="fas fa-user"></i>
              <p>User Profile</p>
            </a>
          </li>

            <li class="log_out">
                <a href="<?= site_url("userlogin/logout"); ?>">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Logout</span>
                </a>
            </li>
        </ul>
      </div>
    </div>