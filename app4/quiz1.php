<style>

.gradient {

  /* can be treated like a fallback */
  background-color: red;

  /* will be "on top", if browser supports it */
  background-image: linear-gradient(red, orange);

  /* these will reset other properties, like background-position, but it does know what you mean */
  background: red;
  background: linear-gradient(red, orange);

}
</style>