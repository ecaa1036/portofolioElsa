<!-- <form action="" method="POST">
PILIH KELAS <select name="kelas" id="">
            <option>XI RPL 1</option> 
            <option>XI RPL 2</option> 
            
        </select>
    <input type="submit" value="tampilkan" name="submit"> 
</from>

<from action="laporan.php" method="POST">
    <table>
        <?php
        if(isset($_POST['submit'])){
        $kelas = $_POST['kelas'];
        $siswa = array("XI RPL 1"=>array("raihan","kevin","ade"),"XI RPL 2"=>array("asep","asop","agus"));
  
        
        foreach($siswa[$kelas] as $no => $nama){
            $no++;
            ?>
            <tr>
                <td><?= $no ?>. </td>
                <td><?= $nama ?></td>
                 <td>
                    <input type="radio" name="keterangan<?= $no ?>" value="H">Hadir
                    <input type="radio" name="keterangan<?= $no ?>" value="T">Tidak Hadir
                </td>
            </tr>
            <?php

        }    
        ?>
        <tr>
            <td colspan="4" align="center">
                <input type="hidden" name="kelas" value="<?=$kelas?>">
                <input type="submit" value="laporkan" name="submit">
            </td>
        </tr>
        <?php

        }
        ?>
        
    </table>
</from> -->

<form action="" method="post">
    PILIH KELAS :   <select name="kelas" id="">
    <option></option>
    <option>XI RPL 1</option>
    <option>XI RPL 2</option>
</select>
<input type="submit" value="Tampilkan" name="submit">  
</form>

<form action="laporan.php" method="post">
    <table>
        <?php
        if(isset($_POST['submit'])){
            $kelas = $_POST['kelas'];
            $siswa = array("XI RPL 1"=>array("raihan","kevin","ami"),"XI RPL 2"=>array("asep","asop","agus"));   
        
            foreach($siswa[$kelas] as $no => $nama){
                
                $no++;
                ?>
                <tr>
                    <td><?=$no ?>. </td>
                    <td><?=$nama ?></td>
                    <td>
                        <input type="radio" name="keterangan<?= $no ?>" value="H">Hadir
                        <input type="radio" name="keterangan<?= $no ?>" value="T">Tidak Hadir
                    </td>
                </tr>
                <?php
            }
         ?>
         <tr>
            <td colspan="2" align="center">
            <input type="hidden" name="kelas" value="<?=$kelas?>">
            <input type="submit" value="Laporkan" name="submit">
            </td>
         </tr>
         <?php
            }
            ?>
    </table>
 </form>