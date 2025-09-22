<template>
    <!--右上角按鈕-->
    <section class="menu"
        :style="{ '--menu-offset': isMenuOpen ? '0' : '100%', '--button-opacity': isMenuOpen ? '0' : '1' }">
        <button class="menu_btn" @click="isMenuOpen = !isMenuOpen">
            <img src="../menu/menu.svg" alt="menu" />
        </button>
        <nav>
            <ul>
                <li @click="isMenuOpen = !isMenuOpen">
                    <img src="../menu/close.svg" alt="icon" />
                </li>
                <li>
                    <a @click="
                        modalOpen = true;
                    modalType = 'gmap';
                    ">
                        <img src="../menu/icon_1.svg" alt="icon" />
                        <img src="../menu/icon_1_text.svg" alt="text" />
                    </a>
                </li>
                <li>
                    <a @click="open()">
                        <img src="../menu/icon_2.svg" alt="icon" />
                        <img src="../menu/icon_2_text.svg" alt="text" />
                    </a>
                </li>
                <li>
                    <a @click="
                        modalOpen = true;
                    modalType = 'fb';
                    ">
                        <img src="../menu/icon_3.svg" alt="icon" />
                        <img src="../menu/icon_3_text.svg" alt="text" />
                    </a>
                </li>
                <li>
                    <a @click="
                        modalOpen = true;
                    modalType = 'phone';
                    ">
                        <img src="../menu/icon_4.svg" alt="icon" />
                        <img src="../menu/icon_4_text.svg" alt="text" />
                    </a>
                </li>
            </ul>
        </nav>
    </section>

    <!--選單下方按鈕-->
    <div class="contact-info mx-auto flex flex-col items-center justify-between">
        <!-- <div class="logo"></div> -->
        <div class="flex justify-between w-full contact-item-box">
            <div class="flex contact-item justify-between items-center hover" @click="
                modalOpen = true;
            modalType = 'phone';
            ">
                <img src="@/section/form/phone.svg" alt="白樓2璞域" srcset="" />
                <div class="flex-1">{{ info.phone }}</div>
            </div>
            <div class="flex contact-item justify-between items-center hover" @click="
                modalOpen = true;
            modalType = 'fb';
            ">
                <img src="@/section/form/messenger.svg" alt="白樓2璞域" srcset="" />
                <div class="flex-1" style="letter-spacing: 0.5em;">F B 諮詢</div>
            </div>
            <div class="flex contact-item justify-between items-center btfanpage hover" @click="open()">
                <img src="@/section/form/fb.svg" alt="白樓2璞域" srcset="" />
                <div class="flex-1">前往粉絲專頁</div>
            </div>
        </div>
        <div class="address-wrap flex justify-between w-full contact-item-box no-gap overflow-hidden">
            <div class="flex contact-item justify-between items-center address">
                <div><span v-if="info.address1">{{ info.address1 }}：</span>{{ info.address }}</div>
            </div>
            <div class="map_btn flex contact-item justify-between items-center hover" @click="
                modalOpen = true;
            modalType = 'gmap';
            ">
                <img src="@/section/form/gmap.svg" alt="白樓2璞域" srcset="" />
                <div>導航 GoogleMap</div>
            </div>
        </div>
    </div>

    <!-- Mobile contact info -->

    <!-- Modal -->
    <input type="checkbox" v-model="modalOpen" id="contact-modal" class="modal-toggle" />
    <div class="modal -mt-20 md:-mt-72">
        <div class="modal-box py-12 relative flex flex-col items-center justify-center">
            <label for="contact-modal" class="btn btn-sm btn-circle absolute right-4 top-4">✕</label>
            <!-- icon -->
            <img class="h-12" v-if="modalType == 'phone'" src="@/section/form/phone.svg" alt="白樓2璞域" srcset="" />
            <img class="h-12" v-else-if="modalType == 'fb'" src="@/section/form/messenger.svg" alt="白樓2璞域" srcset="" />
            <img class="h-12" v-else-if="modalType == 'gmap'" src="@/section/form/gmap.svg" alt="白樓2璞域" srcset="" />
            <!-- title -->
            <div class="text-xl mt-4 font-bold">
                {{
                modalType == 'phone'
                ? '賞屋專線'
                : modalType == 'fb'
                ? 'Facebook Messenger'
                : '接待會館'
                }}
            </div>
            <!-- content -->
            <div class="text-md mt-4">
                {{
                modalType == 'phone'
                ? info.phone
                : modalType == 'fb'
                ? '線上諮詢'
                : `接待中心：${info.address}`
                }}
            </div>
            <!-- btn -->
            <div class="btn btn-lg bg-color1 border-0 text-white mt-12 hover:bg-color2" @click="go()" v-bind:class="{
                hidden: modalType == 'phone' && !$isMobile(),
                btlead: modalType == 'fb',
                btsearch: modalType == 'gmap',
                btcontac: modalType == 'phone'
            }">
                {{
                modalType == 'phone'
                ? '撥打電話'
                : modalType == 'fb'
                ? '立即諮詢'
                : '開啟導航'
                }}
            </div>
        </div>
    </div>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.menu {
    @media screen and (min-width: 769px) {
        position: fixed;
        right: 0;
        top: 0;
        z-index: 10;
    }

    button {
        width: size(175);
        height: size(155);
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        cursor: pointer;
        transition: 0.3s ease-in-out;
        opacity: var(--button-opacity);

        img {
            width: size(60);
        }

        @media screen and (max-width: 768px) {
            display: none;
        }
    }

    nav {
        width: size(175);
        background-color: #fff;
        position: absolute;
        top: 0;
        right: 0;
        transition: transform 0.3s ease-in-out;
        transform: translateX(var(--menu-offset));

        @media screen and (max-width: 768px) {
            transform: unset;
            top: unset;
            left: 0;
            bottom: 0;
            position: fixed;
            z-index: 10;
            width: 100%;
        }

        ul {
            @media screen and (max-width: 768px) {
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
        }

        li {
            &:nth-child(1) {
                width: 100%;
                height: size(155);
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;

                @media screen and (max-width: 768px) {
                    display: none;
                }

                img {
                    width: size(60);
                    padding: 0;

                    &:hover {
                        background-color: transparent;
                    }
                }

                &:hover {
                    background-color: #e1554ba3;
                }
            }

            @media screen and (max-width: 768px) {
                width: 25%;

                &:last-child {
                    border-right: none;

                    a {
                        border-right: none;
                    }
                }
            }

            a {
                display: block;
                width: 100%;
                height: size(120);
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;

                &:active {
                    background-color: #e1554ba3;
                }

                @media screen and (max-width: 768px) {
                    height: size-m(65);
                    display: block;
                    padding: size-m(16) 0 size-m(14) 0;
                    text-align: center;
                    border-right: 1px solid #c9caca;

                    img {
                        margin: 0 auto;

                        &:nth-child(2) {
                            margin-top: size-m(7);
                            max-height: size-m(5.2);
                        }
                    }


                }

                &::after {
                    content: '';
                    width: calc(100% - size(40));
                    height: size(1);
                    background-color: #c9caca;
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;

                    @media screen and (max-width: 768px) {
                        display: none;
                    }
                }

                &:last-child {
                    &::after {
                        display: none;
                    }
                }
            }
        }
    }
}

.contact-info {
    width: size(1800);
    padding: size(0) size(160) size(56) size(160);
    margin-top: size(73);
    position: relative;

    @media screen and (max-width: 768px) {
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto; // 三列
        width: size-m(375);
        height: auto;
        padding: size-m(50) size-m(32);
        margin-top: 0;
        position: relative;
        justify-content: flex-start;
    }

    .logo {
        width: size(371.32);
        height: size(171.57);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        margin-bottom: size(73);

        @media screen and (max-width: 768px) {
            width: size-m(177.42);
            height: size-m(81.98);
            background-image: url('@/section/form/logo.svg');
            margin-bottom: size-m(39);
        }
    }

    .contact-item-box {
        position: relative;
        margin-top: size(20);

        @media screen and (max-width: 768px) {
            position: relative;
            margin-top: size-m(0);
            gap: size-m(20);
            flex-direction: column;

            &.address-wrap {
                margin-top: size-m(20);
            }
        }

        .contact-item {
            border: 1px solid #e1554b;
            background-color: #fff;
            color: #000;
            width: 100%;
            padding: 0 size(150);
            font-size: size(16);
            line-height: 3.8;
            letter-spacing: 0.1em;
            max-width: size(480);
            z-index: 1;
            transition: all 0.3s;
            cursor: pointer;

            @media screen and (max-width: 768px) {
                padding: 0 size-m(65);
                font-size: size-m(16);
                max-width: 100%;
                justify-content: space-around;
            }

            &.hover:hover {
                background-color: #e1554ba3;
            }

            &:hover {
                color: #fff;

                img {
                    filter: brightness(0) invert(1);
                }
            }

            img {
                width: size(27);
                height: auto;
                transition: all 0.5s;
                margin: auto;

                @media screen and (max-width: 768px) {
                    width: size(80);
                    height: auto;
                }
            }

            &.address {
                color: #000;
                z-index: 0;
                position: relative;
                max-width: 9999px;
                justify-content: center;

                @media screen and (max-width: 768px) {
                    padding: 0 0;

                    &::before {
                        width: 100%;
                        height: 100%;
                        bottom: -50%;
                        left: 0;
                    }
                }
            }

            &.map_btn {
                background-color: #e1554b;
                color: #fff;

                img {
                    filter: brightness(0) invert(1);
                }
            }
        }

        &.no-gap {
            gap: 0 !important;
        }
    }
}
</style>

<script setup>
import info from '@/info';
import { inject, ref } from 'vue';
const modalOpen = ref(false);
const isMenuOpen = ref(false);
const modalType = ref('');

const go = () => {
    if (modalType.value == 'phone') {
        window.location.href = `tel:${info.phone.replace('-', '')}`;
        setTimeout(() => {
            window.location.href = 'phoneThanks';
        }, 1000);
    } else if (modalType.value == 'fb') {
        window.open(info.fbMessage);
    } else if (modalType.value == 'gmap') {
        window.open(info.googleLink);
    }
};

const open = () => {
    window.open(info.fbLink);
};

const smoothScroll = inject('smoothScroll');
const scrollTo = (el) => {
    smoothScroll({
        scrollTo: document.querySelector(el)
    });
};
</script>
