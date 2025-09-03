<template>
    <div class="gmap relative z-10">
        <iframe :src="info.googleSrc" frameborder="0"></iframe>
    </div>
</template>

<style lang="scss">
@import "@/assets/style/function.scss";

.gmap {
    width: 100%;
    height: size(500);

    iframe {
        width: 100%;
        height: 100%;
    }
}

@media screen and (max-width:768px) {
    .gmap {
        height: size-m(354);
    }
}
</style>

<script setup>
import info from "@/info"

</script>