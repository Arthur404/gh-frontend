<footer class="footer">
    <div class="container section">
        <div class="row">
            <div class="col-sm-3 col-md-3 footer-logo">
                <a href="">
                    <?php the_custom_logo(); ?>
                </a>
                <span class="copy">
                        2015 &copy; lawyer.
                    </span>
                <ul class="social flex-content">
                    <li class="fb">
                        <i class="fa fa-facebook"></i>
                    </li>
                    <li class="google">
                        <i class="fa fa-google-plus"></i>
                    </li>
                    <li class="tw">
                        <i class="fa fa-twitter"></i>
                    </li>
                    <li class="in">
                        <i class="fa fa-linkedin"></i>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 col-md-offset-1">
                <h3>Navigation</h3>
                <?php wp_nav_menu(array('them_location' => 'menu', 'container' => false, 'menu_class' => 'navigation')) ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                <h3>Quick contact us</h3>
                <form action="#" class="form-footer" name="form-footer">
                    <ul class="flex-content">
                        <li class="name">
                            <input id="name" type="text" name="name" required>
                            <label for="name">Name <span>*</span></label>
                        </li>
                        <li class="email">
                            <input id="email" type="email" name="email" required>
                            <label for="email">Email <span>*</span></label>
                        </li>
                        <li class="comment">
                            <textarea id="comment" required></textarea>
                            <label for="comment">Comment <span>*</span></label>
                        </li>
                    </ul>
                    <input class="btn" type="submit" value="Submit Now">
                </form>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>