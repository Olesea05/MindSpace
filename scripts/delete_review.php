<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$id = 1; // review id to delete
$review = App\Models\Review::find($id);
if ($review) {
    echo "Found review id={$id}: {$review->message}\n";
    $review->delete();
    echo "Deleted review id={$id}\n";
} else {
    echo "Review id={$id} not found\n";
}

echo "Remaining reviews: " . App\Models\Review::count() . "\n";
