<?php

namespace Thiagoprz\Vegvisir\Interfaces;

interface AdapterInterface
{

    public function index($model): bool;
    public function delete($model): bool;

}
