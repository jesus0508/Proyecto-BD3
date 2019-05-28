<template>
<div>
  <div v-for="post in posts" :key="post.id" class="row">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="/storage/mikasa.jpg" class="card-img" alt="64">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 v-text="post.title" class="card-title">Hola papi</h5>
            <p v-text="post.content" class="card-text"></p>
            <p class="card-text">
              <small v-text="post.created_at" class="text-muted"></small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</template>

<script>
export default {
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
      axios.get('/api/posts')
            .then(res=>{
              this.posts=res.data.data
              console.log(res)
            })
            .catch(err=> console.log(err))
    }
  }
};
</script>
