<div id="providerContainer">
    <div class="providerSectionHeader">
        <h1>Job Provider</h1>
        <span></span>
    </div>
    <div class="providerFormDivContainer">
        <div class="providerSearchDiv">
            <form action="" method="GET">
                <input type="text" placeholder="Provider ID">
                <button type="submit" id="pBtnSearch">Search</button>
            </form>
        </div>
        <div class="providerProfileDivContainer">
            <form action="" method="GET">
                <img id="providerProfile">
                <input type="text" placeholder="Choose"
                       onfocus="(this.type='file')"
                       required
                       id="providerProfilePic"
                >
                <button type="button" id="providerBtnRemove">Remove</button>
            </form>
        </div>
        <div>
            <form action="" method="GET">
                <div>
                    <input type="text" placeholder="User Name" name="userName">
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div>
                    <input type="text" placeholder="First Name" name="firstName">
                    <input type="text" placeholder="Last Name" name="lastName">
                </div>
                <div>
                    <textarea name="Address" id="pAddress" cols="30" rows="10" placeholder="Address"></textarea>
                </div>
                <div style="display: flex;">
                    <input type="text" placeholder="Phone Number" name="tel">

                    <input type="password" placeholder="Password" name="password"><br>
                    <input type="password" placeholder="Confirm Password" name="conPassword">
                </div>
                <div class="providerButtonGroup">
                    <button id="providerBtnSubmit">Submit</button>
                    <button id="providerBtnUpdate">Update</button>
                    <button id="providerBtnCancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="ProviderTableDiv">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Job Provider Table</h1>
                <span></span>
            </div>
            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>User Name</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Telephone</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>s001</td>
                    <td>iamge</td>
                    <td>Madhhush_99</td>
                    <td>Madhusha</td>
                    <td>Prasad</td>
                    <td>madushaprasad21@gmail.com</td>
                    <td>Kalutara</td>
                    <td>0764727839</td>
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
<script src="../../assets/js/adminProvider.js"></script>

