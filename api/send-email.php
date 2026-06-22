<?php

declare(strict_types=1);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$adminEmail = 'admin@mysupportvic.com.au';
$input = json_decode(file_get_contents('php://input'), true) ?? $_POST;

if (empty($input['name']) || empty($input['phone'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

$name = sanitize_input($input['name']);
$phone = sanitize_input($input['phone']);
$email = !empty($input['email']) ? sanitize_email($input['email']) : '';
$service = !empty($input['service']) ? sanitize_input($input['service']) : '';
$message = !empty($input['message']) ? sanitize_input($input['message']) : '';

$subject = 'New Enquiry from ' . $name;
$body = build_email_body($name, $phone, $email, $service, $message);

$headers = [
    'Content-Type: text/html; charset=UTF-8',
    'From: ' . ($email ?: 'noreply@mysupportvic.com.au'),
];

if (mail($adminEmail, $subject, $body, implode("\r\n", $headers))) {
    http_response_code(200);
    echo json_encode(['success' => true, 'message' => 'Thank you! We received your enquiry and will contact you within one business day.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to send enquiry. Please try calling us directly.']);
}

function sanitize_input(string $value): string
{
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

function sanitize_email(string $email): string
{
    $email = trim($email);
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : '';
}

function build_email_body(string $name, string $phone, string $email, string $service, string $message): string
{
    $timestamp = date('Y-m-d H:i:s');

    return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; color: #333; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; }
        .header { background-color: #1D9E75; color: white; padding: 20px; border-radius: 5px 5px 0 0; }
        .content { background-color: white; padding: 20px; border-radius: 0 0 5px 5px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #1D9E75; }
        .footer { font-size: 12px; color: #666; margin-top: 20px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Enquiry Submission</h2>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Name:</span><br>
                $name
            </div>
            <div class="field">
                <span class="label">Phone:</span><br>
                $phone
            </div>
            HTML;

    if (!empty($email)) {
        $body .= <<<HTML
            <div class="field">
                <span class="label">Email:</span><br>
                $email
            </div>
            HTML;
    }

    if (!empty($service)) {
        $body .= <<<HTML
            <div class="field">
                <span class="label">Service of Interest:</span><br>
                $service
            </div>
            HTML;
    }

    if (!empty($message)) {
        $body .= <<<HTML
            <div class="field">
                <span class="label">Message:</span><br>
                <pre style="white-space: pre-wrap; word-wrap: break-word;">$message</pre>
            </div>
            HTML;
    }

    $body .= <<<HTML
            <div class="footer">
                <p>Received: $timestamp</p>
            </div>
        </div>
    </div>
</body>
</html>
HTML;

    return $body;
}
