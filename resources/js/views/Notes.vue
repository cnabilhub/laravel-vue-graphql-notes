<template>
    <div class="notes grid grid-cols-2 gap-2">

        <Note v-for="note in notes.data"  :data="note"></Note>
    </div>
</template>

<script>
import Note from "@/components/layouts/Note.vue";
import gql from 'graphql-tag'

export default {
    components : {
        Note
    },
    // DATA
    data() {
        return {
            user_id:10
        }
    },
    // Mounted
    "mounted"() {
        console.log("Component mounted.");

    },
    // Apollo
    apollo: {
        notes : gql `query notes {
          notes {
            data {
              id,content,title,created_at,updated_at
            }
          }
        }`,
    },
    // Methods
    methods:{

    }
};
</script>
