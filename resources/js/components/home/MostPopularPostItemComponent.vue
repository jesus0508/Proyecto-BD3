<template>
<a href="#" class="list-group-item list-group-item-action">
  <div class="post">
    <h5 v-text="post.title" class="mb-1"></h5>
    <small v-text="post.created_at"></small>
  </div>
  <small>Donec id elit non mi porta.</small>
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

<style>
  .post{
    display: flex;
    justify-content: space-between;
  }
  @media (min-width: 768px) { 
    .post{
      display: block;
    }
  }
</style>