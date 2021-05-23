<div id="seekerContainer">
    <div class="seekerSectionHeader">
        <h1>Job Seeker</h1>
        <span></span>
    </div>
    <div class="seekerFormDivContainer">
        <div class="seekerSearchDiv">
            <form action="" method="GET">
                <input type="text" placeholder="Seeker ID">
                <button type="submit" id="btnSearch">Search</button>
            </form>
        </div>
        <div class="seekerProfileDivContainer">
            <form action="" method="GET">
                <img id="seekerProfileSeeker">
                <input type="text" placeholder="Choose"
                       onfocus="(this.type='file')"
                       required
                       id="seekerProfilePic"
                >
                <button type="button" id="seekerBtnRemove">Remove</button>
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
                    <textarea name="Address" id="address" cols="30" rows="10" placeholder="Address"></textarea>
                </div>
                <div>
                    <input type="text" placeholder="Phone Number" name="tel">
                    <input type="text" placeholder="Date Of Birth" name="dob"
                           onfocus="(this.type='date')"
                           required
                    >
                </div>
                <div style="display: flex;">
                    <input type="password" placeholder="Password" name="password"><br>
                    <input type="password" placeholder="Confirm Password" name="conPassword">
                </div>
                <div>
                    <input type="text" placeholder="Upload CV here"
                           onfocus="(this.type='file')"
                           required
                           id="cvFile"
                    >
                    <button type="button" id="btnUpload">Upload</button>
                </div>
                <div class="seekerButtonGroup">
                    <button id="seekerBtnSubmit">Submit</button>
                    <button id="seekerBtnUpdate">Update</button>
                    <button id="seekerBtnCancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="seekerTableDiv">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Job Seeker Table</h1>
                <span></span>
            </div>
            <table class="table-responsive">
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
                    <th>Date Of Birth</th>
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
                        <i class="fas fa-trash-alt" style="color: red"></i>
                        <i class="fas fa-edit" style="color: #F0BB11"></i>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


