<?php
/** Applies automatically to the page with slug "ftc". */
get_header();
asa_breadcrumb( array( 'Programs' => home_url( '/programs/' ) ), 'FIRST Tech Challenge' );
?>

<section class="hero">
  <div class="hero-inner two-col">
    <div>
      <span class="hero-eyebrow">PROGRAM 03 OF 3</span>
      <h1>FTC is where the robot gets <em>real</em>.</h1>
      <p class="lede">A metal-and-motor robot, built from an aluminum kit of parts, driven by a student and programmed to run autonomously — competing head-to-head against other schools toward the Missouri State Championship.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url( home_url( '/join/' ) ); ?>" class="btn btn-primary">Ask about tryouts</a>
        <a href="#team" class="btn btn-ghost">Meet Iron Saints</a>
      </div>
      <div class="age-badge"><b>GRADES 7–12</b><span>&nbsp; Some Challenge experience helpful, not required</span></div>
    </div>
    <div class="hero-art">
      <svg viewBox="0 0 320 300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Illustration of a competition robot with an arm and drivetrain">
        <circle cx="160" cy="150" r="128" stroke="rgba(216,184,92,0.2)" stroke-width="1" fill="none"/>
        <rect x="90" y="200" width="140" height="50" rx="6" fill="#0E1830" stroke="#D8B85C" stroke-width="1.5"/>
        <circle cx="112" cy="260" r="16" fill="none" stroke="#4E6E93" stroke-width="2"/><circle cx="208" cy="260" r="16" fill="none" stroke="#4E6E93" stroke-width="2"/>
        <path d="M150 200 L200 150 L245 175" stroke="#F6F3EC" stroke-width="3" stroke-linecap="round" fill="none"/>
        <circle cx="150" cy="200" r="7" fill="#A2542E"/><circle cx="200" cy="150" r="6" fill="#A2542E"/>
        <path d="M245 175 l16 -8 M245 175 l16 8" stroke="#F6F3EC" stroke-width="3" stroke-linecap="round"/>
        <text x="160" y="284" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="10" fill="rgba(246,243,236,0.5)" letter-spacing="1">FIG. 03 — DRIVE + ARM</text>
      </svg>
    </div>
  </div>
</section>

<section class="what-is">
  <div class="section wrap">
    <div class="what-grid">
      <div class="what-copy">
        <span class="section-tag">WHAT IS FTC</span>
        <h2 style="margin-bottom:18px;">Real machining, real code, real matches</h2>
        <p>FIRST Tech Challenge steps up from LEGO to an 18-inch aluminum-and-motor robot. Students design the chassis and mechanisms in CAD, wire the electronics, and write autonomous and driver-controlled code in Java or Blocks.</p>
        <p>Matches are two-on-two alliance play — driving, scoring, and endgame climbs against another school's robot on the same field, live in front of a crowd.</p>
        <div class="pillars">
          <div class="pillar"><b>Build</b><span>CAD design, machining, and hands-on assembly of a competition robot.</span></div>
          <div class="pillar"><b>Code</b><span>Autonomous routines and driver-controlled code in Java.</span></div>
          <div class="pillar"><b>Compete</b><span>League meets, a district qualifier, and a shot at the State Championship.</span></div>
        </div>
      </div>
      <div class="fact-card">
        <h4>AT A GLANCE</h4>
        <div class="fact-row"><span>Grades</span><span>7–12</span></div>
        <div class="fact-row"><span>Team size</span><span>Up to 15 students</span></div>
        <div class="fact-row"><span>Season length</span><span>Sept – April</span></div>
        <div class="fact-row"><span>Meets</span><span>Mon, Wed, Sat</span></div>
        <div class="fact-row"><span>Cost</span><span>$275 / student</span></div>
        <div class="fact-row"><span>Qualifier</span><span>Early December</span></div>
        <div class="fact-row"><span>State (if qualified)</span><span>March</span></div>
      </div>
    </div>
  </div>
</section>

<section class="team-spotlight" id="team">
  <div class="spot-inner">
    <div>
      <span class="spot-tag">TEAM 26856</span>
      <h2>Meet Iron Saints</h2>
      <div class="spot-copy">
        <p>All Saints Academy's varsity FTC team — 7th through 12th graders building toward the Missouri State Championship. Currently ranked 12th in district after the November qualifier, with a robot built around a consistent specimen-scoring arm.</p>
      </div>
    </div>
    <div class="spot-stats">
      <div class="spot-stat"><b>12th</b><span>Current district rank</span></div>
      <div class="spot-stat"><b>14</b><span>Students on roster</span></div>
      <div class="spot-stat"><b>3rd</b><span>Season with the program</span></div>
      <div class="spot-stat"><b>2</b><span>Qualifiers remaining</span></div>
    </div>
  </div>
</section>

<section class="section season-track">
  <div class="wrap">
    <div class="section-head"><span class="section-tag">SEASON TIMELINE</span><h2>From kickoff to State</h2></div>
    <div class="track-list">
      <div class="track-row"><div class="when">SEPT</div><div><div class="title">Game reveal & kickoff</div><div class="sub">This year's game rules drop and the team starts strategizing a robot design.</div></div></div>
      <div class="track-row"><div class="when">OCT – NOV</div><div><div class="title">Build season</div><div class="sub">CAD, machining, wiring, and the first autonomous code running on the practice field.</div></div></div>
      <div class="track-row"><div class="when">DEC</div><div><div class="title">District qualifier</div><div class="sub">First official matches of the season, alliance-style, against other district schools.</div></div></div>
      <div class="track-row"><div class="when">JAN – MAR</div><div><div class="title">League play & championship</div><div class="sub">Weekly league meets building toward a shot at the Missouri State Championship.</div></div></div>
    </div>
  </div>
</section>

<section class="section" style="background:#fff;border-top:1px solid var(--line);">
  <div class="wrap">
    <div class="section-head"><span class="section-tag">COMMON QUESTIONS</span><h2>Before you try out</h2></div>
    <div class="faq-list">
      <div class="faq-item"><h4>Do I need to have done FLL Challenge first?</h4><p>It helps but isn't required — we've had 7th graders join with zero robotics background and catch up within a season.</p></div>
      <div class="faq-item"><h4>Is there a tryout?</h4><p>It's more of a fit conversation than a cut — we're matching new students to a role (build, code, drive, scouting) based on interest.</p></div>
      <div class="faq-item"><h4>How much of a time commitment is this?</h4><p>Three meetings a week during build season, more in the two weeks before a qualifier. It's the most demanding of the three programs.</p></div>
      <div class="faq-item"><h4>Do students need their own tools or a laptop?</h4><p>No — the team shop and loaner laptops cover build and programming; students just need to show up.</p></div>
    </div>
  </div>
</section>

<section class="join">
  <div class="join-inner">
    <div><h2>Interested in joining Iron Saints?</h2><p>We take new students year-round, but the easiest entry point is at season kickoff each September.</p></div>
    <a href="<?php echo esc_url( home_url( '/join/' ) ); ?>" class="btn btn-primary">Ask about joining</a>
  </div>
</section>

<?php get_footer(); ?>
