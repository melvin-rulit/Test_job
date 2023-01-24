<template>
    <header>
<!--&lt;!&ndash;        <nav class="navbar navbar-expand-md shadow-sm">&ndash;&gt;-->
<!--                    <nav  class="navbar navbar-expand-md ">-->

<!--            <ul class="navbar-nav mr-auto tracking-widest rol">-->

<!--                <li>-->
<!--                    <div class="avatar-sm">-->
<!--&lt;!&ndash;                        <img src="images/MenuList/padlock.svg" alt="..." class="avatar-img text-light">&ndash;&gt;-->

<!--                        &lt;!&ndash;                            <img src="images/3185.jpg" alt="..." class="avatar-img rounded-circle">&ndash;&gt;-->

<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--&lt;!&ndash;        иконка блокировки экрана      &ndash;&gt;-->
<!--&lt;!&ndash;                    <i  class="fa-sharp fa-solid fa-key text-light"></i>&ndash;&gt;-->
<!--                </li>-->
<!--                <li>-->
<!--                    <h5 class="header-pretitle pt-4 text-light"> Страница управления сотрудниками </h5>-->
<!--                </li>-->


<!--&lt;!&ndash;                <li><h5><a href="#" @click.prevent="" class=" ml-2"><img&ndash;&gt;-->
<!--&lt;!&ndash;                    src="images/icon-header/logout.png" alt="Logout"></a></h5>&ndash;&gt;-->
<!--&lt;!&ndash;                </li>&ndash;&gt;-->

<!--                <li>-->
<!--&lt;!&ndash;                    <b-badge  variant="light mt-4"><h5>Страница управления сотрудниками</h5> </b-badge>&ndash;&gt;-->
<!--&lt;!&ndash;                    <textarea class="form-control" data-autosize rows="1" placeholder="Найти сотрудника"></textarea>&ndash;&gt;-->

<!--                </li>-->
<!--            </ul>-->

<!--        </nav>-->

        <!-- Нижняя  - строка статус бар -------------------------------------------------------------------------------------->
        <div class="container">
            <div class="row up_sidebar">
                <div class="col-2">
                    <!--                                 <b-badge variant="info mt-4"> Строка состояния с дополнительными настройками таблицы и.т.д</b-badge>-->
                    <!--                <h5 class="header-pretitle version text-light"> version 3.6 </h5>-->
                    <h5 class="header-pretitle  text-light"> </h5>

                </div>

                <div class="col-8">
                    <!--                                 <b-badge variant="info mt-4"> Строка состояния с дополнительными настройками таблицы и.т.д</b-badge>-->
                    <h5 class="header-pretitle version mt-3 mr-6 text-light">   </h5>

                </div>
                '<div class="col-2">
                    <!--                                 <b-badge variant="info mt-4"> Строка состояния с дополнительными настройками таблицы и.т.д</b-badge>-->
<!--                    <h5 class="header-pretitle  text-light"> Страница управления сотрудниками  </h5>-->

                </div>
            </div>
        </div>
    </header>
</template>


<style lang="scss">

header {
    //flex: 1 1 0;
    //padding: 3rem;
    //width: auto;
    //border-bottom: 1px solid red;

    @media (max-width: 1024px) {
        //padding-left: 6rem;
    }
}
.user_name {
    font-size: 1rem;
    color: var(--bs-dark);
    transition: opacity 0.8s ease-in-out;
}
.up_sidebar {
    margin-bottom: 3px;

}

.up_sidebar h5{
   padding-left: 70%;
}

</style>
