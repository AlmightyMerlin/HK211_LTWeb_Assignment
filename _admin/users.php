<?php
require_once 'php/init.php';

global $currentUser;

if ($currentUser == null) {
    header('Location: login.php');
    exit();
} elseif ($currentUser['role'] == 0) {
    $listUsers = getUsers();
}


if (isset($_POST['btnDel'])) {
    $id = $_POST['car_id'];
    deleteUser($id);
    header("Refresh:0");
}
?>

<?php include 'php/header.php'; ?>

<h1 class="text-center">List Users</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Name</th>
            <th scope="col">DOB</th>
            <th scope="col">Phone</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listUsers as $user) : ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $user['mail']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo date('d/m/Y', strtotime($user['createdAt'])); ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo (($user['role'] == 0) ? 'admin' : 'staff'); ?></td>
                <td class="d-flex">
                    <form action="edit.php" method="POST">
                        <input type="text" value="<?php echo $car['name']; ?>" name="name" hidden>
                        <input type="text" value="<?php echo $car['phone']; ?>" name="phone" hidden>
                        <button name="btnEdit" type="submit" class="btn btn-outline-info btn-sm">Edit</button>
                    </form>
                    <form action="" method="POST">
                        <input type="text" value="<?php echo $car['id']; ?>" name="car_id" hidden>
                        <button name="btnDel" type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script src="js/users.js"></script>
<?php include 'php/footer.php'; ?>