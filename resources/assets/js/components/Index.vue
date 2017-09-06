<template>
<div class="container">
  <div class="content">
      <p>{{ msg }}</p>
      <p><input v-model="msg" type="text"></p>
      <button @click="reserve" class="btn btn-default">点击</button>
  </div>
  </div>
</template>

<script>
export default {
  data(){
      return{
          msg:'123'
      }
  },
  methods:{
        reserve1:function(){
            alert(this.msg)
        },
        reserve(){
            this.msg = this.msg.split('').reverse().join('')         
        }
  }

}
</script>

