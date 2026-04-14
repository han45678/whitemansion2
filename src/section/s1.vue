<script setup></script>

<template>
    <section class="s1 text-[#000] font-['Noto_Sans_TC']">
        <!-- <img class="t0" src="./s1/1.jpg"> -->
        <div class="w1" data-aos="fade-right" data-aos-delay="600"><img src="./s1/w.svg" alt="波浪" data-aos-offset="-300" /></div>
        <div class="w2" data-aos="fade-right" data-aos-delay="400"><img src="./s1/w.svg" alt="波浪" data-aos-offset="-300" /></div>
        <img class="pic" src="./s1/pic.webp" data-aos="fade-right" alt="pic" data-aos-delay="0" data-aos-offset="-300" />
        <img class="logo" src="./s1/logo.svg" alt="logo" data-aos="zoom-in" data-aos-offset="-300" />
        <img class="slogo" src="./s1/slogo.svg" alt="slogo" data-aos="zoom-in" data-aos-delay="1000" data-aos-offset="-300" />

    </section>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s1 {
    position: relative;
    width: 100%;
    min-height: size(900);
    height: 100dvh;
    max-height: size(1070);
    background: url("./s1/bg.jpg") center center / cover;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    padding-left: size(680);


    // background-color: #fde360;

    @media screen and (max-width: 768px) {
        min-height: size-m(604);
        max-height: size-m(720);
        background-image: url("./s1/bgm.jpg");
        padding-left: size(0);

    }

    .t0 {
        pointer-events: none;
        position: absolute;
        width: 100%;
        left: 0;
        top: 0;
        z-index: 10;
        opacity: 0.5;

    }


    .logo {
        pointer-events: none;
        width: size(720);
        margin-top: size(80);


        @media screen and (max-width: 768px) {
        margin-top: size-m(103);
        width: size-m(330);
        }
    }

    .slogo {
        margin-top: size(90);
        width: size(550);

        @media screen and (max-width: 768px) {
            width: size-m(240);
            margin: auto size-m(20) size-m(15) auto;
        }
    }

    .pic {
        pointer-events: none;
        position: absolute;
        width: size(707);
        left: 0;
        bottom: size(-65);

        @media screen and (max-width: 768px) {
            width: size-m(310);
            left: size-m(-25);
            bottom: 0;
        }
    }

    .w1 {
        pointer-events: none;
        position: absolute;
        width: size(721);
        height: size(190);
        left: size(-260);
        bottom: size(500);

        @media screen and (max-width: 768px) {
            width: size-m(430);
            height: size-m(100);
            left: size-m(-135);
            bottom: size-m(130);
        }

        img {
            width: 100%;
            height: 100%;
            transform: rotate(175deg);
        }
    }

    .w2 {
        pointer-events: none;
        position: absolute;
        width: size(750);
        height: size(150);
        left: size(300);
        bottom: size(4);

        @media screen and (max-width: 768px) {
            width: size-m(630);
            height: size-m(150);
            left: size-m(-80);
            bottom:  size-m(10);
        }

        img {
            width: 100%;
            height: 100%;
        }
    }
}
</style>
