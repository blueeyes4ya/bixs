
<div class="admin-container">
    <?php $this->load->view('template/messageTemplate'); ?>
    <div class="ContentSpace"></div>
    <?php echo form_open('') ?>

    <div class="ContentHead">Add User </div>
    <div class="ContentDiv">
        <div class="contentLabel">Company :</div>
        <div class="contentControl"> 
            <input type="text" id="txtCompany" name="txtCompany" />
        </div>
        <div class="contentBreak"></div>
        <div class="contentLabel">First Name :</div>
        <div class="contentControl"> 
            <input type="text" id="txtFirstName" name="txtFirstName" />
        </div>
        <div class="contentBreak"></div>
        <div class="contentLabel">Last Name :</div>
        <div class="contentControl"> 
            <input type="text" id="txtLastName" name="txtLastName" />
        </div>
        <div class="contentBreak"></div>
        <div class="contentLabel">Email :</div>
        <div class="contentControl"> 
            <input type="text" id="txtEmail" name="txtEmail" />
        </div>
        <div class="contentBreak"></div>
        <div class="contentLabel">Password :</div>
        <div class="contentControl"> 
            <input type="text" id="txtPassword" name="txtPassword" />
        </div>
        <div class="contentBreak"></div>
        <div class="contentLabel">Role :</div>
        <div class="contentControl"> 
            <input type="text" id="txtRole" name="txtRole" />
        </div>
        <div class="contentBreak"></div>
        <div class="contentLabel">Profile :</div>
        <div class="contentControl"> 
            <?php
            //admin', 'standard
            $options = array(
                'admin' => 'admin',
                'standard' => 'standard'
            );
            
            echo form_dropdown('ddwnProfile', $options, 'standard', 'id="ddwnProfile" autocomplete="off" ');
            ?>
        </div>
        <div class="contentBreak"></div>

        <div class="contentLabel">&nbsp;</div>
        <div class="contentControl">
            <input type='button' value='Save' id="btn_AddUser" name="btn_AddUser" /></div>
        <div class="contentBreak"></div>

        <div class="contentBreak"></div>

    </div>

    <div class="ContentSpace"></div>
    <?php
    $string = "</div>";
    echo form_close($string);
    ?>