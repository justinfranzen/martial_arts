<title>Martial Arts - Belt Rankings</title>
<?php
include 'includes/header.php';
?>

<body>
    
<div id="rankings-img"></div>
    
<h1 class="inner-h2">COMMON BELT RANKINGS</h1>
    
<div id="content">
    
    <p>All styles of martial arts have a ranking system that practioners can advance to if they pass the required tests for that belt level.  Some styles of martial arts such as Jui Jitsu, require years of training to earn the highest belt color.  For exmaple, it takes on average two years for a student to earn their blue belt in Jui Juitsu.  Other styles, including TaeKwonDo and Karate, are based on how fast and efficiently a student can learn and apply what he or she has learned when they are tested for the next belt level. </p>
    
    <p>Students are promoted to their next belt color when they can proficiently show what they've learned and perform those techniques accurately and with power.  Each style of martial arts has a different testing system and allows students to test during certain periods of time.  While the styles of martial arts are different, there are a few similar concepts that all of them share.  Some styles require more time until the student can test for their next belt.  A typical testing consists of performing forms(blocks, punches, and kicks), combos (kicks and punches), and board breaks.</p>
    
</div>
    
    <div class="row centered">
    
        <div class='col-lg-4 col-md-4 col-sm-12'>
            <h3>Poomsae</h3>
        
            <img src="img/form.jpeg" class="rank-img" alt="TaeKwonDo Form" />
        </div>
        
        <div class='col-lg-4 col-md-4 col-sm-12'>
            <h3>Technique Combination</h3>
                <img src="img/combo.jpeg" class="rank-img" alt="TaeKwonDo Form"  />

        </div>
        
        <div class='col-lg-4 col-md-4 col-sm-12'>
            <h3>Board Break</h3>

                <img src="img/board-break.jpeg" class="rank-img" alt="TaeKwonDo Form"  />

        </div>
        
    </div>
    
<div id="inner-content">
    
   <p>Belt rankings do go higher even after a standard black belt.  Some styles allow students to achieve a dan, or degree, promotion.  This is significant because it allows a black belt to fine tune his or her skills even beyond the journey of reaching their black belt.  For example, a first degree black belt has had at least a year of experience practicing techniques that only a black belt would be capable and allowed to do.  The techniques become more advanced to try and practice as the student becomes more proficient.  Some students can achieve as high as third and fourth degree black belt.  A fourth degree signifies a master in that art.  Below are three popular types of martial arts and the typical belt ranking system for each of them.</p>
    
    <div id="style-rankings">
        
    <?php
    require_once ('sql/mysql_connect.php');
        
        $sql = "SELECT id, colors FROM taekwondo";
        $result = $dbc->query($sql);
    
        echo '<div class="col-lg-4 col-md-4 col-sm-4">';
    
        echo "<h3>TaeKwonDo</h3>";
    
        echo "<table class='ranks'>";
    
        while($row = mysqli_fetch_array($result)){
            echo "<tr><td>" . $row['id'] . " - " .  $row['colors'] . "</tr></td>";
        }
    
        echo "</table>";
    
        echo '</div>';
        
        $sql = "SELECT id, colors FROM karate";
        $result = $dbc->query($sql);
    
        echo '<div class="col-lg-4 col-md-4 col-sm-4">';
    
        echo "<h3>Karate</h3>";
    
        echo "<table class='ranks'>";
    
        while($row = mysqli_fetch_array($result)){
            echo "<tr><td>" . $row['id'] . " - " .  $row['colors'] . "</tr></td>";
        }
    
        echo "</table>";
    
        echo '</div>';
    
         $sql = "SELECT id, colors FROM bjj";
        $result = $dbc->query($sql);
    
        echo '<div class="col-lg-4 col-md-4 col-sm-4">';
    
        echo "<h3>Brazilian Jui-Jitsu</h3>";
    
        echo "<table class='ranks'>";
    
        while($row = mysqli_fetch_array($result)){
            echo "<tr><td>" . $row['id'] . " - " .  $row['colors'] . "</tr></td>";
        }
    
        echo "</table>";
    
        echo '</div>'
    
    ?>
        
    </div>
   
 </div>
    

</body>


<?php
    include 'includes/footer.php';
?>