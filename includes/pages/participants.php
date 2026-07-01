<?php
$isVietnamese = ($site['activeLanguage'] ?? 'en') === 'vn';
$participantPageKey = $participantPageKey ?? 'overview';
$resourcePageKey = $resourcePageKey ?? 'overview';
$detailPageKey = $participantPageKey !== 'overview' ? $participantPageKey : $resourcePageKey;

$steps = $isVietnamese
    ? [
        ['num' => '1', 'title' => 'Liên Hệ Đội Ngũ Của Chúng Tôi', 'desc' => 'Liên hệ với chúng tôi qua điện thoại, email hoặc biểu mẫu trên website và chia sẻ nhu cầu hỗ trợ của bạn.'],
        ['num' => '2', 'title' => 'Trao Đổi Về Mục Tiêu Và Nhu Cầu', 'desc' => 'Chúng tôi lắng nghe mục tiêu, sở thích, nhu cầu hỗ trợ hằng ngày và những điều quan trọng với bạn.'],
        ['num' => '3', 'title' => 'Chọn Dịch Vụ Phù Hợp', 'desc' => 'Cùng nhau, chúng tôi xác định các dịch vụ phù hợp nhất với mục tiêu NDIS và hoàn cảnh của bạn.'],
        ['num' => '4', 'title' => 'Bắt Đầu Nhận Hỗ Trợ', 'desc' => 'Đội ngũ của chúng tôi bắt đầu cung cấp dịch vụ và tiếp tục đồng hành cùng bạn khi nhu cầu thay đổi.'],
    ]
    : $site['steps'];

