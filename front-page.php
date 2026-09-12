<?php
/**
 * Homepage. Hero text/stats come from Customizer (Appearance -> Customize ->
 * Homepage Hero) so an Admin can reword them with no code. The pathway,
 * team preview, schedule preview, and sponsor list below are plain PHP
 * arrays -- edit the values directly to update rosters/dates each season.
 */
get_header();

$pathway_stages = array(
	array(
		'num'  => '01', 'age' => 'GRADES K–4', 'title' => 'FLL Explore',
		'desc' => 'Guided LEGO-based building and a season theme that teaches real-world problem solving before the stakes get high. No robot game — just discovery.',
		'meta' => '2 teams · Tuesdays', 'link' => home_url( '/explore/' ), 'link_label' => 'See the Explore page →',
	),
	array(
		'num'  => '02', 'age' => 'GRADES 4–7', 'title' => 'FLL Challenge',
		'desc' => 'An autonomous LEGO robot competes on a scored table while teams research a real engineering problem and pitch a solution to judges.',
		'meta' => '4 teams · Wed & Thu', 'link' => home_url( '/challenge/' ), 'link_label' => 'See the Challenge page →',
	),
	array(
		'num'  => '03', 'age' => 'GRADES 7–12', 'title' => 'FIRST Tech Challenge',
		'desc' => 'A metal-and-motor robot, driven and autonomous, competing head to head. Team 26856 builds, codes, and scouts toward State.',
		'meta' => '1 team · Mon, Wed, Sat', 'link' => home_url( '/ftc/' ), 'link_label' => 'See the FTC page →',
	),
);

$team_preview = array(
	array( 'num' => 'FTC 26856', 'name' => 'Iron Saints', 'chip' => 'FIRST TECH CHALLENGE',
		'desc' => '7th–12th grade team building toward the Missouri State Championship. Currently ranked 12th in district after the November qualifier.', 'meet' => 'Mon / Wed / Sat' ),
	array( 'num' => 'FLL 40218', 'name' => 'Gearhouse', 'chip' => 'FLL CHALLENGE',
		'desc' => 'Focused this season on their SUBMERGED research project alongside table-run consistency.', 'meet' => 'Wednesdays' ),
	array( 'num' => 'FLL 40219', 'name' => 'Blackfriars', 'chip' => 'FLL CHALLENGE',
		'desc' => 'Second-year team, all sixth graders. Strong on core values judging, still tuning attachment swap time.', 'meet' => 'Thursdays' ),
	array( 'num' => 'FLL 40220', 'name' => 'Junior Saints', 'chip' => 'FLL CHALLENGE',
		'desc' => 'Newest Challenge team, formed from last year\'s strongest Explore graduates.', 'meet' => 'Wednesdays' ),
	array( 'num' => 'FLL 40223', 'name' => 'Circuit Squad', 'chip' => 'FLL CHALLENGE',
		'desc' => 'Seventh and eighth graders, third year running. Team mentors run build clinics for the younger Explore teams.', 'meet' => 'Wed & Thu' ),
	array( 'num' => 'EXP 40221', 'name' => 'Little Builders', 'chip' => 'FLL EXPLORE',
		'desc' => 'K–2 team presenting their first model and poster board this December to a panel of parent judges.', 'meet' => 'Tuesdays' ),
	array( 'num' => 'EXP 40222', 'name' => 'Trailblazers', 'chip' => 'FLL EXPLORE',
		'desc' => 'Grades 3–4, working through the season\'s engineering notebook one page at a time.', 'meet' => 'Tuesdays' ),
);

$schedule_preview = array(
	array( 'date' => 'NOV 15', 'title' => 'FLL Challenge Qualifier — SUBMERGED', 'sub' => 'Gearhouse, Blackfriars, and Junior Saints compete', 'loc' => 'Ritenour HS Fieldhouse' ),
	array( 'date' => 'NOV 22', 'title' => 'FTC League Meet #2', 'sub' => 'Iron Saints — driven + autonomous matches', 'loc' => 'Parkway North HS' ),
	array( 'date' => 'DEC 06', 'title' => 'FLL Explore Showcase', 'sub' => 'Little Builders & Trailblazers present to judges', 'loc' => 'ASA Gymnasium' ),
	array( 'date' => 'DEC 13', 'title' => 'Open Build Night — All Teams', 'sub' => 'Shop open to any ASA Robotics family, no signup needed', 'loc' => 'ASA Robotics Shop' ),
);

