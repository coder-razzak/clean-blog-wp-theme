<?php global $cleanBlog; ?>
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <?php if ($cleanBlog['tw_link']) : ?>
            <li class="list-inline-item">
                <a href='<?php echo $cleanBlog['tw_link']; ?>'>
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
            </li>
            <?php endif; if ($cleanBlog['fb_link']) : ?>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          <?php endif; if ($cleanBlog['gt_link']) : ?>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          <?php endif; ?>
          </ul>
          <p class="copyright text-muted"><?php echo $cleanBlog['footer-text']; ?></p>
        </div>
      </div>
    </div>
  </footer>


<?php wp_footer(); ?>

</body>

</html>
