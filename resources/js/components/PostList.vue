<template>
  <div>
    <h2>投稿一覧</h2>
    <ul>
      <li v-for="post in posts" :key="post.id">
        <p>投稿者ID: {{ post.user_id }}</p>
        <p>タイトル: {{ post.title }}</p>
        <p>本文: {{ post.body }}</p>
      </li>
    </ul>
  </div>
</template>

<script>
import axios from '../axios';

export default {
  data() {
    return {
      posts: []
    };
  },
  async created() {
    await this.fetchPosts();
  },
  methods: {
    async fetchPosts() {
      try{
        const res = await axios.get('/posts', { withCredentials : true });
        this.posts = res.data;
      } catch(error) {
        console.error(error);
      }
    }
  }
};
</script>
