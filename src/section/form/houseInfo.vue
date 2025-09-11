<template>
    <div class="flex flex-col md:flex-row items-center justify-between md:bg-white bg-[#FFF]">
        <!-- <div class="map"></div> -->
        <div class="flex-1 items-center justify-center py-4 md:py-10">
            <div class="info-box mx-auto flex items-center justify-center">
                <div class="title font-['Noto_Sans_TC']" data-aos="fade-up" data-aos-duration="400">
                    <img ta-aos="fade-in" src="../form/title.svg" alt="title" />
                    <p>建案資訊</p>
                </div>

                <div class="info-items mt-4 w-full grid">
                    <div class="info-b">
                        <div class="item flex items-center w-full whitespace-nowrap" v-for="item in info.houseInfos1">
                            <p class="mr-5">
                                {{ item[0] }}
                            </p>
                            <p class="whitespace-pre-line leading-normal text-left">
                                {{ item[1] }}
                            </p>
                        </div>
                    </div>
                    <div class="info-b">
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

    @media screen and (max-width: 768px) {
        width: size-m(313);
        padding: size-m(30) 0;
    }

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

        @media screen and (max-width: 768px) {
            width: 100%;
            font-size: size-m(29);
            margin: size-m(20) 0 size-m(10);
        }

        img {
            width: size(300);

            @media screen and (max-width: 768px) {
                width: 100%;
                max-width: size-m(207);
            }
        }



        p {
            width: 50%;
            margin-top: size(30);

            @media screen and (max-width: 768px) {
                margin-top: size-m(15);
                color: #595757;
                font-size: size-m(22);
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
        grid-template-columns: repeat(2, minmax(0, 1fr));

        @media screen and (max-width: 768px) {
            padding-left: 0;
            border-left: none;
            width: 100%;
            row-gap: size-m(3);
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .item {
            font-size: size(17);
            align-items: flex-start;
            line-height: 1.5;
            text-align: left;
            margin-top: size(10);

            @media screen and (max-width: 768px) {
                font-size: size-m(14);
            }

            p {
                color: #595757;
                font-weight: 500;

                @media screen and (max-width: 768px) {
                    line-height: 3;
                }

            }

            p:first-child {
                width: 4.5em;
            }

        }

        .item:first-child {
            margin-top: 0;
        }
    }


}

.footer {
    @media screen and (max-width: 768px) {
        margin-bottom: 63px;
    }
}
</style>

<script setup>
import info from '@/info';
</script>
