<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
  <article class="max-w-xl md:max-w-2xl xl:max-w-3xl mx-auto px-6 sm:px-12 pt-16 mb-8" itemscope itemtype="http://schema.org/BlogPosting">
    <header
      class="max-w-xl md:max-w-2xl xl:max-w-3xl mx-auto text-center px-6 pt-24"
    >
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-sans font-bold mb-1">
                <?php $this->title() ?>

      </h1>
    </header>
    <article
  class="max-w-xl md:max-w-2xl xl:max-w-3xl mx-auto px-6 sm:px-12 pt-16 border-b border-gray-300 pb-10 mb-16"
>
  <div             style="font-family: Cardo,Georgia,Cambria,Times New Roman,Times,serif;" class="yue markdown text-lg leading-normal text-gray-700">
    <?php $this->content(); ?>
  </div>
</article>

  </article>
  <?php $this->need('comments.php'); ?>
</div>
<!-- end #main-->
<?php $this->need('footer.php'); ?>
