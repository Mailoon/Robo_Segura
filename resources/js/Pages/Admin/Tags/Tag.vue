<template>

<AdminNav>
    estas en tags
    {{ lugares }}
    <table>
        <thead>
            <th>id</th>
            <th>name</th>
        </thead>
        <tbody>
            <tr v-for="lugar in lugares">
                <td>{{ lugar.id }}</td>
                <td>{{ lugar.name }}</td>
            </tr>
        </tbody>
    </table>
</AdminNav>

</template>

<script>

import AdminNav from "../../Admin.vue"

export default {

    components: {

        AdminNav,

    },

    props: [
        'lugares',
    ],
}

</script>
