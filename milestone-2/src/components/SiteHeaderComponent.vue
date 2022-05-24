<template>
  <header class="d-flex justify-content-between">
    <img src="@/assets/img/Spotify_logo.png" alt="" class="img-fluid" />
    <GenreSelect @select="search" v-model="selectGenre"/>
  </header>
</template>

<script>
import GenreSelect from '@/components/GenreSelectComponent.vue'
import state from '@/state.js'
export default {
  name: "SiteHeader",
  components: {
    GenreSelect
  },
  data() {
    return {
      selectGenre: ''
    }
  },
  methods: {
    search() {
      state.selectGenre = this.selectGenre
      //console.log(state.selectGenre);
    }
  }
};
</script>

<style lang="scss" scoped>
@import "@/assets/scss/_variables.scss";
header {
  background-color: $footerCardsColor;
  padding: 1rem;
  select {
    padding: 0.5rem;
  }
  img {
    width: 50px;
  }
}
</style>
