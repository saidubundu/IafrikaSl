<template>
    <app-home>
        <body class="blog light">
        <!-- Header Starts -->
        <tool-bar></tool-bar>
        <!-- Header Ends -->
        <!-- Page Title Starts -->
        <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
            <h1> <span>juu</span></h1>
            <span class="title-bg">posts</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content revealator-slideup revealator-once revealator-delay1">
            <div class="container">
                <!-- Articles Starts -->
                <div class="row">
                    <!-- Article Starts -->
                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30" v-if="posts" v-for="post in Allpost" :key="post.id" >
                        <posts :data="post"></posts>
                    </div>
                    <!-- Pagination Starts -->
                    <pagination :links="link" />
                    <!-- Pagination Ends -->
                </div>
                <!-- Articles Ends -->
            </div>

        </section>


        </body>
    </app-home>
</template>

<script>
    import AppHome from "../../Layouts/AppHome";
    import ToolBar from "../Shared/ToolBar";
    import Posts from "./Posts";
    import Pagination from "../Shared/Pagination";
    export default {
        name: "Index",
        components: {Pagination, Posts, ToolBar, AppHome},
        props:['posts'],
        data(){
            return{
                Allpost: this.posts.data,
                link: this.posts.meta.links
            }
        }
    }
</script>

<style scoped>

</style>
