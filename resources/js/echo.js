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


// This code automatically joins the current user to the 'online' channel.
// The join function automatically recognizes that you are using a presence channel.
window.Echo.join('online')
    .here(users => {   // Provides information about the currently connected users.
        users.forEach(user => {
            console.log(user.name + ' is online');
        });
    })
    .joining(user => {   // Provides information about users who have just joined.
        console.log(user.name + ' Joined the channel');
    })
    .leaving(user => {   // Provides information about users who are leaving the channel.
        console.log(user.name + ' Left the channel');
    });



