
<footer style="width:600px; text-align:center; margin:auto;">

  <!-- Menu -->
  <div class="menu">
        <?php
          $args = array('theme_location' => 'footer_menu');
          wp_nav_menu($args);
         ?>
        </br>  <strong>  ( use : wp_nav_menu();)  </strong>
  </div>
  <!-- end menu -->

  @copy Agus Rachman 2017
  
</footer>


<?php wp_footer(); ?>
</body>
</html>
