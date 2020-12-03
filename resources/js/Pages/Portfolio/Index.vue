<template>
    <app-home>
        <body class="portfolio light">
        <!-- Header Starts -->
        <tool-bar></tool-bar>
        <!-- Header Ends -->
        <!-- Page Title Starts -->
        <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
            <h1>our <span>portfolio</span></h1>
            <span class="title-bg">works</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
            <div id="grid-gallery" class="container grid-gallery">
                <!-- Portfolio Grid Starts -->
                <section class="grid-wrap">
                    <ul class="row grid">
                        <!-- Portfolio Item Starts -->
                        <li v-for="portfolio in port" :key="portfolio.id" >
                            <figure>
                                <portfolio-grid :data="portfolio"></portfolio-grid>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->

                    </ul>
                </section>
                <!-- Portfolio Grid Ends -->
                <!-- Portfolio Details Starts -->
                <section class="slideshow">
                    <ul >
                        <!-- Portfolio Item Detail Starts -->
                        <li v-for="portfolio in port" :key="portfolio.id">
                            <figure  >
                                <portfolio :data="portfolio"></portfolio>
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                    </ul>
                    <!-- Portfolio Navigation Starts -->
                    <nav>
                        <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow.png" alt="previous"></span>
                        <span class="icon nav-next"><img src="img/projects/navigation/right-arrow.png" alt="next"></span>
                        <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="close"> </span>
                    </nav>
                    <!-- Portfolio Navigation Ends -->


                </section>
            </div>
            <div class="container">
            <div class="row">
            <pagination :links="link" />
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
    import Portfolio from "./Portfolio";
    import PortfolioGrid from "./PortfolioGrid";
    import Pagination from "../Shared/Pagination";
    export default {
        name: "Index",
        components: {Pagination, PortfolioGrid, Portfolio, ToolBar, AppHome},
        props:['portfolios'],
        data(){
            return{
                port: this.portfolios.data,
                link: this.portfolios.meta.links
            }
        }
    }
</script>

<style scoped>

</style>
