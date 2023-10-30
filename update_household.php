<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update existing records
    if (isset($_POST['year']) && isset($_POST['household_population']) && isset($_POST['no_of_households']) && isset($_POST['average_household_size'])) {
        $ids = $_POST['id'];
        $years = $_POST['year'];
        $householdPop = $_POST['household_population'];
        $householdNo = $_POST['no_of_households'];
        $aveHousehold = $_POST['average_household_size'];

        for ($i = 0; $i < count($years); $i++) {
            $id = $ids[$i]; // Fetch the ID for the current iteration
            $year = $years[$i];
            $household_population = $conn->real_escape_string($householdPop[$i]);
            $no_of_households = $conn->real_escape_string($householdNo[$i]);
            $average_household_size = $conn->real_escape_string($aveHousehold[$i]);

            if (!empty($year)) {
                $sql = "UPDATE household_data SET year='$year', household_population='$household_population', no_of_households='$no_of_households', average_household_size='$average_household_size' WHERE id='$id'";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error updating record: " . $conn->error;
                    break;
                }
            } else {
                $sql = "DELETE FROM household_data WHERE id='$id'";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error deleting record: " . $conn->error;
                    break;
                }
            }
        }

        // Insert new rows
        if (isset($_POST['new_year'])) {
            $newYears = $_POST['new_year'];
            $newHouseholdPops = $_POST['new_household_population'];
            $newHouseholdNos = $_POST['new_no_of_households'];
            $newAveHouseholds = $_POST['new_average_household_size'];

            for ($i = 0; $i < count($newYears); $i++) {
                $newYear = $conn->real_escape_string($newYears[$i]);
                $newHouseholdPop = $conn->real_escape_string($newHouseholdPops[$i]);
                $newHouseholdNo = $conn->real_escape_string($newHouseholdNos[$i]);
                $newAveHouseholds = $conn->real_escape_string($newAveHouseholds[$i]);

                if (!empty($newYear)) {
                    $sql = "INSERT INTO household_data (year, household_population, no_of_households, average_household_size) VALUES ('$newYear', '$newHouseholdPop', '$newHouseholdNo', '$newAveHouseholds')";
                    if ($conn->query($sql) !== TRUE) {
                        echo "Error inserting new record: " . $conn->error;
                        break;
                    }
                }
            }
        }

        echo "Records updated and inserted successfully";
    }
}
$conn->close();
?>
