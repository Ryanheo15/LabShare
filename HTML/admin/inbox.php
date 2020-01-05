<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
          integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/admin.css">
    <link rel="stylesheet" href="../../CSS/inbox.css">

    <title>Inbox · Admin LabShare</title>
</head>

<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <?php include 'sidebar.php' ?>

    <!-- Page Content  -->
    <div id="content">
        <!-- NavBar -->
        <?php include 'navbar.php' ?>

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
                                            </span></div>
                                </div>
                            </div>

                            <div class="inbox_chat">

                                <div class="chat_list active_chat">
                                    <div class="chat_people">
                                        <div class="chat_img"><img
                                                    src="../../Resources/blank-profile-picture-973460_640.png"></div>
                                        <div class="chat_ib">
                                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"><img
                                                    src="../../Resources/blank-profile-picture-973460_640.png"></div>
                                        <div class="chat_ib">
                                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"><img
                                                    src="../../Resources/blank-profile-picture-973460_640.png"></div>
                                        <div class="chat_ib">
                                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"><img
                                                    src="../../Resources/blank-profile-picture-973460_640.png"></div>
                                        <div class="chat_ib">
                                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"><img
                                                    src="../../Resources/blank-profile-picture-973460_640.png"></div>
                                        <div class="chat_ib">
                                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"><img
                                                    src="../../Resources/blank-profile-picture-973460_640.png"></div>
                                        <div class="chat_ib">
                                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"><img
                                                    src="../../Resources/blank-profile-picture-973460_640.png"></div>
                                        <div class="chat_ib">
                                            <h5>John Doe <span class="chat_date">August 8th</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mesgs">
                            <div class="msg_history">
                                <div class="incoming_msg">
                                    <div class="incoming_msg_img"><img
                                                src="../../Resources/blank-profile-picture-973460_640.png"></div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
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
                                    <div class="incoming_msg_img"><img
                                                src="../../Resources/blank-profile-picture-973460_640.png"></div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <span class="time_date"> 11:01 AM | Yesterday</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam..</p>
                                        <span class="time_date"> 11:01 AM | Today</span>
                                    </div>
                                </div>
                                <div class="incoming_msg">
                                    <div class="incoming_msg_img"><img
                                                src="../../Resources/blank-profile-picture-973460_640.png"></div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo
                                                consequat.</p>
                                            <span class="time_date"> 11:01 AM | Today</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="type_msg">
                                <div class="input_msg_write">
                                    <input type="text" class="write_msg" placeholder="Type a message"/>
                                    <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o"
                                                                                  aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
            </section>
            <!-- END: Messages -->

        </div>

    </div>
</div>

<!-- jQuery & Popper.js & Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
