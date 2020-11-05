<?php
    /*

    */

    $plateNo = $currentColor = $targetColor = $remarks = "";
    $plate_err = "";

    /* 
        Process the forms data when form is submitted
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /* 
            Include the database File
        */
        require_once ("database/database_connection.php"); 
        
        /* Validate Plate Number*/

        $input_plate = trim($_POST['plateNo']);
        if (empty($input_plate)) {
            $plate_err = "Please input Plate Number";
        } elseif (!filter_var($input_plate, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $plate_err = "Please input valid Plate Number.";
        } else {
            $plate = $input_plate;
        }

        /*  Check errors before inserting into Database */
        if (empty($plate_err) && empty($currentColor) && empty($targetColor)) {
            $sql = "INSERT INTO job_in_progress (plateNumber, currentColor, targetColor, remarks) VALUES (?,?,?,?)";

            if ($stmt = $connect->prepare($sql)) {
                // Bind the variables to the prepared statements as parameters
                $stmt->bind_param($stmt, "ssss", $param_plate, $param_currentColor, $param_targetColor, $param_remarks);

                // Set Parameters value

                $remarks = "Mark as Completed";

                $param_plate = $plateNo;
                $param_currentColor = $currentColor;
                $param_targetColor = $targetColor;
                $param_remarks = $remarks;

                // Execute 
                if ($stmt->execute()) {
                    // Redirect to landing page 
                    //header("location: index.php");
                    //exit();
                } else {
                    echo "Ooops, Something went wrong. Please try again later.";
                }
            }
            // Close the Statement
            $stmt->close();
        }
        // Close the connection
        $connect->close();
    }
?>