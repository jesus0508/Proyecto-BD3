<template>
  <div class="mb-1">
    <div class="card gedf-card">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active show" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">
              Crea una publacion
            </a>
          </li>
        </ul>
      </div>
      <form class="card-body" method="post" @submit.prevent="createPost">
        <div class="tab-content">
          <div class="tab-pane fade active show" role="tabpanel" aria-labelledby="posts-tab">
            <div class="form-group">
              <label class="sr-only" for="message">Post</label>
              <textarea name="content" v-model="contenido" class="form-control" rows="3" placeholder="En que estas pensando?"></textarea>
            </div>
          </div>
        </div>
        <div class="btn-toolbar justify-content-between">
          <div class="btn-group">
            <button type="submit" class="btn btn-primary">Publicar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import VueEditor from "vue2-editor";
export default {
  components: {
    VueEditor
  },
  data() {
    return {
      contenido:"",
      post: ""
    };
  },
  methods: {
    createPost() {
      let url = "/api/posts";
      let content=this.contenido;
      axios.post(url,content).then((resp)=>{
        console.log(resp);
      }).catch((error)=>{
        console.log(error)});
    }
  }
};
</script>
