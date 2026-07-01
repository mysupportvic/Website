<?php
$serviceKey = $serviceKey ?? 'overview';
$serviceContent = $site['servicePages'][$serviceKey] ?? $site['servicePages']['overview'];
$serviceSteps = $serviceContent['steps'] ?? $site['steps'];
$serviceHighlights = $serviceContent['highlights'] ?? $site['reasons'];
?>

<div id="service-content">
  <?php if ($serviceKey === 'daily-living'): ?>
    <div class="service-page daily-living-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1>Daily Living Support</h1>
          <p><strong>Supporting Your Independence Every Day</strong></p>
          <p>At MY SUPPORT VIC, we understand that everyday tasks can sometimes become challenging. Our Daily Living Support services are designed to help participants maintain their independence, build confidence, and continue living life in a way that works best for them.</p>
          <p>We provide personalised support that is tailored to your individual needs, goals, and daily routines.</p>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost">Learn How It Works</a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker">Daily Living Inclusions</p>
            <h2>How We Can Support You</h2>
          </div>
          <p>Our Daily Living Support services may include:</p>
          <ul class="dl-service-list">
            <li>Assistance with daily routines</li>
            <li>Meal preparation and nutrition support</li>
            <li>Grocery shopping and essential errands</li>
            <li>Household organisation</li>
            <li>Developing daily living skills</li>
            <li>Establishing routines and schedules</li>
            <li>Attending appointments</li>
            <li>Building confidence and independence</li>
            <li>Participation in everyday community activities</li>
          </ul>
          <p class="dl-support-note">Support is always delivered in a respectful and person-centred manner.</p>
        </div>
      </section>

      <section class="po-savings">
        <h2>Support That Understands Your Language and Culture</h2>
        <div class="po-savings-grid">
          <div class="po-savings-card">
            <i class="ti ti-language po-savings-icon" aria-hidden="true"></i>
            <h4>Communication Matters</h4>
            <p>At MY SUPPORT VIC, we recognise that communication plays an important role in quality support.</p>
          </div>
          <div class="po-savings-card">
            <i class="ti ti-world po-savings-icon" aria-hidden="true"></i>
            <h4>Language and Cultural Understanding</h4>
            <p>Our team includes staff who understand the languages and cultures of the communities we serve.</p>
          </div>
          <div class="po-savings-card">
            <i class="ti ti-user-heart po-savings-icon" aria-hidden="true"></i>
            <h4>Respectful and Individualised Support</h4>
            <p>We provide support that is culturally respectful, easy to understand, and tailored to each participant's individual needs.</p>
          </div>
        </div>
      </section>

      <section class="po-cta">
        <h2>Get Started</h2>
        <p>If you would like to learn more about our Daily Living Support services, contact MY SUPPORT VIC today. We are here to discuss your goals and how we can support your independence and wellbeing.</p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary">Contact MY SUPPORT VIC</a>
      </section>
    </div>
  <?php elseif ($serviceKey === 'community-participation'): ?>
    <div class="service-page community-participation-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1>Community Participation</h1>
          <p><strong>Helping You Stay Connected and Engaged</strong></p>
          <p>At MY SUPPORT VIC, we believe that meaningful community participation plays an important role in wellbeing, independence, and quality of life.</p>
          <p>Our Community Participation services are designed to help participants build confidence, develop social connections, explore interests, and actively engage in their communities.</p>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost">Learn How It Works</a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker">Community Participation Inclusions</p>
            <h2>How We Can Support You</h2>
          </div>
          <p>We can assist participants to:</p>
          <ul class="dl-service-list">
            <li>Attend community events and activities</li>
            <li>Participate in social and recreational programs</li>
            <li>Build confidence in social situations</li>
            <li>Develop friendships and social networks</li>
            <li>Explore hobbies and personal interests</li>
            <li>Access community groups and local services</li>
            <li>Attend educational or skill-building activities</li>
          </ul>
          <p class="dl-support-note">We tailor support to your interests, goals, and comfort level.</p>
        </div>
      </section>

      <section class="po-savings">
        <h2>Support That Understands Your Language and Culture</h2>
        <div class="po-savings-grid">
          <div class="po-savings-card">
            <i class="ti ti-language po-savings-icon" aria-hidden="true"></i>
            <h4>Culturally Responsive Support</h4>
            <p>Our team understands that feeling connected often starts with feeling understood.</p>
          </div>
          <div class="po-savings-card">
            <i class="ti ti-world po-savings-icon" aria-hidden="true"></i>
            <h4>Language and Culture Respect</h4>
            <p>We work with participants in a way that respects their language, culture, and community connections.</p>
          </div>
        </div>
      </section>

      <section class="po-cta">
        <h2>Building Confidence Through Participation</h2>
        <p>Whether your goal is to meet new people, learn new skills, or become more active in your community, MY SUPPORT VIC is here to support you every step of the way.</p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary">Contact MY SUPPORT VIC</a>
      </section>
    </div>
  <?php elseif ($serviceKey === 'transport'): ?>
    <div class="service-page transport-assistance-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1>Transport Assistance</h1>
          <p><strong>Supporting Safe and Reliable Travel</strong></p>
          <p>At MY SUPPORT VIC, we understand that reliable transport is essential for maintaining independence and accessing the community.</p>
          <p>Our Transport Assistance service helps participants travel safely and confidently to appointments, activities, and everyday destinations.</p>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost">Learn How It Works</a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker">Transport Inclusions</p>
            <h2>How We Can Support You</h2>
          </div>
          <p>We can assist with transport to:</p>
          <ul class="dl-service-list">
            <li>Medical and healthcare appointments</li>
            <li>Community activities</li>
            <li>Shopping and errands</li>
            <li>Social events</li>
            <li>Education and training</li>
            <li>Other approved activities related to your goals</li>
          </ul>
          <p class="dl-support-note">Our team provides friendly, reliable, and respectful support to help participants feel comfortable and safe while travelling.</p>
        </div>
      </section>

      <section class="po-savings">
        <h2>Support That Understands Your Needs</h2>
        <div class="po-savings-grid">
          <div class="po-savings-card">
            <i class="ti ti-route-alt-left po-savings-icon" aria-hidden="true"></i>
            <h4>Transport Arrangements</h4>
            <p>We work closely with participants and families to ensure transport arrangements meet individual preferences.</p>
          </div>
          <div class="po-savings-card">
            <i class="ti ti-users po-savings-icon" aria-hidden="true"></i>
            <h4>Culture and Personal Goals</h4>
            <p>Support is delivered with respect for cultural needs and personal goals.</p>
          </div>
        </div>
      </section>

      <section class="po-cta">
        <h2>Travel With Confidence</h2>
        <p>Our team is here to support safe, reliable, and goal-focused travel for everyday life and community access.</p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary">Contact MY SUPPORT VIC</a>
      </section>
    </div>
  <?php elseif ($serviceKey === 'companionship'): ?>
    <div class="service-page companionship-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1>Companionship</h1>
          <p><strong>Meaningful Connections Matter</strong></p>
          <p>At MY SUPPORT VIC, we understand that companionship and social connection are important for emotional wellbeing and quality of life.</p>
          <p>Our Companionship services provide friendly support and meaningful interaction to help participants stay connected, engaged, and valued.</p>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost">Learn How It Works</a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker">Companionship Inclusions</p>
            <h2>How We Can Support You</h2>
          </div>
          <p>We can support participants with:</p>
          <ul class="dl-service-list">
            <li>Social visits and conversations</li>
            <li>Shared activities and hobbies</li>
            <li>Community outings</li>
            <li>Accompaniment to appointments</li>
            <li>Building social confidence</li>
            <li>Reducing feelings of isolation</li>
          </ul>
          <p class="dl-support-note">We believe support should be built on genuine relationships, trust, and understanding.</p>
        </div>
      </section>

      <section class="po-savings">
        <h2>More Than Just Support</h2>
        <div class="po-savings-grid">
          <div class="po-savings-card">
            <i class="ti ti-heart-handshake po-savings-icon" aria-hidden="true"></i>
            <h4>Genuine Relationships</h4>
            <p>We build companionship through trust, consistency, and understanding.</p>
          </div>
          <div class="po-savings-card">
            <i class="ti ti-users po-savings-icon" aria-hidden="true"></i>
            <h4>Respectful and Meaningful</h4>
            <p>Our team takes the time to get to know participants and provide companionship that is respectful, meaningful, and enjoyable.</p>
          </div>
        </div>
      </section>

      <section class="po-cta">
        <h2>Stay Connected With Confidence</h2>
        <p>Our companionship team is here to provide social connection and meaningful support every step of the way.</p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary">Contact MY SUPPORT VIC</a>
      </section>
    </div>
  <?php elseif ($serviceKey === 'cultural-support'): ?>
    <div class="service-page cultural-support-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1>Cultural &amp; Language Support</h1>
          <p><strong>Support That Speaks Your Language</strong></p>
          <p>At MY SUPPORT VIC, we recognise that language and culture play an important role in how people access, understand, and experience support services.</p>
          <p>Our Cultural &amp; Language Support service is designed to help participants and families feel comfortable, informed, and understood.</p>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost">Learn How It Works</a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker">Cultural &amp; Language Inclusions</p>
            <h2>How We Can Support You</h2>
          </div>
          <p>We can support participants and families with:</p>
          <ul class="dl-service-list">
            <li>Support from workers who speak community languages</li>
            <li>Assistance communicating with service providers</li>
            <li>Support understanding NDIS information</li>
            <li>Culturally responsive service delivery</li>
            <li>Support that respects cultural values and family traditions</li>
            <li>Assistance for families who prefer to communicate in their own language</li>
          </ul>
          <p class="dl-support-note">We help participants and families navigate services with greater confidence by providing support that is culturally respectful and easy to understand.</p>
        </div>
      </section>

      <section class="po-savings">
        <h2>Supporting Diverse Communities</h2>
        <div class="po-savings-grid">
          <div class="po-savings-card">
            <i class="ti ti-world po-savings-icon" aria-hidden="true"></i>
            <h4>Inclusive and Welcoming</h4>
            <p>MY SUPPORT VIC proudly supports people from culturally and linguistically diverse backgrounds.</p>
          </div>
          <div class="po-savings-card">
            <i class="ti ti-users po-savings-icon" aria-hidden="true"></i>
            <h4>Respectful Communication</h4>
            <p>We are committed to creating an inclusive and welcoming environment for everyone.</p>
          </div>
        </div>
      </section>

      <section class="po-cta">
        <h2>Bridging Language and Cultural Barriers</h2>
        <p>Our team is here to provide support that makes services easier to understand and more comfortable to access.</p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary">Contact MY SUPPORT VIC</a>
      </section>
    </div>
  <?php elseif ($serviceKey === 'domestic-support'): ?>
    <div class="service-page domestic-support-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1>Domestic Support</h1>
          <p><strong>Helping You Maintain a Safe and Comfortable Home</strong></p>
          <p>A clean and organised home can contribute to greater wellbeing, comfort, and independence.</p>
          <p>MY SUPPORT VIC provides Domestic Support services to assist participants with everyday household tasks while promoting independence wherever possible.</p>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost">Learn How It Works</a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker">Domestic Support Inclusions</p>
            <h2>How We Can Support You</h2>
          </div>
          <ul class="dl-service-list">
            <li>General household cleaning</li>
            <li>Laundry and linen changes</li>
            <li>Basic household organisation</li>
            <li>Meal preparation assistance</li>
            <li>Grocery shopping support</li>
            <li>Maintaining a safe living environment</li>
          </ul>
          <p class="dl-support-note">Our team works with you to understand your routines and preferences, ensuring support is delivered in a way that suits your lifestyle.</p>
        </div>
      </section>

      <section class="po-savings">
        <h2>Supporting Independence</h2>
        <div class="po-savings-grid">
          <div class="po-savings-card">
            <i class="ti ti-home-check po-savings-icon" aria-hidden="true"></i>
            <h4>Safe and Comfortable Home</h4>
            <p>We provide practical support that helps maintain comfort, safety, and wellbeing at home.</p>
          </div>
          <div class="po-savings-card">
            <i class="ti ti-user-up po-savings-icon" aria-hidden="true"></i>
            <h4>Build Household Skills</h4>
            <p>We aim to provide assistance while encouraging participants to maintain and develop their own household skills wherever possible.</p>
          </div>
        </div>
      </section>

      <section class="po-cta">
        <h2>Respectful and Personalised Support</h2>
        <p>Our domestic support is tailored to your preferences, routines, and independence goals.</p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary">Contact MY SUPPORT VIC</a>
      </section>
    </div>
  <?php else: ?>
    <div class="service-page">
      <!-- HERO -->
      <section class="po-hero">
        <div class="po-hero-content">
          <h1><?= e($serviceContent['heroTitle']) ?></h1>
          <p><?= e($serviceContent['heroIntro']) ?></p>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--primary"><?= e($serviceContent['ctaLabel']) ?></a>
            <a href="<?= e($routes['contact']) ?>" class="btn btn--ghost">Call <?= e($site['phone']) ?></a>
          </div>
        </div>
      </section>

      <!-- PROBLEM/SOLUTION -->
      <section class="po-problem-solution">
        <div>
          <h2><?= e($serviceContent['challengeTitle']) ?></h2>
          <ul>
            <?php foreach ($serviceContent['challenges'] as $challenge): ?>
              <li><?= e($challenge) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="solution">
          <h2><?= e($serviceContent['solutionTitle']) ?></h2>
          <ul>
            <?php foreach ($serviceContent['solutions'] as $solution): ?>
              <li><?= e($solution) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>

      <!-- SERVICES -->
      <section class="po-features">
        <div class="po-features-header">
          <h2><?= e($serviceContent['featuresTitle']) ?></h2>
          <p><?= e($serviceContent['featuresIntro']) ?></p>
        </div>
        <div class="po-features-grid">
          <?php foreach ($serviceContent['features'] as $feature): ?>
            <div class="po-feature-card">
              <i class="ti <?= e($feature['icon']) ?>"></i>
              <h4><?= e($feature['title']) ?></h4>
              <p><?= e($feature['desc']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- HOW IT WORKS -->
      <section class="po-how-it-works">
        <h2><?= e($serviceContent['stepsTitle'] ?? 'How We Work With You') ?></h2>
        <p><?= e($serviceContent['stepsIntro'] ?? 'A simple, caring process designed to meet your needs.') ?></p>
        <div class="po-steps-grid">
          <?php foreach ($serviceSteps as $step): ?>
            <div class="po-step">
              <div class="po-step-number"><?= e($step['num']) ?></div>
              <h4><?= e($step['title']) ?></h4>
              <p><?= e($step['desc']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- WHY CHOOSE US -->
      <section class="po-savings">
        <h2><?= e($serviceContent['highlightsTitle'] ?? 'Why Choose My Support') ?></h2>
        <div class="po-savings-grid">
          <?php foreach ($serviceHighlights as $reason): ?>
            <div class="po-savings-card" style="text-align: left; padding: 30px;">
              <i class="ti <?= e($reason['icon']) ?>" style="font-size: 36px; color: white; margin-bottom: 15px; display: block;"></i>
              <h4 style="color: white; margin-bottom: 10px;"><?= e($reason['title']) ?></h4>
              <p><?= e($reason['desc']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- CTA -->
      <section class="po-cta">
        <h2><?= e($serviceContent['ctaTitle']) ?></h2>
        <p><?= e($serviceContent['ctaText']) ?></p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary"><?= e($serviceContent['ctaLabel']) ?></a>
      </section>
    </div>
  <?php endif; ?>
</div>
