<!-- 好像沒有用到 -->
<script setup>
import { ref } from 'vue';

const open = ref(false);
</script>

<template>
    <section class="menu">
        <button class="menu_btn" :class="{ active: !open }" @click="open = !open">
            <img src="./menu/menu.svg" alt="menu" />
        </button>
        <nav :class="{ active: open }">
            <ul>
                <li @click="open = !open">
                    <img src="./menu/close.svg" alt="icon" />
                </li>
                <li>
                    <a href="">
                        <img src="./menu/icon_1.svg" alt="icon" />
                        <img src="./menu/icon_1_text.svg" alt="text" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="./menu/icon_2.svg" alt="icon" />
                        <img src="./menu/icon_2_text.svg" alt="text" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="./menu/icon_3.svg" alt="icon" />
                        <img src="./menu/icon_3_text.svg" alt="text" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="./menu/icon_4.svg" alt="icon" />
                        <img src="./menu/icon_4_text.svg" alt="text" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="./menu/icon_5.svg" alt="icon" />
                    </a>
                </li>
            </ul>
        </nav>
    </section>
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
        transform: translateX(100%);

        &.active {
            transform: translateX(0);
        }

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
        transition: all 0.3s ease-in-out;
        transform: translateX(100%);

        &.active {
            transform: translateX(0);
        }

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
                    background-color: hsl(215 28% 17% / 0.1);
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
</style>
