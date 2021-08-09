<template>
  <div class="h-screen w-screen bg-gray-100">
    <div class="w-11/12 mx-auto pt-2">
      <h1 class="text-4xl ml-2 my-2 font-semibold text-black border-b-4">Inspection data</h1>
      <div class="grid grid-cols-3 md:grid-cols-5 lg:grid-cols-10 equal-grid-height">
        <div v-for="turbine in this.inspectionData.data" class="flex justify-center items-center btn btn--animate"
             :class="{ 'btn--danger': isNaN(turbine) }"
        >
          <span class="text-center text-lg font-medium">{{ turbine }}</span>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
@import "assets/css/main.css";
</style>

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
