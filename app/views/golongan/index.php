<h2>GOLONGAN</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn">Tambah Golongan</a>

<table>
      <tr>
            <th>NO</th>
            <th>KODE GOLONGAN</th>
            <th>NAMA GOLONGAN</th>
            <th>EDIT</th>
            <th>HAPUS</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['gol_id']; ?></td>
                  <td><?php echo $row['gol_kode']; ?></td>
                  <td><?php echo $row['gol_nama']; ?></td>
                  <td><a href="<?php echo URL; ?>/Golongan/edit/<?php echo $row['gol_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/Golongan/delete/<?php echo $row['gol_id']; ?>" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>