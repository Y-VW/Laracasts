<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?> 
  
  <h1>All the users on here:</h1>
    <ul> 
    <?php foreach ($users as $user): ?>
            <li><?= $user->name ;?></li>
        <?php endforeach; ?>
    </ul>
   <h1>Submit your name</h1>

   <form method='POST' action="/users">
        <input name="name"></input>
        <button type="submit">Submit</button>
   </form>

<?php require("partials/footer.php"); ?>
