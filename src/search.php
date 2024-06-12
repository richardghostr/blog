<?php

if (isset($_POST['okz'])) {
    $emp = $_POST['tyy'];
    $requete = "SELECT * FROM `logements` WHERE 'type'='$emp' ";


    $b = $connexion->query($requete);

    while ($row = $b->fetch_assoc()) { ?>
        <div id="cadre">
            <div class="img1"></div>
            <a href="/immojeune/louer.php?id=<?php echo $row["id"]; ?>" class="text" for="op">
                <div id="pp"> <i class='bx bxs-star' style="margin-bottom: 1px;"></i> Particulier</div>
                <p style="font-weight: 600; margin-bottom:2px; color:black"> <?php echo $row["type"]; ?></p>
                <p style="font-size: 0.8em;margin-bottom:0px ;width:100%;color:black"><?php echo $row["Description"]; ?></p>
                <p style="font-weight: 600; margin:5px 0;color:black"><?php echo $row["superficie"]; ?>m2 - <?php echo $row["prixmensuel"]; ?>fcfa</p>
                <p style="font-size: 0.8em;color:black"><i class='bx bx-location-plus'></i><?php echo $row["Emplacement"]; ?></p>
            </a>
        </div>
<?php
    }
}
?>