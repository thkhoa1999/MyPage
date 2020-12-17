<?php

namespace App\Controllers\Modules;
use App\Services\Queries;

class Subcontent
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'subcontent' => $this->getSubcontent()
        ];
    }

    protected function getSubcontent(){
        return Queries::getSubcontent();
    }
}
