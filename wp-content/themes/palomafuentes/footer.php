<footer id="pf__footer" class="pf__footer">
        <div class="pf__footer__content">
            <p>Copyright Ⓒ 2022</p>
        </div>
        <ul class="pf__footer__social-links">
            <li><a href="<?php echo get_field("url_instagram", 5); ?>">Instagram</li>
            <li><a href="<?php echo get_field("url_behance", 5); ?>">Behance</li>
        </ul>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
<?php wp_footer(); ?>
</body>
</html>