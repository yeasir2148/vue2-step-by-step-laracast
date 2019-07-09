<template>
   <div class="message">
   	<div class="messsage-header">
   		<div class="message-body">
   			<form id="newTweetForm" v-on:submit.prevent="onSubmit" data-vv-scope="form-1" ref="form-1">
               <div class="form-group">
                  <textarea
                     v-validate="'required|min:10'" 
                     name="body" 
                     class="form-control" 
                     rows="5" 
                     placeholder="push message to stream"
                     data-vv-validate-on=""
                     v-model="form.data.newMessage"></textarea>
                  <span class="text-danger" v-show='errors.has("body","form-1")'>{{errors.first('body','form-1')}}</span>
               </div>

               <div class="form-group">
                  <button class="btn btn-success" :disabled="errors.any('form-1') || !formValid['$form-1']" >Submit</button>
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
               url: '/statuses',
               data: {
                  newMessage:''
               }
            }
         }
      },
      methods: {
         onSubmit: function() {
            
               this.form.status = "submitting";
               var vm = this;
               this.$validator.validate().then(function(valid) {
                  console.log('validated');
                  var data = {};
                  console.log(vm.errors.has("body",'form-1'));
                  if(valid) {
                     $("#newTweetForm").serializeArray().map(function(current) {
                       data[current.name] = current.value;
                     });
                     
                     axios.post(vm.form.url, data).then(response => {
                        // console.log(response);
                        vm.form.data.newMessage = '';
                        if([200, 201].includes(response.status)) {
                           vm.$emit('newStatusAdded', response.data);
                        }
                     });
                  }
                  vm.form.status = "pending";
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
