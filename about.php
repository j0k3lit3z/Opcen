<?php include 'db_connection.php'; ?>
<?php require 'inc/_global/config_final.php'; ?>
<?php require 'inc/backend/config_final.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/highlightjs/styles/atom-one-dark.css'); ?>
<?php $dm->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start_final.php'; ?>



<!-- Page Content -->
<div class="content">
  <!-- Hero -->
  <?php include 'include_header_carousel.php'; ?>
  <!-- END Hero -->

  <div class="row">
    <div class="col-md-8">
      <!-- Post Update -->
      <div class="block block-bordered block-rounded">
        <div class="block-header bg-primary">
            <h3 class="block-title text-white">About Us</h3>
          </div>
          <div class="block-content">
            
            <h2 class="mt-3">Vision, Mission, Goals, & Objectives</h2>
            <p class="mb-4">
              Davao Winchester Colleges, Inc. offers a complete education from pre-school to college.
            </p>
            <ul class="list-group push">
              <li class="list-group-item">
                <h1 class="mt-2">VISION</h1>
                <p>Davao Winchester Colleges, Inc., a learner-centered educational institution envision to produce individuals whose set of knowledge, skills and values allows them to explore their full potential and make them the catalyst for the change we need in nation building.</p>
              </li>
              <li class="list-group-item">
                <h1 class="mt-2">MISSION</h1>
                <p>As an institution, we commit ourselves to uphold and promote the right of every Filipino to quality, competent, research oriented and community involved educational system where:</p>
                <p>
                  <ul>
                    <li class="mb-1">Students learn in a child-friendly, gender-sensitive, safe, and motivating environment.</li>
                    <li class="mb-1">Teachers facilitate learning and constantly nurture every learner.</li>
                    <li class="mb-1">Administrator and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.</li>
                    <li class="mb-1">Familiy, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.</li>
                  </ul>
                </p>
              </li>
              <li class="list-group-item">
                <h1 class="mt-2">GOALS</h1>
                <p>To fully realize our vision and mission, we will dedicate all our resources to transform all of our members as a catalyst for nation building imbued with knowledge, skills and values.</p>
              </li>
              <li class="list-group-item">
                <h1 class="mt-2">OBJECTIVES</h1><br>
                <h4 style="margin-bottom: 7px;">Elementary Level</h4>
                <p>To facilitate the pupil's development on academic, social and moral awareness though teaching and learning experiences.</p>
                <h4 style="margin-bottom: 7px;">Secondary Level</h4>
                <p>To prepare the students for the demands of the higher education. Equip them with knowledge and skill with the right attitude to respond to the challenges of higher education.</p>
                <h4 style="margin-bottom: 7px;">Tertiary Level</h4>
                <p>To provide effective and quality implementation of programs and skill training to produce globally competitive professionals who are knowledgeable, skilled, research oriented and morally upright.</p>
              </li>
            </ul>
          </div>
      </div>
    </div>
    
    <?php include 'include_offered_courses.php'; ?>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Magnific Popup Plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/highlightjs/highlight.pack.min.js'); ?>
<?php $dm->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Highlight.js + Magnific Popup Plugins) -->
<script>Dashmix.helpersOnLoad(['js-highlightjs', 'jq-magnific-popup']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
