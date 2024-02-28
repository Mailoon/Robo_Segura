<template>
    <Head title="Admin"/>

    <AuthenticatedLayout>
        <section id="admin-dashboard">
            <div class="admin-nav">
                <h1>BIENVENIDO AL ADMIN</h1>
                <Link :href="route('tags')" :active="route().current('tags')">
                    Tags
                </Link>
            </div>
            <div>
                <slot />
            </div>
        </section>
    </AuthenticatedLayout>
</template>

<script>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

export default {

    components: {

        AuthenticatedLayout,
        Head,
        Link,

    },

}

</script>

<style>

#admin-dashboard {
    display: flex;
    height: 91vh;
}

.admin-nav {
    width: 30%;
    background-color: #212121;
    color: aliceblue;
}

</style>
