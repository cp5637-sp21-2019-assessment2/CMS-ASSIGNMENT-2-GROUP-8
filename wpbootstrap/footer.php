<?php if(!is_front_page()) : ?>
  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if(is_active_sidebar('sidebar')): ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div><!-- /.blog-sidebar -->
<?php endif; ?>
  </div><!-- /.row -->

  </div><!-- /.container -->
<footer class="blog-footer">
<div class ="row ml-0 mr-0 footer-widgets">
    <div class= "widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
         <?php dynamic_sidebar('footer-1')?>
    </div>
    <div class= "widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
         <?php dynamic_sidebar('footer-2')?>  
       </div>
    <div class= "widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
    <?php dynamic_sidebar('footer-3')?>
     </div>
     </div>

  <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  <p>
    <a href="#" class="topbutton"></a>
  </p>
</footer>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>
