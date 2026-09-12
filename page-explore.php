<?php
/** Applies automatically to the page with slug "explore". */
get_header();
asa_breadcrumb( array( 'Programs' => home_url( '/programs/' ) ), 'FLL Explore' );

$explore_teams = array(
	array( 'num' => 'EXP 40221', 'name' => 'Little Builders', 'desc' => 'Grades K–2. Presenting their first model and poster board this December to a panel of parent judges.', 'meet' => 'Tuesdays' ),
	array( 'num' => 'EXP 40222', 'name' => 'Trailblazers', 'desc' => 'Grades 3–4. Working through the season\'s engineering notebook one page at a time, building toward Challenge next year.', 'meet' => 'Tuesdays' ),
);
?>

<section class="hero">
  <div class="hero-inner two-col">
    <div>
      <span class="hero-eyebrow">PROGRAM 01 OF 3</span>
      <h1>FLL Explore is where kids find out <em>they</em> can build things.</h1>
      <p class="lede">No robot game, no scoreboard pressure — just LEGO-based models, a real-world theme, and a poster board they get to present to grown-ups who actually listen.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url( home_url( '/join/' ) ); ?>" class="btn btn-primary">Enroll for next season</a>
        <a href="#teams" class="btn btn-ghost">Meet the two teams</a>
      </div>
      <div class="age-badge"><b>GRADES K–4</b><span>&nbsp; Ages 5–10 &nbsp; No experience needed</span></div>
    </div>
    <div class="hero-art">
      <svg viewBox="0 0 320 300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Illustration of LEGO-style building blocks">
        <circle cx="160" cy="150" r="128" stroke="rgba(216,184,92,0.2)" stroke-width="1" fill="none"/>
        <rect x="90" y="170" width="140" height="60" rx="4" fill="#0E1830" stroke="#D8B85C" stroke-width="1.5"/>
        <circle cx="115" cy="170" r="9" fill="none" stroke="#D8B85C" stroke-width="1.5"/><circle cx="160" cy="170" r="9" fill="none" stroke="#D8B85C" stroke-width="1.5"/><circle cx="205" cy="170" r="9" fill="none" stroke="#D8B85C" stroke-width="1.5"/>
        <rect x="70" y="110" width="90" height="50" rx="4" fill="#A2542E" stroke="#F6F3EC" stroke-width="1.5"/>
        <circle cx="92" cy="110" r="7.5" fill="none" stroke="#F6F3EC" stroke-width="1.5"/><circle cx="115" cy="110" r="7.5" fill="none" stroke="#F6F3EC" stroke-width="1.5"/><circle cx="138" cy="110" r="7.5" fill="none" stroke="#F6F3EC" stroke-width="1.5"/>
        <rect x="170" y="100" width="70" height="60" rx="4" fill="#4E6E93" stroke="#F6F3EC" stroke-width="1.5"/>
        <circle cx="190" cy="100" r="7.5" fill="none" stroke="#F6F3EC" stroke-width="1.5"/><circle cx="220" cy="100" r="7.5" fill="none" stroke="#F6F3EC" stroke-width="1.5"/>
        <text x="160" y="280" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="10" fill="rgba(246,243,236,0.5)" letter-spacing="1">FIG. 01 — SEASON MODEL</text>
      </svg>
    </div>
  </div>
</section>

<section class="what-is">
  <div class="section wrap">
    <div class="what-grid">
      <div class="what-copy">
        <span class="section-tag">WHAT IS EXPLORE</span>
        <h2 style="margin-bottom:18px;">A first taste of engineering, not a competition</h2>
        <p>FLL Explore takes a real-world theme — this year, sustainable travel — and asks a team of up to six kids to build a LEGO model showing part of the solution, then explain their thinking to a panel of friendly reviewers.</p>
        <p>There's no timed robot run and no head-to-head matches. The "win" is finishing the season with a model you built, a notebook you kept, and a two-minute pitch you're proud to give.</p>
        <div class="not-list">
          <div class="not-row"><b>It is</b> Model building, teamwork, a season-end showcase, core-values judging.</div>
          <div class="not-row"><b>It is not</b> A scored robot game, a ranked bracket, or a solo activity.</div>
        </div>
      </div>
      <div class="fact-card">
        <h4>AT A GLANCE</h4>
        <div class="fact-row"><span>Grades</span><span>K–4 (ages 5–10)</span></div>
        <div class="fact-row"><span>Team size</span><span>Up to 6 students</span></div>
        <div class="fact-row"><span>Season length</span><span>Sept – Dec</span></div>
        <div class="fact-row"><span>Meets</span><span>Tuesdays, 3:30–4:45pm</span></div>
        <div class="fact-row"><span>Cost</span><span>$65 / student</span></div>
        <div class="fact-row"><span>Showcase</span><span>Early December</span></div>
        <div class="fact-row"><span>Next step</span><span>FLL Challenge (4th gr.)</span></div>
      </div>
    </div>
  </div>
