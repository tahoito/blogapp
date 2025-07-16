import axios from 'axios';

axios.defaults.baseURL = 'http://127.0.0.1:8000'; // 明示的にAPIのベースURLを設定
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
  console.error('CSRF token not found');
}

export default axios;
