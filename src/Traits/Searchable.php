<?php

namespace Thiagoprz\Vegvisir\Traits;

trait Searchable
{
    /**
     * @return string
     */
    public function getSearchIndex(): string
    {
        return $this->getTable();
    }

    /**
     * @return string
     */
    public function getSearchType(): string
    {
        if (property_exists($this, 'search_type')) {
            return $this->search_type;
        }
        return $this->getTable();
    }

    /**
     * @return array
     */
    public function toSearchArray(): array
    {
        return $this->toArray();
    }

    /**
     * @return array
     */
    public function getSearchFields(): array
    {
        return [];
    }
}

