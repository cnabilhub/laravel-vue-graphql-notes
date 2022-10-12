<template>
    <div class="card w-full bg-base-100 shadow-xl mb-2">
        <div class="card-body ">
            <h2 class="card-title">{{ data.title }}</h2>
            <p>{{ data.content }}</p>
            <p class="text-base-400 text-sm">
                {{data.created_at}}
            </p>

            <div class="tags">
                <div class="badge badge-outline">Fashion</div>
                <div class="badge badge-outline">Fashion</div>
            </div>

            <div class="divider my-0"></div>

            <div class="card-actions text-left flex-start ">

                <router-link :to="{name:'SingleNote',params:{id : data.id }}" class="btn btn-xs btn-success">
                    <i class="lni lni-eye mr-1"></i>
                    View
                </router-link>

                <button class="btn btn-xs  btn-info">
                    <i class="lni lni-clipboard mr-1"></i>
                    Copy
                </button>

                <button class="btn btn-xs btn-warning">
                    <i class="lni lni-pencil-alt mr-1"></i>
                    Edit
                </button>
                <button class="btn btn-xs btn-error">
                    <i class="lni lni-trash-can mr-1"></i>
                    Delete
                </button>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    props: ['data']

}
</script>
