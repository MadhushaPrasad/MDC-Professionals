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
            <form action="" method="GET">
                <div>
                    <input type="text" placeholder="Main Category" name="categoryName">
                </div>
                <div>
                    <input type="text" placeholder="Sub Category" name="Sub Category">
                    <button id="newSubCategory" title="New Job Provider"><i class="fa fa-plus"></i></button>
                </div>
                <div class="categoryButtonGroup">
                    <button id="categoryBtnSubmit">Add</button>
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
                <span></span>
            </div>
            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Main Category</th>
                    <th>Sub Category</th>
                </tr>
                </thead>
                <tbody style="overflow-x: scroll">
                <tr>
                    <td>Com001</td>
                    <td>madushaprasad21@gmail.com</td>
                    <td>
                        <ul>
                            <li>senturaTecnologies.com</li>
                            <li>senturaTecnologies.com</li>
                            <li>senturaTecnologies.com</li>
                        </ul>
                    </td>
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

