<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" class="html">

<head>
    <title>敦海文化传播</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="/dunhai/Public/js/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
    <!---->
    <link rel="stylesheet" href="/dunhai/Public/css/index.css">
    <!---->
</head>

<body>

<div class="container">
    <!--&lt;!&ndash; header start &ndash;&gt;-->
    <!--<div class="header" >-->
    <!--<div id="nav">-->
    <!--<div class="logo">-->
    <!--<a href=""><img class="lazyImg" src="/dunhai/Public/img/logo.png" data-original="/dunhai/Public/img/logo.png"-->
    <!--width="210" height="38"></a>-->
    <!--</div>-->
    <!--<div class="n-main">-->
    <!--<ul >-->
    <!--<li role="presentation" class="active"><a href="#">首页</a></li>-->
    <!--<li role="presentation"><a href="#">合作艺人</a></li>-->
    <!--<li role="presentation"><a href="#">新闻资讯</a></li>-->
    <!--<li role="presentation"><a href="#">关于我们</a></li>-->
    <!--<li role="presentation"><a href="#">联系我们</a></li>-->
    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--&lt;!&ndash;轮播图开始&ndash;&gt;-->

    <!--&lt;!&ndash;轮播图结束&ndash;&gt;-->


    <!--<div class="row">-->
    <!--<div class="col-sm-3">-->
    <!--<h3>第一列</h3>-->
    <!--<p>学的不仅是技术，更是梦想！</p>-->
    <!--<p>再牛逼的梦想,也抵不住你傻逼似的坚持！</p>-->
    <!--</div>-->
    <!--<div class="col-sm-2">-->
    <!--<h3>第二列</h3>-->
    <!--<p>学的不仅是技术，更是梦想！</p>-->
    <!--<p>再牛逼的梦想,也抵不住你傻逼似的坚持！</p>-->
    <!--</div>-->
    <!--<div class="col-sm-2">-->
    <!--<h3>第三列</h3>-->
    <!--<p>学的不仅是技术，更是梦想！</p>-->
    <!--<p>再牛逼的梦想,也抵不住你傻逼似的坚持！</p>-->
    <!--</div>-->
    <!--</div>-->

    <!--首页标题-->
    <div class="row">
        <!--横向-->
        <!--公司logo-->
        <div></div>
        <!--右边的四个菜单-->
        <!--<div class="n-main">-->
        <!--<ul>-->
        <!--<li role="presentation" class="active"><a href="#">首页</a></li>-->
        <!--<li role="presentation"><a href="#">合作艺人</a></li>-->
        <!--<li role="presentation"><a href="#">新闻资讯</a></li>-->
        <!--<li role="presentation"><a href="#">关于我们</a></li>-->
        <!--<li role="presentation"><a href="#">联系我们</a></li>-->
        <!--</ul>-->
        <!--</div>-->

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">-->
                    <!--<span class="sr-only">Toggle navigation</span>-->
                    <!--<span class="icon-bar"></span>-->
                    <!--<span class="icon-bar"></span>-->
                    <!--<span class="icon-bar"></span>-->
                    <!--</button>-->
                    <a href="#">
                        <img class="lazyImg" src="/dunhai/Public/img/logo.png" data-original="/dunhai/Public/img/logo.png"
                             -width="60" height="60"></a></div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="nav navbar-nav navbar-right" id="bs-example-navbar-collapse-6">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">合作艺人</a></li>
                        <li><a href="#">新闻资讯</a></li>
                        <li><a href="#">关于我们</a></li>
                        <li><a href="#">联系我们</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>

    <!--滚动广告条-->
    <div>
        <div id="myCarousel" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="http://www.runoob.com/wp-content/uploads/2014/07/slide1.png" alt="First slide">
                </div>
                <div class="item">
                    <img src="http://www.runoob.com/wp-content/uploads/2014/07/slide2.png" alt="Second slide">
                </div>
                <div class="item">
                    <img src="http://www.runoob.com/wp-content/uploads/2014/07/slide3.png" alt="Third slide">
                </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--合作艺人及搜索-->
    <div>
        <!--合作艺人 居左-->
        <div></div>
        <!--搜索带按钮,居右-->
        <div class="row">
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="请输入艺人名称..">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
        </div>
    </div>

    <!--艺人表-->
    <div>
        <!--九宫格的艺人列表,3*3-->
        <div></div>
        <!--更多 居中显示-->
        <button/>
    </div>

    <!--新闻资讯及关于我们 7:3-->
    <div>
        <!--新闻资讯-->
        <div>

        </div>
        <!--关于我们-->
        <div></div>
    </div>

    <!--底部的版本及声明-->
    <div></div>
</div>


</body>

</html>