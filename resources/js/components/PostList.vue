<template>
  <div>
    <h2 class="text-lg font-bold mb-2">投稿一覧</h2>
    <div v-for="post in posts" :key="post.id" class="border p-2 mb-2">
      <h3 class="font-bold">{{ post.title }}</h3>
      <p>{{ post.body }}</p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      posts: [],
    };
  },
  methods: {
    async fetchPosts() {
      const response = await axios.get('/posts');
      this.posts = response.data;
    }
  },
  created() {
    this.fetchPosts();
  }
}
</script>
