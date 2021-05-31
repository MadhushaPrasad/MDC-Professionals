<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
require_once '../../config/DBConnection.php';
//get All job companies
function getAllCompanies($connection)
{
    $companyQuery = 'SELECT * FROM company';
    $companyList = $connection->query($companyQuery);

    while ($resultSet = $companyList->fetch_assoc()) {
        echo ' <tr>' .
            '<td>' . $resultSet['company_ID'] . '</td>' .
            '<td>' . $resultSet['p_ID'] . '</td>' .
            '<td>' . ' <img src="../../assets/images/upload/' . $resultSet['image']
            . '" alt="seekerProfile" width="50px" height="50px"
                         style="background-position: 50% 50%;background-size: cover;">' . '</td>' .
            '<td>' . $resultSet['company_name'] . '</td>' .
            '<td>' . $resultSet['email'] . '</td>' .
            '<td>' . $resultSet['web_url'] . '</td>' .
            '<td>' . $resultSet['address'] . '</td>' .
            '<td>' . $resultSet['description'] . '</td>' .
            '<td>' . $resultSet['status'] . '</td>' .
            '<td>' .
            '<form action="" method="get">' .
            '&nbsp; &nbsp;<button type="submit" name="btnDelete" value="' . $resultSet['company_ID'] . '"><i class="fas fa-trash-alt" style="color: red;cursor: pointer;"></i></button>&nbsp; &nbsp;' .
            '<button type="submit" name="btnEdit" value="' . $resultSet['company_ID'] . '"><i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i></button> &nbsp; &nbsp;' .
            '</form>' .
            '</td>' .
            '</tr>';
    }
}

function getProviderID($connection)
{
    $query = "SELECT p_ID FROM provider";
    $providerIDList = $connection->query($query);
    while ($resultSet = $providerIDList->fetch_assoc()) {
        echo '<option value="' . $resultSet['p_ID'] . '">' . $resultSet['p_ID'] . '</option>';
    }
}

function getCategoryName($connection)
{
    $query = "SELECT category_ID,category_name FROM main_category";
    $categoryList = $connection->query($query);
    while ($resultSet = $categoryList->fetch_assoc()) {
        echo '<option value="' . $resultSet['category_ID'] . '">' . $resultSet['category_name'] . '</option>';
    }
}

//search company
function searchCompany($connection)
{
    if (isset($_GET['btnSearch'])) {
        $companyID = $_GET['companyID'];
        if (empty($companyID)) {
            echo '<script>
                swal({
                  title: "Oops...",
                  text: "Company ID Not Fond.!",
                  icon: "error",
                });
               </script>';
        } else {
            $companyListQuery = "SELECT * FROM company WHERE company_ID = $companyID";
            $companyList = $connection->query($companyListQuery);
            while ($resultSet = $companyList->fetch_assoc()) {
                echo ' <tr>' .
                    '<td>' . $resultSet['company_ID'] . '</td>' .
                    '<td>' . $resultSet['p_ID'] . '</td>' .
                    '<td>' . ' <img src="../../assets/images/upload/' . $resultSet['image']
                    . '" alt="seekerProfile" width="50px" height="50px"
                         style="background-position: 50% 50%;background-size: cover;">' . '</td>' .
                    '<td>' . $resultSet['company_name'] . '</td>' .
                    '<td>' . $resultSet['email'] . '</td>' .
                    '<td>' . $resultSet['web_url'] . '</td>' .
                    '<td>' . $resultSet['address'] . '</td>' .
                    '<td>' . $resultSet['description'] . '</td>' .
                    '<td>' . $resultSet['status'] . '</td>' .
                    '<td>' .
                    '<form action="" method="get">' .
                    '&nbsp; &nbsp;<button type="submit" name="btnDelete" value="' . $resultSet['company_ID'] . '"><i class="fas fa-trash-alt" style="color: red;cursor: pointer;"></i></button>&nbsp; &nbsp;' .
                    '<button type="submit" name="btnEdit"><i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i></button> &nbsp; &nbsp;' .
                    '</form>' .
                    '</td>' .
                    '</tr>';
            }
        }
    }
}


//add company
if (isset($_POST['btnAdd'])) {
    $providerID = $_POST['provider_ID'];
    $image = $_POST['fileFeildName'];
    $companyName = $_POST['comName'];
    $email = $_POST['email'];
    $web_url = $_POST['web_url'];
    $description = $_POST['description'];
    $comAddress = $_POST['comAddress'];
    $status = $_POST['status'];
    $category = $_POST['category'];

    if (!(empty($providerID || $companyName || $email || $web_url ||
        $description || $comAddress || $status || $category))) {

        $query = "INSERT INTO company (p_ID,image,company_name,email,web_url,address,description,status) 
                    VALUES('$providerID','$image','$companyName','$email','$web_url','$comAddress','$status','$category')";
        $response = $connection->query($query);
        if ($response > 0 && $connection->affected_rows > 0) {
            echo '<script>
                swal({
                      title: "Good job!",
                      text: "You clicked the button!",
                      icon: "success",
                    });
               </script>';

        } else {
            echo '<script>
                swal({
                  title: "Oops...",
                  text: "Something Wrong.!",
                  icon: "error",
                });
               </script>';
        }
    } else {
        echo '<script>
                swal({
                  title: "Oops...",
                  text: "Can not Add a company without entering data!",
                  icon: "error",
                });
               </script>';

        header('location:/MDC-Professionals/pages/admin/admin-company-page.php');
    }
}

