<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div><!-- end .row -->
</div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.All
    rights reserved.
    <?php _e(' Powered by <a href="http://www.typecho.org">Typecho</a>. <a href="">crisp</a> theme by Samdlcong.'); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
