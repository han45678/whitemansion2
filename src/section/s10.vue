<script setup>
import { ref } from 'vue';
import 'swiper/css';
import 'swiper/css/pagination';
</script>

<template>
    <article class="s10">
        <ul data-aos="fade-up">
            <li>
                <h4 class="text-[#E1554B]" >ALL IN ONE精裝修</h4>
                <p class="text-[#000]">
                    一條龍服務精省<br />
                    入住快又安心
                </p>
            </li>
            <li>
                <h4 class=" text-[#E1554B]">預組工法</h4>
                <p class="text-[#000]">
                    日本晴空塔等級<br />
                    進口螺紋鋼筋
                </p>
            </li>
            <li>
                <h4 class="text-[#E1554B]">三方勘驗</h4>
                <p class="text-[#000]">
                    監造、建築師、<br />
                    結構技師把關
                </p>
            </li>
            <li>
                <h4 class="text-[#E1554B]">生產履歷</h4>
                <p class="text-[#000]">
                    官方依實際進度<br />
                    公告工程紀錄
                </p>
            </li>
            <li>
                <h4 class="text-[#E1554B]">售後服務</h4>
                <p class="text-[#000]">
                    line即時線上客服<br />
                    並自主驗屋
                </p>
            </li>
        </ul>
    </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s10 {
    background-color: #FFFDF1;
    padding-top: size(245);
    padding-left: size(100);
    padding-right: size(100);
    padding-bottom: size(200);

    @media screen and (max-width: 768px) {
        padding-top: size-m(65);
        padding-left: size-m(40);
        padding-right: size-m(40);
        padding-bottom: size-m(40);
    }

    ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 0 size(30);

        @media screen and (max-width: 768px) {
            gap: size-m(7);
            justify-content: center;
        }

        li {
            flex: 0 0 calc(20% - #{size(30)}); // ✅ 電腦版五等分 (扣掉 gap)
            aspect-ratio: 1 / 1;
            border-radius: 100%;
            border: size(3) solid #e1554b;
            display: flex;
            flex-flow: wrap;
            justify-content: center;
            align-items: center;
            align-content: center;

            @media screen and (max-width: 768px) {
                flex: 0 0 calc(50% - #{size-m(7)}); // ✅ 手機版兩等分
                border: size-m(3) solid #e1554b;
            }

            h4 {
                width: 100%;
                text-align: center;
                font-size: size(30);
                font-weight: 700;
                line-height: size(43);
                letter-spacing: size(0.9);
                margin-bottom: size(24);

                @media screen and (max-width: 768px) {
                    line-height: auto;
                    margin-top: size-m(5);
                    font-size: size-m(14);
                    margin-bottom: size-m(12);
                }
            }

            p {
                width: 100%;
                text-align: center;
                font-size: size(26);
                font-weight: 500;
                line-height: size(38);
                letter-spacing: size(0.78);

                @media screen and (max-width: 768px) {
                    font-size: size-m(14);
                    font-weight: 400;
                    line-height: unset;
                    letter-spacing: size-m(0.42);
                }
            }
        }
    }
}
</style>
