<!DOCTYPE html>
<html>
<head>
    <title>LHN</title>
    <meta charset="UTF-8">
</head>

<body>
    <form method="post">
        <label for="day">Ngày:</label>
        <select name="day" id="day">
            <?php
            for ($day = 1; $day <= 31; $day++) {
                echo "<option value=\"$day\">$day</option>";
            }
            ?>
        </select>

        <label for="month">Tháng:</label>
        <select name="month" id="month">
            <?php
            for ($month = 1; $month <= 12; $month++) {
                echo "<option value=\"$month\">$month</option>";
            }
            ?>
        </select>

        <label for="year">Năm:</label>
        <select name="year" id="year">
            <?php

            $curYear = date("Y");
            for ($year = 1900; $year <= $curYear; $year++) {
                echo "<option value=\"$year\">$year</option>";
            }
            ?>
        </select>

        <input type="submit" value="Chọn">
        
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedDay = $_POST["day"];
        $selectedMonth = $_POST["month"];
        $selectedYear = $_POST["year"];
        echo "Ngày bạn đã chọn: $selectedDay/$selectedMonth/$selectedYear";
    }
    ?>
</body>
</html>