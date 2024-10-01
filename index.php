<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ignite Potential Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
          rel="stylesheet">
    <style>
        body {
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        .sidebar {
            height: 100vh;
        }

        #result {
            font-size: 1.5rem;
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>
<body>
<div class="d-flex">

    <div class="sidebar d-none d-md-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi bi-tools me-2" style="font-size: 40px;"></i>
            <span class="fs-4">Classic Era Tools</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <i class="bi bi-fire me-2"></i>
                    Ignite Potential Calculator
                </a>
            </li>
        </ul>
    </div>

    <!-- Page Content -->
    <div class="container-fluid">
        <h1 class="text-center mt-4 mb-5">Ignite Potential Calculator</h1>

        <div class="row justify-content-center">
            <div class="col-md-10">

                <form id="calculator-form">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3">Critical damage</h5>

                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <!-- Number Input Fields -->
                                            <div class="mb-3">
                                                <label for="criticalfirespell1" class="form-label">Critical Fire Spell
                                                    1:</label>
                                                <input type="number" class="form-control" id="criticalfirespell1"
                                                       name="criticalfirespell1" placeholder="Enter a value" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="criticalfirespell2" class="form-label">Critical Fire Spell
                                                    2:</label>
                                                <input type="number" class="form-control" id="criticalfirespell2"
                                                       name="criticalfirespell2" placeholder="Enter a value" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="criticalfirespell3" class="form-label">Critical Fire Spell
                                                    3:</label>
                                                <input type="number" class="form-control" id="criticalfirespell3"
                                                       name="criticalfirespell3" placeholder="Enter a value" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="criticalfirespell4" class="form-label">Critical Fire Spell
                                                    4:</label>
                                                <input type="number" class="form-control" id="criticalfirespell4"
                                                       name="criticalfirespell4" placeholder="Enter a value" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="criticalfirespell5" class="form-label">Critical Fire Spell
                                                    5:</label>
                                                <input type="number" class="form-control" id="criticalfirespell5"
                                                       name="criticalfirespell5" placeholder="Enter a value" required>
                                            </div>
                                            <hr>
                                            <div class="mb-3">
                                                <label for="criticalfiretotal" class="form-label">Critical Fire
                                                    Total:</label>
                                                <input type="number" class="form-control" id="criticalfiretotal"
                                                       name="criticalfiretotal"
                                                       placeholder="Enter a value" required>
                                                <div id="criticalfiretotalHelp" class="form-text">You can also edit the
                                                    total, but the
                                                    fields above will be update to averages.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 align-self-center">
                            <div class="d-flex flex-column my-auto px-5">
                                    <!-- Toggle Buttons -->
                                    <div class="mt-3 mb-5">
                                        <h5 class="text-center mb-3">Buffs on first mage</h5>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" checked type="checkbox" id="curseOfElements"
                                                   name="curseOfElements">
                                            <label class="form-check-label" for="curseOfElements">
                                                <i class="bi bi-droplet-fill"></i> Curse of Elements (1.1x)
                                            </label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" checked type="checkbox" id="powerInfusion"
                                                   name="powerInfusion">
                                            <label class="form-check-label" for="powerInfusion">
                                                <i class="bi bi-lightning-fill"></i> Power Infusion (1.2x)
                                            </label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="darkmoonFaire"
                                                   name="darkmoonFaire">
                                            <label class="form-check-label" for="darkmoonFaire">
                                                <i class="bi bi-stars"></i> Darkmoon Faire (1.1x)
                                            </label>
                                        </div>
                                        <div class="form-text mt-0 mb-2">These buffs snapshot during the first critical
                                            hit.
                                        </div>

                                        <h5 class="text-center mt-4 mb-3">Debuffs on target</h5>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" checked type="checkbox" id="scorchX5"
                                                   name="scorchX5">
                                            <label class="form-check-label" for="scorchX5">
                                                <i class="bi bi-fire"></i> Scorch x5 (1.15x)
                                            </label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="nightfall"
                                                   name="nightfall">
                                            <label class="form-check-label" for="nightfall">
                                                <i class="bi bi-moon-fill"></i> Nightfall (1.15x)
                                            </label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="undeadCleansing"
                                                   name="undeadCleansing">
                                            <label class="form-check-label" for="undeadCleansing">
                                                <i class="bi bi-shield-fill-check"></i> Undead Cleansing (1.02x)
                                            </label>
                                        </div>
                                        <div class="form-text mt-0 mb-2">Debuffs don't snapshot, they can
                                            apply/expire.
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div id="resultProgress" class="progress mt-4" role="progressbar" aria-label="Ignite Potential"
                         aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                             style="width: 0%">0%
                        </div>
                    </div>

                    <!-- Result Display -->
                    <div class="text-center mt-4">
                        <label for="result" class="form-label">Ignite damage per tick:</label>
                        <div id="result" class="text-danger">0</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    let isUpdatingFromTotal = false; // Flag to track if we're updating from the total field

    // Function to set cookies
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Function to get cookies
    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Function to update progress meter
    function updateProgressMeter(modifier) {
        const baseModifier = 1; // The base modifier when no switches are ON
        const maxModifier = 1.1 * 1.2 * 1.02 * 1.1 * 1.15 * 1.15;  // The full potential when all switches are ON

        // Calculate the progress percentage relative to the base and max modifier
        const progressPercentage = ((modifier - baseModifier) / (maxModifier - baseModifier)) * 100;

        // Ensure the progress percentage is within the 0 to 100 range
        const progress = Math.max(0, Math.min(100, progressPercentage));

        // Update the progress bar width and aria-valuenow attribute
        document.querySelector('#resultProgress .progress-bar').style.width = progress.toFixed(1) + '%';
        document.querySelector('#resultProgress .progress-bar').textContent = progress.toFixed(1) + '%';
        document.querySelector('#resultProgress').setAttribute('aria-valuenow', progress.toFixed(1));
    }

    // Function to update the total and calculate the final result
    function updateTotalAndCalculate() {
        if (!isUpdatingFromTotal) {
            // Retrieve number values from the individual spell fields
            let spell1 = parseFloat(document.getElementById('criticalfirespell1').value) || 0;
            let spell2 = parseFloat(document.getElementById('criticalfirespell2').value) || 0;
            let spell3 = parseFloat(document.getElementById('criticalfirespell3').value) || 0;
            let spell4 = parseFloat(document.getElementById('criticalfirespell4').value) || 0;
            let spell5 = parseFloat(document.getElementById('criticalfirespell5').value) || 0;

            let totaldamage = spell1 + spell2 + spell3 + spell4 + spell5;

            // Set cookies for each spell field
            setCookie('criticalfirespell1', spell1, 7);
            setCookie('criticalfirespell2', spell2, 7);
            setCookie('criticalfirespell3', spell3, 7);
            setCookie('criticalfirespell4', spell4, 7);
            setCookie('criticalfirespell5', spell5, 7);

            // Update the total damage field with the sum of the 5 inputs
            document.getElementById('criticalfiretotal').value = totaldamage;

            // Calculate 40% of the sum of the spells
            let baseValue = 0.40 * totaldamage;

            // Half because 40% is over 4 seconds with every 2 sec a tick
            baseValue = baseValue / 2;

            // Buff modifiers
            let modifier = 1; // Start with the base modifier of 1 (no buffs)
            if (document.getElementById('darkmoonFaire').checked) {
                modifier *= 1.1;
                setCookie('darkmoonFaire', true, 7);
            } else {
                setCookie('darkmoonFaire', false, 7);
            }
            if (document.getElementById('powerInfusion').checked) {
                modifier *= 1.2;
                setCookie('powerInfusion', true, 7);
            } else {
                setCookie('powerInfusion', false, 7);
            }
            if (document.getElementById('undeadCleansing').checked) {
                modifier *= 1.02;
                setCookie('undeadCleansing', true, 7);
            } else {
                setCookie('undeadCleansing', false, 7);
            }
            if (document.getElementById('curseOfElements').checked) {
                modifier *= 1.1;
                setCookie('curseOfElements', true, 7);
            } else {
                setCookie('curseOfElements', false, 7);
            }
            if (document.getElementById('nightfall').checked) {
                modifier *= 1.15;
                setCookie('nightfall', true, 7);
            } else {
                setCookie('nightfall', false, 7);
            }
            if (document.getElementById('scorchX5').checked) {
                modifier *= 1.15;
                setCookie('scorchX5', true, 7);
            } else {
                setCookie('scorchX5', false, 7);
            }

            // Update the progress meter
            updateProgressMeter(modifier);

            // Calculate the final result
            let result = baseValue * modifier;

            // Update the result field
            document.getElementById('result').textContent = result.toFixed(0);
        }
    }


    // Function to update fields from total
    function updateFieldsFromTotal() {
        // Set the flag to true to prevent recursive updates
        isUpdatingFromTotal = true;

        // Retrieve the total damage input
        let totaldamage = Math.round(parseFloat(document.getElementById('criticalfiretotal').value)) || 0;

        // Calculate the base value and remainder for distribution
        let baseValue = Math.floor(totaldamage / 5);
        let remainder = totaldamage % 5;  // This is the "extra" amount to distribute

        // Create an array with the base values
        let values = [baseValue, baseValue, baseValue, baseValue, baseValue];

        // Distribute the remainder across the first few elements
        for (let i = 0; i < remainder; i++) {
            values[i] += 1;
        }

        // Update individual spell fields with the distributed values
        document.getElementById('criticalfirespell1').value = values[0];
        document.getElementById('criticalfirespell2').value = values[1];
        document.getElementById('criticalfirespell3').value = values[2];
        document.getElementById('criticalfirespell4').value = values[3];
        document.getElementById('criticalfirespell5').value = values[4];

        // Recalculate the total and buffs based on the new values
        updateTotalAndCalculate();

        // Reset the flag after update
        isUpdatingFromTotal = false;
    }


    // Function to load saved cookie values into the form
    function loadSavedValues() {
        // Load the 1-5 fields from cookies
        document.getElementById('criticalfirespell1').value = getCookie('criticalfirespell1') || '';
        document.getElementById('criticalfirespell2').value = getCookie('criticalfirespell2') || '';
        document.getElementById('criticalfirespell3').value = getCookie('criticalfirespell3') || '';
        document.getElementById('criticalfirespell4').value = getCookie('criticalfirespell4') || '';
        document.getElementById('criticalfirespell5').value = getCookie('criticalfirespell5') || '';

        // Load the switches from cookies
        document.getElementById('darkmoonFaire').checked = getCookie('darkmoonFaire') === 'true';
        document.getElementById('powerInfusion').checked = getCookie('powerInfusion') === 'true';
        document.getElementById('undeadCleansing').checked = getCookie('undeadCleansing') === 'true';
        document.getElementById('curseOfElements').checked = getCookie('curseOfElements') === 'true';
        document.getElementById('nightfall').checked = getCookie('nightfall') === 'true';
        document.getElementById('scorchX5').checked = getCookie('scorchX5') === 'true';
    }

    // Load saved values on page load
    document.addEventListener('DOMContentLoaded', function () {
        loadSavedValues();
        updateTotalAndCalculate(); // Initial calculation after loading
    });

    // Event listener for changes in individual spell inputs or checkboxes
    document.addEventListener('input', function (event) {
        if (event.target.value.length > 1) {
            if (event.target.id === 'criticalfiretotal') {
                // If total damage is changed, update individual fields and recalculate
                updateFieldsFromTotal();
                updateTotalAndCalculate();
            } else {
                // If any of the spell inputs or checkboxes change, recalculate the total and buffs
                updateTotalAndCalculate();
            }
        }
    });
</script>


</body>
</html>
