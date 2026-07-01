<?php
$isVietnamese = ($site['activeLanguage'] ?? 'en') === 'vn';

$values = $isVietnamese
    ? [
        ['icon' => 'ti-message-circle', 'title' => 'Giao Tiếp', 'body' => ['Chúng tôi tin rằng sự hỗ trợ hiệu quả bắt đầu từ giao tiếp rõ ràng. Chúng tôi luôn nỗ lực để người tham gia và gia đình cảm thấy được lắng nghe, được thấu hiểu và được cung cấp đầy đủ thông tin.']],
        ['icon' => 'ti-world', 'title' => 'Thấu Hiểu Văn Hóa', 'body' => ['Chúng tôi tôn trọng và trân trọng sự đa dạng văn hóa. Chúng tôi hiểu rằng ngôn ngữ, truyền thống, giá trị và trải nghiệm sống ảnh hưởng đến cách mỗi người tiếp cận các dịch vụ hỗ trợ và hòa nhập cộng đồng.']],
        ['icon' => 'ti-heart-handshake', 'title' => 'Tôn Trọng', 'body' => ['Chúng tôi đối xử với mọi người bằng sự tôn trọng, tử tế và thấu hiểu. Chúng tôi tôn trọng quyền lựa chọn, sở thích và mục tiêu của mỗi cá nhân.']],
        ['icon' => 'ti-shield-check', 'title' => 'Tin Cậy', 'body' => ['Chúng tôi xây dựng những mối quan hệ bền vững thông qua sự trung thực, trách nhiệm và nhất quán. Chúng tôi tin rằng sự tin cậy là nền tảng của mọi dịch vụ hỗ trợ chất lượng.']],
        ['icon' => 'ti-star', 'title' => 'Trao Quyền', 'body' => ['Chúng tôi khuyến khích người tham gia đưa ra quyết định của riêng mình, phát triển sự tự tin, tăng cường tính độc lập và đạt được các mục tiêu cá nhân.']],
        ['icon' => 'ti-users', 'title' => 'Kết Nối Cộng Đồng', 'body' => ['Chúng tôi tin rằng mọi người đều xứng đáng được cảm thấy thuộc về cộng đồng của mình. Chúng tôi khuyến khích sự tham gia, hòa nhập và xây dựng những kết nối ý nghĩa.']],
        ['icon' => 'ti-award', 'title' => 'Chất Lượng', 'body' => ['Chúng tôi cam kết cung cấp các dịch vụ hỗ trợ an toàn, chuyên nghiệp và đáng tin cậy, luôn đặt người tham gia làm trung tâm trong mọi hoạt động.']],
    ]
    : [
        ['icon' => 'ti-message-circle', 'title' => 'Communication', 'body' => ['We believe good support starts with clear communication. We strive to ensure participants and families feel heard, understood, and informed every step of the way.']],
        ['icon' => 'ti-world', 'title' => 'Cultural Understanding', 'body' => ['We respect and celebrate cultural diversity. We recognise that language, traditions, values, and life experiences shape how people engage with support services and their communities.']],
        ['icon' => 'ti-heart-handshake', 'title' => 'Respect', 'body' => ["We treat every participant, family member, and community member with dignity, kindness, and understanding. We respect each person's choices, preferences, and goals."]],
        ['icon' => 'ti-shield-check', 'title' => 'Trust', 'body' => ['We build strong and lasting relationships through honesty, reliability, and consistency. We believe trust is the foundation of meaningful support.']],
        ['icon' => 'ti-star', 'title' => 'Empowerment', 'body' => ['We support participants to make informed decisions, build confidence, develop independence, and achieve their personal goals.']],
        ['icon' => 'ti-users', 'title' => 'Community Connection', 'body' => ['We believe everyone deserves the opportunity to feel connected and included. We encourage participation, belonging, and meaningful engagement within the community.']],
        ['icon' => 'ti-award', 'title' => 'Quality', 'body' => ['We are committed to providing safe, professional, and reliable support that places participants at the centre of everything we do.']],
    ];

