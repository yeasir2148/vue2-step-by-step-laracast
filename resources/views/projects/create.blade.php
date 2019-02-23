<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    </head>

    <body>
        <div id="app" class="container">
            <form method="POST" action="/project">
                <div class="control">
                    <label for="name" class="label">Project Name</label>
                    <input type="text" name="name" id="name" v-model="name">    
                </div>
                
                <div class="control">
                    <label for="description" class="label">Project Description</label>
                    <input type="text" name="description" id="description" v-model="description">    
                </div>

                <div class="control">
                    <button type="button" class="button is-primary">Submit</button>
                </div>
            </form>
        </div>

        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
