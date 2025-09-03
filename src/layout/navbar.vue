<template>
    <div class="nav fixed flex items-center justify-between top-0 left-0 md:w-100 z-50 bg-white w-full"
        v-bind:class="{ 'r16-9': higherScreen }">
        <div class="logo cursor-pointer z-10" v-bind:class="{ 'open': menuOpen }" @click="scrollTo('.s1')"></div>
        <div class="menu-btn cursor-pointer flex items-center gap-3" @click="menuOpen = !menuOpen"
            v-bind:class="{ 'open': menuOpen }">
            <p class="uppercase text-color2 z-10">menu</p>
            <div class="bar z-10"></div>
        </div>
        <div class="menu shadow-lg flex flex-col items-center justify-center" v-bind:class="{ open: menuOpen }">
            <div class="menu-item font-bold cursor-pointer text-white hover:text-color1" v-for="item, i in info.navList"
                @click="scrollTo(item.target)">
                <span class="mr-3">0{{ i + 1 }}</span><span>{{ item.name }}</span>
            </div>
        </div>
    </div>
    <div class="gotop fixed z-40 cursor-pointer" v-bind:class="{ show: scrollPos > 100 }" @click="scrollTo('.s1')">
    </div>
</template>


<style lang="scss">
@import "@/assets/style/function.scss";

.nav {
    padding: 0 size(50);
    height: size(80);

    .logo {
        width: size(190);
        height: size(30);
        background-image: url('@/assets/navlogo.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }

    .menu-btn {
        position: relative;
        z-index: 1;

        p {
            transition: all .5s;
            font-size: size(20);
        }

        .bar {
            width: size(30);
            height: 2px;
            background-color: theme('colors.color2');
            position: relative;
            transform: all .5s;

            &::after {
                content: '';
                width: 100%;
                height: 2px;
                bottom: -#{size(10)};
                position: absolute;
                background-color: theme('colors.color2');
                transition: all .5s;
            }

            &::before {
                content: '';
                width: 100%;
                height: 2px;
                top: -#{size(10)};
                position: absolute;
                background-color: theme('colors.color2');
                transition: all .5s;
            }
        }

        &:hover {
            .bar {
                &::after {
                    transform: translateX(10%);
                }

                &::before {
                    transform: translateX(-10%);
                }
            }
        }

        &.open {
            p {
                color: #fff;
            }

            .bar {
                height: 0;

                &::after {
                    content: '';
                    width: 100%;
                    height: 2px;
                    bottom: 50%;
                    margin-bottom: -1px;
                    position: absolute;
                    background-color: #fff;
                    transition: all .5s;
                    transform: rotate(135deg);
                }

                &::before {
                    content: '';
                    width: 100%;
                    height: 2px;
                    top: 50%;
                    margin-top: -1px;
                    position: absolute;
                    background-color: #fff;
                    transition: all .5s;
                    transform: rotate(-135deg);
                }
            }
        }
    }

    .menu {
        position: fixed;
        top: size(10);
        right: size(10);
        background-color: theme('colors.color2');
        width: size(330);
        z-index: 0;
        transform: translateX(150%);
        transition: all .5s;
        border-radius: size(20);
        padding: size(100) 0;
        gap: size(20);

        .menu-item {
            font-size: size(25);
        }

        &.open {
            transform: translateX(0);
        }
    }

    &.r16-9 {
        background-color: transparent;

        .menu-btn {
            &::after {
                content: '';
                width: 160%;
                height: 170%;
                background-color: #fff;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                border-radius: size(20);
                transition: all .5s;
            }

            &:hover {
                &::after {
                    box-shadow: 3px 3px 5px rgba($color: #000000, $alpha: .1);
                }
            }

            &.open {
                &::after {
                    content: '';
                    background-color: transparent;
                    box-shadow: unset;

                }

            }
        }

    }
}

.gotop {
    width: size(49.4);
    height: size(49.4);
    right: size(20);
    bottom: size(50);
    background-image: url('@/assets/top.png');
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    transform: translateY(200%);
    transition: all .5s;

    &.show {
        transform: translateY(0%);
    }
}

@media screen and (max-width:768px) {

    .gotop {
        width: size-m(34.24);
        height: size-m(34.24);
        right: size-m(20);
        bottom: size-m(80);
    }

    .nav {
        width: size-m(350);
        left: size-m(12.5);
        top: size-m(12.5);
        padding: 0 size-m(24);
        height: size-m(35);
        border-radius: 9999px;

        .logo {
            width: size-m(101.83);
            height: size-m(16);
            transition: all .2s;

            &.open {
                filter: brightness(0) invert(1);
            }
        }

        .menu-btn {
            p {
                font-size: size-m(14);
                font-weight: 100;
            }

            .bar {
                width: size-m(17);

                &::after {
                    bottom: -#{size-m(5)};
                }

                &::before {
                    top: -#{size-m(5)};
                }
            }

            &.open {
                p {
                    color: #fff;
                }

                .bar {
                    height: 0;

                    &::after {
                        content: '';
                        width: 100%;
                        height: 2px;
                        bottom: 50%;
                        margin-bottom: -1px;
                        position: absolute;
                        background-color: #fff;
                        transition: all .5s;
                        transform: rotate(135deg);
                    }

                    &::before {
                        content: '';
                        width: 100%;
                        height: 2px;
                        top: 50%;
                        margin-top: -1px;
                        position: absolute;
                        background-color: #fff;
                        transition: all .5s;
                        transform: rotate(-135deg);
                    }
                }
            }
        }

        .menu {
            position: fixed;
            top: 1.5vh;
            right: size-m(12.5);
            background-color: theme('colors.color2');
            width: size-m(350);
            height: 97vh;
            z-index: 0;
            transform: translateX(150%);
            transition: all .5s;
            border-radius: size-m(10);
            padding: 0;
            gap: size-m(45);

            .menu-item {
                font-size: size-m(21);
            }

            &.open {
                transform: translateX(0);
            }
        }

        &.r16-9 {
            background-color: transparent;

            .menu-btn {
                &::after {
                    content: '';
                    width: 160%;
                    height: 170%;
                    background-color: #fff;
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%, -50%);
                    border-radius: size(20);
                    transition: all .5s;
                }

                &:hover {
                    &::after {
                        box-shadow: 3px 3px 5px rgba($color: #000000, $alpha: .1);
                    }
                }

                &.open {
                    &::after {
                        content: '';
                        background-color: transparent;
                        box-shadow: unset;

                    }

                }
            }

        }
    }
}
</style>

<script setup>
import { inject, getCurrentInstance, onMounted, ref } from 'vue';
import info from "@/info"

const menuOpen = ref(false)

const globals = getCurrentInstance().appContext.config.globalProperties
const higherScreen = ref(false)

const scrollPos = ref(0)

onMounted(() => {
    const ratio = window.innerHeight / window.innerWidth

    if (!globals.$isMobile() && ratio > 0.46875) {
        higherScreen.value = true
    }

    window.addEventListener('scroll', (event) => {
        let scroll = window.pageYOffset || document.documentElement.scrollTop;
        scrollPos.value = scroll
    });
})


const smoothScroll = inject('smoothScroll')
const scrollTo = (el) => {
    smoothScroll({
        scrollTo: document.querySelector(el)
    })
}
</script>