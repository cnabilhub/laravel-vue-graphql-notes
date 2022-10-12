<template>
    <div class="container">
        {{this.$route.params.id}}
    </div>
</template>
<script>

import gql from "graphql-tag";
import { useQuery } from '@vue/apollo-composable'

export default {
    setup () {
        const note = useQuery (gql `
        query  ($id:ID) {
          note (id:$id) {
              content,title
          }
        },
    `,{
                "id": 1
            })
    }



}


</script>
