<template>

    <ul class="menu bg-base-100 w-56 p-2 rounded-box gap-2 min-vh-100 border-base-400 border-1 border">
        <li>
            <router-link to="/" active-class="active">
                <i class="lni lni-home"></i>
                Home
            </router-link>
        </li>
        <li>
            <router-link to="/notes" active-class="active">
                <i class="lni lni-notepad"></i>
                Notes
            </router-link>
        </li>

        <li>
            <router-link to="/categories" active-class="active">
                <i class="lni lni-star"></i>
                Categories
            </router-link>
        </li>
        <li>
            <router-link to="/tags" active-class="active">
                <i class="lni lni-tag"></i>
                Tags
            </router-link>
        </li>

        <li>
            <router-link to="/notes/trashed" class="" active-class="text-red-600 "
            >
                <i class="lni lni-trash-can"></i>
                Trashed
            </router-link>
        </li>

        <li class="spacer"></li>
        <li class="align-self-end">
            <router-link to="/notes/trashed" class="" active-class="text-red-100 bg-red-600"
            >
                <i class="lni lni-exit"></i>
                Logout
            </router-link>
        </li>


    </ul>
</template>
