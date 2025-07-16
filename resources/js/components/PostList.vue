<template>
  <div>
    <h2 class="text-lg font-bold mb-2">投稿一覧</h2>
    <ul>
      <li v-for="post in posts" :key="post.id">
        <h3>{{ post.title }}</h3>
        <p>{{ post.body }}</p>
        <small>投稿者ID: {{ post.user_id }}</small>
      </li>
    </ul>
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
