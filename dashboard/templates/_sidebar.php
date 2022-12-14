<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <?php if($_SESSION['userType'] == 2){ ?>
      <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-account-outline menu-icon"></i>
        <span class="menu-title">All User</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="add-user">Add user</a></li>
          <li class="nav-item"> <a class="nav-link" href="manage-users">Manage Users</a></li>
        </ul>
      </div>
    </li>
    <?php } ?>
    <?php if($_SESSION['userType'] == 2){ ?>
      <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-setting" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-security menu-icon"></i>
        <span class="menu-title">Settings</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-setting">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="sms-config">SMS Setting</a></li>
          <li class="nav-item"> <a class="nav-link" href="email-config">Email Setting</a></li>
          <li class="nav-item"> <a class="nav-link" href="site-config">Site Setting</a></li>
        </ul>
      </div>
    </li>
    <?php } ?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-ticket" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-ticket-account menu-icon"></i>
        <span class="menu-title">Tickets</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-ticket">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="add-ticket">Add Ticket</a></li>
          <li class="nav-item"> <a class="nav-link" href="manage-tickets">Manage Tickets</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>