<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>For U <3 </title>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/style2.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/wdImageStax.css" type="text/css" media="screen">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="./css/3d-falling-leaves.css" rel="stylesheet">
  <link href="./css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link href="css/wdImageStax.css" rel="stylesheet">
  <!-- <script type="text/javascript" charset="utf-8">
    function hasClassName(inElement, inClassName)
    {
        var regExp = new RegExp('(?:^|\\s+)' + inClassName + '(?:\\s+|$)');
        return regExp.test(inElement.className);
    }

    function addClassName(inElement, inClassName)
    {
        if (!hasClassName(inElement, inClassName))
            inElement.className = [inElement.className, inClassName].join(' ');
    }

    function removeClassName(inElement, inClassName)
    {
        if (hasClassName(inElement, inClassName)) {
            var regExp = new RegExp('(?:^|\\s+)' + inClassName + '(?:\\s+|$)', 'g');
            var curClasses = inElement.className;
            inElement.className = curClasses.replace(regExp, ' ');
        }
    }

    function toggleClassName(inElement, inClassName)
    {
        if (hasClassName(inElement, inClassName))
            removeClassName(inElement, inClassName);
        else
            addClassName(inElement, inClassName);
    }

    function toggleShape()
    {
      var shape = document.getElementById('shape');
      if (hasClassName(shape, 'ring')) {
        removeClassName(shape, 'ring');
        addClassName(shape, 'cube');
      } else {
        removeClassName(shape, 'cube');
        addClassName(shape, 'ring');
      }
      
      var stage = document.getElementById('stage');
      if (hasClassName(shape, 'ring'))
        stage.style.webkitTransform = 'translateZ(-200px)';
      else
        stage.style.webkitTransform = '';
    }

    function toggleSlide(){
        if($('#sence1').hasClass('d-block')) {
            $('#sence1').removeClass('d-block');
            $('#sence1').addClass('d-none');
            $('#sence2').removeClass('d-none');
            $('#sence2').addClass('d-block');
            return false;
        }
        if($('#sence2').hasClass('d-block')) {
            $('#sence2').removeClass('d-block');
            $('#sence2').addClass('d-none');
            $('#sence3').removeClass('d-none');
            $('#sence3').addClass('d-block');
            return false;
        }
        if($('#sence3').hasClass('d-block')) {
            $('#sence3').removeClass('d-block');
            $('#sence3').addClass('d-none');
            $('#sence1').removeClass('d-none');
            $('#sence1').addClass('d-block');
            return false;
        }   
    }

  </script> -->
</head>
<body>
  <style>
  a {
  opacity: 0;
  animation: blinking 1s linear infinite;
}

@keyframes blinking {
  from,
  49.9% {
    opacity: 0;
  }
  50%,
  to {
    opacity: 1;
  }
}  
  </style>
  <div class="controls">
    <div style="text-align: center;">
      <a href="javascript:void(0)" class="text" onclick="toggleSlide()" style="margin-right: 2%; font-size: 35px"> 
        <i class="fa fa-arrow-circle-left"></i>
      </a>
      <a href="javascript:void(0)" class="text" onclick="toggleShape()">Nhấp vào đây nào <i class="fa fa-smile-o"></i></a>
      <a href="javascript:void(0)" class="text" onclick="toggleSlide()" style="margin-left: 2%; font-size: 35px"> 
        <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <h1 style="color: #fff;margin: 10px 0px auto;text-align: center;">THE BEST WISHES FOR U <i class="fa fa-heart" style="color:red"></i></h1>
  <div class="d-block" id="sence1">
    <div id="container">
      <div id="stage">
        <div id="shape" class="cube backfaces">
          <div class="plane one"></div>
          <div class="plane two"></div>
          <div class="plane three"></div>
          <div class="plane four"></div>
          <div class="plane five"></div>
          <div class="plane six"></div>
          <div class="plane seven"></div>
          <div class="plane eight"></div>
          <div class="plane nine"></div>
          <div class="plane ten"></div>
          <div class="plane eleven"></div>
          <div class="plane twelve"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-none" id="sence2">
    <div id="gallery">
      <div id="img1">
        <img src="./css/images/1.jpg">
        <span>Image 1 caption</span>
      </div>	
      <div id="img2">
        <img src="./css/images/2.jpg">
        <span>Image 2 caption</span>
      </div>	
      <div id="img3">
        <img src="./css/images/3.jpg">
        <span>Image 3 caption</span>
      </div>	
      <div id="img4">
        <img src="./css/images/4.jpg">
        <span>Image 4 caption</span>
      </div>	
      <div id="img5">
        <img src="./css/images/5.jpg">
        <span>Image 5 caption</span>
      </div>	
      <div id="img6">
        <img src="./css/images/6.jpg">
        <span>Image 6 caption</span>
      </div>	
    </div>
  </div>
  <div class="d-none" id="sence3">
    <div class="row" style="margin-top: 2%;">
          <div class="col-md-4"></div>
          <div class="col-md-4" style="margin-top: 2%">
              <div id="gallery-wrapper">
                  <ul id="test" class="image-list">
                      <li>
                          <img src="./css/images/1.jpg" class="img-responsive" />
                      </li>
                      <li>
                          <img src="./css/images/2.jpg" class="img-responsive" />
                      </li>
                      <li>
                          <img src="./css/images/3.jpg" class="img-responsive" />
                      </li>
                      <li>
                          <img src="./css/images/4.jpg" class="img-responsive" />
                      </li>
                      <li>
                          <img src="./css/images/5.jpg" class="img-responsive" />
                      </li>
                      <li>
                          <img src="./css/images/6.jpg" class="img-responsive" />
                      </li>
                      <li>
                          <img src="./css/images/7.jpg" class="img-responsive" />
                      </li>
                      <li>
                          <img src="./css/images/8.jpg" class="img-responsive" />
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-md-2"></div>
      </div>
  </div>
  <!-- <embed src="./studio/silence.mp3" type="audio/mpeg" autostart="true" hidden="true"> -->
  <audio id="player" autoplay loop>
      <source src="./studio/2.mp3" type="audio/mpeg">
  </audio>
  <script src="./js/jquery-1.11.3.min.js"></script>
  <script src="./js/rotate3Di.js" type="text/javascript"></script>
  <script src="./js/3d-falling-leaves.js" type="text/javascript"></script>
  <script src="./js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/jquery.wdImageStax.min.js"></script>
  <script src="./js/scriptjs.js"></script>
  <script> jQuery(document).octoberLeaves() </script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#gallery-wrapper').wdImageStax({height: 400,index:600,  degreePattern: "random"});
    });
</script>
</body>
</html>
