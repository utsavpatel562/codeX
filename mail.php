<?php 
include('config.php');
session_start();
if(!isset($_SESSION['user']))
{
	header("location:index.php");
}
include('header.php');
?>
	<link href="dist/scrolling.php" type="text/css" rel="stylesheet">
	</head>
      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
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
        <div class="page-body">
          <div class="container-xl">
            <div class="row">
              <div class="col-lg-3" style="border-radius:10px;">
                <div class="card" style="border-radius:10px;">
                  <div class="bg-dark text-white" style="border-radius:10px;">
                    <div class="card-title"></div>
                    <div class="bg-dark text-white" style="border-radius:10px;">
                      <div>
<center><div class="avatar text-white bg-indigo" data-bs-toggle="modal" data-bs-target="#modal-report" data-demo-color style="width:140px; border-radius:20px; cursor:pointer;">Compose<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
						</center> 
<!-- Compose mail Modal -->
    <div class="modal modal-blur fade" style="color:#000;" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New Message</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
            <div class="input-group mb-2">
                              <span class="input-group-text">
                                From
                              </span>
                              <input readonly type="text" class="form-control"  placeholder="<?php
$newqry3 = "SELECT * FROM registration WHERE email='".$_SESSION['user']."'";
        $query3=mysqli_query($conn, $newqry3);
        while($row3=mysqli_fetch_array($query3))
        {echo $row3['email'];}?>"  autocomplete="off" name="sendermail">
                            </div>
		   </div>
          <div class="input-group mb-2">
                              <span class="input-group-text">
                                To:
                              </span>
                              <input  type="email" autocomplete="off" name="recivermail" required style="width:100px;" class="form-control"  placeholder="Reciver email-id..."  autocomplete="off">
							  <span class="input-group-text" style="margin-left:5px;">
                                Subject:
                              </span>
							  <input  type="email" autocomplete="off" name="recivermail" required style="width:200px;" class="form-control"  placeholder="Overview of mail"  autocomplete="off">
                            </div>
            <div class="row">
                        </div>
          </div>
          <div class="modal-body">
            <div class="row">
             
           
              <div class="col-lg-12">
                <div>
                  <label class="form-label">Description</label>
				  <div class="btn-group" style="width:200px; margin-bottom:10px;">
                              <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                <!-- Download SVG icon from http://tabler-icons.io/i/bold -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6z" /><path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" /></svg>
                              </a>
                              <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                <!-- Download SVG icon from http://tabler-icons.io/i/italic -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="11" y1="5" x2="17" y2="5" /><line x1="7" y1="19" x2="13" y2="19" /><line x1="14" y1="5" x2="10" y2="19" /></svg>
                              </a>
                              <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                <!-- Download SVG icon from http://tabler-icons.io/i/underline -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 5v5a5 5 0 0 0 10 0v-5" /><path d="M5 19h14" /></svg>
                              </a>
                              <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                <!-- Download SVG icon from http://tabler-icons.io/i/copy -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="8" y="8" width="12" height="12" rx="2" /><path d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2" /></svg>
                              </a>
                              <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                <!-- Download SVG icon from http://tabler-icons.io/i/scissors -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="7" r="3" /><circle cx="6" cy="17" r="3" /><line x1="8.6" y1="8.6" x2="19" y2="19" /><line x1="8.6" y1="15.4" x2="19" y2="5" /></svg>
                              </a>
                              <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                <!-- Download SVG icon from http://tabler-icons.io/i/file-plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><line x1="9" y1="14" x2="15" y2="14" /></svg>
                              </a>
                              <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                <!-- Download SVG icon from http://tabler-icons.io/i/file-minus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="14" x2="15" y2="14" /></svg>
                              </a>
							   <label style="margin-left:10px;" class="form-selectgroup-item">
                                <input type="checkbox" name="name" value="cloud-rain" class="form-selectgroup-input">
                                <span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/cloud-rain -->
                                <!-- Download SVG icon from http://tabler-icons.io/i/link -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
								</span>
                              </label>
							  <label style="margin-left:3px;" class="form-selectgroup-item">
                                <input type="checkbox" name="name" value="cloud-rain" class="form-selectgroup-input">
                                <span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/cloud-rain -->
                                <!-- Download SVG icon from http://tabler-icons.io/i/upload -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><polyline points="7 9 12 4 17 9" /><line x1="12" y1="4" x2="12" y2="16" /></svg></span>
                              </label>
							  
                            </div><br>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            
            <a href="#" style="border-radius:20px;" class="btn btn-success ms-auto" data-bs-dismiss="modal">
               Send&nbsp;&nbsp;&nbsp;<!-- Download SVG icon from http://tabler-icons.io/i/send -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
   
