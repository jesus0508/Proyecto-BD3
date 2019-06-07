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
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane fade active show" role="tabpanel" aria-labelledby="posts-tab">
            <div class="form-group">
              <label class="sr-only" for="message">Post</label>
              <textarea class="form-control" rows="3" placeholder="En que estas pensando?"></textarea>
            </div>
          </div>
        </div>
        <div class="btn-toolbar justify-content-between">
          <div class="btn-group">
            <button type="submit" class="btn btn-primary">Publicar</button>
          </div>
        </div>
      </div>
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
      post: ""
    };
  },
  methods: {
    createPost() {
      let url = "/api/posts";
      axios.post(url, {
        title: "",
        content: ""
      });
    }
  }
};
</script>
