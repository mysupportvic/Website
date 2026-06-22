<?php

declare(strict_types=1);

$rootDir = dirname(__DIR__);

$pageMap = [
    ['input' => 'index.php', 'output' => 'index.html'],
    ['input' => 'about/index.php', 'output' => 'about/index.html'],
    ['input' => 'contact/index.php', 'output' => 'contact/index.html'],
    ['input' => 'demo.php', 'output' => 'demo.html'],
    ['input' => 'participants.php', 'output' => 'participants.html'],
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

$phpLinkMap = [
    '/demo.php' => '/demo.html',
    '/participants.php' => '/participants.html',
    '/budget-tracking.php' => '/budget-tracking.html',
    '/service.php' => '/service.html',
];

function renderPage(string $sourcePath): string
{
    $command = 'php ' . escapeshellarg($sourcePath);
    $output = shell_exec($command);

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

foreach ($pageMap as $page) {
    $sourcePath = $rootDir . DIRECTORY_SEPARATOR . $page['input'];
    $outputPath = $rootDir . DIRECTORY_SEPARATOR . $page['output'];

    $html = renderPage($sourcePath);
    $html = str_replace(array_keys($phpLinkMap), array_values($phpLinkMap), $html);
    $html = relativizeAbsoluteLinks($html, pageDepth($page['output']));

    $outputDir = dirname($outputPath);
    if (!is_dir($outputDir)) {
        mkdir($outputDir, 0777, true);
    }

    file_put_contents($outputPath, $html);
}

file_put_contents($rootDir . DIRECTORY_SEPARATOR . '.nojekyll', PHP_EOL);

echo 'Exported ' . count($pageMap) . " static pages." . PHP_EOL;
