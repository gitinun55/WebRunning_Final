<?php
 
//MySQLi Procedural
// $mysqli = new mysqli("localhost","root","","data_running") or die(mysqli_error($mysqli));

// if (issert($_POST['submit'])){
//     $id_event = $_POST['id_event'];
//     $name_event = $_POST['name_event'];
//     $name_producer = $_POST['name_producer'];
//     $date_reg_start = $_POST['date_reg_start'];
//     $date_reg_end = $_POST['date_reg_end'];
//     $price = $_POST['price'];
//     $distance = $_POST['distance'];
//     $objective = $_POST['objective'];
//     $detail = $_POST['detail'];
    
//     $mysqli->query("INSERT INTO event (id_event, name_event, name_producer, date_reg_start, date_reg_end, price, distance, objective, detail) 
//         VALUES('$id_event', '$name_event', '$name_producer', '$date_reg_start', '$date_reg_end', '$price', '$distance', '$objective', '$detail' ") or die($mysqli->error);
// }

    
?>


                            <!-- <table class="white">
                                <thead>
                                    <tr class="table100-head">
                                        <th class="column2">ID</th>
                                        <th >ชื่องาน</th> 
                                        <th >ผู้จัด</th>
                                        <th class="column3">วันเริ่ม</th>
                                        <th class="column3">วันสิ้นสุด</th>
                                        <th >ราคา</th>
                                        <th class="column2">ระยะทาง</th>
                                        <th class="column2">วัตถุประสงค์</th>
                                        <th class="column1">รายละเอียดงาน</th>
                                        <th class="column3">กดเพื่อตรวจสอบ</th>
                                    </tr>
                                    
                                </thead>

                                <tbody>
                                    <?php
                                        $conn = mysqli_connect("localhost" ,"root", "", "data_running");
                                        if ($conn-> connect_error) {
                                            die("Connect failed:" . $conn-> connect_error);
                                        }

                                        $sql = "SELECT * from add_event WHERE add_id";
                                        $result = $conn-> query($sql); 
                                        
                                        if($result->num_rows > 0){ 
                                            while ($row = $result-> fetch_assoc()) {
                                                echo "<tr>
                                                <td>". $row['add_id'] . "</td>
                                                <td>".$row["name_event"] ."</td>
                                                <td>".$row["name_producer"] ."</td>
                                                <td>".$row["date_reg_start"] ."</td>
                                                <td>".$row["date_reg_end"] ."</td>
                                                <td>".$row['price'] . "</td>
                                                <td>".$row["distance"] ."</td>
                                                <td>".$row["objective"] ."</td>
                                                <td>".$row["detail"] ."</td>
                                                <td><button>เพิ่มเติม</button></td></tr>";
                                            }
                                            echo "</table>";?>
                                </tbody>
                                    <?php
                                        }
                                        else {
                                            echo "0 result";
                                        }
                                    $conn-> close();
                                    ?>
                            </table>    -->