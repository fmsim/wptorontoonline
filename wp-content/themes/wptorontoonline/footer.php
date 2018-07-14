      </div> <!-- .container .content -->
    </div> <!-- #page -->
    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <nav id="footer-navigation" class="footer-navigation" role="navigation">
          <?php
            wp_nav_menu(array(
              'theme_location' => 'main_menu'
            ));
          ?>
        </nav>
      </div> <!-- .container -->
      <hr>
      <div class="copyright">
        <p>Toronto Online <?php echo date('Y') ?></p>
      </div>
    </footer>
    <!-- scripts -->
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
    <!-- <script type="text/javascript" src=".js"></script> -->
    <?php wp_footer(); ?>
  </body>
</html>
