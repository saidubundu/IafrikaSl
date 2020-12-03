<template>
    <app-home>

        <body class="contact light">
        <!-- Header Starts -->
        <tool-bar></tool-bar>
        <!-- Header Ends -->
        <!-- Page Title Starts -->
        <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
            <h1>get in <span>touch</span></h1>
            <span class="title-bg">contact</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content revealator-slideup revealator-once revealator-delay1">
            <div class="container">
                <div class="row">
                    <!-- Left Side Starts -->
                    <div class="col-12 col-lg-4">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                        <p class="open-sans-font mb-3">Feel free to get in touch with us. We are always open to discussing new projects, creative ideas or opportunities to be part of your visions.</p>
                        <p class="open-sans-font custom-span-contact position-relative">
                            <i class="fa fa-envelope-open position-absolute"></i>
                            <span class="d-block">mail us</span>{{about.email}}
                        </p>
                        <p class="open-sans-font custom-span-contact position-relative">
                            <i class="fa fa-phone-square position-absolute"></i>
                            <span class="d-block">call us</span>{{about.phone}}
                        </p>
                        <ul class="social list-unstyled pt-1 mb-5">
                            <li class="facebook"><a title="Facebook" :href="facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter"><a title="Twitter" :href="twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="youtube"><a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li class="dribbble"><a title="Instagram" :href="instagram"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Left Side Ends -->
                    <!-- Contact Form Starts -->
                    <div class="col-12 col-lg-8">
                        <form class="contactform">
                            <div class="contactform">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <input v-model="form.name" type="text" name="name" placeholder="YOUR NAME">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input v-model="form.email" type="email" name="email" placeholder="YOUR EMAIL">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input v-model="form.subject" type="text" name="subject" placeholder="YOUR SUBJECT">
                                    </div>
                                    <div class="col-12">
                                        <textarea v-model="form.message" name="message" placeholder="YOUR MESSAGE"></textarea>
                                        <button type="submit" class="btn btn-contact" @click="send">Send Message</button>
                                    </div>
                                    <div class="col-12 form-message">
                                        <span class="output_message text-center font-weight-600 text-uppercase"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form Ends -->
                </div>
            </div>

        </section>

        </body>
    </app-home>
</template>

<script>
    import AppHome from "../../Layouts/AppHome";
    import ToolBar from "../Shared/ToolBar";
    export default {
        name: "Index",
        components: {ToolBar, AppHome},
        props:['abouts'],
        data(){
            return{
                form:{
                    name:null,
                    email:null,
                    subject:null,
                    message:null
                },
                about: this.abouts.data
            }
        },

        computed: {
            facebook(){
                return this.about.facebook
            },
            twitter(){
                return this.about.twitter
            },
            instagram(){
                return this.about.instagram
            }
        },
        methods:{
            send(){
                this.$inertia.post('/contact', this.form)
                // .then(
                //     this.form.name = '',
                //     this.form.email= '',
                //     this.form.subject= '',
                //     this.form.message= ''
                // )
            }
        }
    }
</script>

<style scoped>

</style>
