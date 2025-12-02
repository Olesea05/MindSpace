<?php
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Laravel config('database.default') = ".config('database.default')."\n";
try {
    $driver = DB::getDriverName();
    echo "DB driver via DB facade: " . $driver . "\n";
} catch (Exception $e) {
    echo "DB facade error: " . $e->getMessage() . "\n";
}

if (file_exists(database_path('database.sqlite'))) {
    echo "database.sqlite file exists at: ".database_path('database.sqlite')."\n";
} else {
    echo "database.sqlite file does NOT exist\n";
}
