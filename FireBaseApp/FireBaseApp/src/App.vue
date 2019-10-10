<template>
  <div id="app">
    <img src="./assets/logo.png" alt="">
    <div id="add">
      <input type="text" id="message" v-model="message">
      <button class="btn green" @click="submitMessage()"></button>
    </div>

    <ul>
      <li v-for="message of this.messages"
          v-bind:key="message['.key']">
        <p>{{message.message}}</p>
        <button class="btn" @click="removeMessage(message['.key'])"></i></button>
      </li>
    </ul>

  </div>

</template>

<script>
import {messagesRef} from "./firebase";

export default {
  name: 'app',
  firebase: function(){
      return{
          messages: messagesRef
      };
  },
  methods:{
      submitMessage(){
          messagesRef.push({message: this.message, edit: false})
          this.message = '';
      },
      removeMessage(key){
          messagesRef.child(key).remove()
      }
  },
  data() {
      return{
          message: "",
          messages: []
      }
  }
}
</script>

<style>
body{
  max-width: 100vw;
  margin: 0;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center;
  background-color: rgba(255, 204, 66, 0.29);
}
#app {
  background-color: white;
  width: 30%;
  margin-left: auto;
  margin-right: auto;
  padding: 20px;
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  border-radius: 5px;



  text-align: center;
  color: #454545;
}

ul{
  padding: 0;
}

li{
  height: 18px;
  list-style-type: none;
  display: flex;
  justify-content: center;
  align-items: center;
}

#add{
  height: 18px;
  list-style-type: none;
  display: flex;
  justify-content: center;
  align-items: center;
}

p{
  margin: 0;
}

img{
  height: auto;
  width: 50px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 15px;
}

.green{
  background-color: rgba(0, 128, 0, 0.48) !important;
}

.btn{
  height: 15px;
  width: 15px;
  padding: 0;
  margin: 5px;
  border: 0;
  border-radius: 100%;
  background-color: rgba(255, 0, 0, 0.6);
}

input{
  border-radius: 5px;
  border: 1px solid rgba(128, 128, 128, 0.27);
  padding: 5px;
}
</style>
