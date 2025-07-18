<template>
  <div>
    <h2>投稿一覧</h2>
    <ul>
      <li v-for="post in posts" :key="post.id">
        <p><strong>投稿者ID:</strong>{{ post.user_id }}</p>
        <p><strong>タイトル:</strong>{{ post.title }}</p>
        <p>{{ post.body }}</p>
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
  mounted() {
    this.fetchPosts(); // 初期表示時に取得
  },
  methods: {
    async fetchPosts() {
      try {
        const res = await axios.get('/posts'); // ルートに合わせて
        this.posts = res.data;
      } catch (e) {
        console.error('投稿一覧の取得に失敗', e);
      }
    }
  }
}
</script>
