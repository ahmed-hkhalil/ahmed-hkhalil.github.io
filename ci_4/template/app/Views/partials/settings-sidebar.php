<?php
   $uri = new \CodeIgniter\HTTP\URI(current_url(true));
   $pages = $uri->getSegments();
   $page = $uri->getSegment(count($pages));
 ?>
<div class="sidebars settings-sidebar theiaStickySidebar" id="sidebar2">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu5" class="sidebar-menu">
			<ul>
				<li class="submenu-open">
					<ul>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'general-settings' || $page == 'security-settings' || $page == 'notification' || $page == 'connected-apps')?'active subdrop':'';?>"><i data-feather="settings"></i><span>General Settings</span><span class="menu-arrow"></span></a>
							<ul>
							<li><a href="<?php echo base_url(); ?>general-settings" class="<?php echo ($page == 'general-settings')?'active':'';?>">Profile</a></li>
							<li><a href="<?php echo base_url(); ?>security-settings" class="<?php echo ($page == 'security-settings')?'active':'';?>">Security</a></li>
							<li><a href="<?php echo base_url(); ?>notification" class="<?php echo ($page == 'notification')?'active':'';?>">Notifications</a></li>
							<li><a href="<?php echo base_url(); ?>connected-apps" class="<?php echo ($page == 'connected-apps')?'active':'';?>">Connected Apps</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'system-settings' || $page == 'company-settings' || $page == 'localization-settings' || $page == 'prefixes'|| $page == 'preference' || $page == 'appearance' || $page == 'social-authentication' || $page == 'language-settings')?'active subdrop':'';?>"><i data-feather="airplay"></i><span>Website Settings</span><span class="menu-arrow"></span></a>
							<ul>
							<li><a href="<?php echo base_url(); ?>system-settings" class="<?php echo ($page == 'system-settings')?'active':'';?>">System Settings</a></li>
							<li><a href="<?php echo base_url(); ?>company-settings" class="<?php echo ($page == 'company-settings')?'active':'';?>">Company Settings </a></li>
							<li><a href="<?php echo base_url(); ?>localization-settings" class="<?php echo ($page == 'localization-settings')?'active':'';?>">Localization</a></li>
							<li><a href="<?php echo base_url(); ?>prefixes" class="<?php echo ($page == 'prefixes')?'active':'';?>">Prefixes</a></li>
							<li><a href="<?php echo base_url(); ?>preference" class="<?php echo ($page == 'preference')?'active':'';?>">Preference</a></li>
							<li><a href="<?php echo base_url(); ?>appearance" class="<?php echo ($page == 'appearance')?'active':'';?>">Appearance</a></li>
							<li><a href="<?php echo base_url(); ?>social-authentication" class="<?php echo ($page == 'social-authentication')?'active':'';?>">Social Authentication</a></li>
							<li><a href="<?php echo base_url(); ?>language-settings" class="<?php echo ($page == 'language-settings')?'active':'';?>">Language</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'invoice-settings' || $page == 'printer-settings' || $page == 'pos-settings' || $page == 'custom-fields')?'active subdrop':'';?>"><i data-feather="archive"></i><span>App Settings</span><span class="menu-arrow"></span></a>
							<ul>
							<li><a href="<?php echo base_url(); ?>invoice-settings" class="<?php echo ($page == 'invoice-settings')?'active':'';?>">Invoice</a></li>
							<li><a href="<?php echo base_url(); ?>printer-settings" class="<?php echo ($page == 'printer-settings')?'active':'';?>">Printer </a></li>
							<li><a href="<?php echo base_url(); ?>pos-settings" class="<?php echo ($page == 'pos-settings')?'active':'';?>">POS</a></li>
							<li><a href="<?php echo base_url(); ?>custom-fields" class="<?php echo ($page == 'custom-fields')?'active':'';?>">Custom Fields</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'email-settings' || $page == 'sms-settings' || $page == 'otp-settings' || $page == 'gdpr-settings')?'active subdrop':'';?>"><i data-feather="server"></i><span>System Settings</span><span class="menu-arrow"></span></a>
							<ul>
							<li><a href="<?php echo base_url(); ?>email-settings" class="<?php echo ($page == 'email-settings')?'active':'';?>">Email</a></li>
							<li><a href="<?php echo base_url(); ?>sms-gateway" class="<?php echo ($page == 'sms-settings')?'active':'';?>">SMS Gateways</a></li>
							<li><a href="<?php echo base_url(); ?>otp-settings" class="<?php echo ($page == 'otp-settings')?'active':'';?>">OTP</a></li>
							<li><a href="<?php echo base_url(); ?>gdpr-settings" class="<?php echo ($page == 'gdpr-settings')?'active':'';?>">GDPR Cookies</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'payment-gateway-settings' || $page == 'bank-settings-grid' || $page == 'tax-rates' || $page == 'currency-settings')?'active subdrop':'';?>"><i data-feather="credit-card"></i><span>Financial Settings</span><span class="menu-arrow"></span></a>
							<ul>
							<li><a href="<?php echo base_url(); ?>payment-gateway-settings" class="<?php echo ($page == 'payment-gateway-settings')?'active':'';?>">Payment Gateway</a></li>
							<li><a href="<?php echo base_url(); ?>bank-settings-grid" class="<?php echo ($page == 'bank-settings-grid')?'active':'';?>">Bank Accounts </a></li>
							<li><a href="<?php echo base_url(); ?>tax-rates" class="<?php echo ($page == 'tax-rates')?'active':'';?>">Tax Rates</a></li>
							<li><a href="<?php echo base_url(); ?>currency-settings" class="<?php echo ($page == 'currency-settings')?'active':'';?>">Currencies</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'storage-settings' || $page == 'ban-ip-address')?'active subdrop':'';?>"><i data-feather="layout"></i><span>Other Settings</span><span class="menu-arrow"></span></a>
							<ul>
								<li><a href="<?php echo base_url(); ?>storage-settings" class="<?php echo ($page == 'storage-settings')?'active':'';?>">Storage</a></li>
								<li><a href="<?php echo base_url(); ?>ban-ip-address" class="<?php echo ($page == 'ban-ip-address')?'active':'';?>">Ban IP Address </a></li>
							</ul>
						</li>
					</ul>								
				</li>							
			</ul>
		</div>
	</div>
</div>