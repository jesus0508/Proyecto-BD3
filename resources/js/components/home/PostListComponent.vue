<template>
<div class="col-md-9">
  <create-post-component></create-post-component>
  <h4 class="mt-4">Publicaciones</h4>
  <post-component v-for="post in posts" :post="post" :key="post.id">
  </post-component>
</div>
</template>

<script>
import PostItemComponent from './PostItemComponent'
import CreatePostComponent from './CreatePostComponent'

export default {
  components: {PostItemComponent,CreatePostComponent},
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
