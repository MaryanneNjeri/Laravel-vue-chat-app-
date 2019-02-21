<template>
    <div class="message-area"> 
        <!-- we pass the messages to the message component as it is responsible for displaying messages-->
        <message-component :user-messages="messages"></message-component> 
    </div>
</template>

<script> 
 import Event from '../event.js';
    export default { 
        data(){
            return {
                messages: []
            }
        }, 
        // in mounted is loaded when the page is loaded  

        // we fetch the messages and store them in the array 
        mounted() {
            axios.get('/messages').then((response)=>{
                console.log(reponse.data)
                this.messages = response.data
            }) 
            // we listen to the event
           Event.$on('added_message',(message)=>{
               this.messages.unshift(message);
           });
        } 
    }
</script>

<style>
    .message-area {
        height: 400px;
        max-height: 400px;
        overflow-y: scroll;
        padding: 15px;
        border-bottom: 1px solid #eee;
    }
</style>

