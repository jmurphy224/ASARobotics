<?php
/**
 * Applies automatically to the page with slug "teams".
 * Edit the arrays below each season to update the roster.
 */
get_header();
asa_breadcrumb( array(), 'Teams' );

$ftc_teams = array(
	array( 'num' => 'FTC 26856', 'name' => 'Iron Saints', 'chip' => 'FIRST TECH CHALLENGE',
		'desc' => 'Varsity team building toward the Missouri State Championship. Currently ranked 12th in district after the November qualifier.', 'meet' => 'Mon / Wed / Sat' ),
);
$challenge_teams = array(
	array( 'num' => 'FLL 40218', 'name' => 'Gearhouse', 'chip' => 'FLL CHALLENGE', 'desc' => 'Focused this season on the SUBMERGED research project alongside table-run consistency.', 'meet' => 'Wednesdays' ),
	array( 'num' => 'FLL 40219', 'name' => 'Blackfriars', 'chip' => 'FLL CHALLENGE', 'desc' => 'Second-year team, all sixth graders. Strong on core values judging, still tuning attachment swap time.', 'meet' => 'Thursdays' ),
	array( 'num' => 'FLL 40220', 'name' => 'Junior Saints', 'chip' => 'FLL CHALLENGE', 'desc' => 'Newest Challenge team, formed from last year\'s strongest Explore graduates.', 'meet' => 'Wednesdays' ),
	array( 'num' => 'FLL 40223', 'name' => 'Circuit Squad', 'chip' => 'FLL CHALLENGE', 'desc' => 'Seventh graders, third year running. Team mentors run build clinics for the younger Explore teams.', 'meet' => 'Wed & Thu' ),
);
$explore_teams = array(
	array( 'num' => 'EXP 40221', 'name' => 'Little Builders', 'chip' => 'FLL EXPLORE', 'desc' => 'K–2 team presenting their first model and poster board this December to a panel of parent judges.', 'meet' => 'Tuesdays' ),
	array( 'num' => 'EXP 40222', 'name' => 'Trailblazers', 'chip' => 'FLL EXPLORE', 'desc' => 'Grades 3–4, working through the season\'s engineering notebook one page at a time.', 'meet' => 'Tuesdays' ),
);

function asa_render_team_card( $team ) {
	echo '<div class="team-card">';
	echo '<div class="num">' . esc_html( $team['num'] ) . '</div>';
	echo '<h3>' . esc_html( $team['name'] ) . '</h3>';
	echo '<span class="chip">' . esc_html( $team['chip'] ) . '</span>';
	echo '<p>' . esc_html( $team['desc'] ) . '</p>';
	echo '<div class="meet"><b>Meets</b> ' . esc_html( $team['meet'] ) . '</div>';
	echo '</div>';
}
?>

<section class="hero has-margin">
  <div class="hero-inner narrow">
    <span class="hero-eyebrow">TEAMS</span>
    <h1>Seven teams, one club</h1>
    <p class="lede">Every team keeps its own name, roster, and build log. Browse by program below.</p>
  </div>
</section>

<section class="section wrap" style="padding-top:56px;">

  <div class="group-head"><h2>FIRST Tech Challenge</h2><span>GRADES 7–12</span></div>
  <div class="teams-grid cols-1">
    <?php foreach ( $ftc_teams as $team ) : asa_render_team_card( $team ); endforeach; ?>
  </div>

  <div class="group-head"><h2>FLL Challenge</h2><span>GRADES 4–7</span></div>
  <div class="teams-grid cols-2">
    <?php foreach ( $challenge_teams as $team ) : asa_render_team_card( $team ); endforeach; ?>
  </div>

  <div class="group-head"><h2>FLL Explore</h2><span>GRADES K–4</span></div>
  <div class="teams-grid cols-2">
    <?php foreach ( $explore_teams as $team ) : asa_render_team_card( $team ); endforeach; ?>
  </div>

</section>

<?php get_footer(); ?>
