<template lang="html">
  <div class="chat-message">
    <p>{{ messages }}</p>
    <small>{{ messages }}</small>
  </div>
</template>

<script>
export default {
    props: ['messages']
}
</script>

<style lang="css">
  .chat-message {
    padding: 1rem;
  }
  .chat-message > p {
    margin-bottom: .5rem;
  }
</style>
