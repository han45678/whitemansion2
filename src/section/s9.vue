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
        <div class="pic" v-if="orderType">
            <Swiper :slidesPerView="1" :loop="true" :autoplay="true" :modules="[Pagination, Autoplay]"
                :pagination="{ clickable: true }">
                <SwiperSlide class="relative">
                    <img src="./s9/1.webp" alt="pic" />
                    <p class="absolute text-[#fff]">
                        新化系統交流道(國3X國8)
                    </p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img src="./s9/2.webp" alt="pic" />
                    <p class="absolute text-[#fff]">新港社大道</p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img src="./s9/3.webp" alt="pic" />
                    <p class="absolute text-[#fff]">北外環快速道路</p>
                </SwiperSlide>
            </Swiper>
        </div>
        <div class="pic" v-else>
            <Swiper :slidesPerView="1" :loop="true" :autoplay="true" :modules="[Pagination, Autoplay]"
                :pagination="{ clickable: true }">
                <SwiperSlide class="relative">
                    <img src="./s9/1.webp" alt="pic" />
                    <p class="absolute text-[#fff]">
                        新化系統交流道(國3X國8)
                    </p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img src="./s9/2.webp" alt="pic" />
                    <p class="absolute text-[#fff]">新港社大道</p>
                </SwiperSlide>
                <SwiperSlide class="relative">
                    <img src="./s9/3.webp" alt="pic" />
                    <p class="absolute text-[#fff]">北外環快速道路</p>
                </SwiperSlide>
            </Swiper>
        </div>
        <div class="text">
            <div class="item" v-if="orderType">
                <div class="title">
                    <h3>2房精裝修</h3>
                    <h4>25-27坪｜光合角間</h4>
                </div>
                <p>●減少裝潢開銷，降低成家門檻 ●省下設計監工心力，安心入住 ●一條龍規劃，最大化空間效能</p>
            </div>
            <div class="item" v-else>
                <div class="title">
                    <h3>2房精裝修</h3>
                    <h4>25-27坪｜光合角間</h4>
                </div>
                <p>●減少裝潢開銷，降低成家門檻 ●省下設計監工心力，安心入住 ●一條龍規劃，最大化空間效能</p>
            </div>

            <div class="text_btn">
                <button @click="orderType = true">2房精裝修</button>
                <button @click="orderType = false">3房精裝修</button>
            </div>
        </div>
    </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s9 {
    .pic {
        width: 100%;
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
        background: #FDE360;
        padding-top: 85px;
        padding-bottom: 80px;
    }
}
</style>
