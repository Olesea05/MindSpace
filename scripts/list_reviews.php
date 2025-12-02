<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$reviews = App\Models\Review::orderBy('id','asc')->get();
foreach ($reviews as $r) {
    echo $r->id . ' | ' . ($r->name ?? '-') . ' | ' . ($r->email ?? '-') . ' | ' . $r->rating . ' | ' . ($r->message ?? '-') . ' | ' . $r->created_at . "\n";
}
echo "Total: " . App\Models\Review::count() . "\n";
