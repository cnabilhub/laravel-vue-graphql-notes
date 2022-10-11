<template>

    <ul class="menu bg-base-50 w-56 p-2 rounded-box gap-2">
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


    </ul>
</template>
