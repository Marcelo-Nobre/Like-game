```js
// composer.json

"require": {
    // ...
    "laravel/tinker": "^2.8",
    // ...
}
```

```js
// package.json

"dependencies": {
    // ...
    "laravel-echo": "^1.15.3",
    "pusher-js": "^8.4.0-rc2"
    // ...
}
```

```sh
# .env
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=app-id
PUSHER_APP_KEY=app-key
PUSHER_APP_SECRET=app-secret
PUSHER_HOST=myapp.local
PUSHER_PORT=6001
PUSHER_SCHEME=http
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

```js
// resources/js/bootstrap.js

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
    wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
    wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
    wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'http') === 'https', // Se não for SSL, deixar sempre como falso (deixe a variável PUSHER_SCHEME como 'http')
    enabledTransports: [
        'ws',
        'wss',
    ],
});

document.addEventListener('DOMContentLoaded', (event) => {
    window.Echo.channel('orders.4').listen('OrderStatusUpdated', (e) => {
        console.log(JSON.stringify(e, null, 4));
    });
});
```

```php
// routes/channels.php
Broadcast::channel('orders.{userId}', function ($userId) {
    return true;
});
```
