<template>
  <div class="p-8 max-w-3xl mx-auto">
    <PostForm @post-created="refreshPosts" />
    <PostList ref="list" />
  </div>
</template>

<script>
import PostForm from './components/PostForm.vue';
import PostList from './components/PostList.vue';

export default {
  components: { PostForm, PostList },
  methods: {
    refreshPosts() {
      this.$refs.list.fetchPosts();
    }
  }
}
</script>
