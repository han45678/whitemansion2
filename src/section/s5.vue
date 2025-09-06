<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination, Autoplay } from 'swiper'; // ✅ 正確寫法
import 'swiper/css';
import 'swiper/css/pagination';
</script>

<template>
    <section class="s5 text-[#000] font-['Noto_Sans_TC'] relative">
        <div class="text">
            <div class="logo_pic">
                <img
                    src="./s5/logo_1.svg"
                    alt="logo"
                />
                <img
                    src="./s5/logo_2.svg"
                    alt="logo"
                />
            </div>
            <h3>超越家的本質。</h3>
            <span class="line" />
            <p>
                長築興業將建築視為生活總和的美學載體，融合國際視野與在地思維，整合房產專業資源；以服務品牌的專屬物管，打造差異化特徵，重新定義住宅標準，守護居者恆久的資產價值。
            </p>
        </div>
        <img
            class="text_pic absolute"
            src="./s5/text.svg"
            alt="text"
        />
        <div class="pic">
            <Swiper
                :slidesPerView="1"
                :loop="true"
                :autoplay="true"
                :modules="[Pagination, Autoplay]"
                :pagination="{ clickable: true }"
            >
                <SwiperSlide class="relative">
                    <img
                        src="./s5/1.webp"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">新化系統交流道(國3X國8)</p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img
                        src="./s5/2.webp"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">新港社大道</p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img
                        src="./s5/3.webp"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">北外環快速道路</p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img
                        src="./s5/4.webp"
                        alt="pic"
                    />
                    <p class="absolute text-[#fff]">衛福部署立醫院新化分院</p>
                </SwiperSlide>
            </Swiper>
        </div>
    </section>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s5 {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    background: #fde360;
    @media screen and (max-width: 768px) {
        background: #fffcf1;
    }
    .text {
        width: 45%;
        box-sizing: border-box;
        padding-left: size(190);
        padding-right: size(160);
        box-sizing: border-box;
        @media screen and (max-width: 768px) {
            width: 100%;
            padding: size-m(20) size-m(40) size-m(50) size-m(40);
            order: 2;
        }
        .logo_pic {
            display: flex;
            justify-content: center;
            gap: size(40);
            margin-bottom: size(20);
        }
        h3 {
            font-size: size(50);
            font-weight: 700;
            letter-spacing: size(1.5);
            @media screen and (max-width: 768px) {
                padding: size-m(20) 0;
                text-align: center;
                font-size: size-m(22);
            }
        }
        .line {
            display: block;
            width: 100%;
            height: size(165);
            border-left: 1px solid #e1554b;
            margin-top: size(32);
            margin-bottom: size(25);
            @media screen and (max-width: 768px) {
                display: none;
            }
        }
        p {
            color: #000;
            font-size: size(20);
            font-weight: 500;
            line-height: size(43);
            letter-spacing: size(2.4);
            @media screen and (max-width: 768px) {
                font-size: size-m(12);
                line-height: size-m(20);
                letter-spacing: size-m(0.6);
            }
        }
    }
    .text_pic {
        width: size(115);
        top: 0;
        right: 50%;
        transform: translateX(-50%);
        z-index: 10;
        @media screen and (max-width: 768px) {
            display: none;
            order: 1;
        }
    }
    .pic {
        width: 55%;
        position: relative;
        box-sizing: border-box;
        @media screen and (max-width: 768px) {
            width: 100%;
            padding-left: size-m(40);
            padding-right: size-m(40);
        }
        img {
            width: 100%;
        }
        p {
            position: absolute;
            left: size(35);
            bottom: size(20);
            @media screen and (max-width: 768px) {
                left: size-m(10);
                bottom: size-m(5);
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
    }
}
</style>
