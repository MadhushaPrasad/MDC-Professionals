<?php

function getAllCategories()
{
    $connection = mysqli_connect("localhost", "root", "", "mdc");
    $categoryList = $connection->query("SELECT * FROM main_category m,sub_category s WHERE m.category_ID = s.sub_category_ID");
    while ($catArray = $categoryList->fetch_assoc()) {
        echo "<tr>" .
            "<td>" . $catArray['category_ID'] . "</td>" .
            "<td>" . $catArray['category_name'] . "</td>" .
            "<td>" . $catArray['sub_category_ID'] . "</td>" .
            "<td>" . $catArray['category_name'] . "</td>" .
            "</tr>";
    }
    $connection->close();
}

?>
<div id="categoryContainer">
    <div class="categorySectionHeader">
        <h1>Category</h1>
        <span></span>
    </div>
    <div class="categoryFormDivContainer">
        <div class="categorySearchDiv">
            <form action="" method="GET">
                <input type="text" placeholder="Category ID">
                <button type="submit" id="categoryBtnSearch">Search</button>
            </form>
        </div>
        <div>
            <form action="../../services/adminCategoryService.php" method="post">
                <div>
                    <input type="text" placeholder="Main Category" name="categoryName">
                </div>
                <div>
                    <input type="text" placeholder="Sub Category" name="Sub-Category">
                    <button id="newSubCategory" title="New Job Provider"><i class="fa fa-plus"></i></button>
                </div>
                <div class="categoryButtonGroup">
                    <button id="categoryBtnSubmit" name="addCategory">Add</button>
                    <button id="categoryBtnUpdate">Update</button>
                    <button id="categoryBtnCancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="categoryTableDiv">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Category Table</h1>
            </div>
            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Main Category</th>
                    <th>Sub Category ID</th>
                    <th>Sub Category</th>
                </tr>
                </thead>
                <tbody style="overflow-x: scroll">
                <?php
                getAllCategories();
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

