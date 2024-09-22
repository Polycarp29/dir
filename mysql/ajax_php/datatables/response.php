<?php

include '../DB/configDB.php';
/* Database connection start */
//  echo "test";
if (isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'getEMP' :
            getEMP($DBconnect);
            break;
        case 'getProd' :
            getProducts($DBconnect);
            break;
        // ...etc...
    }
}
//getEMP();

function getEMP($DBconnect)
{

// storing  request (ie, get/post) global array to a variable
    $requestData = $_REQUEST;
    $columns = array(
// datatable column index  => database column name
        0 => 'employee_name',
        1 => 'employee_salary',
        2 => 'employee_age'
    );
// getting total number records without any search
    $sql = "SELECT employee_name, employee_salary, employee_age ";
    $sql .= " FROM employee";
    $query = mysqli_query($DBconnect, $sql) or die("Mysql Mysql Error in getting : get products");
    $totalData = mysqli_num_rows($query);
    $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
    $sql = "SELECT employee_name, employee_salary, employee_age ";
    $sql .= " FROM employee WHERE 1=1";
    if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
        $sql .= " AND ( employee_name LIKE '" . $requestData['search']['value'] . "%' ";
        $sql .= " OR employee_salary LIKE '" . $requestData['search']['value'] . "%' ";
        $sql .= " OR employee_age LIKE '" . $requestData['search']['value'] . "%' )";
    }
    $query = mysqli_query($DBconnect, $sql) or die("Mysql Mysql Error in getting : get products");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
    $sql .= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "   LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
    /* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length. */
    $query = mysqli_query($DBconnect, $sql) or die("Mysql Mysql Error in getting : get products");

    $data = array();
    while ($row = mysqli_fetch_array($query)) {  // preparing an array
        $nestedData = array();
        $nestedData[] = $row["employee_name"];
        $nestedData[] = $row["employee_salary"];
        $nestedData[] = $row["employee_age"];

        $data[] = $nestedData;
    }
    $json_data = array(
        "draw" => intval($requestData['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
        "recordsTotal" => intval($totalData),  // total number of records
        "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data" => $data   // total data array
    );
    echo json_encode($json_data);  // send data as json format


}

//getProducts($DBconnect);
function getProducts($DBconnect)
{
    //  echo "test";

    /* Database connection end */
// storing  request (ie, get/post) global array to a variable
    $requestData = $_REQUEST;
    $columns = array(
// datatable column index  => database column name
        0 => 'product_name',
        1 => 'price',
        2 => 'category'
    );
// getting total number records without any search
    $sql = "SELECT product_name, price, category ";
    $sql .= " FROM products";
    $query = mysqli_query($DBconnect, $sql) or die("Mysql Error in getting : get products");
    $totalData = mysqli_num_rows($query);
    $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
    $sql = "SELECT product_name, price, category ";
    $sql .= " FROM products WHERE 1=1";
    if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
        $sql .= " AND ( product_name LIKE '" . $requestData['search']['value'] . "%' ";
        $sql .= " OR price LIKE '" . $requestData['search']['value'] . "%' ";
        $sql .= " OR category LIKE '" . $requestData['search']['value'] . "%' )";
    }
    $query = mysqli_query($DBconnect, $sql) or die("Mysql Error in getting : get products");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
    $sql .= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "   LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
    /* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length. */
    $query = mysqli_query($DBconnect, $sql) or die("Mysql Error in getting : get products");

    $data = array();
    while ($row = mysqli_fetch_array($query)) {  // preparing an array
        $nestedData = array();
        $nestedData[] = $row["product_name"];
        $nestedData[] = $row["price"];
        $nestedData[] = $row["category"];

        $data[] = $nestedData;
    }
    $json_data = array(
        "draw" => intval($requestData['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
        "recordsTotal" => intval($totalData),  // total number of records
        "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data" => $data   // total data array
    );
    echo json_encode($json_data);  // send data as json format

}