<!-- End Compose mail Modal -->						
						
						<br>
 <center><div class="avatar bg-white-lt" data-demo-color style="width:220px;"><svg style="color:white; width:22px; height:22px;" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="16" height="16" rx="2" /><path d="M4 13h3l3 3h4l3 -3h3" /></svg>&nbsp;Inbox</div>
                        <div class="mt-2" data-demo-color-contrast></div></center>	
 <center><div class="avatar bg-white-lt" data-demo-color style="width:220px;">
 <svg style="color:white; width:22px; height:22px;" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>&nbsp;Drafts</div>
                        <div class="mt-2" data-demo-color-contrast></div></center>	
 <center><div class="avatar bg-white-lt" data-demo-color style="width:220px;">
 <svg style="color:white; width:22px; height:22px;"xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>&nbsp;Settings</div>
                        <div class="mt-2" data-demo-color-contrast></div></center>
 <center><div class="avatar bg-white-lt" data-demo-color style="width:220px;">
 <svg style="color:white; width:22px; height:22px;"xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>&nbsp;Trash</div>
                        <div class="mt-2" data-demo-color-contrast></div></center>
 <center><div class="avatar bg-white-lt" data-demo-color style="width:220px;">
 <svg style="color:white; width:22px; height:22px;" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><line x1="12" y1="19" x2="12" y2="19.01" /></svg>&nbsp;Feedback</div>
                        <div class="mt-2" data-demo-color-contrast></div></center>							
		  </div>
		  <center><div class="avatar bg-yellow-lt" data-demo-color style="width:220px;">Chats</div>
          <div class="mt-2" data-demo-color-contrast></div>
					</center><br>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title"><h2 style="font-size:28px;"><!-- Download SVG icon from http://tabler-icons.io/i/mail -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" style="width:40px; height:40px;margin-right:2px; " width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="2" /><polyline points="3 7 12 13 21 7" /></svg>Inbox</h2>	  
                              <div class="input-icon mb-3">
                                <input type="text" class="form-control" placeholder="Search…">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                                </span>
                              </div>	 
	</div>
                                        <tr class="bg-light">
										
                      <td>
                        <div class="avatar text-blue bg-light" data-demo-color style="width:150px;">
						<!-- Download SVG icon from http://tabler-icons.io/i/star -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>&nbsp;&nbsp;Utsav Patel</div>
                      </td>    
                      <td>
                        <div class="avatar text-dark bg-light" data-demo-color style="width:70%;">Regarding offer letter from Humber College</div>
                      </t
                      <td>
                        <div class="avatar text-muted bg-light" data-demo-color style="width:75px;">1:00 PM</div>
                      </td>
					  
					   <td>
                        <div  class="avatar text-blue bg-light" data-demo-color style="width:150px; margin-top:5px;">
						<!-- Download SVG icon from http://tabler-icons.io/i/star -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>&nbsp;&nbsp;Keval Patel</div>
                      </td>    
                      <td>
                        <div class="avatar text-dark bg-light" data-demo-color style="width:70%;">Statement of purpose - Sheridan College</div>
                      </t
                      <td>
                        <div class="avatar text-muted bg-light" data-demo-color style="width:75px;">1:06 PM</div>
                      </td>
                    </tr>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="border-radius:30px;">
                <div class="card" style="border-radius:30px;">
                  <div class="" style="border-radius:30px;">
                    <div>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>     
      </div>