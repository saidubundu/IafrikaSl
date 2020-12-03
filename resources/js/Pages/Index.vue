<template>
    <body class="home light">
    <!-- Header Starts -->
    <tool-bar></tool-bar>
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    <section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
        <div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
            <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                <div>
                    <img :src="profile" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                    <!--                    <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">hi there !</h6>-->
                    <h1 class="text-uppercase poppins-font"><span></span> {{Me.first_name}} {{Me.last_name}}</h1>
                    <p class="open-sans-font">{{Me.bio}}.</p>
                    <a href="/about" class="btn btn-about">more about us</a>
                </div>
            </div>
        </div>
    </section>


    </body>
</template>

<script>
    import ToolBar from "./Shared/ToolBar";
    export default {
        name: "Index",
        components: {ToolBar},
        props:['about'],
        data(){
            return{
                Me: this.about.data,
            }
        },
        computed:{
            profile(){
                return this.Me.image
            }
        }
    }
</script>

<style scoped>

</style>
