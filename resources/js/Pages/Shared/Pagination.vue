<template>
    <div class="col-12 mt-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mb-0" >
                <template v-for="(link, key) in links">
                    <li class="page-item" :class="{ 'page-item active' : link.active }">
                        <inertia-link  class="page-link" :href="link.url">{{link.label}}</inertia-link>
                    </li>
                </template>
<!--                <template v-for="(link, key) in links">-->
<!--                    <div v-if="link.url === null" :key="key" class="mr-1 mb-1 px-4 py-3 text-sm border rounded text-gray-400" :class="{ 'ml-auto': link.label === 'Next' }">{{ link.label }}</div>-->
<!--                    <inertia-link v-else :key="key" class="mr-1 mb-1 px-4 py-3 text-sm border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500" :class="{ 'bg-white': link.active, 'ml-auto': link.label === 'Next' }" :href="link.url">{{ link.label }}</inertia-link>-->
<!--                </template>-->

<!--                <li class="page-item" :class="{ 'page-item active' : link.active }" v-for="(link, key) in links">-->
<!--                    <inertia-link  class="page-link"  :href="link.url">{{link.label}}</inertia-link>-->
<!--                </li>-->
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        name: "Pagination",
        props: {
            links: Array,
        },
    }
</script>

<style scoped>

</style>
