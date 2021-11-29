<?php
require_once('php/init.php');

$id = $name = $year = '';
$check = true;
$listBrands = getBrands();

if (!isset($_POST['btn-edit'])) {
    $description = $_POST['description'];
    $id = $_POST['proId'];
    $name = $_POST['name'];
    $brandId = $_POST['brandId'];
} else {
    $description_new = $_POST['description-edit'];
    $id_new = $_POST['id-edit'];
    $name_new = $_POST['name-edit'];
    $brandId_new = $_POST['brandId-edit'];

    $pattern1 = "/^[0-9]+$/i";
    // $mail_pattern = "/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i";
    // if (preg_match($pattern1, $phone_new) && strlen($name_new) <= 100 && preg_match($mail_pattern, $mail_new)) {
    // if (preg_match($pattern1, $phone_new) && strlen($name_new) <= 100) {
    if (true) {
        editProduct($description_new, $name_new, $brandId_new, $id_new);
        header('Location: products.php');
    } else $check = false;
}
?>

<?php include 'php/header.php'; ?>

<body>
    <div class="container">
        <!-- <div class="row"> -->
        <?php if (!$check) : ?>
            <div class="alert alert-danger">
                <strong>Failed!</strong> Please check your inputs!
            </div>
        <?php endif; ?>
        <form class="formEdit" action="" method="POST">
            <fieldset class="border p-3">
                <legend class="w-auto"> Product Management</legend>
                <div class="form-group row">
                    <label class="col-3 text-right col-form-label" for="id-edit">ID:</label>
                    <input type="number" class="form-control col-7" id="id-edit" name="id-edit" value="<?php echo $id; ?>" readonly>
                </div>
                <div class="form-group row">
                    <label class="col-3 text-right col-form-label" for="name-edit">Name:</label>
                    <input type="text" class="form-control col-7" id="name-edit" name="name-edit" value="<?php echo $name; ?>">
                </div>
                <div class="form-group row">
                    <label class="col-3 text-right col-form-label" for="description-edit">Description:</label>
                    <textarea class="form-control col-7" id="description-edit" name="description-edit" rows=7><?php echo $description; ?></textarea>
                </div>
                <div class="form-group row">
                    <label class="col-3 text-right col-form-label" for="brandId-edit">Brand:</label>
                    <select multiple class="form-control col-7" id="brandId-edit" name="brandId-edit">
                        <?php foreach ($listBrands as $brand) : ?>
                            <option <?php echo ($brand['BRAND_ID'] == $brandId) ? 'selected' : '' ?>><?php echo $brand['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="offset-3">
                        <button name="btn-edit" class="btn btn-secondary" style="submit">Edit</button>
                    </div>
                </div>
            </fieldset>
        </form>

        <!-- </div> -->
    </div>

    <script>

    </script>
</body>

<?php include 'php/footer.php'; ?>