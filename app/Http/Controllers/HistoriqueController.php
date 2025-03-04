<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $messages = Message::where('user_id', $user->id)
                        ->orderBy('created_at', 'desc')
                        ->paginate();

        return view('historique', compact('messages'));
                        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->input('query'); // Récupère la valeur entrée
        $user = Auth::user(); // Récupère l'utilisateur connecté
    
        if ($query) {
            $messages = Message::where('user_id', $user->id)
                ->where('Destinataire', 'LIKE', "%{$query}%")
                ->orderBy('created_at', 'desc')
                ->paginate(); // On garde la pagination
        } else {
            $messages = Message::where('user_id', $user->id)
                ->orderBy('created_at', 'desc')
                ->paginate();
        }
    
        return view('historique', compact('messages', 'query'));
    }
    
}
