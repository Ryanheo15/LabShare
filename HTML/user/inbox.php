<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/inbox.css">

    <title>Inbox · LabShare</title>
</head>

<body>
    <!-- FIXME: Fix active nav bar links and collapsable button later -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
        <div class="container">
            <a href="../index.php" class="navbar-brand text-white">LabShare</a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="inventory.html" class="nav-link text-white">Inventory</a>
                    </li>

                    <li class="nav-item active">
                        <a href="inbox.html" class="nav-link text-white">
                            Messages <span class="badge badge-light">8</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="notifications.html" class="nav-link text-white">
                            Notifications <span class="badge badge-light">4</span>
                        </a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0 ml-4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" class="btn btn-outline-light my-2 my-sm-0 " data-toggle="modal" data-target="#requestModal" id="modalBtn">Ask A Favor</button>
                </form>

                <!-- Dropdown -->
                <div class="dropdown ml-2">
                    <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <img id="nav-pic" width="30" height="30" class="img-fluid rounded" src="../../Resources/blank-profile-picture-973460_640.png">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="../help">Help</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../index.php">Log out</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Request Modal Section -->
    <div class="modal fade" id="requestModal" tabindex=-1 aria-labelledby="RequestModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="text-center text-dark modal-title" id="RequestModalLabel">Submit A Request</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="request-form" action="request.php" method="post">

                        <div class="form-group">
                            <label for="name" class="text-dark">Name:</label>
                            <input type="text" class="form-control" placeholder="ex: John">
                        </div>

                        <div class="form-group">
                            <label for="location" class="text-dark">Location:</label>
                            <input type="text" class="form-control" placeholder="ex: Myer Hall">
                        </div>

                        <div class="form-group">
                            <label for="date" class="text-dark">Date:</label>
                            <input type="text" class="form-control" placeholder="05-06-2019">
                        </div>

                        <div class="form-group">
                            <label for="request" class="text-dark">Request:</label>
                            <textarea class="form-control" rows="6">
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>

            </div>
        </div>

    </div>


    <!-- Body -->
    <main id="body" class="my-4">
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
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
                </div>
            </section>

        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
