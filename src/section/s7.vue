<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination, Autoplay } from 'swiper'; // ✅ 正確寫法
import 'swiper/css';
import 'swiper/css/pagination';
</script>

<template>
    <section class="s7 text-[#fff] relative">
        <Swiper
            :slidesPerView="1"
            :loop="true"
            :autoplay="true"
            :modules="[Pagination, Autoplay]"
            :pagination="{ clickable: true }"
        >
            <SwiperSlide class="item relative">
                <img
                    src="./s7/1.webp"
                    alt="pic"
                />
                <div class="text absolute">
                    <h5>日間外觀3d透視參考示意圖</h5>
                    <p>
                        此為廣告效果示意，為單一建物電腦3d透視表現，周遭環境係電腦合成，建設公司保有建物外觀修正之權利
                    </p>
                </div>
                <span class="m_text absolute">新化老街</span>
            </SwiperSlide>
            <SwiperSlide class="item relative">
                <img
                    src="./s7/2.webp"
                    alt="pic"
                />
                <div class="text absolute">
                    <h5>日間外觀3d透視參考示意圖</h5>
                    <p>
                        此為廣告效果示意，為單一建物電腦3d透視表現，周遭環境係電腦合成，建設公司保有建物外觀修正之權利
                    </p>
                </div>
                <span class="m_text absolute">新化老街</span>
            </SwiperSlide>
            <SwiperSlide class="item relative">
                <img
                    src="./s7/3.webp"
                    alt="pic"
                />
                <div class="text absolute">
                    <h5>日間外觀3d透視參考示意圖</h5>
                    <p>
                        此為廣告效果示意，為單一建物電腦3d透視表現，周遭環境係電腦合成，建設公司保有建物外觀修正之權利
                    </p>
                </div>
                <span class="m_text absolute">新化老街</span>
            </SwiperSlide>
        </Swiper>

        <div class="b_text text-[#595757]">
            此為廣告效果示意，為單一建物電腦3d透視表現，
            周遭環境係電腦合成，建設公司保有建物外觀修正之權利
        </div>
        <div class="title">
            <h3>白派流域，重劃築新境。</h3>
            <h4>長築白樓2</h4>
            <p>
                長磯機構｜長築興業延續長築白樓1白派建築精神，寬容城市景觀、交織大地色系；於自辦重劃區中，重新依居住細節做整體性安排規劃，兼得私院安逸與開闊視野、並存開放與靜謐，安享永續新美學。
            </p>
        </div>
    </section>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s7 {
    width: 100%;
    box-sizing: border-box;
    background: #fffcf1;

    img {
        width: 100%;
    }

    .swiper-pagination {
        text-align: right;
        padding-right: size(30);
        @media screen and (max-width: 768px) {
            position: absolute;
            left: size-m(20);
            top: size-m(35);
            right: unset;
            height: unset;
            width: unset;
        }
        .swiper-pagination-bullet {
            border-radius: 100%;
            border: size(1) solid #fff;
            width: size(20);
            height: size(20);
            margin-right: 0;
            margin-left: size(20);
            @media screen and (max-width: 768px) {
                width: size-m(8);
                height: size-m(8);
                margin-left: size-m(8);
            }
            &.swiper-pagination-bullet-active {
                background-color: #fff;
            }
        }
    }
    @media screen and (max-width: 768px) {
        width: 100%;
    }

    .text {
        right: size(90);
        top: size(90);
        width: size(320);
        @media screen and (max-width: 768px) {
            top: size-m(10);
            left: size-m(20);
            right: unset;
            padding-right: size-m(15);
            width: 100%;
        }
        h5 {
            font-size: size(24);
            font-weight: 700;
            letter-spacing: size(1.68);
            margin-bottom: size(30);
            @media screen and (max-width: 768px) {
                font-size: size-m(12);
                letter-spacing: size-m(0.84);
            }
        }
        p {
            font-size: size(12);
            font-weight: 700;
            line-height: size(20);
            letter-spacing: size(0.36);
            @media screen and (max-width: 768px) {
                display: none;
            }
        }
    }

    .m_text {
        display: none;
        @media screen and (max-width: 768px) {
            display: block;
            left: size-m(7);
            bottom: size-m(7);
        }
    }

    .title {
        position: absolute;
        left: size(140);
        top: size(140);
        width: size(570);
        z-index: 11;
        color: #000;
        @media screen and (max-width: 768px) {
            position: static;
            left: unset;
            top: unset;
            width: 100%;
            padding-left: size-m(40);
            padding-right: size-m(40);
            padding-bottom: size-m(30);
        }
        h3 {
            font-size: size(45);
            font-weight: 700;
            letter-spacing: size(4.05);
            @media screen and (max-width: 768px) {
                font-size: size-m(20);
                text-align: center;
            }
        }
        h4 {
            font-size: size(28);
            font-weight: 600;
            letter-spacing: size(2.52);
            margin-top: size(20);
            margin-bottom: size(75);
            @media screen and (max-width: 768px) {
                color: #e1554b;
                font-size: size-m(12);
                letter-spacing: size-m(1.08);
                margin-top: size-m(10);
                margin-bottom: size-m(10);
                text-align: center;
            }
        }
        p {
            font-size: size(21);
            font-weight: 500;
            line-height: size(44);
            letter-spacing: size(1.68);
            @media screen and (max-width: 768px) {
                font-size: size-m(12);
                line-height: size-m(20);
            }
        }
    }

    .b_text {
        display: none;
        @media screen and (max-width: 768px) {
            display: block;
            font-size: size-m(10);
            font-weight: 400;
            line-height: size-m(11);
            padding-top: size-m(10);
            padding-bottom: size-m(30);
            padding-left: size-m(20);
            padding-right: size-m(20);
        }
    }
}
</style>
