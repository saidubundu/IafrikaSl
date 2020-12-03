<template>
    <figure>
        <img :src="cover_photo" alt="Portolio Image" />
        <div><span>{{data.project}}</span></div>
    </figure>
</template>

<script>
    export default {
        name: "PortfolioGrid",
        props:['data'],
        computed:{
            cover_photo(){
                return this.data.photo
            }
        }
    }
</script>

<style scoped>

</style>
