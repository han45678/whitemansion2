<template>
    <div class="order relative bg-[#FFF] text-center font-['Noto_Sans_TC']">
        <!-- Title -->
        <div class="title mx-auto order-title text-left text-[#595757]">
            {{ info.order.title }}
        </div>
        <!-- Title Image -->
        <!-- <img v-if="$isMobile()" class="order-title-img" src="@/section/form/titleImg_m.svg" alt="戀JIA" srcset=""
      data-aos="fade" data-aos-duration="1000">
    <img v-else class="order-title-img" src="@/section/form/titleImg.svg" alt="戀JIA" srcset="" data-aos="fade"
      data-aos-duration="1000"> -->
        <!-- Form -->
        <div class="form mx-auto relative flex items-start justify-center">
            <div class="left h-full flex flex-col justify-between items-center">
                <input
                    type="text"
                    placeholder="姓名"
                    class="input w-full rounded-none"
                    :value="formData.name"
                    @input="(event) => (formData.name = event.target.value)"
                />
                <input
                    type="text"
                    placeholder="手機"
                    class="input w-full rounded-none"
                    :value="formData.phone"
                    @input="(event) => (formData.phone = event.target.value)"
                />
                <select
                    class="select w-full rounded-none"
                    v-model="formData.room_type"
                >
                    <option
                        value=""
                        selected
                        disabled
                    >
                        需求房型
                    </option>
                    <option value="2房">2 房</option>
                    <option value="3房">3 房</option>
                </select>
                <select
                    class="select w-full rounded-none"
                    v-model="formData.city"
                >
                    <option
                        value=""
                        selected
                        disabled
                    >
                        居住縣市
                    </option>
                    <option
                        v-for="city in cityList"
                        :value="city.value"
                    >
                        {{ city.label }}
                    </option>
                </select>
                <select
                    class="select w-full rounded-none"
                    v-model="formData.area"
                >
                    <option
                        value=""
                        selected
                        disabled
                    >
                        居住地區
                    </option>
                    <option
                        v-for="area in areaList"
                        :value="area.value"
                    >
                        {{ area.label }}
                    </option>
                </select>
            </div>
            <div class="right h-full">
                <textarea
                    :value="formData.note"
                    @input="(event) => (formData.note = event.target.value)"
                    class="textarea w-full h-full rounded-none"
                    placeholder="備註訊息"
                ></textarea>
            </div>
        </div>

        <!-- Policy -->
        <div class="policy">
            <div class="flex gap-2 items-center justify-center control">
                <input
                    type="checkbox"
                    v-model="formData.policyChecked"
                    :checked="formData.policyChecked"
                    class="checkbox bg-white rounded-md"
                />
                <p>
                    本人知悉並同意<label
                        for="policy-modal"
                        class="modal-button text-[#D9374B] font-bold cursor-pointer hover:opacity-70"
                        >「個資告知事項聲明」</label
                    >內容
                </p>
            </div>
            <Policy />

            <!-- Recaptcha -->
            <vue-recaptcha
                class="flex justify-center mt-8 z-10"
                ref="recaptcha"
                :sitekey="info.recaptcha_site_key_v2"
                @verify="onRecaptchaVerify"
                @expired="onRecaptchaUnVerify"
            />

            <!-- Send -->
            <div
                class="send mt-8 mx-auto hover:scale-90 btn cursor-pointer btregistration bg-[#D9374B] text-white rounded-full"
                @click="send()"
            >
                送出表單
            </div>
        </div>
        <!-- Contact Info -->
        <ContactInfo />

        <!-- Map -->
        <Map />

        <!-- HouseInfo -->
        <HouseInfo />
    </div>
</template>

<style lang="scss">
@import '@/assets/style/function.scss';

.order {
    width: 100%;
    padding-top: size(115);

    .order-title {
        font-size: size(43);
        font-weight: 500;
        margin-bottom: size(45);
    }

    .textarea,
    .input,
    .select {
        border: 1px solid #e1554b;
        &::placeholder,
        option:first-child {
            color: #595757;
            font-size: size(16);
            padding-left: size(20);
            padding: 0;
        }
    }

    .z-10 {
        z-index: 10;
        position: relative;
    }

    .order-title-img {
        display: block;
        width: size(859);
        margin: 0 auto;
        margin-bottom: size(40);
    }
    .policy{
      width: size(1480);
      margin: 0 auto;
      display: flex;
    }
    .title {
        width: size(1480);
    }
    .form {
        width: size(1480);
        height: 300px;
        gap: size(80);
        margin-bottom: size(50);

        .left {
            width: calc(50% - size(15));
        }

        .right {
            width: calc(50% - size(15));
        }

        &::after {
            content: '';
            width: size(1);
            height: 100%;
            background-color: #fff;
            position: absolute;
        }
    }

    .send {
        font-size: size(22);
        letter-spacing: 0.9em;
        text-indent: 0.9em;
        // color: #231815;
        // background-color: #fff;
        width: size(350);
        height: 3.3em;
        line-height: 3.3;
        border: 0;
        // border-radius: 1.6em;
        z-index: 10;
        position: relative;
    }

    .control {
        font-size: size(16);
        color: #000;
        position: relative;
    }
}

