<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination, Autoplay } from 'swiper'; // ✅ 正確寫法
import 'swiper/css';
import 'swiper/css/pagination';
</script>

<template>
    <section class="s4 text-[#000] font-['Noto_Sans_TC'] relative">
        <div class="wrapper">
            <div class="item">
                <div class="pic" data-aos="fade-in">
                    <Swiper :slidesPerView="1" :loop="true" :autoplay="true" :modules="[Pagination, Autoplay]"
                        :pagination="{ clickable: true }">
                        <SwiperSlide class="relative">
                            <img src="./s4/1-1.webp" alt="pic" />
                            <p class="absolute text-[#fff]">
                                新化系統交流道(國3X國8)
                            </p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img src="./s4/1-2.webp" alt="pic" />
                            <p class="absolute text-[#fff]">新港社大道</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img src="./s4/1-3.webp" alt="pic" />
                            <p class="absolute text-[#fff]">北外環快速道路</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img src="./s4/1-4.webp" alt="pic" />
                            <p class="absolute text-[#fff]">
                                衛福部署立醫院新化分院
                            </p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img src="./s4/1-5.webp" alt="pic" />
                            <p class="absolute text-[#fff]">新化高中</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img src="./s4/1-6.webp" alt="pic" />
                            <p class="absolute text-[#fff]">新化國小</p>
                        </SwiperSlide>
                    </Swiper>
                </div>
                <div class="text">
                    <h3 class="hidden md:block" data-aos="fade-in" data-aos-duration="400">
                        置產大南科<br />
                        慧眼秒懂新化基期<span>。</span>
                    </h3>
                    <h3 class="block md:hidden" data-aos="fade-in" data-aos-duration="400">
                        置產大南科｜慧眼秒懂新化基期<span>。</span>
                    </h3>
                    <ul data-aos="fade-up" data-aos-duration="600">
                        <li>
                            <span class="text-[#E1554B]">低基期低供給｜</span>
                            土地整合難度高，新住宅大樓供給少
                        </li>
                        <li>
                            <span class="text-[#E1554B]">區域比價效應｜</span>
                            善化新市屢創新高，鹽行東區迎盛況
                        </li>
                        <li>
                            <span class="text-[#E1554B]">一快道三國道｜</span>
                            北外環第一站、高速串聯國道系統
                        </li>
                        <li>
                            <span class="text-[#E1554B]">醫療學區資源｜</span>
                            署立台南醫院、學區教育資源完整
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="pic" data-aos="fade-in">
                    <Swiper :slidesPerView="1" :loop="true" :autoplay="true" :modules="[Pagination, Autoplay]"
                        :pagination="{ clickable: true }">
                        <SwiperSlide class="relative">
                            <img src="./s4/2-1.webp" alt="pic" />
                            <p class="absolute text-[#fff]">新化老街</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img src="./s4/2-2.webp" alt="pic" />
                            <p class="absolute text-[#fff]">新化老街</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img src="./s4/2-3.webp" alt="pic" />
                            <p class="absolute text-[#fff]">新化星巴克</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img src="./s4/2-4.webp" alt="pic" />
                            <p class="absolute text-[#fff]">新化體育公園</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img src="./s4/2-5.webp" alt="pic" />
                            <p class="absolute text-[#fff]">新化果菜市場</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img src="./s4/2-6.webp" alt="pic" />
                            <p class="absolute text-[#fff]">虎頭埤風景區</p>
                        </SwiperSlide>
                    </Swiper>
                </div>
                <div class="text">
                    <h3 data-aos="fade-in" data-aos-duration="400">
                        生活大南科<br />
                        新化埕心繁華富域<span>。</span>
                    </h3>
                    <ul data-aos="fade-up" data-aos-duration="600">
                        <li>
                            <span class="text-[#E1554B]">緊鄰新化高中旁｜</span>
                            軸心重劃區收攘商圈與生活餘裕
                        </li>
                        <li>
                            <span class="text-[#E1554B]">新化街屋稻穀香｜</span>
                            新化百年老街純熟機能舉步即達
                        </li>
                        <li>
                            <span class="text-[#E1554B]">林場綠谷綠生活｜</span>
                            中興林場、虎頭埤悠遊山水風光
                        </li>
                        <li>
                            <span class="text-[#E1554B]">國際級地方創生｜</span>
                            荷蘭MVRDV團隊操刀果菜市場
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s4 {
    background-color: #fffcf1;
    .wrapper {
        width: 100%;
        max-width: size(1520);
        padding: size(125) 0;
        margin-left: auto;
        margin-right: auto;
        @media screen and (max-width: 768px) {
            padding: 0;
            max-width: 100%;
        }
        .item {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            &:nth-child(1) {
                flex-direction: row-reverse;
                margin-bottom: size(130);
                @media screen and (max-width: 768px) {
                    flex-direction: unset;
                    margin-bottom: 0;
                }
            }
            &:nth-child(2) {
                .text {
                    padding-left: size(95);
                }
            }

            .pic {
                width: 60%;
                position: relative;
                img {
                    width: 100%;
                }
                p {
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
            .text {
                width: 40%;
                box-sizing: border-box;
                @media screen and (max-width: 768px) {
                    width: 100%;
                    padding: size-m(30) size-m(30) !important;
                }
                h3 {
                    width: 100%;
                    font-weight: 700;
                    font-size: size(45);
                    letter-spacing: size(1.35);
                    padding-bottom: size(100);
                    margin-bottom: size(70);
                    max-width: size(510);
                    border-bottom: size(1) solid #e1554b;
                    @media screen and (max-width: 768px) {
                        max-width: 100%;
                        font-size: size-m(20);
                        letter-spacing: unset;
                        padding-bottom: 0;
                        margin-bottom: size-m(15);
                        border-bottom: none;
                    }
                    span {
                        font-weight: 500;
                    }
                    br {
                        @media screen and (max-width: 768px) {
                            display: none;
                        }
                    }
                }
                ul {
                    li {
                        font-weight: 500;
                        font-size: size(20);
                        line-height: size(43);
                        letter-spacing: size(2);
                        @media screen and (max-width: 768px) {
                            font-size: size-m(12);
                            line-height: size-m(20);
                        }
                    }
                }
            }
        }
    }
}
</style>
