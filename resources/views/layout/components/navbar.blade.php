<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4">
          <div id="logo" class="pull-left">
            <a href="#intro"><h1>|<img src="/asset/img/logo2.png" width="30%" alt="" title="" /></h1></a>
          </div>
        </div>
        <div class="col-8">
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="@yield('home')"><a href="#intro">Home</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>
              <li class="menu-has-children"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                  <li><a href="#">Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
          <!-- #nav-menu-container -->
        </div>
      </div>            
    </div>
</header>
<!-- #header -->