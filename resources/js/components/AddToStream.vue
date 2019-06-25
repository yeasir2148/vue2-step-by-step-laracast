<template>
   <div class="message">
   	<div class="messsage-header">
   		<div class="message-body">
   			<form action="" v-on:submit.prevent="onSubmit" data-vv-scope="form-1" ref="form-1">
               <div class="form-group">
                  <textarea
                     v-validate="'required|min:10'" 
                     name="newMessage" 
                     class="form-control" 
                     rows="5" 
                     placeholder="push message to stream"></textarea>
                  <span v-show="errors.has('newMessage') && form.status=='pending'">{{errors.first('newMessage')}}</span>
               </div>

               <div class="form-group">
                  <input
                     v-validate="'required|max_value:10'" 
                     name="age" 
                     class="form-control" 
                     placeholder="enter age"></textarea>
                  <span v-show="errors.has('age') && form.status=='pending'">{{errors.first('newMessage')}}</span>
               </div>

               <div class="form-group">
                  <button class="btn btn-success" :disabled="errors.any('form-1') || !formValid['$form-1']" >Submit</button>
               </div>
   			</form>

            <form action="" v-on:submit.prevent="onSubmit" data-vv-scope="form-2" ref="form-2">
               <div class="form-group">
                  <textarea
                     v-validate="'required|min:10'" 
                     name="newMessage" 
                     class="form-control" 
                     rows="5" 
                     @keyup="submitted=false"
                     placeholder="push message to stream"></textarea>
                  <span v-show="errors.has('newMessage') && form.status=='pending'">{{errors.first('newMessage')}}</span>
               </div>
               <div class="form-group">
                  <button class="btn btn-success" :disabled="errors.any('form-2') || !formValid['$form-2']" >Submit</button>
               </div>
            </form>
   		</div>
   	</div>
   </div>
</template>
<script>
   export default {
      data() {
         return {
            form: {
               status: 'pending',
            }
         }
      },
      methods: {
         onSubmit: function() {
               this.submitted = true;
               this.$validator.validate().then(function(valid) {
            });
         }
      },

      computed: {
         formValid() {
            var obj = {};
            var vueComponent = this;
            var formScopes = Object.keys(this.fields);

            if(formScopes.length) {
               // var formInvalid = false;
               for(let i = 0; i < formScopes.length; i++) {
                  var formInvalid = Object.keys(vueComponent.fields[formScopes[i]]).some(function(field) {
                     return vueComponent.fields[formScopes[i]][field] && vueComponent.fields[formScopes[i]][field].invalid;
                  }, vueComponent);

                  obj[formScopes[i]] = !formInvalid;
               }  
            }
            
            return obj;
         },
      },
   }
</script>
