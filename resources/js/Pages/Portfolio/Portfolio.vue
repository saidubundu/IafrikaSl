<template>
    <div>
        <!-- Project Details Starts -->
        <figcaption>
            <h3>{{data.title}}</h3>
            <div class="row open-sans-font">
                <div class="col-6 mb-2">
                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">{{data.project}}</span>
                </div>
                <div class="col-6 mb-2">
                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Host </span>: <span class="ft-wt-600 uppercase">{{data.host}}</span>
                </div>
                <div class="col-6 mb-2">
                    <i class="fa fa-code pr-2"></i><span class="project-label">Guest </span>: <span class="ft-wt-600 uppercase">{{data.guest}}</span>
                </div>
                <div class="col-6 mb-2">
                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">{{data.preview}}</a></span>
                </div>
            </div>
        </figcaption>
        <!-- Project Details Ends -->
        <!-- Main Project Content Starts -->
        <div class="videocontainer">
            <iframe class="youtube-video" :src="link_url" allowfullscreen></iframe>
        </div>
        <!-- Main Project Content Ends -->
    </div>
</template>

<script>
    export default {
        name: "Portfolio",
        props:['data'],
        computed:{
            link_url(){
                return this.data.link
            }
        }
    }
</script>

<style scoped>

</style>
