<?php

namespace App\Controllers\Modules;
use App\Services\Queries;
class ContentModule
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'content' => $this->getContent()
        ];
    }

    protected function getContent(){
        return Queries::getContent();
    }
}
