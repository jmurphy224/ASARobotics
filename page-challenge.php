<?php
/** Applies automatically to the page with slug "challenge". */
get_header();
asa_breadcrumb( array( 'Programs' => home_url( '/programs/' ) ), 'FLL Challenge' );

$challenge_teams = array(
	array( 'num' => 'FLL 40218', 'name' => 'Gearhouse', 'desc' => 'Focused this season on their SUBMERGED research project alongside table-run consistency.', 'meet' => 'Wednesdays' ),
	array( 'num' => 'FLL 40219', 'name' => 'Blackfriars', 'desc' => 'Second-year team, all sixth graders. Strong on core values judging, still tuning attachment swap time.', 'meet' => 'Thursdays' ),
	array( 'num' => 'FLL 40220', 'name' => 'Junior Saints', 'desc' => 'Newest Challenge team, formed from last year\'s strongest Explore graduates.', 'meet' => 'Wednesdays' ),
	array( 'num' => 'FLL 40223', 'name' => 'Circuit Squad', 'desc' => 'Seventh graders, third year running. Team mentors run build clinics for the younger Explore teams.', 'meet' => 'Wed & Thu' ),
);
?>

<section class="hero">
  <div class="hero-inner two-col">
    <div>
      <span class="hero-eyebrow">PROGRAM 02 OF 3</span>
      <h1>FLL Challenge is where the LEGO robot starts <em>competing</em>.</h1>
      <p class="lede">Teams build and program an autonomous robot to run scored missions on a table, then research a real engineering problem and pitch a solution to a panel of judges at a real competition.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url( home_url( '/join/' ) ); ?>" class="btn btn-primary">Enroll for next season</a>
        <a href="#teams" class="btn btn-ghost">Meet the four teams</a>
      </div>
      <div class="age-badge"><b>GRADES 4–7</b><span>&nbsp; Ages 9–13 &nbsp; No experience needed</span></div>
    </div>
    <div class="hero-art">
      <svg viewBox="0 0 320 300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Illustration of a LEGO robot on a scored mission table">
        <circle cx="160" cy="150" r="128" stroke="rgba(216,184,92,0.2)" stroke-width="1" fill="none"/>
        <rect x="40" y="210" width="240" height="14" rx="2" fill="none" stroke="#D8B85C" stroke-width="1.5"/>
        <rect x="70" y="196" width="26" height="14" fill="none" stroke="#F6F3EC" stroke-width="1.2"/><rect x="150" y="196" width="26" height="14" fill="none" stroke="#F6F3EC" stroke-width="1.2"/><rect x="220" y="196" width="26" height="14" fill="none" stroke="#F6F3EC" stroke-width="1.2"/>
        <rect x="120" y="140" width="90" height="56" rx="6" fill="#0E1830" stroke="#D8B85C" stroke-width="1.5"/>
        <circle cx="140" cy="196" r="9" fill="none" stroke="#A2542E" stroke-width="2"/><circle cx="190" cy="196" r="9" fill="none" stroke="#A2542E" stroke-width="2"/>
        <rect x="150" y="120" width="30" height="20" rx="3" fill="none" stroke="#4E6E93" stroke-width="1.5"/>
        <text x="160" y="280" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="10" fill="rgba(246,243,236,0.5)" letter-spacing="1">FIG. 02 — MISSION TABLE</text>
      </svg>
    </div>
  </div>
</section>

