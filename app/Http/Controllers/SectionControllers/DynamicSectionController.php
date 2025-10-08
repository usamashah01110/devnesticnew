<?php

namespace App\Http\Controllers\SectionControllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class DynamicSectionController extends BaseController
{
    protected $config;

    public function __construct(Request $request)
    {
        $section = $request->route('section');
        $this->config = Config::get("sections.$section");

        if (!$this->config) {
            abort(404, "Section configuration not found for '$section'");
        }

        $repository = App::make($this->config['repository']);

        parent::__construct($repository, $this->config['view'], $this->config['table']);
    }

    protected function getValidationRules(): array
    {
        return $this->config['validation'] ?? [];
    }

    protected function getFileFields(): array
    {
        return $this->config['file_fields'] ?? [];
    }
}