$approachItems = $isVietnamese
    ? [
        ['title' => 'Giao Tiếp Là Nền Tảng', 'body' => ['Chúng tôi tin rằng sự hỗ trợ hiệu quả luôn bắt đầu từ giao tiếp rõ ràng và thấu hiểu.', 'Đối với nhiều người và gia đình thuộc các cộng đồng đa văn hóa và đa ngôn ngữ, rào cản ngôn ngữ có thể khiến việc tiếp cận dịch vụ, hiểu thông tin và đưa ra quyết định trở nên khó khăn hơn.', 'Tại MY SUPPORT VIC, chúng tôi nỗ lực giảm thiểu những rào cản đó bằng cách cung cấp dịch vụ thông qua đội ngũ nhân viên hiểu ngôn ngữ và văn hóa của cộng đồng mà chúng tôi phục vụ. Chúng tôi tin rằng người tham gia và gia đình nên có cơ hội trao đổi bằng ngôn ngữ mà họ cảm thấy thoải mái và tự tin nhất.', 'Thông qua giao tiếp cởi mở, rõ ràng và tôn trọng, chúng tôi giúp người tham gia và gia đình cảm thấy được lắng nghe, được thấu hiểu và được đồng hành trong suốt hành trình của mình.']],
        ['title' => 'Hỗ Trợ Lấy Người Tham Gia Làm Trung Tâm', 'body' => ['Không có hai người nào hoàn toàn giống nhau.', 'Chúng tôi dành thời gian để lắng nghe, tìm hiểu điều gì là quan trọng đối với bạn và những mục tiêu mà bạn mong muốn đạt được. Từ đó, chúng tôi xây dựng các dịch vụ hỗ trợ phù hợp với lựa chọn, sở thích và hoàn cảnh riêng của từng người.', 'Mục tiêu của bạn chính là trọng tâm cho mọi hỗ trợ mà chúng tôi cung cấp.']],
        ['title' => 'Tôn Trọng Văn Hóa Và Bản Sắc Cá Nhân', 'body' => ['Văn hóa là một phần quan trọng tạo nên con người của mỗi chúng ta.', 'Chúng tôi hiểu rằng giá trị văn hóa, truyền thống gia đình, ngôn ngữ và niềm tin cá nhân đều ảnh hưởng đến cách mỗi người tiếp nhận và trải nghiệm sự hỗ trợ.', 'Đội ngũ MY SUPPORT VIC cam kết cung cấp các dịch vụ phù hợp về văn hóa, tôn trọng sự đa dạng và luôn đề cao bản sắc riêng của từng cá nhân. Chúng tôi mong muốn tạo ra một môi trường nơi mọi người đều cảm thấy được chào đón, được tôn trọng và được thấu hiểu.']],
        ['title' => 'Xây Dựng Niềm Tin Thông Qua Các Mối Quan Hệ', 'body' => ['Chúng tôi tin rằng những dịch vụ hỗ trợ tốt nhất được xây dựng trên nền tảng của sự tin tưởng.', 'Đó là lý do chúng tôi tập trung vào việc xây dựng các mối quan hệ lâu dài với người tham gia, gia đình và những người hỗ trợ xung quanh họ. Chúng tôi luôn đề cao sự trung thực, nhất quán, đáng tin cậy và tôn trọng trong mọi tương tác.', 'Khi có sự tin tưởng, việc hỗ trợ sẽ trở nên hiệu quả và ý nghĩa hơn.']],
        ['title' => 'Thúc Đẩy Sự Độc Lập Và Kết Nối Cộng Đồng', 'body' => ['Mục tiêu của chúng tôi không chỉ là hỗ trợ trong hiện tại mà còn giúp người tham gia phát triển sự tự tin, kỹ năng và khả năng tự lập trong cuộc sống.', 'Chúng tôi khuyến khích mọi người tham gia vào cộng đồng, duy trì các mối quan hệ xã hội và theo đuổi những hoạt động có ý nghĩa đối với bản thân. Chúng tôi tin rằng sự kết nối với cộng đồng đóng vai trò quan trọng trong việc nâng cao chất lượng cuộc sống và cảm giác thuộc về của mỗi người.']],
        ['title' => 'Đồng Hành Cùng Bạn Trên Hành Trình Của Mình', 'body' => ['Tại MY SUPPORT VIC, chúng tôi xem việc hỗ trợ là một mối quan hệ hợp tác.', 'Chúng tôi làm việc cùng người tham gia, gia đình, người chăm sóc và các mạng lưới hỗ trợ để đảm bảo mỗi người nhận được sự hỗ trợ phù hợp vào đúng thời điểm.', 'Thông qua sự kết hợp giữa hỗ trợ lấy người tham gia làm trung tâm, thấu hiểu văn hóa và giao tiếp hiệu quả, chúng tôi mong muốn giúp mỗi người cảm thấy tự tin hơn, kết nối hơn và có nhiều cơ hội hơn để đạt được những mục tiêu quan trọng trong cuộc sống.']],
    ]
    : [
        ['title' => 'Communication Comes First', 'body' => ['Good support begins with good communication.', 'For many people and families from culturally and linguistically diverse backgrounds, language barriers can make it difficult to access services, understand information, and make informed decisions.', 'At MY SUPPORT VIC, we work to remove these barriers by providing support through staff who understand the languages and cultures of the communities we serve. We believe participants should feel confident communicating in the language they are most comfortable with whenever possible.', 'By creating clear and open communication, we help participants and families feel informed, involved, and supported throughout their journey.']],
        ['title' => 'Person-Centred Support', 'body' => ['No two people are the same.', 'We take the time to listen, understand what is important to you, and learn about the goals you want to achieve. We then work alongside you to provide support that reflects your choices, preferences, and individual circumstances.', 'Your goals guide the support we provide.']],
        ['title' => 'Respecting Culture and Identity', 'body' => ['Culture is an important part of who we are.', 'We recognise that cultural values, traditions, family relationships, and language all influence how people experience care and support. Our team is committed to delivering services that are culturally responsive, inclusive, and respectful of every participant\'s identity and background.', 'We strive to create an environment where participants feel safe, welcomed, and understood.']],
        ['title' => 'Building Trust Through Relationships', 'body' => ['We believe the best support comes from strong relationships.', 'Our team focuses on building trust through consistency, reliability, honesty, and respect. We take the time to get to know our participants and their families because meaningful relationships help create better outcomes and a more positive support experience.']],
        ['title' => 'Supporting Independence and Community Participation', 'body' => ['Our role is not only to provide assistance but also to support participants to build confidence, develop skills, and maintain their independence wherever possible.', 'We encourage participants to stay connected with their communities, participate in meaningful activities, and pursue goals that enhance their quality of life and sense of belonging.']],
        ['title' => 'A Partnership Built Around You', 'body' => ['At MY SUPPORT VIC, we see support as a partnership.', 'We work alongside participants, families, carers, and support networks to ensure each person receives the right support at the right time.', 'By combining person-centred care, cultural understanding, and clear communication, we help people feel empowered, connected, and confident in achieving their goals.']],
    ];

