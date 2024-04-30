<?php
// Include the configuration file for database connection settings
include('config.php');

// Start the session to check if a user is logged in
session_start();

// If the 'user' session variable isn't set, redirect to the login page
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}

// Include the page header
include('header.php');
?>

<!-- Include additional CSS file for styling -->
<link href="dist/scrolling.php" type="text/css" rel="stylesheet">
</head>

<!-- Main page layout -->
<div class="page-wrapper">
    <div class="container-xl">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        CodeX Mail System
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Page content area -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-3" style="border-radius:10px;">
                    <div class="card" style="border-radius:10px;">
                        <div class="bg-dark text-white" style="border-radius:10px;">
                            <!-- Navigation sidebar -->
                            <div class="card-title"></div>
                            <div class="bg-dark text-white" style="border-radius:10px;">
                                <div>
                                    <!-- Button to trigger the compose mail modal -->
                                    <center>
                                        <div class="avatar text-white bg-indigo" data-bs-toggle="modal" data-bs-target="#modal-report" data-demo-color style="width:140px; border-radius:20px; cursor:pointer;">Compose
                                            <!-- SVG icon for a compose button -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                        </div>
                                    </center>

                                    <!-- Compose mail modal content -->
                                    <div class="modal modal-blur fade" style="color:#000;" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">New Message</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Email input fields -->
                                                    <div class="mb-3">
                                                        <div class="input-group mb-2">
                                                            <span class="input-group-text">From</span>
                                                            <!-- Retrieve the sender's email from the session and the database -->
                                                            <input readonly type="text" class="form-control" placeholder="<?php
$newqry3 = "SELECT * FROM registration WHERE email='".$_SESSION['user']."'";
$query3 = mysqli_query($conn, $newqry3);
while ($row3 = mysqli_fetch_array($query3)) {
    echo $row3['email'];
} ?>" autocomplete="off" name="sendermail">
                                                        </div>
                                                    </div>

                                                    <div class="input-group mb-2">
                                                        <span class="input-group-text">To:</span>
                                                        <!-- Input field for recipient's email -->
                                                        <input type="email" autocomplete="off" name="recivermail" required style="width:100px;" class="form-control" placeholder="Receiver email-id..." autocomplete="off">
                                                        <!-- Input field for email subject -->
                                                        <span class="input-group-text" style="margin-left:5px;">Subject:</span>
                                                        <input type="email" autocomplete="off" name="recivermail" required style="width:200px;" class="form-control" placeholder="Overview of mail" autocomplete="off">
                                                    </div>

                                                    <!-- Email message description input area -->
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div>
                                                                <label class="form-label">Description</label>
                                                                <textarea class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer with send button -->
                                                <div class="modal-footer">
                                                    <a href="#" style="border-radius:20px;" class="btn btn-success ms-auto" data-bs-dismiss="modal">
                                                        Send
                                                        <!-- SVG icon for sending -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 a 0 0 1 -1 0l-3.5 -7l-7 -3.5 a0.55 a 0 0 1 0 -1l18 -6.5" /></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar with navigation links -->
                        <div class="sidebar-links">
                            <center>
                                <!-- SVG icons for various sidebar links -->
                                <div class="avatar bg-white-lt" data-demo-color style="width:220px;">
                                    <!-- Inbox link -->
                                    <svg style="color:white; width:22px; height:22px;" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="16" height="16" rx="2" /><path d="M4 13h3l3 3h4l3 -3h3" /></svg> Inbox
                                </div>
                            </center>
                            <!-- Additional links for other sections of the mail system -->
                            <center>
                                <div class="avatar bg-white-lt" data-demo-color style="width:220px;">Drafts</div>
                                <div class="mt-2" data-demo-color-contrast></div>
                                <div class="avatar bg-white-lt" data-demo-color style="width:220px;">Settings</div>
                                <div class="mt-2" data-demo-color-contrast></div>
                                <div class="avatar bg-white-lt" data-demo-color style="width:220px;">Trash</div>
                                <div class="mt-2" data-demo-color-contrast></div>
                                <div class="avatar bg-white-lt" data-demo-color style="width:220px;">Feedback</div>
                                <div class="mt-2" data-demo-color-contrast></div>
                                <div class="avatar bg-yellow-lt" data-demo-color style="width:220px;">Chats</div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!-- Main content card for displaying inbox messages -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Inbox header with search bar -->
                            <div class="card-title"><h2 style="font-size:28px;">
                                <!-- Inbox SVG icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" style="width:40px; height:40px;margin-right:2px; " width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="2" /><polyline points="3 7 12 13 21 7" /></svg>
                                Inbox
                            </h2>
                            </div>

                            <!-- Search input for finding specific messages -->
                            <div class="input-icon mb-3">
                                <input type="text" class="form-control" placeholder="Search…">
                                <span class="input-icon-addon">
                                    <!-- Search icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                                </span>
                            </div>

                            <!-- Example row for inbox messages -->
                            <tr class="bg-light">
                                <td>
                                    <!-- Sender information with avatar -->
                                    <div class="avatar text-blue bg-light" data-demo-color style="width:150px;">
                                        <!-- Star SVG icon for special messages -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>&nbsp;&nbsp;Utsav Patel
                                    </div>
                                </td>
                                <td>
                                    <!-- Subject line for the message -->
                                    <div class="avatar text-dark bg-light" data-demo-color style="width:70%;">Regarding offer letter from Humber College</div>
                                </td>
                                <td>
                                    <!-- Time the message was received -->
                                    <div class="avatar text-muted bg-light" data-demo-color style="width:75px;">1:00 PM</div>
                                </td>
                            </tr>
                        </div>
                    </div>
                </div>

                <!-- Additional content area -->
                <div class="col-lg-12" style="border-radius:30px;">
                    <div class="card" style="border-radius:30px;">
                        <div class="" style="border-radius:30px;">
                            <!-- Empty content area -->
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
