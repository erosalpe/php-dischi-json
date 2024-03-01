const { createApp } = Vue

createApp({
  data() {
    return {
      apiUrl: 'server.php',
      musicList: [],
    }
  },
  mounted(){
    this.readList()
  },
  methods: {
    readList(){
        axios.get( this.apiUrl )
            .then( (response) => {
                this.musicList = response.data
            })
    },
  }
}).mount('#app')