<?php

/**
 * Copyright (C) 2013 Apocalypsecore <https://Apocalypsecore.tk>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 **/

class Media extends Controller {

	public function main() {
		WoW_Template::SetPageData('body_class', sprintf('%s  media-content', WoW_Locale::GetLocale(LOCALE_DOUBLE)));
		WoW_Template::SetTemplateTheme('wow');
		$url_data = WoW::GetUrlData('media');
		if(empty($url_data['action1'])) {
            WoW_Template::SetPageIndex('media');
            WoW_Template::SetPageData('page', 'media');
        }else{
			WoW_Template::ErrorPage(404);
		}
		WoW_Template::SetMenuIndex('menu-media');
		WoW_Template::LoadTemplate('page_index');
	}
}
?>