//edit company
if (isset($_GET['btnEdit'])) {
    global $companyID;
    $companyID = $_GET['btnEdit'];
}

//update company
if (isset($_POST['btnUpdate'])) {
    $providerID = $_POST['provider_ID'];
    $companyIDs = $companyID;
    $image = $_POST['fileFeildName'];
    $companyName = $_POST['comName'];
    $email = $_POST['email'];
    $web_url = $_POST['web_url'];
    $description = $_POST['description'];
    $comAddress = $_POST['comAddress'];
    $status = $_POST['status'];
    $category = $_POST['category'];

    if (!(empty($providerID || $companyName || $email || $web_url ||
        $description || $comAddress || $status || $category))) {

        $query = "UPDATE company SET company_ID = '$companyIDs' p_ID = '$providerID'  
                    image= '$image' company_name= '$companyName' email= '$email' web_url='$web_url' address = '$comAddress'
                    description = '$description' status = '$status' WHERE company_ID = '$companyIDs'";
        $response = $connection->query($query);
        echo $response;
        if ($response > 0 && $connection->affected_rows > 0) {
            echo '<script>
                swal({
                      title: "Good job!",
                      text: "Company Updated.!",
                      icon: "success",
                    });
               </script>';

        } else {
            echo '<script>
                swal({
                  title: "Oops...",
                  text: "Something Wrong.!",
                  icon: "error",
                });
               </script>';
            header('location:/MDC-Professionals/pages/admin/admin-company-page.php');
        }
    } else {
        echo '<script>
                swal({
                  title: "Oops...",
                  text: "Can not Add a company without entering data!",
                  icon: "error",
                });
               </script>';

        header('location:/MDC-Professionals/pages/admin/admin-company-page.php');
    }
}

if (isset($_GET['btnDelete'])) {
    $companyID = $_GET['btnDelete'];
    $query = "DELETE FROM company WHERE company_ID = $companyID";
    $response = $connection->query($query);
    if ($response > 0 && $connection->affected_rows > 0) {
        echo '<script>
                swal({
                  title: "Deleted",
                  text: "Delete.!",
                  icon: "success",
                });
               </script>';
    }
}
?>

<div id="companyContainer">
    <div class="companySectionHeader">
        <h1>Company</h1>
        <span></span>
    </div>
    <div class="companyFormDivContainer">
        <div class="companySearchDiv">
            <form action="" method="GET">
                <input type="text" placeholder="Company ID" name="companyID">
                <button type="submit" id="companyBtnSearch" name="btnSearch">Search</button>
            </form>
            <?php
            searchCompany($connection);
            ?>
        </div>
        <!--<div class="companyProfileDivContainer">
            <form action="" method="post" enctype="multipart/form-data">
                <img id="companyProfile"><br>
                <input type="text" placeholder="Choose"
                       onfocus="(this.type='file')"
                       required
                       id="companyProfilePic"
                       name="fileFeildName"
                >
                <button type="button" id="companyBtnRemove">Remove</button> &nbsp;
                <button type="submit" id="companyBtnRemove" name="btnType" value="upload">Upload</button>
            </form>
        </div>-->
        <div>
            <form action="" method="post">
                <img id="companyProfile"><br>
                <input type="text" placeholder="Choose"
                       onfocus="(this.type='file')"
                       required
                       id="companyProfilePic"
                       name="fileFeildName"
                >
                <button type="button" id="companyBtnRemove">Remove</button> &nbsp;
                <button type="submit" id="companyBtnRemove" name="btnType" value="upload">Upload</button>
                <div>
                    <select name="provider_ID" id="companyProvider_ID" class="providerID">
                        <option disabled selected value="0">Provider ID</option>
                        <?php
                        getProviderID($connection);
                        ?>
                    </select>
                    <input type="text" placeholder="CompanyName" name="comName">
                </div>
                <div>
                    <input type="email" placeholder="Email" name="email">
                    <input type="text" placeholder="Web Url" name="web_url">
                </div>
                <div>
                    <textarea name="description" id="companyDescription" cols="30" rows="10"
                              placeholder="Description"></textarea>
                </div>
                <div>
                    <textarea name="comAddress" id="comAddress" cols="30" rows="10" placeholder="Address"></textarea>
                </div>
                <div>
                    <select name="status" id="status" class="comStatus">
                        <option disabled selected value="0">Status</option>
                        <option
                                value="1">Available
                        </option>
                        <option
                                value="2">Closed
                        </option>
                        <option
                                value="3">Open
                        </option>
                    </select>
                    <select name="category" id="select-id" class="mySelect">
                        <option disabled selected value="0">Category</option>
                        <?php
                        getCategoryName($connection);
                        ?>
                    </select>
                </div>
                <div class="companyButtonGroup">
                    <button id="companyBtnSubmit" name="btnAdd">Add</button>
                    <button id="companyBtnUpdate" name="btnType" value="update">Update</button>
                    <button id="companyBtnCancel" name="btnType" value="cancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="companyTableDiv">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Company Table</h1>
                <span style="position: absolute;top: 65px;"></span>
            </div>
            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>Company ID</th>
                    <th>P_ID ID</th>
                    <th>Image</th>
                    <th>Company Name</th>
                    <th>email</th>
                    <th>web url</th>
                    <th>address</th>
                    <th>description</th>
                    <th>status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody id="tBody" style="overflow-x: scroll;">
                <?php
                searchCompany($connection);
                ?>
                <?php
                getAllCompanies($connection);
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="../../assets/js/adminCompany.js"></script>
<script src="../../controllers/companyController.js"></script>


