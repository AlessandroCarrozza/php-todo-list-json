<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="app">
    <div class="container-mega">
        <div class="container-list">
            <h1>Todo List</h1>
            <ul class="list-group">
                <li v-for="(todo, index) in todoList" class="list-group-item">{{todo}}</li>
            </ul>
            <div class="input-group mt-3">
                <input type="text" v-model="todoItem" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <button @click="addTodo" class="btn btn-outline-warning" type="button" id="button-addon1">Inserisci</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="main.js"></script>

</body>
</html>