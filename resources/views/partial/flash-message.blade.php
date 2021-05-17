<!-- Flash-message -->
<!-- Message alert if success -->
@if ($message = Session::get('success'))
<script>
  $(document).ready(function() {
    alert("Mail Send sucessfully");
  });
</script>
@endif
<!-- Message alert if unsuccess -->
@if ($message = Session::get('error'))
<script>
  $(document).ready(function() {
    alert("Mail Send Unsuccessfully!");
  });
</script>
@endif