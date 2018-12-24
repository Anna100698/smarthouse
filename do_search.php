<?php  
include('includes/config.php');
if (isset($_GET['search'])) {
     $word = mysqli_real_escape_string($connection, $_GET['search']);
    // Строим запрос
    $sql = "SELECT * FROM `service` WHERE `title` LIKE '%" . $word. "%' ORDER BY   `title` ";

    $service= mysqli_query ($connection,  $sql);
        if (mysqli_num_rows($service) > 0) {
?>
        <div class="table100 ver2 m-b-110">
        <table class="table table-borderless" data-vertable="ver2">
            <thead>
                <tr class="row100 head">
                    <th scope="col" class="column100 column1" data-column="column1">Код</th>
                    <th scope="col" class="column100 column2" data-column="column2">Послуга 
                   </th>
                    <th scope="col" class="column100 column3" data-column="column3">од.</th>
                    <th scope="col" class="column100 column4" data-column="column4">Ціна, грн</th>
                </tr>
            </thead> <tbody>
            <?php
            while ($serv = mysqli_fetch_assoc ($service))
            {
                ?>
                
                    <tr class="row100">
                        <td class="column100 column1" data-column="column1"><?php echo $serv['id']; ?></td>
                        <td class="column100 column2" data-column="column2"><?php echo $serv['title']; ?></td>
                        <td class="column100 column3" data-column="column3"><?php echo $serv['od']; ?></td>
                        <td class="column100 column4" data-column="column4"><?php echo $serv['price']; ?></td>
                    </tr>
                    <?php
        }
        ?>
                </tbody>
            </table>
            <hr>
           <p>Всі послуги</p> 
            </div>
<?php
} 
else { echo '<p>Нічого не знайдено.</p>'   ; }
}
?>