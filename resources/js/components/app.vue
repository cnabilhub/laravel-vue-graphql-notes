<template>
  <div class="container mx-auto">

    <Nav></Nav>
      <div class="divider-horizontal"></div>

      <div class="grid grid-cols-6 overflow-y-auto h-100 gap-4">
        <Sidebar class="h-full mr-6 hidden md:block"> again hello</Sidebar>
          <div class="col-span-6 md:col-span-5 bg-base-100 rounded-xl mx-6 p-6
              border-base-400 border-1 border min-h-full">

              <div v-if="$apollo.loading">
                  <progress class="progress progress-primary w-full"></progress>
              </div>
             <router-view />
          </div>
      </div>

  </div>

</template>

<script>
import gql from 'graphql-tag'
import Sidebar from './layouts/sidebar.vue'
import Nav from './layouts/Nav.vue'

export default {
    components : {
        Sidebar,Nav
    },

  "mounted"() {
    console.log("Component mounted.");
  },

    methods:{
    }
};
</script>

