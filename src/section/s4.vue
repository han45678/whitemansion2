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
                <div class="pic">
                    <Swiper
                        :spaceBetween="20"
                        :slidesPerView="1"
                        :loop="true"
                        :autoplay="true"
                        :modules="[Pagination, Autoplay]"
                        :pagination="{ clickable: true }"
                    >
                        <SwiperSlide class="relative">
                            <img
                                src="./s4/1-1.webp"
                                alt="pic"
                            />
                            <p class="absolute">新化系統交流道(國3X國8)</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s4/1-1.webp"
                                alt="pic"
                            />
                            <p class="absolute">新化系統交流道(國3X國8)</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s4/1-1.webp"
                                alt="pic"
                            />
                            <p class="absolute">新化系統交流道(國3X國8)</p>
                        </SwiperSlide>
                    </Swiper>
                </div>
                <div class="text">
                    <h3>
                        置產大南科<br />
                        慧眼秒懂新化基期。
                    </h3>
                    <ul>
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
                <div class="pic">
                    <Swiper
                        :spaceBetween="20"
                        :slidesPerView="1"
                        :loop="true"
                        :autoplay="true"
                        :modules="[Pagination, Autoplay]"
                        :pagination="{ clickable: true }"
                    >
                        <SwiperSlide class="relative">
                            <img
                                src="./s4/1-1.webp"
                                alt="pic"
                            />
                            <p class="absolute">新化系統交流道(國3X國8)</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s4/1-1.webp"
                                alt="pic"
                            />
                            <p class="absolute">新化系統交流道(國3X國8)</p>
                        </SwiperSlide>
                        <SwiperSlide class="relative">
                            <img
                                src="./s4/1-1.webp"
                                alt="pic"
                            />
                            <p class="absolute">新化系統交流道(國3X國8)</p>
                        </SwiperSlide>
                    </Swiper>
                </div>
                <div class="text">
                    <h3>
                        生活大南科<br />
                        新化埕心繁華富域。
                    </h3>
                    <ul>
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
  background-color: #FFFCF1;
    .wrapper {
        width: 100%;
        max-width: size(1520);
        padding:size(125) 0;
        margin-left: auto;
        margin-right: auto;

        .item {
            display: flex;
                align-items: center;
            &:nth-child(1) {
                flex-direction: row-reverse;
                margin-bottom: size(130);
                @media screen and (max-width: 768px) {
                    flex-direction: unset;
                }
            }

            .pic {
                width: 60%;
            }
            .text {
                width: 40%;
                h3{

                }
                ul{
                  li{
                    span{}
                  }
                }
            }
        }
    }
}
</style>
