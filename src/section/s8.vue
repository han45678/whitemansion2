<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';

import { computed, getCurrentInstance, ref, inject, onMounted } from "vue";
const globals = getCurrentInstance().appContext.config.globalProperties;
const isMobile = computed(() => globals.$isMobile());

const splide = ref();
const currentSlideIndex = ref(0);
const moved = (newIdx, prevIdx, destIdx) => {
    currentSlideIndex.value = prevIdx
}

const options = computed(() => {
    let perPage = 1.5;
    return {
        rewind: true,
        arrows: false,
        pagination: false,
        autoplay: true,
        interval: 4000,
        perPage,
        focus: "left",
        gap: 10,
        type: 'loop'
    }
});

const imgs = [
    {
        img: new URL("./s8/01.jpg", import.meta.url).href,
        caption: "Lobby 3d透視參考示意圖",
        width: '1210px'
    },
    {
        img: new URL("./s8/03.jpg", import.meta.url).href,
        caption: "Lobby 3d透視參考示意圖",
        width: '898px'
    },
    {
        img: new URL("./s8/01.jpg", import.meta.url).href,
        caption: "Lobby 3d透視參考示意圖",
        width: '1210px'
    },
]
</script>

<template>
    <section class="s8 text-[#000] relative">
        <div class="slider" data-aos="fade">
            <Splide ref="splide" class="slide" @splide:move="moved" :options="options">
                <SplideSlide class="slide-item" v-for="(img, idx) in imgs" :key="img"
                    :style="{ maxWidth: img.width }">
                    <img :src="img.img" :alt="img.caption">
                    <span class="caption absolute">{{ img.caption }}</span>
                </SplideSlide>
            </Splide>
        </div>
        <div class="text">
            <span class="text-[#595757] block md:hidden">＊3d示意圖僅供參考，以上之傢俱、飾品、畫作及植栽為情境示意表現，建設公司保有修正之權利</span>
            <h3 data-aos="fade-in" data-aos-duration="400">精緻而實用，放大「家」的生活維度。</h3>
            <div class="content_text">
                <span class="text-[#595757] hidden md:block">＊3d示意圖僅供參考，以上之傢俱、飾品、畫作及植栽為情境示意表現，建設公司保有修正之權利</span>
                <p data-aos="fade-up" data-aos-duration="600">
                    長磯機構｜長築興業以「實用 ×
                    質感」的生活美學規劃公設，讓公領域真正融入居者日常。視公共空間為居家功能與尺度的延伸；在簡潔俐落的設計中，營造精緻優雅、易於維護的共享場域。
                </p>
            </div>
        </div>
    </section>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s8 {
    width: 100%;
    background: #fffcf1;
    padding-top: size(120);
    padding-bottom: size(90);

    @media screen and (max-width: 768px) {
        padding-top: 0;
        padding-bottom: size-m(35);
    }

    //文字區
    .text {
        padding: size(10) size(150) 0;
        display: flex;
        flex-wrap: wrap;
        align-items: center;

        @media screen and (max-width: 768px) {
            padding: size-m(10) size-m(13) 0;
        }

        h3 {
            width: 55%;
            font-size: size(45);
            font-weight: 700;
            letter-spacing: size(2.25);
            margin-top: size(25);

            @media screen and (max-width: 768px) {
                width: 100%;
                font-size: size-m(20);
                margin-bottom: size-m(20);
            }
        }

        .content_text {
            width: 40%;

            @media screen and (max-width: 768px) {
                width: 100%;
                padding: 0 size-m(20);
            }
        }

        span {
            font-size: size(14);
            font-weight: 500;
            line-height: size(43);
            letter-spacing: size(0.14);
            margin-bottom: size(50);

            @media screen and (max-width: 768px) {
                font-size: size-m(10);
                font-weight: 400;
                line-height: size-m(12);
                margin-bottom: size-m(30);
                width: 100%;
                padding: 0 size-m(20);
            }
        }

        p {
            font-size: size(20);
            font-weight: 500;
            line-height: size(43);
            letter-spacing: size(0.8);
            text-align: justify;

            @media screen and (max-width: 768px) {
                font-size: size-m(12.1);
                line-height: size-m(20);
            }
        }
    }

    //輪播
    .slider {

        //圖說
        .caption {
            position: absolute;
            color: #fff;
            font-size: size(16);
            left: size(35);
            top: size(20);

            @media screen and (max-width: 768px) {
                font-size: sizem(12);
                left: sizem(10);
                bottom: sizem(5);
            }

            span {
                font-size: size(25);

                @media screen and (max-width: 768px) {
                    font-size: sizem(15);
                }
            }
        }
    }
}
</style>