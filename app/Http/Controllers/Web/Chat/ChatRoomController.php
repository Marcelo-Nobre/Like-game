<?php

namespace App\Http\Controllers\Web\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ChatRoomController extends Controller
{
    /**
     * Render the chat room.
     *
     * @param  string|null  $room
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function __invoke(Request $request, $room = null)
    {
        $room = str($room)->trim()->slug();
        $sessionUser = ChatRoomController::getSessionUser();

        // If no room is assigned, generate a random room name.
        if (! $room->length() || $room?->toString() === 'room') {
            return Redirect::route('room', ['room' => str(str()->random(10))->slug()]);
        }

        $messages = cache()->get('chat-room.' . $room, null);

        if (! $messages || ! is_array($messages) || ! is_array($messages[0] ?? null)) {
            $messages = [];
        }

        return view('chat.messages', [
            'room' => $room,
            'link' => route('room', ['room' => $room]),
            'sessionUser' => $sessionUser,
            'messages' => $messages,
        ]);
    }

    public static function getSessionUser(): mixed
    {
        $sessionUser = session()->get('ses_user');

        if (! $sessionUser || ! is_a($sessionUser, \Illuminate\Support\Fluent::class)) {
            $sessionUser = fluent([
                'name' => $name = str(fake()->unique(10000)->words(3, true))->slug()->title()->headline(),
                'id' => $name->slug(),
                'image' => 'https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg',
                'time_zone' => 'America/Sao_Paulo',
            ]);

            session()->put('ses_user', $sessionUser);
        }

        return $sessionUser ?? null;
    }
}
