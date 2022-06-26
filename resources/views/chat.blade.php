<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group {
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <ul class="list-group" v-chat-scroll>
                <message v-for="chat in chat.message" :key="chat.index" color="success" :user="chat.user[chat.index]">
                    @{{ chat }}
                </message>
            </ul>
            <label>
                <input type="text" class="form-control"
                       placeholder="Type your message" v-model="message" @keyup.enter="send()">
            </label>
        </div>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
