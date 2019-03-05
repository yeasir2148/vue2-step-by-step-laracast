<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
        <link rel="stylesheet" href="">
    </head>

    <body>
        <div id="app" class="container" v-cloak>
            <form @submit.prevent="form.onSubmit('post', '/project')" @keydown="form.errors.clear($event)">
                <div class="control">
                    <label for="name" class="label">Project Name</label>
                    <input type="text" name="name" id="name" v-model="form.formData.name" >
                    <span class="help" style="color: red" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span> 
                </div>
                
                <div class="control">
                    <label for="description" class="label">Project Description</label>
                    <input type="text" name="description" id="description" v-model="form.formData.description">
                    <span class="help" v-if="form.errors.has('description')" style="color: red" v-text="form.errors.get('description')"></span>  
                </div>

                <div class="control">
                    <button type="submit" class="button is-primary" v-if="form.status === 'pending'" :disabled='!dataOk'>Submit</button>
                    <button type="submit" class="button form-pending" v-if="form.status === 'pending'" :disabled='!dataOk'>
                        <i></i>
                    </button>
                </div>
            </form>
        </div>

        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
