<script setup></script>

<template>
    <section class="s12 text-[#000] font-['Noto_Sans_TC']">
        <!-- 手機板 -->
        <div class="text block md:hidden" data-aos="fade-in" data-aos-duration="400">
            <h2>ALL IN ONE<span>精裝修</span></h2>
            <h4>大南科共榮圈</h4>
            <ul>
                <li>新化軸心</li>
                <li>邊間 2~3 房</li>
            </ul>

            <a href="tel:065802368" class="text-[#000]">
                <span>06</span>
                580-2368
            </a>

            <h3>小成本 大未來</h3>

            <p class="text-[#E1554B]">
                Light Start Big Future
                <span>
                    Every tomorrow begins with<br />
                    a place we call home.
                </span>
            </p>
        </div>
        <!-- 電腦版 -->
        <div class="text hidden md:inline" data-aos="fade-in" data-aos-duration="400">
            <h2>ALL IN ONE<span>精裝修</span></h2>
            <h4>大南科共榮圈</h4>
            <ul>
                <li>新化軸心</li>
                <li>邊間 2~3 房</li>
            </ul>
            <a href="tel:065802368" class="text-[#000]">
                <span>06</span>
                580-2368
            </a>
            <img class="logo" src="./s1/logo.svg" alt="logo" data-aos="fade-in" data-aos-duration="800" />
        </div>
        <div class="title hidden md:inline">
            <h3>小成本 大未來</h3>
            <p class="text-[#E1554B]">
                Light Start Big Future
                <span>
                    Every tomorrow begins with<br />
                    a place we call home.
                </span>
            </p>
        </div>

        <img class="logo block md:hidden" src="./s1/logo_m.svg" alt="logo" data-aos="fade-in" data-aos-duration="800" />
        <img class="pic" src="./s12/pic.webp" alt="pic" />
    </section>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.s12 {
    position: relative;
    width: 100%;
    min-height: 100vh;
    height: size(1080);
    max-height: size(1080);
    background-color: #fde360;

    .title {
        position: absolute;
        top: size(125);
        left: size(175);

        h3 {
            font-weight: 700;
            font-size: size(70);
        }

        p {
            display: flex;
            align-items: center;
            font-weight: 500;
            font-size: size(30);
            gap: size(24);
            margin-top: size(15);

            span {
                font-size: size(11);
            }
        }
    }

    .text {
        text-align: center;
        position: absolute;
        left: size(947);
        bottom: size(130);

        @media screen and (max-width: 768px) {
            width: 100%;
            left: 0;
            right: 0;
            top: size-m(84);
            bottom: unset;
            margin: auto;
        }

        h2 {
            font-weight: 600;
            font-size: size(90);

            @media screen and (max-width: 768px) {
                font-size: size-m(34);
                letter-spacing: size-m(0.34);
            }

            span {
                display: inline-block;
                margin-left: size(25);
                font-size: size(80);
                letter-spacing: size(4);

                @media screen and (max-width: 768px) {
                    font-size: size-m(32);
                    margin-left: size-m(8);
                    letter-spacing: size-m(1.6);
                }
            }
        }

        h4 {
            font-weight: 600;
            font-size: size(80);
            letter-spacing: size(17.6);

            @media screen and (max-width: 768px) {
                font-size: size-m(36);
                letter-spacing: size-m(2);
            }
        }

        ul {
            display: flex;
            justify-content: center;
            margin-top: size(25);
            margin-bottom: size(15);

            @media screen and (max-width: 768px) {
                margin-top: size-m(8.5);
                margin-bottom: size-m(7);
            }

            li {
                font-weight: 500;
                font-size: size(40);
                padding-left: size(40);
                padding-right: size(40);
                border-left: size(3) solid #e1554b;

                @media screen and (max-width: 768px) {
                    font-size: size-m(16);
                    padding-left: size-m(12);
                    letter-spacing: size-m(2.56);
                    padding-right: size-m(12);
                    border-left: size-m(1) solid #e1554b;
                }

                &:last-child {
                    border-right: size(3) solid #e1554b;

                    @media screen and (max-width: 768px) {
                        border-right: size-m(1) solid #e1554b;
                    }
                }
            }
        }

        h3 {
            @media screen and (max-width: 768px) {
                font-weight: 700;
                font-size: size-m(26);
                margin-top: 0;
            }
        }

        p {
            @media screen and (max-width: 768px) {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: size-m(6);
                font-size: size-m(24);
                font-size: size-m(10);
                font-weight: 500;

                span {
                    font-size: size-m(4);
                    text-align: left;
                }
            }
        }

        a {
            display: block;
            margin-bottom: size(160);
            font-size: size(100);
            font-weight: 500;

            @media screen and (max-width: 768px) {
                margin-bottom: size-m(35);
                text-decoration: none;
                font-size: size-m(44);
                display: flex;
                justify-content: center;
            }

            span {
                font-weight: 500;
                font-size: size(55);

                @media screen and (max-width: 768px) {
                    font-size: size-m(24);
                    margin-right: size-m(7.5);
                    margin-top: size-m(6);
                }
            }
        }

        .logo {
            pointer-events: none;
            width: size(860);
        }
    }

    .logo {
        pointer-events: none;
        width: size(860);

        @media screen and (max-width: 768px) {
            position: absolute;
            width: calc(100% - size-m(60));
            left: 0;
            right: 0;
            bottom: size-m(30);
            margin: auto;
            z-index: 1;
        }
    }

    .pic {
        pointer-events: none;
        position: absolute;
        width: size(877);
        left: 0;
        bottom: 0;

        @media screen and (max-width: 768px) {
            width: size-m(405);
            left: size-m(-55);
        }
    }
}
</style>
