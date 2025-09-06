<script setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination, Autoplay } from 'swiper'; // ✅ 正確寫法
import 'swiper/css';
import 'swiper/css/pagination';

const order = ref(0);
</script>

<template>
    <section class="s6 text-[#000] font-['Noto_Sans_TC']">
        <div class="item">
            <div class="title">
                <h3 class="text-[#E1554B]">國際團隊</h3>
                <ul>
                    <li
                        :class="{ active: order === 0 }"
                        @click="order = 0"
                    >
                        全案規劃及建築設計
                    </li>
                    <li
                        :class="{ active: order === 1 }"
                        @click="order = 1"
                    >
                        公設規劃
                    </li>
                    <li
                        :class="{ active: order === 2 }"
                        @click="order = 2"
                    >
                        景觀美學
                    </li>
                    <li
                        :class="{ active: order === 3 }"
                        @click="order = 3"
                    >
                        燈光表情
                    </li>
                </ul>
            </div>

            <!-- 文字 -->
            <transition name="fade">
                <div
                    class="text"
                    v-if="order === 0"
                >
                    <div class="item_content">
                        <h4>全案規劃｜U.tech技聯組工程顧問</h4>
                        <p>
                            以品質為核心，兼顧市場需求的全能建築工程顧問團隊。
                            跳脫傳統設計框架，轉化跨國合作經驗為在地觀點，
                            客觀帶入國際專業標準，讓建築紮根生活。
                        </p>
                    </div>
                    <div class="item_content">
                        <h4>建築設計｜蔡詠爲建築師事務所</h4>
                        <p>
                            認為家是歸來與出發的場域，能沉靜地洗滌心靈；
                            以人為本位的設計根基、對人性的體貼與深思恆久不變，
                            致力尋找台灣的建築語彙，以建築服務人居。
                        </p>
                    </div>
                </div>
            </transition>
            <transition name="fade">
                <div
                    class="text"
                    v-if="order === 1"
                >
                    <div class="item_content no_line">
                        <h4>公設規劃｜三向＋先奕設計團隊</h4>
                        <p>
                            尊重在地場域文化的特質，將空間設計視為與環境共生的三維度構型；擅長引入不同型態的在地藝術創作，將當代設計與傳統思考完美揉合。
                        </p>
                    </div>
                </div>
            </transition>
            <transition name="fade">
                <div
                    class="text"
                    v-if="order === 2"
                >
                    <div class="item_content no_line">
                        <h4>景觀美學｜三生規劃</h4>
                        <p>
                            強調景觀設計除了美感之外，必須兼顧使用者的開放與適切；期待利用景觀美學創造生態、生活與生產的環境永續性，創造地方識別的特殊意象。
                        </p>
                    </div>
                </div>
            </transition>
            <transition name="fade">
                <div
                    class="text"
                    v-if="order === 3"
                >
                    <div class="item_content no_line">
                        <h4>燈光表情｜偶得設計</h4>
                        <p>
                            用看不見的光，看見世界的美好！囊括國內外各大去計獎項的偶得設計，體貼城市整體光環境，與周遭既有建築溫柔相伴，並兼顧主體的自明性與辨識度。
                        </p>
                    </div>
                </div>
            </transition>

            <!-- 圖片 -->
            <transition name="fade">
                <div
                    class="pic"
                    v-if="order === 0"
                >
                    <Swiper
                        :slidesPerView="1"
                        :loop="true"
                        :autoplay="true"
                        :modules="[Pagination, Autoplay]"
                        :pagination="{ clickable: true }"
                    >
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/1-1.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">
                                新化系統交流道(國3X國8)
                            </p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/1-2.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">新港社大道</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/1-3.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">北外環快速道路</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/1-4.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">
                                衛福部署立醫院新化分院
                            </p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/1-5.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">
                                衛福部署立醫院新化分院
                            </p>
                        </SwiperSlide>
                    </Swiper>
                </div>
            </transition>
            <transition name="fade">
                <div
                    class="pic"
                    v-if="order === 1"
                >
                    <Swiper
                        :slidesPerView="1"
                        :loop="true"
                        :autoplay="true"
                        :modules="[Pagination, Autoplay]"
                        :pagination="{ clickable: true }"
                    >
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/2-1.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">
                                三向＋先奕設計團隊
                            </p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/2-2.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">園山一號院-私宅</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/2-3.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">
                                台北 信義聯勤-私宅
                            </p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/2-4.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">
                                台中 大陸麗格-私宅
                            </p>
                        </SwiperSlide>
                    </Swiper>
                </div>
            </transition>
            <transition name="fade">
                <div
                    class="pic"
                    v-if="order === 2"
                >
                    <Swiper
                        :slidesPerView="1"
                        :loop="true"
                        :autoplay="true"
                        :modules="[Pagination, Autoplay]"
                        :pagination="{ clickable: true }"
                    >
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/3-1.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">三生規劃</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/3-2.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">新化老街</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/3-3.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">
                                新化大目降文化園區
                            </p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/3-4.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">
                                台南市末廣町街屋立面改善
                            </p>
                        </SwiperSlide>
                    </Swiper>
                </div>
            </transition>
            <transition name="fade">
                <div
                    class="pic"
                    v-if="order === 3"
                >
                    <Swiper
                        :slidesPerView="1"
                        :loop="true"
                        :autoplay="true"
                        :modules="[Pagination, Autoplay]"
                        :pagination="{ clickable: true }"
                    >
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/4-1.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">偶得設計</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/4-2.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">新竹市美術館</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/4-3.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">太子建設 君峰會</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s6/4-4.webp"
                                alt="pic"
                            />
                            <p class="absolute text-[#fff]">惠宇千曦</p>
                        </SwiperSlide>
                    </Swiper>
                </div>
            </transition>
        </div>
    </section>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';
