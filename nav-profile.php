

<div class="bar">
     <!-- Single button -->
      <div class="btn-group">
        <button type="button" class="acc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php if (isset($_SESSION['email'])===true) {echo $_SESSION['email'];}?>
           <span class="caret"></span>
        </button>



        <a href="profile.php">Home</a>


        <ul class="dropdown-menu">

          <li><a href="message.php">Complaint</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="logout.php" onClick="javascript:return confirm ('Do you want to logout ?');">Logout</a></li>
        </ul>
      </div>
</div>
