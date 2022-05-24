<template>
  <main>
    <section v-if="!loading">
      <div class="container">
        <div class="row row-cols-5">
          <div class="col" v-for="(album, index) in filterAlbums" :key="index">
            <div
              class="album-card d-flex flex-column text-center align-items-center"
            >
              <img :src="album.poster" alt="" class="img-fluid" />
              <div class="title text-white text-uppercase">
                {{ album.title }}
              </div>
              <div class="author-info">
                <div>{{ album.author }}</div>
                <div>{{ album.year }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div
      class="loader d-flex min-vh-100 align-items-center justify-content-center fs-4 text-white"
      v-else
    >
      Loading...
    </div>
  </main>
</template>

<script>
import axios from "axios";
import state from "@/state";
export default {
  name: "SiteMain",
  data() {
    return {
      link: "http://localhost:8088/PHP/Projects/php-ajax-dischi/milestone-2/src/php/database.php",
      albumsList: null,
      loading: true,
    };
  },
  methods: {
    callApi() {
      axios
        .get(this.link)
        .then((response) => {
          //console.log(response);
          this.albumsList = response.data.response;
          this.loading = false;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  mounted() {
    this.callApi();
  },
  computed: {
    filterAlbums() {
      return this.albumsList.filter((album) => {
        return album.genre
          .toLowerCase()
          .includes(state.selectGenre.toLowerCase());
      });
    },
  },
};
</script>

<style lang="scss" scoped>
@import "@/assets/scss/_variables.scss";
section {
  padding: 2rem 0;
  .album-card {
    padding: 1rem;
    background-color: $footerCardsColor;
    margin: 0.5rem;
    min-height: 350px;
    .title {
      font-size: 0.9rem;
      padding: 1rem 0;
    }
    .author-info {
      color: $artistTextColor;
    }
  }
}
</style>
