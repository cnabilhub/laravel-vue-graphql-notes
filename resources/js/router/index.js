import { createWebHistory, createRouter } from "vue-router";
import Home from "@/views/Home.vue";
import Notes from "@/views/Notes.vue";
import Tags from "@/views/Tags.vue";
import Categories from "@/views/Categories.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/notes",
        name: "Notes",
        component: Notes,
    },
    {
        path: "/tags",
        name: "Tags",
        component: Tags,
    },
    {
        path: "/categories",
        name: "Categories",
        component: Categories,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
