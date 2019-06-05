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
  <div class="card-footer">
    <ul class="list-group list-group-horizontal justify-content-end">
      <a href="" class="list-group-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
        </svg>
        <small>45</small>
      </a> 
      <a href="" class="list-group-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
        </svg>
        <small>10</small>
      </a>
    </ul>
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


