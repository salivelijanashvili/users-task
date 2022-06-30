<?php if ($_SERVER['REQUEST_URI'] !== '/dashboard'):  ?>
<form name="user_form" action="/dashboard" method="post">
    <label for="name">First name:</label>
    <input type="text" placeholder="name" id="name" name="name"><br><br>
    <label for="last_name">Last name:</label>
    <input type="text"  placeholder="last_name"  id="last_name" name="last_name"><br><br>
    <input class="btn btn-success" type="submit" name="Submit" value="Submit"">
</form>
<?php else: ?>
<!--    <meta http-equiv="refresh" content="0">-->
    <h1>Added users</h1>
    <?php if (!empty($_POST['name']) && !empty($_POST['last_name'])): ?>
    <?php echo $_POST['name'] ?>
    <?php echo $_POST['last_name'] ?>
    <?php endif; ?>
<?php endif; ?>
<?php


use App\DatabaseControllers\InsertExample;

if (!empty($_POST['name']) && !empty($_POST['last_name'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
}

$db = new PDO('mysql:host=db;dbname=users_list', 'root', 'changeme');
$table_name = 'users_table';

$data_to_insert = new InsertExample($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data_to_insert->insertDataExample($table_name, $name, $last_name);
}

?>

<script>
    $("#typeSwitcher").on("change", function() {
        $(".selectable").hide();
        const a = $("#" + $(this).val()).show();
        console.log(a);
    })

    function validate() {
        if (document.user_form.name.value === '') {
            alert('Please provide a name');
            document.user_form.name.focus();
            return false;
        }
        if (document.user_form.price.value === '') {
            alert('Please provide a last name');
            document.user_form.last_name.focus();
            return false;
        }
        return true;
    }
</script>
