<?php

namespace KirschbaumDevelopment\NovaMail\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\NovaMailTemplate;

class TemplateController extends Controller
{
    public function __invoke()
    {
        return response()->json([
            'templates' => NovaMailTemplate::all(),
        ]);
    }
}
