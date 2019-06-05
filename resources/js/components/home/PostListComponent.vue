<template>
<div class="col-md-9">
  <h2>Publicaciones</h2>
  <post-component v-for="post in posts" :post="post" :key="post.id">
  </post-component>
</div>
</template>

<script>
import PostItemComponent from './PostItemComponent'

export default {
  components: {PostItemComponent},
  props: {
    posts: {
        type: Array,
        required: true
    },
  },
  data() {
      return {
        allPosts:[]
      }
  },
};
</script>
