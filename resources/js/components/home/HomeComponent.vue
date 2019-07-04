<template>
<div class="container">
  <div class="row">
    <post-list-component :posts="posts"></post-list-component>
    <most-popular-post-list-component :posts="posts"></most-popular-post-list-component>
  </div>
</div>
</template>

<script>
import PostListComponent from './PostListComponent'
import MostPopularPostListComponent from './MostPopularPostListComponent'

export default {
    components: {PostListComponent,MostPopularPostListComponent},
    data() {
        return {
            posts:[]
        }
    },
  created(){
    this.getAllPosts()
  },
  methods:{
    getAllPosts(){
      let url='/api/posts'
      axios.get(url)
            .then(res=>{
              this.posts=res.data
              console.log(res)
            })
            .catch(err=> console.log(err))
    }
  }
}
</script>
