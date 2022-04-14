<template>
    <Head title="There is my page" />
    <Section class="grid grid-cols-2 text-right bg-gray-800 text-gray-300">
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
    </Section>
    <Section class="bg-gray-800 pt-16 h-screen">
        <div class="h-2/3 flex flex-wrap content-between pb-36">
            <p class="border-b-2 font-bold border-gray-400 pb-3 text-2xl text-gray-300 uppercase">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor ullamcorper leo vitae volutpat.
            </p>

            <div class="flex items-end border-b-2 border-gray-500 pb-2">
                <p class="font-bold text-gray-500 text-xl mr-5">
                    Wanna know more ?
                </p>
                <jet-button class="bg-green-600 rounded font-bold text-white text-sm hover:bg-green-800">
                    Let's chat
                </jet-button>
            </div>
        </div>
        <div class="animate-pulse mt-3 text-gray-300 text-center text-9xl">
            <a href="#skills">&#8675;</a>
        </div>
    </Section>

    <Section class="bg-gray-200 text-gray-800 h-screen" id="skills">
        <h2 class="text-6xl font-bold pt-3">Skills</h2>

        <div class="grid grid-cols-2">
            <div v-for="skill in skills">
                <Skill :background="skill.color" :key="skill.id">
                    {{ skill.name }}
                </Skill>
            </div>
        </div>

        <div class="flex justify-center mt-10">
            <jet-button class="bg-indigo-800 rounded font-bold text-gray-200 text-sm hover:bg-indigo-700">
                Get in touch
            </jet-button>
        </div>
    </Section>

    <Section class="bg-gray-600 text-gray-200 h-screen">
        <h2 class="text-6xl font-bold pt-3">Projects</h2>

        <div v-for="(project, index) in projects">
            <Project :title="project.title" :description="project.description" :color="project.color" :key="project.id">
                <component :is="componentName(index)"></component>
            </Project>
        </div>

        <div class="flex justify-center mt-10">
            <jet-button class="bg-purple-100 rounded font-bold text-gray-800 text-sm hover:bg-purple-200">
                Know more
            </jet-button>
        </div>
    </Section>

    <Section class="flex justify-between bg-gray-800 text-gray-300 text-xl">
        <button class="bg-green-500 hover:bg-green-700 hover:rounded-lg rounded-full text-sm px-2 py-2 text-white">Save changes</button>
        <p>&copy;Viktor</p>
        <div class="flex justify-evenly items-center">
            <Link href="#" class="border-b pb-1 px-2 hover:text-gray-50">GitHub</Link>
            <Link href="#" class="border-b pb-1 px-2 hover:text-gray-50">Twitter</Link>
            <Link href="#" class="border-b pb-1 px-2 hover:text-gray-50">StackOverFlow</Link>
        </div>
    </Section>
</template>

<script>
    import { defineComponent, defineAsyncComponent } from "vue";
    import { Head, Link } from '@inertiajs/inertia-vue3'
    import JetApplicationMark from  '@/Jetstream/ApplicationMark'
    import JetButton from  '@/Jetstream/Button'
    import Section from '@/components/Section';
    import Skill from '@/components/Skill';
    import Project from '@/components/Project';

    export default defineComponent({
        components: {
            Head,
            Link,
            JetApplicationMark,
            Section,
            JetButton,
            Skill,
            Project,
        },
        props: {
          canLogin: Boolean,
          canRegister: Boolean,
          skills: Object,
          projects: Object,
        },
        methods: {
            componentName(idx) {
                return defineAsyncComponent(() =>
                    import ('@heroicons/vue/solid/' + this.projects[idx].icon_name + 'Icon.js')
                )
            }
        }
    })
</script>
