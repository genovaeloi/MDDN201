
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.sidebarBtn').click(function(){
          $('.sidebar').toggleClass('active');
          $('.sidebarBtn').toggleClass('toggle');
        })
      })
    </script>
  <?php wp_footer(); ?>
</body>
</html>
