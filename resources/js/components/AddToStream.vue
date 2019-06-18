<template>
   <div class="message">
   	<div class="messsage-header">
   		<div class="message-body">
   			<form action="" v-on:submit.prevent="onSubmit">
               <div class="form-group">
                  <textarea
                     v-validate="'required|min:10'" 
                     name="newMessage" 
                     class="form-control" 
                     rows="5" 
                     @keyup="submitted=false"
                     placeholder="push message to stream"></textarea>
                  <span v-show="errors.has('newMessage') && submitted">{{errors.first('newMessage')}}</span>
               </div>
               <div class="form-group">
                  <button class="btn btn-success" :disabled="errors.any()" >Submit</button>
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
            submitted: false
         }
      },
      methods: {
         onSubmit: function() {
            this.submitted = true;
            this.$validator.validate().then(function(valid) {
               console.log(valid);
            });
            console.log('form submitted');
         }
      }
   }
</script>
