<template>
    <body class="blog-post light">
    <!-- Header Starts -->
    <tool-bar></tool-bar>
    <!-- Header Ends -->
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>my <span>blog</span></h1>
        <span class="title-bg">posts</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row">
                <!-- Article Starts -->
                <article class="col-12">
                    <!-- Meta Starts -->
                    <div class="meta open-sans-font">
                        <span><i class="fa fa-user"></i> {{name}}</span>
                        <span class="date"><i class="fa fa-calendar"></i> {{data.day}} {{data.month}} {{data.year}}</span>
                        <span><i class="fa fa-tags"></i> {{category}}</span>
                    </div>
                    <!-- Meta Ends -->
                    <!-- Article Content Starts -->
                    <h1 class="text-uppercase text-capitalize">{{data.title}}</h1>
                    <img :src="image_url" class="img-fluid" alt="Blog image"/>
                    <div class="blog-excerpt open-sans-font pb-5" >
                        <p v-html="data.body"></p>

                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox"></div>

                    </div>

                    <!-- Article Content Ends -->
                    <div class="fb-comments" :data-href="url" data-numposts="6" data-width="" :data-colorscheme="color"></div>
                </article>
                <!-- Article Ends -->

            </div>
        </div>
    </section>
    </body>
</template>

<script>
    import ToolBar from "../Shared/ToolBar";
    export default {
        name: "ReadPost",
        components: {ToolBar},
        props:['post'],
        data(){
            return{
                data: this.post.data,
                name: this.post.data.author_name.name,
                category: this.post.data.category.name
            }
        },

        computed:{
            image_url(){
                return this.data.image
            },

            url(){
                return `http://bash.com/juu/${this.data.slug}`
            },
            color(){
                return 'light'
            }
        }
    }
</script>

<style scoped>

</style>