$pageContent = $isVietnamese
    ? [
        'heroEyebrow' => 'Người Tham Gia',
        'heroTitle' => 'Bắt Đầu Cùng MY SUPPORT VIC',
        'heroText' => 'Dù bạn mới tham gia NDIS hay đang tìm một nhà cung cấp phù hợp hơn, chúng tôi giúp quá trình trở nên rõ ràng, dễ hiểu và được hỗ trợ tốt hơn.',
        'heroPrimary' => 'Khám Phá Các Lựa Chọn',
        'heroSecondary' => 'Xem Tài Nguyên',
        'supportLabel' => 'Lộ Trình Người Tham Gia',
        'supportTitle' => 'Hỗ Trợ Phù Hợp Với Giai Đoạn Của Bạn',
        'supportIntro' => 'Chúng tôi hỗ trợ người tham gia và gia đình trên nhiều giai đoạn khác nhau của hành trình NDIS, với giao tiếp rõ ràng và cách tiếp cận phù hợp với từng người.',
        'supportCards' => [
            [
                'id' => 'new-participants',
                'icon' => 'ti-user-plus',
                'title' => 'Người Tham Gia Mới',
                'lead' => 'Mới Tham Gia NDIS? Chúng Tôi Luôn Sẵn Sàng Hỗ Trợ.',
                'body' => 'Bắt đầu hành trình với NDIS đôi khi có thể khiến bạn cảm thấy bối rối khi phải tìm hiểu về kế hoạch, ngân sách và các dịch vụ hỗ trợ. Tại MY SUPPORT VIC, chúng tôi giúp người tham gia mới hiểu rõ các lựa chọn của mình và tiếp cận các dịch vụ phù hợp với nhu cầu và mục tiêu cá nhân.',
                'listTitle' => 'Chúng Tôi Có Thể Hỗ Trợ',
                'list' => [
                    'Hiểu rõ kế hoạch NDIS của bạn',
                    'Tìm hiểu các dịch vụ hỗ trợ hiện có',
                    'Khám phá các lựa chọn phù hợp với mục tiêu của bạn',
                    'Hiểu sự khác biệt giữa Self-Managed và Plan-Managed',
                    'Kết nối với các dịch vụ phù hợp',
                ],
                'note' => 'Đội ngũ của chúng tôi luôn sẵn sàng hỗ trợ bằng cách giao tiếp rõ ràng và phù hợp với ngôn ngữ, văn hóa của bạn.',
            ],
            [
                'id' => 'existing-participants',
                'icon' => 'ti-refresh',
                'title' => 'Người Tham Gia Hiện Tại',
                'lead' => 'Đang Tìm Một Nhà Cung Cấp Dịch Vụ Phù Hợp Hơn?',
                'body' => 'Nếu nhu cầu của bạn đã thay đổi hoặc bạn đang tìm kiếm một đơn vị hỗ trợ thấu hiểu hơn về mục tiêu và hoàn cảnh của mình, MY SUPPORT VIC luôn sẵn sàng hỗ trợ. Chúng tôi làm việc với những người đã có kế hoạch NDIS và đang tìm kiếm các dịch vụ hỗ trợ đáng tin cậy và phù hợp hơn.',
                'listTitle' => 'Vì Sao Chọn MY SUPPORT VIC?',
                'list' => [
                    'Dịch vụ linh hoạt và cá nhân hóa',
                    'Nhân viên hiểu ngôn ngữ và văn hóa của bạn',
                    'Giao tiếp rõ ràng',
                    'Dịch vụ đáng tin cậy và tôn trọng',
                    'Tập trung vào sự độc lập và kết nối cộng đồng',
                ],
                'note' => 'Việc chuyển đổi nhà cung cấp dịch vụ thường đơn giản hơn bạn nghĩ và chúng tôi có thể hỗ trợ bạn trong quá trình đó.',
            ],
            [
                'id' => 'self-managed-participants',
                'icon' => 'ti-user-check',
                'title' => 'Người Tham Gia Tự Quản Lý',
                'lead' => 'Bạn Có Quyền Lựa Chọn Cách Nhận Dịch Vụ Hỗ Trợ',
                'body' => 'Những người tự quản lý ngân sách NDIS có quyền linh hoạt lựa chọn nhà cung cấp và dịch vụ phù hợp với nhu cầu của mình. Tại MY SUPPORT VIC, chúng tôi cung cấp các dịch vụ hỗ trợ linh hoạt và cá nhân hóa để đáp ứng mục tiêu và mong muốn của từng người.',
                'listTitle' => 'Lợi Ích Khi Làm Việc Với MY SUPPORT VIC',
                'list' => [
                    'Dịch vụ linh hoạt',
                    'Giao tiếp nhanh chóng và rõ ràng',
                    'Hỗ trợ phù hợp với mục tiêu cá nhân',
                    'Dịch vụ phù hợp với ngôn ngữ và văn hóa',
                    'Hóa đơn rõ ràng và minh bạch',
                ],
                'note' => 'Liên hệ với đội ngũ MY SUPPORT VIC để tìm hiểu thêm về các dịch vụ dành cho người tự quản lý ngân sách NDIS.',
            ],
            [
                'id' => 'plan-managed-participants',
                'icon' => 'ti-file-invoice',
                'title' => 'Người Tham Gia Được Quản Lý Kế Hoạch',
                'lead' => 'Linh Hoạt Trong Việc Lựa Chọn Dịch Vụ Hỗ Trợ',
                'body' => 'Nếu bạn đang sử dụng dịch vụ quản lý kế hoạch (Plan Management), bạn có thể lựa chọn các nhà cung cấp phù hợp với nhu cầu của mình trong khi các hóa đơn được xử lý bởi đơn vị quản lý kế hoạch. MY SUPPORT VIC thường xuyên làm việc với người tham gia được quản lý kế hoạch và cung cấp quy trình đơn giản, thuận tiện.',
                'listTitle' => 'Làm Việc Với Chúng Tôi Rất Đơn Giản',
                'list' => [
                    'Hóa đơn rõ ràng và chính xác',
                    'Làm việc trực tiếp với đơn vị quản lý kế hoạch',
                    'Giao tiếp nhanh chóng và minh bạch',
                    'Dịch vụ linh hoạt',
                    'Hỗ trợ phù hợp với mục tiêu cá nhân',
                ],
                'note' => 'Chúng tôi luôn sẵn sàng trao đổi về cách các dịch vụ của MY SUPPORT VIC có thể phù hợp với kế hoạch NDIS của bạn.',
            ],
        ],
        'paymentsLabel' => 'Thanh Toán',
        'paymentsTitle' => 'Thanh Toán & Cách Thức Hoạt Động',
        'paymentsIntro' => 'Tại MY SUPPORT VIC, chúng tôi mong muốn giúp việc sử dụng dịch vụ và thanh toán trở nên dễ hiểu và thuận tiện.',
        'paymentsSupports' => [
            'Người tham gia tự quản lý (Self-Managed)',
            'Người tham gia được quản lý kế hoạch (Plan-Managed)',
        ],
        'paymentsHowTitle' => 'Cách Thanh Toán Hoạt Động',
        'paymentCards' => [
            ['id' => 'payments-self-managed', 'icon' => 'ti-user-check', 'title' => 'Self-Managed', 'body' => 'Sau khi dịch vụ được cung cấp, MY SUPPORT VIC sẽ gửi hóa đơn trực tiếp cho bạn. Sau đó, bạn có thể yêu cầu thanh toán từ nguồn ngân sách NDIS của mình.'],
            ['id' => 'payments-plan-managed', 'icon' => 'ti-file-invoice', 'title' => 'Plan-Managed', 'body' => 'Chúng tôi sẽ gửi hóa đơn trực tiếp cho đơn vị quản lý kế hoạch của bạn để xử lý thanh toán, giúp quá trình này trở nên đơn giản và thuận tiện hơn.'],
            ['id' => 'payments-questions', 'icon' => 'ti-help-circle', 'title' => 'Cần Hỗ Trợ?', 'body' => 'Nếu bạn có bất kỳ câu hỏi nào về thanh toán hoặc cách sử dụng dịch vụ, đội ngũ MY SUPPORT VIC luôn sẵn sàng hỗ trợ.'],
        ],
        'guideLabel' => 'Hướng Dẫn',
        'guideTitle' => 'Bắt Đầu Thật Dễ Dàng',
        'guideIntro' => 'Bốn bước đơn giản để bắt đầu nhận hỗ trợ với sự tự tin.',
        'resourcesLabel' => 'Tài Nguyên',
        'resourcesTitle' => 'Tài Nguyên Dành Cho Người Tham Gia Và Gia Đình',
        'resourcesIntro' => 'Thông tin và hướng dẫn hữu ích giúp bạn hiểu rõ hơn về hành trình NDIS.',
        'resources' => [
            ['id' => 'getting-started-guide', 'icon' => 'ti-book', 'title' => 'Getting Started Guide', 'body' => 'Hướng dẫn cơ bản từ bước liên hệ đầu tiên với đội ngũ chúng tôi đến việc thiết lập các hỗ trợ phù hợp.'],
            ['id' => 'understanding-your-ndis-plan', 'icon' => 'ti-clipboard-text', 'title' => 'Understanding Your NDIS Plan', 'body' => 'Tìm hiểu kế hoạch NDIS của bạn bao gồm những gì, cách ngân sách được sử dụng và cách chọn đúng hỗ trợ.'],
            ['id' => 'self-managed-vs-plan-managed', 'icon' => 'ti-arrows-left-right', 'title' => 'Self-Managed vs Plan-Managed', 'body' => 'So sánh hai lựa chọn quản lý ngân sách để hiểu cách mỗi hình thức phù hợp với nhu cầu và mức độ linh hoạt của bạn.'],
            ['id' => 'faq', 'icon' => 'ti-help-circle', 'title' => 'FAQs', 'body' => 'Các câu hỏi phổ biến về bắt đầu nhận hỗ trợ, hóa đơn, thay đổi nhà cung cấp và hỗ trợ phù hợp về văn hóa.'],
            ['id' => 'participant-rights', 'icon' => 'ti-scale', 'title' => 'Participant Rights', 'body' => 'Hiểu quyền được tôn trọng, được cung cấp thông tin rõ ràng, được đưa ra lựa chọn và thay đổi nhà cung cấp khi cần.'],
            ['id' => 'vietnamese-resources', 'icon' => 'ti-language', 'title' => 'Vietnamese Resources', 'body' => 'Tài nguyên hỗ trợ giúp người Việt và gia đình cảm thấy dễ tiếp cận hơn với thông tin, dịch vụ và hệ thống NDIS.'],
        ],
        'faqLabel' => 'Câu Hỏi Thường Gặp',
        'faqTitle' => 'Những Câu Hỏi Thường Gặp',
        'faqIntro' => 'Giải đáp một số câu hỏi phổ biến từ người tham gia và gia đình.',
        'faqs' => [
            ['q' => 'Nếu tôi mới tham gia NDIS thì sao?', 'a' => 'Chúng tôi hỗ trợ người tham gia mới hiểu kế hoạch, ngân sách và các lựa chọn dịch vụ để quá trình trở nên rõ ràng và ít áp lực hơn.'],
            ['q' => 'Các bạn có hỗ trợ cả self-managed và plan-managed không?', 'a' => 'Có. Chúng tôi hỗ trợ cả hai hình thức và cung cấp quy trình làm việc rõ ràng để bạn dễ theo dõi.'],
            ['q' => 'Tôi có thể đổi nhà cung cấp hiện tại không?', 'a' => 'Có. Việc chuyển đổi nhà cung cấp thường khá đơn giản và đội ngũ của chúng tôi có thể hướng dẫn bạn từng bước.'],
            ['q' => 'Các bạn có cung cấp hỗ trợ phù hợp với văn hóa không?', 'a' => 'Có. Chúng tôi cung cấp dịch vụ tôn trọng ngôn ngữ, văn hóa, giá trị gia đình và nhu cầu riêng của từng người.'],
            ['q' => 'Làm thế nào để bắt đầu?', 'a' => 'Bạn có thể liên hệ với đội ngũ của chúng tôi qua điện thoại, email hoặc website. Chúng tôi sẽ trao đổi về mục tiêu và hướng dẫn các bước tiếp theo.'],
        ],
        'ctaTitle' => 'Sẵn Sàng Trao Đổi Với MY SUPPORT VIC?',
        'ctaText' => 'Đội ngũ của chúng tôi luôn sẵn sàng trả lời câu hỏi và giúp bạn lựa chọn hỗ trợ phù hợp với mục tiêu của mình.',
        'ctaButton' => 'Liên Hệ Đội Ngũ Của Chúng Tôi',
        'ctaPhone' => 'hoặc gọi cho chúng tôi theo số',
    ]
    : [
        'heroEyebrow' => 'Participants',
        'heroTitle' => 'Getting Started With MY SUPPORT VIC',
        'heroText' => 'Whether you are new to the NDIS or changing providers, we make the process feel clear, respectful, and well supported.',
        'heroPrimary' => 'Explore Participant Options',
        'heroSecondary' => 'View Resources',
        'supportLabel' => 'Participant Pathways',
        'supportTitle' => 'Support for Different Stages of Your NDIS Journey',
        'supportIntro' => 'We support participants and families at different stages of the NDIS journey, with practical guidance and support arrangements that are easier to understand.',
        'supportCards' => [
            [
                'id' => 'new-participants',
                'icon' => 'ti-user-plus',
                'title' => 'New Participants',
                'lead' => 'New to the NDIS? We\'re Here to Help.',
                'body' => 'Starting your NDIS journey can feel overwhelming, especially when you\'re trying to understand plans, funding, and support options for the first time. At MY SUPPORT VIC, we help new participants understand their options and access supports that align with their goals and needs.',
                'listTitle' => 'How We Can Help',
                'list' => [
                    'Understand your NDIS plan',
                    'Learn about available support services',
                    'Explore support options that suit your goals',
                    'Understand self-managed and plan-managed funding',
                    'Connect with supports that meet your needs',
                ],
                'note' => 'Our team is committed to providing clear communication and culturally responsive support to help you feel confident throughout the process.',
            ],
            [
                'id' => 'existing-participants',
                'icon' => 'ti-refresh',
                'title' => 'Existing Participants',
                'lead' => 'Looking for a New Support Provider?',
                'body' => 'Whether your needs have changed or you\'re looking for a provider who better understands your goals, MY SUPPORT VIC can help. We work with participants who are already receiving NDIS supports and are looking for reliable, person-centred services.',
                'listTitle' => 'Why Choose MY SUPPORT VIC?',
                'list' => [
                    'Flexible and personalised support',
                    'Staff who understand your language and culture',
                    'Clear communication',
                    'Respectful and reliable service',
                    'Focus on independence and community participation',
                ],
                'note' => 'Changing providers can be simple, and our team can help guide you through the process.',
            ],
            [
                'id' => 'self-managed-participants',
                'icon' => 'ti-user-check',
                'title' => 'Self-Managed Participants',
                'lead' => 'You Choose How Your Supports Are Delivered',
                'body' => 'Self-managed participants have the flexibility to choose the providers and supports that best suit their needs. At MY SUPPORT VIC, we work closely with self-managed participants to deliver flexible, personalised support that aligns with their goals and preferences.',
                'listTitle' => 'Benefits of Working With MY SUPPORT VIC',
                'list' => [
                    'Flexible service arrangements',
                    'Responsive communication',
                    'Support tailored to your goals',
                    'Culturally responsive services',
                    'Clear and transparent invoicing',
                ],
                'note' => 'We aim to make accessing support simple and straightforward.',
            ],
            [
                'id' => 'plan-managed-participants',
                'icon' => 'ti-file-invoice',
                'title' => 'Plan-Managed Participants',
                'lead' => 'Flexible Support With Professional Financial Management',
                'body' => 'Plan-managed participants enjoy flexibility in choosing providers while having their invoices managed by a Plan Manager. MY SUPPORT VIC works with many plan-managed participants and provides a straightforward and efficient service experience.',
                'listTitle' => 'Working With Us Is Easy',
                'list' => [
                    'We provide clear invoices',
                    'We work directly with your Plan Manager',
                    'We communicate clearly and promptly',
                    'We provide flexible support options',
                    'We respect your individual goals and preferences',
                ],
                'note' => 'Our goal is to make receiving support as simple and stress-free as possible.',
            ],
        ],
        'paymentsLabel' => 'Payments',
        'paymentsTitle' => 'Payments & How It Works',
        'paymentsIntro' => 'At MY SUPPORT VIC, we aim to make payments and service arrangements easy to understand.',
        'paymentsSupports' => [
            'Self-Managed Participants',
            'Plan-Managed Participants',
        ],
        'paymentsHowTitle' => 'How Payments Work',
        'paymentCards' => [
            ['id' => 'payments-self-managed', 'icon' => 'ti-user-check', 'title' => 'Self-Managed Participants', 'body' => 'After services are delivered, MY SUPPORT VIC will provide an invoice directly to you. You can then claim the cost through your NDIS funding.'],
            ['id' => 'payments-plan-managed', 'icon' => 'ti-file-invoice', 'title' => 'Plan-Managed Participants', 'body' => 'We will send invoices directly to your Plan Manager for processing and payment, making the process simple and convenient.'],
            ['id' => 'payments-questions', 'icon' => 'ti-help-circle', 'title' => 'Questions?', 'body' => 'Our team is happy to explain how payments work and answer any questions you may have.'],
        ],
        'guideLabel' => 'Guide',
        'guideTitle' => 'Getting Started Is Easy',
        'guideIntro' => 'Four simple steps to begin support with confidence.',
        'resourcesLabel' => 'Resources',
        'resourcesTitle' => 'Resources for Participants and Families',
        'resourcesIntro' => 'Helpful guides and information to support better decisions throughout your NDIS journey.',
        'resources' => [
            ['id' => 'getting-started-guide', 'icon' => 'ti-book', 'title' => 'Getting Started Guide', 'body' => 'A practical guide to the first steps, from your first conversation with our team through to setting up the right supports.'],
            ['id' => 'understanding-your-ndis-plan', 'icon' => 'ti-clipboard-text', 'title' => 'Understanding Your NDIS Plan', 'body' => 'Learn what your plan includes, how supports are funded, and how to make the most of your approved goals and budgets.'],
            ['id' => 'self-managed-vs-plan-managed', 'icon' => 'ti-arrows-left-right', 'title' => 'Self-Managed vs Plan-Managed', 'body' => 'Compare the two funding arrangements so you can better understand flexibility, invoicing, and what suits your needs.'],
            ['id' => 'faq', 'icon' => 'ti-help-circle', 'title' => 'FAQs', 'body' => 'Answers to common questions about getting started, payments, changing providers, and culturally responsive support.'],
            ['id' => 'participant-rights', 'icon' => 'ti-scale', 'title' => 'Participant Rights', 'body' => 'Understand your right to clear information, respectful support, informed choices, and the freedom to change providers when needed.'],
            ['id' => 'vietnamese-resources', 'icon' => 'ti-language', 'title' => 'Vietnamese Resources', 'body' => 'Helpful content that can make NDIS information easier to understand for Vietnamese-speaking participants and families.'],
        ],
        'faqLabel' => 'FAQs',
        'faqTitle' => 'Frequently Asked Questions',
        'faqIntro' => 'Find answers to common questions from participants and families.',
        'faqs' => [
            ['q' => 'Can you help if I am new to the NDIS?', 'a' => 'Yes. We help new participants understand plans, funding options, and available supports so the process feels clearer and less overwhelming.'],
            ['q' => 'Do you support self-managed and plan-managed participants?', 'a' => 'Yes. We support both self-managed and plan-managed participants and provide clear invoicing to keep things simple.'],
            ['q' => 'Can I change from my current provider?', 'a' => 'Yes. Changing providers is often straightforward, and our team can guide you through each step.'],
            ['q' => 'Do you provide culturally responsive support?', 'a' => 'Yes. We provide support that respects language, culture, family values, and individual preferences.'],
            ['q' => 'How do I get started?', 'a' => 'Contact our team by phone, email, or website. We will discuss your goals and guide you through the next steps.'],
        ],
        'ctaTitle' => 'Ready to Talk With MY SUPPORT VIC?',
        'ctaText' => 'Our team is here to answer your questions and help you choose support that fits your goals.',
        'ctaButton' => 'Contact Our Team',
        'ctaPhone' => 'or call us at',
    ];

