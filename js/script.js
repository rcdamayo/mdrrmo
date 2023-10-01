// Create the Leaflet map
const map = L.map('map').setView([40.7128, -74.0060], 10); // Default map center (e.g., New York City)

// Add a tile layer using OpenStreetMap data
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);

// Add pins as markers on the map (replace with your pin coordinates)
const pins = [
    { lat: 40.7128, lng: -74.0060 }, // Pin 1
    { lat: 34.0522, lng: -118.2437 }, // Pin 2
    // Add more pins as needed
];

pins.forEach(pin => {
    L.marker([pin.lat, pin.lng]).addTo(map);
});

// Function to find the nearest pin
function findNearestPin(userLocation) {
    let nearestPin = null;
    let nearestDistance = Infinity;

    pins.forEach(pin => {
        const distance = L.latLng(userLocation.lat, userLocation.lng).distanceTo(L.latLng(pin.lat, pin.lng));

        if (distance < nearestDistance) {
            nearestDistance = distance;
            nearestPin = pin;
        }
    });

    return nearestPin;
}

// Event listener for finding the nearest pin
document.getElementById('findNearest').addEventListener('click', () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
            const userLocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude,
            };
            const nearestPin = findNearestPin(userLocation);

            // Display the nearest pin's location and distance
            const directionsDiv = document.getElementById('directions');
            if (nearestPin) {
                directionsDiv.innerHTML = `Nearest Pin Location: Lat ${nearestPin.lat}, Lng ${nearestPin.lng}<br>`;
                directionsDiv.innerHTML += `Distance: ${nearestDistance.toFixed(2)} meters`;
            } else {
                directionsDiv.innerHTML = 'No pins found.';
            }
        });
    } else {
        console.error('Geolocation is not supported by this browser.');
    }
});
