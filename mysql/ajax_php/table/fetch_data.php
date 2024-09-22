<?php
// fetch_data.php
include 'db.php';

$limit = 10; // Number of entries to show in a page.
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT * FROM details";
if (!empty($search)) {
    $sql .= " WHERE name LIKE '%$search%' OR email LIKE '%$search%'";
}
$sql .= " LIMIT $start, $limit";

$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$sqlTotal = "SELECT COUNT(*) as total FROM details";
if (!empty($search)) {
    $sqlTotal .= " WHERE name LIKE '%$search%' OR email LIKE '%$search%'";
}

$resultTotal = $conn->query($sqlTotal);
$total = $resultTotal->fetch_assoc()['total'];
$pages = ceil($total / $limit);

$response = [
    'data' => $data,
    'total' => $total,
    'pages' => $pages,
    'current' => $page
];

echo json_encode($response);

$conn->close();
?>
