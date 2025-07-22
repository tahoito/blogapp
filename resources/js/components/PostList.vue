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
import axios from 'axios';

export default {
  data() {
    return {
      posts: []
    };
  },
  mounted() {
    this.fetchPosts();  // ページ表示時に呼ぶ
  },
  methods: {
    fetchPosts() {
      axios.get('http://127.0.0.1:8000/api/posts')  // ←ここでAPIを叩く
        .then(response => {
          this.posts = response.data;
        })
        .catch(error => {
          console.error('投稿一覧の取得に失敗しました:', error);
        });
    }
  }
};
</script>
