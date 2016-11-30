<?php

namespace app\Repositories;

use App\Entities\Entity;

abstract class BaseRepository
{
    /**
     * @return Entity
     */
    abstract public function getModel();

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQuery()
    {
        return $this->getModel()->newQuery();
    }

//    public function findOrFail($id)
//    {
//        return $this->newQuery()->findOrFail($id);
//    }
}
