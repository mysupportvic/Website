<?php
$serviceKey = $serviceKey ?? 'overview';
$serviceContent = $site['servicePages'][$serviceKey] ?? $site['servicePages']['overview'];
$serviceSteps = $serviceContent['steps'] ?? $site['steps'];
$serviceHighlights = $serviceContent['highlights'] ?? $site['reasons'];
$isVietnamese = ($site['activeLanguage'] ?? 'en') === 'vn';
$serviceLocale = [
  'daily-living' => [
    'heroTitle' => 'Hỗ Trợ Sinh Hoạt Hằng Ngày',
    'heroLead' => 'Đồng Hành Cùng Bạn Trong Cuộc Sống Hằng Ngày',
    'heroBody' => [
      'Tại MY SUPPORT VIC, chúng tôi hiểu rằng những công việc thường ngày đôi khi có thể trở nên khó khăn. Dịch vụ Hỗ Trợ Sinh Hoạt Hằng Ngày của chúng tôi được thiết kế để giúp người tham gia duy trì sự độc lập, nâng cao sự tự tin và tiếp tục sống theo cách phù hợp nhất với bản thân.',
      'Chúng tôi cung cấp các dịch vụ hỗ trợ được cá nhân hóa dựa trên nhu cầu, mục tiêu và thói quen sinh hoạt của từng người.',
    ],
    'supportKicker' => 'Hỗ Trợ Sinh Hoạt Hằng Ngày',
    'supportTitle' => 'Chúng Tôi Có Thể Hỗ Trợ',
    'supportList' => [
      'Hỗ trợ các hoạt động sinh hoạt hằng ngày',
      'Hỗ trợ chuẩn bị bữa ăn',
      'Hỗ trợ mua sắm và các công việc cần thiết',
      'Hỗ trợ sắp xếp không gian sống',
      'Hỗ trợ phát triển kỹ năng sinh hoạt hằng ngày',
      'Hỗ trợ xây dựng thói quen và lịch sinh hoạt',
      'Hỗ trợ tham dự các cuộc hẹn',
      'Tăng cường sự tự tin và khả năng tự lập',
      'Hỗ trợ tham gia các hoạt động thường ngày trong cộng đồng',
    ],
    'supportNote' => 'Mọi dịch vụ hỗ trợ đều được điều chỉnh phù hợp với nhu cầu riêng của từng người.',
    'savingsTitle' => 'Dịch Vụ Hỗ Trợ Thấu Hiểu Ngôn Ngữ Và Văn Hóa',
    'cards' => [
      ['icon' => 'ti-language', 'title' => 'Ngôn Ngữ Và Văn Hóa', 'body' => 'Đội ngũ của chúng tôi bao gồm những nhân viên hiểu ngôn ngữ và văn hóa của các cộng đồng mà chúng tôi phục vụ. Chúng tôi luôn nỗ lực cung cấp dịch vụ một cách dễ hiểu, tôn trọng văn hóa và phù hợp với nhu cầu của từng người tham gia.'],
    ],
    'ctaTitle' => 'Bắt Đầu Ngay Hôm Nay',
    'ctaText' => 'Nếu bạn muốn tìm hiểu thêm về dịch vụ Hỗ Trợ Sinh Hoạt Hằng Ngày của MY SUPPORT VIC, hãy liên hệ với chúng tôi. Chúng tôi luôn sẵn sàng đồng hành cùng bạn trên hành trình hướng tới sự độc lập và tự tin hơn trong cuộc sống.',
    'learnLabel' => 'Tìm Hiểu Cách Chúng Tôi Hỗ Trợ',
    'contactLabel' => 'Liên Hệ MY SUPPORT VIC',
  ],
  'community-participation' => [
    'heroTitle' => 'Tham Gia Cộng Đồng',
    'heroLead' => 'Giúp Bạn Kết Nối Và Hòa Nhập Cộng Đồng',
    'heroBody' => [
      'Tại MY SUPPORT VIC, chúng tôi tin rằng việc tham gia cộng đồng đóng vai trò quan trọng đối với sức khỏe tinh thần, sự tự tin và chất lượng cuộc sống.',
      'Dịch vụ Tham Gia Cộng Đồng của chúng tôi giúp người tham gia xây dựng các mối quan hệ xã hội, phát triển kỹ năng và tích cực tham gia vào các hoạt động trong cộng đồng.',
    ],
    'supportKicker' => 'Tham Gia Cộng Đồng',
    'supportTitle' => 'Chúng Tôi Có Thể Hỗ Trợ',
    'supportList' => [
      'Tham gia các hoạt động cộng đồng',
      'Tham dự các chương trình xã hội và giải trí',
      'Xây dựng sự tự tin trong giao tiếp',
      'Kết nối và phát triển các mối quan hệ bạn bè',
      'Khám phá sở thích cá nhân',
      'Tiếp cận các nhóm cộng đồng và dịch vụ địa phương',
      'Tham gia các hoạt động học tập và phát triển kỹ năng',
    ],
    'supportNote' => 'Chúng tôi luôn điều chỉnh hỗ trợ để phù hợp với mục tiêu, sở thích và mức độ thoải mái của từng người tham gia.',
    'savingsTitle' => 'Hỗ Trợ Phù Hợp Với Ngôn Ngữ Và Văn Hóa',
    'cards' => [
      ['icon' => 'ti-language', 'title' => 'Thấu Hiểu Tạo Nên Kết Nối', 'body' => 'Chúng tôi hiểu rằng sự kết nối bắt đầu từ sự thấu hiểu. Đội ngũ MY SUPPORT VIC luôn tôn trọng ngôn ngữ, văn hóa và giá trị cộng đồng của từng người tham gia.'],
    ],
    'ctaTitle' => 'Đồng Hành Trên Hành Trình Hòa Nhập',
    'ctaText' => 'Dù mục tiêu của bạn là kết bạn mới, học kỹ năng mới hay tham gia tích cực hơn vào cộng đồng, chúng tôi luôn sẵn sàng đồng hành cùng bạn.',
    'learnLabel' => 'Tìm Hiểu Cách Chúng Tôi Hỗ Trợ',
    'contactLabel' => 'Liên Hệ MY SUPPORT VIC',
  ],
  'transport' => [
    'heroTitle' => 'Hỗ Trợ Di Chuyển',
    'heroLead' => 'Đồng Hành Cùng Bạn Trên Mọi Hành Trình',
    'heroBody' => [
      'Tại MY SUPPORT VIC, chúng tôi hiểu rằng việc di chuyển an toàn và thuận tiện là một phần quan trọng giúp duy trì sự độc lập và kết nối với cộng đồng.',
      'Dịch vụ Hỗ Trợ Di Chuyển của chúng tôi giúp người tham gia đến các địa điểm cần thiết một cách an toàn và tự tin.',
    ],
    'supportKicker' => 'Hỗ Trợ Di Chuyển',
    'supportTitle' => 'Chúng Tôi Có Thể Hỗ Trợ',
    'supportList' => [
      'Các cuộc hẹn y tế và chăm sóc sức khỏe',
      'Hoạt động cộng đồng',
      'Mua sắm và các công việc cần thiết',
      'Hoạt động xã hội',
      'Học tập và đào tạo',
      'Các hoạt động phù hợp với mục tiêu cá nhân',
    ],
    'supportNote' => 'Chúng tôi hỗ trợ để mỗi hành trình trở nên an toàn, thuận tiện và phù hợp với mục tiêu của bạn.',
    'savingsTitle' => 'Dịch Vụ Di Chuyển Phù Hợp Với Bạn',
    'cards' => [
      ['icon' => 'ti-route-alt-left', 'title' => 'Di Chuyển An Toàn Và Thoải Mái', 'body' => 'Đội ngũ của chúng tôi luôn hỗ trợ với thái độ thân thiện, chuyên nghiệp và tôn trọng để người tham gia cảm thấy an tâm trong suốt hành trình.'],
      ['icon' => 'ti-users', 'title' => 'Dịch Vụ Phù Hợp Với Nhu Cầu Của Bạn', 'body' => 'Chúng tôi làm việc chặt chẽ với người tham gia và gia đình để đảm bảo việc di chuyển phù hợp với nhu cầu, sở thích và hoàn cảnh cá nhân.'],
    ],
    'ctaTitle' => 'Di Chuyển Tự Tin Mỗi Ngày',
    'ctaText' => 'Chúng tôi luôn sẵn sàng hỗ trợ những hành trình an toàn, đáng tin cậy và phù hợp với mục tiêu của bạn trong cuộc sống hằng ngày.',
    'learnLabel' => 'Tìm Hiểu Cách Chúng Tôi Hỗ Trợ',
    'contactLabel' => 'Liên Hệ MY SUPPORT VIC',
  ],
  'companionship' => [
    'heroTitle' => 'Đồng Hành Và Kết Nối',
    'heroLead' => 'Những Mối Quan Hệ Ý Nghĩa Tạo Nên Sự Khác Biệt',
    'heroBody' => [
      'Tại MY SUPPORT VIC, chúng tôi hiểu rằng sự kết nối xã hội và tình bạn có vai trò quan trọng đối với sức khỏe tinh thần và chất lượng cuộc sống.',
      'Dịch vụ Đồng Hành Và Kết Nối giúp người tham gia duy trì các mối quan hệ tích cực, cảm thấy được quan tâm và giảm cảm giác cô lập.',
    ],
    'supportKicker' => 'Đồng Hành Và Kết Nối',
    'supportTitle' => 'Chúng Tôi Có Thể Hỗ Trợ',
    'supportList' => [
      'Trò chuyện và thăm hỏi',
      'Tham gia các hoạt động yêu thích',
      'Đi dạo hoặc tham gia hoạt động cộng đồng',
      'Đồng hành đến các cuộc hẹn',
      'Tăng cường sự tự tin trong giao tiếp',
      'Giảm cảm giác cô đơn và tách biệt',
    ],
    'supportNote' => 'Chúng tôi tin rằng hỗ trợ tốt nhất được xây dựng từ sự chân thành, tin cậy và những kết nối có ý nghĩa.',
    'savingsTitle' => 'Hơn Cả Một Dịch Vụ Hỗ Trợ',
    'cards' => [
      ['icon' => 'ti-heart-handshake', 'title' => 'Kết Nối Chân Thành', 'body' => 'Chúng tôi tin rằng những mối quan hệ chân thành sẽ tạo nên những trải nghiệm hỗ trợ tích cực hơn.'],
      ['icon' => 'ti-users', 'title' => 'Lắng Nghe Và Thấu Hiểu', 'body' => 'Đội ngũ MY SUPPORT VIC luôn dành thời gian để lắng nghe, thấu hiểu và xây dựng những kết nối có ý nghĩa với người tham gia.'],
    ],
    'ctaTitle' => 'Kết Nối Tự Tin Hơn Mỗi Ngày',
    'ctaText' => 'Chúng tôi luôn sẵn sàng mang đến sự đồng hành gần gũi, hỗ trợ tinh thần và những kết nối xã hội có ý nghĩa cho người tham gia.',
    'learnLabel' => 'Tìm Hiểu Cách Chúng Tôi Hỗ Trợ',
    'contactLabel' => 'Liên Hệ MY SUPPORT VIC',
  ],
  'cultural-support' => [
    'heroTitle' => 'Hỗ Trợ Ngôn Ngữ Và Văn Hóa',
    'heroLead' => 'Dịch Vụ Hỗ Trợ Hiểu Ngôn Ngữ Của Bạn',
    'heroBody' => [
      'Tại MY SUPPORT VIC, chúng tôi hiểu rằng ngôn ngữ và văn hóa có ảnh hưởng lớn đến cách mỗi người tiếp cận và sử dụng các dịch vụ hỗ trợ.',
      'Dịch vụ Hỗ Trợ Ngôn Ngữ Và Văn Hóa được thiết kế nhằm giúp người tham gia và gia đình cảm thấy thoải mái, được thấu hiểu và dễ dàng tiếp cận thông tin hơn.',
    ],
    'supportKicker' => 'Hỗ Trợ Ngôn Ngữ Và Văn Hóa',
    'supportTitle' => 'Chúng Tôi Có Thể Hỗ Trợ',
    'supportList' => [
      'Hỗ trợ bởi nhân viên nói được ngôn ngữ cộng đồng',
      'Hỗ trợ giao tiếp với các nhà cung cấp dịch vụ',
      'Hỗ trợ tìm hiểu thông tin về NDIS',
      'Cung cấp dịch vụ phù hợp với văn hóa',
      'Tôn trọng các giá trị văn hóa và truyền thống gia đình',
      'Hỗ trợ các gia đình muốn trao đổi bằng ngôn ngữ quen thuộc',
    ],
    'supportNote' => 'Chúng tôi giúp người tham gia và gia đình tiếp cận thông tin và dịch vụ rõ ràng hơn thông qua giao tiếp phù hợp và sự thấu hiểu văn hóa.',
    'savingsTitle' => 'Thu Hẹp Rào Cản Ngôn Ngữ Và Văn Hóa',
    'cards' => [
      ['icon' => 'ti-language', 'title' => 'Giao Tiếp Rõ Ràng Và Dễ Hiểu', 'body' => 'Chúng tôi giúp người tham gia và gia đình tiếp cận các dịch vụ một cách dễ dàng hơn thông qua giao tiếp rõ ràng, tôn trọng văn hóa và sự thấu hiểu.'],
      ['icon' => 'ti-world', 'title' => 'Đồng Hành Cùng Các Cộng Đồng Đa Văn Hóa', 'body' => 'MY SUPPORT VIC tự hào phục vụ các cộng đồng đa văn hóa và đa ngôn ngữ, đồng thời cam kết xây dựng một môi trường thân thiện, hòa nhập và tôn trọng sự khác biệt của mỗi người.'],
    ],
    'ctaTitle' => 'Hỗ Trợ Dễ Hiểu Và Gần Gũi Hơn',
    'ctaText' => 'Chúng tôi luôn sẵn sàng giúp người tham gia và gia đình cảm thấy tự tin hơn khi tiếp cận dịch vụ, thông tin và các hỗ trợ phù hợp với ngôn ngữ cũng như văn hóa của mình.',
    'learnLabel' => 'Tìm Hiểu Cách Chúng Tôi Hỗ Trợ',
    'contactLabel' => 'Liên Hệ MY SUPPORT VIC',
  ],
  'domestic-support' => [
    'heroTitle' => 'Hỗ Trợ Công Việc Gia Đình',
    'heroLead' => 'Giúp Duy Trì Môi Trường Sống An Toàn Và Thoải Mái',
    'heroBody' => [
      'Một ngôi nhà sạch sẽ và ngăn nắp góp phần nâng cao chất lượng cuộc sống, sự thoải mái và tính độc lập.',
      'MY SUPPORT VIC cung cấp dịch vụ Hỗ Trợ Công Việc Gia Đình nhằm hỗ trợ các công việc hằng ngày trong gia đình và khuyến khích người tham gia duy trì khả năng tự lập.',
    ],
    'supportKicker' => 'Hỗ Trợ Công Việc Gia Đình',
    'supportTitle' => 'Chúng Tôi Có Thể Hỗ Trợ',
    'supportList' => [
      'Dọn dẹp nhà cửa',
      'Giặt giũ và thay ga giường',
      'Sắp xếp không gian sống',
      'Hỗ trợ chuẩn bị bữa ăn',
      'Hỗ trợ mua sắm thực phẩm',
      'Duy trì môi trường sống an toàn',
    ],
    'supportNote' => 'Chúng tôi luôn hỗ trợ theo cách phù hợp với thói quen, sở thích và mục tiêu tự lập của từng người tham gia.',
    'savingsTitle' => 'Hỗ Trợ Phù Hợp Với Cuộc Sống Của Bạn',
    'cards' => [
      ['icon' => 'ti-home-check', 'title' => 'Dịch Vụ Phù Hợp Với Bạn', 'body' => 'Chúng tôi tôn trọng thói quen và sở thích của từng người để đảm bảo dịch vụ được cung cấp theo cách phù hợp nhất.'],
      ['icon' => 'ti-user-up', 'title' => 'Khuyến Khích Sự Tự Lập', 'body' => 'Bên cạnh việc hỗ trợ, chúng tôi luôn khuyến khích người tham gia phát triển và duy trì các kỹ năng sinh hoạt cần thiết trong cuộc sống hằng ngày.'],
    ],
    'ctaTitle' => 'Hỗ Trợ Tôn Trọng Và Phù Hợp Với Bạn',
    'ctaText' => 'Dịch vụ hỗ trợ công việc gia đình của chúng tôi được điều chỉnh theo thói quen, sở thích và mục tiêu sống độc lập của từng người.',
    'learnLabel' => 'Tìm Hiểu Cách Chúng Tôi Hỗ Trợ',
    'contactLabel' => 'Liên Hệ MY SUPPORT VIC',
  ],
];
$localizedService = $isVietnamese ? ($serviceLocale[$serviceKey] ?? null) : null;
?>

