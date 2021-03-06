<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="<?php $this->options->charset(); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="renderer" content="webkit" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link
      data-vue-tag="ssr"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700%7CCardo"
    />
    <title>
      <?php $this->archiveTitle(array( 'category' => _t('分类 %s 下的文章'),
      'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'),
      'author' => _t('%s 发布的文章') ), '', ' - '); ?><?php
      $this->options->title(); ?>
    </title>

    <!-- 使用url函数转换相关路径 -->
    <link
      rel="stylesheet"
      href="<?php $this->options->themeUrl('normalize.css'); ?>"
    />
    <script src="https://cdn.statically.io/gh/Dreamer-Paul/Kico-Style@master/kico.min.js"></script>
    <link href="https://cdn.statically.io/gh/Dreamer-Paul/Kico-Style@master/kico.min.css" rel="stylesheet" type="text/css"/>

    <?php
if ($this->is('page') or $this->is('post')):
?>
<link
  rel="stylesheet"
  href="<?php $this->options->themeUrl('yue.css'); ?>"
/>
    <link
      rel="stylesheet"
      href="<?php $this->options->themeUrl('prism.css'); ?>"
    />
    <script src="<?php $this->options->themeUrl('prism.js'); ?>"></script>
    <? endif;?>
    <script src="https://cdn.tailwindcss.com"></script>    <style>
        h1,h2,h3,h4 {
        font-family: Fira Sans, -apple-system, BlinkMacSystemFont, Segoe UI,
          Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
          Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        }
        body {
            color: rgb(34,41,47) !important;
        }
    </style>
    <!--[if lt IE 9]>
      <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
      <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->
    header(); ?>
  </head>
  <body style="font-family: Cardo,Georgia,Cambria,Times New Roman,Times,serif;">
    <!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="sm:mx-16 p-8" style="">

<?php if($this->is('index')):?>
  
<?php $this->need('cover.php');  
else:?> 

<nav class="absolute top-1 left-1 z-20 mt-12 ml-12">
            <a href="<?php $this->options->siteUrl(); ?>"
                class="text-sm border opacity-75 hover:opacity-100 rounded-full px-4 py-2 transition-opacity duration-300 active text-gray-900 border-gray-400">←
                Home</a>
        </nav><?php endif; ?>
<div>