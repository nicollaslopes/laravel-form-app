<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Candidate;

class CandidateTest extends DuskTestCase
{
    /** @test */
    public function check_if_form_is_submitted_correctly(): void
    {
        $this->browse(function (Browser $browser, Browser $test) {
            $browser->visit('/')
                    ->type('name', 'test')
                    ->type('email', 'test@email.com')
                    ->type('phone', '11111111')
                    ->type('desired_job', 'test')
                    ->type('schooling', 'test')
                    ->type('observations', 'test')
                    ->press('enviar')
                    ->waitForText('Currículo enviado com sucesso!');
        });
    }
}
