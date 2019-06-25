<template>
    <div class="container">
        <div class="columns">
            <div class="column">
               <div class="message" v-for="status in statuses" :key="status.id">
                  <div class="message-header">{{status.user.name}} said <span class="pull-right">{{postedAt(status)}}</span></div>
                  <div class="message-body">
                     {{status.body}}
                  </div>
               </div>
                
               <add-to-stream>
               </add-to-stream>
            </div>
        </div>
    </div>
</template>

<script>
   import AddToStream from '../components/AddToStream.vue';
   export default {
      components: { AddToStream },
      data() {
         return {
            statuses: [],
         }
      },
      methods: {
         postedAt: function(status) {
            return moment(status.created_at).fromNow();
         }         
      },
      created() {
         // console.log('Component mounted.');
         var com = this;
         // Fire ajax request to fetch statuses from database
         axios.get('/statuses')
            .then(function(response) {
               // console.log(response);
               if(response.data) {
                  com.statuses = response.data.statuses;
               }
            }) 
      },


   }
</script>