$participantDetailPages = [
    'new-participants' => [
        'heroEyebrow' => $pageContent['heroEyebrow'],
        'heroTitle' => $pageContent['supportCards'][0]['title'],
        'heroText' => $pageContent['supportCards'][0]['lead'],
        'intro' => [$pageContent['supportCards'][0]['body']],
        'sectionTitle' => $pageContent['supportCards'][0]['listTitle'],
        'list' => $pageContent['supportCards'][0]['list'],
        'note' => $pageContent['supportCards'][0]['note'],
        'ctaTitle' => $isVietnamese ? 'Bắt Đầu Ngay Hôm Nay' : 'Get Started',
        'ctaText' => $isVietnamese
            ? 'Liên hệ với MY SUPPORT VIC để tìm hiểu cách chúng tôi có thể đồng hành cùng bạn trên hành trình NDIS.'
            : 'If you are new to the NDIS and would like to learn more about how MY SUPPORT VIC can support you, contact our team today.',
    ],
    'existing-participants' => [
        'heroEyebrow' => $pageContent['heroEyebrow'],
        'heroTitle' => $pageContent['supportCards'][1]['title'],
        'heroText' => $pageContent['supportCards'][1]['lead'],
        'intro' => [$pageContent['supportCards'][1]['body']],
        'sectionTitle' => $pageContent['supportCards'][1]['listTitle'],
        'list' => $pageContent['supportCards'][1]['list'],
        'note' => $pageContent['supportCards'][1]['note'],
        'ctaTitle' => $isVietnamese ? 'Liên Hệ Với Chúng Tôi' : 'Let\'s Talk',
        'ctaText' => $isVietnamese
            ? 'Hãy trao đổi với đội ngũ MY SUPPORT VIC để tìm hiểu cách chúng tôi có thể hỗ trợ bạn tốt hơn.'
            : 'Contact us today to discuss how MY SUPPORT VIC can support your current goals and needs.',
    ],
    'self-managed-participants' => [
        'heroEyebrow' => $pageContent['heroEyebrow'],
        'heroTitle' => $pageContent['supportCards'][2]['title'],
        'heroText' => $pageContent['supportCards'][2]['lead'],
        'intro' => [$pageContent['supportCards'][2]['body']],
        'sectionTitle' => $pageContent['supportCards'][2]['listTitle'],
        'list' => $pageContent['supportCards'][2]['list'],
        'note' => $pageContent['supportCards'][2]['note'],
        'ctaTitle' => $isVietnamese ? 'Liên Hệ Với Chúng Tôi' : 'Contact Us',
        'ctaText' => $isVietnamese
            ? 'Liên hệ với đội ngũ MY SUPPORT VIC để tìm hiểu thêm về các dịch vụ dành cho người tự quản lý ngân sách NDIS.'
            : 'Speak with our team to learn more about our services for self-managed participants.',
    ],
    'plan-managed-participants' => [
        'heroEyebrow' => $pageContent['heroEyebrow'],
        'heroTitle' => $pageContent['supportCards'][3]['title'],
        'heroText' => $pageContent['supportCards'][3]['lead'],
        'intro' => [$pageContent['supportCards'][3]['body']],
        'sectionTitle' => $pageContent['supportCards'][3]['listTitle'],
        'list' => $pageContent['supportCards'][3]['list'],
        'note' => $pageContent['supportCards'][3]['note'],
        'ctaTitle' => $isVietnamese ? 'Liên Hệ Với Chúng Tôi' : 'Contact Our Team',
        'ctaText' => $isVietnamese
            ? 'Chúng tôi luôn sẵn sàng trao đổi về cách các dịch vụ của MY SUPPORT VIC có thể phù hợp với kế hoạch NDIS của bạn.'
            : 'We are happy to discuss how our services can fit within your NDIS plan.',
    ],
    'payments-how-it-works' => [
        'heroEyebrow' => $pageContent['paymentsLabel'],
        'heroTitle' => $pageContent['paymentsTitle'],
        'heroText' => $pageContent['paymentsIntro'],
        'intro' => [],
        'sectionTitle' => $pageContent['paymentsHowTitle'],
        'list' => $pageContent['paymentsSupports'],
        'note' => '',
        'paymentCards' => $pageContent['paymentCards'],
        'ctaTitle' => $isVietnamese ? 'Cần Hỗ Trợ?' : 'Questions?',
        'ctaText' => $isVietnamese
            ? 'Nếu bạn có bất kỳ câu hỏi nào về thanh toán hoặc cách sử dụng dịch vụ, đội ngũ MY SUPPORT VIC luôn sẵn sàng hỗ trợ.'
            : 'Our team is happy to explain how payments work and answer any questions you may have.',
    ],
];

  $resourceRouteMap = [
    'getting-started-guide' => $routes['resourcesGettingStarted'],
    'understanding-your-ndis-plan' => $routes['resourcesUnderstandingPlan'],
    'self-managed-vs-plan-managed' => $routes['resourcesCompareManaged'],
    'faqs' => $routes['resourcesFaq'],
    'participant-rights' => $routes['resourcesRights'],
    'vietnamese-resources' => $routes['resourcesVietnamese'],
  ];

  $resourceDetailPages = [
    'getting-started-guide' => [
      'heroEyebrow' => $pageContent['resourcesLabel'],
      'heroTitle' => $pageContent['resources'][0]['title'],
      'heroText' => $pageContent['resources'][0]['body'],
      'intro' => $isVietnamese
        ? [
          'Bắt đầu với NDIS sẽ dễ dàng hơn khi bạn có một quy trình rõ ràng, người hỗ trợ phù hợp và các bước tiếp theo được giải thích bằng ngôn ngữ dễ hiểu.',
          'Đội ngũ MY SUPPORT VIC hỗ trợ bạn từ cuộc trò chuyện đầu tiên đến khi các dịch vụ phù hợp được thiết lập và vận hành ổn định.',
        ]
        : [
          'Starting with the NDIS becomes much easier when the process is explained clearly and you know which steps come first.',
          'MY SUPPORT VIC helps participants and families move from first contact to active support with practical guidance and clear communication.',
        ],
      'sectionTitle' => $isVietnamese ? 'Các Bước Đầu Tiên Hữu Ích' : 'Helpful First Steps',
      'list' => array_map(static fn (array $step): string => $step['title'] . ' - ' . $step['desc'], $steps),
      'note' => $isVietnamese
        ? 'Nếu bạn chưa chắc nên bắt đầu từ đâu, chỉ cần liên hệ với đội ngũ của chúng tôi và chúng tôi sẽ cùng bạn đi qua từng bước.'
        : 'If you are not sure where to begin, our team can walk through the first steps with you at a pace that feels comfortable.',
      'ctaTitle' => $isVietnamese ? 'Sẵn Sàng Bắt Đầu?' : 'Ready to Get Started?',
      'ctaText' => $isVietnamese
        ? 'Hãy trao đổi với chúng tôi để xác định những hỗ trợ phù hợp nhất cho mục tiêu và hoàn cảnh của bạn.'
        : 'Talk with our team about the supports, goals, and service arrangements that fit your situation best.',
    ],
    'understanding-your-ndis-plan' => [
      'heroEyebrow' => $pageContent['resourcesLabel'],
      'heroTitle' => $pageContent['resources'][1]['title'],
      'heroText' => $pageContent['resources'][1]['body'],
      'intro' => $isVietnamese
        ? [
          'Hiểu kế hoạch NDIS của bạn là bước quan trọng để sử dụng ngân sách hiệu quả và lựa chọn đúng dịch vụ hỗ trợ.',
          'Chúng tôi giúp bạn hiểu các mục tiêu, danh mục hỗ trợ và cách các dịch vụ thực tế có thể phù hợp với kế hoạch của bạn.',
        ]
        : [
          'Understanding your NDIS plan helps you make better decisions about supports, timing, and how your budget can be used.',
          'We help participants and families understand goals, funding categories, and how approved supports connect back to day-to-day needs.',
        ],
      'sectionTitle' => $isVietnamese ? 'Những Điều Nên Xem Trong Kế Hoạch' : 'What to Look For in Your Plan',
      'list' => $isVietnamese
        ? [
          'Mục tiêu của bạn nói gì về cuộc sống hằng ngày, sự độc lập và tham gia cộng đồng?',
          'Những danh mục ngân sách nào áp dụng cho các dịch vụ bạn đang cân nhắc?',
          'Bạn cần sự linh hoạt nào về lịch trình, giao tiếp hoặc hỗ trợ phù hợp văn hóa?',
          'Những dịch vụ nào nên được ưu tiên trước để tạo kết quả tốt nhất?',
        ]
        : [
          'What your goals say about independence, daily living, and community participation.',
          'Which budget categories apply to the supports you are considering.',
          'What flexibility you need around scheduling, communication, or culturally responsive support.',
          'Which supports should be prioritised first to create the strongest outcome.',
        ],
      'note' => $isVietnamese
        ? 'Nếu có phần nào trong kế hoạch khiến bạn thấy khó hiểu, chúng tôi có thể giải thích bằng ngôn ngữ rõ ràng hơn.'
        : 'If any part of your plan feels unclear, we can help explain it in plain language.',
      'ctaTitle' => $isVietnamese ? 'Muốn Hiểu Rõ Kế Hoạch Hơn?' : 'Need Help Understanding Your Plan?',
      'ctaText' => $isVietnamese
        ? 'Liên hệ với đội ngũ của chúng tôi để trao đổi về kế hoạch, mục tiêu và các dịch vụ có thể phù hợp với bạn.'
        : 'Contact our team to talk through your plan, goals, and the support options that may fit best.',
    ],
    'self-managed-vs-plan-managed' => [
      'heroEyebrow' => $pageContent['resourcesLabel'],
      'heroTitle' => $pageContent['resources'][2]['title'],
      'heroText' => $pageContent['resources'][2]['body'],
      'intro' => $isVietnamese
        ? [
          'Cả hai hình thức quản lý ngân sách đều có lợi ích riêng. Điều quan trọng là chọn cách phù hợp với mức độ linh hoạt, thời gian và kiểu hỗ trợ bạn muốn.',
        ]
        : [
          'Both funding arrangements can work well. The best option depends on how much flexibility, administration, and support oversight you want.',
        ],
      'sectionTitle' => $isVietnamese ? 'So Sánh Nhanh' : 'Quick Comparison',
      'comparisonCards' => $pageContent['paymentCards'],
      'list' => $isVietnamese
        ? [
          'Self-Managed phù hợp khi bạn muốn trực tiếp kiểm soát hóa đơn và lựa chọn nhà cung cấp.',
          'Plan-Managed phù hợp khi bạn muốn sự linh hoạt nhưng vẫn có đơn vị hỗ trợ xử lý hóa đơn.',
          'Cả hai đều có thể kết hợp tốt với các dịch vụ cá nhân hóa và phù hợp văn hóa.',
        ]
        : [
          'Self-managed can suit participants who want direct control over invoices and provider choices.',
          'Plan-managed can suit participants who want flexibility while a Plan Manager handles invoices.',
          'Both arrangements can work well with personalised and culturally responsive support.',
        ],
      'note' => $isVietnamese
        ? 'Nếu bạn chưa chắc hình thức nào phù hợp, chúng tôi có thể giải thích ưu điểm thực tế của từng lựa chọn.'
        : 'If you are unsure which arrangement suits you, we can explain the practical differences in a simple way.',
      'ctaTitle' => $isVietnamese ? 'Cần So Sánh Rõ Hơn?' : 'Want Help Comparing Your Options?',
      'ctaText' => $isVietnamese
        ? 'Trao đổi với đội ngũ của chúng tôi để tìm hình thức phù hợp nhất với nhu cầu của bạn.'
        : 'Speak with our team about which arrangement is likely to work best for your needs and preferences.',
    ],
    'faqs' => [
      'heroEyebrow' => $pageContent['faqLabel'],
      'heroTitle' => $pageContent['faqTitle'],
      'heroText' => $pageContent['faqIntro'],
      'intro' => [],
      'sectionTitle' => $isVietnamese ? 'Câu Trả Lời Nhanh' : 'Quick Answers',
      'faqItems' => $pageContent['faqs'],
      'list' => [],
      'note' => '',
      'ctaTitle' => $isVietnamese ? 'Bạn Có Câu Hỏi Khác?' : 'Have Another Question?',
      'ctaText' => $isVietnamese
        ? 'Liên hệ với đội ngũ của chúng tôi nếu bạn muốn trao đổi trực tiếp về kế hoạch hoặc dịch vụ hỗ trợ.'
        : 'Contact our team if you would like to talk through your situation, plan, or support options directly.',
    ],
    'participant-rights' => [
      'heroEyebrow' => $pageContent['resourcesLabel'],
      'heroTitle' => $pageContent['resources'][4]['title'],
      'heroText' => $pageContent['resources'][4]['body'],
      'intro' => $isVietnamese
        ? [
          'Mỗi người tham gia có quyền được lắng nghe, được tôn trọng và được cung cấp thông tin rõ ràng để đưa ra quyết định phù hợp với cuộc sống của mình.',
        ]
        : [
          'Every participant has the right to feel informed, respected, and included in decisions about their supports.',
        ],
      'sectionTitle' => $isVietnamese ? 'Những Quyền Cơ Bản Của Bạn' : 'Your Core Rights',
      'list' => $isVietnamese
        ? [
          'Được giao tiếp rõ ràng và dễ hiểu về dịch vụ, lịch trình và chi phí.',
          'Được đối xử với sự tôn trọng, phẩm giá và sự nhạy bén về văn hóa.',
          'Được tham gia vào các quyết định liên quan đến mục tiêu và hỗ trợ của bạn.',
          'Được thay đổi nhà cung cấp nếu dịch vụ hiện tại không còn phù hợp.',
          'Được đặt câu hỏi và nhận phản hồi minh bạch khi có điều gì chưa rõ.',
        ]
        : [
          'To receive clear and understandable information about services, schedules, and costs.',
          'To be treated with dignity, respect, and cultural sensitivity.',
          'To be involved in decisions about your goals and supports.',
          'To change providers if your current arrangement is no longer the right fit.',
          'To ask questions and receive transparent answers when something is unclear.',
        ],
      'note' => $isVietnamese
        ? 'Một dịch vụ tốt không chỉ cung cấp hỗ trợ, mà còn giúp bạn cảm thấy an tâm khi đưa ra lựa chọn.'
        : 'Good support is not only about service delivery, but also about helping you feel confident in your choices.',
      'ctaTitle' => $isVietnamese ? 'Muốn Nói Chuyện Với Một Đội Ngũ Tôn Trọng Quyền Của Bạn?' : 'Want Support That Respects Your Rights?',
      'ctaText' => $isVietnamese
        ? 'Liên hệ với chúng tôi để trao đổi về cách MY SUPPORT VIC cung cấp dịch vụ tôn trọng lựa chọn và tiếng nói của bạn.'
        : 'Talk with us about how MY SUPPORT VIC delivers support with respect, transparency, and participant choice at the centre.',
    ],
    'vietnamese-resources' => [
      'heroEyebrow' => $pageContent['resourcesLabel'],
      'heroTitle' => $pageContent['resources'][5]['title'],
      'heroText' => $pageContent['resources'][5]['body'],
      'intro' => $isVietnamese
        ? [
          'Chúng tôi hiểu rằng việc tiếp cận thông tin bằng tiếng Việt có thể giúp người tham gia và gia đình cảm thấy tự tin hơn khi làm việc với hệ thống NDIS.',
          'MY SUPPORT VIC tập trung vào giao tiếp rõ ràng, tôn trọng văn hóa và hỗ trợ gia đình trong suốt quá trình sử dụng dịch vụ.',
        ]
        : [
          'Vietnamese-speaking participants and families often feel more confident when important information is available in familiar language and with cultural understanding.',
          'MY SUPPORT VIC aims to reduce barriers through clearer communication, respectful support, and practical guidance for families.',
        ],
      'sectionTitle' => $isVietnamese ? 'Những Hỗ Trợ Hữu Ích' : 'Helpful Supports',
      'list' => $isVietnamese
        ? [
          'Giải thích kế hoạch và dịch vụ bằng ngôn ngữ dễ hiểu.',
          'Hỗ trợ giao tiếp phù hợp với gia đình và văn hóa Việt Nam.',
          'Hướng dẫn cách bắt đầu hoặc thay đổi nhà cung cấp dịch vụ.',
          'Giúp người tham gia cảm thấy thoải mái hơn khi đặt câu hỏi và đưa ra lựa chọn.',
        ]
        : [
          'Explaining plans and services in simpler, more accessible language.',
          'Supporting communication in ways that respect Vietnamese family and cultural contexts.',
          'Guiding participants through getting started or changing providers.',
          'Helping participants feel more comfortable asking questions and making decisions.',
        ],
      'note' => $isVietnamese
        ? 'Nếu gia đình bạn cần thông tin rõ ràng hơn bằng tiếng Việt, đội ngũ của chúng tôi luôn sẵn sàng hỗ trợ.'
        : 'If your family needs clearer support in Vietnamese, our team is here to help.',
      'ctaTitle' => $isVietnamese ? 'Cần Hỗ Trợ Bằng Tiếng Việt?' : 'Need Support in Vietnamese?',
      'ctaText' => $isVietnamese
        ? 'Hãy liên hệ với MY SUPPORT VIC để tìm hiểu cách chúng tôi hỗ trợ người tham gia và gia đình người Việt.'
        : 'Contact MY SUPPORT VIC to learn how we support Vietnamese-speaking participants and families.',
    ],
  ];
