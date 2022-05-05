<?php

namespace Thiagoprz\Vegvisir\Interfaces;

interface RepositoryInterface
{
    public function search(string $query = ''): Collection;
    public function buildCollection(array $items): Collection;
}
