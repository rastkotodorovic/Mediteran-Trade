<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.service.index', [
            'services' => Service::all(),
        ]);
    }

    public function store(ServiceRequest $request)
    {
        Service::create($request->validated());

        return back();
    }

    public function edit(Service $service)
    {
        return view('admin.service.edit', [
            'service' => $service,
        ]);
    }

    public function update()
    {

    }

    public function destroy(Service $service)
    {
        $service->delete();

        return back();
    }
}
