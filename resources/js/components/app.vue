<template>
  <div class="container ">
    <Nav ></Nav>
    <div class="grid grid-cols-6 overflow-y-auto h-100 gap-2">
        <Sidebar class="h-full mr-6 hidden md:block"> again hello</Sidebar>
        <div class="m-4 p-4 col-span-6 md:col-span-5 bg-state-200">
            <div class="notes grid grid-cols-2 gap-2">
                <Note></Note>
                <Note></Note>
                <Note></Note>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
    import Sidebar from './layouts/sidebar.vue'
    import Nav from './layouts/nav.vue'
    import Note from './layouts/note.vue'
export default {

    components : {
        Sidebar,Nav,Note
    },
  "mounted"() {
    console.log("Component mounted.");
  },
};
</script>
