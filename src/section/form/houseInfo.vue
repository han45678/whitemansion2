<template>
    <div class="flex flex-col md:flex-row items-center justify-between md:bg-white bg-[#F4F1E7]">
        <!-- <div class="map"></div> -->
        <div class="flex-1 items-center justify-center py-4 md:py-10">
            <div class="info-box mx-auto mt-4 flex items-center justify-center">
                <div class="title font-['Noto_Sans_TC']" data-aos="fade-up" data-aos-duration="400">
                    <img ta-aos="fade-in" src="../form/title.svg" alt="title" />
                    <p>建案資訊</p>
                </div>

                <div class="info-items mt-4 w-full grid grid-cols-1">
                    <div class="item flex items-center w-full whitespace-nowrap" v-for="item in info.houseInfos1">
                        <p class="mr-5">
                            {{ item[0] }}
                        </p>
                        <p class="whitespace-pre-line leading-normal text-left">
                            {{ item[1] }}
                        </p>
                    </div>
                    <div class="item flex items-center w-full whitespace-nowrap" v-for="item in info.houseInfos2">
                        <p class="mr-5">
                            {{ item[0] }}
                        </p>
                        <p class="whitespace-pre-line leading-normal text-left">
                            {{ item[1] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer flex items-center justify-center w-full h-[40px] bg-[#302626]">
        <a href="https://www.lixin.com.tw/" target="_blank"><img class="hover:opacity-50"
                src="@/section/form/footerlogo.png" alt="長築白樓" srcset="" /></a>
        <a href="https://www.h65.tw/admin/test/login" target="_blank">
            <p class="text-white text-xs">網頁製作</p>
        </a>
    </div>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.info-box {
    width: 80%;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;

    .title {
        width: 50%;
        font-size: size(30);
        font-weight: 700;
        color: #595757;
        width: 30%;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

        img {
            width: size(300);
        }

        @media screen and (max-width: 768px) {
            width: 100%;
        }

        p {
            width: 50%;
            margin-top: size(30);

            @media screen and (max-width: 768px) {
                margin-top: size-m(15);
                color: #000;
                font-size: size-m(17);
                letter-spacing: size-m(0.886);
            }
        }
    }

    .info-items {
        width: 60%;
        row-gap: size(20);
        column-gap: size(20);
        padding-left: size(55);
        border-left: size(3) solid #aca7a6;

        @media screen and (max-width: 768px) {
            padding-left: 0;
            border-left: none;
            width: 100%;
        }

        .item {
            line-height: size(17);
            font-size: size(17);
            align-items: flex-start;
            line-height: 1.5;
            text-align: left;

            p {
                color: #595757;
                font-weight: 500;
            }

            p:first-child {
                width: 4.5em;
            }
        }
    }
}

@media screen and (max-width: 768px) {
    .info-box {
        width: size-m(313);
        padding: size-m(30) 0 size-m(60) 0;

        .title {
            font-size: size-m(29);
            margin-bottom: size-m(45);

            img {
                width: 100%;
                max-width: size-m(207);
            }
        }

        .info-items {
            row-gap: size-m(20);

            .item {
                font-size: size-m(14);
            }
        }
    }
}
</style>

<script setup>
import info from '@/info';
</script>
