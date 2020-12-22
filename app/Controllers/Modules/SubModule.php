<?php

namespace App\Controllers\Modules;
use App\Services\Queries; 
class SubModule
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'sub' => $this->getSub()
        ];
    }
    protected function getSub(){
        return Queries::getSub();
    }
}
