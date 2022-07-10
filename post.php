<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="" id="_main" role="main">
    <header>
        <div class="pt-24">
            <div class="max-w-xl md:max-w-3xl xl:max-w-4xl mx-auto text-center px-6">
                <h1 class="text-3xl sm:text-5xl leading-tight font-sans font-bold mb-2 text-black">
                    <?php $this->title() ?>
                </h1>
                <p class="text-gray-700 mt-4">
                    <span><a href="<?php $this->author->permalink(); ?>"
                            class="text-gray-700 capitalize border-b border-transparent hover:border-gray-400 transition-colors duration-300">
                            <?php $this->author(); ?>
                        </a>
                        • </span><time datetime="<?php $this->date(" c"); ?>" class="capitalize"
                        >
                        <?php $this->date(); ?>
                    </time>
                </p>
            </div>
        </div>
    </header>
    <article style="font-family: Cardo,Georgia,Cambria,Times New Roman,Times,serif;" class="max-w-xl md:max-w-2xl xl:max-w-3xl mx-auto px-6 sm:px-12 pt-16">
        <div class="yue"><?php $this->content(); ?></div>
        <footer class="flex flex-wrap pb-10 sm:pb-16">
            <div
                class="flex flex-wrap items-center justify-center sm:justify-left border-t border-b border-gray-300 w-full mt-10 py-10 sm:px-16">
                <figure class="px-2 mb-1 sm:mb-0 w-full sm:w-1/5 flex justify-center">
                    <a href="<?php $this->author->permalink(); ?>" class=""><img src="" alt="" width="100"
                            class="rounded-full p-4 sm:p-0" /></a>
                </figure>
                <div class="px-4 sm:w-4/5 text-center sm:text-left">
                    <h4 class="font-sans font-bold text-lg sm:text-xl mb-2 sm:mb-4">
                        <a href="<?php $this->author->permalink(); ?>"
                            class="text-black hover:text-gray-600 capitalize border-b-2 border-transparent transition-colors duration-300">
                            <?php $this->author(); ?>
                        </a>
                    </h4>
                    <p class="leading-normal">
                        <a href="<?php $this->author->permalink(); ?>"
                            class="text-blue-500 hover:text-blue-400 transition-colors duration-300">See all posts by
                            <?php $this->author(); ?> →
                        </a>
                    </p>
                </div>
            </div>
        </footer>
    </article>

    <?php $this->need('comments.php'); ?>
    <section class="mx-auto max-w-3xl px-6 md:px-8 py-16">
        <nav role="navigation" aria-label="pagination">
            <ul class="flex items-center justify-between sm:text-lg lg:text-xl">
                <li class="lg:w-1/2">
                    <a class="text-gray-700 hover:text-black px-4 py-2 transition-colors duration-300 active"
                        rel="prev">
                        ←
                        <?php $this->thePrev('%s','没有了'); ?>
                    </a>
                </li>
                <li class="lg:w-1/2 text-right"><a
                        class="text-gray-700 hover:text-black px-4 py-2 transition-colors duration-300" rel="next">
                        <?php $this->theNext('%s','没有了'); ?> →
                    </a>
                </li>
            </ul>
        </nav>
    </section>
</div>
<!-- end #main-->

<?php $this->need('footer.php'); ?>