<?php

namespace Tests;

use App\Models\User;
use App\Models\UserEmails;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;


    public function createUser()
    {

    	 $user = factory(User::class)->create();
    	 $emails = factory(UserEmails::class)->create(['user_id' => $user->id]);
         return $emails;
    }
}
