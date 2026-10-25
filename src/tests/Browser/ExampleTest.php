<?php

uses(DuskTestCase::class);
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

test('basic example', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertSee('Laravel');
    });
});
