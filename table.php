<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .container {
            display: flex;
            height: 800px;
        }

        .column {
            flex: 1;
            padding: 20px;
        }

        .yellow-column {
            background-color: yellow;
        }

        .red-column {
            background-color: red;
            color: white;
        }

        table {
            border-collapse: collapse;
            border: 1px solid black;
            margin-bottom: 20px; /* Add some spacing between tables */
        }

        td {
            border: 1px solid black;
            width: 30px;
            height: 30px;
            padding: 0;
            text-align: center;
            cursor: pointer;
        }

        .green {
            background-color: green;
            color: white;
        }

        .gray {
            background-color: gray;
            color: white;
            cursor: not-allowed;
        }

        .tb {
            width: 100%;
            border: none;
        }

.pa1{
padding-top: 55px;


}

    </style>
    <script>
        function toggleColor(cell) {
            if (!cell.classList.contains('gray')) {
                cell.classList.toggle('green');
            }
        }

        function selectStaff() {
            const staffSelect = document.getElementById('staff-select');
            const selectedStaff = staffSelect.value;
            const cellsTable1 = document.querySelectorAll('#table1 td');
            const cellsTable2 = document.querySelectorAll('#table2 td');

            for (let i = 0; i < cellsTable1.length; i++) {
                cellsTable1[i].classList.remove('green', 'gray');
            }

            for (let i = 0; i < cellsTable2.length; i++) {
                cellsTable2[i].classList.remove('green', 'gray');
            }

            if (selectedStaff === '1') {
                for (let i = 35; i < 60; i++) {
                    cellsTable1[i].classList.add('gray');
                }
                for (let i = 14; i < 40; i++) {
                    cellsTable2[i].classList.add('gray');
                }
            } else if (selectedStaff === '2') {
                for (let i = 55; i < 60; i++) {
                    cellsTable1[i].classList.add('gray');
                }
                for (let i = 25; i < 40; i++) {
                    cellsTable2[i].classList.add('gray');
                }
            }
        }
    </script>
    <title>Clickable Number Tables</title>
</head>
<body>
    <div class="container">
        <div class="column wight-column">
            <form>
                <label>
                    <input type="radio" name="patientType" value="new" checked>
                    New Patient
                </label>
                <label>
                    <input type="radio" name="patientType" value="registered">
                    Registered Patient
                </label><br><br>
                <td class="label-td" colspan="2">
                    <label for="name" class="form-label">Name: </label>
                </td>

                <td class="label-td">
                    <input type="text" name="firstname" class="input-text" placeholder="Enter Name" required>
                </td><br><br>

                <label for="staff-select">Select Staff:</label>
                <select id="staff-select" onchange="selectStaff()">
                    <option value="" selected>Choose Staff</option>
                    <option value="1">Staff 1</option>
                    <option value="2">Staff 2</option>
                    <option value="3">Staff 3</option>
                </select>
                
            </form>
            <h2>Morning</h2>
            <table id="table1">
                <?php
                $number = 1;
                for ($row = 1; $row <= 6; $row++) {
                    echo "<tr>";
                    for ($col = 1; $col <= 10; $col++) {
                        echo "<td onclick=\"toggleColor(this)\">{$number}</td>";
                        $number++;
                    }
                    echo "</tr>";
                }
                ?>
            </table>
            <h2>Evening</h2>
            <table id="table2">
                <?php
                $number = 1;
                for ($row = 1; $row <= 4; $row++) {
                    echo "<tr>";
                    for ($col = 1; $col <= 10; $col++) {
                        echo "<td onclick=\"toggleColor(this)\">{$number}</td>";
                        $number++;
                        if ($number > 40) {
                            break; // Stop generating when reaching 40
                        }
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <div class="column wight-column"><label for="regNum" class="form-label">Reg Num: </label>
                <input type="text" name="regNum" class="input-text" placeholder="Enter Reg Number" required>
                <label for="date" class="form-label">Date: </label>
                <input type="date" name="date" class="input-text" required><br><br>
            <form class="tb">
                <h2 class="pa1">STU - Morning</h2>
                <table id="table2">
                    <?php
                    $number = 1;
                    for ($row = 1; $row <= 4; $row++) {
                        echo "<tr>";
                        for ($col = 1; $col <= 5; $col++) {
                            echo "<td onclick=\"toggleColor(this)\">{$number}</td>";
                            $number++;
                            if ($number > 20) {
                                break; // Stop generating when reaching 20
                            }
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
                <h2>Evening</h2>
                <table id="table2">
                    <?php
                    $number = 1;
                    for ($row = 1; $row <= 2; $row++) {
                        echo "<tr>";
                        for ($col = 1; $col <= 5; $col++) {
                            echo "<td onclick=\"toggleColor(this)\">{$number}</td>";
                            $number++;
                            if ($number > 10) {
                                break; // Stop generating when reaching 10
                            }
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
                
                <input type="submit" value="Confirm Booking" class="login-btn btn-primary btn"> </td>
            </form>
        </div>
    </div>
</body>
</html>
