<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 <!-- Alterify JS -->
 <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
  <?php
  if (isset($_SESSION['message'])) {
  ?>
    alertify.set('notifier', 'position', 'top-right');
    alertify.success('<?= $_SESSION['message'] ?>');
  <?php unset($_SESSION['message']);
  } ?>
</script>
</body>

</html>