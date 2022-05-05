<?php

namespace Thiagoprz\Vegvisir\Observers;

use Thiagoprz\Vegvisir\Interfaces\AdapterInterface;

class VegvisirObserver
{
    private AdapterInterface $adapter;

    /**
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param $model
     * @return void
     */
    public function saved($model)
    {
        $adapter = $model->adapter ?? $this->adapter;
        $adapter->index($model);
    }
}
