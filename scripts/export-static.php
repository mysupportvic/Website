<?php

declare(strict_types=1);

$rootDir = dirname(__DIR__);

$neutralPageMap = [
    ['input' => 'index.php', 'output' => 'index.html'],
    ['input' => 'about/index.php', 'output' => 'about/index.html'],
    ['input' => 'contact/index.php', 'output' => 'contact/index.html'],
    ['input' => 'demo.php', 'output' => 'demo.html'],
    ['input' => 'participants.php', 'output' => 'participants.html'],
    ['input' => 'participants/new-participants/index.php', 'output' => 'participants/new-participants/index.html'],
    ['input' => 'participants/existing-participants/index.php', 'output' => 'participants/existing-participants/index.html'],
    ['input' => 'participants/self-managed-participants/index.php', 'output' => 'participants/self-managed-participants/index.html'],
    ['input' => 'participants/plan-managed-participants/index.php', 'output' => 'participants/plan-managed-participants/index.html'],
    ['input' => 'participants/payments-how-it-works/index.php', 'output' => 'participants/payments-how-it-works/index.html'],
    ['input' => 'resources/getting-started-guide/index.php', 'output' => 'resources/getting-started-guide/index.html'],
    ['input' => 'resources/understanding-your-ndis-plan/index.php', 'output' => 'resources/understanding-your-ndis-plan/index.html'],
    ['input' => 'resources/self-managed-vs-plan-managed/index.php', 'output' => 'resources/self-managed-vs-plan-managed/index.html'],
    ['input' => 'resources/faqs/index.php', 'output' => 'resources/faqs/index.html'],
    ['input' => 'resources/participant-rights/index.php', 'output' => 'resources/participant-rights/index.html'],
    ['input' => 'resources/vietnamese-resources/index.php', 'output' => 'resources/vietnamese-resources/index.html'],
    ['input' => 'budget-tracking.php', 'output' => 'budget-tracking.html'],
    ['input' => 'service.php', 'output' => 'service.html'],
    ['input' => 'services/index.php', 'output' => 'services/index.html'],
    ['input' => 'services/daily-living/index.php', 'output' => 'services/daily-living/index.html'],
    ['input' => 'services/community-participation/index.php', 'output' => 'services/community-participation/index.html'],
    ['input' => 'services/transport/index.php', 'output' => 'services/transport/index.html'],
    ['input' => 'services/domestic-support/index.php', 'output' => 'services/domestic-support/index.html'],
    ['input' => 'services/companionship/index.php', 'output' => 'services/companionship/index.html'],
    ['input' => 'services/cultural-support/index.php', 'output' => 'services/cultural-support/index.html'],
];

