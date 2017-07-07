<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="post">
    <div>
        <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
        &nbsp;&nbsp;<a itemprop="name" href="<?php $this->author->permalink(); ?>"
                       rel="author"><?php $this->author(); ?></a></div>

    <h1 class="post-title"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
    <section class=" post-content article-entry">
        <?php $this->content(); ?>
    </section>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s', '没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s', '没有了'); ?></li>
    </ul>
</article>
<?php $this->need('comments.php'); ?>

<script>
    $(function () {
        $('pre code').each(function () {
            var lines = $(this).text().split('\n').length - 1;
            var $numbering = $('<ul/>').addClass('pre-numbering');
            $(this)
                .addClass('has-numbering')
                .parent()
                .append($numbering);
            for (i = 1; i <= lines; i++) {
                $numbering.append($('<li/>').text(i));
            }
        });
    });
</script>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