.fade-enter-active,
.fade-leave-active {
    transition: 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
.s6 {
    width: 100%;
    background: #fffcf1;
    padding-top: size(170);
    padding-bottom: size(200);
    @media screen and (max-width: 768px) {
        padding-top: size-m(15);
        padding-bottom: size-m(40);
    }
    .item {
        display: grid;
        grid-template-columns: 52% 48%;
        grid-template-areas:
            'title pic'
            'text pic';
        gap: 0 size(55);
        grid-template-rows: 1fr 1fr; // 兩列，平分
        box-sizing: border-box;

        padding-left: size(200);
        padding-right: size(120);
        @media screen and (max-width: 768px) {
            padding-left: size-m(40);
            padding-right: size-m(40);

            grid-template-columns: 100%;
            grid-template-areas:
                'title'
                'pic'
                'text';
            grid-template-rows: unset;
        }
        .title {
            grid-area: title;
            align-self: start;
            h3 {
                font-weight: 700;
                font-size: size(42);
                letter-spacing: size(1.26);
                margin-bottom: size(32);
                @media screen and (max-width: 768px) {
                    margin-bottom: size-m(12);
                    font-size: size-m(22);
                    letter-spacing: size-m(0.66);
                    text-align: center;
                }
            }
            ul {
                display: flex;
                flex-wrap: wrap;
                @media screen and (max-width: 768px) {
                    margin-bottom: size-m(23);
                    justify-content: center;
                    gap: size-m(5) size-m(10);
                }
                li {
                    cursor: pointer;
                    font-size: size(28);
                    font-weight: 500;
                    letter-spacing: size(2.24);
                    @media screen and (max-width: 768px) {
                        padding: size-m(5) size-m(12);
                        border: size-m(1) solid #e1554b;
                        background: #f7f8f8;
                        font-size: size-m(12);
                        line-height: size-m(22);
                    }
                    &.active {
                        color: #e1554b;
                        @media screen and (max-width: 768px) {
                            border: size-m(1) solid #e1554b;
                            background: #e1554b;
                            color: #fff;
                        }
                    }
                    &:not(:last-child)::after {
                        content: '|';
                        display: inline-block;
                        margin: 0 size(12);
                        @media screen and (max-width: 768px) {
                            display: none;
                        }
                    }
                }
            }
        }
        .text {
            grid-area: text;
            align-self: end;
            .item_content {
                h4 {
                    font-size: size(46);
                    font-weight: 700;
                    letter-spacing: size(2.3);
                    margin-bottom: size(30);
                    @media screen and (max-width: 768px) {
                        font-size: size-m(20);
                        letter-spacing: size-m(0);
                        margin-bottom: size-m(20);
                    }
                }
                p {
                    font-size: size(20);
                    font-weight: 500;
                    line-height: size(39);
                    letter-spacing: size(1.6);
                    @media screen and (max-width: 768px) {
                        font-size: size-m(12);
                        line-height: size-m(20);
                    }
                }
                &:not(:last-child) {
                    padding-bottom: size(65);
                    border-bottom: size(1) solid #e1554b;
                    margin-bottom: size(65);
                    @media screen and (max-width: 768px) {
                        padding-bottom: size-m(15);
                        border-bottom: size-m(1) solid #e1554b;
                        margin-bottom: size-m(15);
                    }
                    &.no_line {
                        padding-bottom: 0;
                        border-bottom: none;
                        margin-bottom: 0;
                    }
                }
            }
            @media screen and (max-width: 768px) {
                width: 100%;
                order: 2;
                padding-right: 0;
                margin-top: size-m(25);
            }
        }
        .pic {
            grid-area: pic;
            box-sizing: border-box;
            @media screen and (max-width: 768px) {
                width: 100%;
                order: 1;
            }
            img {
                width: 100%;
            }

            .swiper {
                position: relative;
                width: 100%;
                img {
                    width: 100%;
                }
                .swiper-pagination {
                    text-align: right;
                    padding-right: size(30);
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
                p {
                    position: absolute;
                    left: size(35);
                    bottom: size(20);
                    @media screen and (max-width: 768px) {
                        left: size-m(10);
                        bottom: size-m(5);
                    }
                }
            }

            @media screen and (max-width: 768px) {
                width: 100%;
            }
        }
    }
}
</style>
