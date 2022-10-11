<template>
    <div class="notes grid grid-cols-2 gap-2">
        <Note></Note>
        <Note></Note>
        <Note></Note>
    </div>
</template>

<script>
import Note from "@/components/layouts/Note.vue";
export default {
    components : {
        Note
    },
    "mounted"() {
        console.log("Component mounted.");
    },
};
</script>
