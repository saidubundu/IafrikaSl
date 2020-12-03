<template>
    <app-home>
        <body class="about light">
        <!-- Header Starts -->
        <tool-bar></tool-bar>
        <!-- Header Ends -->
        <!-- Page Title Starts -->
        <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
            <h1>ABOUT <span>US</span></h1>
            <span class="title-bg">Resume</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content revealator-slideup revealator-once revealator-delay1">
            <div class="container">
                <div class="row">
                    <!-- Personal Info Starts -->
                    <div class="col-12 col-lg-5 col-xl-6">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-uppercase custom-title mb-0 ft-wt-600">IAFRIKA SL infos</h3>
                            </div>
                            <div class="col-12 d-block d-sm-none">
                                <img :src="image_url" class="img-fluid main-img-mobile" alt="my picture" />
                            </div>
                            <div class="col-6">
                                <ul class="about-list list-unstyled open-sans-font">
                                    <li> <span class="title">Company name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{about.first_name}} {{about.last_name}}</span> </li>
                                    <li> <span class="title">Founded :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">27 Years</span> </li>
                                    <li> <span class="title">Nationality :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{about.nationality}}</span> </li>
                                    <li> <span class="title">Freelance :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span> </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="about-list list-unstyled open-sans-font">
                                    <li> <span class="title">Address :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{about.address}}</span> </li>
                                    <li> <span class="title">phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{about.phone}}</span> </li>
                                    <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{about.email}}</span> </li>
                                    <li> <span class="title">Skype :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">steve.milner</span> </li>
                                    <li> <span class="title">langages :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{about.languages}}</span> </li>
                                </ul>
                            </div>
<!--                            <div class="col-12 mt-3">-->
<!--                                <a href="about.html" class="btn btn-download">Download CV</a>-->
<!--                            </div>-->
                        </div>
                    </div>
                    <!-- Personal Info Ends -->
                    <!-- Boxes Starts -->
<!--                    <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">-->
<!--                        <div class="row">-->
<!--                            <div class="col-6">-->
<!--                                <div class="box-stats with-margin">-->
<!--                                    <h3 class="poppins-font position-relative">12</h3>-->
<!--                                    <p class="open-sans-font m-0 position-relative text-uppercase">years of <span class="d-block">experience</span></p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-6">-->
<!--                                <div class="box-stats with-margin">-->
<!--                                    <h3 class="poppins-font position-relative">97</h3>-->
<!--                                    <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">projects</span></p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-6">-->
<!--                                <div class="box-stats">-->
<!--                                    <h3 class="poppins-font position-relative">81</h3>-->
<!--                                    <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span class="d-block">customers</span></p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-6">-->
<!--                                <div class="box-stats">-->
<!--                                    <h3 class="poppins-font position-relative">53</h3>-->
<!--                                    <p class="open-sans-font m-0 position-relative text-uppercase">awards <span class="d-block">won</span></p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- Boxes Ends -->
                </div>
                <!-- Skills Ends -->
                <hr class="separator mt">
                <div class="row">
                    <div class="col-12 col-lg-5 col-xl-6">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-uppercase custom-title mb-0 ft-wt-600">CEO & Founder infos</h3>
                            </div>
                            <div class="col-12 d-block d-sm-none">
                                <img :src="ceo_url" class="img-fluid main-img-mobile" alt="my picture" />
                            </div>
                            <div class="col-6">
                                <ul class="about-list list-unstyled open-sans-font">
                                    <li> <span class="title">first name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ceo.first_name}}</span> </li>
                                    <li> <span class="title">last name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ceo.last_name}}</span> </li>
                                    <li> <span class="title">Age :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ceo.age}}</span> </li>
                                    <li> <span class="title">Nationality :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ceo.nationality}}</span> </li>
                                    <li> <span class="title">Freelance :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span> </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="about-list list-unstyled open-sans-font">
                                    <li> <span class="title">Address :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{about.address}}</span> </li>
                                    <li> <span class="title">phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{about.phone}}</span> </li>
                                    <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{about.email}}</span> </li>
                                    <li> <span class="title">Skype :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">steve.milner</span> </li>
                                    <li> <span class="title">langages :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{about.languages}}</span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Main Content Ends -->

        </body>
    </app-home>
</template>

<script>
    import AppHome from "../../Layouts/AppHome";
    import ToolBar from "../Shared/ToolBar";
    import Skills from "./Skills";
    import Resume from "./Resume";
    export default {
        name: "Index",
        components: {Resume, Skills, ToolBar, AppHome},
        props:['abouts', 'founder', 'experiences', 'skillz'],
        remember: {
            data: ['about'],
        },
        data(){
            return{
                about: this.abouts.data,
                ceo: this.founder.data,

            }
        },
        computed:{
            image_url(){
                return this.about.image
            },

            ceo_url(){
                return this.ceo.image
            }
        }
    }
</script>

<style scoped>

</style>
