<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Form</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#customModal">
    Open Form
</button>

<!-- The Modal -->
<div class="modal" id="customModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Form Submission</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="customForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <?php 
                    $valueName = $_SESSION['username'];
                    include('../auth/selectDataprpty.php');
                    include('../auth/errors.php');
                    ?>
                    <p id="form-message"></p>
                    <input type="hidden" id="custF" name="custF" value="<?php echo $valueName; ?>">
                    
                    <!-- Custom form fields -->
                    <div class="form-group">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">House Number</span>
                            <input type="text" class="form-control" id="hseNo" name="hseNo">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Property Name</span>
                            <?php if($data): ?>
                            <select class="form-control" name="prptyname" id="prptyname">
                                <?php foreach($data as $row): ?>
                                <option><?= $row['prptyName'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php else: ?>
                            <br>
                            <span style="color:red">No Property Data: Kindly Add Property Information</span>
                            <?php endif ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Floor</span>
                            <input type="text" class="form-control" id="floor" name="floor">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Rent</span>
                            <input type="text" class="form-control" id="rent" name="rent">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Deposit</span>
                            <input type="text" class="form-control" id="deposit" name="deposit">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Unit Size</span>
                            <select class="form-control" name="hseType" id="hseType">
                                <option>Single Room</option>
                                <option>BedSitter</option>
                                <option>Studio</option>
                                <option>1 Bedroom</option>
                                <option>2 Bedroom</option>
                                <option>3 Bedroom</option>
                                <option>4 Bedroom</option>
                                <option>5 Bedroom</option>
                            </select>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Condition</span>
                            <select class="form-control" name="condition" id="condition">
                                <option>Furnished</option>
                                <option>Not Furnished</option>
                                <option>Partially Furnished</option>
                            </select>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Status</span>
                            <select class="form-control" name="status" id="status">
                                <option>Vacant</option>
                                <option>Occupied</option>
                                <option>Vacate on Notice</option>
                            </select>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Water Meter Number</span>
                            <input type="text" class="form-control" id="h2ono" name="h2ono">
                        </label>
                    </div>
                    
                    <!-- Submit button -->
                    <button type="submit" id="regSubmit" name="regSubmit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#customForm').submit(function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Perform client-side validation
            var isValid = true;
            var formData = $(this).serialize();

            // Clear previous messages
            $('#form-message').html('');

            // Example client-side validation (you can add more)
            if ($('#hseNo').val() === '') {
                $('#form-message').append('<div class="alert alert-danger">House Number is required.</div>');
                isValid = false;
            }
            if ($('#prptyname').val() === '') {
                $('#form-message').append('<div class="alert alert-danger">Property Name is required.</div>');
                isValid = false;
            }
            if ($('#floor').val() === '') {
                $('#form-message').append('<div class="alert alert-danger">Floor Number is required.</div>');
                isValid = false;
            }
            if ($('#rent').val() === '') {
                $('#form-message').append('<div class="alert alert-danger">Rent Value is required.</div>');
                isValid = false;
            }
            if ($('#deposit').val() === '') {
                $('#form-message').append('<div class="alert alert-danger">Deposit Value is required.</div>');
                isValid = false;
            }
            if ($('#hseType').val() === '') {
                $('#form-message').append('<div class="alert alert-danger">Unit Size is required.</div>');
                isValid = false;
            }
            if ($('#condition').val() === '') {
                $('#form-message').append('<div class="alert alert-danger">House Condition is required.</div>');
                isValid = false;
            }
            if ($('#status').val() === '') {
                $('#form-message').append('<div class="alert alert-danger">House Status is required.</div>');
                isValid = false;
            }
            if ($('#h2ono').val() === '') {
                $('#form-message').append('<div class="alert alert-danger">Water Meter Number is required.</div>');
                isValid = false;
            }

            if (isValid) {
                // If client-side validation passes, make AJAX request using XMLHttpRequest
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '../auth/hseData.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            $('#form-message').html(xhr.responseText); // Display validation response
                        } else {
                            console.error(xhr.responseText);
                            $('#form-message').html('<div class="alert alert-danger">An error occurred while processing your request.</div>');
                        }
                    }
                };
                xhr.send(formData);
            }
        });
    });
</script>

</body>
</html>