$sponsors = array( 'Fogarty Services', 'Accounting Partners LLC', 'Archdiocese STEM Fund', 'Florissant Rotary' );
?>

<section class="hero">
  <div class="hero-inner two-col">
    <div>
      <span class="hero-eyebrow"><?php echo esc_html( get_theme_mod( 'asa_hero_eyebrow', 'ASARBOTS.ORG — FLORISSANT, MO' ) ); ?></span>
      <h1><?php echo wp_kses_post( get_theme_mod( 'asa_hero_headline', 'Students build robots.<br>We build the <em>program</em> around them.' ) ); ?></h1>
      <p class="lede"><?php echo wp_kses_post( get_theme_mod( 'asa_hero_lede', 'All Saints Academy Robotics runs three FIRST programs under one roof — from first-time builders in kindergarten to FTC engineers headed to State. One club, one home field, a clear path in at any age.' ) ); ?></p>
      <div class="hero-actions">
        <a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>" class="btn btn-primary">Find your team's path</a>
        <a href="<?php echo esc_url( home_url( '/teams/' ) ); ?>" class="btn btn-ghost">Meet the teams</a>
      </div>
      <div class="hero-stats">
        <div class="stat"><b><?php echo esc_html( get_theme_mod( 'asa_stat_programs', '3' ) ); ?></b><span>FIRST programs, grades K–12</span></div>
        <div class="stat"><b><?php echo esc_html( get_theme_mod( 'asa_stat_teams', '7' ) ); ?></b><span>active teams this season</span></div>
        <div class="stat"><b><?php echo esc_html( get_theme_mod( 'asa_stat_students', '58' ) ); ?></b><span>students on rosters</span></div>
      </div>
    </div>
    <div class="hero-art">
      <svg viewBox="0 0 320 340" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Schematic illustration of a robot arm and gear">
        <circle cx="160" cy="170" r="150" stroke="rgba(216,184,92,0.25)" stroke-width="1"/>
        <circle cx="160" cy="170" r="112" stroke="rgba(216,184,92,0.18)" stroke-width="1"/>
        <g stroke="#D8B85C" stroke-width="1.4">
          <line x1="160" y1="20" x2="160" y2="60"/><line x1="160" y1="280" x2="160" y2="320"/>
          <line x1="10" y1="170" x2="50" y2="170"/><line x1="270" y1="170" x2="310" y2="170"/>
        </g>
        <g fill="none" stroke="#D8B85C" stroke-width="2"><circle cx="118" cy="118" r="34"/><circle cx="118" cy="118" r="10" fill="#0E1830"/></g>
        <g stroke="#D8B85C" stroke-width="3" stroke-linecap="round">
          <line x1="118" y1="76" x2="118" y2="90"/><line x1="118" y1="146" x2="118" y2="160"/>
          <line x1="76" y1="118" x2="90" y2="118"/><line x1="146" y1="118" x2="160" y2="118"/>
          <line x1="88" y1="88" x2="98" y2="98"/><line x1="138" y1="138" x2="148" y2="148"/>
          <line x1="148" y1="88" x2="138" y2="98"/><line x1="98" y1="138" x2="88" y2="148"/>
        </g>
        <path d="M150 200 L210 160 L250 195" stroke="#F6F3EC" stroke-width="3" stroke-linecap="round" fill="none"/>
        <circle cx="150" cy="200" r="7" fill="#A2542E"/><circle cx="210" cy="160" r="6" fill="#A2542E"/>
        <path d="M250 195 l14 -8 M250 195 l14 8" stroke="#F6F3EC" stroke-width="3" stroke-linecap="round"/>
        <rect x="90" y="230" width="140" height="46" rx="4" stroke="#F6F3EC" stroke-width="2"/>
        <circle cx="112" cy="290" r="14" stroke="#D8B85C" stroke-width="2"/><circle cx="208" cy="290" r="14" stroke="#D8B85C" stroke-width="2"/>
        <text x="160" y="316" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="10" fill="rgba(246,243,236,0.55)" letter-spacing="1">FIG. 01 — DRIVE UNIT</text>
      </svg>
    </div>
  </div>
</section>

