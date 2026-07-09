<?php
/**
 * Utility functions for the JavaScript Classes Tutorial
 */

/**
 * Sanitize user input to prevent XSS attacks
 */
function sanitize($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

/**
 * Validate email address
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Validate integer
 */
function validateInteger($value) {
    return filter_var($value, FILTER_VALIDATE_INT);
}

/**
 * Return JSON response
 */
function jsonResponse($success, $message, $data = null, $statusCode = 200) {
    http_response_code($statusCode);
    header('Content-Type: application/json');
    
    $response = [
        'success' => $success,
        'message' => $message
    ];
    
    if ($data !== null) {
        $response['data'] = $data;
    }
    
    echo json_encode($response);
    exit;
}

/**
 * Log message to file
 */
function logMessage($message, $level = 'INFO') {
    $logFile = dirname(__FILE__) . '/logs/app.log';
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = "[$timestamp] [$level] $message\n";
    
    // Create logs directory if it doesn't exist
    $logDir = dirname($logFile);
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    file_put_contents($logFile, $logEntry, FILE_APPEND);
}

/**
 * Get request method
 */
function getRequestMethod() {
    return $_SERVER['REQUEST_METHOD'];
}

/**
 * Check if request is POST
 */
function isPost() {
    return getRequestMethod() === 'POST';
}

/**
 * Check if request is GET
 */
function isGet() {
    return getRequestMethod() === 'GET';
}

/**
 * Get POST parameter
 */
function getPost($key, $default = null) {
    return $_POST[$key] ?? $default;
}

/**
 * Get GET parameter
 */
function getGet($key, $default = null) {
    return $_GET[$key] ?? $default;
}

/**
 * Format array for display
 */
function formatArray($array) {
    return '<pre>' . htmlspecialchars(print_r($array, true)) . '</pre>';
}

/**
 * Create navigation breadcrumb
 */
function generateBreadcrumb($items) {
    $breadcrumb = '<nav class="breadcrumb">';
    $count = count($items);
    
    foreach ($items as $index => $item) {
        if ($index === $count - 1) {
            $breadcrumb .= '<span>' . htmlspecialchars($item['label']) . '</span>';
        } else {
            $breadcrumb .= '<a href="' . htmlspecialchars($item['url']) . '">' . htmlspecialchars($item['label']) . '</a>';
            $breadcrumb .= '<span> > </span>';
        }
    }
    
    $breadcrumb .= '</nav>';
    return $breadcrumb;
}

?>
