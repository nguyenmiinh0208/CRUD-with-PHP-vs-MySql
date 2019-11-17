<?php
     require_once "connect.php";
     $sql = "SELECT * FROM cars";
     $result = mysqli_query($conn, $sql);
     $output = '';
     $output .= 
          '
          <table class="table table-bordered"> 
               <thead class="thead-dark">
                    <tr>
                         <th width="20%" scope="col">ID</th>
                         <th width="30%" scope="col">NAME</th>
                         <th width="30%" scope="col">YEAR</th>
                         <th width="20%" scope="col">HANDLE</th>
                    </tr>
               </thead>';

     if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
               $output .= 
                    '<tbody>
                    <th scope="row">'.$row["id"].'</th>
                    <td class="name-result" data-name="'.$row["id"].'" contenteditable>'.$row["name"].'</td>
                    <td class="year-result" data-year="'.$row["id"].'" contenteditable>'.$row["year"].'</td>
                    <td>
                         <button type="button" name="btn_delete" data-id="'.$row["id"].'" class="btn btn-primary btn_delete">DELETE</button>
                    </td>
                    ';
          }
          $output .= 
                    '<tbody>
                    <th id="id_insert" scope="row" contenteditable></th>
                    <td id="name_insert" contenteditable></td>
                    <td id="year_insert" contenteditable></td>
                    <td>
                    <button type="button" id="btn_insert" class="btn btn-success">ADD ITEM</button>
                    </td>
                    ';
     } else {
          $output .= 
                    '<tbody>
                    <th id="id_insert" scope="row"></th>
                    <td id="name_insert" contenteditable></td>
                    <td id="year_insert" contenteditable></td>
                    <td>
                    <button type="button" id="btn_insert" class="btn btn-success">ADD ITEM</button>
                    </td>
                    ';
     }
     $output .= '</tbody></table>';
     echo $output;
?>