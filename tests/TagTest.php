<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/*
 * This class includes a few small and simple tests
 * this in order to show that I know how they worked
 */
class TagtTest extends TestCase
{

    /**
     * Missing fields in creating tag
     *
     * @return void
     */
    public function testCreateTagMissingFields()
    {
        $user = User::find(1);
        $this->actingAs($user)
            ->visit('admin/tags/create')
            ->type("","name")
            ->press("Save")
            ->see("Error");
    }

    /**
     * Correct creation
     *
     * @return void
     */
    public function testCreateTag()
    {
        $name = str_random(15);
        $user = User::find(1);
        $this->actingAs($user)
            ->visit('admin/tags/create')
            ->type($name,"name")
            ->press("Save")
            ->see("Success");
    }
}
