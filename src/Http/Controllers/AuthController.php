<?php

namespace JobMetric\Authentication\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use JobMetric\GlobalVariable\Object\Document;

class AuthController
{
    /**
     * Show auth form
     *
     * @return View
     */
    public function index(): View
    {
        GlobalVariable::document()->setTitle(__('web/auth.title'));

        GlobalVariable::document()->addScript('assets/js/page/web/auth.js');

        GlobalVariable::document()->addPlugin('jquery');

        return view('auth.mobile');
    }
}
