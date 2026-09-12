<?php
/**
 * Applies automatically to the page with slug "schedule".
 * Edit the $months array below to add/update events each season.
 * dot: explore | challenge | ftc | all
 */
get_header();
asa_breadcrumb( array(), 'Schedule' );

$months = array(
	'September 2026' => array(
		array( 'date' => 'SEP 8',  'day' => 'Tue', 'dot' => 'all',       'title' => 'Season kickoff — all programs', 'sub' => 'Team assignments, kit reveals, and the Explore/Challenge theme announcement.', 'loc' => 'ASA Gymnasium', 'time' => '4:00pm' ),
		array( 'date' => 'SEP 15', 'day' => 'Tue', 'dot' => 'explore',   'title' => 'Explore build begins', 'sub' => 'Little Builders & Trailblazers start their season models.', 'loc' => 'ASA Robotics Shop', 'time' => '3:30pm' ),
	),
	'October 2026' => array(
		array( 'date' => 'OCT 3',  'day' => 'Sat', 'dot' => 'ftc',       'title' => 'FTC scrimmage', 'sub' => 'Iron Saints — first practice matches of the season.', 'loc' => 'ASA Gymnasium', 'time' => '9:00am' ),
		array( 'date' => 'OCT 21', 'day' => 'Wed', 'dot' => 'challenge', 'title' => 'Open build night — Challenge teams', 'sub' => 'Gearhouse, Blackfriars, Junior Saints, and Circuit Squad share the shop.', 'loc' => 'ASA Robotics Shop', 'time' => '3:30pm' ),
	),
	'November 2026' => array(
		array( 'date' => 'NOV 15', 'day' => 'Sun', 'dot' => 'challenge', 'title' => 'FLL Challenge Qualifier — SUBMERGED', 'sub' => 'All four Challenge teams compete for a spot at the regional championship.', 'loc' => 'Ritenour HS Fieldhouse', 'time' => '8:00am' ),
		array( 'date' => 'NOV 22', 'day' => 'Sun', 'dot' => 'ftc',       'title' => 'FTC League Meet #2', 'sub' => 'Iron Saints — driven and autonomous matches.', 'loc' => 'Parkway North HS', 'time' => '9:00am' ),
	),
	'December 2026' => array(
		array( 'date' => 'DEC 6',  'day' => 'Sun', 'dot' => 'explore',   'title' => 'FLL Explore Showcase', 'sub' => 'Little Builders & Trailblazers present to parent judges.', 'loc' => 'ASA Gymnasium', 'time' => '1:00pm' ),
		array( 'date' => 'DEC 12', 'day' => 'Sat', 'dot' => 'ftc',       'title' => 'FTC district qualifier', 'sub' => 'Iron Saints\' first official matches against other district schools.', 'loc' => 'TBD', 'time' => '8:00am' ),
		array( 'date' => 'DEC 13', 'day' => 'Sun', 'dot' => 'all',       'title' => 'Open build night — all teams', 'sub' => 'Shop open to any ASA Robotics family, no signup needed.', 'loc' => 'ASA Robotics Shop', 'time' => 'Noon' ),
	),
);
?>

<section class="hero has-margin">
  <div class="hero-inner narrow">
    <span class="hero-eyebrow">SCHEDULE</span>
    <h1>The 2026–27 season, month by month</h1>
    <p class="lede">Practices, qualifiers, and showcases across all three programs.</p>
  </div>
</section>

<div class="legend">
  <div class="legend-row">
    <div class="legend-item"><span class="dot dot-explore"></span>FLL Explore</div>
    <div class="legend-item"><span class="dot dot-challenge"></span>FLL Challenge</div>
    <div class="legend-item"><span class="dot dot-ftc"></span>FTC</div>
    <div class="legend-item"><span class="dot dot-all"></span>All teams</div>
  </div>
</div>

<section class="section wrap">
  <?php foreach ( $months as $month_label => $events ) : ?>
    <div class="month-head"><?php echo esc_html( $month_label ); ?></div>
    <?php foreach ( $events as $ev ) : ?>
      <div class="sched-row">
        <div class="date"><?php echo esc_html( $ev['date'] ); ?><span><?php echo esc_html( $ev['day'] ); ?></span></div>
        <div class="dot dot-<?php echo esc_attr( $ev['dot'] ); ?>"></div>
        <div>
          <div class="title"><?php echo esc_html( $ev['title'] ); ?></div>
          <div class="sub"><?php echo esc_html( $ev['sub'] ); ?></div>
        </div>
        <div class="loc"><b><?php echo esc_html( $ev['loc'] ); ?></b><?php echo esc_html( $ev['time'] ); ?></div>
      </div>
    <?php endforeach; ?>
  <?php endforeach; ?>
</section>

<?php get_footer(); ?>
