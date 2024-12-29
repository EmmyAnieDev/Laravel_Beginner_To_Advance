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
var user_id = document.querySelector('meta[name="user_id"]').getAttribute('content');

window.Echo.private('chat.' + user_id).listen('MessageEvent', (e) => {  //  chat.id    =====>   chat.19
    console.log(e);
    document.getElementById('messages').innerHTML += `<p>${e.message}</p>`
});
