  <div class="Search">
    <input type="text" id="search_id" placeholder="nhập từ khóa ..." class=" form-control w-100" />
    <div id="search_product"></div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#search_id").keyup(function() {
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data: 'keyword=' + $(this).val(),
          success: function(data) {
            $("#search_product").html(data);
          }
        });
      });
    });
  </script>