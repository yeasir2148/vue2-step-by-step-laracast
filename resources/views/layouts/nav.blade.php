<nav class="tabs is-boxed is-fullwidth">
   <div class="container">
      <ul>
         <router-link tag="li" to="/home" exact v-on:click.native="printclass" :class="{'is-boxed' : activeRoute == '/home'}">
            <a>Home</a>
         </router-link>
         <router-link tag="li" to="/about" v-on:click.native="printclass" :class="{'is-boxed' : activeRoute == '/about'}">
            <a>About</a>
         </router-link>
         <router-link tag="li" to="/contacts" v-on:click.native="printclass" :class="{'is-boxed' : activeRoute == '/contacts'}">
            <a>Contacts</a>
         </router-link>
      </ul>
   </div>
</nav>