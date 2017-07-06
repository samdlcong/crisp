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
<div id="disqus_thread"></div>
<script>

    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

     var disqus_config = function () {
     this.page.url = "<?php $this->permalink() ?>";  // Replace PAGE_URL with your page's canonical URL variable
     this.page.identifier = "<?php echo $this->cid; ?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
     };

    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://samdlcong.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

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
