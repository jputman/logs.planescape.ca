<?=$this->extend("templates/template")?>
<?=$this->section("userstatus");?>
  <?php
  if(auth()->loggedIn()){
    ?>
    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <strong>mdo</strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>    
    <?php
  }
  else{
    ?>
    <a href="#" class="d-flex align-items-center text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
      <strong>Login</strong>
    </a>    
    <?php
  }
  ?>
<?=$this->endSection()?>
<?=$this->section("topmenu");?>
  <?php
  if(auth()->loggedIn()){
    ?>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Characters Logs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">DM Logs</a>
    </li>   
    <?php
  }
  else{

  }
  ?>
<?=$this->endSection()?>
<?=$this->section("main_section");?>
  <?php
  if(auth()->loggedIn()){
  }
  else{
    ?>
      <div class="align-center">
        <img src="/assets/DnD_Logo2.png" /><br/><br />
        <span class="site-title">Adventure League Digital Log Sheets</span><br /><br />
        <button type="button" class="btn btn-success btn-lg">Login</button>
        <button type="button" class="btn btn-primary btn-lg">Register</button>
      </div>
    <?php
  }
  ?>
<?=$this->endSection()?>