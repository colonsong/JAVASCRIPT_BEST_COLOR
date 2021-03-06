<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
        <link href="sample.css" rel="stylesheet">
    </head>
    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">Cover</h3>
                            <nav>
                                <ul class="nav masthead-nav">
                                    <li class="active"><a href="#">Home</a>
                                    </li>
                                    <li><a href="#">Features</a>
                                    </li>
                                    <li><a href="#">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="inner cover">
                        <h1 class="cover-heading">
                            <span id="r1">R</span>
                            <span id="g1">G</span>
                            <span id="b1">B</span>
                            <p/>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleinputAmount">Amount (in dollars)</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">背景顏色6碼 #</div>
                                        <input type="text" class="form-control" id="hex_in"  value="AABBCC">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" onclick="change_color();">字體顏色</button>
                                <button type="submit" class="btn btn-primary" onclick="random_color();">字體與背景</button>
                                <button type="submit" class="btn btn-danger" onclick="save();"><span class="glyphicon glyphicon-heart-empty"></span></button>

<p/>
                            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>

                            <dl class="lead" >
                              <dt class="row">字體色碼<span id="font_hex"> </span> </dt>
  <dt class="row"><span id="bright_diff" class="col-md-1">@@@</span><span class="col-md-5"> 亮度差異值 理想 > 125 </span><span class="ok bright_ok col-md-1"></span></dt>
  <dd class="row"><span id="color_diff" class="col-md-1">@@@</span><span class="col-md-5">  顏色差 理想 > 500</span> <span class="ok color_ok col-md-1"></span></dd>
  <dd class="row"><span id="pythdiff_diff" class="col-md-1">@@@</span> <span class="col-md-5"> pythdiff 理想 > 250 </span><span class="ok phthdiff_ok col-md-1"></span></dd>
  <dd class="row"><span id="lumi_diff" class="col-md-1">@@@</span><span class="col-md-5">  lumidiff 理想 > 5 </span><span class="ok lumi_ok col-md-1"></span></dd>
</dl>
                    </div>
                    <div class="mastfoot">
                        <div class="inner">
                            <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="color.js"></script>

    </body>
</html>
