<script setup>
import { computed, getCurrentInstance, ref } from 'vue';
import Fullview from '../components/fullview.vue';
const globals = getCurrentInstance().appContext.config.globalProperties;

const isMobile = computed(() => globals.$isMobile());

const openMap = ref(false);
</script>

<template>
    <article class="s2">
        <div class="top">
            <img
                data-aos="fade-up"
                src="./s2/title_top.svg"
                alt="title_top"
            />
        </div>
        <div :class="['map', { active: openMap }]">
            <button
                @click="openMap = false"
                class="font-['Noto_sans_tc'] text-[#fff]"
            />
            <Fullview />
        </div>
        <div class="map_m block md:hidden">
            <button @click="openMap = true">
                <span class="font-['Noto_sans_tc'] text-[#fff]"
                    >點開看詳細</span
                >
            </button>
            <img
                src="./s2/map_m.jpg"
                alt="map_m"
            />
        </div>
        <div class="bottom">
            <p
                data-aos="fade-up"
                class="font-['Noto_sans_tc'] text-[#493024]"
            >
                商60、北外環、明星學區、在地市場⋯<br />
                用一整天的時間，訴說一種安南才有的生活步調<br />
                <br />
                上班族、另一半、為人父母⋯<br />
                讓自己的每個身分，都能重拾日常的儀式感<br />
            </p>
        </div>
    </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s2 {
    position: relative;
    background: linear-gradient(to bottom left, #e7380d, #ea6000);

    .viewbox {
        z-index: 2;

        @media screen and (max-width: 767px) {
            height: calc(100% - 30px);
            margin: 0;
            padding: 0;
            top: 15px;
            left: 0;
            position: absolute;
        }
    }

    .map {
        @media screen and (max-width: 767px) {
            background: linear-gradient(
                315deg,
                #f7b400 11.45%,
                rgba(247, 180, 0, 0.7) 19.05%,
                rgba(247, 180, 0, 0.45) 26.3%,
                rgba(247, 180, 0, 0.26) 32.52%,
                rgba(247, 180, 0, 0.12) 38.4%,
                rgba(247, 180, 0, 0.03) 42.89%,
                rgba(247, 180, 0, 0) 46%
            );

            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            top: 0;
            left: 0;
            opacity: 0;
            transform: scale(0);
            z-index: 1;
            pointer-events: none;
            transition: 0.6s;

            &.active {
                opacity: 1;
                transform: scale(1);
                pointer-events: auto;
            }

            button {
                width: 34px;
                height: 34px;
                border-radius: 100%;
                position: absolute;
                top: 10px;
                right: 10px;
                z-index: 3;
                background-color: #666;
                border-radius: 100%;
                display: flex;
                justify-content: center;
                align-items: center;

                &::before {
                    content: '×';
                    font-size: sizem(24);
                    font-weight: 500;
                    line-height: 1.7;
                    letter-spacing: sizem(1.2);
                }
            }
        }
    }

    .map_m {
        width: 100%;
        position: relative;

        button {
            cursor: pointer;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            width: 110px;
            height: 110px;

            &::before {
                content: '';
                width: 100%;
                height: 100%;
                border-radius: 100%;
                background-color: rgba(234, 96, 0, 0.8);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            &::after {
                content: '';
                width: 92.735%;
                height: 92.735%;
                border-radius: 100%;
                background: linear-gradient(
                    315deg,
                    #f7b400 11.45%,
                    rgba(247, 180, 0, 0.7) 19.05%,
                    rgba(247, 180, 0, 0.45) 26.3%,
                    rgba(247, 180, 0, 0.26) 32.52%,
                    rgba(247, 180, 0, 0.12) 38.4%,
                    rgba(247, 180, 0, 0.03) 42.89%,
                    rgba(247, 180, 0, 0) 46%
                );
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 1;
            }

            span {
                position: relative;
                z-index: 2;
                font-size: sizem(14);
                font-weight: 500;
                line-height: 1.7;
                letter-spacing: sizem(0.7);
            }
        }

        img {
            width: 100%;
        }
    }

    .top,
    .bottom {
        padding-top: size(100);
        padding-bottom: size(100);
        text-align: center;
        background-repeat: no-repeat;
        background-size: cover;

        img {
            display: block;
            margin: auto;
            width: size(300);

            @media screen and (max-width: 767px) {
                width: sizem(135);
            }
        }

        p {
            text-align: center;
            font-size: size(24);
            font-weight: 500;
            line-height: 1.7;
            letter-spacing: size(2.4);

            @media screen and (max-width: 767px) {
                font-size: sizem(14);
                letter-spacing: sizem(0.7);
            }
        }
    }

    .top {
        background-image: url(./s2/top.png);
        background-position: top;

        @media screen and (max-width: 767px) {
            padding-top: sizem(60);
            padding-bottom: sizem(30);
        }
    }

    .bottom {
        background-image: url(./s2/bottom.png);
        background-position: bottom;

        @media screen and (max-width: 767px) {
            padding-top: sizem(50);
            padding-bottom: sizem(60);
        }
    }
}
</style>
