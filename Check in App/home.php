<?php
$connect = mysqli_connect("localhost", "root", "", "checkinapp");
$columns = array(
    'first_name',
    'last_name',
    'active'
);

$query =
"SELECT * FROM user WHERE active=0 ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 AND (first_name LIKE "%'.$_POST["search"]["value"].'%"
 OR last_name LIKE "%'.$_POST["search"]["value"].'%")
 ';
}
if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $columns[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . '
 ';

} else {
    $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if ($_POST["length"] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while ($row = mysqli_fetch_array($result)) {
    $sub_array   = array();
    $sub_array[] = '<div  data-id="' . $row["id"] . '" data-column="first_name">' . $row["first_name"] . '</div>';
    $sub_array[] = '<div  data-id="' . $row["id"] . '" data-column="last_name">' . $row["last_name"] . '</div>';
    $sub_array[] = '<button type="button" name="checkin" class="btn btn-primary btn-xxl checkin" id="' . $row["id"] . '">Check in</button>';

    $data[] = $sub_array;
}

function get_all_data($connect)
{
    $query  = "SELECT * FROM user WHERE active=0";
    $result = mysqli_query($connect, $query);
    return mysqli_num_rows($result);
}

$output = array(
    "draw" => intval($_POST["draw"]),
    "recordsTotal" => get_all_data($connect),
    "recordsFiltered" => $number_filter_row,
    "data" => $data
);

echo json_encode($output);

?>
