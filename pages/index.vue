<template>
  <v-row justify="center" align="center">
    <v-col cols="12" sm="8" md="6">
      <button @click="login=true;register=false">
login
      </button>
      <button @click="register=true;login=false">
register
      </button>
      <div v-if="login">
        <login />
      </div>
      <div v-if="register">
        <register />
      </div>

    </v-col>
  </v-row>
</template>

<script>
import Login from "./login";
import Register from "./register";
export default {
  data() {
    return {
      login:false,
      register:false
    }
  },
  name: 'IndexPage',
  components: {Register, Login}
}
</script>
