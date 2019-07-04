<template>
<a href="#" class="list-group-item list-group-item-action mb-2">
  <div class="d-md-block d-sm-flex justify-content-sm-between">
    <h5 v-text="post.autor" class="mb-1"></h5>
    <small v-text="post.created_at"></small>
  </div>
  <small v-text="post.contenido"></small>
</a>
</template>

<script>
export default {
  props: {
    post: {
        type: Object,
        required: true
    },
  }
}
</script>

