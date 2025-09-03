<template>
    <div class="flex flex-col md:flex-row items-center justify-between bg-white">
        <!-- <div class="map"></div> -->
        <div class="flex-1 items-center justify-center py-4 md:py-10">
            <div class="info-box mx-auto mt-4 flex flex-col items-center justify-center">
                <div class="title font-['Noto_Sans_TC']">建案資訊</div>
                <div class="info-items mt-4 w-full grid grid-cols-1 md:grid-cols-2">
                    <div class="item font-bold flex items-center w-full whitespace-nowrap"
                        v-for="item in info.houseInfos">
                        <p class="mr-5 border-l-2 border-[#D9374B] pl-2 ">{{ item[0] }}</p>
                        <p class="whitespace-pre-line leading-normal text-left">{{ item[1] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer flex items-center justify-center w-full h-[40px] bg-[#302626]">
        <a href="https://www.lixin.com.tw/" target="_blank"><img class="hover:opacity-50"
                src="@/section/form/footerlogo.png" alt="戀JIA" srcset=""></a>
        <a href="https://www.h65.tw/admin/test/login" target="_blank"><p class="text-white text-xs">網頁製作</p></a>
    </div>
</template>

<style lang="scss">
@import "@/assets/style/function.scss";

.info-box {

    width: size(900);

    .title {
        width: 100%;
        font-size: size(48);
        font-weight: 700;
        margin-bottom: size(23);
        color: #595757;
    }

    .info-items {
        row-gap: size(20);
        column-gap: size(20);

        .item {
            line-height: size(17);
            font-size: size(17);
            align-items: flex-start;
            line-height: 1.5;
            text-align: left;

            p:first-child {
                width: 4.5em;
            }
        }
    }
}

@media screen and (max-width:768px) {
    // .footer {
    //     margin-bottom: size-m(63);
    // }

    .info-box {
        width: size-m(313);
        padding: size-m(30) 0;

        .title {
            font-size: size-m(29);
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
import info from "@/info"


</script>