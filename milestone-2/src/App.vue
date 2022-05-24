<template>
  <div id="app">
    <SiteHeader />
    <SiteMain />
  </div>
</template>

<script>
import SiteHeader from "@/components/SiteHeaderComponent.vue";
import SiteMain from "@/components/SiteMainComponent.vue";

export default {
  name: "App",
  components: {
    SiteHeader,
    SiteMain,
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/style.scss";
</style>
