<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Projects
            </h2>
        </template>
        <div class="py12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div v-if="projects.length">
                    <table class="w-full">
                        <thead class="border-b-2 border-gray-300 text-indigo-600">
                        <tr>
                            <th class="px-6 py-3 text-left">
                                Title
                            </th>
                            <th class="px-6 py-3 text-left">
                                Description
                            </th>
                            <th class="px-6 py-3 text-left">
                                Color
                            </th>
                            <th class="px-6 py-3 text-left">
                                Icon
                            </th>
                            <th class="px-6 py-3 text-left">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody v-for="project in projects">
                        <tr class="text-sm text-indigo-900 border-b border-gray-400">
                            <td class="px-6 py-4">
                                {{ project.title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ project.description }}
                            </td>
                            <td class="px-6 py-4" :class="project.color">
                                <p>
                                    <span class="rounded" ></span>
                                    {{ project.color }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ project.icon }}
                            </td>
                            <td class="px-6 py-4">
                                <jet-button class="border border-indigo-500 text-indigo-500 bg-indigo-50 hover:bg-indigo100 mr-2">
                                    Edit
                                </jet-button>
                                <jet-button class="border border-red-500 text-red-500 bg-red-50 hover:bg-red-100 ml-2">
                                    Delete
                                </jet-button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div v-else class="bg-red-100 border border-red-400 p-3 rounded-lg">
                    No projects have been added so far
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import JetButton from '@/Jetstream/Button'


export default {
    components: {
        AppLayout,
        JetButton
    },
    props: {
        projects: Object
    }

}
</script>

<style scoped>

</style>
