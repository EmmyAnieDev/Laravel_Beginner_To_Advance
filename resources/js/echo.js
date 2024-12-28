import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});



// Listening to the Chat Channel
window.Echo.channel('chat').listen('MessageEvent', (e) => {
    console.log(e);

    document.getElementById('messages').innerHTML += `<p>${e.message}<\p>`
})
