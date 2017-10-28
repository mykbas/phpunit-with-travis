<?php

namespace App;

class Client
{
    public function __construct(WriterInterface $writer)
    {
    }

    public function save()
    {
        return true;
    }
}
