<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CadastrarCurriculoTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function testCadastrarCurriculo()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/curriculos/create')
                    ->type('candidato_id', '001') //$curriculo->candidato_id
                    ->type('info_adicional', 'Familiar com métodos de desenvolvimento ágil') //$curriculo->info_adicional
                    ->pause(1000)
                    ->type('experiencia', 'Três anos de experiência na NASA') //$curriculo->experiencia
                    ->pause(1000)
                    ->press('Cadastrar')
                    ->pause(1000)
                    ->screenshot('Cadastro Curriculo')
                    ->assertSee('Curriculo Criado');
        });
    }
}