@media screen and (max-width: 768px) {
    .order {
        width: 100%;
        // border-radius: size-m(68) size-m(68) 0 0;
        padding-top: size-m(40);
        margin-top: size-m(0);

        .order-title {
            font-size: size-m(29);
            font-weight: 500;
            margin-bottom: size-m(20);
        }

        .order-title-img {
            width: size-m(208);
            margin-bottom: size-m(20);
        }

        .form {
            width: size-m(310);
            height: auto;
            gap: size-m(15);
            margin-bottom: size-m(20);
            flex-direction: column;

            .left {
                width: 100%;
                gap: size-m(15);
            }

            .right {
                width: 100%;
                height: size-m(100);
            }

            &::after {
                display: none;
            }
        }

        .send {
            font-size: size-m(21);
            width: size-m(318);
        }

        .control {
            font-size: size-m(14.6);
        }
    }
}
</style>

<script setup>
import Policy from '@/section/form/policy.vue';
import ContactInfo from '@/section/form/contactInfo.vue';
import Map from '@/section/form/map.vue';
import HouseInfo from '@/section/form/houseInfo.vue';

import info from '@/info';

import { cityList, renderAreaList } from '@/info/address.js';
import { ref, reactive, watch, onMounted } from 'vue';
import { VueRecaptcha } from 'vue-recaptcha';

import { useToast } from 'vue-toastification';
const toast = useToast();

const formData = reactive({
    name: '',
    phone: '',
    room_type: '',
    // email: "",
    city: '',
    area: '',
    note: '',
    policyChecked: false,
    r_verify: false
});

//非必填
// const bypass = ["note", "room_type", "email"]
const bypass = [];

//中文對照
const formDataRef = ref([
    '姓名', //name
    '手機', //phone
    '房型', //room_type
    // "信箱", //email
    '居住縣市', //city
    '居住地區', //area
    '備註訊息', //note
    '個資告知事項聲明', //policyChecked
    '機器人驗證' //r_verify
]);

const areaList = ref([]);

watch(
    () => formData.city,
    (newVal, oldVal) => {
        areaList.value = renderAreaList(newVal);
        formData.area = areaList.value[0].value;
    }
);

const onRecaptchaVerify = () => {
    formData.r_verify = true;
};
const onRecaptchaUnVerify = () => {
    formData.r_verify = false;
};

const send = () => {
    const urlParams = new URLSearchParams(window.location.search);
    const utmSource = urlParams.get('utm_source');
    const utmMedium = urlParams.get('utm_medium');
    const utmContent = urlParams.get('utm_content');
    const utmCampaign = urlParams.get('utm_campaign');
    const time = new Date();
    const year = time.getFullYear();
    const month = time.getMonth() + 1;
    const day = time.getDate();
    const hour = time.getHours();
    const min = time.getMinutes();
    const sec = time.getSeconds();
    const date = `${year}-${month}-${day} ${hour}:${min}:${sec}`;

    const presend = new FormData();
    let pass = true;
    let unfill = [];
    let idx = 0;

    //驗證
    for (const [key, value] of Object.entries(formData)) {
        if (!bypass.includes(key)) {
            if (value == '' || value == false) {
                unfill.push(formDataRef.value[idx]);
            }
        }
        idx++;
        presend.append(key, value);
    }

    presend.append('utm_source', utmSource);
    presend.append('utm_medium', utmMedium);
    presend.append('utm_content', utmContent);
    presend.append('utm_campaign', utmCampaign);

    //有未填寫
    if (unfill.length > 0) {
        pass = false;
        toast.error(`「${unfill.join(', ')}」為必填或必選`);
        return;
    }

    //手機驗證
    const MobileReg = /^(09)[0-9]{8}$/;
    if (!formData.phone.match(MobileReg)) {
        pass = false;
        toast.error(`手機格式錯誤 ( 09開頭10位數字 )`);
        return;
    }

    if (pass) {
        fetch(
            `https://script.google.com/macros/s/AKfycbyQKCOhxPqCrLXWdxsAaAH06Zwz_p6mZ5swK80USQ/exec?name=${formData.name}
      &phone=${formData.phone}
      &room_type=${formData.room_type}
      &email=${formData.email}
      &cityarea=${formData.city}${formData.area}
      &msg=${formData.msg}
      &utm_source=${utmSource}
      &utm_medium=${utmMedium}
      &utm_content=${utmContent}
      &utm_campaign=${utmCampaign}
      &date=${date}
      &campaign_name=${info.caseName}`,
            {
                method: 'GET'
            }
        ).then(() => {
            fetch('contact-form.php', {
                method: 'POST',
                body: presend
            }).then((response) => {
                if (response.status === 200) {
                    window.location.href = 'formThanks';
                }
            });
        });

        // toast.success(`表單已送出，感謝您的填寫`)
    }
};
</script>
