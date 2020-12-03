<template>
    <article class="post-container">
        <div class="post-thumb">
            <a :href="path" class="d-block position-relative overflow-hidden">
                <img :src="image_url" class="img-fluid" alt="Blog Post">
            </a>
        </div>
        <div class="post-content">
            <div class="entry-header">
                <h3><a :href="path">{{data.title}}</a></h3>
            </div>
            <div class="entry-content open-sans-font">
                <p>{{data.excerpt}}</p>
            </div>
        </div>
    </article>
</template>

<script>
    export default {
        name: "Posts",
        props:['data'],

        computed:{
            image_url(){
                return this.data.image
            },

            path(){
                return this.data.path
            }
        }
    }
</script>

<style scoped>

</style>
