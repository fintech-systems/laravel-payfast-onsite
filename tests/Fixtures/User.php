<?php

// namespace Tests\Fixtures;
namespace FintechSystems\Payfast\Tests\Fixtures;

use FintechSystems\Payfast\Billable;
use Illuminate\Foundation\Auth\User as Model;

class User extends Model
{
    use Billable;

    protected $guarded = [];
}
