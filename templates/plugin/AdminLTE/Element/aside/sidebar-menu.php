<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>

  <li>
    <a href="<?php echo $this->Url->build('/dashboard'); ?>">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>

  <!-- Users Management -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-users"></i> <span>Users</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>

    <ul class="treeview-menu">
      <li>
        <a href="<?php echo $this->Url->build('/users'); ?>">
          <i class="fa fa-circle-o"></i> All Users
        </a>
      </li>
      <li>
        <a href="<?php echo $this->Url->build('/users/add'); ?>">
          <i class="fa fa-circle-o"></i> Add User
        </a>
      </li>
    </ul>
  </li>

  <!-- Roles Management -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-user-secret"></i> <span>Roles</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>

    <ul class="treeview-menu">
      <li>
        <a href="<?php echo $this->Url->build('/roles'); ?>">
          <i class="fa fa-circle-o"></i> All Roles
        </a>
      </li>
      <li>
        <a href="<?php echo $this->Url->build('/roles/add'); ?>">
          <i class="fa fa-circle-o"></i> Add Role
        </a>
      </li>
    </ul>
  </li>
</ul>
