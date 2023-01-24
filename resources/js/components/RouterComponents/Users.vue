<template>

<div class="">
    <b-table
        hover
        bordered="true"

        :items="users"
        :fields="fields"
        @row-clicked=""
        head-variant="dark">

        <template #cell(index)="data">
            <div class="border border-index-otstup">
                {{ data.index + 1 }}
            </div>

        </template>

    </b-table>

</div>


</template>

<script>
export default {

    data() {
        return {
            fields: [
                {
                    key: 'index',
                    label: '№',
                },
                {
                    key: 'surname',
                    label: 'Фамилия',
                },
                {
                    key: 'name',
                    label: 'Имя',
                },
                {
                    key: 'role',
                    label: 'Должность',
                }, {
                    key: 'created_at',
                    label: 'Дата создания',
                },
            ],

            users : [
                {
                    index: '1',
                    name: 'Кристина',
                    surname: 'Гладун',
                    role: 'Администpатор',
                    created_at: '02.12.2022'
                },
                {
                    index: '2',
                    name: 'Олександр',
                    surname: 'Яковенко',
                    role: 'Администpатор',
                    created_at: '02.12.2022'
                },
                {
                    index: '3',
                    name: 'Сергей',
                    surname: 'Хижий',
                    role: 'Администpатор',
                    created_at: '02.12.2022'
                },
                {
                    index: '4',
                    name: 'Тарас',
                    surname: 'Танечник',
                    role: 'Администpатор',
                    created_at: '02.12.2022'
                },
                {
                    index: '5',
                    name: 'Мар\'яна',
                    surname: 'Вадац',
                    role: 'Администpатор',
                    created_at: '02.12.2022'
                },
                {
                    index: '6',
                    name: 'Ірина',
                    surname: 'Павлишина',
                    role: 'Администpатор',
                    created_at: '02.12.2022'
                },
                {
                    index: '7',
                    name: 'Вадим',
                    surname: 'Юхимук',
                    role: 'Менеджер',
                    created_at: '18.07.2020'
                },
                {
                    index: '8',
                    name: 'Олеся',
                    surname: 'Семенюк',
                    role: 'Менеджер по продажам',
                    created_at: '18.07.2020'
                },
                {
                    index: '9',
                    name: 'Богдан',
                    surname: 'Бодячук',
                    role: 'Курьер',
                    created_at: '27.02.2022'
                },
                {
                    index: '10',
                    name: 'Іван',
                    surname: 'Данилюк',
                    role: 'Курьер',
                    created_at: '11.03.2022'
                },
                {
                    index: '11',
                    name: 'Олександр',
                    surname: 'Чабан',
                    role: 'Курьер',
                    created_at: '11.03.2022'
                },
                {
                    index: '12',
                    name: 'Олександр',
                    surname: 'Чабан',
                    role: 'Курьер',
                    created_at: '11.03.2022'
                },
                {
                    index: '13',
                    name: 'Олександр',
                    surname: 'Чабан',
                    role: 'Курьер',
                    created_at: '11.03.2022'
                },
                {
                    index: '14',
                    name: 'Олександр',
                    surname: 'Чабан',
                    role: 'Курьер',
                    created_at: '11.03.2022'
                },
                {
                    index: '15',
                    name: 'Олександр',
                    surname: 'Чабан',
                    role: 'Курьер',
                    created_at: '11.03.2022'
                },
                {
                    index: '16',
                    name: 'Олександр',
                    surname: 'Чабан',
                    role: 'Курьер',
                    created_at: '11.03.2022'
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
//main {
//    margin-right: 20px;
//}
.border-index-otstup {
    padding-left: 40%;
    //justify-content: center;
}
</style>
