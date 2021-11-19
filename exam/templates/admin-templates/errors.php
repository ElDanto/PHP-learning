<?php if($_GET['status'] == 'success'): ?>
    <div class="stage" style="text-align: center; margin: 10px 0; background-color: green; color: white;">
        <h2>Измeнения успешно добавлены</h2>
    </div>
<?php elseif($_GET['status'] == 'errors'): ?>
    <?php 
    // ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        $errorMessages = include __DIR__ . '/error-messages.php';
    ?>
    <div class="stage" style="text-align: center; margin: 10px 0; background-color: red; color: white;">
        <h2>Ошибка в добавлении данных</h2>

        <?php foreach ($_GET as $key => $value) : ?>
            <?php 
                if ($key == 'status' || $value == 1) {
                    continue;
                } 
                $errorMessage = '';
                if (!empty($errorMessages) && isset($errorMessages[$value])){
                    $tempError = $errorMessages[$value];
                    $errorMessage = str_replace('%field%', $key, $tempError);
                }
            ?>
            <div><?php echo $errorMessage; ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>