<section class="what-is">
  <div class="section wrap">
    <div class="what-grid">
      <div class="what-copy">
        <span class="section-tag">WHAT IS CHALLENGE</span>
        <h2 style="margin-bottom:18px;">Real competition, real deadlines, real robot code</h2>
        <p>FLL Challenge gives each team a LEGO Education kit and a scored table with a season theme. Teams design, build, and program a robot to complete as many missions as possible in a timed run — then defend their work in front of judges.</p>
        <p>Every team also researches a real-world problem tied to the season's theme and pitches an original solution, on top of a separate core-values interview about teamwork.</p>
        <div class="pillars">
          <div class="pillar"><b>Robot game</b><span>2.5-minute timed runs on a scored mission table.</span></div>
          <div class="pillar"><b>Innovation project</b><span>Research a real problem, pitch an original solution to judges.</span></div>
          <div class="pillar"><b>Core values</b><span>A judged interview on teamwork, gracious professionalism, and discovery.</span></div>
        </div>
      </div>
      <div class="fact-card">
        <h4>AT A GLANCE</h4>
        <div class="fact-row"><span>Grades</span><span>4–7 (ages 9–13)</span></div>
        <div class="fact-row"><span>Team size</span><span>Up to 10 students</span></div>
        <div class="fact-row"><span>Season length</span><span>Sept – Feb</span></div>
        <div class="fact-row"><span>Meets</span><span>Wed & Thu, 3:30–5:30pm</span></div>
        <div class="fact-row"><span>Cost</span><span>$110 / student</span></div>
        <div class="fact-row"><span>Qualifier</span><span>Mid-November</span></div>
        <div class="fact-row"><span>Next step</span><span>FTC (7th gr. +)</span></div>
      </div>
    </div>
  </div>
</section>

<section class="theme-band">
  <div class="theme-inner">
    <div><span class="theme-tag">2026–27 SEASON</span><h2>This year's theme</h2></div>
    <div class="theme-copy">
      <h3 style="color:#fff;font-size:22px;">SUBMERGED — exploring ocean habitats</h3>
      <p>Teams design a table mission set around ocean research and pitch an original invention that helps solve a real problem facing marine habitats — from plastic waste to coral bleaching.</p>
    </div>
  </div>
</section>

<section class="section" id="teams">
  <div class="wrap">
    <div class="section-head">
      <span class="section-tag">THIS SEASON'S CHALLENGE TEAMS</span>
      <h2>Four teams on the table</h2>
      <p>Each team keeps its own robot, code, and strategy — no two teams run the same missions the same way.</p>
    </div>
    <div class="teams-grid cols-2">
      <?php foreach ( $challenge_teams as $team ) : ?>
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

<section class="section season-track">
  <div class="wrap">
    <div class="section-head"><span class="section-tag">SEASON TIMELINE</span><h2>From kit reveal to qualifier</h2></div>
    <div class="track-list">
      <div class="track-row"><div class="when">SEPT</div><div><div class="title">Kit reveal & theme kickoff</div><div class="sub">Teams unbox the season's mission table and start strategy planning.</div></div></div>
      <div class="track-row"><div class="when">OCT</div><div><div class="title">Build & program</div><div class="sub">Weekly sessions building the robot and coding missions one at a time.</div></div></div>
      <div class="track-row"><div class="when">NOV</div><div><div class="title">Qualifier tournament</div><div class="sub">All four teams compete for a spot at the regional championship.</div></div></div>
      <div class="track-row"><div class="when">DEC – FEB</div><div><div class="title">Championship push</div><div class="sub">Qualifying teams refine runs and prep the innovation project pitch.</div></div></div>
    </div>
  </div>
</section>

<section class="section" style="background:#fff;border-top:1px solid var(--line);">
  <div class="wrap">
    <div class="section-head"><span class="section-tag">COMMON QUESTIONS</span><h2>Before you enroll</h2></div>
    <div class="faq-list">
      <div class="faq-item"><h4>Does my child need to know how to code?</h4><p>No — most Challenge kids learn block-based robot coding from scratch in their first few weeks.</p></div>
      <div class="faq-item"><h4>What if we don't qualify for the championship?</h4><p>Every team competes at the qualifier regardless of rank — advancing is a bonus, not the point of the season.</p></div>
      <div class="faq-item"><h4>Can a 4th grader really keep up?</h4><p>Yes — teams naturally split tasks by strength, and older teammates usually mentor the youngest members.</p></div>
      <div class="faq-item"><h4>What happens after Challenge?</h4><p>Most students move into FTC around 7th grade, where the robot gets bigger and the competitions get more intense.</p></div>
    </div>
  </div>
</section>

<section class="join">
  <div class="join-inner">
    <div><h2>Enrollment opens each August</h2><p>Spots are limited to keep team sizes workable. Returning families get first priority.</p></div>
    <a href="<?php echo esc_url( home_url( '/join/' ) ); ?>" class="btn btn-primary">Start an application</a>
  </div>
</section>

<?php get_footer(); ?>
