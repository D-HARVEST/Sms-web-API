<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DeviceRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $devices = Device::paginate();

        return view('device.index', compact('devices'))
            ->with('i', ($request->input('page', 1) - 1) * $devices->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $device = new Device();

        return view('device.create', compact('device'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeviceRequest $request): RedirectResponse
    {
        Device::create($request->validated());

        return Redirect::route('devices.index')
            ->with('success', 'Device created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $device = Device::find($id);

        return view('device.show', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $device = Device::find($id);

        return view('device.edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeviceRequest $request, Device $device): RedirectResponse
    {
        $device->update($request->validated());

        return Redirect::route('devices.index')
            ->with('success', 'Device updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Device::find($id)->delete();

        return Redirect::route('devices.index')
            ->with('success', 'Device deleted successfully');
    }
}
