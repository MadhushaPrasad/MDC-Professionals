<?php
require '../../../MDC-Professionals/config/DBConnection.php';
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
                <button type="submit" id="companyBtnSearch" name="companySearchId">Search</button>
                <?php
                global $row;
                if (isset($_GET['companySearchId'])) {
                    $companyID = $_GET['companyID'];

                    if (empty($companyID)) {
                        ?>
                        <script>
                            console.log('hello');
                        </script>
                        <?php
                    }
                    $searchQuery = "SELECT * FROM student WHERE id = $companyID";
                    $student = $connection->query($searchQuery);

                    while ($resultSet = $student->fetch_assoc()) {
                        $row .= '<tr>';
                        $row .= '<td>' . $resultSet['id'] . '</td>';
                        $row .= '<td>' . $resultSet['name'] . '</td>';
                        $row .= '<tr>';
                    }
                }
                ?>
            </form>
        </div>
        <div class="companyProfileDivContainer">
            <form action="" method="GET">
                <img id="companyProfile">
                <input type="text" placeholder="Choose"
                       onfocus="(this.type='file')"
                       required
                       id="companyProfilePic"
                >
                <button type="button" id="companyBtnRemove">Remove</button>
            </form>
        </div>
        <div>
            <form action="" method="GET">
                <div>
                    <select name="provider_ID" id="companyProvider_ID" class="providerID">
                        <option disabled selected value="0">Provider ID</option>
                        <option
                                value="1">pro001
                        </option>
                        <option
                                value="2">pro002
                        </option>
                        <option
                                value="3">pro003
                        </option>
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
                    <select name="services" id="select-id" class="mySelect">
                        <option disabled selected value="0">Category</option>
                        <option
                                value="1">Web Development
                        </option>
                        <option
                                value="2">UI/UX
                        </option>
                    </select>
                </div>
                <div class="companyButtonGroup">
                    <button id="companyBtnSubmit">Add</button>
                    <button id="companyBtnUpdate">Update</button>
                    <button id="companyBtnCancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="companyTableDiv">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Company Table</h1>
                <span></span>
            </div>
            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>Company ID</th>
                    <th>Provider ID</th>
                    <th>Image</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Web Url</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Category</th>
                </tr>
                </thead>
                <tbody style="overflow-x: scroll">
                <tr>
                    <?php
                    echo $row;
                    ?>
                    <td>images</td>
                    <td>Sentura</td>
                    <td>madushaprasad21@gmail.com</td>
                    <td>senturaTecnologies.com</td>
                    <td>This is the Technological Company</td>
                    <td>Kalutara</td>
                    <td>Open</td>
                    <td>Web Designing</td>
                    <td>
                        <i class="fas fa-trash-alt" style="color: red;cursor: pointer;"></i>
                        <i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="../../assets/js/adminCompany.js"></script>
<script src="../../controllers/companyController.js"></script>

