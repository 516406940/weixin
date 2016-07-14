<!DOCTYPE HTML>
<html>
<head>
    <title>Compose</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="../public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../public/css/style.css" rel='stylesheet' type='text/css' />
    <link href="../public/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="../public/js/jquery.min.js"></script>
    <!----webfonts--->

    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <?php require(dirname(__FILE__)."/../public/top.php"); ?>
    <!-- /.navbar-header -->

    <div id="page-wrapper">
        <div class="graphs">
            <div class="xs">

                <div class="col-md-8 inbox_right">
                    <form action="index.php?r=wei/add_pro" method="post">
                        <div class="Compose-Message">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2>添加公众号</h2>
                                </div>
                                <div class="panel-body">
                                    <label>公众号 : </label>
                                    <input type="text" class="form-control1 control3" name="a_name">
                                    <label>密码 :  </label>
                                    <input type="password" class="form-control1 control3" name="a_pwd">
                                    <!--                                <a href="#" class="btn btn-warning btn-warng1"><span class="glyphicon glyphicon-envelope tag_02"></span> 添加 </a>&nbsp;-->
                                    <!--                                <a href="#" class="btn btn-success btn-warng1"><span class="glyphicon glyphicon-tags tag_01"></span> 重置 </a>-->
                                    <input type="submit" class="btn btn-warning btn-warng1" value="添加"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="btn btn-success btn-warng1" value="重置"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="copy_layout">
                <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="../public/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../public/js/metisMenu.min.js"></script>
<script src="../public/js/custom.js"></script>
</body>
</html>
