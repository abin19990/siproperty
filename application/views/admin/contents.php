<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Flatkit - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="../assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="../assets/styles/font.css" type="text/css" />
  <style>
    .form-file {
        display: flex;
        align-items: center;
    }
    .form-file input[type="file"] {
        display: none;
    }
    .form-file a {
        margin-right: 10px;
        text-decoration: none;
        color: #000;
    }
    
    .form-file img {
        width: 100px; /* Set the desired width */
        height: 100px; /* Set the desired height */
        margin-right: 8px;
        display: none; /* Hide the image initially */
    }
    .form-file button {
    white-space: nowrap;
    
}
.center-container {
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>

</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <?php 
  include ("sidebar.php");
  ?>
      <div class="b-t">
        <div class="nav-fold">
        	<a href="profile.html">
        	    <span class="pull-left">
        	      <img src="../assets/images/a0.jpg" alt="..." class="w-40 img-circle">
        	    </span>
        	    <span class="clear hidden-folded p-x">
        	      <span class="block _500">Jean Reyes</span>
        	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
        	    </span>
        	</a>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->
        
            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>
        
            <!-- navbar collapse -->
            <div class="collapse navbar-collapse" id="collapse">
              <!-- link and dropdown -->
              <ul class="nav navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link" href data-toggle="dropdown">
                    <i class="fa fa-fw fa-plus text-muted"></i>
                    <span>New</span>
                  </a>
                  <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                </li>
              </ul>
        
              <div ui-include="'../views/blocks/navbar.form.html'"></div>
              <!-- / -->
            </div>
            <!-- / navbar collapse -->
        
            <!-- navbar right -->
            <ul class="nav navbar-nav ml-auto flex-row">
              <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link mr-2" href data-toggle="dropdown">
                  <i class="material-icons">&#xe7f5;</i>
                  <span class="label label-sm up warn">3</span>
                </a>
                <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="../assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div ui-include="'../views/blocks/dropdown.user.html'"></div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->
        </div>
    </div>
    <div class="app-footer">
      <div class="p-2 text-xs">
        <div class="pull-right text-muted py-1">
          &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="../">About</a>
          <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
    <div class="col-sm-6">
      <form ui-jp="parsley">
        <div class="box">
          <div class="box-header">
            <h2>Our Story</h2>
          </div>
          <div class="box-body">
           
            <div class="form-group">
              <label>Title</label>
              <input type="text" class="form-control" required>                        
            </div>
            <div class="form-group" style="height: 200px;">
              <label>Message</label>
              <textarea class="form-control" rows="6" data-minwords="6" required placeholder="Type your message"></textarea>
            </div>
                        
          </div>
          <!-- <div class="dker p-a text-right">
            <button type="submit" class="btn info">Submit</button>
          </div> -->
        </div>
      </form>
    </div>
    <div class="col-sm-6">
      <form ui-jp="parsley">
        <div class="box">
          <div class="box-header">
            <h2>Section</h2>
          </div>
          <div class="box-body">
                                
              <div class="row m-b">
                <div class="col-sm-6">
                  <label>Title 1</label>
                  <input type="text" class="form-control" placeholder="enter your title 1" required>
                </div>
                <div class="col-sm-6">
                  <label>Title 2</label>
                  <input type="text" class="form-control" placeholder="enter your title 2" required>
                </div>
              </div>
              <div class="form-group">
                <label>Url 1</label>
                <input type="url" required class="form-control" placeholder="Your website url">
              </div>
              <div class="form-group">
                <label>Url 2</label>
                <input type="url" required class="form-control" placeholder="Your website url">
              </div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">File input</label>
                <div class="col-sm-6">
                    <div class="form-file">
                        <img id="fileImage" alt="">
                        <a href="#" id="fileName"></a>
                        <input type="file" id="fileInput">
                        <button class="btn btn-primary" onclick="document.getElementById('fileInput').click();">Select file ...</button>
                    </div>
                </div>
            </div>
          </div>
         
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <form ui-jp="parsley">
        <div class="box">
          <div class="box-header">
            <h2>Reason to Choose </h2>
          </div>
          <div class="box-body">                    
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Heading 1</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" required placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Sub heading</label>
              <div class="col-sm-9">
              <textarea class="form-control" rows="6" data-minwords="6" required placeholder="Type your message"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Heading 2</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" required placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Sub heading</label>
              <div class="col-sm-9">
              <textarea class="form-control" rows="6" data-minwords="6" required placeholder="Type your message"></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Heading 3</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" required placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Sub heading</label>
              <div class="col-sm-9">
              <textarea class="form-control" rows="6" data-minwords="6" required placeholder="Type your message"></textarea>
              </div>
            </div>
            
          </div>
          
        </div>
      </form>
    </div>
    <div class="col-sm-6">
      <form ui-jp="parsley">
        <div class="box">
          <div class="box-header">
            <h2>About</h2>
          </div>
          <div class="box-body">                    
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Ceo name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" required placeholder="email">    
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Ceo designation</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" required placeholder="email">    
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Ceo Comment</label>
              <div class="col-sm-9">
              <textarea class="form-control" rows="6" data-minwords="6" required placeholder="Type your message"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Ceo profile Picture </label>
              <div class="col-sm-6">
                  <div class="form-file d-flex align-items-center">
                      <img id="fileImage1" alt="">
                      <a href="#" id="fileName1"></a>
                      <input type="file" id="fileInput1" accept="image/*" style="display: none;">
                      <button class="btn btn-primary ml-auto" onclick="document.getElementById('fileInput1').click();">Select file ...</button>
                  </div>
              </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-3 form-control-label">About Video </label>
              <div class="col-sm-6">
                  <div class="form-file d-flex align-items-center">
                      <video id="fileVideo2" controls style="display: none; max-width: 100px; max-height: 100px;"></video>
                      <a href="#" id="fileName2"></a>
                      <input type="file" id="fileInput2" accept="video/*" style="display: none;">
                      <button class="btn btn-primary ml-auto" onclick="document.getElementById('fileInput2').click();">Select file ...</button>
                  </div>
              </div>
          </div>
          
        </div>
        
      </form>
    </div>
  </div>
  <div class="center-container col-md-12">
    <button type="submit" class="btn btn-success col-4">Submit</button>
  </div>
        
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  
  <!-- / -->

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="../libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="../libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="../libs/jquery/underscore/underscore-min.js"></script>
  <script src="../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="../libs/jquery/PACE/pace.min.js"></script>

  <script src="scripts/config.lazyload.js"></script>

  <script src="scripts/palette.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>

  <script src="scripts/app.js"></script>

  <!-- ajax -->
  <script src="../libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->
<script>
  document.getElementById('fileInput1').addEventListener('change', function() {
    handleFileChange(this, 'fileName1', 'fileImage1');
});

document.getElementById('fileInput2').addEventListener('change', function() {
    handleFileChange(this, 'fileName2', 'fileImage2');
});

document.getElementById('fileInput1').addEventListener('change', function() {
    handleFileChange(this, 'fileName1', 'fileImage1', 'img');
});

document.getElementById('fileInput2').addEventListener('change', function() {
    handleFileChange(this, 'fileName2', 'fileVideo2', 'video');
});

function handleFileChange(input, fileNameId, mediaId, mediaType) {
    var file = input.files[0];
    var fileName = file ? file.name : 'No file selected';
    document.getElementById(fileNameId).textContent = fileName;
    document.getElementById(fileNameId).href = URL.createObjectURL(file);
    
    var mediaElement = document.getElementById(mediaId);
    if (file && file.type.startsWith(mediaType + '/')) {
        mediaElement.src = URL.createObjectURL(file);
        mediaElement.style.display = 'block';
    } else {
        mediaElement.style.display = 'none';
    }
}


</script>
</body>
</html>
