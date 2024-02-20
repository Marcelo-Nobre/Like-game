<?php

namespace App\Http\Controllers\Web\Chat;

use App\Events\MessageSent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SendMessageController extends Controller
{
    /**
     * Send the message to a room.
     *
     * @link https://github.com/soketi/laravel-chat-app/blob/master/app/Http/Controllers/SendMessageController.php
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'room' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string', 'min:1', 'max:200'],
        ]);

        // MessageSent::broadcast(
        //     $request->user(),
        //     $request->room,
        //     $request->message,
        // );

        $sessionUser = ChatRoomController::getSessionUser();

        $messageData = [
            'author' => [
                'id' => $sessionUser->id,
                'name' => $sessionUser->name,
                'image' => $sessionUser->image,
            ],
            'time' => date('c'),
            'content' => $request->input('message'),
        ];

        $room = str($request->input('room'))->trim()->slug();

        $messages = cache()->get('chat-room.' . $room, null);

        if (! $messages || ! is_array($messages) || ! is_array($messages[0] ?? null)) {
            $messages = [];
        }

        $messages[] = $messageData;

        cache()->put('chat-room.' . $room, $messages, (60 * 30));

        MessageSent::broadcast(
            $room,
            $messageData,
        );

        return Response::json([
            'ok' => true,
            'room' => $request->input('room'),
        ]);
    }

    /**
     * function fake
     *
     * @param Request request
     * @param  ?string  $room
     * @return mixed
     */
    public function fake(Request $request, ?string $room = null)
    {
        $request->merge([
            'room' => $room ?: str(str()->random(10))->slug(),
            'message' => substr(fake()->paragraph(2), 0, 200),
        ]);

        return $this->__invoke($request);
    }
}
