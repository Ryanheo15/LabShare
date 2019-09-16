<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/admin.css">
    <link rel="stylesheet" href="../../CSS/inbox.css">

    <title>Inbox · Admin LabShare</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include 'sidebar.php'?>

        <!-- Page Content  -->
        <div id="content">
            <!-- NavBar -->
            <?php include 'navbar.php'?>

            <!-- Body -->
            <div class="container">
                <!-- Messages -->
                <h1>Inbox</h1>
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
                <!-- END: Messages -->

            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
