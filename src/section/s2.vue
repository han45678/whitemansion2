<script setup>
import Fullview from '../components/fullview.vue'
</script>

<template>
  <article class="s2 relative" id="s2">
    <!-- 桌機版：自動縮放 -->
    <div class="map hidden md:block">
      <img src="@/section/s2/map.webp" alt="bg_decor" />
    </div>

    <!-- 手機版：左右滑動 -->
    <div class="map block md:hidden">
      <Fullview />
    </div>
  </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s2 {
  width: 100%;
  position: relative;
  box-sizing: border-box;

  .map {
    position: relative;
    z-index: 1;

    @media screen and (min-width: 768px) {
      img {
        width: 100%; // 桌機自適應
        height: auto;
        display: block;
      }
    }
  }
}
</style>
