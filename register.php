<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Login | CodeX</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css" rel="stylesheet"/>  
     <style>
	    body{
			background-image: url('img/forlognew.jpg');
			overflow: hidden;
            background-size: cover;
		}
     </style>	 
  </head>
  <body class="antialiased">
    <div class="wrapper">	 
    <div class="col-md-5" style="margin:80px auto;">	
	
	<?php 
	 if(isset($_REQUEST['error2']))
	 { ?><div class="alert alert-important alert-warning alert-dismissible" role="alert" style="margin:auto; margin-bottom:10px; border-radius:10px;">
  <div class="d-flex">
    <div>
    </div>
    <div>
      This Email ID is already exist. Please try another one!!!
    </div>
  </div>  
</div> <?php 
     }
	 ?>
	
              <div class="card" style="border-radius:10px; background:whitesmoke;">                
                <div class="card-body">
                  
                    <div class="form-group mb-3 row">
                      <h2 style="margin-bottom:30px; font-weight:800;">CodeX Registration<br>
					  <b style="font-size:15px;">have account then </b>
					  <a href="index.php" style="font-size:15px;color:blue;"><b>Login Here</b></a></h2>		
                       <label class="form-label col-3 col-form-label">Full Name <i style="color:red;">*</i></label>
                      <div class="col">
					  <form action="register_process.php" method="POST">
                        <input type="name" name="name" autocomplete="off" required class="form-control" aria-describedby="emailHelp" placeholder="Enter your name here">
                      </div>
                    </div>
					                    <div class="form-group mb-3 row">
					  <label class="form-label col-3 col-form-label">Email ID<i style="color:red;">*</i></label>
                      <div class="col">
                        <input type="email" name="email" autocomplete="off" required class="form-control" aria-describedby="emailHelp" placeholder="Enter your email here">
                      </div>
                    </div>
					 <div class="form-group mb-3 row">
                      <label class="form-label col-3 col-form-label">Phone No.<i style="color:red;">*</i></label>
                      <div class="col">
                       <input type="text" name="mobile" required class="form-control" data-mask="00 0000 0000" data-mask-visible="true" placeholder="Enter your mobile no. here" autocomplete="off"/>
                          </div>
                    </div>			
                    <div class="form-group mb-3 row">
                      <label class="form-label col-3 col-form-label">Password <i style="color:red;">*</i></label>
                      <div class="col">
                        <input type="password" name="password" autocomplete="off" required class="form-control" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-footer">
                      <center><input type="submit" name="submit" value="Register Now" class="btn btn-success"></center>
                      </form>
                    </div>

                </div>
              </div>
            </div>
