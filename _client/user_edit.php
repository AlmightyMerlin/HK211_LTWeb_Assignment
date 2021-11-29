<?php
require_once('php/init.php');

$id = $name = $year = '';
$check = true;

global $currentUser;

if (!isset($_POST['btn-edit'])) {
    $mail = $currentUser['mail'];
    $id = $currentUser['id'];
    $name = $currentUser['name'];
    $phone = $currentUser['phone'];
    $password = $currentUser['password'];
} else {
    $mail_new = $_POST['mail-edit'];
    $id_new = $_POST['id-edit'];
    $name_new = $_POST['name-edit'];
    $phone_new = $_POST['phone-edit'];
    $password_new = $_POST['password-edit'];
    $pattern1 = "/^[0-9]+$/i";
    // $mail_pattern = "/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i";
    // if (preg_match($pattern1, $phone_new) && strlen($name_new) <= 100 && preg_match($mail_pattern, $mail_new)) {
    if (preg_match($pattern1, $phone_new) && strlen($name_new) <= 100) {
        editUser($id_new, $mail_new, $password_new, $name_new, $phone_new);
        header('Location: index.php');
    } else $check = false;
}
?>

<?php include 'php/header.php'; ?>

<div class="container">
    <?php if (!$check) : ?>
        <div class="alert alert-danger">
            <strong>Thất bại!</strong> Vui lòng kiểm tra dữ liệu đã nhập
        </div>
    <?php endif; ?>
    <form class="formEdit" action="" method="POST">
        <fieldset class="border p-3">
            <legend class="w-auto"> Account Management</legend>
            <div class="form-group row">
                <label class="col-3 text-right col-form-label" for="id-edit">ID:</label>
                <input type="number" class="form-control col-7" id="id-edit" name="id-edit" value="<?php echo $id; ?>" readonly>
            </div>
            <div class="form-group row">
                <label class="col-3 text-right col-form-label" for="name-edit">Name:</label>
                <input type="text" class="form-control col-7" id="name-edit" name="name-edit" value="<?php echo $name; ?>">
            </div>
            <div class="form-group row">
                <label class="col-3 text-right col-form-label" for="name-edit">Mail:</label>
                <input type="text" class="form-control col-7" id="mail-edit" name="mail-edit" value="<?php echo $mail; ?>">
            </div>
            <div class="form-group row">
                <label class="col-3 text-right col-form-label" for="name-edit">Password:</label>
                <input type="password" class="form-control col-7" id="password-edit" name="password-edit" value="<?php echo $password; ?>">
            </div>
            <div class="form-group row">
                <label class="col-3 text-right col-form-label" for="year-edit">Phone:</label>
                <input type="text" class="form-control col-7" id="phone-edit" name="phone-edit" value="<?php echo $phone; ?>">
            </div>
            <div class="form-group row">
                <div class="offset-3">
                    <button name="btn-edit" class="btn btn-secondary" style="submit">Edit</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>

<?php include 'php/footer.php'; ?>