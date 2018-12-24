<?php include ('header.php');
require "includes/config.php";
?>
<html lang="en">
<body>
	<div class="vacation2 poslugu_image"> 
	<div class="container ">
		<div id="container">
			<div >

				<form  method="get" action="do_search.php"> 
					<input type="text" name="search" id="search_box" required class='search_box mt-3 formvac' placeholder='Я шукаю...'/>
					<input type="submit" value="Пошук" class="search_button" />
					 <a href="includes/contract.doc" class="adownload" download><img src="images/download(1).png" width="20px" alt=""> Скачати прайслист</a>
				</form>
			</div>
			<div>

				<div id="searchresults">Результати для <span class="word"></span></div>
				<ul id="results" class="update">
				</ul>

			</div>
		</div>


		<hr>
		 
		<?php
			$service = mysqli_query ($connection, " SELECT * FROM `service` ");
		?>
		<div class="table100 ver2 m-b-110" >
		<table class="table table-borderless"  data-vertable="ver2">
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
					</tr><?php
		}
		?>
				</tbody>
			</table>
			</div>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript">

			$(function() {

				$(".search_button").click(function() {
        // получаем то, что написал пользователь
        var searchString    = $("#search_box").val();
        // формируем строку запроса
        var data            = 'search='+ searchString;

        // если searchString не пустая
        if(searchString) {
            // делаем ajax запрос
            $.ajax({
            	type: "GET",
            	url: "do_search.php",
            	data: data,
                beforeSend: function(html) { // запустится до вызова запроса
                	$("#results").html('');
                	$("#searchresults").show();
                	$(".word").html(searchString);
                },
               success: function(html){ // запустится после получения результатов
               	$("#results").show();
               	$("#results").append(html);
               }
             });
          }
          return false;
        });
			});
		</script>





</div>
<?php include "footer.php";?>
</body>
</html>
</body>
</html>