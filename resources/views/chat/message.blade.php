<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Embeds the authenticated user's ID into a meta tag for use in JavaScript to know which user is logged in and potentially listen to events specific to that user.
    The optional chaining operator (?->) ensures no error occurs if no user is logged in. -->
    <meta name="user_id" content="{{ Auth::user()?->id }}">
    <title>Message</title>
    @vite('resources/js/app.js')
</head>
<body>
<div>
    <h1>This is a Message!</h1>
    <div id="messages">

    </div>
</div>

</body>
</html>

