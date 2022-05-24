<template>
  <select
    name="selectGenre"
    id="selectGenre"
    @submit.prevent="$emit(select)"
    @input="$emit('input', $event.target.value)"
    @change="$emit('select')"
    :value="selectGenre"
  >
    <option selected value="">Select genre</option>
    <option value="rock">Rock</option>
    <option value="jazz">Jazz</option>
    <option value="metal">Metal</option>
    <option value="pop">Pop</option>
  </select>
</template>

<script>
export default {
  name: "GenreSelect",
  props: {
    selectGenre: String
  },
};
</script>

<style></style>
