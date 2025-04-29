<?php
include("connection.php");
session_start();

// Redirect if not logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

$lawyer_email = $_SESSION['email'];

// Get selected month and year or default to current month/year
$month = isset($_POST['month']) ? date('m', strtotime($_POST['month'])) : date('m');
$year = isset($_POST['year']) ? date('Y', strtotime($_POST['month'])) : date('Y');

// Check if lawyer exists
$lawyer_query = "SELECT * FROM lawyer_registration WHERE email='$lawyer_email'";
$lawyer_result = mysqli_query($con, $lawyer_query);
if (mysqli_num_rows($lawyer_result) == 0) {
    echo "Lawyer not found.";
    exit();
}

// Fetch appointments for the lawyer and filter payments by selected month/year
$query = "SELECT ar.clientname, ar.case_number, ar.clientplace, ar.clientcontact, ar.totalamount, p.payment_amount, p.payment_date
          FROM appointment_requests ar
          INNER JOIN payments p ON ar.appointment_id = p.appointment_id
          WHERE ar.lemail = '$lawyer_email' AND MONTH(p.payment_date) = '$month' AND YEAR(p.payment_date) = '$year'";
$result = mysqli_query($con, $query);
$appointments = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Report</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .report-container { max-width: 800px; margin: 50px auto; padding: 20px; background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px; }
        .report-header { text-align: center; font-size: 24px; font-weight: bold; margin-bottom: 20px; }
        .report-field { display: flex; justify-content: space-between; margin: 8px 0; font-size: 18px; }
        .report-field label { font-weight: bold; }
        .btn-container { display: flex; justify-content: space-between; margin-top: 20px; }
        @media print { .btn-container { display: none; } .report-container { page-break-inside: avoid; } }
    </style>
</head>
<body>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Monthly Report</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Monthly Report for <?php echo date("F, Y", strtotime("$year-$month-01")); ?></li>
            </ol>
        </nav>
    </div>

    <!-- Month selection form -->
    <form method="POST" action="">
        <label for="month">Select Month:</label>
        <input type="month" id="month" name="month" value="<?php echo $year . '-' . $month; ?>">
        <button type="submit" class="btn btn-primary">Generate Report</button>
    </form>

    <!-- Report Content -->
    <section id="monthly-report">
        <div class="report-container">
            <div class="report-header">Monthly Report - <?php echo date("F, Y", strtotime("$year-$month-01")); ?></div>

            <?php if (!empty($appointments)): ?>
                <?php foreach ($appointments as $appointment): ?>
                    <div class="report-field">
                        <label>Client Name:</label>
                        <span><?php echo htmlspecialchars($appointment['clientname']); ?></span>
                    </div>
                    <div class="report-field">
                        <label>Case No:</label>
                        <span><?php echo htmlspecialchars($appointment['case_number']); ?></span>
                    </div>
                    <div class="report-field">
                        <label>Place:</label>
                        <span><?php echo htmlspecialchars($appointment['clientplace']); ?></span>
                    </div>
                    <div class="report-field">
                        <label>Mobile:</label>
                        <span><?php echo htmlspecialchars($appointment['clientcontact']); ?></span>
                    </div>
                    <div class="report-field">
                        <label>Total Fee:</label>
                        <span><?php echo htmlspecialchars($appointment['totalamount']); ?></span>
                    </div>
                    <div class="report-field">
                        <label>Payment Amount:</label>
                        <span><?php echo htmlspecialchars($appointment['payment_amount']); ?></span>
                    </div>
                    <div class="report-field">
                        <label>Payment Date:</label>
                        <span><?php echo htmlspecialchars($appointment['payment_date']); ?></span>
                    </div>
                    <hr>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No payments found for the selected month.</p>
            <?php endif; ?>

            <div class="btn-container">
                <button onclick="window.print()" class="btn btn-primary">Print Report</button>
                <button onclick="window.history.back()" class="btn btn-secondary">Go Back</button>
            </div>
        </div>
    </section>
</main>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
