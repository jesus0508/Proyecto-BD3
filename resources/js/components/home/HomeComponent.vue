<template>
<div class="container">
  <div class="row">
  <create-post-component></create-post-component>
  <post-list-component :posts="posts"></post-list-component>
  <most-popular-post-list-component :posts="posts"></most-popular-post-list-component>
  </div>
</div>
</template>

<script>
import PostListComponent from './PostListComponent'
import MostPopularPostListComponent from './MostPopularPostListComponent'
import CreatePostComponent from './CreatePostComponent'
export default {
    components: {PostListComponent,MostPopularPostListComponent,CreatePostComponent},
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
              this.posts=res.data.data
              console.log(res)
            })
            .catch(err=> console.log(err))
    }
  }
}
</script>
