<template>
  <div>
    {{ this.inspectionData.data }}
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "root",
  async created() {
    const backendApi = "https://127.0.0.1:8001/data"; // This needs to be the where the backend server is running.
    await axios.get(backendApi)
        .then(response => this.inspectionData = response.data)
        .catch(error => console.log(error))
    ;
  },

  data() {
    return {
      // inspectionData: axios.get(backendApi).then( response => this.myVar = response.data)
      inspectionData: {
        data: null
      },
    }
  },

}
</script>
