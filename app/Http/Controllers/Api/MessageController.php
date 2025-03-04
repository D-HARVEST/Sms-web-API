<?php

namespace App\Http\Controllers\Api;

use App\Models\Message;
use App\Models\SendersId;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MessageRequest;
use App\Http\Resources\MessageResource;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $messages = Message::paginate();

        return MessageResource::collection($messages);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $senderId): JsonResponse
    {
        $user = Auth::user();
        $sender = SendersId::where('Nom', $senderId)
                        ->where('user_id', $user->id)
                        ->first();

        if (!$sender) {  
            return response()->json(['error' => 'Sender ID not found'], 404);  
        }
        $request->validate([
            'to_send' => 'required|array',
            'to_send.*.Destinataire' => 'required|string|max:20', 
            'to_send.*.Contenu' => 'required|string|max:500',
        ]);

        $senderId = $sender->id;
        $message = [];

        foreach ($request->to_send as $data) {
            $message[] = Message::create([
                'user_id' => $user->id,
                'sender_id' => $senderId,
                'Destinataire' => $data['Destinataire'],
                'Contenu' => $data['Contenu'],
            ]);
        }

        
        return response()->json(new MessageResource($message));
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message): JsonResponse
    {
        return response()->json(new MessageResource($message));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MessageRequest $request, Message $message): JsonResponse
    {
        $message->update($request->validated());

        return response()->json(new MessageResource($message));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Message $message): Response
    {
        $message->delete();

        return response()->noContent();
    }
}
