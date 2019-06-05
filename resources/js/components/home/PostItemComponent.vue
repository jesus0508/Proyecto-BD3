<template>
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/storage/mikasa.jpg" class="card-img" alt="64">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 v-text="post.title" class="card-title"></h5>
        <p class="card-text">
          <small v-text="post.created_at" class="text-muted"></small>
        </p>
        <p v-text="post.content" class="card-text"></p>
      </div>
    </div>
  </div>
</div>
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


