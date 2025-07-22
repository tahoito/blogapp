<template>
    <div class="mb-6">
    <h2>新規投稿</h2>
    <form @submit.prevent="submitPost">
        <div>
            <input v-model="title" placeholder="タイトル" class="border p-2 w-full" />
        </div>
        <div class="mt-2">
            <textarea v-model="body" placeholder="本文" class="border p-2 w-full" rows="4"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">投稿</button>
    </form>
    </div>
</template>


<script>
import axios from '../axios';

export default {
  data() {
    return {
      title: '',
      body: '',
    };
  },
  methods: {
    async submitPost() {
      try {
        await axios.post('http://127.0.0.1:8000/api/posts', {
        title: this.title,
        body: this.body,
      }, { withCredentials: true });
        this.title = '';
        this.body = '';
        this.$emit('post-created'); // 一覧再取得用
      } catch (error) {
        console.error(error);
      }
    }
  }
}
</script>
