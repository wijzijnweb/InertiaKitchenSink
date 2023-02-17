<?php

Route::middleware([
    'web',
])->group(function () {
    Route::get('kitchen-sink', function () {
        return inertia('KitchenSink/Overview');
    });
});