<div id="service-content">
  <?php if ($serviceKey === 'daily-living'): ?>
    <?php $content = $localizedService ?: [
      'heroTitle' => 'Daily Living Support',
      'heroLead' => 'Supporting Your Independence Every Day',
      'heroBody' => [
        'At MY SUPPORT VIC, we understand that everyday tasks can sometimes become challenging. Our Daily Living Support services are designed to help participants maintain their independence, build confidence, and continue living life in a way that works best for them.',
        'We provide personalised support that is tailored to your individual needs, goals, and daily routines.',
      ],
      'supportKicker' => 'Daily Living Inclusions',
      'supportTitle' => 'How We Can Support You',
      'supportList' => ['Assistance with daily routines','Meal preparation and nutrition support','Grocery shopping and essential errands','Household organisation','Developing daily living skills','Establishing routines and schedules','Attending appointments','Building confidence and independence','Participation in everyday community activities'],
      'supportNote' => 'Support is always delivered in a respectful and person-centred manner.',
      'savingsTitle' => 'Support That Understands Your Language and Culture',
      'cards' => [
        ['icon' => 'ti-language', 'title' => 'Communication Matters', 'body' => 'At MY SUPPORT VIC, we recognise that communication plays an important role in quality support.'],
        ['icon' => 'ti-world', 'title' => 'Language and Cultural Understanding', 'body' => 'Our team includes staff who understand the languages and cultures of the communities we serve.'],
        ['icon' => 'ti-user-heart', 'title' => 'Respectful and Individualised Support', 'body' => 'We provide support that is culturally respectful, easy to understand, and tailored to each participant\'s individual needs.'],
      ],
      'ctaTitle' => 'Get Started',
      'ctaText' => 'If you would like to learn more about our Daily Living Support services, contact MY SUPPORT VIC today. We are here to discuss your goals and how we can support your independence and wellbeing.',
      'learnLabel' => 'Learn How It Works',
      'contactLabel' => 'Contact MY SUPPORT VIC',
    ]; ?>
    <div class="service-page daily-living-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1><?= e($content['heroTitle']) ?></h1>
          <p><strong><?= e($content['heroLead']) ?></strong></p>
          <?php foreach ($content['heroBody'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost"><?= e($content['learnLabel']) ?></a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker"><?= e($content['supportKicker']) ?></p>
            <h2><?= e($content['supportTitle']) ?></h2>
          </div>
          <ul class="dl-service-list">
            <?php foreach ($content['supportList'] as $item): ?>
              <li><?= e($item) ?></li>
            <?php endforeach; ?>
          </ul>
          <p class="dl-support-note"><?= e($content['supportNote']) ?></p>
        </div>
      </section>

      <section class="po-savings">
        <h2><?= e($content['savingsTitle']) ?></h2>
        <div class="po-savings-grid">
          <?php foreach ($content['cards'] as $card): ?>
            <div class="po-savings-card">
              <i class="ti <?= e($card['icon']) ?> po-savings-icon" aria-hidden="true"></i>
              <h4><?= e($card['title']) ?></h4>
              <p><?= e($card['body']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="po-cta">
        <h2><?= e($content['ctaTitle']) ?></h2>
        <p><?= e($content['ctaText']) ?></p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary"><?= e($content['contactLabel']) ?></a>
      </section>
    </div>
  <?php elseif ($serviceKey === 'community-participation'): ?>
    <?php $content = $localizedService ?: [
      'heroTitle' => 'Community Participation',
      'heroLead' => 'Helping You Stay Connected and Engaged',
      'heroBody' => ['At MY SUPPORT VIC, we believe that meaningful community participation plays an important role in wellbeing, independence, and quality of life.','Our Community Participation services are designed to help participants build confidence, develop social connections, explore interests, and actively engage in their communities.'],
      'supportKicker' => 'Community Participation Inclusions',
      'supportTitle' => 'How We Can Support You',
      'supportList' => ['Attend community events and activities','Participate in social and recreational programs','Build confidence in social situations','Develop friendships and social networks','Explore hobbies and personal interests','Access community groups and local services','Attend educational or skill-building activities'],
      'supportNote' => 'We tailor support to your interests, goals, and comfort level.',
      'savingsTitle' => 'Support That Understands Your Language and Culture',
      'cards' => [
        ['icon' => 'ti-language', 'title' => 'Culturally Responsive Support', 'body' => 'Our team understands that feeling connected often starts with feeling understood.'],
        ['icon' => 'ti-world', 'title' => 'Language and Culture Respect', 'body' => 'We work with participants in a way that respects their language, culture, and community connections.'],
      ],
      'ctaTitle' => 'Building Confidence Through Participation',
      'ctaText' => 'Whether your goal is to meet new people, learn new skills, or become more active in your community, MY SUPPORT VIC is here to support you every step of the way.',
      'learnLabel' => 'Learn How It Works',
      'contactLabel' => 'Contact MY SUPPORT VIC',
    ]; ?>
    <div class="service-page community-participation-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1><?= e($content['heroTitle']) ?></h1>
          <p><strong><?= e($content['heroLead']) ?></strong></p>
          <?php foreach ($content['heroBody'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost"><?= e($content['learnLabel']) ?></a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker"><?= e($content['supportKicker']) ?></p>
            <h2><?= e($content['supportTitle']) ?></h2>
          </div>
          <ul class="dl-service-list">
            <?php foreach ($content['supportList'] as $item): ?>
              <li><?= e($item) ?></li>
            <?php endforeach; ?>
          </ul>
          <p class="dl-support-note"><?= e($content['supportNote']) ?></p>
        </div>
      </section>

      <section class="po-savings">
        <h2><?= e($content['savingsTitle']) ?></h2>
        <div class="po-savings-grid">
          <?php foreach ($content['cards'] as $card): ?>
            <div class="po-savings-card">
              <i class="ti <?= e($card['icon']) ?> po-savings-icon" aria-hidden="true"></i>
              <h4><?= e($card['title']) ?></h4>
              <p><?= e($card['body']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="po-cta">
        <h2><?= e($content['ctaTitle']) ?></h2>
        <p><?= e($content['ctaText']) ?></p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary"><?= e($content['contactLabel']) ?></a>
      </section>
    </div>
  <?php elseif ($serviceKey === 'transport'): ?>
    <?php $content = $localizedService ?: [
      'heroTitle' => 'Transport Assistance',
      'heroLead' => 'Supporting Safe and Reliable Travel',
      'heroBody' => ['At MY SUPPORT VIC, we understand that reliable transport is essential for maintaining independence and accessing the community.','Our Transport Assistance service helps participants travel safely and confidently to appointments, activities, and everyday destinations.'],
      'supportKicker' => 'Transport Inclusions',
      'supportTitle' => 'How We Can Support You',
      'supportList' => ['Medical and healthcare appointments','Community activities','Shopping and errands','Social events','Education and training','Other approved activities related to your goals'],
      'supportNote' => 'Our team provides friendly, reliable, and respectful support to help participants feel comfortable and safe while travelling.',
      'savingsTitle' => 'Support That Understands Your Needs',
      'cards' => [
        ['icon' => 'ti-route-alt-left', 'title' => 'Transport Arrangements', 'body' => 'We work closely with participants and families to ensure transport arrangements meet individual preferences.'],
        ['icon' => 'ti-users', 'title' => 'Culture and Personal Goals', 'body' => 'Support is delivered with respect for cultural needs and personal goals.'],
      ],
      'ctaTitle' => 'Travel With Confidence',
      'ctaText' => 'Our team is here to support safe, reliable, and goal-focused travel for everyday life and community access.',
      'learnLabel' => 'Learn How It Works',
      'contactLabel' => 'Contact MY SUPPORT VIC',
    ]; ?>
    <div class="service-page transport-assistance-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1><?= e($content['heroTitle']) ?></h1>
          <p><strong><?= e($content['heroLead']) ?></strong></p>
          <?php foreach ($content['heroBody'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost"><?= e($content['learnLabel']) ?></a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker"><?= e($content['supportKicker']) ?></p>
            <h2><?= e($content['supportTitle']) ?></h2>
          </div>
          <ul class="dl-service-list">
            <?php foreach ($content['supportList'] as $item): ?>
              <li><?= e($item) ?></li>
            <?php endforeach; ?>
          </ul>
          <p class="dl-support-note"><?= e($content['supportNote']) ?></p>
        </div>
      </section>

      <section class="po-savings">
        <h2><?= e($content['savingsTitle']) ?></h2>
        <div class="po-savings-grid">
          <?php foreach ($content['cards'] as $card): ?>
            <div class="po-savings-card">
              <i class="ti <?= e($card['icon']) ?> po-savings-icon" aria-hidden="true"></i>
              <h4><?= e($card['title']) ?></h4>
              <p><?= e($card['body']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="po-cta">
        <h2><?= e($content['ctaTitle']) ?></h2>
        <p><?= e($content['ctaText']) ?></p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary"><?= e($content['contactLabel']) ?></a>
      </section>
    </div>
  <?php elseif ($serviceKey === 'companionship'): ?>
    <?php $content = $localizedService ?: [
      'heroTitle' => 'Companionship',
      'heroLead' => 'Meaningful Connections Matter',
      'heroBody' => ['At MY SUPPORT VIC, we understand that companionship and social connection are important for emotional wellbeing and quality of life.','Our Companionship services provide friendly support and meaningful interaction to help participants stay connected, engaged, and valued.'],
      'supportKicker' => 'Companionship Inclusions',
      'supportTitle' => 'How We Can Support You',
      'supportList' => ['Social visits and conversations','Shared activities and hobbies','Community outings','Accompaniment to appointments','Building social confidence','Reducing feelings of isolation'],
      'supportNote' => 'We believe support should be built on genuine relationships, trust, and understanding.',
      'savingsTitle' => 'More Than Just Support',
      'cards' => [
        ['icon' => 'ti-heart-handshake', 'title' => 'Genuine Relationships', 'body' => 'We build companionship through trust, consistency, and understanding.'],
        ['icon' => 'ti-users', 'title' => 'Respectful and Meaningful', 'body' => 'Our team takes the time to get to know participants and provide companionship that is respectful, meaningful, and enjoyable.'],
      ],
      'ctaTitle' => 'Stay Connected With Confidence',
      'ctaText' => 'Our companionship team is here to provide social connection and meaningful support every step of the way.',
      'learnLabel' => 'Learn How It Works',
      'contactLabel' => 'Contact MY SUPPORT VIC',
    ]; ?>
    <div class="service-page companionship-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1><?= e($content['heroTitle']) ?></h1>
          <p><strong><?= e($content['heroLead']) ?></strong></p>
          <?php foreach ($content['heroBody'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost"><?= e($content['learnLabel']) ?></a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker"><?= e($content['supportKicker']) ?></p>
            <h2><?= e($content['supportTitle']) ?></h2>
          </div>
          <ul class="dl-service-list">
            <?php foreach ($content['supportList'] as $item): ?>
              <li><?= e($item) ?></li>
            <?php endforeach; ?>
          </ul>
          <p class="dl-support-note"><?= e($content['supportNote']) ?></p>
        </div>
      </section>

      <section class="po-savings">
        <h2><?= e($content['savingsTitle']) ?></h2>
        <div class="po-savings-grid">
          <?php foreach ($content['cards'] as $card): ?>
            <div class="po-savings-card">
              <i class="ti <?= e($card['icon']) ?> po-savings-icon" aria-hidden="true"></i>
              <h4><?= e($card['title']) ?></h4>
              <p><?= e($card['body']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="po-cta">
        <h2><?= e($content['ctaTitle']) ?></h2>
        <p><?= e($content['ctaText']) ?></p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary"><?= e($content['contactLabel']) ?></a>
      </section>
    </div>
  <?php elseif ($serviceKey === 'cultural-support'): ?>
    <?php $content = $localizedService ?: [
      'heroTitle' => 'Cultural & Language Support',
      'heroLead' => 'Support That Speaks Your Language',
      'heroBody' => ['At MY SUPPORT VIC, we recognise that language and culture play an important role in how people access, understand, and experience support services.','Our Cultural & Language Support service is designed to help participants and families feel comfortable, informed, and understood.'],
      'supportKicker' => 'Cultural & Language Inclusions',
      'supportTitle' => 'How We Can Support You',
      'supportList' => ['Support from workers who speak community languages','Assistance communicating with service providers','Support understanding NDIS information','Culturally responsive service delivery','Support that respects cultural values and family traditions','Assistance for families who prefer to communicate in their own language'],
      'supportNote' => 'We help participants and families navigate services with greater confidence by providing support that is culturally respectful and easy to understand.',
      'savingsTitle' => 'Supporting Diverse Communities',
      'cards' => [
        ['icon' => 'ti-world', 'title' => 'Inclusive and Welcoming', 'body' => 'MY SUPPORT VIC proudly supports people from culturally and linguistically diverse backgrounds.'],
        ['icon' => 'ti-users', 'title' => 'Respectful Communication', 'body' => 'We are committed to creating an inclusive and welcoming environment for everyone.'],
      ],
      'ctaTitle' => 'Bridging Language and Cultural Barriers',
      'ctaText' => 'Our team is here to provide support that makes services easier to understand and more comfortable to access.',
      'learnLabel' => 'Learn How It Works',
      'contactLabel' => 'Contact MY SUPPORT VIC',
    ]; ?>
    <div class="service-page cultural-support-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1><?= e($content['heroTitle']) ?></h1>
          <p><strong><?= e($content['heroLead']) ?></strong></p>
          <?php foreach ($content['heroBody'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost"><?= e($content['learnLabel']) ?></a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker"><?= e($content['supportKicker']) ?></p>
            <h2><?= e($content['supportTitle']) ?></h2>
          </div>
          <ul class="dl-service-list">
            <?php foreach ($content['supportList'] as $item): ?>
              <li><?= e($item) ?></li>
            <?php endforeach; ?>
          </ul>
          <p class="dl-support-note"><?= e($content['supportNote']) ?></p>
        </div>
      </section>

      <section class="po-savings">
        <h2><?= e($content['savingsTitle']) ?></h2>
        <div class="po-savings-grid">
          <?php foreach ($content['cards'] as $card): ?>
            <div class="po-savings-card">
              <i class="ti <?= e($card['icon']) ?> po-savings-icon" aria-hidden="true"></i>
              <h4><?= e($card['title']) ?></h4>
              <p><?= e($card['body']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="po-cta">
        <h2><?= e($content['ctaTitle']) ?></h2>
        <p><?= e($content['ctaText']) ?></p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary"><?= e($content['contactLabel']) ?></a>
      </section>
    </div>
  <?php elseif ($serviceKey === 'domestic-support'): ?>
    <?php $content = $localizedService ?: [
      'heroTitle' => 'Domestic Support',
      'heroLead' => 'Helping You Maintain a Safe and Comfortable Home',
      'heroBody' => ['A clean and organised home can contribute to greater wellbeing, comfort, and independence.','MY SUPPORT VIC provides Domestic Support services to assist participants with everyday household tasks while promoting independence wherever possible.'],
      'supportKicker' => 'Domestic Support Inclusions',
      'supportTitle' => 'How We Can Support You',
      'supportList' => ['General household cleaning','Laundry and linen changes','Basic household organisation','Meal preparation assistance','Grocery shopping support','Maintaining a safe living environment'],
      'supportNote' => 'Our team works with you to understand your routines and preferences, ensuring support is delivered in a way that suits your lifestyle.',
      'savingsTitle' => 'Supporting Independence',
      'cards' => [
        ['icon' => 'ti-home-check', 'title' => 'Safe and Comfortable Home', 'body' => 'We provide practical support that helps maintain comfort, safety, and wellbeing at home.'],
        ['icon' => 'ti-user-up', 'title' => 'Build Household Skills', 'body' => 'We aim to provide assistance while encouraging participants to maintain and develop their own household skills wherever possible.'],
      ],
      'ctaTitle' => 'Respectful and Personalised Support',
      'ctaText' => 'Our domestic support is tailored to your preferences, routines, and independence goals.',
      'learnLabel' => 'Learn How It Works',
      'contactLabel' => 'Contact MY SUPPORT VIC',
    ]; ?>
    <div class="service-page domestic-support-page">
      <section class="po-hero">
        <div class="po-hero-content">
          <h1><?= e($content['heroTitle']) ?></h1>
          <p><strong><?= e($content['heroLead']) ?></strong></p>
          <?php foreach ($content['heroBody'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
          <div>
            <a href="<?= e($routes['participants']) ?>" class="btn btn--ghost"><?= e($content['learnLabel']) ?></a>
          </div>
        </div>
      </section>

      <section class="po-problem-solution dl-single-panel">
        <div class="solution dl-support-box">
          <div class="dl-support-head">
            <p class="dl-support-kicker"><?= e($content['supportKicker']) ?></p>
            <h2><?= e($content['supportTitle']) ?></h2>
          </div>
          <ul class="dl-service-list">
            <?php foreach ($content['supportList'] as $item): ?>
              <li><?= e($item) ?></li>
            <?php endforeach; ?>
          </ul>
          <p class="dl-support-note"><?= e($content['supportNote']) ?></p>
        </div>
      </section>

      <section class="po-savings">
        <h2><?= e($content['savingsTitle']) ?></h2>
        <div class="po-savings-grid">
          <?php foreach ($content['cards'] as $card): ?>
            <div class="po-savings-card">
              <i class="ti <?= e($card['icon']) ?> po-savings-icon" aria-hidden="true"></i>
              <h4><?= e($card['title']) ?></h4>
              <p><?= e($card['body']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="po-cta">
        <h2><?= e($content['ctaTitle']) ?></h2>
        <p><?= e($content['ctaText']) ?></p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary"><?= e($content['contactLabel']) ?></a>
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
