<template>
    <aside :class="`${is_expanded ? 'is-expanded' : ''}`">

        <div class="container logo mb-5">
            <div class="row">
                <div class="col-9">
                    <div class="logo">
                        <img class="avatar-img rounded-circle" src="images/3185.jpg" alt="Logo"/>

                    </div>
                </div>
            </div>

            <div class="row">

                <h3 class="user_name pt-4 test_2">Марченко Юрий</h3>
            </div>
            <div class="row">
                <h6 class="mr-4 mt-3 text-light">Director</h6>
            </div>
            <div class="row">

                <!--                <span class="text-success">●</span>-->
            </div>

        </div>

        <hr/>

        <div class="flex"></div>

        <div class="menu">

            <!--            <h4 class="pod-menu-name">Меню</h4>-->
            <router-link to="/home" class="button">
                <i class="fa-solid fa-house fonawesome-icons"></i>
                <span class="text">Главная</span>
            </router-link>
            <router-link to="/" class="button">
                <i class="fa-solid fa-chart-simple fonawesome-icons"></i>
                <span class="text">Филиалы</span>
            </router-link>
            <router-link to="/about" class="button">
                <i class="fa-sharp fa-solid fa-list-check fonawesome-icons"></i>
                <span class="text">Доступы</span>
            </router-link>
            <router-link to="/team" class="button">
                <i class="fa-solid fa-registered fonawesome-icons"></i>
                <span class="text">Должности</span>
            </router-link>
            <router-link to="/users" class="button">
                <i class="fa-sharp fa-solid fa-id-card fonawesome-icons "></i>
                <span class="text">Сотрудники</span>
            </router-link>
            <router-link to="/clients" class="button">
                <i class="fa-solid fa-users fonawesome-icons"></i>
                <span class="text">Клиенты</span>
            </router-link>
            <router-link to="/" class="button">
                <i class="fa-solid fa-cash-register fonawesome-icons"></i>
                <span class="text">Касса</span>
            </router-link>
            <router-link to="/" class="button">
                <i class="fa-solid fa-cash-register fonawesome-icons"></i>
                <span class="text">Склад</span>
            </router-link>
            <router-link to="/" class="button">
                <i class="fa-solid fa-cash-register fonawesome-icons"></i>
                <span class="text">Журнал</span>
            </router-link>
            <!--            <router-link to="/" class="button">-->
            <!--                <i class="fa-solid fa-chart-simple fonawesome-icons"></i>-->
            <!--                <span class="text">Статистика</span>-->
            <!--            </router-link>-->
            <router-link to="/" class="button">
                <i class="fa-solid fa-circle-info fonawesome-icons"></i>
                <span class="text">Отчеты</span>
            </router-link>

            <!--            <router-link to="/settings" class="button">-->
            <!--                <i class="fa-solid fa-gears fonawesome-icons"></i>-->
            <!--                <span class="text">Настройки</span>-->
            <!--            </router-link>-->
        </div>

        <div class="flex_3"></div>

        <hr/>

        <!---------------------------------------------------------- Time block ----------------------------------------------->

        <TimeBlock_Component/>

        <!---------------------------------------------------------- End ----------------------------------------------->

        <hr/>

        <div class="flex_otstup_ot_time_block"></div>


        <nav class=" navbar-expand-md">

            <div class="collapse navbar-collapse menu">
                <ul class="navbar-nav    ">

                    <li class="avatar">
                        <img class="avatar-img" src="images/Sidebar/power-off.png" alt=""/>
                    </li>
                    <li class="avatar">
                                                                        <img class="avatar-img" src="images/stopwatch.png" alt=""/>
                    </li>
                    <li class="avatar">
<!--                        <img class="avatar-img" src="images/App.vue/service.png" alt=""/>-->
                        <img class="avatar-img" src="images/settings_7.png" alt=""/>
                    </li>
                    <li class="avatar">
                        <img class="avatar-img" src="images/App.vue/my.png" alt=""/>
                    </li>
                    <li class="avatar">

                    </li>
                    <li class="avatar">
                        <img class="avatar-img" src="images/instrument/unlocked.png" alt=""/>
                    </li>
                    <li class="avatar">


                        <div class="menu-toggle-wrap">
                            <button class="menu-toggle" @click="ToggleMenu">

                                <div v-if="is_expanded">
                                    <i class="fa-sharp fa-solid fa-chevron-left fonawesome-icon-open"></i>
                                    <!--<i v-if="is_expanded" class="fa-sharp fa-solid fa-xmark fonawesome-icon-close"></i>-->
                                </div>
                            </button>
                        </div>
                    </li>


                </ul>
            </div>

        </nav>

    </aside>
</template>

<script setup>
import {ref} from 'vue'

const is_expanded = ref(localStorage.getItem("is_expanded") === "true")

const ToggleMenu = () => {
    is_expanded.value = !is_expanded.value
    localStorage.setItem("is_expanded", is_expanded.value)
}
</script>

<!--<script>-->
<!--import { ref } from 'vue'-->
<!--export default {-->
<!--    setup() {-->
<!--        const is_expanded = ref(localStorage.getItem("is_expanded") === "true")-->

<!--        const ToggleMenu = () => {-->
<!--            is_expanded.value = !is_expanded.value-->
<!--            localStorage.setItem("is_expanded", is_expanded.value)-->
<!--        }-->
<!--    },-->
<!--};-->
<!--</script>-->

<style lang="scss" scoped>