<section class="pathway" id="programs">
  <div class="section wrap">
    <div class="section-head">
      <span class="section-tag">THE PATHWAY</span>
      <h2>Three programs, one continuous track</h2>
      <p>Every student enters at the level that fits their age, then moves up through the same club as they grow — same mentors, same shop, same Saturday mornings.</p>
    </div>
    <div class="pathway-track">
      <?php foreach ( $pathway_stages as $stage ) : ?>
      <div class="stage">
        <div class="stage-num"><?php echo esc_html( $stage['num'] ); ?></div>
        <span class="stage-age"><?php echo esc_html( $stage['age'] ); ?></span>
        <h3><?php echo esc_html( $stage['title'] ); ?></h3>
        <p><?php echo esc_html( $stage['desc'] ); ?></p>
        <div class="stage-meta"><?php echo esc_html( $stage['meta'] ); ?></div>
        <a href="<?php echo esc_url( $stage['link'] ); ?>" class="stage-link"><?php echo esc_html( $stage['link_label'] ); ?></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section" id="teams">
  <div class="wrap">
    <div class="section-head">
      <span class="section-tag">THIS SEASON'S ROSTER</span>
      <h2>Seven teams, seven identities</h2>
      <p>Every team names itself, picks its own strategy, and keeps its own build log. A preview below — the full roster page has bios, build logs, and standings for each.</p>
    </div>
    <div class="teams-grid">
      <?php foreach ( $team_preview as $team ) : ?>
      <div class="team-card">
        <div class="num"><?php echo esc_html( $team['num'] ); ?></div>
        <h3><?php echo esc_html( $team['name'] ); ?></h3>
        <span class="chip"><?php echo esc_html( $team['chip'] ); ?></span>
        <p><?php echo esc_html( $team['desc'] ); ?></p>
        <div class="meet"><b>Meets</b> <?php echo esc_html( $team['meet'] ); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
    <a href="<?php echo esc_url( home_url( '/teams/' ) ); ?>" class="stage-link" style="margin-top:28px;display:inline-block;">See the full roster →</a>
  </div>
</section>

<section class="story">
  <div class="story-inner">
    <h2>Why one club, not three separate ones</h2>
    <div class="story-copy">
      <p>Most schools run robotics as whatever one grade level a parent volunteer has energy for. We built ours the other way: as a single program with an entry point for every age, so a kindergartner who joins Explore this year can still be on this same field, with the same coaches, years from now.</p>
      <p>Mentors move between teams. Parts and tools are shared. Older FTC students run build clinics for the younger LEGO teams before big competitions. It's a K–12 pipeline, not a club that happens to exist for one season.</p>
      <div class="quote-block">
        <p>"Explore was the first time she called herself an engineer. Now her older brother is on the FTC team, and she's already counting down to Challenge."</p>
        <span>— Parent, Explore team Little Builders</span>
      </div>
    </div>
  </div>
</section>

<section class="section" id="schedule">
  <div class="wrap">
    <div class="section-head">
      <span class="section-tag">UPCOMING</span>
      <h2>Where to find us this month</h2>
    </div>
    <div>
      <?php foreach ( $schedule_preview as $item ) : ?>
      <div class="sched-row" style="grid-template-columns:90px 1fr 170px;">
        <div class="date mono"><?php echo esc_html( $item['date'] ); ?></div>
        <div><div class="title"><?php echo esc_html( $item['title'] ); ?></div><div class="sub"><?php echo esc_html( $item['sub'] ); ?></div></div>
        <div class="loc"><?php echo esc_html( $item['loc'] ); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sponsors">
  <div class="section wrap">
    <div class="sponsor-row">
      <div>
        <span class="section-tag">BACKED BY</span>
        <h2 style="font-size:22px;">Our season sponsors</h2>
      </div>
      <div class="sponsor-names">
        <?php foreach ( $sponsors as $sponsor ) : ?>
          <span><?php echo esc_html( $sponsor ); ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="join">
  <div class="join-inner">
    <div>
      <h2>Have a builder at home?</h2>
      <p>Tryouts and open enrollment for next season start in August. Younger siblings and first-timers always welcome — no experience required for Explore or Challenge.</p>
    </div>
    <a href="<?php echo esc_url( home_url( '/join/' ) ); ?>" class="btn btn-primary">Start an application</a>
  </div>
</section>

<?php get_footer(); ?>
