<header class="header twitter-bg">
    <div class="toggle-nav">
      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="/dashboard/home" class="logo" style="color:  #fff;">IdeaHub</span></a>
    <!--logo end-->

    <div class="top-nav notification-row">
      <!-- notificatoin dropdown start-->
      <ul class="nav pull-right top-menu">

        <!-- inbox notificatoin start-->
        <li id="mail_notificatoin_bar" class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <i class="icon-envelope-l"></i>
                          <span class="badge bg-important">5</span>
                      </a>
          <ul class="dropdown-menu extended inbox">
            <div class="notify-arrow notify-arrow-blue"></div>
            <li>
              <p class="blue">You have 5 new messages</p>
            </li>
            <li>
              <a href="#">
                                  <span class="subject">
                                  <span class="from">Greg  Martin</span>
                                  <span class="time">1 min</span>
                                  </span>
                                  <span class="message">
                                      I really like this admin panel.
                                  </span>
                              </a>
            </li>
            <li>
              <a href="#">
                                  <span class="subject">
                                  <span class="from">Bob   Mckenzie</span>
                                  <span class="time">5 mins</span>
                                  </span>
                                  <span class="message">
                                   Hi, What is next project plan?
                                  </span>
                              </a>
            </li>
            <li>
              <a href="#">
                                  <span class="subject">
                                  <span class="from">Phillip   Park</span>
                                  <span class="time">2 hrs</span>
                                  </span>
                                  <span class="message">
                                      I am like to buy this Admin Template.
                                  </span>
                              </a>
            </li>
            <li>
              <a href="#">
                                  <span class="subject">
                                  <span class="from">Ray   Munoz</span>
                                  <span class="time">1 day</span>
                                  </span>
                                  <span class="message">
                                      Icon fonts are great.
                                  </span>
                              </a>
            </li>
            <li>
              <a href="#">See all messages</a>
            </li>
          </ul>
        </li>
        <!-- inbox notificatoin end -->
        <!-- alert notification start-->
        <li id="alert_notificatoin_bar" class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                          <i class="icon-bell-l"></i>
                          <span class="badge bg-important">7</span>
                      </a>
          <ul class="dropdown-menu extended notification">
            <div class="notify-arrow notify-arrow-blue"></div>
            <li>
              <p class="blue">You have 4 new notifications</p>
            </li>
            <li>
              <a href="#">
                                  <span class="label label-primary"><i class="icon_profile"></i></span>
                                  Friend Request
                                  <span class="small italic pull-right">5 mins</span>
                              </a>
            </li>
            <li>
              <a href="#">
                                  <span class="label label-warning"><i class="icon_pin"></i></span>
                                  John location.
                                  <span class="small italic pull-right">50 mins</span>
                              </a>
            </li>
            <li>
              <a href="#">
                                  <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                  Project 3 Completed.
                                  <span class="small italic pull-right">1 hr</span>
                              </a>
            </li>
            <li>
              <a href="#">
                                  <span class="label label-success"><i class="icon_like"></i></span>
                                  Mick appreciated your work.
                                  <span class="small italic pull-right"> Today</span>
                              </a>
            </li>
            <li>
              <a href="#">See all notifications</a>
            </li>
          </ul>
        </li>
        <!-- alert notification end-->
        <!-- user login dropdown start-->
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <span class="profile-ava">
                              <img alt="" src="img/avatar1_small.jpg">
                          </span>
                        @if (auth()->user())
                        <span class="username">{{auth()->user()->name}}</span> 
                        @endif
                          <b class="caret"></b>
                      </a>
          <ul class="dropdown-menu extended logout">
            <div class="log-arrow-up"></div>
            <li>
              <a href="http://127.0.0.1:8000/"><i class="icon_key_alt"></i> Main Page</a>
            </li>
          </ul>
        </li>
        <!-- user login dropdown end -->
      </ul>
      <!-- notificatoin dropdown end-->
    </div> 
  </header>