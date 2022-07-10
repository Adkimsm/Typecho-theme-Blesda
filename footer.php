<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div><!-- end .row -->
</div>
</div><!-- end #body -->

<footer
style="font-family: Cardo,Georgia,Cambria,Times New Roman,Times,serif;"
    class="text-gray-700 text-sm leading-normal flex flex-wrap justify-between mx-auto max-w-3xl px-6 sm:px-12 pb-8 sm:pb-10 mt-6">
    <div class="w-full sm:w-1/2 mb-4 sm:mb-0">
        <p class="mb-2">&copy;
        <?php echo date('Y'); ?> <a class="border-b border-transparent hover:border-gray-400 transition-colors duration-300" href="<?php $this->options->siteUrl(); ?>">
            <?php $this->options->title(); ?>
        </a>.</p>
        <p>
        <?php _e('Powered By <a class="border-b border-transparent hover:border-gray-400 transition-colors duration-300" href="http://www.typecho.org">Typecho</a> | Theme By Blesda'); ?>.
</p>
    </div>
    <div class="w-full sm:w-1/2">
        <nav>
            <ul class="flex sm:justify-end -mx-2">
                <li class="px-2">
                    <a class="border-b border-transparent hover:border-gray-400 transition-colors duration-300"
                        href="<?php $this->options->siteUrl(); ?>">
                        <?php _e('首页'); ?>
                    </a>
                </li>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <li class="px-2">
                    <a class="border-b border-transparent hover:border-gray-400 transition-colors duration-300" <?php
                        if($this->is('page', $pages->slug)): ?> class="current"
                        <?php endif; ?> href="
                        <?php $pages->permalink(); ?>" title="
                        <?php $pages->title(); ?>">
                        <?php $pages->title(); ?>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        </nav>
    </div>
</footer>

                        </div>       </div>
</body>

</html>