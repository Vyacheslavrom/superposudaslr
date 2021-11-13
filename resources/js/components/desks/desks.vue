<template>
  <div class="container">
    <h1>Доски</h1>
    <div class="row">
      <div class="col-lg-4 mt-3">
        <div class="card">
            <a href="#" class='card-body'>
            <h5 class="card-title">Card title</h5>
            </a>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      desks: [],
    };
  },
  mounted(){
      axios.get('/trello/api/v1/descs')
      .then(response=>{
          console.log(response)
      })
  }
};
</script>