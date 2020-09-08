<template>
    <div class="alert alert-success alert-flash" role="alert" v-show="show">
        <strong>{{ body }}</strong>
    </div>
</template>

<script>

</script>

<style>
    .alert-flash {
        position: fixed;
        right: 25px;
        bottom: 25px;
    }
</style>
