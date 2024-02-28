<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div id="plans">
            <div class="header">
                <div class="header-img opacity-7">
                    <img src="./../img/old-FH.jpg" alt="">
                </div>
                <div class="header-content mb-20">
                    <h1>Flexible plans & Pricing</h1>
                    <p>upgrade to premiun and get access to more functionalities</p>
                </div>
            </div>
            <div class="plans">
                <div class="plan-card">
                    <div class="plan-header">
                        <h3>FREE</h3>
                        <p><span>$0/</span>month</p>
                    </div>
                    <hr>
                    <div class="plan-characteristics">
                        <div class="characteristy">
                            <div class="check"></div>
                            <p><span>Projects</span> quantity with the plan free your able to uplaod 5 projects</p>
                        </div>
                        <div class="characteristy">
                            <div class="check"></div>
                            <p><span>Projects</span> quantity with the plan free your able to uplaod 5 projects</p>
                        </div>
                        <div class="characteristy">
                            <div class="check"></div>
                            <p><span>Projects</span> quantity with the plan free your able to uplaod 5 projects</p>
                        </div>
                    </div>
                    <button class="boton-bg forth-bg">
                        CURRENT PLAN
                    </button>
                </div>
                <div class="plan-card">
                    <div class="plan-header">
                        <h3 class="third-color">PREMIUN</h3>
                        <p><span>$4.99/</span>month</p>
                    </div>
                    <hr>
                    <div class="plan-characteristics">
                        <div class="characteristy">
                            <div class="check"></div>
                            <p><span>Projects</span> quantity with the plan free your able to uplaod 5 projects</p>
                        </div>
                        <div class="characteristy">
                            <div class="check"></div>
                            <p><span>Projects</span> quantity with the plan free your able to uplaod 5 projects</p>
                        </div>
                        <div class="characteristy">
                            <div class="check"></div>
                            <p><span>Projects</span> quantity with the plan free your able to uplaod 5 projects</p>
                        </div>
                    </div>
                    <button class="boton-bg third-bg">
                        SUBSCRIBE
                    </button>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

export default {

    components: {

        AuthenticatedLayout,
        Head,

    },

    data() {

        return {

        };

    },

}

</script>
