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
    $id = $_POST['id'];
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
                    <form action="user_edit.php" method="POST">
                        <input type="text" value="<?php echo $user['name']; ?>" name="name" hidden>
                        <input type="text" value="<?php echo $user['id']; ?>" name="id" hidden>
                        <input type="text" value="<?php echo $user['phone']; ?>" name="phone" hidden>
                        <input type="text" value="<?php echo $user['mail']; ?>" name="mail" hidden>
                        <input type="text" value="<?php echo $user['password']; ?>" name="password" hidden>
                        <button name="btnEdit" type="submit" class="btn btn-outline-info btn-sm mr-2">Edit</button>
                    </form>
                    <form action="" method="POST">
                        <input type="text" value="<?php echo $user['id']; ?>" name="id" hidden>
                        <button name="btnDel" type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script src="js/users.js"></script>
<?php include 'php/footer.php'; ?>