<html>
<?php
include('includes/head.php');
?>
<body>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.634335073532!2d106.67983811422614!3d10.76263909233087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1c06f4e1dd%3A0x43900f1d4539a3d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6pu!5e0!3m2!1svi!2s!4v1492498887753" width="100%" height="400" frameborder="0"  style="border:0" allowfullscreen></iframe>

<div class="row">
  <div class="col-md-6">
      <img src="images/1559001.jpg" alt="students id: 1559001" class="img-responsive img-rounded">
  </div>

  <div class="col-md-6">
    <form class="" action="" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" value="" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" value="" class="form-control">
      </div>
      <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit!</button>
    </form>

    <table class="table-striped">
      <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php
        if (isset($_POST['submit'])) {
            $name=$_POST["name"];
            $email=$_POST["email"];
            postT($name, $email);
        }
        // print table
    
        getContact();
      ?>



    </table>

  </div>


</div>

<?php include('includes/footer.php'); ?>
</body>
</html>
