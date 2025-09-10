<script setup>
import info from "@/info"
import S1 from "@/section/s1.vue"
import S2 from "@/section/s2.vue"
import S3 from "@/section/s3.vue"
import S4 from "@/section/s4.vue"
import S5 from "@/section/s5.vue"
import S6 from "@/section/s6.vue"
import S7 from "@/section/s7.vue"
import S8 from "@/section/s8.vue"
import S9 from "@/section/s9.vue"
import S10 from "@/section/s10.vue"
import S11 from "@/section/s11.vue"
import S12 from "@/section/s12.vue"
import Order from "@/section/order.vue"
//import Menu from "@/section/menu.vue"
import { onMounted, ref } from "vue"

import AOS from 'aos';

const isLoading = ref(true)
const gtmNoScript = ref('')

onMounted(() => {
  window.onload = function () {
    isLoading.value = false
    AOS.init();
  };

})
</script>

<template>
  <div ref="gtmNoScript" />
  <!--loading-->
  <div v-bind:class="{
    'opacity-0': !isLoading,
    'pointer-events-none': !isLoading
  }"
    class="transition-all duration-500	flex-col flex items-center justify-center fixed w-screen h-screen top-0 left-0 bg-white z-[100]">
    <img class="w-32" src="@/assets/loading_w.gif" alt="長築白樓" srcset="">
  </div>
  <!--loading end-->
  <!--<Menu />-->
  <div class="home bg-white overflow-hidden font-['Noto_Sans_TC']">
    <S1 />
    <S2 />
    <S3 />
    <S4 />
    <S5 />
    <S6 />
    <S7 />
    <S8 />
    <S9 />
    <S10 />
    <S11 />
    <S12 />
    <Order />
  </div>
</template>

<style>
.aos-init {
  transition: all 1s ease !important;
}
</style>