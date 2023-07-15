<!-- input_bus.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Bus</title>
</head>
<body>
    <h2>Form Input Data Bus</h2>

    <?php echo form_open_multipart('bus/save'); ?>

    <label for="id">Id:</label>
    <input type="number" name="id" required>
    <br><br>

    <label for="bus_name">Nama Bus:</label>
    <input type="text" name="bus_name" required>
    <br><br>

    <label for="bus_image">Gambar Bus:</label>
    <input type="file" name="bus_image" required>
    <br><br>

    <input type="submit" value="Simpan">
    
    <?php echo form_close(); ?>
</body>
</html>