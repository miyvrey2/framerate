<template>
    <AppLayout :title="post.title">
        <Container>
            <h1 class="text-2xl font-bold">{{ post.title }}</h1>
            <span class="text-small text-gray-600 mt-1"> {{ formattedData }} ago by {{ post.user.name }}</span>

            <article class="mt-6">
                <pre class="whitespace-pre-wrap font-sans">{{ post.body }}</pre>
            </article>

            <div>
                <h2 class="text-xl font-semibold mt-4">Comments</h2>

                <form v-if="$page.props.auth.user" @submit.prevent="addComment" class="mt-4">
                    <div>
                        <InputLabel for="body" class="sr-only">Comment</InputLabel>
                        <TextArea rows="4" id="body" v-model="commentForm.body" placeholder="Speak your mind Spock"/>
                        <InputError :message="commentForm.errors.body" class="mt-1"/>
                    </div>

                    <PrimaryButton type="submit" class="mt-3" :disabled="commentForm.processing">Add comment</PrimaryButton>
                </form>

                <ul class="divide-y mt-4">
                    <li v-for="comment in comments.data" :key="comment.id" class="px-2 py-4">
                        <Comment :comment="comment"/>
                    </li>
                </ul>

                <Pagination :meta="comments.meta" :only="['comments']"/>
            </div>
        </Container>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Container from '@/Components/Container.vue';
import Pagination from '@/Components/Pagination.vue';
import {computed} from "vue";
import {relativeDate} from "@/Utilities/date.js";
import Comment from "@/Components/Comment.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {useForm} from "@inertiajs/vue3";
import TextArea from "@/Components/TextArea.vue";
import InputError from "@/Components/InputError.vue";

const props = defineProps(['post', 'comments']);
const formattedData = computed(() => relativeDate(props.post.created_at));

const commentForm = useForm({
    body: '',
})

const addComment = ()  => commentForm.post(route('posts.comments.store', props.post.id), {
    preserveScroll: true,
    onSuccess: () => commentForm.reset(),
});
</script>
