
<!--Used to display the messages-->
<template>
    <!-- the self class is a conditional class where we diffrentiate messages from current signed in users to other users messages-->
    <div class="container">
    <div class="message self" v-for ="message in user-messages" :key="message.id">
        <strong class="user">{{message.user.name}}</strong>
        <p class="body">{{message.body}}</p>
    </div> 
    </div>
</template>

<script>
    export default { 
        props:['user-messages'],
        mounted() {
            console.log(this.user-messages)
        }
    }
</script>

<style>
    .user {
        font-weight: 800;
    }
    
    .body {
        margin-bottom: 0;
        white-space: pre-wrap;
    }
    
    .message {
        border-bottom: 1px solid #000000
    }
    
    .self {
        background-color: #f0f0f0;
        padding: 10px;
    }
</style>