?>

<div id="participants-content">
  <div class="participants-page">
    <?php if ($detailPageKey !== 'overview' && (isset($participantDetailPages[$detailPageKey]) || isset($resourceDetailPages[$detailPageKey]))): ?>
      <?php
      $detail = $participantDetailPages[$detailPageKey] ?? $resourceDetailPages[$detailPageKey];
      $isResourceDetail = isset($resourceDetailPages[$detailPageKey]);
      ?>
      <section class="participants-hero participants-hero--detail">
        <div class="participants-hero__inner">
          <p class="participants-hero__eyebrow"><?= e($detail['heroEyebrow']) ?></p>
          <h1><?= e($detail['heroTitle']) ?></h1>
          <p><?= e($detail['heroText']) ?></p>
          <div class="participants-hero__actions">
        <a href="<?= e($isResourceDetail ? $routes['participants'] . '#resources' : $routes['participants']) ?>" class="btn btn--primary"><?= $isResourceDetail ? ($isVietnamese ? 'Quay Lại Mục Tài Nguyên' : 'Back to Resources') : ($isVietnamese ? 'Quay Lại Trang Participants' : 'Back to Participants') ?></a>
            <a href="<?= e($routes['contact']) ?>" class="btn btn--ghost participants-hero__ghost"><?= $isVietnamese ? 'Liên Hệ Đội Ngũ' : 'Contact Our Team' ?></a>
          </div>
        </div>
      </section>

      <section class="participants-section participants-section--detail">
        <div class="participants-detail-card">
          <?php foreach ($detail['intro'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>

          <?php if (!empty($detail['sectionTitle'])): ?>
            <h2><?= e($detail['sectionTitle']) ?></h2>
          <?php endif; ?>

          <?php if (!empty($detail['list'])): ?>
            <ul class="participants-bullet-list">
              <?php foreach ($detail['list'] as $item): ?>
                <li><?= e($item) ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <?php if (!empty($detail['note'])): ?>
            <p class="participants-detail-card__note"><?= e($detail['note']) ?></p>
          <?php endif; ?>
        </div>

        <?php if (!empty($detail['paymentCards'])): ?>
          <div class="participants-payments-grid participants-payments-grid--detail">
            <?php foreach ($detail['paymentCards'] as $card): ?>
              <article class="participants-payment-card">
                <i class="ti <?= e($card['icon']) ?> participants-payment-card__icon"></i>
                <h3><?= e($card['title']) ?></h3>
                <p><?= e($card['body']) ?></p>
              </article>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($detail['comparisonCards'])): ?>
          <div class="participants-payments-grid participants-payments-grid--detail">
            <?php foreach ($detail['comparisonCards'] as $card): ?>
              <article class="participants-payment-card">
                <i class="ti <?= e($card['icon']) ?> participants-payment-card__icon"></i>
                <h3><?= e($card['title']) ?></h3>
                <p><?= e($card['body']) ?></p>
              </article>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($detail['faqItems'])): ?>
          <div class="participants-faq__list participants-faq__list--detail">
            <?php foreach ($detail['faqItems'] as $faq): ?>
              <div class="participants-faq-item">
                <div class="participants-faq-item__question" onclick="this.parentElement.querySelector('[data-answer]').style.display = this.parentElement.querySelector('[data-answer]').style.display === 'none' ? 'block' : 'none'; this.parentElement.classList.toggle('active');">
                  <h4><?= e($faq['q']) ?></h4>
                  <i class="ti ti-chevron-down participants-faq-item__icon"></i>
                </div>
                <div data-answer class="participants-faq-item__answer" style="display: none;">
                  <?= e($faq['a']) ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </section>

      <section class="participants-cta">
        <div class="participants-cta__inner">
          <h2><?= e($detail['ctaTitle']) ?></h2>
          <p><?= e($detail['ctaText']) ?></p>
          <a href="<?= e($routes['contact']) ?>" class="btn btn--primary participants-cta__button"><?= e($pageContent['ctaButton']) ?></a>
        </div>
      </section>
    <?php else: ?>
    <section class="participants-hero">
      <div class="participants-hero__inner">
        <p class="participants-hero__eyebrow"><?= e($pageContent['heroEyebrow']) ?></p>
        <h1><?= e($pageContent['heroTitle']) ?></h1>
        <p><?= e($pageContent['heroText']) ?></p>
        <div class="participants-hero__actions">
          <a href="#who-we-support" class="btn btn--primary"><?= e($pageContent['heroPrimary']) ?></a>
          <a href="#resources" class="btn btn--ghost participants-hero__ghost"><?= e($pageContent['heroSecondary']) ?></a>
        </div>
      </div>
    </section>

    <section id="who-we-support" class="participants-section participants-section--intro">
      <div class="participants-section__header">
        <p class="section-label"><?= e($pageContent['supportLabel']) ?></p>
        <h2 class="section-title"><?= e($pageContent['supportTitle']) ?></h2>
        <p class="section-sub"><?= e($pageContent['supportIntro']) ?></p>
      </div>

      <div class="participants-support-grid">
        <?php foreach ($pageContent['supportCards'] as $card): ?>
          <article id="<?= e($card['id']) ?>" class="participants-support-card">
            <div class="participants-support-card__icon"><i class="ti <?= e($card['icon']) ?>"></i></div>
            <h3><?= e($card['title']) ?></h3>
            <p class="participants-support-card__lead"><?= e($card['lead']) ?></p>
            <p><?= e($card['body']) ?></p>
            <h4><?= e($card['listTitle']) ?></h4>
            <ul class="participants-bullet-list">
              <?php foreach ($card['list'] as $item): ?>
                <li><?= e($item) ?></li>
              <?php endforeach; ?>
            </ul>
            <p class="participants-support-card__note"><?= e($card['note']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="payments-how-it-works" class="participants-band">
      <div class="participants-band__inner">
        <div class="participants-section__header participants-section__header--light">
          <p class="section-label"><?= e($pageContent['paymentsLabel']) ?></p>
          <h2 class="section-title section-title--light"><?= e($pageContent['paymentsTitle']) ?></h2>
          <p class="section-sub section-sub--light"><?= e($pageContent['paymentsIntro']) ?></p>
        </div>

        <div class="participants-payments-intro">
          <div class="participants-payments-intro__pill">
            <span><?= $isVietnamese ? 'Hiện tại chúng tôi hỗ trợ' : 'We currently support' ?></span>
          </div>
          <ul class="participants-payments-intro__list">
            <?php foreach ($pageContent['paymentsSupports'] as $item): ?>
              <li><?= e($item) ?></li>
            <?php endforeach; ?>
          </ul>
          <h3><?= e($pageContent['paymentsHowTitle']) ?></h3>
        </div>

        <div class="participants-payments-grid">
          <?php foreach ($pageContent['paymentCards'] as $card): ?>
            <article id="<?= e($card['id']) ?>" class="participants-payment-card">
              <i class="ti <?= e($card['icon']) ?> participants-payment-card__icon"></i>
              <h3><?= e($card['title']) ?></h3>
              <p><?= e($card['body']) ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="getting-started-guide" class="participants-section participants-section--steps">
      <div class="participants-section__header">
        <p class="section-label"><?= e($pageContent['guideLabel']) ?></p>
        <h2 class="section-title"><?= e($pageContent['guideTitle']) ?></h2>
        <p class="section-sub"><?= e($pageContent['guideIntro']) ?></p>
      </div>

      <div class="participants-steps-grid">
        <?php foreach ($steps as $step): ?>
          <article class="participants-step-card">
            <div class="participants-step-card__number"><?= e($step['num']) ?></div>
            <h3><?= e($step['title']) ?></h3>
            <p><?= e($step['desc']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="resources" class="participants-section participants-section--resources">
      <div class="participants-section__header">
        <p class="section-label"><?= e($pageContent['resourcesLabel']) ?></p>
        <h2 class="section-title"><?= e($pageContent['resourcesTitle']) ?></h2>
        <p class="section-sub"><?= e($pageContent['resourcesIntro']) ?></p>
      </div>

      <div class="participants-resources-grid">
        <?php foreach ($pageContent['resources'] as $resource): ?>
          <article id="<?= e($resource['id']) ?>" class="participants-resource-card">
            <i class="ti <?= e($resource['icon']) ?> participants-resource-card__icon"></i>
            <h3><?= e($resource['title']) ?></h3>
            <p><?= e($resource['body']) ?></p>
            <?php if (isset($resourceRouteMap[$resource['id']])): ?>
              <a href="<?= e($resourceRouteMap[$resource['id']]) ?>" class="participants-resource-card__link">
                <?= $isVietnamese ? 'Xem Trang Này' : 'Open Resource Page' ?>
              </a>
            <?php endif; ?>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="faq" class="participants-faq">
      <div class="participants-faq__inner">
        <div class="participants-section__header">
          <p class="section-label"><?= e($pageContent['faqLabel']) ?></p>
          <h2 class="section-title"><?= e($pageContent['faqTitle']) ?></h2>
          <p class="section-sub"><?= e($pageContent['faqIntro']) ?></p>
        </div>

        <div class="participants-faq__list">
          <?php foreach ($pageContent['faqs'] as $faq): ?>
            <div class="participants-faq-item">
              <div class="participants-faq-item__question" onclick="this.parentElement.querySelector('[data-answer]').style.display = this.parentElement.querySelector('[data-answer]').style.display === 'none' ? 'block' : 'none'; this.parentElement.classList.toggle('active');">
                <h4><?= e($faq['q']) ?></h4>
                <i class="ti ti-chevron-down participants-faq-item__icon"></i>
              </div>
              <div data-answer class="participants-faq-item__answer" style="display: none;">
                <?= e($faq['a']) ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="participants-cta">
      <div class="participants-cta__inner">
        <h2><?= e($pageContent['ctaTitle']) ?></h2>
        <p><?= e($pageContent['ctaText']) ?></p>
        <a href="<?= e($routes['contact']) ?>" class="btn btn--primary participants-cta__button"><?= e($pageContent['ctaButton']) ?></a>
        <div class="participants-cta__phone">
          <?= e($pageContent['ctaPhone']) ?> <strong><?= e($site['phone']) ?></strong>
        </div>
      </div>
    </section>
    <?php endif; ?>
  </div>
</div>