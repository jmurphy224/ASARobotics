<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-brand">
      <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="brand-mark">ASA</div>
        <div class="brand-name">All Saints Robotics</div>
      </a>
      <p><?php echo esc_html( get_theme_mod( 'asa_footer_blurb', 'A K–12 FIRST robotics program at All Saints Academy, Florissant, MO.' ) ); ?></p>
    </div>
    <div class="footer-col">
      <h4>PROGRAM</h4>
      <a href="<?php echo esc_url( home_url( '/explore/' ) ); ?>">FLL Explore</a>
      <a href="<?php echo esc_url( home_url( '/challenge/' ) ); ?>">FLL Challenge</a>
      <a href="<?php echo esc_url( home_url( '/ftc/' ) ); ?>">FIRST Tech Challenge</a>
    </div>
    <div class="footer-col">
      <h4>CLUB</h4>
      <a href="<?php echo esc_url( home_url( '/teams/' ) ); ?>">Teams</a>
      <a href="<?php echo esc_url( home_url( '/schedule/' ) ); ?>">Schedule</a>
      <a href="<?php echo esc_url( home_url( '/join/' ) ); ?>">Join a team</a>
    </div>
    <div class="footer-col">
      <h4>CONTACT</h4>
      <a href="mailto:<?php echo esc_attr( get_theme_mod( 'asa_contact_email', 'coach@asarbots.org' ) ); ?>"><?php echo esc_html( get_theme_mod( 'asa_contact_email', 'coach@asarbots.org' ) ); ?></a>
      <p><?php echo esc_html( get_theme_mod( 'asa_contact_phone', '(314) 555-0142' ) ); ?></p>
    </div>
  </div>
  <div class="footer-bottom wrap">
    <span>© <?php echo esc_html( date( 'Y' ) ); ?> All Saints Academy Robotics Club</span>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
