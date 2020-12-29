<?php

namespace App\Controllers\Modules;
use App\Services\Queries;
class Sub2Module
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'sub2' => $this->getSub2()
        ];
    }
    protected function getSub2(){
        return Queries::getSub2();
    }
}
