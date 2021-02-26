<?php

namespace NovaTesting;

trait NovaDomain
{
    public static function getNovaDomain()
    {
        return str_replace('login', '', route('nova.login'));
    }
}