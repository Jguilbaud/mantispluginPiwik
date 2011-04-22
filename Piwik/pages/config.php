<?php
# MantisBT - a php based bugtracking system
# Copyright (C) 2002 - 2010  MantisBT Team - mantisbt-dev@lists.sourceforge.net
# MantisBT is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# MantisBT is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.

auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

html_page_top( 'Piwik : Configuration' );

print_manage_menu( );
?>
<br/>
<form action="<?php echo plugin_page( 'config_edit' )?>" method="post">

<?php echo form_security_field( 'plugin_piwik_config_edit' ) ?>
<table align="center" class="width75" cellspacing="1">

<tr>
	<td class="form-title" colspan="3">
		Piwik : Configuration
	</td>
</tr>

<tr <?php echo helper_alternate_class( )?>>
	<td class="category">
				<?php echo plugin_lang_get( 'piwikurl' )?>
	</td>	
	<td class="center" colspan="2">
		http(s)://<input type="text" name="url" value="<?php echo plugin_config_get( 'piwikUrl' )?>" />/
	</td>
</tr>

<tr <?php echo helper_alternate_class()?>>
	<td class="category">
		<?php echo plugin_lang_get( 'idSite' )?>
	</td>
	<td class="center" colspan="2">
		<input type="text" name="idsite" value="<?php echo plugin_config_get( 'idSite' )?>" />
	</td>	
</tr>

<tr>
	<td class="center" colspan="3">
		<input type="submit" class="button" value="<?php echo lang_get( 'change_configuration' )?>" />
	</td>
</tr>

</table>

<form>

<?php
html_page_bottom();
