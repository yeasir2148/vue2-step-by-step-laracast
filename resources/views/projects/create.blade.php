<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    </head>

    <body>
        <div id="app" class="container" v-cloak>
            <form method="POST" action="/project" @submit.prevent="onSubmit" @keydown="errors.clear($event)">
                <div class="control">
                    <label for="name" class="label">Project Name</label>
                    <input type="text" name="name" id="name" v-model="name" >
                    <span v-if="errors.get('name')" style="color: red" v-text="errors.get('name')"></span> 
                </div>
                
                <div class="control">
                    <label for="description" class="label">Project Description</label>
                    <input type="text" name="description" id="description" v-model="description">
                    <span v-if="errors.get('description')" style="color: red" v-text="errors.get('description')"></span>  
                </div>

                <div class="control">
                    <button type="submit" class="button is-primary" :disabled='!dataOk'>Submit</button>
                </div>
            </form>
        </div>

        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
