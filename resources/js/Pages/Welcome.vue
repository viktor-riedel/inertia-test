<template>
    <Head title="There is my page" />
    <section class="grid grid-cols-2 text-right bg-gray-800 text-gray-300">
        <div>
            <jet-application-mark class="h-12 w-auto"></jet-application-mark>
        </div>
        <div v-if="canLogin">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm underline"></Link>
            <template v-else>
                <Link :href="route('login')" class="text-base underline hover:text-white">Login</Link>
                <Link :href="route('register')" class="text-base underline place-self-end ml-4 hover:text-white" v-if="canRegister">Register</Link>
            </template>
        </div>
    </section>
    <div>
        <section class="bg-gray-800 pt-16 h-screen px-72">
            <div class="h-2/3 flex flex-wrap content-between pb-36">
                <p class="border-b-2 font-bold border-gray-400 pb-3 text-2xl text-gray-300 uppercase">Hey</p>
            </div>
        </section>

        <section class="bg-gray-200 text-gray-800 px-72 py-10 h-screen">
            <h2 class="text-6xl font-bold pt-3">Skills</h2>
        </section>

        <section class="bg-gray-600 text-gray-200 px-72 py-10 h-screen">
            <h2 class="text-6xl font-bold pt-3">Projects</h2>
        </section>

        <section class="flex justify-between py-10 px-72 bg-gray-800 text-gray-300 text-xl">
            <button class="bg-green-500 hover:bg-green-700 hover:rounded-lg rounded-full text-sm px-2 py-2 text-white">Save changes</button>
            <p>&copy;Viktor</p>
            <div class="flex justify-evenly items-center">
                GitHub
                Twitter
            </div>
        </section>
    </div>
</template>

<script>
    import { defineComponent } from "vue";
    import { Head, Link } from '@inertiajs/inertia-vue3'
    import JetApplicationMark from  '@/Jetstream/ApplicationMark'

    export default defineComponent({
        components: {
            Head,
            Link,
            JetApplicationMark
        },
        props: {
          canLogin: Boolean,
          canRegister: Boolean,
        }
    })
</script>