$localizedPageMap = [
    ['input' => 'index.php', 'output' => 'index.html'],
    ['input' => 'about/index.php', 'output' => 'about/index.html'],
    ['input' => 'contact/index.php', 'output' => 'contact/index.html'],
    ['input' => 'demo.php', 'output' => 'demo/index.html'],
    ['input' => 'participants.php', 'output' => 'participants/index.html'],
    ['input' => 'participants/new-participants/index.php', 'output' => 'participants/new-participants/index.html'],
    ['input' => 'participants/existing-participants/index.php', 'output' => 'participants/existing-participants/index.html'],
    ['input' => 'participants/self-managed-participants/index.php', 'output' => 'participants/self-managed-participants/index.html'],
    ['input' => 'participants/plan-managed-participants/index.php', 'output' => 'participants/plan-managed-participants/index.html'],
    ['input' => 'participants/payments-how-it-works/index.php', 'output' => 'participants/payments-how-it-works/index.html'],
    ['input' => 'resources/getting-started-guide/index.php', 'output' => 'resources/getting-started-guide/index.html'],
    ['input' => 'resources/understanding-your-ndis-plan/index.php', 'output' => 'resources/understanding-your-ndis-plan/index.html'],
    ['input' => 'resources/self-managed-vs-plan-managed/index.php', 'output' => 'resources/self-managed-vs-plan-managed/index.html'],
    ['input' => 'resources/faqs/index.php', 'output' => 'resources/faqs/index.html'],
    ['input' => 'resources/participant-rights/index.php', 'output' => 'resources/participant-rights/index.html'],
    ['input' => 'resources/vietnamese-resources/index.php', 'output' => 'resources/vietnamese-resources/index.html'],
    ['input' => 'budget-tracking.php', 'output' => 'budget-tracking/index.html'],
    ['input' => 'services/index.php', 'output' => 'services/index.html'],
    ['input' => 'services/daily-living/index.php', 'output' => 'services/daily-living/index.html'],
    ['input' => 'services/community-participation/index.php', 'output' => 'services/community-participation/index.html'],
    ['input' => 'services/transport/index.php', 'output' => 'services/transport/index.html'],
    ['input' => 'services/domestic-support/index.php', 'output' => 'services/domestic-support/index.html'],
    ['input' => 'services/companionship/index.php', 'output' => 'services/companionship/index.html'],
    ['input' => 'services/cultural-support/index.php', 'output' => 'services/cultural-support/index.html'],
];

function renderPage(string $sourcePath, string $languageMode): string
{
    $previousLanguage = getenv('SITE_LANGUAGE');
    putenv('SITE_LANGUAGE=' . $languageMode);

    $command = 'php ' . escapeshellarg($sourcePath);
    $output = shell_exec($command);

    if ($previousLanguage === false) {
        putenv('SITE_LANGUAGE');
    } else {
        putenv('SITE_LANGUAGE=' . $previousLanguage);
    }

    if ($output === null) {
        throw new RuntimeException('Failed to render page: ' . $sourcePath);
    }

    return $output;
}

function pageDepth(string $outputPath): int
{
    $normalized = str_replace('\\', '/', $outputPath);
    return max(substr_count($normalized, '/'), 0);
}

function relativizeAbsoluteLinks(string $html, int $depth): string
{
    $prefix = str_repeat('../', $depth);

    return (string) preg_replace_callback(
        '/\b(href|src|data-href|action)=(["\"])\/(?!\/)([^"\"]*)\2/',
        static function (array $matches) use ($prefix): string {
            $attribute = $matches[1];
            $quote = $matches[2];
            $target = $matches[3];

            if ($target === '') {
                $target = $prefix !== '' ? $prefix : './';
            } else {
                $target = $prefix . $target;
            }

            return $attribute . '=' . $quote . $target . $quote;
        },
        $html
    );
}

function exportPages(string $rootDir, array $pageMap, string $languageMode, string $prefix = ''): int
{
    $count = 0;

    foreach ($pageMap as $page) {
        $sourcePath = $rootDir . DIRECTORY_SEPARATOR . $page['input'];
        $relativeOutput = $prefix === '' ? $page['output'] : $prefix . '/' . $page['output'];
        $outputPath = $rootDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relativeOutput);

        $html = renderPage($sourcePath, $languageMode);
        $html = relativizeAbsoluteLinks($html, pageDepth($relativeOutput));

        $outputDir = dirname($outputPath);
        if (!is_dir($outputDir)) {
            mkdir($outputDir, 0777, true);
        }

        file_put_contents($outputPath, $html);
        $count++;
    }

    return $count;
}

$exportedPages = 0;
$exportedPages += exportPages($rootDir, $neutralPageMap, 'neutral');
$exportedPages += exportPages($rootDir, $localizedPageMap, 'en', 'en');
$exportedPages += exportPages($rootDir, $localizedPageMap, 'vn', 'vn');

file_put_contents($rootDir . DIRECTORY_SEPARATOR . '.nojekyll', PHP_EOL);

echo 'Exported ' . $exportedPages . " static pages." . PHP_EOL;