aside {
    display: flex;
    flex-direction: column;
    backdrop-filter: blur(1px);
    //background: rgba(10, 10, 10, .65);
    //box-shadow: 0px 0px 10px lavender;
    //box-shadow: 2px 2px 12px black;
    //background-color: #12263f;
    //background-color: var(--bs-dark);
    width: calc(2rem + 32px);
    overflow: hidden;
    min-height: 100vh;
    padding: 1rem;
    transition: 0.2s ease-in-out;

    .flex_otstup_ot_time_block {
        flex: 0 0 5%;
    }




    //.flex {
    //    flex: 0.2 0 0%;
    //}

    .flex_2 {
        flex: 0 0 5%;
    }

    .flex_3 {
        flex: 0 0 6%;
    }

    .logo {
        //margin-bottom: 1rem;

        img {
            width: 2rem;
        }
    }


    .menu-toggle-wrap {
        display: flex;
        justify-content: flex-end;
        margin-right: 50px;
        position: relative;
        top: -10rem;
        transition: 0.2s ease-in-out;

        .menu-toggle {
            transition: 0.2s ease-in-out;

            .fonawesome-icons {
                padding-left: 20px;
                font-size: 2rem;
                //color: var(--light);
                //color: var(--primary);
                //box-shadow: 2px 2px 22px green;
                transition: 0.2s ease-out;
            }

            .fonawesome-icon-open {
                font-size: 2rem;
                //color: var(--light);
                //color: var(--primary);
                color: lavender;
                transition: 0.2s ease-out;
                padding-left: 3rem;
            }

            &:hover {
                .fonawesome-icon-open {
                    //color: var(--primary);
                    transform: translateX(0.8rem);
                }

            }
        }
    }

    h3, .button .text {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    hr {
        opacity: 0;
    }

    h3, h4 {
        color: var(--grey);
        //font-size: 0.875rem;
        margin-bottom: 1rem;
        margin-left: 2%;
    }

    h6 {
        //color: var(--grey);
        color: lavender;
        //font-size: 0.875rem
    }

    //----------------------------------------- menu ------------------------------------------------------------------

    .menu {
        margin: 0 -1rem;

        .pod-menu-name {
            color: red;
        }

        .button {
            display: flex;
            align-items: center;
            text-decoration: none;

            transition: 0.2s ease-in-out;
            padding: 0.9rem 1.2rem;

            .fonawesome-icons {
                font-size: 1.2rem;
                //color: var(--light);
                //color: #d81921;
                color: #b9b9b9;
                transition: 0.2s ease-in-out;
            }

            .text {
                // variant_1 -- этим font-size мы меняем размер значков и текста router-view
                font-size: 1rem;
                // variant_2 -- этим font-size мы меняем размер значков и текста router-view
                //font-size: 0.9rem;
                color: var(--light);
                //color: #d81921;
                transition: 0.2s ease-in-out;
            }

            &:hover {
                background: rgba(255, 255, 255, .1);

                .fonawesome-icons, .text {
                    //color: var(--primary);
                    //color: lavender;
                    //color: red;
                }

                .fonawesome-icon-close {
                    border: 1px solid lavender;
                    font-size: 3rem;
                }
            }

            &.active {
                //background-color: var(--dark-alt);
                //variant 1
                background: rgba(255, 255, 255, .1);
                //border-left: 1px solid red;
                //variant 2
                //background: #ffffff;


                // тут сделать if условие при котором мы можем менять цвет иконки и текста или менять цвет по отдельности

                //.fonawesome-icons, .text {
                //    //color: var(--primary);
                //    //color: lavender;
                //    //color: red;
                //    color: black;
                //}

                .text {
                    //variant 1
                    color: #ffffff;
                    //color: var(--primary);
                    //color: black;
                    //color: red;
                }


                .fonawesome-icons {
                    //variant 1
                    color: #ffffff;
                    //color: var(--primary);
                    // color: red;
                    // color: black;
                }
            }
        }
    }

    .footer {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;

        p {
            font-size: 0.875rem;
            color: var(--grey);
        }
    }

    //------------------------------------------------------ is-expanded -----------------------------------------------

    .logo {
        //margin-bottom: 1rem;
        //margin-top: 1rem;
        display: flex;

        img {
            // variant_1 -- Когда фотка распологается в центре блока
            //width: 8rem;
            //margin-left: 59px;

            // variant_1 -- Когда фотка уходит в крайний левый угол и появляется название должности
            width: 6rem;
        }
    }

    &.is-expanded {
        width: var(--sidebar-width);

        .menu-toggle-wrap {

            .menu-toggle .fonawesome-icon-close {
                color: var(--light);
                //color: var(--primary);
                font-size: 1.7rem;

            }
        }

        h3, .button .text {
            opacity: 1;
        }

        .user_name {
            //font-size: 1.5rem;
            font-size: 1.3rem;
            //color: lavender;
            padding-left: 20px;
            transition: opacity 0.8s ease-in-out;
        }

        hr {
            width: 100%;
            height: 2px;
            margin: 0 0 20px;
            //margin-bottom: 20px;
            background: rgba(255, 255, 255, .1);
            border-radius: 3px;
            opacity: 1;
        }

        .button {
            padding: 0.9rem 2rem;

            .fonawesome-icons {
                margin-right: 0.9rem;
            }
        }


        .footer {
            opacity: 0;
        }
    }

    @media (max-width: 1024px) {
        position: absolute;
        z-index: 99;
    }

    .time {
        padding-left: 100%;
        padding-top: 20px;
    }

    .y {
        margin-left: 70px;
        width: 30px;
        height: 30px;
    }

    .test-ots {
        margin-left: 40%;
    }

    .test_2 {
        margin-left: 20px;
        margin-top: 10px;
    }
}
</style>

