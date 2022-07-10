<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 * 
 * @package Typecho Replica Theme 
 * @author Typecho Team
 * @version 1.2
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<?php $this->need('header.php'); ?>
<div class="" id="_main" role="main">
  <?php while($this->next()): ?>
  <article>
    <div class="mx-auto max-w-3xl px-6" style="font-family: Cardo,Georgia,Cambria,Times New Roman,Times,serif;">
      <div class="py-8 sm:py-20 border-b border-gray-300">
        <header class="text-center mb-8" style="font-family: Cardo,Georgia,Cambria,Times New Roman,Times,serif;">
          <time style="font-family: Cardo,Georgia,Cambria,Times New Roman,Times,serif;"
            datetime="<?php $this->date('c'); ?>" class="text-gray-700 text-xs mb-2 uppercase">
            <?php $this->date(); ?>
          </time>
          <h2 class="m-4 text-3xl sm:text-4xl leading-tight font-sans mb-1 sm:mb-2">
            <a href="<?php $this->permalink() ?>" class="text-black font-bold">
              <?php $this->title() ?>
            </a>
          </h2>
          <p class="text-gray-700 leading-normal text-sm sm:text-base">
            <span>by
              <a href="<?php $this->author->permalink(); ?>"
                class="text-gray-700 capitalize border-b border-transparent hover:border-gray-400 transition-colors duration-300">
                <?php $this->author(); ?>
              </a></span>
          </p>
        </header>
      </div>
    </div>
  </article>
  <?php endwhile; ?>

  <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>
<!-- end #main-->
<?php $this->need('footer.php'); ?>
</body>

</html>