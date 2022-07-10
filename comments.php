<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if($this->allow('comment')): ?>
<div id="comments" class="max-w-xl md:max-w-2xl xl:max-w-3xl mx-auto px-6 sm:px-12">
    
<style>
ol.comment-list .comment-by-author .comment-author {
  color: #ca8a04;
}
ol.comment-list li.comment-body.comment-parent {
  margin: 10px 0px;
  border: solid transparent;
  padding: 20px;
  border-radius: 15px;
}
ol.comment-list li.comment-body.comment-parent {
    border-bottom-color: rgb(209 213 219 / 1);
    border-bottom-width: 1px
}
ol.comment-list li.comment-body.comment-parent div.comment-author {
  display: inline-block
}
ol.comment-list li.comment-body.comment-parent div.comment-author span {
  display: inline-flex;
}
ol.comment-list li.comment-body.comment-parent div.comment-author .fn {
    margin-top: 5px;
    position: absolute;
    margin-left: 10px
}
ol.comment-list .comment-content {
    padding: 10px
}
ol.comment-list div.comment-reply {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
}
ol.comment-list div.comment-reply a {
  padding: 5px;
  border: solid 0.1px;
  border-radius: 10%;
  color: #3b82f6;
  font-weight: 500;
  transition: 0.2s ease-in-out;
}
ol.comment-list div.comment-reply a:hover {
  background: #3b82f6;
  color: #000;
}
ol.comment-list .comment-children ol.comment-list li {
  margin-left: 2rem;
}
</style><?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <h2>
        <?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?>
        </h2>

        <?php $comments->listComments(); ?>

        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;');
        else:?>
         <h2 class="p-8 text-center text-4xl border-b border-gray-300">暂无评论</h2>
         

        <?php endif; ?>

        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </div>

            <h2 class="mt-4">添加新评论</h3>
                <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                    <?php if($this->user->hasLogin()): ?>
                    <p>
                        <?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>">
                            <?php $this->user->screenName(); ?>
                        </a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">
                            <?php _e('退出'); ?> &raquo;
                        </a>
                    </p>
                    <?php else: ?>
                    <p>
                        <label for="author" class="block m-2 text-sm font-medium ">
                            <?php _e('称呼'); ?>
                        </label>
                        <input type="text" name="author" id="author"
                            class="border text-sm 
        transition
        ease-in-out rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:outline-none block w-full p-2.5 "
                            value="<?php $this->remember('author'); ?>" required />
                    </p>
                    <p>
                        <label for="mail" class="block m-2 text-sm font-medium">
                            <?php _e('Email'); ?>
                        </label>
                        <input type="email" name="mail" id="mail"
                            class="border text-sm 
        transition
        ease-in-out rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:outline-none block w-full p-2.5 "
                            value="<?php $this->remember('mail'); ?>" <?php if ($this->options->commentsRequireMail): ?>
                        required
                        <?php endif; ?> />
                    </p>
                    <p>
                        <label for="url" class="block m-2 text-sm font-medium">
                            <?php _e('网站'); ?>
                        </label>
                        <input type="url" name="url" id="url"
                            class="border text-sm rounded-lg 
        transition
        ease-in-out focus:ring-blue-500 focus:border-blue-600 focus:outline-none block w-full p-2.5 "
                            placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>" <?php if
                            ($this->options->commentsRequireURL): ?> required
                        <?php endif; ?> />
                    </p>
                    <?php endif; ?>
                    <p>
                        <label for="text" class="block m-2 text-sm font-medium">
                            <?php _e('内容'); ?>
                        </label>
                        <textarea rows="8" cols="50" name="text" id="textarea" class="
                my-4
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            required><?php $this->remember('text'); ?></textarea>
                    </p>
                    <p class="text-center">
                        <button type="submit"
                            class="m-4 text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 active show px-3">
                            <?php _e('提交评论'); ?>
                        </button>
                    </p>
                </form>
        </div>
</div>

<?php else: ?>
<h3>
    <?php _e('评论已关闭'); ?>
</h3>
<?php endif; ?>