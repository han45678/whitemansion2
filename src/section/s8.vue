<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';
</script>

<template>
    <section class="s8 text-[#000] relative">
        <div class="pic">
            <Swiper
                :loop="true"
                :autoplay="true"
                :modules="[Pagination, Autoplay]"
                :pagination="{ clickable: true }"
                :slides-per-view="'auto'"
                :space-between="20"
            >
                <SwiperSlide class="relative">
                    <img
                        src="./s8/1.webp"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">新化系統交流道(國3X國8)</p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img
                        src="./s8/2.webp"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">新港社大道</p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img
                        src="./s8/3.webp"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">北外環快速道路</p>
                </SwiperSlide>
            </Swiper>
        </div>
        <div class="text">
            <h3>精緻而實用，放大「家」的生活維度。</h3>
            <div class="content_text">
                <span class="text-[#595757]"
                    >＊3d示意圖僅供參考，以上之傢俱、飾品、畫作及植栽為情境示意表現，建設公司保有修正之權利</span
                >
                <p>
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

    .pic {
        width: 100%;
        position: relative;
        .swiper-slide {
            width: auto !important; // ✅ 保持圖片原始寬度
        }

        .swiper-slide img {
            display: block;
            height: auto;
        }
        p {
            left: size(35);
            top: size(20);
            @media screen and (max-width: 768px) {
                left: size-m(10);
                top: size-m(5);
            }
        }

        .swiper-pagination {
            text-align: right;
            padding-right: size(30);
            .swiper-pagination-bullet {
                border-radius: 100%;
                border: 1px solid #fff;
                width: size(20);
                height: size(20);
                margin-right: 0;
                margin-left: size(20);
                display: none;
                @media screen and (max-width: 768px) {
                    width: size-m(8);
                    height: size-m(8);
                    margin-left: size-m(8);
                    display: block;
                }
                &.swiper-pagination-bullet-active {
                    background-color: #fff;
                }
            }
        }
        @media screen and (max-width: 768px) {
            width: 100%;
        }
    }

    .text {
        padding-top: size(10);
        padding-left: size(200);
        padding-right: size(180);
        display: flex;
        align-items: center;
        // gap: 0 size(125);
        h3 {
            width: 55%;
            font-size: 45px;
            font-weight: 700;
            letter-spacing: 2.25px;
        }
        .content_text {
            width: 45%;
            span {
                font-size: 14px;
                font-weight: 500;
                line-height: 43px;
                letter-spacing: 0.14px;
                margin-bottom: size(50);
            }
            p {
                font-size: 20px;
                font-weight: 500;
                line-height: 43px;
                letter-spacing: 0.8px;
            }
        }
    }
}
</style>
