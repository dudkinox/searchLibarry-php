<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">ห้องสมุด</h3>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อหนังสือ</th>
              <th>เลขทะเบียน</th>
              <th>จำนวนเล่ม</th>
              <th>BIB ID</th>
              <th>หมายเหตุ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $queryBooks = "SELECT * FROM books";
            $resultBooks = $conn->query($queryBooks);
            if ($resultBooks->num_rows > 0) {
              while ($rowBooks = $resultBooks->fetch_assoc()) {
            ?>
                <tr id="show-data" style="display: none">
                  <td><?php echo $rowBooks["no"]; ?></td>
                  <td><?php echo $rowBooks["book_name"]; ?></td>
                  <td><?php echo $rowBooks["code"]; ?></td>
                  <td><?php echo $rowBooks["amount"]; ?></td>
                  <td><?php echo $rowBooks["bib_id"]; ?></td>
                  <td><?php echo $rowBooks["note"]; ?></td>
                </tr>
            <?php
              }
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>