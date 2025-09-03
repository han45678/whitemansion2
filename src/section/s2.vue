<template>
  <section class="s2 text-#595757 relative">
    <div class="rect absolute top-0 left-0"></div>
    <img class="style1 absolute" src="@/section/s2/style1.png">
    <img data-aos="zoom-in" class="style2 absolute" src="@/section/s2/style2.png">
    <img data-aos="flip-left" class="title_en absolute" src="@/section/s2/title_en.svg">
    <h2 data-aos="flip-left" class="text-[#D9374B] absolute">享受生活</h2>
    <h3 class="text-[#595757] absolute">愛自己，生活將會回饋你，<br>超越你所求所想！</h3>
    <p data-aos="flip-left" class="text-[#595757] absolute text-right">
      錢都20期，大樓 & 別墅<br>
      在桃園客運園區 寓見未來！<br>
      國際樂活建築 遇見最好的自己～<br>
      城市一靜 水綠靚界<br class="block md:hidden"><span class="hidden md:inline">；</span>實踐夢想幸福造鎮
    </p>
  </section>
</template>

<style lang="scss">
@import "@/assets/style/function.scss";

.s2 {

  @keyframes float {
    from {
      transform: translateX(0%);
    }

    to {
      transform: translateX(-10%);
    }
  }

  width: 100%;
  height: size-m(671);
  font-weight: 500;
  @media screen and (min-width:768px) {
    height: size(1080);
  }
  
  .rect {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 100vw size-m(104) 0;
    border-color: transparent #D9374B transparent transparent;
    @media screen and (min-width:768px) {
      border-width: 0 100vw size(304) 0;
    }
  }

  .style1 {
    width: size-m(233);
    left: size-m(112);
    top: size-m(-5);
    animation: float 6s alternate-reverse infinite ease-in-out;
    @media screen and (min-width:768px) {
      width: size(559);
      left: size(1345);
      top: size(70);
    }
  }

  .style2 {
    width: size-m(128);
    left: size-m(16);
    top: size-m(510);
    @media screen and (min-width:768px) {
      width: size(469);
      left: size(359);
      top: size(509);
    }
  }

  .title_en {
    width: size-m(54);
    left: size-m(45);
    top: size-m(62);
    @media screen and (min-width:768px) {
      width: size(148);
      left: size(70);
      top: size(180);
    }
  }

  h2 {
    left: size-m(45);
    top: size-m(319);
    font-size: size-m(54);
    line-height: size-m(78);
    font-weight: 900;
    @media screen and (min-width:768px) {
      left: size(242);
      top: size(137);
      font-size: size(133);
      line-height: size(193);
    }
  }

  h3 {
    left: size-m(46);
    top: size-m(398);
    font-size: size-m(18);
    line-height: size-m(26);
    @media screen and (min-width:768px) {
      left: size(260);
      top: size(329);
      font-size: size(44);
      line-height: size(64);
    }
  }

  p {
    left: size-m(131);
    top: size-m(470);
    font-size: size-m(14);
    line-height: size-m(20);
    @media screen and (min-width:768px) {
      left: size(1019);
      top: size(683);
      font-size: size(31);
      line-height: size(45);
    }
  }
}

</style>

<script setup>
</script>
