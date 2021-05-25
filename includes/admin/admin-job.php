<div id="jobContainer">
    <div class="jobSectionHeader">
        <h1>Job</h1>
        <span></span>
    </div>
    <div class="jobFormDivContainer">
        <div class="jobSearchDiv">
            <form action="" method="GET">
                <input type="text" placeholder="Job ID">
                <button type="submit" id="jobBtnSearch">Search</button>
            </form>
        </div>
        <div class="jobProfileDivContainer">
            <form action="" method="GET">
                <img id="jobProfile">
                <input type="text" placeholder="Choose"
                       onfocus="(this.type='file')"
                       required
                       id="jobProfilePic"
                >
                <button type="button" id="jobBtnRemove">Remove</button>
            </form>
        </div>
        <div>
            <form action="" method="GET">
                <div>
                    <select name="provider_ID" id="jobProvider_ID" class="providerID">
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
                    <input type="text" placeholder="Job Title" name="jobTitle">
                </div>
                <div>
                    <textarea name="description" id="jobDescription" cols="30" rows="10"
                              placeholder="Description"></textarea>
                </div>
                <div>
                    <select name="services" id="job-category" class="jobCategory">
                        <option disabled selected value="0">Category</option>
                        <option
                                value="1">Web Development
                        </option>
                        <option
                                value="2">UI/UX
                        </option>
                    </select>
                    <select name="services" id="jobSubCategory" class="jobSubCategory">
                        <option disabled selected value="0">Sub Category</option>
                        <option
                                value="1">Web Development
                        </option>
                        <option
                                value="2">UI/UX
                        </option>
                    </select>
                </div>
                <div>
                    <select name="status" id="jobStatus" class="jobStatus">
                        <option disabled selected value="0">Status</option>
                        <option
                                value="1">Pending
                        </option>
                        <option
                                value="2">In Progress
                        </option>
                        <option
                                value="3">Close
                        </option>
                    </select>
                    <input type="text" placeholder="Price" name="price">
                </div>
                <div class="jobButtonGroup">
                    <button id="jobBtnSubmit">Add</button>
                    <button id="jobBtnUpdate">Update</button>
                    <button id="jobBtnCancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="jobTableDiv">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Job Table</h1>
                <span></span>
            </div>
            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>Job ID</th>
                    <th>Image</th>
                    <th>Provider ID</th>
                    <th>Job Title</th>
                    <th>Description</th>
                    <th>Main Category</th>
                    <th>Sub Category</th>
                    <th>Status</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody style="overflow-x: scroll">
                <tr>
                    <td>Com001</td>
                    <td>Pro001</td>
                    <td>images</td>
                    <td>Sentura</td>
                    <td>madushaprasad21@gmail.com</td>
                    <td>senturaTecnologies.com</td>
                    <td>This is the Technological Company</td>
                    <td>Kalutara</td>
                    <td>Open</td>
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
<script src="../../assets/js/adminJob.js"></script>

