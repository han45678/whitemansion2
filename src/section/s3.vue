<script setup></script>

<template>
    <section class="s3 text-[#fff] font-['Noto_Sans_TC']">
        <div class="text">
            <h3 data-aos="fade-in" data-aos-duration="400">南科15分鐘｜小成本進場大未來。</h3>
            <p data-aos="fade-in" data-aos-duration="800">
                南科擴大效應｜南科三期版圖擴大，南科產值超越竹科<br />
                台積電產業鍊｜高端奈米場落腳南科，預告未來前景<br />
                土地有感增值｜游資搶進開發熱區，追逐有限資源<br />
                AI浪潮強支撐｜艾司摩爾等技術領先供應商全面進駐
            </p>
        </div>
    </section>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s3 {
    width: 100%;
    min-height: size(1075);
    max-height: 100vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    background-image: url('./s3/bg.jpg');

    @media screen and (max-width: 768px) {
        background-image: url('./s3/bgm.jpg');
        height: size-m(428);
    }

    .text {
        text-align: center;
        padding-top: size(70);

        @media screen and (max-width: 768px) {
            padding-top: size-m(30);
        }

        h3 {
            font-weight: 700;
            font-size: size(74);

            @media screen and (max-width: 768px) {
                font-size: size-m(22);
            }
        }

        p {
            font-weight: 500;
            margin: size(40) auto 0 auto;
            width: size(572);
            font-size: size(20);
            line-height: size(43);
            letter-spacing: size(2);

            @media screen and (max-width: 768px) {
                width: 100%;
                margin: size-m(20) auto 0 auto;
                font-size: size-m(12);
                line-height: size-m(20);
            }
        }
    }
}
</style>
