<?php

namespace App\services;

interface Newsletter
{
 public function subscribe(string $email,string $list = null);
}