</div>
 JS -->
  <script src="./dist/libs/nouislider/distribute/nouislider.min.js"></script>
  <script src="./dist/libs/litepicker/dist/litepicker.js"></script>
  <script src="./dist/libs/choices.js/public/assets/scripts/choices.js"></script>
  <!-- Tabler Core -->
  <script src="./dist/js/tabler.min.js"></script>
  <script>
    // @formatter:off
    noUiSlider.create(document.getElementById('range-simple'), {
    	start: 20,
    	connect: [true, false],
    	step: 10,
    	range: {
    		min: 0,
    		max: 100
    	}
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    noUiSlider.create(document.getElementById('range-connect'), {
    	start: [60, 90],
    	connect: [false, true, false],
    	step: 10,
    	range: {
    		min: 0,
    		max: 100
    	}
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    noUiSlider.create(document.getElementById('range-color'), {
    	start: 40,
    	connect: [true, false],
    	step: 10,
    	range: {
    		min: 0,
    		max: 100
    	}
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	window.Litepicker && (new Litepicker({
    		element: document.getElementById('datepicker-default'),
    		buttonText: {
    			previousMonth: '<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
    			nextMonth: '<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>',
    		},
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	window.Litepicker && (new Litepicker({
    		element: document.getElementById('datepicker-icon'),
    		buttonText: {
    			previousMonth: '<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
    			nextMonth: '<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>',
    		},
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	window.Litepicker && (new Litepicker({
    		element: document.getElementById('datepicker-icon-prepend'),
    		buttonText: {
    			previousMonth: '<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
    			nextMonth: '<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>',
    		},
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	window.Litepicker && (new Litepicker({
    		element: document.getElementById('datepicker-inline'),
    		buttonText: {
    			previousMonth: '<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
    			nextMonth: '<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>',
    		},
    		inlineMode: true,
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	var el;
    	window.Choices && (new Choices(el = document.getElementById('select-tags'), {
    		classNames: {
    			containerInner: el.className,
    			input: 'form-control',
    			inputCloned: 'form-control-sm',
    			listDropdown: 'dropdown-menu',
    			itemChoice: 'dropdown-item',
    			activeState: 'show',
    			selectedState: 'active',
    		},
    		shouldSort: false,
    		searchEnabled: false,
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	var el;
    	window.Choices && (new Choices(el = document.getElementById('select-tags-advanced'), {
    		classNames: {
    			containerInner: el.className,
    			input: 'form-control',
    			inputCloned: 'form-control-sm',
    			listDropdown: 'dropdown-menu',
    			itemChoice: 'dropdown-item',
    			activeState: 'show',
    			selectedState: 'active',
    		},
    		shouldSort: false,
    		searchEnabled: false,
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	var el;
    	window.Choices && (new Choices(el = document.getElementById('select-users'), {
    		classNames: {
    			containerInner: el.className,
    			input: 'form-control',
    			inputCloned: 'form-control-sm',
    			listDropdown: 'dropdown-menu',
    			itemChoice: 'dropdown-item',
    			activeState: 'show',
    			selectedState: 'active',
    		},
    		shouldSort: false,
    		searchEnabled: false,
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	var el;
    	window.Choices && (new Choices(el = document.getElementById('select-people'), {
    		classNames: {
    			containerInner: el.className,
    			input: 'form-control',
    			inputCloned: 'form-control-sm',
    			listDropdown: 'dropdown-menu',
    			itemChoice: 'dropdown-item',
    			activeState: 'show',
    			selectedState: 'active',
    		},
    		shouldSort: false,
    		searchEnabled: false,
    		callbackOnCreateTemplates: function(template) {
    			var classNames = this.config.className,
    					itemSelectText = this.config.itemSelectText;
    			return {
    				item: function(classNames, data) {
    					return template('<div class="' + String(classNames.item) + ' ' + String( data.highlighted ? classNames.highlightedState : classNames.itemSelectable ) + '" data-item data-id="' + String(data.id) + '" data-value="' + String(data.value) + '"' + String(data.active ? 'aria-selected="true"' : '') + '' + String(data.disabled ? 'aria-disabled="true"' : '') + '><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
    				},
    				choice: function(classNames, data) {
    					console.log('data', data);
    					return template('<div class="' + String(classNames.item) + ' ' + String(classNames.itemChoice) + ' ' + String( data.disabled ? classNames.itemDisabled : classNames.itemSelectable ) + '" data-select-text="' + String(itemSelectText) + '" data-choice  ' + String( data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable' ) + ' data-id="' + String(data.id) + '" data-value="' + String(data.value) + '" ' + String( data.groupId > 0 ? 'role="treeitem"' : 'role="option"' ) + ' ><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
    				},
    			};
    		},
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	var el;
    	window.Choices && (new Choices(el = document.getElementById('select-countries'), {
    		classNames: {
    			containerInner: el.className,
    			input: 'form-control',
    			inputCloned: 'form-control-sm',
    			listDropdown: 'dropdown-menu',
    			itemChoice: 'dropdown-item',
    			activeState: 'show',
    			selectedState: 'active',
    		},
    		shouldSort: false,
    		searchEnabled: false,
    		callbackOnCreateTemplates: function(template) {
    			var classNames = this.config.className,
    					itemSelectText = this.config.itemSelectText;
    			return {
    				item: function(classNames, data) {
    					return template('<div class="' + String(classNames.item) + ' ' + String( data.highlighted ? classNames.highlightedState : classNames.itemSelectable ) + '" data-item data-id="' + String(data.id) + '" data-value="' + String(data.value) + '"' + String(data.active ? 'aria-selected="true"' : '') + '' + String(data.disabled ? 'aria-disabled="true"' : '') + '><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
    				},
    				choice: function(classNames, data) {
    					console.log('data', data);
    					return template('<div class="' + String(classNames.item) + ' ' + String(classNames.itemChoice) + ' ' + String( data.disabled ? classNames.itemDisabled : classNames.itemSelectable ) + '" data-select-text="' + String(itemSelectText) + '" data-choice  ' + String( data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable' ) + ' data-id="' + String(data.id) + '" data-value="' + String(data.value) + '" ' + String( data.groupId > 0 ? 'role="treeitem"' : 'role="option"' ) + ' ><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
    				},
    			};
    		},
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	var el;
    	window.Choices && (new Choices(el = document.getElementById('select-labels'), {
    		classNames: {
    			containerInner: el.className,
    			input: 'form-control',
    			inputCloned: 'form-control-sm',
    			listDropdown: 'dropdown-menu',
    			itemChoice: 'dropdown-item',
    			activeState: 'show',
    			selectedState: 'active',
    		},
    		shouldSort: false,
    		searchEnabled: false,
    		callbackOnCreateTemplates: function(template) {
    			var classNames = this.config.className,
    					itemSelectText = this.config.itemSelectText;
    			return {
    				item: function(classNames, data) {
    					return template('<div class="' + String(classNames.item) + ' ' + String( data.highlighted ? classNames.highlightedState : classNames.itemSelectable ) + '" data-item data-id="' + String(data.id) + '" data-value="' + String(data.value) + '"' + String(data.active ? 'aria-selected="true"' : '') + '' + String(data.disabled ? 'aria-disabled="true"' : '') + '><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
    				},
    				choice: function(classNames, data) {
    					console.log('data', data);
    					return template('<div class="' + String(classNames.item) + ' ' + String(classNames.itemChoice) + ' ' + String( data.disabled ? classNames.itemDisabled : classNames.itemSelectable ) + '" data-select-text="' + String(itemSelectText) + '" data-choice  ' + String( data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable' ) + ' data-id="' + String(data.id) + '" data-value="' + String(data.value) + '" ' + String( data.groupId > 0 ? 'role="treeitem"' : 'role="option"' ) + ' ><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
    				},
    			};
    		},
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	var el;
    	window.Choices && (new Choices(el = document.getElementById('select-countries-valid'), {
    		classNames: {
    			containerInner: el.className,
    			input: 'form-control',
    			inputCloned: 'form-control-sm',
    			listDropdown: 'dropdown-menu',
    			itemChoice: 'dropdown-item',
    			activeState: 'show',
    			selectedState: 'active',
    		},
    		shouldSort: false,
    		searchEnabled: false,
    	}));
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
    	var el;
    	window.Choices && (new Choices(el = document.getElementById('select-countries-invalid'), {
    		classNames: {
    			containerInner: el.className,
    			input: 'form-control',
    			inputCloned: 'form-control-sm',
    			listDropdown: 'dropdown-menu',
    			itemChoice: 'dropdown-item',
    			activeState: 'show',
    			selectedState: 'active',
    		},
    		shouldSort: false,
    		searchEnabled: false,
    	}));
    });
    // @formatter:on
  </script>
  <script>
    let sliderTriggerList = [].slice.call(document.querySelectorAll("[data-slider]"));
    sliderTriggerList.map(function (sliderTriggerEl) {
    	let options = {};
    	if (sliderTriggerEl.getAttribute("data-slider")) {
    		options = JSON.parse(sliderTriggerEl.getAttribute("data-slider"));
    	}
    	let slider = noUiSlider.create(sliderTriggerEl, options);
    	if (options['js-name']) {
    		window[options['js-name']] = slider;
    	}
    });
  </script>