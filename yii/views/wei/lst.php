<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Inbox</title>
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

    <div id="page-wrapper">
        <div class="graphs">
            <div class="xs">

                <div class="col-md-8 inbox_right">

                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control1 input-search" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                    </span>
                        </div><!-- Input Group -->
                    </form>

                    <div class="mailbox-content">

                        <table class="table">
                            <tbody>
                            <?php foreach ($lst as $v): ?>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    <i class="fa fa-star icon-state-warning"></i>
                                </td>
                                <td class="hidden-xs">
                                    <?= $v['a_name'] ?>
                                </td>
                                <td>
                                    <?= $v['a_pwd'] ?>
                                </td>
                                <td>
                                    <a href="index.php?r=wei/del&aid=<?= $v['aid'] ?>">删除</a>
                                    <a href="index.php?r=wei/up&aid=<?= $v['aid'] ?>">修改</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?= LinkPager::widget(['pagination' => $pagination]) ?>
                    </div>
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
