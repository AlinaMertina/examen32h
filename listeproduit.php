
<table width="900" border=1 style="margin-top:20%;margin-bottom:20%; margin-left:10%;">
    <tr>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>DATE</th>
    </tr>
    <?php if(isset($Nom)){ for($i=0;$i<count($Nom);$i++){ ?>
        <tr>
            <td><?php $Nom[$i]?>></td>
            <td><?php $Prenom[$i]?>></td>
            <td><?php $dated[$i]?></td>
        </tr>
    <?php  } } ?>
</table>