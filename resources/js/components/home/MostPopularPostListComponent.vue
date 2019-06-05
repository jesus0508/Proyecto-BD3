<template>
  <div class="col-md-3">
    <h4>Los mas Populares</h4>
    <most-popular-post-item-component v-for="post in posts" :post="post" :key="post.id">
    </most-popular-post-item-component>
  </div>
</template>

<script>
import MostPopularPostItemComponent from "./MostPopularPostItemComponent"
export default {
  components: {MostPopularPostItemComponent},
  props: {
    posts: {
        type: Array,
        required: true
    },
  },
  data() {
    return {
      mostPopularPosts:[]
    }
  },
  created(){
    this.getMostPopular()
  },
  methods:{
    getMostPopular(){
      //this.mostPopularPosts=this.posts;
    }
  },
};
</script>
