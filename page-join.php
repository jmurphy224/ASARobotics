<?php
/**
 * Applies automatically to the page with slug "join".
 *
 * IMPORTANT: The <form> below is a static placeholder — it does not submit
 * anywhere. Once you install a form plugin (WPForms, Fluent Forms, etc.),
 * build the real interest form there and replace the <div class="form-card">
 * block with that plugin's shortcode, e.g. echo do_shortcode('[wpforms id="123"]');
 */
get_header();
asa_breadcrumb( array(), 'Join us' );
?>

<section class="hero has-margin">
  <div class="hero-inner narrow">
    <span class="hero-eyebrow">JOIN US</span>
    <h1>Enrollment opens each August</h1>
    <p class="lede">Tell us your student's grade and we'll match them to the right program — or a waitlist, if that team's already full.</p>
  </div>
</section>

<section class="steps-band">
  <div class="section wrap">
    <div class="section-head"><span class="section-tag">HOW IT WORKS</span><h2>Four steps to a team</h2></div>
    <div class="steps-grid">
      <div class="step"><div class="step-circle">01</div><h4>Submit interest</h4><p>Fill out the form below with your student's grade and any prior experience.</p></div>
      <div class="step"><div class="step-circle">02</div><h4>We match a team</h4><p>We'll place your student on the right program and, where possible, a team with an open spot.</p></div>
      <div class="step"><div class="step-circle">03</div><h4>Pay & sign waiver</h4><p>A short online form and program fee lock in the spot before the first meeting.</p></div>
      <div class="step"><div class="step-circle">04</div><h4>Show up on day one</h4><p>Coaches will email meeting times, supply lists, and what to expect at kickoff.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head"><span class="section-tag">APPLICATION</span><h2>Start an application</h2></div>
    <div class="apply-grid">
      <div class="form-card">
        <h3>Student interest form</h3>
        <?php
        /*
         * TODO: replace this static placeholder with a real form plugin
         * shortcode once one is installed, e.g.:
         * echo do_shortcode( '[wpforms id="123"]' );
         */
        ?>
        <div class="field-row">
          <div class="field"><label>Student's first name</label><input type="text" placeholder="e.g. Maria"></div>
          <div class="field"><label>Student's last name</label><input type="text" placeholder="e.g. Gonzalez"></div>
        </div>
        <div class="field-row">
          <div class="field"><label>Current grade</label>
            <select><option>Kindergarten</option><option>1st grade</option><option>2nd grade</option><option>3rd grade</option><option>4th grade</option><option>5th grade</option><option>6th grade</option><option>7th grade</option><option>8th grade</option><option>9th–12th grade</option></select>
          </div>
          <div class="field"><label>Prior robotics experience</label>
            <select><option>None</option><option>FLL Explore</option><option>FLL Challenge</option><option>FTC</option><option>Other</option></select>
          </div>
        </div>
        <div class="field"><label>Parent/guardian email</label><input type="email" placeholder="you@email.com"></div>
        <div class="field"><label>Parent/guardian phone</label><input type="tel" placeholder="(314) 555-0100"></div>
        <div class="field"><label>Anything we should know?</label><input type="text" placeholder="Scheduling conflicts, sibling on a team, etc. (optional)"></div>
        <button class="btn btn-primary full" type="button" disabled title="Connect a form plugin to enable submissions">Submit interest form</button>
      </div>
      <div>
        <div class="side-card">
          <h4>PROGRAM COSTS</h4>
          <div class="side-row"><span>FLL Explore</span><span>$65</span></div>
          <div class="side-row"><span>FLL Challenge</span><span>$110</span></div>
          <div class="side-row"><span>FIRST Tech Challenge</span><span>$275</span></div>
          <div class="side-row"><span>Sibling discount</span><span>10% off 2nd+</span></div>
        </div>
        <div class="contact-card">
          <h4>QUESTIONS?</h4>
          <p>Email <a href="mailto:<?php echo esc_attr( get_theme_mod( 'asa_contact_email', 'coach@asarbots.org' ) ); ?>"><?php echo esc_html( get_theme_mod( 'asa_contact_email', 'coach@asarbots.org' ) ); ?></a> or call the front office at <?php echo esc_html( get_theme_mod( 'asa_contact_phone', '(314) 555-0142' ) ); ?>. Financial assistance is available — just ask.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background:#fff;border-top:1px solid var(--line);">
  <div class="wrap">
    <div class="section-head"><span class="section-tag">COMMON QUESTIONS</span><h2>Before you apply</h2></div>
    <div class="faq-list">
      <div class="faq-item"><h4>Is there financial assistance?</h4><p>Yes — reach out to the club directly and we'll work out a plan. No student is turned away over cost.</p></div>
      <div class="faq-item"><h4>What if the team I want is full?</h4><p>We'll place your student on a waitlist and reach out the moment a spot opens, or suggest a nearby team with room.</p></div>
      <div class="faq-item"><h4>Do you accept students outside All Saints Academy?</h4><p>Yes — several of our Challenge and FTC students come from other schools in the area.</p></div>
      <div class="faq-item"><h4>When does enrollment close?</h4><p>Rolling enrollment through mid-September for Explore and Challenge; FTC accepts new students year-round.</p></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
