<script>
$(function()
{
  $.post("test_post.php",
  {
    name: "John Doe",
    age: "42"
  },
  function(data, textStatus)
  {
    alert("Response from server: " + data);
  });
});
</script>