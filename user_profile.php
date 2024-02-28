<?php include('config.php');
session_start();
if(!isset($_SESSION['user']))
{
	header("location:index.php");
}
include('header.php');
?>
 <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards"> 
			
      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  User Profile
                </h2>
				                <div class="text-muted mt-1">Access beyond limits</div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-lg-8">
                <div class="card card-lg">
                  <div class="card-body">
                    <div class="markdown">
                      <p>This is a legal agreement between you, the Purchaser, and Tabler. Purchasing or downloading of any Tabler product (Tabler Free, Tabler PRO, Tabler Email), constitutes your acceptance of the terms of this license, <a href="https://tabler.io/terms-of-service.html">Tabler terms of service</a> and <a href="https://tabler.io/privacy-policy.html">Tabler private policy</a>.</p>
                      <p>A license grants you a non-exclusive and non-transferable right to use and incorporate the item in your personal or commercial projects.</p>
                      <h3 id="tabler-free-license">Tabler Free License</h3>
                      <p>Tabler Free is available under MIT License</p>        
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <div class="me-3">
                       <!-- Download SVG icon from http://tabler-icons.io/i/user -->
	<svg xmlns="http://www.w3.org/2000/svg" style="width:32px; height:32px;" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="7" r="4" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg></div>
                      <div>
                        <small class="text-muted">Advanced features from CodeX</small>
                        <h3 class="lh-1">Settings | User Profile</h3>
                      </div>
                    </div>
                    <div class="text-muted mb-3" align="justify">
                      CodeX provides user to customize their preferences as per requirement with amazing features and 
					  with best level of visual interface and easy to use.
                    </div>
                                             <div class="mb-3">
                            <label class="form-label">Notification</label>
                            <div class="divide-y">                             
                              <div>
                                <label class="row">
                                  <span class="col">SMS Notifications</span>
                                  <span class="col-auto">
                                    <label class="form-check form-check-single form-switch">
                                      <input class="form-check-input" type="checkbox">
                                    </label>
                                  </span>
                                </label>
                              </div>
                              <div>
                                <label class="row">
                                  <span class="col">Email Notifications</span>
                                  <span class="col-auto">
                                    <label class="form-check form-check-single form-switch">
                                      <input class="form-check-input" type="checkbox" checked>
                                    </label>
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
				   
                   
                  </div>
                  <div class="card-footer">
                    This is offical web tool by CodeX.
                    <a href="#" target="_blank">Learn more about repository and it's working.</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                  <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                  <li class="list-inline-item">
                    <a href="#" target="_blank" class="link-secondary" rel="noopener">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
					  Made with 
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                     by CodeX
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2022
                    <a href="." class="link-secondary">CodeX</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="./changelog.html" class="link-secondary" rel="noopener">Web3(v3.2)</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
  </body>
</html>