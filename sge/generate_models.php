<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$models = ['Product', 'Client', 'Supplier', 'Sale', 'SaleItem', 'Purchase', 'PurchaseItem'];

foreach ($models as $model) {
    echo "Creating model $model...\n";
    Artisan::call('make:model', ['name' => $model, '-m' => true]);
}

echo "Done.\n";
