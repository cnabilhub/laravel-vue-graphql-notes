import { createWebHistory, createRouter } from "vue-router";
import Home from "@/views/Home.vue";
import Notes from "@/views/Notes.vue";
import Tags from "@/views/Tags.vue";
import Categories from "@/views/Categories.vue";
import Trashed from "@/views/Trashed.vue";
import NotFound from "@/views/NotFound.vue";
import SingleNote from "@/views/SingleNote.vue";

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
        path: "/notes/:id",
        name: "SingleNote",
        component: SingleNote,
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
    {
        path: "/notes/trashed",
        name: "Trashed",
        component: Trashed,
    },
    {
        path: "/:catchAll(.*)",
        component: NotFound,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
