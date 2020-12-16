<?php

namespace App\Controllers\Modules;

use App\Services\Queries;
class BannerModule
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'banner' => $this->getBanner()
        ];
    }

    protected function getBanner(){
        return Queries::getBanner();
    }
}
