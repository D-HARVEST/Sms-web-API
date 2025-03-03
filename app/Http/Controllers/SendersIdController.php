<?php

namespace App\Http\Controllers;

use App\Models\SendersId;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SendersIdRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SendersIdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $sendersIds = SendersId::paginate();

        return view('senders-id.index', compact('sendersIds'))
            ->with('i', ($request->input('page', 1) - 1) * $sendersIds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $sendersId = new SendersId();

        return view('senders-id.create', compact('sendersId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SendersIdRequest $request): RedirectResponse
    {
        SendersId::create($request->validated());

        return Redirect::route('senders-ids.index')
            ->with('success', 'SendersId created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $sendersId = SendersId::find($id);

        return view('senders-id.show', compact('sendersId'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $sendersId = SendersId::find($id);

        return view('senders-id.edit', compact('sendersId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SendersIdRequest $request, SendersId $sendersId): RedirectResponse
    {
        $sendersId->update($request->validated());

        return Redirect::route('senders-ids.index')
            ->with('success', 'SendersId updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        SendersId::find($id)->delete();

        return Redirect::route('senders-ids.index')
            ->with('success', 'SendersId deleted successfully');
    }
}
