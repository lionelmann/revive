<footer class="page-footer grey">
    <div class="container">
      <div class="row">
        <div class="col l8 offset-l2 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit erat, imperdiet in nunc nec, luctus accumsan nibh. Mauris mollis, dui ac feugiat posuere, est turpis aliquet erat, vitae blandit justo ligula sit amet arcu. Maecenas euismod ultricies orci, eu finibus sapien tristique quis.</p>


        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Copyright
      </div>
    </div>
  </footer>

<?php wp_footer(); ?> 

<script>
jQuery(document).ready(function($){
      $('.parallax').parallax();
    });

</script>

<!-- Main library -->
<script src="<?php echo get_template_directory_uri();?>/src/js/animation/three.min.js"></script>

<!-- Helpers -->
<script src="<?php echo get_template_directory_uri();?>/src/js/animation/projector.js"></script>
<script src="<?php echo get_template_directory_uri();?>/src/js/animation/canvas-renderer.js"></script>

<!-- Visualitzation adjustments -->
<script src="<?php echo get_template_directory_uri();?>/src/js/animation/3d-lines-animation.js"></script>

</body>
</html>