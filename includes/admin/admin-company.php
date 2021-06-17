<?php

//get Company Names
function getCategoryName()
{
    $connection = mysqli_connect("localhost", "root", "", "mdc");
    $query = "SELECT category_ID,category_name FROM main_category";
    $categoryList = $connection->query($query);
    while ($resultSet = $categoryList->fetch_assoc()) {
        echo '<option value="' . $resultSet['category_ID'] . '">' . $resultSet['category_name'] . '</option>';
    }
    $connection->close();
}

//get provider IDS
function getProviderID()
{
    $connection = mysqli_connect("localhost", "root", "", "mdc");
    $query = "SELECT p_ID FROM provider";
    $providerIDList = $connection->query($query);
    while ($resultSet = $providerIDList->fetch_assoc()) {
        echo '<option value="' . $resultSet['p_ID'] . '">' . $resultSet['p_ID'] . '</option>';
    }
    $connection->close();
}

//get All job companies
function getAllCompanies()
{
    $connection = mysqli_connect("localhost", "root", "", "mdc");
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
    $connection->close();
}

//delete Company
if (isset($_GET['btnDelete'])) {
    $connection = mysqli_connect("localhost", "root", "", "mdc");
    $companyID = $_GET['btnDelete'];
    $query = "DELETE FROM company WHERE company_ID = $companyID";
    $response = $connection->query($query);
    if ($response > 0 && $connection->affected_rows > 0) {
        $_SESSION['message'] = "Company Delete Successfully";
    } else {
        $_SESSION['message'] = "Company Not Delete Successfully";
    }
    $connection->close();
}

//edit company
if (isset($_GET['btnEdit'])) {
    $companyID = $_GET['btnEdit'];
    if (!(empty($companyID))) {
        $_SESSION['companyID'] = $companyID;
    } else {
        $_SESSION['message'] = "Please Click Edit button on table before Update.!";
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
        </div>
        <div>
            <form action="../../services/companyService.php" method="post" enctype="multipart/form-data">
                <img id="companyProfile"><br>
                <input type="file" name="profileImage" id="profile-image"
                       placeholder="Choose a Profile image" required="" capture>
                <button type="button" id="companyBtnRemove">Remove</button>
                <div>
                    <select name="provider_ID" id="companyProvider_ID" class="providerID">
                        <option disabled selected value="0">Provider ID</option>
                        <?php
                        getProviderID();
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
                    <!--                    <select name="category" id="select-id" class="mySelect">-->
                    <!--                        <option disabled selected value="0">Category</option>-->
                    <!--                        --><?php
                    //                        getCategoryName();
                    //                        ?>
                    <!--                    </select>-->
                </div>
                <div class="companyButtonGroup">
                    <button type="submit" id="companyBtnSubmit" name="btnAdd">Add</button>
                    <button type="submit" id="companyBtnUpdate" name="update" value="update">Update</button>
                    <button type="submit" id="companyBtnCancel" name="btnType" value="cancel">Cancel</button>
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
                $connection = mysqli_connect("localhost", "root", "", "mdc");
                if (isset($_GET['btnSearch'])) {
                    $companyID = $_GET['companyID'];
                    if (!(empty($companyID))) {
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
                    $connection->close();
                } else {
                    getAllCompanies();
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="../../assets/js/adminCompany.js"></script>
<script src="../../controllers/companyController.js"></script>



