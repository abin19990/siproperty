<?php 
require ('conn.php');
$sql="SELECT * FROM `home_carosel` WHERE id='".$_GET['id']."'";
$result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
 



if(isset($_POST['subbtn'])){
    $title1=$_POST['title1'];
    $title2=$_POST['title2'];
    
    $folder="carosel/";
    $img=basename($_FILES['fle']['name']);
    if(file_exists($folder.$img))
   {
       $ran=rand(000000,9999999);
       $file_name=$ran.$img;
   }

   else{
       $file_name=$img;
   }
   $path=$folder.$file_name ;
   move_uploaded_file($_FILES['fle']['tmp_name'],$path);
   $id=$_GET['id'];
   if($img === ""){
    $imge=$pic;
  }
  else{
    $imge=$file_name;
  }
$sql1="UPDATE `home_carosel` SET `maintitle`='$title1',`subtitle`='$title2',`picture`='$file_name' WHERE id='$id'";


  
   mysqli_query($con,$sql1);
   $file_name1='listcarousel.php';
   $redirectpath1=$redirectpath.$file_name1;
   header("location:$redirectpath1");




}
?>
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
  <link rel="apple-touch-icon" href="./assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="./assets/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="./assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="./assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="./assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="./assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="./assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ./assets/styles/app.min.css -->
  <link rel="stylesheet" href="./assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="./assets/styles/font.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
 <?php
 include('sidebar.php');
 ?>
      <div class="b-t">
        <div class="nav-fold">
        	<a href="profile.html">
        	    <span class="pull-left">
        	      <img src="./assets/images/a0.jpg" alt="..." class="w-40 img-circle">
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
                  <div ui-include="'./views/blocks/dropdown.new.html'"></div>
                </li>
              </ul>
        
              <div ui-include="'./views/blocks/navbar.form.html'"></div>
              <!-- / -->
            </div>
           
            <ul class="nav navbar-nav ml-auto flex-row">
              <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link mr-2" href data-toggle="dropdown">
                  <i class="material-icons">&#xe7f5;</i>
                  <span class="label label-sm up warn">3</span>
                </a>
                <div ui-include="'./views/blocks/dropdown.notification.html'"></div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="./assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div ui-include="'./views/blocks/dropdown.user.html'"></div>
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
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
<div class="padding">
  <div class="row">
    <div class="col-md-6">
      <div class="box">
        <div class="box-header">
          <h2>Carousel</h2>
          <!-- <small>Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group for optimum spacing.</small> -->
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
          <form role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Enter title 1</label>
              <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['maintitle'] ?>" name="title1">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Enter title 2</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['subtitle'] ?>" name="title2">
            </div>
            <?php 
            $imgpath="carosel";
             ?>
            <img  style="height:8em; width:7em" src="<?php echo $imgpath.'/'.trim($row['picture']);  ?>" />
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile" class="form-control" name="fle">
              
            </div>
          
            <button type="submit" class="btn btn-success m-b" name="subbtn">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
    
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
 

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="./libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="./libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="./libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="./libs/jquery/underscore/underscore-min.js"></script>
  <script src="./libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="./libs/jquery/PACE/pace.min.js"></script>

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
  <script src="./libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>
