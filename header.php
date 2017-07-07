<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
    <link href="//libs.baidu.com/fontawesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/crisp.css'); ?>">

    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
<div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a
    href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.
</div>
<![endif]-->

<header id="header">
    <a id="logo" href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->themeUrl('avatar.jpg'); ?>" alt=""></a>
    <h1><a href="<?php $this->options->siteUrl(); ?>">面包 || 代码<br/>Foodish Cooder</a></h1>
    <p>Hardworking Developer. </p>
    <div id="follow-icons">
        <a href="https://www.instagram.com/samdlcong/"><i class="fa fa-instagram fa-2x"></i></a>
        <a href="http://weibo.com/samnew"><i class="fa fa-pinterest-square fa-2x"></i></a>
        <a href="http://github.com/samnew"><i class="fa fa-github-square fa-2x"></i></a>
        <a href="https://twitter.com/samdlcong"><i class="fa fa-twitter-square fa-2x"></i></a>
        <a href="http://samdlcong.me/index.php/feed/"><i class="fa fa-rss-square fa-2x"></i></a>
    </div>
    <h6><a href="http://samdlcong.me/index.php/about.html">About</a></h6>
</header>

    
    
