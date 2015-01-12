<?php /* Smarty version 2.6.6, created on 2014-10-18 05:50:39
         compiled from administrator/members_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'administrator/members_edit.tpl', 58, false),array('modifier', 'date_format', 'administrator/members_edit.tpl', 352, false),)), $this); ?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Members</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="members_manage.php" id="isoft_group_1" name="group_1" title="Manage Members" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Members
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Edit Member</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Member ID </label></td>
                                                        <td class="value">
                                                        	<?php echo $this->_tpl_vars['member']['USERID']; ?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Username </label></td>
                                                        <td class="value">
                                                        	<input id="username" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[USERNAME OF THE MEMBER]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">E-Mail </label></td>
                                                        <td class="value">
                                                        	<input id="email" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['email'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[EMAIL ADDRESS OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="fullname">Full Name </label></td>
                                                        <td class="value">
                                                        	<input id="fullname" name="fullname" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['fullname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[FIRST NAME OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">About Me </label></td>
                                                        <td class="value">
                                                        	<textarea id="vdescription" name="vdescription" class=" textarea" type="textarea" ><?php echo ((is_array($_tmp=$this->_tpl_vars['member']['description'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
                                                        </td>
                                                        <td class="scope-label">[DESCRIPTION OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="fullname">Website </label></td>
                                                        <td class="value">
                                                        	<input id="website" name="website" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['website'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[WEBSITE OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Country </label></td>
                                                        <td class="value">
                                                        	<select name="country" id="country_selector">
                                                            <option value=""><?php echo $this->_tpl_vars['lang63']; ?>
</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AF'): ?>selected<?php endif; ?> value="AF">Afghanistan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AX'): ?>selected<?php endif; ?> value="AX">Åland Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AL'): ?>selected<?php endif; ?> value="AL">Albania</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'DZ'): ?>selected<?php endif; ?> value="DZ">Algeria</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AS'): ?>selected<?php endif; ?> value="AS">American Samoa</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AD'): ?>selected<?php endif; ?> value="AD">Andorra</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AO'): ?>selected<?php endif; ?> value="AO">Angola</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AI'): ?>selected<?php endif; ?> value="AI">Anguilla</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AQ'): ?>selected<?php endif; ?> value="AQ">Antarctica</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AG'): ?>selected<?php endif; ?> value="AG">Antigua and Barbuda</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AR'): ?>selected<?php endif; ?> value="AR">Argentina</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AM'): ?>selected<?php endif; ?> value="AM">Armenia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AW'): ?>selected<?php endif; ?> value="AW">Aruba</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AU'): ?>selected<?php endif; ?> value="AU">Australia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AT'): ?>selected<?php endif; ?> value="AT">Austria</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AZ'): ?>selected<?php endif; ?> value="AZ">Azerbaijan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BS'): ?>selected<?php endif; ?> value="BS">Bahamas</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BH'): ?>selected<?php endif; ?> value="BH">Bahrain</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BD'): ?>selected<?php endif; ?> value="BD">Bangladesh</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BB'): ?>selected<?php endif; ?> value="BB">Barbados</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BY'): ?>selected<?php endif; ?> value="BY">Belarus</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BE'): ?>selected<?php endif; ?> value="BE">Belgium</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BZ'): ?>selected<?php endif; ?> value="BZ">Belize</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BJ'): ?>selected<?php endif; ?> value="BJ">Benin</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BM'): ?>selected<?php endif; ?> value="BM">Bermuda</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BT'): ?>selected<?php endif; ?> value="BT">Bhutan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BO'): ?>selected<?php endif; ?> value="BO">Bolivia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BA'): ?>selected<?php endif; ?> value="BA">Bosnia and Herzegovina</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BW'): ?>selected<?php endif; ?> value="BW">Botswana</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BV'): ?>selected<?php endif; ?> value="BV">Bouvet Island</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BR'): ?>selected<?php endif; ?> value="BR">Brazil</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'IO'): ?>selected<?php endif; ?> value="IO">British Indian Ocean Territory</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BN'): ?>selected<?php endif; ?> value="BN">Brunei Darussalam</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BG'): ?>selected<?php endif; ?> value="BG">Bulgaria</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BF'): ?>selected<?php endif; ?> value="BF">Burkina Faso</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'BI'): ?>selected<?php endif; ?> value="BI">Burundi</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KH'): ?>selected<?php endif; ?> value="KH">Cambodia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CM'): ?>selected<?php endif; ?> value="CM">Cameroon</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CA'): ?>selected<?php endif; ?> value="CA">Canada</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CV'): ?>selected<?php endif; ?> value="CV">Cape Verde</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KY'): ?>selected<?php endif; ?> value="KY">Cayman Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CF'): ?>selected<?php endif; ?> value="CF">Central African Republic</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TD'): ?>selected<?php endif; ?> value="TD">Chad</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CL'): ?>selected<?php endif; ?> value="CL">Chile</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CN'): ?>selected<?php endif; ?> value="CN">China</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CX'): ?>selected<?php endif; ?> value="CX">Christmas Island</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CC'): ?>selected<?php endif; ?> value="CC">Cocos (Keeling) Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CO'): ?>selected<?php endif; ?> value="CO">Colombia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KM'): ?>selected<?php endif; ?> value="KM">Comoros</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CG'): ?>selected<?php endif; ?> value="CG">Congo</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CD'): ?>selected<?php endif; ?> value="CD">Congo, The Democratic Republic of The</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CK'): ?>selected<?php endif; ?> value="CK">Cook Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CR'): ?>selected<?php endif; ?> value="CR">Costa Rica</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CI'): ?>selected<?php endif; ?> value="CI">Cote D'ivoire</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'HR'): ?>selected<?php endif; ?> value="HR">Croatia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CU'): ?>selected<?php endif; ?> value="CU">Cuba</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CY'): ?>selected<?php endif; ?> value="CY">Cyprus</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CZ'): ?>selected<?php endif; ?> value="CZ">Czech Republic</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'DK'): ?>selected<?php endif; ?> value="DK">Denmark</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'DJ'): ?>selected<?php endif; ?> value="DJ">Djibouti</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'DM'): ?>selected<?php endif; ?> value="DM">Dominica</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'DO'): ?>selected<?php endif; ?> value="DO">Dominican Republic</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'EC'): ?>selected<?php endif; ?> value="EC">Ecuador</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'EG'): ?>selected<?php endif; ?> value="EG">Egypt</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SV'): ?>selected<?php endif; ?> value="SV">El Salvador</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GQ'): ?>selected<?php endif; ?> value="GQ">Equatorial Guinea</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'ER'): ?>selected<?php endif; ?> value="ER">Eritrea</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'EE'): ?>selected<?php endif; ?> value="EE">Estonia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'ET'): ?>selected<?php endif; ?> value="ET">Ethiopia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'FK'): ?>selected<?php endif; ?> value="FK">Falkland Islands (Malvinas)</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'FO'): ?>selected<?php endif; ?> value="FO">Faroe Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'FJ'): ?>selected<?php endif; ?> value="FJ">Fiji</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'FI'): ?>selected<?php endif; ?> value="FI">Finland</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'FR'): ?>selected<?php endif; ?> value="FR">France</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GR'): ?>selected<?php endif; ?> value="GF">French Guiana</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PF'): ?>selected<?php endif; ?> value="PF">French Polynesia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TF'): ?>selected<?php endif; ?> value="TF">French Southern Territories</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GA'): ?>selected<?php endif; ?> value="GA">Gabon</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GM'): ?>selected<?php endif; ?> value="GM">Gambia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GE'): ?>selected<?php endif; ?> value="GE">Georgia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'DE'): ?>selected<?php endif; ?> value="DE">Germany</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GH'): ?>selected<?php endif; ?> value="GH">Ghana</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GI'): ?>selected<?php endif; ?> value="GI">Gibraltar</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GR'): ?>selected<?php endif; ?> value="GR">Greece</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GL'): ?>selected<?php endif; ?> value="GL">Greenland</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GD'): ?>selected<?php endif; ?> value="GD">Grenada</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GP'): ?>selected<?php endif; ?> value="GP">Guadeloupe</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GU'): ?>selected<?php endif; ?> value="GU">Guam</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GT'): ?>selected<?php endif; ?> value="GT">Guatemala</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GG'): ?>selected<?php endif; ?> value="GG">Guernsey</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GN'): ?>selected<?php endif; ?> value="GN">Guinea</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GW'): ?>selected<?php endif; ?> value="GW">Guinea-bissau</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GY'): ?>selected<?php endif; ?> value="GY">Guyana</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'HT'): ?>selected<?php endif; ?> value="HT">Haiti</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'HM'): ?>selected<?php endif; ?> value="HM">Heard Island and Mcdonald Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'VA'): ?>selected<?php endif; ?> value="VA">Holy See (Vatican City State)</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'HN'): ?>selected<?php endif; ?> value="HN">Honduras</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'HK'): ?>selected<?php endif; ?> value="HK">Hong Kong</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'HU'): ?>selected<?php endif; ?> value="HU">Hungary</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'IS'): ?>selected<?php endif; ?> value="IS">Iceland</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'IN'): ?>selected<?php endif; ?> value="IN">India</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'ID'): ?>selected<?php endif; ?> value="ID">Indonesia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'IR'): ?>selected<?php endif; ?> value="IR">Iran, Islamic Republic of</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'IQ'): ?>selected<?php endif; ?> value="IQ">Iraq</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'IE'): ?>selected<?php endif; ?> value="IE">Ireland</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'IM'): ?>selected<?php endif; ?> value="IM">Isle of Man</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'IL'): ?>selected<?php endif; ?> value="IL">Israel</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'IT'): ?>selected<?php endif; ?> value="IT">Italy</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'JM'): ?>selected<?php endif; ?> value="JM">Jamaica</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'JP'): ?>selected<?php endif; ?> value="JP">Japan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'JE'): ?>selected<?php endif; ?> value="JE">Jersey</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'JO'): ?>selected<?php endif; ?> value="JO">Jordan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KZ'): ?>selected<?php endif; ?> value="KZ">Kazakhstan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KE'): ?>selected<?php endif; ?> value="KE">Kenya</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KI'): ?>selected<?php endif; ?> value="KI">Kiribati</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KP'): ?>selected<?php endif; ?> value="KP">Korea, Democratic People's Republic of</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KR'): ?>selected<?php endif; ?> value="KR">Korea, Republic of</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KW'): ?>selected<?php endif; ?> value="KW">Kuwait</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KG'): ?>selected<?php endif; ?> value="KG">Kyrgyzstan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LA'): ?>selected<?php endif; ?> value="LA">Lao People's Democratic Republic</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LV'): ?>selected<?php endif; ?> value="LV">Latvia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LB'): ?>selected<?php endif; ?> value="LB">Lebanon</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LS'): ?>selected<?php endif; ?> value="LS">Lesotho</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LR'): ?>selected<?php endif; ?> value="LR">Liberia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LY'): ?>selected<?php endif; ?> value="LY">Libyan Arab Jamahiriya</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LI'): ?>selected<?php endif; ?> value="LI">Liechtenstein</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LT'): ?>selected<?php endif; ?> value="LT">Lithuania</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LU'): ?>selected<?php endif; ?> value="LU">Luxembourg</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MO'): ?>selected<?php endif; ?> value="MO">Macao</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MK'): ?>selected<?php endif; ?> value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MG'): ?>selected<?php endif; ?> value="MG">Madagascar</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MW'): ?>selected<?php endif; ?> value="MW">Malawi</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MY'): ?>selected<?php endif; ?> value="MY">Malaysia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MV'): ?>selected<?php endif; ?> value="MV">Maldives</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'ML'): ?>selected<?php endif; ?> value="ML">Mali</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MT'): ?>selected<?php endif; ?> value="MT">Malta</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MH'): ?>selected<?php endif; ?> value="MH">Marshall Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MQ'): ?>selected<?php endif; ?> value="MQ">Martinique</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MR'): ?>selected<?php endif; ?> value="MR">Mauritania</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MU'): ?>selected<?php endif; ?> value="MU">Mauritius</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'YT'): ?>selected<?php endif; ?> value="YT">Mayotte</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MX'): ?>selected<?php endif; ?> value="MX">Mexico</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'FM'): ?>selected<?php endif; ?> value="FM">Micronesia, Federated States of</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MD'): ?>selected<?php endif; ?> value="MD">Moldova, Republic of</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MC'): ?>selected<?php endif; ?> value="MC">Monaco</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MN'): ?>selected<?php endif; ?> value="MN">Mongolia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'ME'): ?>selected<?php endif; ?> value="ME">Montenegro</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MS'): ?>selected<?php endif; ?> value="MS">Montserrat</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MA'): ?>selected<?php endif; ?> value="MA">Morocco</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MZ'): ?>selected<?php endif; ?> value="MZ">Mozambique</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MM'): ?>selected<?php endif; ?> value="MM">Myanmar</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NA'): ?>selected<?php endif; ?> value="NA">Namibia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NR'): ?>selected<?php endif; ?> value="NR">Nauru</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NP'): ?>selected<?php endif; ?> value="NP">Nepal</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NL'): ?>selected<?php endif; ?> value="NL">Netherlands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AN'): ?>selected<?php endif; ?> value="AN">Netherlands Antilles</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NC'): ?>selected<?php endif; ?> value="NC">New Caledonia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NZ'): ?>selected<?php endif; ?> value="NZ">New Zealand</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NI'): ?>selected<?php endif; ?> value="NI">Nicaragua</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NE'): ?>selected<?php endif; ?> value="NE">Niger</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NG'): ?>selected<?php endif; ?> value="NG">Nigeria</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NU'): ?>selected<?php endif; ?> value="NU">Niue</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NF'): ?>selected<?php endif; ?> value="NF">Norfolk Island</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'MP'): ?>selected<?php endif; ?> value="MP">Northern Mariana Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'NO'): ?>selected<?php endif; ?> value="NO">Norway</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'OM'): ?>selected<?php endif; ?> value="OM">Oman</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PK'): ?>selected<?php endif; ?> value="PK">Pakistan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PW'): ?>selected<?php endif; ?> value="PW">Palau</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PS'): ?>selected<?php endif; ?> value="PS">Palestinian Territory, Occupied</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PA'): ?>selected<?php endif; ?> value="PA">Panama</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PG'): ?>selected<?php endif; ?> value="PG">Papua New Guinea</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PY'): ?>selected<?php endif; ?> value="PY">Paraguay</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PE'): ?>selected<?php endif; ?> value="PE">Peru</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PH'): ?>selected<?php endif; ?> value="PH">Philippines</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PN'): ?>selected<?php endif; ?> value="PN">Pitcairn</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PL'): ?>selected<?php endif; ?> value="PL">Poland</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PT'): ?>selected<?php endif; ?> value="PT">Portugal</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PR'): ?>selected<?php endif; ?> value="PR">Puerto Rico</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'QA'): ?>selected<?php endif; ?> value="QA">Qatar</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'RE'): ?>selected<?php endif; ?> value="RE">Reunion</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'RO'): ?>selected<?php endif; ?> value="RO">Romania</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'RU'): ?>selected<?php endif; ?> value="RU">Russian Federation</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'RW'): ?>selected<?php endif; ?> value="RW">Rwanda</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SH'): ?>selected<?php endif; ?> value="SH">Saint Helena</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'KN'): ?>selected<?php endif; ?> value="KN">Saint Kitts and Nevis</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LC'): ?>selected<?php endif; ?> value="LC">Saint Lucia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'PM'): ?>selected<?php endif; ?> value="PM">Saint Pierre and Miquelon</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'VC'): ?>selected<?php endif; ?> value="VC">Saint Vincent and The Grenadines</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'WS'): ?>selected<?php endif; ?> value="WS">Samoa</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SM'): ?>selected<?php endif; ?> value="SM">San Marino</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'ST'): ?>selected<?php endif; ?> value="ST">Sao Tome and Principe</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SA'): ?>selected<?php endif; ?> value="SA">Saudi Arabia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SN'): ?>selected<?php endif; ?> value="SN">Senegal</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'RS'): ?>selected<?php endif; ?> value="RS">Serbia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SC'): ?>selected<?php endif; ?> value="SC">Seychelles</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SL'): ?>selected<?php endif; ?> value="SL">Sierra Leone</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SG'): ?>selected<?php endif; ?> value="SG">Singapore</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SK'): ?>selected<?php endif; ?> value="SK">Slovakia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SI'): ?>selected<?php endif; ?> value="SI">Slovenia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SB'): ?>selected<?php endif; ?> value="SB">Solomon Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SO'): ?>selected<?php endif; ?> value="SO">Somalia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'ZA'): ?>selected<?php endif; ?> value="ZA">South Africa</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GS'): ?>selected<?php endif; ?> value="GS">South Georgia and The South Sandwich Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'ES'): ?>selected<?php endif; ?> value="ES">Spain</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'LK'): ?>selected<?php endif; ?> value="LK">Sri Lanka</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SD'): ?>selected<?php endif; ?> value="SD">Sudan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SR'): ?>selected<?php endif; ?> value="SR">Suriname</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SJ'): ?>selected<?php endif; ?> value="SJ">Svalbard and Jan Mayen</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SZ'): ?>selected<?php endif; ?> value="SZ">Swaziland</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SE'): ?>selected<?php endif; ?> value="SE">Sweden</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'CH'): ?>selected<?php endif; ?> value="CH">Switzerland</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'SY'): ?>selected<?php endif; ?> value="SY">Syrian Arab Republic</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TW'): ?>selected<?php endif; ?> value="TW">Taiwan, Province of China</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TJ'): ?>selected<?php endif; ?> value="TJ">Tajikistan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TZ'): ?>selected<?php endif; ?> value="TZ">Tanzania, United Republic of</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TH'): ?>selected<?php endif; ?> value="TH">Thailand</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TL'): ?>selected<?php endif; ?> value="TL">Timor-leste</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TG'): ?>selected<?php endif; ?> value="TG">Togo</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TK'): ?>selected<?php endif; ?> value="TK">Tokelau</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TO'): ?>selected<?php endif; ?> value="TO">Tonga</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TT'): ?>selected<?php endif; ?> value="TT">Trinidad and Tobago</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TN'): ?>selected<?php endif; ?> value="TN">Tunisia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TR'): ?>selected<?php endif; ?> value="TR">Turkey</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TM'): ?>selected<?php endif; ?> value="TM">Turkmenistan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TC'): ?>selected<?php endif; ?> value="TC">Turks and Caicos Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'TV'): ?>selected<?php endif; ?> value="TV">Tuvalu</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'UG'): ?>selected<?php endif; ?> value="UG">Uganda</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'UA'): ?>selected<?php endif; ?> value="UA">Ukraine</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'AE'): ?>selected<?php endif; ?> value="AE">United Arab Emirates</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'GB'): ?>selected<?php endif; ?> value="GB">United Kingdom</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'US'): ?>selected<?php endif; ?> value="US">United States</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'UM'): ?>selected<?php endif; ?> value="UM">United States Minor Outlying Islands</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'UY'): ?>selected<?php endif; ?> value="UY">Uruguay</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'UZ'): ?>selected<?php endif; ?> value="UZ">Uzbekistan</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'VA'): ?>selected<?php endif; ?> value="VU">Vanuatu</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'VE'): ?>selected<?php endif; ?> value="VE">Venezuela</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'VN'): ?>selected<?php endif; ?> value="VN">Viet Nam</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'VG'): ?>selected<?php endif; ?> value="VG">Virgin Islands, British</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'VI'): ?>selected<?php endif; ?> value="VI">Virgin Islands, U.S.</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'WF'): ?>selected<?php endif; ?> value="WF">Wallis and Futuna</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'EH'): ?>selected<?php endif; ?> value="EH">Western Sahara</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'YE'): ?>selected<?php endif; ?> value="YE">Yemen</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'ZM'): ?>selected<?php endif; ?> value="ZM">Zambia</option>
                                                            <option  <?php if ($this->_tpl_vars['member']['country'] == 'ZW'): ?>selected<?php endif; ?> value="ZW">Zimbabwe</option>   
                                                            </select>                      
                                                        </td>
                                                        <td class="scope-label">[MEMBER COUNTRY]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Date Joined </label></td>
                                                        <td class="value">
                                                        	<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %e, %Y") : smarty_modifier_date_format($_tmp, "%b %e, %Y")); ?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Last Login </label></td>
                                                        <td class="value">
                                                        	<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['lastlogin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %e, %Y") : smarty_modifier_date_format($_tmp, "%b %e, %Y")); ?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Verified E-Mail </label></td>
                                                        <td class="value">
                                                        	<select name="verified" id="verified">
                                                            <option value="1" <?php if ($this->_tpl_vars['member']['verified'] == 1): ?>selected<?php endif; ?>>Yes</option>
                                                            <option value="0" <?php if ($this->_tpl_vars['member']['verified'] == 0): ?>selected<?php endif; ?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[CONFIRMED E-MAIL ADDRESS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Active </label></td>
                                                        <td class="value">
                                                        	<select name="status" id="status">
                                                            <option value="1" <?php if ($this->_tpl_vars['member']['status'] == 1): ?>selected<?php endif; ?>>Yes</option>
                                                            <option value="0" <?php if ($this->_tpl_vars['member']['status'] == 0): ?>selected<?php endif; ?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ACTIVE MEMBER ACCOUNT]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">New Password </label></td>
                                                        <td class="value">
                                                        	<input id="newpass2" name="newpass2" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[ONLY FILL THIS OUT IF YOU WISH TO CHANGE THE MEMBER'S CURRENT PASSWORD]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Signup IP </label></td>
                                                        <td class="value">
                                                        	<a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/bans_ip_add.php?add=<?php echo $this->_tpl_vars['member']['ip']; ?>
" target="_blank"><?php echo $this->_tpl_vars['member']['ip']; ?>
</a>
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Last IP </label></td>
                                                        <td class="value">
                                                        	<a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/bans_ip_add.php?add=<?php echo $this->_tpl_vars['member']['lip']; ?>
" target="_blank"><?php echo $this->_tpl_vars['member']['lip']; ?>
</a>
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </fieldset>
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                               
                                
                                
                                
    						</li>
    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_1', []);
                        </script>
                        
					</div>
                    
					<div class="main-col" id="content">
						<div class="main-col-inner">
							<div id="messages">
                            <?php if ($this->_tpl_vars['message'] != "" || $this->_tpl_vars['error'] != ""): ?>
                            	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administrator/show_message.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            <?php endif; ?>
                            </div>

                            <div class="content-header">
                               <h3 class="icon-head head-products">Members - Edit Member</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="members_edit.php?USERID=<?php echo $_REQUEST['USERID']; ?>
" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>