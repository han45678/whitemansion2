<script setup>
import { ref } from 'vue';
</script>

<template>
    <article class="s11">
        <div class="pic">
            <img
                src="./s11/banner.webp"
                alt="banner"
            />
        </div>
        <div class="text">
            <h3 data-aos="fade-in">
                大南科共榮圈，<br />
                自住置產最優選。
            </h3>
            <p data-aos="fade-up">
                隨大南方新矽谷落地，南科共榮圈成為長線焦點。新化座落南科、沙崙雙核心之間，低基期
                × ALL IN ONE精裝修，小成本兼顧自住與置產，迎接產業大未來。
            </p>
        </div>
    </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s11 {
    .pic {
        width: 100%;
        img {
            width: 100%;
            display: block;
        }
    }
    .text {
        padding: size(120) size(270) size(145) size(270);
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        @media screen and (max-width: 768px) {
            padding: size-m(60) size-m(35);
            text-align: center;
        }
        h3 {
            font-size: size(49);
            font-weight: 700;
            line-height: size(78);
            letter-spacing: size(1.47);
            width: size(405);
            @media screen and (max-width: 768px) {
                line-height: normal;
                font-size: size-m(33);
                letter-spacing: size-m(0.99);
                margin-bottom: size-m(20);
                width: 100%;
            }
        }
        p {
            font-size: size(23);
            font-weight: 500;
            line-height: size(50);
            letter-spacing: size(2.07);
            width: size(805);
            @media screen and (max-width: 768px) {
                font-size: size-m(12);
                font-weight: 500;
                line-height: size-m(22);
                width: 100%;
            }
        }
    }
}
</style>
