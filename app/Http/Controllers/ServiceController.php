<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index', [
            'services' => Service::all(),
        ]);
    }

    public function store(ServiceRequest $request)
    {
        Service::create($request->validated());

        return back()
            ->with('flash', "Uspjesno ste dodali uslugu.");
    }

    public function edit(Service $service)
    {
        return view('admin.service.edit', [
            'services' => $service,
        ]);
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $service->update($request->validated());

        return redirect()->route('service.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return back()
            ->with('flash', 'Izbrisano');
    }
}
