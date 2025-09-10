<script setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination, Autoplay } from 'swiper'; // ✅ 正確寫法
import 'swiper/css';
import 'swiper/css/pagination';

const orderType = ref(true);
</script>

<template>
    <article class="s9">
        <div class="pic text-[#fff]" v-if="orderType">
            <Swiper :slidesPerView="1" :loop="true" :autoplay="true" :modules="[Pagination, Autoplay]">
                <SwiperSlide class="relative">
                    <img class="hidden md:block" src="./s9/1.webp" alt="pic" />
                    <img class="block md:hidden" src="./s9/m_1.webp" alt="pic" />
                    <div class="pic_text">
                        <h3 class="hidden md:block" data-aos="fade-up">
                            ALL IN ONE精裝修・圓夢更輕鬆
                        </h3>
                        <h3 class="block md:hidden" data-aos="fade-up">
                            ALL IN ONE精裝修<br />圓夢更輕鬆
                        </h3>
                        <p>
                            ＊全裝修包含：全室天花板、電視牆、鞋櫃、臥室衣櫃、床頭背板及冷氣室內外機<br>
                            ＊3d示意圖僅供參考，以上之家電（除冷氣外）、傢俱、飾品、畫作及植栽為情境示意表現，實際依施工圖為主
                        </p>
                    </div>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img class="hidden md:block" src="./s9/2.webp" alt="pic" />
                    <img class="block md:hidden" src="./s9/m_2.webp" alt="pic" />
                    <div class="pic_text">
                        <h3 class="hidden md:block" data-aos="fade-up">
                            ALL IN ONE精裝修・圓夢更輕鬆
                        </h3>
                        <h3 class="block md:hidden" data-aos="fade-up">
                            ALL IN ONE精裝修<br />圓夢更輕鬆
                        </h3>
                        <p>
                            ＊全裝修包含：全室天花板、電視牆、鞋櫃、臥室衣櫃、床頭背板及冷氣室內外機<br>
                            ＊3d示意圖僅供參考，以上之家電（除冷氣外）、傢俱、飾品、畫作及植栽為情境示意表現，實際依施工圖為主
                        </p>
                    </div>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img class="hidden md:block" src="./s9/3.webp" alt="pic" />
                    <img class="block md:hidden" src="./s9/m_3.webp" alt="pic" />
                    <div class="pic_text">
                        <h3 class="hidden md:block" data-aos="fade-up">
                            ALL IN ONE精裝修・圓夢更輕鬆
                        </h3>
                        <h3 class="block md:hidden" data-aos="fade-up">
                            ALL IN ONE精裝修<br />圓夢更輕鬆
                        </h3>
                        <p>
                            ＊全裝修包含：全室天花板、電視牆、鞋櫃、臥室衣櫃、床頭背板及冷氣室內外機<br>
                            ＊3d示意圖僅供參考，以上之家電（除冷氣外）、傢俱、飾品、畫作及植栽為情境示意表現，實際依施工圖為主
                        </p>
                    </div>
                </SwiperSlide>
            </Swiper>
        </div>
        <div class="pic text-[#fff]" v-else>
            <Swiper :slidesPerView="1" :loop="true" :autoplay="true" :modules="[Pagination, Autoplay]">
                <SwiperSlide class="relative">
                    <img class="hidden md:block" src="./s9/1.webp" alt="pic" />
                    <img class="block md:hidden" src="./s9/m_1.webp" alt="pic" />
                    <div class="pic_text">
                        <h3 class="hidden md:block" data-aos="fade-up">
                            ALL IN ONE精裝修・圓夢更輕鬆
                        </h3>
                        <h3 class="block md:hidden" data-aos="fade-up">
                            ALL IN ONE精裝修<br />圓夢更輕鬆
                        </h3>
                        <p>
                            ＊全裝修包含：全室天花板、電視牆、鞋櫃、臥室衣櫃、床頭背板及冷氣室內外機<br>
                            ＊3d示意圖僅供參考，以上之家電（除冷氣外）、傢俱、飾品、畫作及植栽為情境示意表現，實際依施工圖為主
                        </p>
                    </div>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img class="hidden md:block" src="./s9/2.webp" alt="pic" />
                    <img class="block md:hidden" src="./s9/m_2.webp" alt="pic" />
                    <div class="pic_text">
                        <h3 class="hidden md:block" data-aos="fade-up">
                            ALL IN ONE精裝修・圓夢更輕鬆
                        </h3>
                        <h3 class="block md:hidden" data-aos="fade-up">
                            ALL IN ONE精裝修<br />圓夢更輕鬆
                        </h3>
                        <p>
                            ＊全裝修包含：全室天花板、電視牆、鞋櫃、臥室衣櫃、床頭背板及冷氣室內外機<br>
                            ＊3d示意圖僅供參考，以上之家電（除冷氣外）、傢俱、飾品、畫作及植栽為情境示意表現，實際依施工圖為主
                        </p>
                    </div>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img class="hidden md:block" src="./s9/3.webp" alt="pic" />
                    <img class="block md:hidden" src="./s9/m_3.webp" alt="pic" />
                    <div class="pic_text">
                        <h3 class="hidden md:block" data-aos="fade-up">
                            ALL IN ONE精裝修・圓夢更輕鬆
                        </h3>
                        <h3 class="block md:hidden" data-aos="fade-up">
                            ALL IN ONE精裝修<br />圓夢更輕鬆
                        </h3>
                        <p>
                            ＊全裝修包含：全室天花板、電視牆、鞋櫃、臥室衣櫃、床頭背板及冷氣室內外機<br>
                            ＊3d示意圖僅供參考，以上之家電（除冷氣外）、傢俱、飾品、畫作及植栽為情境示意表現，實際依施工圖為主
                        </p>
                    </div>
                </SwiperSlide>
            </Swiper>
        </div>
        <div class="text text-[#000]">
            <div class="text_content" data-aos="fade-up">
                <div class="item" v-if="orderType">
                    <div class="title">
                        <h3>2房精裝修</h3>
                        <h4>25-27坪｜光合角間</h4>
                    </div>
                    <p>
                        <span>●減少裝潢開銷，降低成家門檻</span>
                        <span>●省下設計監工心力，安心入住</span>
                        <span>●一條龍規劃，最大化空間效能</span>
                    </p>
                </div>
                <div class="item" v-else>
                    <div class="title" data-aos="fade-up">
                        <h3>3房精裝修</h3>
                        <h4>35-36坪｜向陽邊間</h4>
                    </div>
                    <p>
                        <span>●減少裝潢開銷，降低成家門檻</span>
                        <span>●省下設計監工心力，安心入住</span>
                        <span>●一條龍規劃，最大化空間效能</span>
                    </p>
                </div>
            </div>

            <div class="text_btn">
                <button :class="{ active: orderType }" @click="orderType = true">
                    2房精裝修
                </button>
                <button :class="{ active: !orderType }" @click="orderType = false">
                    3房精裝修
                </button>
            </div>
        </div>
    </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s9 {
    .pic {
        width: 100%;

        .swiper {
            position: relative;

            @media screen and (max-width: 768px) {
                width: 100%;
            }
        }

        img {
            width: 100%;
        }

        .pic_text {
            left: 0;
            right: 0;
            bottom: size(40);
            padding-left: size(200);
            padding-right: size(70);
            box-sizing: border-box;
            display: flex;
            align-items: center;
            position: absolute;

            @media screen and (max-width: 768px) {
                left: unset;
                right: unset;
                bottom: unset;
                padding-left: unset;
                padding-right: unset;
                display: block;
                align-items: unset;
                position: unset;
            }

            h3 {
                font-size: size(44);
                letter-spacing: size(3.96);
                width: calc(100% - size(40) - size(690));
                font-weight: 700;

                @media screen and (max-width: 768px) {
                    font-size: 30px;
                    line-height: 45px;
                    letter-spacing: 2.7px;
                    position: absolute;
                    top: size-m(10);
                    left: size-m(35);
                    width: calc(100% - size-m(35));
                    padding-right: size-m(35);
                }
            }

            p {
                text-align: right;
                font-size: size(14);
                font-weight: 400;
                line-height: size(20);
                width: size(690);

                @media screen and (max-width: 768px) {
                    text-align: left;
                    width: size-m(250);
                    font-size: 30px;
                    line-height: 45px;
                    letter-spacing: 2.7px;
                    position: absolute;
                    bottom: size-m(10);
                    left: size-m(15);
                    font-size: size-m(10);
                    line-height: size-m(14);
                    width: calc(100% - size-m(30));
                }
            }
        }
    }

    .text {
        background: #fde360;
        padding-top: size(85);
        padding-bottom: size(80);
        padding-left: size(200);
        padding-right: size(100);
        display: flex;
        align-items: flex-end;

        @media screen and (max-width: 768px) {
            flex-wrap: wrap;
            padding-top: size-m(60);
            padding-bottom: size-m(50);
            padding-left: size-m(60);
            padding-right: size-m(60);
        }

        .text_content {
            width: calc(100% - size(210));

            @media screen and (max-width: 768px) {
                order: 2;
                width: 100%;
            }

            .title {
                margin-bottom: size(20);

                @media screen and (max-width: 768px) {
                    margin-bottom: size-m(15);
                    text-align: center;
                }

                h3 {
                    display: inline-block;
                    font-size: size(55);
                    font-weight: 700;
                    letter-spacing: size(5.5);
                    margin-right: size(50);

                    @media screen and (max-width: 768px) {
                        display: block;
                        margin-top: size-m(30);
                        margin-bottom: size-m(10);
                        font-size: size-m(42);
                        letter-spacing: size-m(4.2);
                        margin-right: 0;
                    }
                }

                h4 {
                    display: inline-block;
                    font-size: size(42);
                    font-weight: 600;
                    letter-spacing: size(7.14);

                    @media screen and (max-width: 768px) {
                        display: block;
                        font-size: size-m(20);
                        letter-spacing: size-m(3.4);
                    }
                }
            }

            p {
                span {
                    font-weight: 500;
                    margin-left: 2em;
                    font-size: size(20);
                    font-weight: 500;
                    letter-spacing: size(2.4);

                    &:nth-child(1) {
                        margin-left: 0;
                    }

                    @media screen and (max-width: 768px) {
                        margin-left: 0;
                        display: block;
                        font-size: size-m(15);
                        line-height: size-m(30);
                        letter-spacing: size-m(1.8);
                    }
                }
            }
        }

        .text_btn {
            width: size(410);
            display: flex;
            gap: 0 size(10);

            @media screen and (max-width: 768px) {
                order: 1;
                gap: 0 size-m(10);
                width: 100%;
            }

            button {
                width: size(200);
                height: size(45);
                text-align: center;
                font-size: size(28);
                font-weight: 400;
                letter-spacing: size(2.8);
                background-color: #fff;
                color: #000;
                border: 1px solid #e1554b;
                transition: 0.3s;
                cursor: pointer;

                @media screen and (max-width: 768px) {
                    width: calc(50% - size-m(5));
                    height: size-m(25);
                    font-size: size-m(14);
                    letter-spacing: size-m(1.434);
                }

                &.active {
                    background-color: #e1554b;
                    color: #fff;
                }
            }
        }
    }
}
</style>
