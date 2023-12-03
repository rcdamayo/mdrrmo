<?php
include 'db_connection.php';

$sql = "SELECT * FROM alerts WHERE timestamp >= NOW() - INTERVAL 12 HOUR ORDER BY timestamp DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $alertLevel = $row["alert_level"];
        $alertColor = getAlertColor($alertLevel);
        $fontColor = getFontColor($alertLevel);
        $alertMessage = !empty(trim($row["alert_message"])) ? nl2br($row["alert_message"]) : "No active Emergency Alert and Warning Message as of present time.";
    }
} else {
    $alertLevel = 'yellow';
    $alertColor = getAlertColor($alertLevel);
    $fontColor = getFontColor($alertLevel);
    $alertMessage = "No active Emergency Alert and Warning Message as of present time.";
}

function getAlertColor($alertLevel) {
    switch ($alertLevel) {
        case 'yellow':
            return '#ffea00'; 
        case 'orange':
            return '#ff6600'; 
        case 'red':
            return '#cc0000'; 
        default:
            return '#f9b314'; 
    }
}

function getFontColor($alertLevel) {
    switch ($alertLevel) {
        case 'yellow':
            return '#000000';
        case 'orange':
        case 'red':
            return '#ffffff'; 
        default:
            return '#000000';
    }
}
?>

<?php if ($result->num_rows > 0): ?>
    <div id="modal" class="modal">
        <div class="early-alert" style="background-color: <?php echo $alertColor; ?>">

            <span class="close-btn" onclick="closeModal()">&times;</span>
            <div class="alert-header" style="color: <?php echo $fontColor; ?>">
                <h3>EMERGENCY ALERT & WARNING</h3>
            </div>
            <div class="alert-message">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="<?php echo $alertColor; ?>" viewBox="0 0 256 256" style="position: absolute; top: 40%; left: 5%;">
                    <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
                </svg>
                <?php echo "<p>$alertMessage</p>"; ?>
            </div>
            
        </div>
        <button class="confirm-btn" onclick="closeModal()">CONFIRM</button>
    </div>
<?php endif; ?>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const modal = document.getElementById('modal');
        if (modal) {
            modal.style.opacity = 1;
        }
    });

    function closeModal() {
        const modal = document.getElementById('modal');
        if (modal) {
            modal.style.opacity = 0;
            setTimeout(() => {
                modal.style.display = 'none';
            }, 500); 
        }
    }
</script>