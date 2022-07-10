<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div
  class="max-w-xl md:max-w-3xl xl:max-w-4xl mx-auto text-center px-6 py-10 md:py-32 border-b border-gray-300"
>
  <h1 class="text-4xl sm:text-5xl md:text-6xl font-sans font-bold mb-1">
    <a
      style="
        font-family: Fira Sans, -apple-system, BlinkMacSystemFont, Segoe UI,
          Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
          Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      "
      href="/"
      aria-current="page"
      class="text-black active--exact active"
      ><?php $this->options->title(); ?>
    </a>
  </h1>
  <p
    style="
      font-family: Cardo, Georgia, Cambria, Times New Roman, Times, serif;
      margin-top: 30px;
    "
    class="text-gray-700 text-lg sm:text-3xl"
  >
    <?php $this->options->description() ?>
  </p>
</div>
