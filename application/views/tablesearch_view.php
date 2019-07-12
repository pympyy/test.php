<style type="text/css">
	.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
}
</style>

<div style="width: 600px;margin:0 auto;padding-top: 50px;">

  <?php

  echo '<h1>'.$data->fetch_assoc()[table_name].'</h1>';

  foreach($data as $row)
  {
    echo '<div style="padding: 5px 0;">';
      echo '<button class="accordion">Array'.$row['id'].'</button>';
      echo '<div class="panel">';
      echo '<p><b>Name : </b>'.$row['Name'].'</p>
            <p><b>Razdel : </b>'.$row['Razdel'].'</p>
            <p><b>global_id : </b>'.$row['global_id'].'</p>
            <p><b>Idx : </b>'.$row['Idx'].'</p>
            <p><b>Kod : </b>'.$row['Kod'].'</p>
            <p><b>Nomdescr : </b>'.$row['Nomdescr'].'</p>';
      echo '</div>';
    echo '</div>';
  }?>


	<!-- <button class="accordion">Array</button>
	<div class="panel">
	  <p>Name</p>
    <p>Kod</p>
    <p>Kod</p>
	  <p>Kod</p>
	</div> -->
</div>


<script type="text/javascript">
	
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

</script>