$whyChooseItems = $isVietnamese
    ? []
    : [
        ['icon' => 'ti-language', 'title' => 'We Speak Your Language', 'body' => ['Communication is one of the most important parts of quality support.', 'Many participants and families feel more comfortable speaking in their preferred language, especially when discussing important matters about their care, goals, and NDIS supports.', 'Our team includes staff who speak community languages and understand the cultural backgrounds of the people we support. We work to reduce language barriers and make communication easier, clearer, and more meaningful.']],
        ['icon' => 'ti-world', 'title' => 'We Understand Cultural Diversity', 'body' => ['We proudly support people from culturally and linguistically diverse communities.', 'We understand that culture, family values, traditions, and life experiences play an important role in how people access and receive support. Our team provides services that respect and value each person\'s cultural identity.']],
        ['icon' => 'ti-ear', 'title' => 'We Take Time to Listen', 'body' => ['Every participant is unique.', 'We take the time to understand your goals, preferences, routines, and support needs. Rather than offering a one-size-fits-all approach, we tailor our services to suit what is important to you.']],
        ['icon' => 'ti-heart-handshake', 'title' => 'We Focus on Relationships', 'body' => ['We believe trust is built through consistency, reliability, and genuine care.', 'Our goal is to create long-term relationships with participants and families based on respect, open communication, and understanding.']],
        ['icon' => 'ti-trending-up', 'title' => 'We Support Your Independence', 'body' => ['We are committed to helping participants build confidence, develop skills, and maintain their independence wherever possible.', 'Our support is designed to help you work towards your goals while remaining in control of the decisions that affect your life.']],
        ['icon' => 'ti-info-circle', 'title' => 'We Make the NDIS Easier to Understand', 'body' => ['Navigating the NDIS can sometimes feel overwhelming.', 'We provide clear information, practical guidance, and ongoing support to help participants and families better understand their options and make informed decisions about their supports.']],
        ['icon' => 'ti-users', 'title' => 'We Put People First', 'body' => ['At MY SUPPORT VIC, people always come first.', 'Everything we do is guided by respect, compassion, cultural understanding, and a commitment to helping participants live with confidence, dignity, and connection to their communities.']],
    ];
