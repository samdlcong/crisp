<?php
/**
 * 这是一款移植 Crisp Hexo Theme 的皮肤
 *
 * @package Crisp Theme For Typecho
 * @author Samlcong
 * @version 1.0
 * @link http://samdlcong.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="col-mb-12 col-8" id="main" role="main">


    <main id="content">
        <?php while ($this->next()): ?>
            <section id="" class="">
                <h3 class="post-title">
                    <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    <span class="separator"> · </span>
                    <time datetime="<?php $this->date('c'); ?>"
                          itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
                    <span class="taglist"> · <?php $this->tags(', ', true, 'none'); ?></span>
                </h3>
            </section>
        <?php endwhile; ?>
        
        <?php $this->pageNav('&laquo; Pre', 'Next &raquo;'); ?>
    </main>

</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
