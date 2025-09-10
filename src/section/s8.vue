<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';
</script>

<template>
    <section class="s8 text-[#000] relative">
        <div class="pic hidden md:block">
            <Swiper
                :slidesPerView="1"
                :loop="true"
                :autoplay="true"
                :modules="[Pagination, Autoplay]"
                :pagination="{ clickable: true }"
            >
                <SwiperSlide>
                    <div class="pic_item relative">
                        <img
                            src="./s8/01.jpg"
                            alt="pic"
                        />
                        <p class="absolute text-[#fff]">
                            Lobby 3d透視參考示意圖
                        </p>
                    </div>
                    <div class="pic_item relative">
                        <img
                            src="./s8/02.jpg"
                            alt="pic"
                        />
                        <p class="absolute text-[#fff]">
                            Lobby 3d透視參考示意圖
                        </p>
                    </div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="pic_item relative">
                        <img
                            src="./s8/03.jpg"
                            alt="pic"
                        />
                        <p class="absolute text-[#fff]">
                            Lobby 3d透視參考示意圖
                        </p>
                    </div>
                    <div class="pic_item relative">
                        <img
                            src="./s8/04.jpg"
                            alt="pic"
                        />
                        <p class="absolute text-[#fff]">
                            Lobby 3d透視參考示意圖
                        </p>
                    </div>
                </SwiperSlide>
            </Swiper>
        </div>
        <div class="pic block md:hidden">
            <Swiper
                :slidesPerView="1"
                :loop="true"
                :autoplay="true"
                :modules="[Pagination, Autoplay]"
                :pagination="{ clickable: true }"
            >
                <SwiperSlide class="relative">
                    <img
                        src="./s8/01m.jpg"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">Lobby 3d透視參考示意圖</p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img
                        src="./s8/02m.jpg"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">Lobby 3d透視參考示意圖</p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img
                        src="./s8/03m.jpg"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">Lobby 3d透視參考示意圖</p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img
                        src="./s8/04m.jpg"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">Lobby 3d透視參考示意圖</p>
                </SwiperSlide>
            </Swiper>
        </div>
        <div class="text">
            <span class="text-[#595757] block md:hidden"
                >＊3d示意圖僅供參考，以上之傢俱、飾品、畫作及植栽為情境示意表現，建設公司保有修正之權利</span
            >
            <h3 data-aos="fade-in">精緻而實用，放大「家」的生活維度。</h3>
            <div
                class="content_text"
                data-aos="fade-up"
            >
                <span class="text-[#595757] hidden md:block"
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

    @media screen and (max-width: 768px) {
        padding-top: 0;
        padding-bottom: size-m(35);
    }

    .pic {
        width: 100%;
        position: relative;

        @media screen and (max-width: 768px) {
            width: 100%;
        }

        .swiper-slide {
            display: flex;
            width: 100%;
            gap: 0 size(40);

            .swiper-slide {
                width: 100%;
                display: flex;
            }
            img {
                height: auto;

                @media screen and (max-width: 768px) {
                    width: 100%;
                }
            }
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
                    display: inline-block;
                }

                &.swiper-pagination-bullet-active {
                    background-color: #fff;
                }
            }
        }
    }

    .text {
        padding-top: size(10);
        padding-left: size(200);
        padding-right: size(180);
        display: flex;
        flex-wrap: wrap;
        align-items: center;

        @media screen and (max-width: 768px) {
            padding-top: size-m(10);
            padding-left: size-m(40);
            padding-right: size-m(40);
        }

        h3 {
            width: 55%;
            font-size: size(45);
            font-weight: 700;
            letter-spacing: size(2.25);

            @media screen and (max-width: 768px) {
                width: 100%;
                font-size: size-m(20);
                margin-bottom: size-m(20);
            }
        }

        .content_text {
            width: 45%;

            @media screen and (max-width: 768px) {
                width: 100%;
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
            }
        }

        p {
            font-size: size(20);
            font-weight: 500;
            line-height: size(43);
            letter-spacing: size(0.8);

            @media screen and (max-width: 768px) {
                font-size: size-m(12);
                line-height: size-m(20);
            }
        }
    }
}
</style>
