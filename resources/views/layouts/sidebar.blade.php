<div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar bg-svg1 dark-text">
            <div class="sidebar-sticky milo">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    <span data-feather="home"></span>
                    <i class="fa fa-server" aria-hidden="true"></i>  Dashboard 

                  </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link " href="#">
                          <span data-feather="home"></span>
                          <i class="fa fa-cutlery" aria-hidden="true"></i>  Resturant 
                        </a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link " href="#">
                              <span data-feather="home"></span>
                              <i class="fa fa-bed" aria-hidden="true"></i>  Lodging 
                            </a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link " href="#">
                                  <span data-feather="home"></span>
                                  <i class="fa fa-pied-piper-alt" aria-hidden="true"></i>  Events
                                </a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link " href="#">
                                      <span data-feather="home"></span>
                                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i>  Check Availibility
                                    </a>
                                  </li>
                                  @if(Auth::user()->role==1)
                                  <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
                                        <span>Admin Options</span>
                                      </h5>
                                  <li class="nav-item">
                                        <a class="nav-link " href="#">
                                          <span data-feather="home"></span>
                                          <i class="fa fa-cogs" aria-hidden="true"></i>  Settings
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                            <a class="nav-link " href="#">
                                              <span data-feather="home"></span>
                                              <i class="fa fa-bar-chart" aria-hidden="true"></i>  Reports
                                            </a>
                                          </li>
                              @endif
                              <li class="nav-item">
                                    <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      <span data-feather="home"></span>
                                      <i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                  </li>
              </ul>
  
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 ">
                <span>Support Links</span>
                <a class="d-flex align-items-center text-muted" href="#">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Terms & Conditions
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Disclaimer
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    EULA
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Privacy Policy
                  </a>
                </li>
              </ul>
            </div>
          </nav>
      