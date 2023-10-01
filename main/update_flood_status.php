<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'updateFloodStatus') {
    // Load or initialize hazard-prone area data (coordinates, name, and show status) for Barugo, Leyte
    $hazardAreasFile = 'hazard_areas.json';

    if (file_exists($hazardAreasFile)) {
        $hazardAreas = json_decode(file_get_contents($hazardAreasFile), true);
    } else {
        $hazardAreas = [
            ['lat' => 11.2748, 'lng' => 124.7327, 'name' => 'Abango (Flood Prone Area)', 'show' => false],
            ['lat' => 11.3256, 'lng' => 124.7363, 'name' => 'Poblacion Dist. III (Flood Prone Area)', 'show' => false],
            // Add more barangay data here
        ];
    }

    $showMarkers = $_POST['show'];

    foreach ($hazardAreas as $index => &$area) {
        // Update marker visibility based on admin's selections
        if (isset($showMarkers[$index])) {
            $area['show'] = true;
        } else {
            $area['show'] = false;
        }
    }

    // Save the updated data to a JSON file
    file_put_contents($hazardAreasFile, json_encode($hazardAreas, JSON_PRETTY_PRINT));

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

?>