?>

<div id="about-content">
  <div class="info-page about-page">
    <section class="info-hero">
      <div class="info-hero-inner">
        <p class="info-eyebrow"><?= $isVietnamese ? 'MY SUPPORT VIC' : 'MY SUPPORT VIC' ?></p>
        <h1><?= $isVietnamese ? 'Câu Chuyện Của Chúng Tôi' : 'Our Story' ?></h1>
        <p>
          <?= $isVietnamese
            ? 'Tại MY SUPPORT VIC, chúng tôi tin rằng một dịch vụ hỗ trợ chất lượng không chỉ là cung cấp dịch vụ, mà còn là xây dựng sự tin tưởng, thấu hiểu nhu cầu của từng cá nhân và giúp mỗi người cảm thấy được tôn trọng, được lắng nghe và được đồng hành.'
            : 'At MY SUPPORT VIC, we believe quality support is about more than providing a service. It is about building trust, understanding individual needs, and helping people feel respected, valued, and heard.' ?>
        </p>
        <div class="about-hero-points" aria-label="About highlights">
          <?php if ($isVietnamese): ?>
            <span>Lấy người tham gia làm trung tâm</span>
            <span>Tôn trọng văn hóa</span>
            <span>Đồng hành đáng tin cậy</span>
          <?php else: ?>
            <span>Person-centred support</span>
            <span>Culturally responsive care</span>
            <span>Trusted relationships</span>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="info-section">
      <article class="info-card about-story-card">
        <?php if ($isVietnamese): ?>
          <p>Chúng tôi hiểu rằng nhiều cá nhân và gia đình đến từ các cộng đồng đa văn hóa và đa ngôn ngữ (CALD) thường gặp nhiều khó khăn khi tiếp cận các dịch vụ hỗ trợ dành cho người khuyết tật. Rào cản ngôn ngữ, khác biệt văn hóa và sự phức tạp của hệ thống NDIS có thể khiến việc tìm kiếm thông tin và tiếp cận các dịch vụ phù hợp trở nên khó khăn hơn.</p>
          <p>Mục tiêu của chúng tôi là thu hẹp khoảng cách đó bằng cách cung cấp các dịch vụ hỗ trợ lấy người tham gia làm trung tâm, tôn trọng sự khác biệt văn hóa và đáp ứng nhu cầu của từng cá nhân. Chúng tôi đặc biệt chú trọng hỗ trợ cộng đồng đa văn hóa, trong đó có người Việt Nam và gia đình nói tiếng Việt, với đội ngũ nhân viên hỗ trợ không chỉ sử dụng được ngôn ngữ của cộng đồng mà còn thấu hiểu các giá trị văn hóa và truyền thống của họ.</p>
          <p>Tại MY SUPPORT VIC, chúng tôi luôn dành thời gian để lắng nghe mục tiêu của bạn, giao tiếp theo cách bạn cảm thấy thoải mái nhất và cung cấp các dịch vụ phù hợp với nhu cầu, mong muốn và nền tảng văn hóa của mỗi người. Chúng tôi cam kết đồng hành cùng người tham gia và gia đình để họ cảm thấy tự tin, được kết nối và có đủ điều kiện để đạt được cuộc sống mà mình mong muốn.</p>
        <?php else: ?>
          <p>We recognise that many individuals and families from culturally and linguistically diverse (CALD) communities face additional challenges when accessing disability support. Language barriers, cultural differences, and navigating the NDIS can make it difficult to access the right information and services.</p>
          <p>Our goal is to bridge that gap by providing culturally responsive, respectful, and person-centred support. We have a strong focus on supporting multicultural communities, including Vietnamese-speaking participants and families, with support workers who understand both the language and cultural values of the people they support.</p>
          <p>At MY SUPPORT VIC, we take the time to understand your goals, communicate in a way that works for you, and deliver support that reflects your individual needs, preferences, and cultural background. We are committed to helping participants and their families feel confident, connected, and empowered to achieve the life they choose.</p>
        <?php endif; ?>
      </article>
    </section>

    <section class="info-section">
      <article class="info-card">
        <h2><?= $isVietnamese ? 'Sứ Mệnh Của Chúng Tôi' : 'Our Mission' ?></h2>
        <?php if ($isVietnamese): ?>
          <p>Tại MY SUPPORT VIC, sứ mệnh của chúng tôi là giúp các dịch vụ hỗ trợ người khuyết tật trở nên dễ tiếp cận hơn đối với các cộng đồng đa văn hóa và đa ngôn ngữ.</p>
          <p>Chúng tôi cam kết xóa bỏ các rào cản về ngôn ngữ và văn hóa thông qua việc cung cấp dịch vụ hỗ trợ cá nhân hóa bởi đội ngũ nhân viên thấu hiểu ngôn ngữ, văn hóa và trải nghiệm của những người mà chúng tôi phục vụ.</p>
          <p>Thông qua giao tiếp tôn trọng, các mối quan hệ đáng tin cậy và cách tiếp cận lấy người tham gia làm trung tâm, chúng tôi hỗ trợ người tham gia và gia đình tự tin hơn trên hành trình NDIS của mình, đồng thời tăng cường sự độc lập và an tâm trong cuộc sống.</p>
        <?php else: ?>
          <p>At MY SUPPORT VIC, our mission is to make quality disability support more accessible for people from culturally and linguistically diverse communities.</p>
          <p>We are committed to breaking down language and cultural barriers by providing personalised support through a team that understands the languages, cultures, and experiences of the people we serve.</p>
          <p>Through respectful communication, trusted relationships, and person-centred support, we help participants and their families navigate their NDIS journey with confidence, independence, and peace of mind.</p>
        <?php endif; ?>
      </article>
    </section>

    <section class="info-section" id="team">
      <div class="info-heading">
        <h2><?= $isVietnamese ? 'Giá Trị Cốt Lõi' : 'Our Values' ?></h2>
      </div>
      <div class="info-grid three">
        <?php foreach ($values as $value): ?>
          <article class="info-card">
            <i class="ti <?= e($value['icon']) ?>"></i>
            <h3><?= e($value['title']) ?></h3>
            <?php foreach ($value['body'] as $paragraph): ?>
              <p><?= e($paragraph) ?></p>
            <?php endforeach; ?>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="info-section info-band">
      <div class="info-heading">
        <h2><?= $isVietnamese ? 'Cách Tiếp Cận Của Chúng Tôi' : 'Our Approach to Care' ?></h2>
        <?php if ($isVietnamese): ?>
          <p>Tại MY SUPPORT VIC, chúng tôi tin rằng sự hỗ trợ chất lượng bắt đầu từ việc thấu hiểu con người, chứ không chỉ tập trung vào dịch vụ mà họ cần.</p>
          <p>Mỗi người đều có mục tiêu, sở thích, nền tảng văn hóa và trải nghiệm sống riêng. Vì vậy, chúng tôi áp dụng phương pháp hỗ trợ lấy người tham gia làm trung tâm, đảm bảo rằng mọi dịch vụ đều được xây dựng dựa trên nhu cầu, mong muốn và hoàn cảnh của từng cá nhân.</p>
        <?php else: ?>
          <p>At MY SUPPORT VIC, we believe that quality support starts with understanding the person, not just the service they need.</p>
          <p>We know that every participant has their own goals, preferences, cultural background, and life experiences. That is why we take a personalised approach to care, ensuring that support is tailored to each individual's needs and delivered in a way that makes them feel respected, comfortable, and understood.</p>
        <?php endif; ?>
      </div>
      <div class="info-grid two">
        <?php foreach ($approachItems as $item): ?>
          <article class="info-card compact">
            <h3><?= e($item['title']) ?></h3>
            <?php foreach ($item['body'] as $paragraph): ?>
              <p><?= e($paragraph) ?></p>
            <?php endforeach; ?>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <?php if (!$isVietnamese): ?>
      <section class="info-section" id="why-choose">
        <div class="info-heading">
          <h2>Why Choose MY SUPPORT VIC</h2>
          <p>Choosing the right support provider is an important decision. At MY SUPPORT VIC, we understand that quality support is about more than just delivering services. It is about building trust, understanding individual needs, and helping people feel genuinely supported.</p>
          <p>Here is what makes MY SUPPORT VIC different.</p>
        </div>
        <div class="info-grid three">
          <?php foreach ($whyChooseItems as $item): ?>
            <article class="info-card compact">
              <i class="ti <?= e($item['icon']) ?>"></i>
              <h3><?= e($item['title']) ?></h3>
              <?php foreach ($item['body'] as $paragraph): ?>
                <p><?= e($paragraph) ?></p>
              <?php endforeach; ?>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>
  </div>
</div>
