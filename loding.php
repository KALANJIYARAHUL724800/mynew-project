<script>
document.querySelector("form").addEventListener("submit", function (e) {
  const name = document.querySelector('input[name="name"]').value.trim();
  const age = document.querySelector('input[name="age"]').value.trim();
  const city = document.querySelector('input[name="city"]').value.trim();

  if (!name || !age || !city) {
    e.preventDefault(); // Prevent PHP from running
    alert("All fields are required!");
  }
});
</script>
