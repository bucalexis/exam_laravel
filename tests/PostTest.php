<?php

use App\Tag;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/*
 * This class includes a few small and simple tests
 * this in order to show that I know how they worked
 */
class PostTest extends TestCase
{


    /**
     * Missing fields in creating post
     *
     * @return void
     */
    public function testCreatePostMissingFields()
    {
        $user=User::find(1);
        $this->actingAs($user)
            ->visit('admin/posts/create')
            ->type("","title")
            ->type("","content")
            ->press("Save")
            ->see("Error");
    }

    /**
     * Correct creation
     *
     * @return void
     */
    public function testCreatePost()
    {
        $tag = Tag::first();
        $user = User::find(1);
        $this->actingAs($user)
            ->visit('admin/posts/create')
            ->type("asd","title")
            ->type("asdasd","content")
            ->select($tag->id,"tags")
            ->press("Save")
            ->see("Success");
    }
}
