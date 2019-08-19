<!DOCTYPE html>

<html>
<!-- Javascript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../../CSS/style.css">
  <link rel="stylesheet" href="../../CSS/sidebar.css">
  <link rel="stylesheet" href="../../CSS/inbox.css">
  <title>Inbox · Admin LabShare</title>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <?php include 'navigation.php'?>

    <!-- Page Content  -->
    <div id="content">
      <!-- NavBar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Toggle Sidebar</span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a href="inbox.php" class="nav-link active">
                  Messages <span class="badge badge-primary">8</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="notifications.php" class="nav-link">
                  Notifications <span class="badge badge-primary">4</span>
                </a>
              </li>
              <li class="nav-item">
                <div class="dropdown ml-2">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <img id="nav-pic" width="30" height="30" class="img-fluid rounded" src="../../Resources/blank-profile-picture-973460_640.png">
                    John Smith
                    &emsp;
                  </button>
                  <div class="dropdown-menu drowpdown-menu-right">
                    <a class="dropdown-item" href="../help">Help</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../index.html">Log out</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Body -->
      <section id="body" class="mt-4 mb-4">
        <div class="container">
          <h2>Inbox</h2>
          <hr>

          <!-- Messages -->
          <section id="messages">

              <div class="messaging">
                <div class="inbox_msg">
                  <div class="inbox_people">
                    <div class="headind_srch">
                      <div class="recent_heading">
                        <h4 class="text-primary">Recent</h4>
                      </div>
                      <div class="srch_bar">
                        <div class="stylish-input-group">
                          <input type="text" class="search-bar" placeholder="Search">
                          <span class="input-group-addon">
                            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                          </span> </div>
                      </div>
                    </div>

                    <div class="inbox_chat">

                      <div class="chat_list active_chat">
                        <div class="chat_people">
                          <div class="chat_img"> <img src="../../Resources/blank-profile-picture-973460_640.png"> </div>
                          <div class="chat_ib">
                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                      </div>

                      <div class="chat_list">
                        <div class="chat_people">
                          <div class="chat_img"> <img src="../../Resources/blank-profile-picture-973460_640.png"> </div>
                          <div class="chat_ib">
                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                      </div>

                      <div class="chat_list">
                        <div class="chat_people">
                          <div class="chat_img"> <img src="../../Resources/blank-profile-picture-973460_640.png"> </div>
                          <div class="chat_ib">
                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                      </div>

                      <div class="chat_list">
                        <div class="chat_people">
                          <div class="chat_img"> <img src="../../Resources/blank-profile-picture-973460_640.png"> </div>
                          <div class="chat_ib">
                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                      </div>

                      <div class="chat_list">
                        <div class="chat_people">
                          <div class="chat_img"> <img src="../../Resources/blank-profile-picture-973460_640.png"> </div>
                          <div class="chat_ib">
                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                      </div>

                      <div class="chat_list">
                        <div class="chat_people">
                          <div class="chat_img"> <img src="../../Resources/blank-profile-picture-973460_640.png"> </div>
                          <div class="chat_ib">
                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                      </div>

                      <div class="chat_list">
                        <div class="chat_people">
                          <div class="chat_img"> <img src="../../Resources/blank-profile-picture-973460_640.png"> </div>
                          <div class="chat_ib">
                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="mesgs">
                    <div class="msg_history">
                      <div class="incoming_msg">
                        <div class="incoming_msg_img"> <img src="../../Resources/blank-profile-picture-973460_640.png"> </div>
                        <div class="received_msg">
                          <div class="received_withd_msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span class="time_date"> 11:01 AM | June 9</span>
                          </div>
                        </div>
                      </div>
                      <div class="outgoing_msg">
                        <div class="sent_msg">
                          <p>Lorem ipsum dolor sit amet, consectetur</p>
                          <span class="time_date"> 11:01 AM | June 9</span>
                        </div>
                      </div>
                      <div class="incoming_msg">
                        <div class="incoming_msg_img"> <img src="../../Resources/blank-profile-picture-973460_640.png"> </div>
                        <div class="received_msg">
                          <div class="received_withd_msg">
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <span class="time_date"> 11:01 AM | Yesterday</span>
                          </div>
                        </div>
                      </div>
                      <div class="outgoing_msg">
                        <div class="sent_msg">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..</p>
                          <span class="time_date"> 11:01 AM | Today</span>
                        </div>
                      </div>
                      <div class="incoming_msg">
                        <div class="incoming_msg_img"> <img src="../../Resources/blank-profile-picture-973460_640.png"> </div>
                        <div class="received_msg">
                          <div class="received_withd_msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                              commodo
                              consequat.</p>
                            <span class="time_date"> 11:01 AM | Today</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="type_msg">
                      <div class="input_msg_write">
                        <input type="text" class="write_msg" placeholder="Type a message" />
                        <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>


          </section>
        </div>
      </section>
    </div>
  </div>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="../../js/app.js"></script>
  <script src="../../JS/sidebar.js"></script>
</body>

</html>
