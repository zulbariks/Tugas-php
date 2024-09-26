<?php

// sambungin ke database
$koneksi = mysqli_connect("localhost", "root", "", "menejemen kantin");



function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// kumpulan data yang ditambah

function tambah($data, $table)
{
    global $koneksi;
    if ($table == 'menu_kantin') {
        $name = $data["name"];
        $price = $data["price"];

        $query = "INSERT INTO $table
            VALUES  
            ('', '$name', '$price')";
    } elseif ($table == 'tables') {
        $number = $data['number'];
        $status = $data['status'];
        echo $status;
        $query = "INSERT INTO tables 
    VALUES
    ('', '$number', '$status')
    ";
    } elseif ($table == 'transaction') {
        $buyer = $data["buyer"];
        $amount = $data["amount"];
        $menu = $data["menu"];

        $rows = json_encode($menu);

        $query = "INSERT INTO transaction
            VALUES  
            ('', '$buyer', '$rows', '$amount')";
    }
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function hapus($id, $trash)
{
    global $koneksi;

    $query = "DELETE FROM $trash WHERE id = $id";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function edit($data, $id, $edit)
{
    global $koneksi;
    if ($edit == 'menu_kantin') {
        $name = $data["name"];
        $price = $data["price"];
        $query = "UPDATE $edit SET name = '$name', price = '$price' WHERE id=$id";
    } elseif ($edit == 'tables') {
        $number = $data["number"];
        $status = $data["status"];

        $query = "UPDATE tables SET number = $number, status = $status WHERE id=$id";
    } elseif ($edit == 'transaction') {
        $buyer = $data["buyer"];
        $menu = $data["menu"];
        $amount = $data["amount"];
        $rows = json_encode($menu);

        // Escape input data to prevent SQL injection
        $buyer = mysqli_real_escape_string($koneksi, $buyer);
        $rows = mysqli_real_escape_string($koneksi, $rows);

        $query = "UPDATE transaction SET buyer = '$buyer', menu = '$rows', amount = $amount WHERE id=$id";
    }

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// function edittable($data, $id)
// {
//     global $koneksi;

//     // ('', '$number', '$status')";

//     mysqli_query($koneksi, $query);

// return mysqli_affected_rows($koneksi);


// }


// function edittrs($data, $id)
// {
//     global $koneksi;

//     // ('', '$number', '$status')";

//     mysqli_query($koneksi, $query);

// return mysqli_affected_rows($koneksi);

// if (mysqli_affected_rows($koneksi) > 0) {
//     echo "<script>
//         alert('data berhasil diedit');
//         document.location.href = 'transaction.php';
//         </script>";
// } else {
//     echo "Data gagal diedit";
// }
// }

// function addtable($data)
// {
//     global $koneksi;
//     var_dump($data);
    
//     mysqli_query($koneksi, $query);
// }
