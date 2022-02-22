<?php if( ! is_front_page() ): ?>
            </div>
          </div>
        </main>
      </div>
    </div>
<?php endif; ?>
    <footer class="footer" id="footer">
      <div class="footerContents">
        <div class="footerContents-contact">
          <div class="enterprise-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pm_1_white.png" alt="PACIFIC MALL DEVELOPMENT" />
          </div>
        </div>
        <div class="footerContents-sitemap">
          <nav class="footer-nav">
<?php
wp_nav_menu(
    array (
        'theme_location' => 'place_footer',
        'container' => false,
    )
);
?>
          </nav>
        </div>
      </div>
      <p class="copyright">
        <small class="copyright-text">&#169; 2020 PARRAMOTA</small>
      </p>
    </footer>
  </div><!-- /.container -->
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>