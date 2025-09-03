<template>
  <section class="s1 text-white bg-[#D9374B] relative">
    <img data-aos="fade-left" data-aos-delay="0" class="people absolute" src="@/section/s1/people.png">
    <h1><img data-aos="zoom-in" data-aos-delay="200" class="main absolute" src="@/section/s1/main.svg" alt="威泰錢都20 戀JIA NEW HOUSE"></h1>
    <h3 class="text-[#FFF100] absolute">航空城-客運園區 飛向未來！</h3>
    <h2 data-aos="flip-left" data-aos-delay="400" class="absolute text-center">重劃新星<span class="hidden md:inline"> </span><span>大園新都心</span></h2>
    <h4 class="absolute text-center">
      <span class="line1">
        <span class="text-[#FFF100]">國中小學區</span> X <span class="text-[#FFF100]">低密度綠活</span> X <span class="text-[#FFF100]">減擔好室</span>
      </span>
      <br>
      <span class="line2">
        <span class="text-[#FFF100]">S</span>mile house, <span class="text-[#FFF100]">S</span>imple life, <span class="text-[#FFF100]">S</span>tart new future
      </span>
    </h4>
    <p data-aos="flip-left" data-aos-delay="600" class="absolute text-center">
      從1 到20，一步一腳印<br class="md:hidden"><span class="hidden md:inline">，</span>威泰錢都20 期，用心圓夢！<br>
      圓從1 期開始的建築初衷<br class="md:hidden"><span class="hidden md:inline">─</span>實用家居的起造者<br>
      圓每個為夢想奮鬥的您<br class="md:hidden"><span class="hidden md:inline">，</span>一個薪享室成的居所
    </p>
  </section>
</template>

<style lang="scss">
@import "@/assets/style/function.scss";

.s1 {
  width: 100%;
  height: size-m(736);
  font-weight: 500;
  @media screen and (min-width:768px) {
    height: size(1080);
  }
  
  .people {
    top: size-m(283);
    left: size-m(151);
    width: size-m(180);
    @media screen and (min-width:768px) {
      top: size(132);
      left: size(198);
      width: size(416);
    }
  }

  .main {
    top: size-m(40);
    left: size-m(45);
    width: size-m(288);
    @media screen and (min-width:768px) {
      top: size(346);
      left: size(189);
      width: size(618);
    }
  }
  
  h3 {
    left: size-m(45);
    top: size-m(251);
    line-height: size-m(29);
    font-size: 5vw;
    @media screen and (min-width:768px) {
      left: size(189);
      top: size(787);
      line-height: size(71);
      font-size: 2.48vw;
    }
  }
  
  h2 {
    left: size(1013);
    top: size(435);
    line-height: size(107);
    font-weight: 900;
    font-size: 3.95vw;
    @media screen and (max-width:767px) {
      width: size-m(200);
      left: size-m(131);
      top: size-m(379);
      font-size: 13vw;
      line-height: 15vw;

      span {
        font-size: 10.6vw;
        line-height: 1;
      }
    }
  }

  h4 {
    left: size(960);
    top: size(548);
    line-height: size(58);
    font-size: 2.06vw;
     
    @media screen and (max-width:767px) {
      left: size-m(112);
      top: size-m(493);
      line-height: 5vw;

      .line1 {
        font-size: 3.77vw;
      }
        
      .line2 {
        font-size: 3.17vw;
      }
    }
  }
  
  p {
    left: size-m(136);
    top: size-m(550);
    font-size: 4vw;
    line-height: 7.2vw;
    @media screen and (min-width:768px) {
      left: size(993);
      top: size(706);
      font-size: 1.6vw;
      line-height: 2.7vw;
    }
  }
}

</style>

<script setup>
// import { inject } from 'vue';
// const smoothScroll = inject('smoothScroll')
// const scrollTo = (el) => {
//   smoothScroll({
//     scrollTo: document.querySelector(el)
//   })
// }
</script>