</section>

<section class="theme-band">
  <div class="theme-inner">
    <div><span class="theme-tag">2026–27 SEASON</span><h2>This year's theme</h2></div>
    <div class="theme-copy">
      <h3 style="color:#fff;font-size:22px;">SUBMERGED — exploring ocean habitats</h3>
      <p>Teams research a creature or feature of the underwater world, build a LEGO model of a habitat or invention that helps it, and put together a poster explaining what they learned. Past seasons have covered space travel, urban planning, and recycling.</p>
    </div>
  </div>
</section>

<section class="section" id="teams">
  <div class="wrap">
    <div class="section-head">
      <span class="section-tag">THIS SEASON'S EXPLORE TEAMS</span>
      <h2>Two teams, two age bands</h2>
      <p>Explore teams are grouped loosely by age so the projects and expectations match — kindergartners aren't expected to keep pace with fourth graders.</p>
    </div>
    <div class="teams-grid cols-2">
      <?php foreach ( $explore_teams as $team ) : ?>
      <div class="team-card">
        <div class="num"><?php echo esc_html( $team['num'] ); ?></div>
        <h3><?php echo esc_html( $team['name'] ); ?></h3>
        <p><?php echo esc_html( $team['desc'] ); ?></p>
        <div class="meet"><b>Meets</b>&nbsp;<?php echo esc_html( $team['meet'] ); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section steps">
  <div class="wrap">
    <div class="section-head"><span class="section-tag">HOW A SEASON WORKS</span><h2>Four steps from kickoff to showcase</h2></div>
    <div class="step-list">
      <div class="step-row"><div class="step-num">01</div><div><h4>Kickoff & theme reveal</h4><p>Coaches introduce the season's real-world theme and kids start brainstorming which part of the problem to tackle.</p></div></div>
      <div class="step-row"><div class="step-num">02</div><div><h4>Build & research</h4><p>Weekly Tuesday sessions building the LEGO model, filling out the team notebook, and learning the season's core value.</p></div></div>
      <div class="step-row"><div class="step-num">03</div><div><h4>Practice the pitch</h4><p>The last two weeks focus on presenting — every kid gets a speaking part for showcase day.</p></div></div>
      <div class="step-row"><div class="step-num">04</div><div><h4>Showcase day</h4><p>Teams set up their models and present to a small panel of reviewers — encouraging feedback, no ranking.</p></div></div>
    </div>
  </div>
</section>

<section class="section" style="background:#fff;border-top:1px solid var(--line);">
  <div class="wrap">
    <div class="section-head"><span class="section-tag">COMMON QUESTIONS</span><h2>Before you enroll</h2></div>
    <div class="faq-list">
      <div class="faq-item"><h4>Does my child need any LEGO or robotics experience?</h4><p>None at all. Most Explore families are brand new to LEGO robotics — that's exactly who the program is built for.</p></div>
      <div class="faq-item"><h4>Do parents need to volunteer?</h4><p>We ask each family for a few hours across the season — showcase day setup, snack duty, or notebook help — but no robotics background required.</p></div>
      <div class="faq-item"><h4>What happens after Explore?</h4><p>Most kids move into FLL Challenge around 4th grade, where the LEGO robot starts running an actual scored table.</p></div>
      <div class="faq-item"><h4>Is there a robot at all?</h4><p>Not a competing one — some Explore models include simple LEGO mechanisms like gears or a motor, but there's no robot game.</p></div>
    </div>
  </div>
</section>

<section class="join">
  <div class="join-inner">
    <div><h2>Enrollment opens each August</h2><p>Spots are limited to keep team sizes small. Younger siblings of current families get first priority.</p></div>
    <a href="<?php echo esc_url( home_url( '/join/' ) ); ?>" class="btn btn-primary">Start an application</a>
  </div>
</section>

<?php get_footer(); ?>
