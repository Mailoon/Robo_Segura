<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />

    <!-- <div
        class="bg-main-image"
    >
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-end">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    href="/google-auth/redirect"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-3"
                    >Sing in with google</Link
                >

                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Register</Link
                >
            </template>
        </div>

    </div> -->

    <div id="welcome">
        <div class="bg-main-img">
            <img src="./../img/main.jpg" alt="">
        </div>
        <div class="welcome-modal">
            <h1>Welcome to<br>Vinci</h1>
            <p>Where art finds its voice, and talents find their way.</p>
            <div v-if="canLogin">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                >Start now!</Link
            >

            <template v-else>
                <div class="authentication-btns">
                    <Link
                        :href="route('login')"
                        class="boton boton-secondary"
                        >Log in</Link
                    >

                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="boton"
                        >Register</Link
                    >
                </div>
                <div>
                    <Link
                        href="/google-auth/redirect"
                        class="boton"
                        >Sing in with google</Link
                    >
                </div>
            </template>
        </div>
        </div>
    </div>
</template>
