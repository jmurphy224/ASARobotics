<?php
/** Applies automatically to the page with slug "programs". */
get_header();
asa_breadcrumb( array(), 'Programs' );
?>

<section class="hero has-margin">
  <div class="hero-inner narrow">
    <span class="hero-eyebrow">PROGRAMS</span>
    <h1>One club. Three programs. A path in at every age.</h1>
    <p class="lede">All Saints Academy Robotics runs three FIRST programs side by side, so a student who joins in kindergarten can stay in the same club all the way through high school.</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="section-tag">CHOOSE A TRACK</span>
      <h2>Find the right starting point</h2>
      <p>Programs are grouped by grade, not skill — every track assumes zero prior experience.</p>
    </div>
    <div class="prog-cards">
      <div class="prog-card">
        <div class="stage-num">01</div>
        <span class="stage-age">GRADES K–4</span>
        <h3>FLL Explore</h3>
        <p>LEGO-based models built around a real-world theme, presented to a friendly review panel. No robot game, no scoreboard.</p>
        <div class="meta">2 teams · Tuesdays</div>
        <a href="<?php echo esc_url( home_url( '/explore/' ) ); ?>" class="stage-link">See the Explore page →</a>
      </div>
      <div class="prog-card">
        <div class="stage-num">02</div>
        <span class="stage-age">GRADES 4–7</span>
        <h3>FLL Challenge</h3>
        <p>An autonomous LEGO robot runs a scored table while the team researches a real problem and pitches a solution to judges.</p>
        <div class="meta">4 teams · Wed & Thu</div>
        <a href="<?php echo esc_url( home_url( '/challenge/' ) ); ?>" class="stage-link">See the Challenge page →</a>
      </div>
      <div class="prog-card">
        <div class="stage-num">03</div>
        <span class="stage-age">GRADES 7–12</span>
        <h3>FIRST Tech Challenge</h3>
        <p>A metal-and-motor robot, driven and autonomous, competing head to head against other schools toward the State Championship.</p>
        <div class="meta">1 team · Mon, Wed, Sat</div>
        <a href="<?php echo esc_url( home_url( '/ftc/' ) ); ?>" class="stage-link">See the FTC page →</a>
      </div>
    </div>
  </div>
</section>

<section class="compare">
  <div class="section wrap">
    <div class="section-head">
      <span class="section-tag">SIDE BY SIDE</span>
      <h2>How the three programs differ</h2>
    </div>
    <table class="cmp">
      <thead><tr><th>Program</th><th>Explore</th><th>Challenge</th><th>FTC</th></tr></thead>
      <tbody>
        <tr><td>Grades</td><td>K–4</td><td>4–7</td><td>7–12</td></tr>
        <tr><td>Robot game</td><td>None</td><td>LEGO, scored table</td><td>Metal/motor, head-to-head</td></tr>
        <tr><td>Team size</td><td>Up to 6</td><td>Up to 10</td><td>Up to 15</td></tr>
        <tr><td>Season</td><td>Sept – Dec</td><td>Sept – Feb</td><td>Sept – April</td></tr>
        <tr><td>Meets</td><td>Tuesdays</td><td>Wed & Thu</td><td>Mon, Wed, Sat</td></tr>
        <tr><td>Cost</td><td>$65</td><td>$110</td><td>$275</td></tr>
      </tbody>
    </table>
  </div>
</section>

<section class="helper">
  <div class="helper-inner">
    <h2>Not sure which one fits?</h2>
    <p>Tell us your student's grade and we'll point you to the right team — or a good waitlist if that team's full.</p>
    <a href="<?php echo esc_url( home_url( '/join/' ) ); ?>" class="btn btn-primary">Ask us which program fits</a>
  </div>
</section>

<?php get_footer(); ?>
