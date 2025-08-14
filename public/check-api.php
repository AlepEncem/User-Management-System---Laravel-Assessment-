<?php
require_once __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

echo "Checking API setup...<br><br>";

// Check if UserController exists
if (class_exists('App\Http\Controllers\Api\UserController')) {
    echo "✅ API UserController exists<br>";
} else {
    echo "❌ API UserController NOT found<br>";
}

// Check if routes file exists
if (file_exists(__DIR__.'/../routes/api.php')) {
    echo "✅ routes/api.php exists<br>";
} else {
    echo "❌ routes/api.php NOT found<br>";
}

// Check if RouteServiceProvider exists
if (class_exists('App\Providers\RouteServiceProvider')) {
    echo "✅ RouteServiceProvider exists<br>";
} else {
    echo "❌ RouteServiceProvider NOT found<br>";
}

// Try to load routes manually
echo "<br>Attempting to access API...<br>";
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::create('/api/test', 'GET')
);
echo "Response code: " . $response->getStatusCode() . "<br>";
echo "Response: " . $response->getContent();
?>